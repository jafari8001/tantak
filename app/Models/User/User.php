<?php

namespace App\Models\User;

use App\Models\BaseModel;
use App\Models\BaseRelModel;
use App\Exceptions\OtherException;
use App\product\Models\Comments;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends BaseModel  implements AuthenticatableContract
{
    use Authenticatable, Authorizable;

    protected $hidden = ['password'];
    public static $columns = [
        "id" => "users.id",
        "sort" => "users.sort",
        "status" => "users.status",
        "username" => "users.username",
        "last_name" => "users.last_name",
        "first_name" => "users.first_name",
        "person_type" => "users.person_type",
        "national_code" => "users.national_code",
        "country_division_id" => "users.country_division_id",
        "created_at" => "users.created_at",
        "created_by" => "users.created_by",
        "updated_at" => "users.updated_at"
    ];

    public function roles(){
        return $this->manyToMany("App\Models\User\Role", RoleUser::class, RoleUser::getTableName());
    }
    public function comments(): HasMany{
        return $this->hasMany(Comments::class);
    }

    public static function searchByRole($request, $roles = []){
        $search = BaseModel::beforeSearch($request, User::class);
        $query = $search['query']
            ->whereHas('roles', function ($query) use ($roles) {
                $query->whereIn('roles.id', $roles);
            })
            ->with('roles', function ($query) {
                $query->select('roles.id', 'roles.name');
            });

        return BaseModel::afterSearch($query, $search['paginate_num']);
    }
    public static function insert($request)
    {
        User::checkInsert($request->username, $request->national_code);
        $model = new User();

        $model->sort = $request->sort;
        $model->last_name = $request->last_name;
        $model->birth_date = $request->birth_date;
        $model->first_name = $request->first_name;
        $model->description = $request->description;
        $model->person_type = $request->person_type;
        $model->national_code = $request->national_code;
        $model->password = Hash::make($request->password);
        $model->username = checkUsername($request->username);
        $model->country_division_id = $request->country_division_id;

        if (isset($request->status)) {
            $model->status = $request->status;
        } else {
            $model->status = "active";
        }
        if (isset($request->avatar)) {
            $model->avatar = $request->avatar;
        }
        $model->save();
        $model->roles()->sync($request->role_id);
        return $model;
    }

    public static function show($request)
    {
        $model = User::find($request->id);
        $model->roles;
        $model->country_division;

        return [
            'model' => $model
        ];
    }

    public static function updateItem($request)
    {
        User::checkInsert($request->username, $request->national_code, $request->id);
        $model = User::find($request->id);

        $model->sort = $request->sort;
        $model->last_name = $request->last_name;
        $model->birth_date = $request->birth_date;
        $model->first_name = $request->first_name;
        $model->description = $request->description;
        $model->person_type = $request->person_type;
        $model->national_code = $request->national_code;
        $model->username = checkUsername($request->username);
        $model->country_division_id = $request->country_division_id;

        if (isset($request->status)) {
            $model->status = $request->status;
        }
        if (isset($request->password)) {
            $model->password = Hash::make($request->password);
        }
        if (isset($request->avatar)) {
            $model->avatar = $request->avatar;
        }

        $model->save();
        if (isset($request->role_id)) {
            $model->roles()->sync($request->role_id);
        }

        return $model;
    }

    public static function updateProfile($request)
    {
        $user = User::find(auth()->user()->id);
        if (isset($request->avatar)) {
            $user->avatar = $request->avatar;
        }
        if (isset($request->password)) {
            $user->password = bcrypt($request->password);
        }
        if (isset($request->last_name)) {
            $user->last_name = $request->last_name;
        }
        if (isset($request->first_name)) {
            $user->first_name = $request->first_name;
        }
        if (isset($request->national_code)) {
            $user->national_code = $request->national_code;
            User::checkNationalCode($request->national_code, $user->id);
        }
        if (isset($request->birth_date) && strlen($request->birth_date) == 10) {
            $user->birth_date = $request->birth_date;
        }
        $user->save();
        return $user;
    }

    public static function otpLogin($username)
    {
        $model = User::where('username', '=', $username)->first();

        if (!isset($model->id)) {
            $model = new User();
            $model->status = "active";
            $model->username = checkUsername($username);
            $model->password = Hash::make(quickRandom(8));
            $model->save();
            $model->roles()->sync([env("ROLE_USER_ID")]);
        }

        if ($model->status == 'active') {
            return $model;
        }
        throw new OtherException(__('user.can_not_login'));
    }

    public static function login($username, $password)
    {
        
        $model = User::where([
            ['username', '=', checkUsername($username)],
            ["status", "=", 'active']
            ])->first();
            
            if (isset($model->id)) {
                if (Hash::check($password, $model->password)) {
                return $model;
            }
            throw new OtherException(__('user.error_password'));
        }
        throw new OtherException(__('user.not_exist_username'));
    }

    public static function checkInsert($username, $national_code, $id = null)
    {
        User::checkUsername($username, $id);
        User::checkNationalCode($national_code, $id);
    }

    public static function checkNationalCode($national_code, $id = null)
    {
        if ($national_code == null) {
            return;
        }
        $query = User::where('national_code', '=', $national_code);
        if ($id != null) {
            $query->where('id', '!=', $id);
        }
        $count = $query->count();

        if ($count > 0) {
            throw new OtherException(__('user.exist_national_code'));
        }
    }

    public static function checkUsername($username, $id = null)
    {
        $query = User::where('username', '=', $username);
        if ($id != null) {
            $query->where('id', '!=', $id);
        }
        $count = $query->count();

        if ($count > 0) {
            throw new OtherException(__('user.exist_username'));
        }
    }

    public static function checkRole($user_id, $role_id)
    {
        $user = User::find($user_id);
        $check = $user->roles()->where('roles.id', '=', $role_id)->get();

        if ($check == null) {
            throw new OtherException();
        }
    }

    public static function report($request)
    {
        $all = User::whereHas('roles', function ($query) {
            $query->whereIn('roles.id', [env('ROLE_USER_ID')]);
        })->count();

        $hidden = User::where('status', '=', 'hidden')
            ->whereHas('roles', function ($query) {
                $query->whereIn('roles.id', [env('ROLE_USER_ID')]);
            })->count();
        return ['all' => $all, 'hidden' => $hidden];
    }

    public function getFullNameAttribute()
    {
        $text = "";
        if ($this->first_name) {
            $text = $this->first_name;
        }
        if ($this->last_name) {
            $text .= " " . $this->last_name;
        }
        return $text;
    }

    public static function isAdmin($user_id = null)
    {
        if(!$user_id){
            $user_id = auth()->user()->id;
        }

        return User::where('id',$user_id)
            ->whereHas('roles',function($query){
                $query->where('roles.id',env('ROLE_ADMIN_ID'));
            })->exists();
    }

    public static function destroy($id, $is_admin = true)
    {
        $model = User::find($id);
        $model->delete();
    }
}

class RoleUser extends BaseRelModel
{
}
