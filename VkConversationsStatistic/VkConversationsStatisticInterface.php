<?php


namespace rikipm;



interface VkConversationsStatisticInterface
{
    /**
     * VkConversationStatistic constructor.
     * @param string $access_token
     */
    public function __construct(string $access_token);

    /**
     * @param \DatePeriod $date_period
     */
    public function setDatePeriod(int $date_from, int $date_to);

    /**
     * @return int
     */
    public function getAverageReplyTime();

    /**
     * Find mode of reply times with 1 minute accuracy
     *
     * @return int
     */
    public function getModeReplyTime();

    /**
     * Return list of conversations where group replied after 15 minutes or more at least once.
     * @return \stdClass
     */
    public function getOverdueConversations();
}
