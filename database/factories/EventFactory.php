<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $placeIds = Place::all()->pluck('id');
        // $artistIds = Artist::all()->pluck('id');
        // $cityIds = City::all()->pluck('id');
        // $categoryIds = Category::all()->pluck('id');
        // $costumerIds = Costumer::all()->pluck('id');

        return [
            'name' => fake()->company(),
            'duration' => fake()->numberBetween(1, 3),
        ];
    }
}
