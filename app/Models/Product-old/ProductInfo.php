<?php

namespace App\Models;

use App\product\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductInfo extends BaseModel
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'type',
        'ability',
        'description',
    ];
    public function categories(): BelongsTo{
        return $this->belongsTo(Product::class);
    }
}