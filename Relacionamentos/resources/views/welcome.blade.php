<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Relacionamentos</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">
</head>
<body>
    <h1>Posts</h1>
    @dd($posts)
    @foreach ($posts as $post)
        <div class="post">
            <div class="post-title">{{ $post->title }}</div>
            <a href="{{ route('posts.show', ['post' => $post]) }}">Ver mais...</a>
        </div>
    @endforeach
</body>
</html>