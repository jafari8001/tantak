<?php

namespace App\Http\Controllers\User;

use App\Models\User\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * @group User
 * @subgroup User
 */
class UserController extends Controller
{
    public $model = User::class;
    public $default_show = false;
    public $default_destroy = true;
    public $permissionItem = "user";

    /**
     * POST search-by-role
     * 
     * List of users searched by list of role ids
     *       
     * @bodyParam role_id string[] required array of role ids. Example: ['791d1b02-3610-4177-9051-eb7ae6b72def']
     */
    public function searchByRole(Request $request)
    {
        $this->permission('user/index');
        $this->validator($request, [], [], [
            "role_id" => "required|array|min:1",
            "role_id.*" => "required|string|distinct"
        ]);

        $data = User::searchByRole($request, $request->role_id);
        return $this->response(200, $data);
    }

    /**
     * POST insert
     *       
     * @bodyParam username string required  Example: '09159654199'
     * @bodyParam password string required  Example: '123456'
     * @bodyParam first_name string required  Example: 'test'
     * @bodyParam last_name string required  Example: 'test'
     * @bodyParam role_id string[] required  Example: ['791d1b02-3610-4177-9051-eb7ae6b72def']
     * @bodyParam status string required values [`active`,`hidden`,`inactive`,`registering`,`suspended`] Example: 'active'
     * @bodyParam person_type string required values [`real`,`legal`,`none`] Example: 'real'
     */
    public function store(Request $request)
    {
        $this->permission('user/insert');
        $this->validator($request, ["username", "password", "first_name", "last_name", "role_id", "status", "person_type"]);

        $model = User::insert($request);

        return $this->response(200, $model);
    }

    /**
     * POST update
     *       
     * @bodyParam id string required id of user in database Example: '56194f1c-1398-44f0-87cd-c34d2356eeaf'
     * @bodyParam username string required  Example: '09159654199'
     * @bodyParam password string required  Example: '123456'
     * @bodyParam first_name string required  Example: 'test'
     * @bodyParam last_name string required  Example: 'test'
     * @bodyParam role_id string[] required  Example: ['791d1b02-3610-4177-9051-eb7ae6b72def']
     * @bodyParam status string required values [`active`,`hidden`,`inactive`,`registering`,`suspended`] Example: 'active'
     * @bodyParam person_type string required values [`real`,`legal`,`none`] Example: 'real'
     */
    public function update(Request $request)
    {
        $this->permission('user/update');
        $this->validator($request, ["username", "first_name", "last_name", "role_id", "status", "person_type", "id"]);

        $data = User::updateItem($request, $request->id);
        return $this->response(200, $data);
    }

    /**
     * POST profile
     *      
     * Get user profile or update it
     * fields are all optional
     *  
     * @bodyParam id string required id of user in database Example: '56194f1c-1398-44f0-87cd-c34d2356eeaf'
     * @bodyParam avatar string  Example: '/upload/default.jpg'
     * @bodyParam password string  Example: '123456'
     * @bodyParam first_name string  Example: 'test'
     * @bodyParam last_name string  Example: 'test'
     * @bodyParam national_code string  Example: '0880306319'
     * @bodyParam birth_date string  Example: '2022-10-01'
     */
    public function profile(Request $request)
    {
        $message = User::updateProfile($request);
        return $this->response(200, [
            "user" => $message
        ]);
    }

}
