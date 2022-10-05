<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('post.index');
});

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('post.show');
