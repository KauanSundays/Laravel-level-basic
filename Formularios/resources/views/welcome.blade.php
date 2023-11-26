<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <form method="POST" action="{{ route('cadastrar.produto') }}">
        @csrf
        <label>Nome do Produto</label>
        <input type="text" name="nome" required>
        @error('nome')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <label>Preço de Custo</label>
        <input type="number" name="preco_custo" step="0.01" required>
        @error('preco_custo')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <label>Disponível</label>
        <select name="disponivel" required>
            <option value="sim">Sim</option>
            <option value="nao">Não</option>
        </select>
        @error('disponivel')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <button>Enviar</button>
    </form>
</body>
</html>
