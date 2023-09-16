<?php

namespace App\Models\Product;

use App\Models\BaseModel;


class Address extends BaseModel
{

    public static $columns = [
        "id" => "addresses.id",
        'user_id' => 'addresses.user_id',
		'postal_code' => 'addresses.postal_code',
		'address' => 'addresses.address',
		'country_division_id' => 'addresses.country_division_id',

        "created_at" => "addresses.created_at",
        "created_by" => "addresses.created_by",
        "updated_at" => "addresses.updated_at"
    ];

    public static function insert($request){
        $model = new Address();

        $model->sort = $request->sort;
        if(isset($request->user_id))$model->user_id = $request->user_id;
		if(isset($request->postal_code))$model->postal_code = $request->postal_code;
		if(isset($request->address))$model->address = $request->address;
		if(isset($request->country_division_id))$model->country_division_id = $request->country_division_id;


        $model->save();
        return $model;
    }

    public static function updateItem($request){
        $model = Address::find($request->id);

        $model->sort = $request->sort;
        if(isset($request->user_id))$model->user_id = $request->user_id;
		if(isset($request->postal_code))$model->postal_code = $request->postal_code;
		if(isset($request->address))$model->address = $request->address;
		if(isset($request->country_division_id))$model->country_division_id = $request->country_division_id;


        $model->save();
        return $model;
    }

}
