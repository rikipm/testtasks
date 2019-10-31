<?php


namespace rikipm;

//Link with 'require' instead of autoloader because its too small "project".
//Of course in real work this way will not be used.
require 'VkConversationsStatisticInterface.php';


class VkConversationsStatistic implements VkConversationsStatisticInterface
{
    const ROOT_URL = 'https://api.vk.com/method/';
    const OVERDUE_TIME = 15 * 60; //Time, after which conversation becomes overdue
    const API_VERSION = '5.52';

    private $access_token;
    private $date_from = 0;
    private $date_to = 999999999;

    /**
     * VkConversationsStatistic constructor.
     * @param string $access_token access_token for VK API
     */
    public function __construct($access_token)
    {
        $this->access_token = $access_token;
    }

    /**
     * Send GET request to VK api (v 5.52)
     *
     * @param string $method
     * @param array $data
     * @return \stdClass
     * @throws \Exception if API return error.
     */
    private function sendRequest($method, $data = [])
    {
        $link = self::ROOT_URL;
        $link .= $method;
        $link .= '?v=' . self::API_VERSION . '&';
        $link .= 'access_token=' . $this->access_token . '&';
        $link .= http_build_query($data); //Pass additional parameters

        $request = curl_init($link);

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
    private static function filterMessageStacks($messages)
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
    private static function filterFirstMessage($messages)
    {
        if ($messages[count($messages) - 1]->out == 1) {
            unset($messages[count($messages) - 1]);
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
    private static function filterLastMessage($messages)
    {
        if ($messages[0]->out == 0) {
            unset($messages[0]);
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
            $messages = self::filterMessageStacks($messages);

            foreach ($messages as $key => $message) {
                if (!($message->date >= $this->date_from and $message->date <= $this->date_to)) {
                    unset($messages[$key]);
                }
            }
            $messages = array_values($messages);

            //Ignore first message if it belongs to group
            $messages = self::filterFirstMessage($messages);

            //Ignore last message if group dont replied
            $messages = self::filterLastMessage($messages);

            for ($i = 0; $i < count($messages); $i += 2) {
                $reply_times[] = $messages[$i]->date - $messages[$i + 1]->date;
            }
        }

        return $reply_times;
    }

    public function setDatePeriod($date_from, $date_to)
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

            $message_date = $messages[count($messages) - 1]->date;
            if (!($message_date >= $this->date_from and $message_date <= $this->date_to)) {
                break;
            }

            $messages = self::filterMessageStacks($messages);

            //Ignore first message if it belongs to group
            $messages = self::filterFirstMessage($messages);

            //Ignore last message if group dont replied
            $messages = self::filterLastMessage($messages);

            for ($i = 0; $i < count($messages); $i += 2) {
                $reply_time = $messages[$i]->date - $messages[$i + 1]->date;
                if ($reply_time > self::OVERDUE_TIME) {
                    $overdue_conversations[] = $conversation->conversation;
                    break; //Prevent doubling
                }
            }
        }
        return $overdue_conversations;
    }
}
