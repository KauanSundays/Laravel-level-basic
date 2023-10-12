<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function listarProdutos() {
        $produtos = Produto::all();
        return view('welcome', ['produtos' => $produtos]);    
    //Variavel $produtos contem todos os registros da tabela produtos, passados para a view
    }
}
