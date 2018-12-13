<?php

namespace Wienkit\BolPlazaClient\Requests;

class CurlHttpRequest
{
    /**
     * @var Curl Object
     */
    protected $ch = null;

    public function __construct($url)
    {
        $this->ch = curl_init($url);
    }

    public function setOption($option, $value)
    {
        curl_setopt($this->ch, $option, $value);
    }

    public function execute()
    {
        return curl_exec($this->ch);
    }

    public function getInfo($option = null)
    {
        return curl_getinfo($this->ch, $option);
    }

    public function close()
    {
        curl_close($this->ch);
    }

    public function getErrorNumber()
    {
        return curl_errno($this->ch);
    }
}