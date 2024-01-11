<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;

Route::get('/', [Posts::class, 'index']);
