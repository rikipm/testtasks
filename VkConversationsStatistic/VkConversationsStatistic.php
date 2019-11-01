<?php


namespace rikipm;

//Link with 'require' instead of autoloader because its too small "project".
//Of course in real work this way will not be used.
require 'VkConversationsStatisticInterface.php';


class VkConversationsStatistic implements VkConversationsStatisticInterface
{
    /** @var string */
    const ROOT_URL = 'https://api.vk.com/method/';

    /** @var string */
    const API_VERSION = '5.52';

    /**
     * Time, after which conversation becomes overdue
     * @var int
     */
    const OVERDUE_TIME = 15 * 60;

    /** @var string */
    private $access_token;

    /** @var int */
    private $date_from = 0;

    /** @var int */
    private $date_to = 999999999;

    /**
     * VkConversationsStatistic constructor.
     * @param string $access_token access_token for VK API
     */
    public function __construct(string $access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * @param int $date_from
     * @param int $date_to
     */
    public function setDatePeriod(int $date_from, int $date_to)
    {
        $this->date_from = $date_from;
        $this->date_to = $date_to;
    }

    /**
     * @return float|null
     */
    public function getAverageReplyTime()
    {
        $reply_times = $this->getReplyTimes();

        if (!$reply_times) {
            return null; //No specs what to return if messages not found
        }

        return array_sum($reply_times) / count($reply_times);
    }

    /**
     * @return int|null
     */
    public function getModeReplyTime()
    {
        $reply_times = $this->getReplyTimes();

        if (!$reply_times) {
            return null; //No specs what to return if messages not found
        }

        //Convert seconds to minutes
        foreach ($reply_times as $key => $reply_time) {
            $reply_times[$key] = (int)round($reply_time / 60); //Cant use intval because it rounds always floor
        }

        $frequencies = array_count_values($reply_times);
        return array_search(max($frequencies), $frequencies);
    }

    /**
     * @return array List of overdue conversation as stdClass objects
     */
    public function getOverdueConversations()
    {
        $overdue_conversations = [];

        $conversations = $this->sendRequest('messages.getConversations')->response->items;
        foreach ($conversations as $conversation) {
            $peer_id = $conversation->conversation->peer->id;
            //Messages ordered from newest to oldest!
            $messages = $this->sendRequest('messages.getHistory', ['peer_id' => $peer_id])->response->items;
            if (empty($messages)) {
                return null;
            }

            $message_date = $messages[count($messages) - 1]->date;
            if (!($message_date >= $this->date_from && $message_date <= $this->date_to)) {
                break;
            }

            $messages = $this->filterMessageStacks($messages);

            //Ignore first message if it belongs to group
            $messages = $this->filterFirstMessage($messages);

            //Ignore last message if group dont replied
            $messages = $this->filterLastMessage($messages);

            $messages_length = count($messages);
            for ($i = 0; $i < $messages_length; $i += 2) {
                $reply_time = $messages[$i]->date - $messages[$i + 1]->date;
                if ($reply_time > self::OVERDUE_TIME) {
                    $overdue_conversations[] = $conversation->conversation;
                    break; //Prevent duplicated conversations
                }
            }
        }
        return $overdue_conversations;
    }

    /**
     * Send GET request to VK api (v 5.52)
     *
     * @param string $method
     * @param array $data
     * @return \stdClass response
     * @throws \Exception if API return error.
     */
    private function sendRequest(string $method, array $data = [])
    {
        $url = self::ROOT_URL;
        $url .= $method;
        $url .= '?v=' . self::API_VERSION . '&';
        $url .= 'access_token=' . $this->access_token . '&';
        $url .= http_build_query($data);

        $request = curl_init($url);

        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);

        $data = curl_exec($request);
        curl_close($request);

        $data = json_decode($data);
        if ($data->error) {
            throw new \Exception($data->error->error_msg);
        }
        return $data;
    }

    /**
     * This function handle cases when peer (user or group) send several messages in a row.
     * Only first message in "stack" will be counted.
     *
     * @param array $messages
     * @return array $messages
     */
    private function filterMessageStacks(array $messages)
    {
        foreach ($messages as $key => $message) {
            if ($message->out == $messages[$key - 1]->out) {
                unset($messages[$key - 1]);
            }
        }
        $messages = array_values($messages);
        return $messages;
    }

    /**
     * This function will delete first message if it belongs to group.
     *
     * @param array $messages
     * @return array $messages
     */
    private function filterFirstMessage(array $messages)
    {
        if ($messages[count($messages) - 1]->out === 1) {
            array_pop($messages);
            $messages = array_values($messages);
        }
        return $messages;
    }

    /**
     * This function will delete last message if it belongs to user.
     *
     * @param array $messages
     * @return array $messages
     */
    private function filterLastMessage(array $messages)
    {
        if ($messages[0]->out === 0) {
            array_shift($messages);
            $messages = array_values($messages);
        }
        return $messages;
    }

    /**
     * Return list of times between user message and group reply
     *
     * @return array|null
     */
    private function getReplyTimes()
    {
        $reply_times = [];

        $conversations = $this->sendRequest('messages.getConversations')->response->items;
        foreach ($conversations as $conversation) {
            $peer_id = $conversation->conversation->peer->id;
            //Messages ordered from newest to oldest!
            $messages = $this->sendRequest('messages.getHistory', ['peer_id' => $peer_id])->response->items;
            if (empty($messages)) {
                return null;
            }

            $messages = $this->filterMessageStacks($messages);

            array_filter($messages, function ($message) {
                return $message->date >= $this->date_from && $message->date <= $this->date_to;
            });

            $messages = array_values($messages);

            //Ignore first message if it belongs to group
            $messages = $this->filterFirstMessage($messages);

            //Ignore last message if group dont replied
            $messages = $this->filterLastMessage($messages);

            $messages_length = count($messages);
            for ($i = 0; $i < $messages_length; $i += 2) {
                $reply_times[] = $messages[$i]->date - $messages[$i + 1]->date;
            }
        }
        return $reply_times;
    }
}
