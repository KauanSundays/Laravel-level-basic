<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']);

Route::get('/redirecionado', function (){
    return view('welcome');
});

// Rota que redireciona para outra rota
Route::get('/outra-rota', function () {
    return redirect('/redirecionado');
});