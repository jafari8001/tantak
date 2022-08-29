<?php

namespace App\Http\Controllers\Core;

use App\Models\Core\ExceptionLog;
use App\Http\Controllers\Controller;

class ExceptionLogController extends Controller
{
    public $default_search = false;
    public $model = ExceptionLog::class;
    public $permissionItem = "exception_log";
}
