<?php

use Carbon\Carbon;
use App\Exceptions\ValidatorException;

function toGregorian($in_date, $time = false, $sendTime = false, $explode_by = "/", $return_by = "-")
{
    try {
        $time_show = "";
        if ($time) {
            $date_expload_time = explode(' ', $in_date);
            $time_show = $date_expload_time[1] ?? "";
            $date = $date_expload_time[0];
        } else {
            $date = $in_date;
        }
        if ($date == '') {
            throw new \App\Exceptions\DateException();
        }
        $date = explode($explode_by, convertNumbers($date));
        if (!isset($date[2]) || $date[0] < 1300) {
            throw new \App\Exceptions\DateException();
        }
        $res = \Morilog\Jalali\CalendarUtils::toGregorian($date[0], $date[1], $date[2]);
        changeNumberDigits($res[1]);
        changeNumberDigits($res[2]);
        if ($sendTime) {
            return implode($return_by, $res) . ' ' . $time_show;
        } else {
            return implode($return_by, $res);
        }
    } catch (\Exception $ex) {
        throw new \App\Exceptions\DateException();
    }
}

function toJalali($in_date, $time = true, $sendTime = false, $return_by = "/", $show_error = true)
{
    try {
        $time_show = "";
        if ($time) {
            $date_expload_time = explode('T', $in_date);
            $time_show = $date_expload_time[1] ?? "";
            $date = $date_expload_time[0];
        } else {
            $date = $in_date;
        }
        if ($date == '') {
            if ($show_error) {
                throw new \App\Exceptions\DateException();
            } else {
                return '';
            }
        }
        $date = explode('-', convertNumbers($date));
        if (!isset($date[2]) || $date[0] < 1900) {
            if ($show_error) {
                throw new \App\Exceptions\DateException();
            } else {
                return '';
            }
        }
        $res = \Morilog\Jalali\CalendarUtils::toJalali($date[0], $date[1], $date[2]);
        changeNumberDigits($res[1]);
        changeNumberDigits($res[2]);
        if ($sendTime) {
            return implode($return_by, $res) . ' ' . $time_show;
        } else {
            return implode($return_by, $res);
        }
    } catch (\Exception $ex) {
        if ($show_error) {
            throw new \App\Exceptions\DateException();
        } else {
            return '';
        }
    }
}

function convertNumbers($date)
{
    return \Morilog\Jalali\CalendarUtils::convertNumbers($date, true);
}

function changeNumberDigits(&$number, $digits = 2)
{
    $tenDigits = 1;
    for ($i = 0; $i < ($digits - 1); $i++) {
        $tenDigits *= 10;
        if ($number < $tenDigits) {
            $number = '0' . $number;
        }
    }
}

function roles()
{
    $roles = [];
    foreach (auth()->user()->roles as $role) {
        array_push($roles, $role->id);
    }
    return $roles;
}

function curl($url, $body = [], $headers = [], $method = "POST")
{
    try {
        if ($headers == []) {
            $headers = [
                'Content-Type: application/json'
            ];
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        if ($method == "POST") {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body, true));
        } else {
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        }
        curl_setopt($ch, CURLOPT_TIMEOUT_MS, 2000);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    } catch (\Exception $ex) {
    }
}

function quickRandom($length = 16, $jwt = false)
{
    $pool = 'ryj012sdv34dsv56789abcdefghijklmnopewfqrstuvwxyzA452BCDEFGHIefJKLMNOPQRS77TUVWXYZrgre7';
    if (!$jwt) {
        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length) . date('md');
    }
    return "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9" .
        substr(str_shuffle(str_repeat($pool, 5)), 0, 10) . "." .
        "zdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkpvaG4gR" .
        substr(str_shuffle(str_repeat($pool, 5)), 0, 15) . "." .
        substr(str_shuffle(str_repeat($pool, 5)), 0, 25) . date('Ym') .
        substr(str_shuffle(str_repeat($pool, 5)), 0, 15) . date('dh') .
        substr(str_shuffle(str_repeat($pool, 5)), 0, 35) . date('ms') .
        substr(str_shuffle(str_repeat($pool, 5)), 0, 55);
}

function responseFrame($status = 200, $data = [], $error = '', $msg = "", $patch = [])
{
    if ($data == 'error') {
        $status = 500;
        $msg = __('http.500');
    } elseif ($data == 'permission') {
        $status = 403;
        $msg = __('http.403');
    }
    if ($status == 412) {
        $status = 412;
        if ($msg == "") {
            $msg = __('messages.errors.412');
        }
    }
    return [
        'status' => $status,
        'error' => $error,
        'message' => $msg,
        'data' => $data,
        'patch' => $patch,
        'date' => Carbon::now()
    ];
}

function responseSend($status = 200, $data = [], $error = '', $msg = "", $permission = [])
{
    return response(responseFrame($status, $data, $error, $msg, $permission));
}

function checkUsername($username)
{
    $username = strval($username);
    $username = strtolower($username);
    $username = str_replace(' ', '', $username);
    if (checkIsPhone($username) || checkIsEmail($username)) {
        return $username;
    }
    throw new ValidatorException();
}

function checkIsPhone($phone, $exception = false)
{
    $pattern = "/09\d{9,9}/i";
    $check = preg_match($pattern, $phone) == 1 && strlen($phone) == 11;
    if ($check) {
        return true;
    }
    if ($exception) {
        throw new ValidatorException();
    }
    return false;
}

function checkIsEmail($email, $exception = false)
{
    $pattern = '/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i';
    $check = preg_match($pattern, $email) == 1;
    if ($check) {
        return true;
    }
    if ($exception) {
        throw new ValidatorException();
    }
    return false;
}

function sendOtp($username, $message)
{
    if (checkIsPhone($username)) {
        return sendSMS($username, env("SMS_TEMP_CODE"), ["VerificationCode" => $message]);
    }
    if (checkIsEmail($username)) {
        return $username;
    }
}

function sendTelegram($message, $channel = null, $botKey = null)
{
    if (env('APP_DEBUG')) {
        return;
    }
    try {
        $channel_id = env("TELE_CHAT_ID_LOG");
        if ($channel) {
            $channel_id = $channel;
        }
        $bot_key = env("TELEGRAM_KEY_LOG");
        if ($botKey) {
            $bot_key = $botKey;
        }
        $url = "http://49.12.226.68:8012?token=" . $bot_key . "&chatId=" . $channel_id . "&text=" . urlencode($message);
        file_get_contents($url);
    } catch (\Exception $exception) {
    }
}

function sendSMS($username, $template_id, $params)
{
    if (env('APP_DEBUG')) {
        return;
    }
    try {
    } catch (\Throwable $th) {
    }
}

function getAdditionalErrorMessage()
{
    return '@sifb71 @mrae_ir';
}

function getRealIP($request = null)
{
    $ip = '';
    if ($request != null) {
        $ip = $request->ip();
    }
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } elseif (!empty($_SERVER['REMOTE_ADDR'])) {
        $ip = $_SERVER['REMOTE_ADDR'];
    } else {
        $ip = $_SERVER['AR_REAL_IP'];
    }

    return $ip;
}
