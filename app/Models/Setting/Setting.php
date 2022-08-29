<?php

namespace App\Models\Setting;

use App\Models\BaseModel;

class Setting extends BaseModel
{

    public static $columns = [
        "id" => "settings.id",
        "key" => "settings.key",
        "value" => "settings.value",
        "created_at" => "settings.created_at",
        "created_by" => "settings.created_by",
        "updated_at" => "settings.updated_at"
    ];


    public static function insert($request)
    {
        $model = new Setting();
    
        $model->key = $request->key;
        $model->value = $request->value;

        $model->save();
        return $model;
    }
    
    public static function updateItem($request)
    {
        $model = Setting::find($request->id);
    
        $model->key = $request->key;
        $model->value = $request->value;

        $model->save();
        return $model;
    }

}
