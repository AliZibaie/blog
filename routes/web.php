<?php

use Illuminate\Support\Facades\Route;




Route::get('/posts/create', [\App\Http\Controllers\Blog\PostController::class,'create'])->name('posts.create');
Route::get('/posts/index', [\App\Http\Controllers\Blog\PostController::class,'index'])->name('posts.index');
Route::post('/posts',[\App\Http\Controllers\Blog\PostController::class,'store'])->name('posts.store');
