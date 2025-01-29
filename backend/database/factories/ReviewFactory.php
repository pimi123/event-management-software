<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Event;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
            'user_id' => User::factory(),
            'event_id' => Event::factory(),
            'rating' => $this->faker->numberBetween(1, 5), // Assuming a rating between 1 and 5
            'review' => $this->faker->paragraph(), // Generates a random paragraph for the review
        ];
    }
}
