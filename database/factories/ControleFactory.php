<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Controle>
 */
class ControleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kilometer'=>fake()->numberBetween(0,100000),
            'date'=>fake()->dateTimeBetween('-1 year'),
            'observation'=>fake()->sentence(),
            'car_id'=>fake()->numberBetween(1,10),
            'user_id'=>fake()->numberBetween(1,6)
        ];
    }
}
