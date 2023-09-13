<?php

namespace App\product\Models;

use App\product\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LogPrice extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'varcomb_id',
        'product_id',
        'price'
    ];
    public function products(): BelongsTo{
        return $this->belongsTo(Product::class);
    }
}
