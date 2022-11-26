<?php

namespace App\Models\User;

use Carbon\Carbon;
use App\Models\BaseModel;
use Illuminate\Support\Facades\DB;

class AuthToken extends BaseModel
{
    public static $columns = [
        "id" => "auth_tokens.id",
        "ip" => "auth_tokens.ip",
        "user_agent" => "auth_tokens.user_agent",
        "expired_token_at" => "auth_tokens.expired_token_at",
        "username" => "users.username",
        "last_name" => "users.last_name",
        "first_name" => "users.first_name",
        "national_code" => "users.national_code",
        "created_at" => "auth_tokens.created_at",
        "created_by" => "auth_tokens.created_by",
        "updated_at" => "auth_tokens.updated_at"
    ];

    public static function search($request)
    {
        $search = BaseModel::beforeSearch($request, AuthToken::class);
        $query = $search['query']
            ->withTrashed()
            ->join('users', 'users.id', '=', 'auth_tokens.created_by')
            ->select(
                'auth_tokens.ip',
                'auth_tokens.created_at',
                'auth_tokens.user_agent',
                'auth_tokens.expired_token_at',
                'auth_tokens.deleted_at as deleted',
                'users.username',
                'users.last_name',
                'users.first_name',
                'users.national_code',
            );

        if (Action::permission('auth_token/root') && isset($request->user_id)) {
            $query = $query->where('auth_tokens.created_by', '=', $request->user_id);
        } else {
            $query = $query->where('auth_tokens.created_by', '=', auth()->user()->id);
        }
        return BaseModel::afterSearch($query, $search['paginate_num']);
    }

    public static function setToken($request, $created_by)
    {
        $token = quickRandom(0, true);
        if (!env('APP_DEBUG')) {
            DB::table("auth_tokens")
                ->where([
                    ["created_by", "=", $created_by],
                    ["user_agent_client", '=', $request->header('User-Agent-Client')],
                ])
                ->update(["deleted_at" => date("Y-m-d")]);
        }

        $model = new AuthToken();
        $model->ip = getRealIP($request);
        $model->auth_token = $token;
        $model->created_by = $created_by;
        $model->user_agent = $request->header('User-Agent');
        $model->user_agent_client = $request->header('User-Agent-Client');
        $model->expired_token_at = Carbon::now()->add(env("DAY_TOKEN_EXPIR"), 'day')->format("Y-m-d");
        $model->save();

        return $token;
    }

    public static function expirToken($token, $created_by)
    {
        DB::table("auth_tokens")
            ->where([
                ["auth_token", "=", $token],
                ["created_by", "=", $created_by],
            ])
            ->update(["deleted_at" => date("Y-m-d")]);
    }

    public static function checkToken($request, $token)
    {
        return AuthToken::where("auth_token", '=', $token)
            ->whereIn("user_agent",[$request->header('User-Agent'),''])   
            ->whereIn("user_agent_client",[$request->header('User-Agent-Client'),''])
            ->where("expired_token_at", ">", date('Y-m-d'))
            ->orderBy("created_at", 'DESC')
            ->first();
    }

    public static function checkTokenTwoDay($request, $token)
    {
        return AuthToken::where([
            ["auth_token", '=', $token],
            ["user_agent", '=', $request->header('User-Agent')],
            ["user_agent_client", '=', $request->header('User-Agent-Client')],
            ['expired_token_at', '>', Carbon::now()->add(2, 'day')->format("Y-m-d")]
        ])
            ->orderBy("created_at", 'DESC')
            ->first();
    }
}
