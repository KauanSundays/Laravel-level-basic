<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="GET" action="{{ route('parametro_route', ['parametro' => '']) }}">
        <input type="text" name="parametro" placeholder="Insira o parâmetro">
        <button type="submit" class="bg-blue-500 text-white">Ir para página de parâmetro</button>
    </form>
</body>
</html>