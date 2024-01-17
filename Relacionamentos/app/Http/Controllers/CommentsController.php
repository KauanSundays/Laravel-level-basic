<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index($postId) 
    {
        $post = Post::findOrFail($postId);
        dd($post);
        $comments = $post->comments; 

        return view('posts.show', compact('post', 'comments'));    
    }
}
