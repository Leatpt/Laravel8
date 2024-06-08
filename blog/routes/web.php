<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::all();

    return view('posts', [
        'posts' => $posts
    ]);
});

Route::get('posts/{post}', function ($id) { //wrapping in {} makes it into a wildcard
    $post = Post::findorFail($id);

    return view('post', [
        'post' => $post
    ]);
});
