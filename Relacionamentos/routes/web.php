<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentsController;


Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::post('/comments/{postId}', [CommentsController::class, 'store'])->name('comments.store');