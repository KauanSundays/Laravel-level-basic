<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class Comments extends Controller
{
    public function index() 
    {
        $comments = Comment::all();
        return view('welcome', ['comment' => $comments]);    
    }
}
