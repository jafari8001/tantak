<?php
namespace Database\Factories\Product;
 
use App\Models\Product\Product;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;
 
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $product = Product::inRandomOrder()->first();

        return [
            'parent_id' => null, 
            'created_by' => null,
            'user_id' => $user->id,
            'text' => fake()->paragraph,
            'product_id' => $product->id,
            'is_owner' => fake()->boolean,
            'star' => fake()->numberBetween(0, 5),
            'sort' => fake()->numberBetween(1, 1000),
            'status' => fake()->randomElement(['active', 'hidden']),
        ];
    }
}
