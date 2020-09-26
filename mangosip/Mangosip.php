<?php

/**
 * Класс для получения данных Mangosip
 */
class Mangosip
{
    private $root_url = 'https://app.mango-office.ru/vpbx/';

    private $api_key = "";
    private $api_salt = "";

    private $options = [
        CURLOPT_ENCODING       => "",
        CURLOPT_AUTOREFERER    => true,
        CURLOPT_TIMEOUT        => 120,
        CURLOPT_MAXREDIRS      => 10,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST=>false,
    ];

    protected function curlPost($url, $array = null)
    {
        $curl = curl_init();

        curl_setopt_array($curl, $this->options);
        curl_setopt($curl, CURLOPT_URL, $this->root_url.$url);


        if (isset($array)) {
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $array);
        }

        $result = curl_exec($curl);

        if (!$result) {
            $errno = curl_errno($curl);
            $error = curl_error($curl);
        }

        curl_close($curl);

        if (isset($errno) && isset($error)) {
            throw new Exception($error, $errno);
        }

        return $result;
    }

    public function setApiKey($api_key)
    {
        $this->api_key = $api_key;
    }

    public function setApiSalt($api_salt)
    {
        $this->api_salt = $api_salt;
    }

    //Время следует передавать в формате unix timestamp
    public function getCallsStatistic($date_from, $date_to)
    {
        $data = array(
            "date_from" => $date_from,
            "date_to" => $date_to,
            "from" => array(
                "extension"=>"",
                "number" => ""
            ),
            "to"=> array(
                "extension"=>"",
                "number"=>""
            ),
            "fields" => "start,finish,from_number,to_number,entry_id"
    );
        $json = json_encode($data);
        $sign = hash('sha256', $this->api_key . $json . $this->api_salt);
        $postdata = array(
            'vpbx_api_key' => $this->api_key,
            'sign' => $sign,
            'json' => $json
        );
        $result = $this->curlPost("stats/request", $postdata);
        $result = json_decode($result);
        $requestKey = $result->{'key'};

        //Второй запрос в котором мы получаем статистику по ключу

        $data = array(
            "key" => $requestKey
        );
        $json = json_encode($data);
        $sign = hash('sha256', $this->api_key . $json . $this->api_salt);
        $postdata = array(
            'vpbx_api_key' => $this->api_key,
            'sign' => $sign,
            'json' => $json
        );
        $result = $this->curlPost("stats/result", $postdata);
        //Обрабатываем сырой результат
        $result = explode("\n", $result); //Разбиваем строку в массив, в каждом элементе информация по одному вызову в виде строки
        array_pop($result); //Из-за разбивки по символу \n последний элемент всегда пустой. Удаляем его

        foreach ($result as $key=>$row) { //Разбиваем каждую строку внутри массива на еще один массив. Каждый элемент - колонка
            $result[$key] = explode(";", $row);
        }

        $assoc = array(); //Ассоциативный массив который мы будем возвращать
        foreach ($result as $key=>$row) {
            $assoc[$key]["start"] = $row[0];
            $assoc[$key]["duration"] = $row[1] - $row[0];
            $assoc[$key]["from_number"] = $row[2];
            $assoc[$key]["to_number"] = $row[3];
            $assoc[$key]["id"] = $row[4];
            //MangoOffice передает уникальный идентификатор звонка в виде строки символов.
            //Если вам нужно уникальное число (например для ключа в БД) расскоментируйте следующую строку
            //$assoc[$key]["id"] = crc32($row[4]);
        }
        return($assoc);
    }
}
