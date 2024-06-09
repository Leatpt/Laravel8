<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::all();

    return view('posts', [
        'posts' => $posts
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) { //wrapping in {} makes it into a wildcard
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{categories}', function (Category $category) {

    return view('posts', [
        'posts' => $category->posts
    ]);
});