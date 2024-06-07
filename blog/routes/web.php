<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts');
});

Route::get('posts/{post}', function ($slug) { //wrapping in {} makes it into a wildcard
    $path = __DIR__ . "/../resources/posts/{$slug}.html";

    if (!file_exists($path)) {
        return redirect("/");
        // abort(404);
    }
    $post = file_get_contents($path);

    return view('post', [
        'post' => $post
    ]);
});