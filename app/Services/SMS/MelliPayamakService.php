<?php

namespace App\Services\SMS;
use Melipayamak\MelipayamakApi;

class MelliPayamakService {
    private $username;
    private $password;

    function __construct() 
    {
        $this->username = env("SMS_PANEL_USERNAME");
        $this->password = env("SMS_PANEL_PASSWORD");
    }

    function send($phone,$message,$template = null,$token1 = null,$token2 = null,$token3 = null,$token4 = null)
    {
        if ($template == null) {
            $template = env("SMS_TEMPLATE");
        }
        $api = new MelipayamakApi($this->username, $this->password);
        $smsSoap = $api->sms('soap');
        $smsSoap->sendByBaseNumber($message, $phone, $template);
    }
}