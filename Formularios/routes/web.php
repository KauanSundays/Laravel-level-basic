<?php

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-produto', function (\Illuminate\Http\Request $request) {
    $produto = new Produto();
    $produto->nome = $request->input('nome');
    $produto->preco_custo = 0; // Coloque o valor desejado
    $produto->disponivel = $request->input('disponivel');
    $produto->save();

    return redirect('/');
})->name('cadastrar.produto');
