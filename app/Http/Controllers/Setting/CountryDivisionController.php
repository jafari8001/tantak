<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting\CountryDivision;

class CountryDivisionController extends Controller
{
    public $default_search = false;
    public $model = CountryDivision::class;
    public $validtionItem = [["name", "level"]];
    public $permissionItem = "country_division";

    public function index(Request $request)
    {
        $model = CountryDivision::search($request, CountryDivision::class);
        return $this->response(200, $model);
    }
}

