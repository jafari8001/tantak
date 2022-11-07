<?php

namespace App\Models\Setting;

use App\Models\BaseModel;

class CountryDivision extends BaseModel
{

    public static $columns = [
        "id" => "country_divisions.id",
        "name" => "country_divisions.name",
        "level" => "country_divisions.level",
        "parent_id" => "country_divisions.parent_id",
        "cd2_name" => "cd2.name",
        "created_at" => "country_divisions.created_at",
        "created_by" => "country_divisions.created_by",
        "updated_at" => "country_divisions.updated_at"
    ];

    public function children()
    {
        return $this->hasMany(CountryDivision::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(CountryDivision::class, 'parent_id');
    }

    public static function search($request)
    {
        $search = BaseModel::beforeSearch($request, CountryDivision::class);
        $query = $search['query']
            ->leftJoin('country_divisions as cd2', 'country_divisions.parent_id', '=', 'cd2.id')
            ->select(
                'country_divisions.*',
                'cd2.id as cd2_id',
                'cd2.name as cd2_name',
                'cd2.level as cd2_level',
            );
        return BaseModel::afterSearch($query, $search['paginate_num']);
    }

    public static function insert($request)
    {
        $model = new CountryDivision();

        $model->name = $request->name;
        $model->level = $request->level;
        $model->parent_id = $request->parent_id;

        $model->save();
        return $model;
    }

    public static function updateItem($request)
    {
        $model = CountryDivision::find($request->id);

        $model->name = $request->name;
        $model->level = $request->level;
        $model->parent_id = $request->parent_id;

        $model->save();
        return $model;
    }
}
