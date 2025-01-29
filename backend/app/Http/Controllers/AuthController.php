<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registerUser(Request $request)
    {

        $request->validate([
            'name'=> 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password), 
    ]);


    $token = bin2hex(random_bytes(40)); 
    $user->update(['api_token' => $token]);

        return response()->json([
            'success' => true,
            'user' => $user,
            'token' => $token
        ], 201);

    }
}
