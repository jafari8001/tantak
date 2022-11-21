<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

/**
 * این کلاس مادر برای سرویس هایی استفاده می شود
 * که می خواهند خروجی استاندار برای جداول قابل فیلتر بدهند
 */
class BaseService
{
    protected static $operation = ['=', '!=', '>', '<', '>=', '<=', 'LIKE', 'between', 'in'];

    public static function buildRawHavingQuery($query,$usual_conditions = [] , $in_conditions = [])
    {
        $having_statement_conditions = [];
        foreach($usual_conditions as $cond){
            $having_statement_conditions[] = implode(" ",$cond);
        }
        foreach($in_conditions as $cond){
            $having_statement_conditions[] = $cond[0]." in (".implode(",",$cond).")";
        }
        $having_statement = implode(" and ",$having_statement_conditions);
        return $query->havingRaw($having_statement);
    }

    public static function beforeSearch($request, $classModel ,$where_columns , $having_columns = [])
    {
        $filterItems = BaseService::filterItems($request, $where_columns);
        $query = $classModel::where($filterItems["where"])
            ->orderBy($filterItems["sortBy"], $filterItems["orderBy"])
            ->orderBy($where_columns['id'], 'DESC');

        foreach ($filterItems["whereIn"] as $value) {
            $query->whereIn($value[0], $value[1]);
        }

        if($having_columns){
            $having_filterItems = BaseService::filterItems($request, $having_columns);
            if($having_filterItems["where"] || $having_filterItems["whereIn"]){
                Log::debug($having_filterItems);
                $query = self::buildRawHavingQuery($query,$having_filterItems["where"],$having_filterItems["whereIn"]);
            }
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

    public static function filterItems($request, $columns, $max_row = 9999999, $jalali_date = [])
    {
        $where = [];
        $whereIn = [];
        $orderBy = "DESC";
        $paginate_num = 20;

        if(isset($columns["created_at"])){
            $sortBy = $columns["created_at"];
        }else{
            $sortBy = "id";
        }

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
}
