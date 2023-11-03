<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produto; // Certifique-se de importar o modelo Produto

class ProdutosController extends Controller
{
    public function store(Request $request)
    {
        // Regras de validação
        $rules = [
            'nome' => 'required|string',
            'preco' => 'required|numeric',
            'disponivel' => 'required|in:sim,não', // Certifique-se de que o valor seja 'sim' ou 'não'
        ];

        // Mensagens de erro personalizadas
        $messages = [
            'disponivel.in' => 'O campo disponível deve ser "sim" ou "não".',
        ];

        // Valide os dados do formulário
        $request->validate($rules, $messages);

        // Se a validação for bem-sucedida, você pode criar um novo produto
        $produto = new Produto;
        $produto->nome = $request->input('nome');
        $produto->preco = $request->input('preco');
        $produto->disponivel = $request->input('disponivel');
        $produto->save();

        // Faça o que for necessário após salvar o produto, como redirecionar ou exibir uma mensagem de sucesso.
    }
}
