<?php

namespace App\product\Models;

use App\Models\BaseModel;
use App\Models\ProductInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends BaseModel
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
    public function categories(): HasMany{
        return $this->hasMany(Category::class);
    }
    public function productVariation(): HasMany{
        return $this->hasMany(ProductVariation::class);
    }
    public function product_info(): HasMany{
        return $this->hasMany(ProductInfo::class);
    }
    public function comments(): HasMany{
        return $this->hasMany(Comments::class);
    }
    public function tags(): HasMany{
        return $this->hasMany(Tag::class);
    }
    public function logPrice(): HasMany{
        return $this->hasMany(LogPrice::class);
    }
}
