<?php

namespace App\Models\User;

use App\Models\BaseModel;
use App\Models\BaseRelModel;

class Role extends BaseModel
{

    public static $columns = [
        "id" => "roles.id",
        "name" => "roles.name",
        "created_at" => "roles.created_at",
        "created_by" => "roles.created_by",
        "updated_at" => "roles.updated_at"
    ];

    public function actions()
    {
        return $this->manyToMany("App\Models\User\Action", ActionRole::class, ActionRole::getTableName());
    }

    public static function insert($request)
    {
        $model = new Role();

        $model->is_default = 0;
        $model->name = $request->name;

        $model->save();
        $model->actions()->sync($request->action_id);
        return $model;
    }

    public static function show($request)
    {
        $model = Role::find($request->id);
        $action = Action::all();
        $model->actions;
        return [
            'model' => $model,
            'action' => $action
        ];
    }

    public static function updateItem($request)
    {
        $model = Role::find($request->id);

        $model->name = $request->name;

        $model->save();
        $model->actions()->sync($request->action_id);
        return $model;
    }
}

class ActionRole extends BaseRelModel
{
}
