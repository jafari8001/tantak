<?php

namespace App\Http\Controllers\Core;

use App\Models\Core\Upload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * @group Core
 * @subgroup Upload
 */
class UploadController extends Controller
{
    public $model = Upload::class;
    public $permissionItem = "upload";
    public $validtionItem = [[], [], ["file" => "required|image"]];

    /**
     * POST insert
     *       
     * @bodyParam file file required No-example
     */
    public function store(Request $request)
    {
        $this->validator($request, [], [], ["file" => "required|image"]);

        $data = $this->model::insert($request);
        return $this->response(200, $data);
    }

    public function secret($path, $name, $type)
    {
        return \Illuminate\Support\Facades\Storage::download('/' . $path . '/' . $name . '.' . Upload::getUploadKey($type));
    }
}
