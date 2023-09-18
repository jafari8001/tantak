<?php
namespace Database\Factories\Product;
 

use App\Models\Product\ProductVariation;
use App\Models\Setting\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;
 
class ProductVariationCombinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $setting = Setting::where('key','variation_type')
            ->inRandomOrder()
            ->take(3)
            ->get();
        
        $variation1 = ProductVariation::where('variation_type_id',$setting[0]?->id)->inRandomOrder()->first();
        $variation2 = ProductVariation::where('variation_type_id',$setting[1]?->id)->inRandomOrder()->first();
        $variation3 = ProductVariation::where('variation_type_id',$setting[2]?->id)->inRandomOrder()->first();

        return [
            'created_by' => null,
            'variation_1_id' => $variation1->id,
            'variation_2_id' => $variation2->id,
            'variation_3_id' => $variation3->id,
            'barcode' => fake()->numerify('####'), 
            'sort' => fake()->numberBetween(1, 100),
            'stock' => fake()->numberBetween(0, 1000),
            'minimum' => fake()->numberBetween(1, 10),
            'discount' => fake()->numberBetween(0, 50),
            'maximum' => fake()->numberBetween(10, 100),
            'price' => fake()->numberBetween(1000, 10000),
            'full_barcode' => fake()->numerify('################'), 
            'sell_type' => fake()->randomElement(['single', 'wholesale']),
        ];
    }
}
