<form action="/produtos/criar" method="POST">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome">
    <label for="preco">Preço:</label>
    <input type="number" name="preco" id="preco">
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="background-color: red"> <Span>{{ $error }}</Span></li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <button type="submit">Criar Produto</button>
</form>
