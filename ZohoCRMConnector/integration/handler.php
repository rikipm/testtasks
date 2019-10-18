<?php

function sendPost($url, $data)
{
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === false) {
        return false;
    }

    return(json_decode($result, true));
}

if (isset($_GET["error"])) {
    if ($_GET["error"] == "access_denied") {
        die("Ошибка: Вы не предоставили доступ");
    }
}

$grant_token = $_GET["code"];

$client_id = $_COOKIE["client_id"];
$secret = $_COOKIE["secret"];
$redirect_url = $_COOKIE["redirect_url"];

$tokens = sendPost("https://accounts.zoho.com/oauth/v2/token", ["code" => $grant_token, "redirect_uri" => $redirect_url, "client_id" => $client_id, "client_secret" => $secret, "grant_type" => "authorization_code"]);
if (isset($tokens["refresh_token"])) {
    file_put_contents("apikeys", serialize(["client_id" => $client_id, "secret" => $secret, "refresh_token" => $tokens["refresh_token"]]));
    echo("<p>Процесс интеграции завершен.</p>");
    echo("<p>В файле apikeys лежат ключи для доступа к контактам, сделкам и лидам. Не пересылайте его никому!</p>");
} else {
    echo("<p>ZohoCRM не вернула Refresh Token. Скорее всего вы пытаетесь интегрировать сервис второй раз или первый процесс интеграции был прерван. Начните ВЕСЬ процесс сначала удалив старый клиент и создав новый<p>");
}
