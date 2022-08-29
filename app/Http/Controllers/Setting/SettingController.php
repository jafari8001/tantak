<?php

namespace App\Http\Controllers\Setting;

use App\Models\Setting\Setting;
use App\Http\Controllers\Controller;


class SettingController extends Controller
{
    public $model = Setting::class;
    public $permissionItem = "settings";
    public $validtionItem = [["key", "value"]];
}
