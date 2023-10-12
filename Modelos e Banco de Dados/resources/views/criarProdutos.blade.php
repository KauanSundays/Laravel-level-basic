<form action="/produtos/criar" method="POST">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome">
    <label for="preco">preco:</label>
    <input type="number" name="preco" id="preco">
    <button type="submit">Criar Produto</button>
</form>
