<?php

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-produto', function (Request $request) {
    dd($request->all());
})->name('cadastrar.produto');
