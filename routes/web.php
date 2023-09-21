<?php

use Illuminate\Support\Facades\Route;




Route::get('/posts/create', function () {
    return view('posts.create');
})->name('posts.create');
