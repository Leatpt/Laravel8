<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function ($slug) { //wrapping in {} makes it into a wildcard
    return view('post', ['post' => Post::find($slug)]);
})->where('post', '[A-z_\-]+');