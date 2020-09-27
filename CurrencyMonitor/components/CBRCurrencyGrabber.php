<?php

namespace app\components;

use SimpleXMLElement;

/**
 * Class CBRCurrencyGrabber
 * @package app\components
 */
class CBRCurrencyGrabber
{
    /**
     * @var string
     */
    public string $source;
    /**
     * @var string
     */
    public string $decimal_separator = '.';

    /**
     * Get raw data from source
     *
     * @return string
     */
    private function getRawData(): string
    {
        return file_get_contents($this->source);
    }

    /**
     * parse currency data from XML string to array
     *
     * @param string $xml
     * @return array
     */
    public function parseXMLData(string $xml): array
    {
        $data = new SimpleXMLElement($xml);
        $valCurs = $data->children();

        $parsed_data = [];
        foreach ($valCurs as $item) {
            $item = (array)$item;
            $item = str_replace(',', $this->decimal_separator, $item);
            $parsed_data[] = $item;
        }

        return $parsed_data;
    }

    /**
     * @return array
     */
    public function getCurrencies(): array
    {
        $xml = $this->getRawData();
        return $this->parseXMLData($xml);
    }
}