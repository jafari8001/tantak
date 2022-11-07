<?php

namespace App\Models\Core;

use App\Models\BaseModel;

class RequestLog extends BaseModel
{
    protected $table = "logs";
    public static $singel_sort = true;
    public static $columns = [
        "id" => "logs.id",
        "ip" => "logs.ip",
        "ulr" => "logs.ulr",
        "status" => "logs.status",
        "method" => "logs.method",
        "user_agent" => "logs.user_agent",
        "end_status" => "logs.end_status",
        "user_agent_client" => "logs.user_agent_client",
        "user_username" => "users.username",
        "user_last_name" => "users.last_name",
        "user_first_name" => "users.first_name",
        "created_at" => "logs.created_at",
    ];

    public static function search($request)
    {
        $search = BaseModel::beforeSearch($request, RequestLog::class);
        $search['query']->leftJoin('users', 'logs.created_by', '=', 'users.id')
            ->select('logs.*', 'users.username as user_username', 'users.first_name as user_first_name', 'users.last_name as user_last_name');
        return BaseModel::afterSearch($search['query'], $search['paginate_num'], $request);
    }

    public static function insert($request)
    {
        try {
            $requestLog = new RequestLog();
            $requestLog->ulr = $request->getRequestUri();
            $requestLog->ip = getRealIP($request);
            $requestLog->method = $request->method();
            $requestLog->status = app('Illuminate\Http\Response')->status();
            $requestLog->user_agent = $request->header('User-Agent');
            $requestLog->user_agent_client = $request->header('user-agent-client') ?? "Other";
            $requestLog->save();
            return $requestLog->id;
        } catch (\Exception $ex) {
        }
    }

    public static function updateItem($request, $response)
    {
        try {
            $content = json_decode($response->getContent());
            $status = $content->status  ?? "";

            $model = RequestLog::find($request->get("log_id"));
            $model->end_status = $status;
            $model->token = $request->bearerToken();
            $model->message = $content->message  ?? "";
            if ($status != 200) {
                $model->request = $request->getContent();
                $model->response = $response->getContent();
            }
            if (auth()->check()) {
                $model->created_by = auth()->user()->id;
            }
            $model->save();
        } catch (\Exception $ex) {
        }
    }
}
