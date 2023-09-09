<?php

namespace App\Services\SMS;

class KavenegarService {
    private $api_key;

    function __construct() 
    {
        $this->api_key = env("SMS_API_KEY");
    }

    function send($phone,$message = null,$template = null,$token1 = null,$token2 = null,$token3 = null,$token4 = null)
    {
        if ($template == null) {
            $template = env("SMS_TEMPLATE");
        }
        $url = "https://api.kavenegar.com/v1/".$this->api_key."/verify/lookup.json?token=$token1&receptor=$phone&template=$template";
        if ($token2 != null) {
            $url .= "&token2=$token2";
        }
        if ($token3 != null) {
            $url .= "&token3=$token3";
        }
        if ($token4 != null) {
            $url .= "&token10=$token4";
        }
        file_get_contents($url);
    }
}