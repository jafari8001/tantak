<?php
namespace Database\Factories\Product;
 
use App\Models\Product\ProductVariationCombination;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;
 
class WarehouseStockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $varCombination = ProductVariationCombination::inRandomOrder()->first();

        return [
            'created_by' => null,
            'user_id' => $user->id,
            'varcomb_id' => $varCombination->id,
            'sort' => fake()->numberBetween(1, 1000),
            'stock' => fake()->numberBetween(0, 1000),
            'saved_stock' => fake()->numberBetween(0, 1000),
        ];
    }
}
