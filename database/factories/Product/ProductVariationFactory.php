<?php
namespace Database\Factories\Product;
 
use App\Models\Product\Product;
use App\Models\Setting\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;
 
class ProductVariationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $product = Product::inRandomOrder()
            ->first(); 
        $setting = Setting::where('key','variation_type')
            ->inRandomOrder()
            ->first();
    
        return [
            'created_by' => null,
            'value' => fake()->word,
            'product_id' => $product->id,
            'variation_type_id' => $setting->id,
            'barcode' => fake()->numerify('##'), 
            'sort' => fake()->numberBetween(1, 1000),
        ];
    }
}
