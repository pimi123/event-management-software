<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Event;
use App\Models\Ticket;
use App\Models\Review;
use App\Models\Notification;



// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();
        Event::factory()->count(5)->create();
        Review::factory()->count(5)->create();
        Notification::factory()->count(5)->create();
        Ticket::factory()->count(5)->create();


    }
}
