<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'startDate'=>fake()->dateTimeBetween('now','now'),
            'endingDate'=>fake()->dateTime('+3 days'),
            'status'=>'en cours',
            'city'=>fake()->city(),
            'startCity'=>fake()->city(),
            'endingCity'=>fake()->city(),
            'customer_id'=>fake()->numberBetween(1,10),
            'car_id'=>fake()->numberBetween(1,10),
            'bookingType_id'=>fake()->numberBetween('1','2')

        ];
    }
}
