<?php

namespace App\Models\Product;

use App\Models\BaseModel;


class Branch extends BaseModel
{

    public static $columns = [
        "id" => "branch.id",
        'user_id' => 'branch.user_id',
		'country_division_id' => 'branch.country_division_id',
		'name' => 'branch.name',
		'branch_code' => 'branch.branch_code',
		'lat' => 'branch.lat',
		'long' => 'branch.long',
		'address' => 'branch.address',
		'is_main_branch' => 'branch.is_main_branch',
		'status' => 'branch.status',
		'sell_type' => 'branch.sell_type',
        "created_at" => "branch.created_at",
        "created_by" => "branch.created_by",
        "updated_at" => "branch.updated_at"
    ];

    public static function insert($request)
    {
        $model = new Branch();

        $model->sort = $request->sort;
        if(isset($request->user_id))$model->user_id = $request->user_id;
		if(isset($request->country_division_id))$model->country_division_id = $request->country_division_id;
		if(isset($request->name))$model->name = $request->name;
		if(isset($request->branch_code))$model->branch_code = $request->branch_code;
		if(isset($request->lat))$model->lat = $request->lat;
		if(isset($request->long))$model->long = $request->long;
		if(isset($request->address))$model->address = $request->address;
		if(isset($request->is_main_branch))$model->is_main_branch = $request->is_main_branch;
		if(isset($request->status))$model->status = $request->status;
		if(isset($request->sell_type))$model->sell_type = $request->sell_type;

        $model->save();
        return $model;
    }

    public static function updateItem($request)
    {
        $model = Branch::find($request->id);

        $model->sort = $request->sort;
        if(isset($request->user_id))$model->user_id = $request->user_id;
		if(isset($request->country_division_id))$model->country_division_id = $request->country_division_id;
		if(isset($request->name))$model->name = $request->name;
		if(isset($request->branch_code))$model->branch_code = $request->branch_code;
		if(isset($request->lat))$model->lat = $request->lat;
		if(isset($request->long))$model->long = $request->long;
		if(isset($request->address))$model->address = $request->address;
		if(isset($request->is_main_branch))$model->is_main_branch = $request->is_main_branch;
		if(isset($request->status))$model->status = $request->status;
		if(isset($request->sell_type))$model->sell_type = $request->sell_type;

        $model->save();
        return $model;
    }

}
