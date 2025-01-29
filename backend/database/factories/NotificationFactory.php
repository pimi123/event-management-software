<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Event;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
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
            'type' => $this->faker->randomElement(['email', 'sms', 'push']),
            'message' => $this->faker->sentence(), // Generates a random notification message
            'status' => $this->faker->randomElement(['sent', 'pending', 'failed']),
        ];
    }
}
