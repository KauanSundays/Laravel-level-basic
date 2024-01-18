<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $post->title }}</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
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

    <div class="modal fade" id="usernameModal" tabindex="-1" aria-labelledby="usernameModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="usernameModalLabel">Informe seu nome de usuário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="commentForm">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <input type="text" id="usernameInput" class="form-control" placeholder="Seu nome de usuário">
                        <textarea name="content" id="commentInput" class="form-control" placeholder="Escreva um comentário sobre esse post"></textarea>
                        <button type="submit" class="btn btn-primary" id="submitCommentBtn">Enviar Comentário</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#commentForm").submit(function(event) {
                event.preventDefault();

                var username = $("#usernameInput").val();
                var comment = $("#commentInput").val();
                var postId = {{ $post->id }};

                var data = {
                    _token: $("input[name='_token']").val(),
                    post_id: postId,
                    content: comment,
                    username: username
                };

                $.ajax({
                    type: 'POST',
                    url: '/comments',
                    data: data,
                    success: function(response) {
                        console.log(response);
                        $("#usernameModal").modal("hide");
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
</body>
</html>