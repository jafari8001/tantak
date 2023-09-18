<?php
namespace Database\Factories\Product;
 
use App\Models\User\User;
use Illuminate\Database\Eloquent\Factories\Factory;
 
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();

        return [
            'name' => fake()->word,
            'sort' => fake()->numberBetween(1, 100),
            'created_by' => $user->id,
        ];
    }
}
