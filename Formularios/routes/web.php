<?php

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

Route::get('/', [ProdutosController::class, 'index']);
Route::post('/cadastrar-produto', [ProdutosController::class, 'store'])->name('cadastrar.produto');
