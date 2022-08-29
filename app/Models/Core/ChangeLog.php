<?php

namespace App\Models\Core;

use App\Models\BaseModel;

class ChangeLog extends BaseModel
{

    protected $table = "change_logs";
    protected static $exception_table = [null, 'logs', 'change_logs', 'exception_logs', 'auth_tokens'];

    public static function insert($before, $after, $model_in, $type = 'create')
    {
        $table_name = $model_in->getTable();
        if (in_array($table_name, ChangeLog::$exception_table)) {
            return;
        }
        try {
            $model = new ChangeLog();
            $model->type = $type;
            $model->table_name = $table_name;
            $model->after = json_encode($after);
            $model->before = json_encode($before);
            $model->table_id = $model_in->id ?? "";
            $model->created_by = (isset(auth()->user()->id)) ? auth()->user()->id : 0;
            $model->save();
        } catch (\Exception $ex) {
        }
    }
}