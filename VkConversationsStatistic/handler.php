<?php

use rikipm\VkConversationsStatistic;

require 'VkConversationsStatistic.php';

$date_from = strtotime($_POST['date_from']);
$date_to = strtotime($_POST['date_to']);
$access_token = $_POST['access_token'];

$vk_stat = new VkConversationsStatistic($access_token);

$vk_stat->setDatePeriod($date_from, $date_to);
?>

<head>
    <title>VK Statistic</title>
</head>
<body>
    <p>Среднее время ответа: <?= $vk_stat->getAverageReplyTime()?> сек.</p>
    <p>Мода времени ответа: <?= $vk_stat->getModeReplyTime()?> мин.</p>
    <p>ID диалогов где время как минимум одного ответа превысило 15 минут:</p>
    <ul>
        <?php foreach ($vk_stat->getOverdueConversations() as $conversation) : ?>
            <li><?=$conversation->peer->id?></li>
        <?php endforeach; ?>
    </ul>
</body>
