<?php

namespace App\Exceptions;

use Exception;
use App\Models\Core\ExceptionLog;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    protected $dontReport = [];

    protected $dontFlash = [
        'password',
        'current_password',
        'password_confirmation',
    ];

    public function render($request, $exception)
    {
        if ($exception instanceof AuthException) {
            $message = $exception->getMessage();
            if ($message == null) {
                $message = __('http.401');
            }
            return responseSend(401, [], "", $message);
        }
        if ($exception instanceof ThrottleRequestsException) {
            return responseSend(403, [], "", __('http.throttle'));
        }
        if ($exception instanceof PermissionException) {
            return responseSend(403, [], "", __('http.403'));
        }
        if ($exception instanceof ValidatorException) {
            return responseSend(412, [], "", __('http.412'));
        }
        if ($exception instanceof DateException) {
            return responseSend(412, [], "", __('http.412'));
        }
        if ($exception instanceof NotFindException) {
            return responseSend(404, [], "", __('http.404'));
        }
        if ($exception instanceof OtherException) {
            return responseSend(400, [], "", $exception->getMessage());
        }
        if ($this->isHttpException($exception)) {
            if ($exception->getStatusCode() == 404) {
                return responseSend(404, [], "", __('http.404'));
            }
            if ($exception->getStatusCode() == 500) {
                $this->insertException($exception, $request);
                return responseSend(500, [], "", __('http.500'));
            }
        }
        if (env('APP_DEBUG')) {
            $this->insertException($exception, $request);
            return responseSend(500, [
                $exception->getMessage(),
                $exception->getFile(),
                $exception->getLine(),
                $exception->getCode()
            ], "", $exception->getMessage());
        }
        $this->insertException($exception, $request);
        return responseSend(500, [], "", __('http.500'));
    }

    public function register()
    {
    }

    public function insertException($exception, $request = null)
    {
        try {
            $agent = 'Other';
            if ($request) {
                $agent = $request->header('user-agent-client');
            }
            ExceptionLog::insert($exception, $this->isHttpException($exception), $agent);
        } catch (\Exception $ex) {
        }
    }
}
