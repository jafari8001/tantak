<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Core\ChangeLog;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BaseRelModel extends Pivot
{
    public $timestamps = true;
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $dates = ['deleted_at'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!isset($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
            if (auth()->check()) {
                $model->created_by = auth()->user()->id;
            }
            ChangeLog::insert([], $model->getDirty(), $model, 'create');
        });

        static::updating(function ($data) {
            if (!in_array($data->table, ["change_logs", "logs"])) {
                $listChange = [];
                $firstList = $data->fresh();
                foreach ($data->getDirty() as $key => $value) {
                    $listChange[$key] = $firstList->$key;
                }
                ChangeLog::insert($data->getDirty(), $listChange, $data, 'update');
            }
        });
    }

    public static function getTableName()
    {
        return with(new static)->getTable();
    }

    public function delete()
    {
        parent::delete();
        ChangeLog::insert([], [], $this, 'delete');
    }
}
