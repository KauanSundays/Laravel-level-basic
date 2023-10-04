<?php

use Illuminate\Http\Request;

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

Route::get('/simple', function () {
    return view('simple');
})->name('simple_route');



Route::get('/mostrar/{parametro}', function ($parametro) {
    return "Parâmetro recebido: " . $parametro;
})->name('parametro_route');

