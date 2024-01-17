<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        
        return view('welcome', compact('posts'));
    }

    public function show($postId)
    {
        $post = Post::findOrFail($postId);
        $comments = $post->comments; // Relação definida no modelo Post

        return view('posts.show', compact('post', 'comments'));
    }
}
