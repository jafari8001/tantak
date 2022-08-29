<?php

namespace App\Models\Core;

use App\Models\BaseModel;

class ExceptionLog extends BaseModel
{
    protected $table = "exception_logs";
    public static $columns = [
        "id" => "exception_logs.id",
        "line" => "exception_logs.line",
        "code" => "exception_logs.code",
        "file" => "exception_logs.file",
        "status" => "exception_logs.status",
        "message" => "exception_logs.message",
        "user_username" => "users.username",
        "user_last_name" => "users.last_name",
        "user_first_name" => "users.first_name",
        "created_at" => "exception_logs.created_at",
        "created_by" => "exception_logs.created_by",
        "updated_at" => "exception_logs.updated_at"
    ];

    public static function search($request)
    {
        $search = BaseModel::beforeSearch($request, ExceptionLog::class);
        $query = $search['query']
            ->leftJoin('users', 'exception_logs.created_by', '=', 'users.id')
            ->select('exception_logs.*', 'users.username as user_username', 'users.first_name as user_first_name', 'users.last_name as user_last_name');

        return BaseModel::afterSearch($query, $search['paginate_num']);
    }

    public static function insert($exception, $isHttp = false, $user_agent_client = "Other")
    {
        try {
            $exceptionLog = new ExceptionLog();
            if ($exception != "") {
                $exceptionLog->message = json_encode($exception->getMessage());
                $exceptionLog->line = ($exception->getLine() !== null) ? $exception->getLine() : '';
                $exceptionLog->code = ($exception->getCode() !== null) ? $exception->getCode() : '';
                $exceptionLog->file = ($exception->getFile() !== null) ? $exception->getFile() : '';
                $exceptionLog->status = ($isHttp) ? $exception->getStatusCode() : 'No http status error';
            } else {
                $exceptionLog->message = "500";
                $exceptionLog->line = "";
                $exceptionLog->code = "";
                $exceptionLog->file = "";
                $exceptionLog->status = "";
            }

            //$exceptionLog->previous=$exception->getPrevious();
            //$exceptionLog->exception=$exception;
            $exceptionLog->user_agent_client = $user_agent_client;
            $exceptionLog->save();

            if ($exceptionLog->status == 'No http status error' || $exceptionLog->status == "500") {
                $message = "#باربری" . PHP_EOL . PHP_EOL .
                    "⛔⏰️ خطا " . PHP_EOL .
                    "متن خطا: " . $exceptionLog->message . PHP_EOL .
                    "فایل: " . $exceptionLog->file . PHP_EOL .
                    "خط: " . $exception->getLine() . PHP_EOL;

                sendTelegram($message);
            }
        } catch (\Throwable $th) {
        }
    }
}
