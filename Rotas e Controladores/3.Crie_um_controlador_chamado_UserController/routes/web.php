<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']);

Route::get('/users', [UserController::class, 'index'])->name('user.index');

