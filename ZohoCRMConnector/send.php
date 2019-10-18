<?php

include_once "ZohoConnector.php";

$name = explode(" ", $_GET["name"])[1];
$surname = explode(" ", $_GET["name"])[0];
$phone = $_GET["phone"];
$email = $_GET["email"];
$company = $_GET["company"];
$source = $_GET["source"];

if (!file_exists("integration/apikeys")) {
    die("Вы не произвели процесс интеграции");
}

$connector = new ZohoConnector("integration/apikeys");

$leadsList = $connector->getLeadsList();

$LeadAlreadyExistFlag = false;
if ($leadsList) {
    foreach ($leadsList as $i) {
        if ($i["Phone"] == $phone or $i["Email"] == $email) {
            $lead_id = $i["id"];
            $lead_owner = $i["Owner"]["id"];

            $connector->convertLead($lead_id, $lead_owner, "Сделка с " . $i["Company"]);

            $LeadAlreadyExistFlag = true;
        }
    }
}

if (!$LeadAlreadyExistFlag) {
    $connector->addLead($name, $surname, $phone, $email, $company, $source);
}
