<?php

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/cadastrar-produto', function (\Illuminate\Http\Request $request) {
    // dd($request->all());
    return redirect('/'); 
})->name('cadastrar.produto');