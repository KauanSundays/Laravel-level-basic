@section('content')
    <div class="container">
        <h1>Formulário de Contato</h1>
        <form action="{{ route('contact.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="subject">Assunto:</label>
                <input type="text" name="subject" id="subject" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="message">Mensagem:</label>
                <textarea name="message" id="message" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection