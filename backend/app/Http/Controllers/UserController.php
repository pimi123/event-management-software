<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        // dd("test");

     $event =  User::find(1)->events; 


        //  dd($event);

        $event =  User::find(1)->events; 

     return response()->json([
        'success' => true,
        'data' => $event,
    ]);

    } 
}
