<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $post->title }}</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
    <!-- Adicione o link do Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>

    <div>
        <input type="text" id="commentInput" placeholder="Escreva um comentário sobre esse post">
        <button id="openModalBtn" data-bs-toggle="modal" data-bs-target="#usernameModal">Enviar</button>
    </div>

    <h2>Comments:</h2>
    <ul>
        @foreach ($comments as $comment)
            <li>
                <strong>{{ $comment->username }}</strong>: {{ $comment->content }}
            </li>
        @endforeach
    </ul>

    <!-- Modal para inserir o nome de usuário -->
    <div class="modal fade" id="usernameModal" tabindex="-1" aria-labelledby="usernameModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="usernameModalLabel">Informe seu nome de usuário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" id="usernameInput" class="form-control" placeholder="Seu nome de usuário">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary" id="submitCommentBtn">Enviar Comentário</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#submitCommentBtn").click(function() {
                var username = $("#usernameInput").val();
                var comment = $("#commentInput").val();

                console.log("Username: " + username);
                console.log("Comment: " + comment);

                $("#usernameModal").modal("hide");
            });
        });
    </script>
</body>
</html>
