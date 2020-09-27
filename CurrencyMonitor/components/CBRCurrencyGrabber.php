<?php

namespace app\components;

use SimpleXMLElement;

class CBRCurrencyGrabber
{
    public string $source;

    private function getRawData()
    {
        return file_get_contents($this->source);
    }

    public function parseData($rawData)
    {
        $data = new SimpleXMLElement($rawData);
        $valCurs = $data->children();

        $parsed_data = [];
        foreach ($valCurs as $item) {
            $item = (array)$item;
            $item = str_replace(',', '.', $item);
            $parsed_data[] = $item;
        }

        return $parsed_data;
    }

    public function getCurrencies()
    {
        $raw_data = $this->getRawData();
        $data = $this->parseData($raw_data);
        return $data;
    }
}