<?php

namespace App\Models\User;

use Carbon\Carbon;
use App\Models\BaseModel;
use App\Exceptions\OtherException;

class OtpCode extends BaseModel
{
    public static function sendCode($username, $ip)
    {
        OtpCode::checkCount($username);
        OtpCode::clean($username);
        $code = rand(1000, 9999);

        $model = new OtpCode();
        $model->ip = $ip;
        $model->code = $code;
        $model->username = checkUsername($username);
        $model->save();

        sendOtp($username, $code);
        return $model;
    }

    public static function checkCode($username, $code, $ip)
    {
        $model = OtpCode::where([
            ["ip", '=', $ip],
            ["code", '=', $code],
            ["username", '=', checkUsername($username)],
            ['created_at', '>', Carbon::now()->subMinutes(5)]
        ])
            ->orderBy("created_at", 'DESC')
            ->first();

        if (!isset($model->id)) {
            throw new OtherException(__('user.invalid_otp_code'));
        }
        OtpCode::clean($model->username);
        return $username;
    }

    public static function clean($username)
    {
        OtpCode::where([
            ["username", '=', checkUsername($username)]
        ])->update([
            "deleted_at" => Carbon::now()
        ]);
    }

    public static function checkCount($username)
    {
        $count = OtpCode::withTrashed()
            ->where([
                ["username", '=', checkUsername($username)],
                ['created_at', '>', Carbon::now()->subMinutes(1)]
            ])->count();

        if ($count > 2) {
            throw new OtherException(__('otp.count'));
        }
    }
}
