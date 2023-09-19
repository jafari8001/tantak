<?php
namespace Database\Factories\Product;
 

use App\Models\Product\Category;
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
            'level' => 0, 
            'parent_id' => null, 
            'created_by' => null,
            'name' => fake()->word,
            'slug' => fake()->slug,
            'sort' => fake()->numberBetween(1, 1000),
            'barcode' => fake()->unique()->numberBetween(100000, 999999), 
        ];
    }
    public function configure()
    {
        return $this->afterCreating(function (Category $category) {
            $depth = 4;
            if(($category->level + 1) < $depth){
                Category::factory()
                    ->create([
                        'parent_id' => $category->id,
                        'level' => $category->level + 1
                    ]);
            }
        });
    }
}
