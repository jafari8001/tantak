<?php

namespace App\product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'path',
        'product_variation_id',
    ];
    public function productVariation(): BelongsTo{
        return $this->belongsTo(ProductVariation::class);
    }
}
