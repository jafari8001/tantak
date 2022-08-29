<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function adminReport(Request $request)
    {
        $this->permission("user/root");

        $data = [];

        return $this->response(200, $data);
    }
}
