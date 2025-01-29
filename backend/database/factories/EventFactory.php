<?php

namespace Database\Factories;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
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
        return [
            
            'organizer_id' => User::whereIn('role', ['event_organizer', 'manager', 'admin'])
            ->inRandomOrder()
            ->first()
            ->id ?? User::factory()->state([
                'role' => fake()->randomElement(['event_organizer', 'manager', 'admin'])
            ])->create()->id,

            'title' => fake()->sentence(3),
            'description' => fake()->paragraph(),
            'date' => fake()->dateTimeBetween('+1 week', '+6 months'),
            'location' => fake()->city(),
            'category' => fake()->randomElement(['Music', 'Tech', 'Sports', 'Education']),
            'status' => fake()->randomElement(['upcoming', 'ongoing', 'completed', 'canceled']),
        ];
    }
}
