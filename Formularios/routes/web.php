<?php

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

Route::get('/', [ProdutosController::class, 'index']);

Route::post('/cadastrar-produto', [ProdutoController::class, 'cadastrarProduto'])->name('cadastrar.produto');