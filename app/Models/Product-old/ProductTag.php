<?php

namespace App\product\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTag extends BaseModel
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slag',
        'main_image',
        'base_price',
        'base_wholesale_price',
        'wholesale_unit',
        'publish_staus',
        'barcode',
        'score',
        'like',
        'view',
        'user_id'
    ];
}
