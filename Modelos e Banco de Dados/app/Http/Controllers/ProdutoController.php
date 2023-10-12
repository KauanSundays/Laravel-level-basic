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

    public function criarProdutosForm() {
        return view('criarProdutos');
    }

    public function criarProdutos(Request $request) {
        // Validando os dados recebidos no $request, aplicando regras de validação
        $request->validate([
            'nome' => 'required|string|max:255', // Nome é obrigatório, deve ser uma string de no máximo 255 caracteres
            'preco' => 'required|numeric', // Preço é obrigatório e deve ser um número
            // Adicione mais regras de validação conforme necessário
        ]);
    
        // Se a validação for bem-sucedida, criamos uma instância de Produto
        $produto = new Produto;
        $produto->nome = $request->input('nome'); // Preenchemos o campo 'nome' com o valor do formulário
        $produto->preco = $request->input('preco'); // Preenchemos o campo 'preco' com o valor do formulário
        // Você pode definir outros campos do produto da mesma forma
    
        // Salvamos o novo produto no banco de dados
        $produto->save();
    
        // Redirecionamos o usuário para uma página de sucesso ou outra ação após a criação
        return redirect('/produtos')->with('success', 'Produto criado com sucesso.');
    }
    
}
