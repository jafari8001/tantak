<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Models\Core\ChangeLog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BaseModel extends Model
{
    use SoftDeletes;

    public $timestamps = true;
    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    protected $dates = ['deleted_at'];
    protected static $operation = ['=', '!=', '>', '<', '>=', '<=', 'LIKE', 'between', 'in'];
    protected $hidden = [
        'password', 'created_by', 'deleted_at', 'updated_at', 'pivot'
    ];

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

    public function manyToMany($model, $pivotModel, $table_name, $foreignPivotKey = null, $relatedPivotKey = null)
    {
        return $this->belongsToMany($model, $table_name, $foreignPivotKey, $relatedPivotKey)
            ->whereNull($table_name . ".deleted_at")
            ->using($pivotModel)
            ->withTimestamps();
    }

    public static function filterItems($request, $columns, $max_row = 9999999, $jalali_date = [])
    {
        $where = [];
        $whereIn = [];
        $orderBy = "DESC";
        $paginate_num = 20;
        $sortBy = $columns["created_at"];

        if (isset($request->filters)) {
            $filters = $request->filters;
            foreach ($filters as $key => $value) {
                if (!isset($columns[$key])) {
                    continue;
                }

                $column = $columns[$key];
                if (isset($value['op'])) {
                    if (!in_array($value['op'], self::$operation)) {
                        continue;
                    }
                    if (strtoupper($value['op']) == "LIKE") {
                        if (in_array($key, $jalali_date)) {
                            array_push($where, [$column, '=', toGregorian($value['value'])]);
                        } else {
                            array_push($where, [$column, $value['op'], "%" . $value['value'] . "%"]);
                        }
                    } elseif ($value['op'] == "in") {
                        array_push($whereIn, [$column, $value['value']]);
                    } elseif ($value['op'] == "between") {
                        array_push($where, [$column, '<', $value['to']]);
                        array_push($where, [$column, '>=', $value['from']]);
                    } else {
                        if (in_array($key, $jalali_date)) {
                            array_push($where, [$column, $value['op'], toGregorian($value['value'])]);
                        } else {
                            array_push($where, [$column, $value['op'], $value['value']]);
                        }
                    }
                } else {
                    array_push($where, [$column, 'LIKE', "%" . $value . "%"]);
                }
            }
        }

        if (isset($request->row_number) && (int) $request->row_number <= $max_row) {
            $paginate_num = (int) $request->row_number;
        }

        if (isset($request->sortBy) && isset($columns[$request->sortBy])) {
            $sortBy = $columns[$request->sortBy];
        }

        if (isset($request->orderBy) && ($request->orderBy == "DESC" || $request->orderBy == "ASC")) {
            $orderBy = $request->orderBy;
        }


        return [
            'where' => $where,
            'sortBy' => $sortBy,
            'whereIn' => $whereIn,
            'orderBy' => $orderBy,
            'paginate_num' => $paginate_num
        ];
    }

    //CRUD
    public static function beforeSearch($request, $classModel)
    {
        $columns = $classModel::$columns;
        $filterItems = BaseModel::filterItems($request, $columns);
        $query = $classModel::where($filterItems["where"])
            ->orderBy($filterItems["sortBy"], $filterItems["orderBy"])
            ->orderBy($columns['id'], 'DESC');

        foreach ($filterItems["whereIn"] as $value) {
            $query->whereIn($value[0], $value[1]);
        }

        return [
            'query' => $query,
            'paginate_num' => $filterItems["paginate_num"]
        ];
    }

    public static function afterSearch($model, $paginate_num)
    {
        $model = $model->paginate($paginate_num);
        return [
            'model' => $model
        ];
    }
    
    public static function defaultSearch($request, $classModel)
    {
        $search = BaseModel::beforeSearch($request, $classModel);
        return BaseModel::afterSearch($search['query'], $search['paginate_num']);
    }

    public static function defaultShow($request, $classModel)
    {
        $model = $classModel::find($request->id);

        return [
            'model' => $model
        ];
    }

    public static function defaultDestroy($id, $classModel)
    {
        $model = $classModel::find($id);
        $model->delete();
    }

    public function delete()
    {
        parent::delete();
        ChangeLog::insert([], [], $this, 'delete');
    }
}
