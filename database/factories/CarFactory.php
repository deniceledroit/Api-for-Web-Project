<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Provider\Fakecar;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->addProvider(new Fakecar($this->faker));
        $vehicle = $this->faker->vehicleArray();
        return [
            'modele'=>$vehicle['brand'].' '.$vehicle['model'],
            'registration'=>$this->faker->vehicleRegistration('[A-Z]{2}-[0-9]{3}-[A-Z]{2}')
        ];
    }
}
