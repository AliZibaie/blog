<?php

use Illuminate\Support\Facades\Route;




Route::get('/posts/create', [\App\Http\Controllers\Blog\PostController::class,'create'])->name('posts.create');
Route::post('/posts',[\App\Http\Controllers\Blog\PostController::class,'store'])->name('posts.store');
