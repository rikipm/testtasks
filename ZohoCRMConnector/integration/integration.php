<?php

$client_id = $_GET["client_id"];
$secret = $_GET["secret"];
$redirect_url = $_GET["redirect_url"];

setcookie("client_id", $client_id);
setcookie("secret", $secret);
setcookie("redirect_url", $_GET["redirect_url"]);

header("Location: https://accounts.zoho.com/oauth/v2/auth?scope=ZohoCRM.modules.Leads.ALL,ZohoCRM.modules.Contacts.ALL,ZohoCRM.modules.Deals.ALL&client_id=".$client_id."&response_type=code&access_type=offline&redirect_uri=".$redirect_url);
