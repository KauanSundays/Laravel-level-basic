<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index($postId) 
    {
        $post = Post::findOrFail($postId);
        $comments = $post->comments; 

        return view('posts.show', compact('post', 'comments'));    
    }

    public function store(Request $request, $postId)
    {
        try {
            $request->validate([
                'content' => 'required',
                'username' => 'required',
            ]);
    
            $post = Post::findOrFail($postId);
    
            $comment = new Comment([
                'content' => $request->input('content'),
                'username' => $request->input('username'),
            ]);
    
            $post->comments()->save($comment);
    
            return redirect()->route('posts.show', $postId)->with('success', 'Comentário adicionado com sucesso!');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => $e->getMessage()]);
        }
    }    
}
