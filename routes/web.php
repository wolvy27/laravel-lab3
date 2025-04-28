<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

// Resource route for posts (this gives you GET /posts and GET /posts/{id})
Route::resource('posts', PostController::class);

// Special POST route for adding a comment to a post
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');