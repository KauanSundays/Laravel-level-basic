<?php

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-produto', function (\Illuminate\Http\Request $request) {
    dd($request->all());
    return view('welcome'); // Adicione esta linha para redirecionar para a mesma rota
})->name('cadastrar.produto');