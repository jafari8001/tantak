<?php
namespace Database\Factories\Product;
 

use Illuminate\Database\Eloquent\Factories\Factory;
 
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'parent_id' => null, 
            'created_by' => null,
            'name' => fake()->word,
            'slug' => fake()->slug,
            'sort' => fake()->numberBetween(1, 1000),
            'barcode' => fake()->unique()->numberBetween(100000, 999999), 
        ];
    }
}
