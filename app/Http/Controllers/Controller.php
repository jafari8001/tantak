<?php

namespace App\Http\Controllers;

use App\Models\User\Action;
use Illuminate\Http\Request;
use App\Exceptions\NotFindException;
use App\Exceptions\ValidatorException;
use App\Exceptions\PermissionException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    public $model;
    public $validtionItem;
    public $permissionItem;
    public $default_show = true;
    public $default_search = true;
    public $default_destroy = true;
    use AuthorizesRequests, ValidatesRequests;

    public function errorr($exception)
    {
        return $this->response(500, [], [], __('http.500'));
    }

    public function response($status = 200, $data = [], $patch = [], $msg = "", $error = '')
    {
        return responseFrame($status, $data, $error, $msg, $patch);
    }

    public function permission($action)
    {
        if (!auth()->check() || !Action::permission($action)) {
            throw new PermissionException();
        }
    }

    public function validator($request, $string = [], $numeric = [], $all_fields = [])
    {
        foreach ($string as $item) {
            $all_fields[$item] = 'required|max:250';
        }
        foreach ($numeric as $item) {
            $all_fields[$item] = 'required|numeric';
        }
        $validation = Validator::make($request->all(), $all_fields);
        if ($validation->fails()) {
            throw new ValidatorException();
        }
    }


    //CRUD
    private function checkCRUD()
    {
        if ($this->model == null) {
            throw new NotFindException();
        }
    }

    private function checkCRUDPermission($action)
    {
        if ($this->permissionItem != null) {
            $this->permission($this->permissionItem . '/' . $action);
        }
    }

    private function checkCRUDValidator($request, $other = [], $only_other = false)
    {
        if (!$only_other && $this->validtionItem != null) {
            if (isset($this->validtionItem[0])) {
                $this->validator($request, $this->validtionItem[0]);
            }
            if (isset($this->validtionItem[1])) {
                $this->validator($request, [], $this->validtionItem[1]);
            }
            if (isset($this->validtionItem[3])) {
                $this->validator($request, [], [], $this->validtionItem[3]);
            }
        }
        if (count($other) > 0) {
            $this->validator($request, [], [], $other);
        }
    }

    public function index(Request $request)
    {
        $this->checkCRUD();
        $this->checkCRUDPermission('index');

        if ($this->default_search) {
            $model = $this->model::defaultSearch($request, $this->model);
            return $this->response(200, $model);
        } else {
            $model = $this->model::search($request);
            return $this->response(200, $model);
        }
    }

    public function store(Request $request)
    {
        $this->checkCRUD();
        $this->checkCRUDPermission('insert');
        $this->checkCRUDValidator($request);

        $data = $this->model::insert($request);
        return $this->response(200, $data);
    }

    public function show(Request $request)
    {
        $this->checkCRUD();
        $this->checkCRUDPermission('index');
        $this->checkCRUDValidator($request, ["id" => 'required|string'], true);

        if ($this->default_show) {
            $model = $this->model::defaultShow($request, $this->model);
            return $this->response(200, $model);
        } else {
            $model = $this->model::show($request);
            return $this->response(200, $model);
        }
    }

    public function update(Request $request)
    {
        $this->checkCRUD();
        $this->checkCRUDPermission('update');
        $this->checkCRUDValidator($request, ["id" => 'required|string']);

        $data = $this->model::updateItem($request);
        return $this->response(200, $data);
    }

    public function destroy(Request $request)
    {
        $this->checkCRUD();
        $this->checkCRUDPermission('delete');
        $this->checkCRUDValidator($request, ["id" => 'required|string'], true);

        if ($this->default_destroy) {
            $this->model::defaultDestroy($request->id, $this->model);
        } else {
            $this->model::destroy($request->id);
        }
        return $this->response(200, []);
    }
}
