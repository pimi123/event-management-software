<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/dummy-data', function () {
    return response()->json([
        'success' => true,
        'message' => 'Here is your dummy data!',
        'data' => [
            [
                'id' => 1,
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'role' => 'admin',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'role' => 'user',
                'created_at' => now(),
            ],
        ],
    ]);
});
