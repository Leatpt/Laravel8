<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::all();

    return view('posts', [
        'posts' => $posts
    ]);
});

Route::get('posts/{post}', function ($slug) { //wrapping in {} makes it into a wildcard
    return view('post', ['post' => Post::find($slug)]);
})->where('post', '[A-z_\-]+');