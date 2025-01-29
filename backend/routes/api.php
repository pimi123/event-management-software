<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController ;




Route::get('/dummy-data', [UserController::class,'index']);
Route::post('/register', [AuthController::class,'registerUser']);
