<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id(); // Coluna de ID auto-incremento
            $table->string('nome'); //nome do produto
            $table->decimal('preco', 10, 2); 
            //decimal, 
            //10 -> Numero maximo de numero antes da virgula
            //2 -> Numero maximo de numeros depois da virgula

            $table->timestamps(); // Colunas created_at e updated_at para registro de data e hora
        });
    }

    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
