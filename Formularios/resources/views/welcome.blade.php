<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('cadastrar.produto') }}">
        @csrf
        <label>Nome do Produto</label>
        <input type="text" name="nome" required>
        <br>
        <label>Disponível</label>
        <select name="disponivel" required>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>
        <br>
        <button>Enviar</button>
    </form>
</body>
</html>
