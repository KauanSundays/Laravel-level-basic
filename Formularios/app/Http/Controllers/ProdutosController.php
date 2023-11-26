<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('welcome', ['produtos' => $produtos]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'preco_custo' => 'required|numeric|min:0',
            'disponivel' => 'required|in:sim,nao',
        ]);

        $produto = new Produto();
        $produto->nome = $request->input('nome');
        $produto->preco_custo = $request->input('preco_custo');
        $produto->disponivel = $request->input('disponivel');
        $produto->save();

        return redirect('/');
    }
}
