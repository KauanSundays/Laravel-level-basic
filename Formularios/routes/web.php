<?php

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $produtos = Produto::all(); // Obtém todos os produtos do banco de dados
    return view('welcome', ['produtos' => $produtos]);
});

Route::post('/cadastrar-produto', function (\Illuminate\Http\Request $request) {
    $produto = new Produto();
    $produto->nome = $request->input('nome');
    $produto->preco_custo = $request->input('preco_custo') ; 
    $produto->disponivel = $request->input('disponivel');
    $produto->save();

    return redirect('/');
})->name('cadastrar.produto');
