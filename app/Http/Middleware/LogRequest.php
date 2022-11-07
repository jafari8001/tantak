<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Core\RequestLog;

class LogRequest
{
    public function handle($request, Closure $next)
    {
        if ($request->header('user-agent-client') == null && $request->header('user-agent-client') == null) {
            //            throw new AuthException();
        }
        $code = RequestLog::insert($request);
        $request->attributes->add(['log_id' => $code]);
        return $next($request);
    }

    public function terminate($request, $response)
    {
        if($request->get("log_id")!=null){
            RequestLog::updateItem($request, $response);
        }
    }
}
