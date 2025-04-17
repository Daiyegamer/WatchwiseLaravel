<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'movie_id' => fake()->numberBetween(1, 20),  // Adjust range to match your movie IDs
            'user_name' => fake()->firstName(),
            'review_text' => fake()->paragraph(),
            'rating' => fake()->randomFloat(1, 1, 5),   // Generates a float between 1 and 5
        ];
    }
}
