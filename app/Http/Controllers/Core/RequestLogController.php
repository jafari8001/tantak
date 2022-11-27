<?php

namespace App\Http\Controllers\Core;

use App\Models\Core\RequestLog;
use App\Http\Controllers\Controller;

/**
 * @group Monitoring
 * @subgroup RequestLog
 */
class RequestLogController extends Controller
{
    public $default_search = false;
    public $model = RequestLog::class;
    public $permissionItem = "request_log";
}