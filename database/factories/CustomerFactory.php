<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>fake()->firstName().' '.fake()->lastName(),
            'address'=>fake()->streetAddress(),
            'postalCode'=>fake()->postcode(),
            'city'=>fake()->city(),
            'phoneNumber'=>'0'.fake()->numberBetween(100000000,999999999),
            'user_id'=>fake()->numberBetween(1,6)
        ];
    }
}
