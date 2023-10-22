<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tour>
 */
class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'travel_id' => DB::table('travels')->select('id')->get()->random()->id,
            'name' => fake()->text(20),
            'starting_date' => now(),
            'ending_date' => now()->addDays(rand(1, 7)),
            'price' => rand(5000, 80000),
        ];
    }
}
