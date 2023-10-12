<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProdutoController::class, 'listarProdutos']);

Route::get('/produtos/criar', [ProdutoController::class, 'criarProdutos']);
