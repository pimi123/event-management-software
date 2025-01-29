<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Event;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'event_id' => Event::factory(),
            'user_id' => User::factory(), // Nullable, so you can set it to null if needed
            'ticket_type' => $this->faker->randomElement(['regular', 'vip', 'early-bird']),
            'price' => $this->faker->randomFloat(2, 10, 500), // Random price between $10 and $500
            'seat_number' => $this->faker->optional()->regexify('[A-Z]{1}[0-9]{2}'), // e.g., A12, B34
            'status' => $this->faker->randomElement(['available', 'sold', 'canceled', 'refunded']),
            'qr_code' => $this->faker->optional()->uuid, // Optional QR code
        ];
    }
}
