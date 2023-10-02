<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/created-route', function () {
<<<<<<< HEAD
    return view('livewire/clicker');  // this route returns a string, 
=======
    return view('teste');  // this route returns a string, 
>>>>>>> 9e4ef79b1c5bd7e2569f6b2f37f8198e24716c94
});