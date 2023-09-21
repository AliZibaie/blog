<?php

use App\Http\Controllers\Blog\PostController;
use Illuminate\Support\Facades\Route;







Route::resource('posts',PostController::class);
