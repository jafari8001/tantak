<?php

namespace App\Services\SMS;
use App\Exceptions\OtherException;
use App\Models\Core\ExceptionLog;

/**
 * .env constants
 *      General:
 *          - SMS_PANEL = MelliPayamak or Kavenegar or NikSms
 *          - SMS_TEMPLATE --> default sms template only for mellipayamak and kavenegar
 *      MelliPayamak:
 *          - SMS_PANEL_USERNAME
 *          - SMS_PANEL_PASSWORD
 *      Kavenegar:
 *          - SMS_API_KEY
 *      NikSms:
 *          - SMS_PANEL_USERNAME
 *          - SMS_PANEL_PASSWORD
 */

class sendSMS {
    public $sms_service = null;

    function __construct() 
    {
        $service_name = env('SMS_PANEL','MelliPayamak');
        if($service_name == 'MelliPayamak'){
            if (class_exists('App\Services\SMS\MelliPayamakService')) {
                $this->sms_service = new MelliPayamakService();
            }else{
                throw new OtherException('MelliPayamkService have not imported');
            }
        }else if($service_name == 'Kavenegar'){
            if (class_exists('App\Services\SMS\KavenegarService')) {
                $this->sms_service = new KavenegarService();
            }else{
                throw new OtherException('KavenegarService have not imported');
            }
        }else if($service_name == 'NikSms'){
            if (class_exists('App\Services\SMS\NikSmsService')) {
                $this->sms_service = new NikSmsService();
            }else{
                throw new OtherException('NikSmsService have not imported');
            }
        }
    }

    function send($phone,$message,$template = null,$token1 = null,$token2 = null,$token3 = null,$token4 = null)
    {
        try{
            return $this->sms_service->send(
                $phone,
                $message,
                $template,
                $token1,
                $token2,
                $token3,
                $token4
            );
        }catch(\Throwable $th){
            if(env('LOG_SMS_ERRORS' , true)){
                ExceptionLog::insert($th);
            }
        }
    }
}