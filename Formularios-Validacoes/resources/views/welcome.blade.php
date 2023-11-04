<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Formulario</title>
</head>


<script>
    function enviarFormulario() {
        var nome = document.getElementById('nome').value;
        var posicao = document.getElementById('valor').value;
        var disponivel = document.getElementById('disponivel').value;
        var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // Requisição AJAX
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Manipular a resposta da requisição
                var produto = document.getElementById('nome').value;
                alert("O Produto " + produto + " foi cadastrado!");
                document.getElementById('nome').value = '';
                document.getElementById('valor').value = '';
            }

        };
        xhttp.open("POST", "/cadastrar-produto", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.setRequestHeader("X-CSRF-TOKEN", token);
        xhttp.send("nome_produt=" + nome + 
                   "&valor_produto=" + valor);
    }
</script>
<body class="d-flex flex-column align-items-center justify-content-center vh-100">
  <h1 class="mb-4">Crie um produto</h1>
  <div class="container center-content mt-4">
      <div id class="container-box text-center">
          <label for="">Nome do Produto: </label>
          <input type="text" placeholder="Digite o nome do produto" id="nome">

          <br>

          <label for="">Valor do Produto: </label>
          <input type="text" placeholder="Digite o valor do produto" id="valor">

          <br>

          <label for="">O produto esta disponivel? </label>
          <select name="disponivel" id="disponivel">
            <option value="1">Sim</option>
            <option value="2">Não</option>
          </select>
          <br>
          <button class="btn btn-success" onclick="enviarFormulario()">Enviar Cadastro</button>
          <br>
      </div>
      
  </div>
</body>
</html>