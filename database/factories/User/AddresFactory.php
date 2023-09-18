<?php
namespace Database\Factories\User;
 
use App\Models\User\User;
use App\Models\Setting\CountryDivision;
use Illuminate\Database\Eloquent\Factories\Factory;
 
class AddresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $country_division = CountryDivision::inRandomOrder()->first();

        return [
            'created_by' => null,
            'user_id' => $user->id,
            'address' => fake()->address,
            'postal_code' => fake()->postcode,
            'sort' => fake()->numberBetween(1, 1000),
            'country_division_id' => $country_division->id,
        ];
    }
}
