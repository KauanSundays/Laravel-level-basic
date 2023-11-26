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

    public function cadastrarProduto(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'preco_custo' => 'required|numeric|min:0',
            'disponivel' => 'required|in:sim,nao',
        ]);

        return redirect('/')->with('success', 'Produto cadastrado com sucesso!');
    }
}
