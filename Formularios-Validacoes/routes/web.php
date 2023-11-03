<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::resource('produtos', ProdutosController::class)->except(['create']);
Route::post('/', [ProdutosController::class, 'store'])->name('produtos.store');
