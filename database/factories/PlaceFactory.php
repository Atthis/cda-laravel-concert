<?php

namespace Database\Factories;

use App\Models\City;
use DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'street' => fake()->streetName(),
            'city_id' => City::factory(),
            'capacity' => fake()->numberBetween(120, 1500)
        ];
    }
}
