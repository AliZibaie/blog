<?php

use App\Http\Controllers\Blog\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//Route::resource('posts',PostController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
Route::resource('posts',PostController::class);
Route::get('posts/userPosts/{user}', [PostController::class , 'userPosts'])->name('posts.userPosts');
Route::post('posts', [PostController::class , 'showResult'])->name('posts.showFilterResult');
Route::get('posts/showFilterResult', [PostController::class , 'showResult'])->name('posts.showFilterResult');
//Route::get('/posts/{post}',[PostController::class, 'show'])->name('posts.show');
//Route::get('/showPosts',[ShowController::class, 'showPosts'])->name('showPosts');
//Route::get('posts', [PostController::class, 'index'])->name('posts.index');
//Route::get('posts.edit', [PostController::class, 'edit'])->name('posts.edit');
//Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
//Route::get('posts.create', [PostController::class, 'create'])->name('posts.create');
//Route::post('posts', [PostController::class, 'store'])->name('posts.store');
//Route::put('posts/{post}', [PostController::class, 'update'])->name('posts.update');
//Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');



require __DIR__.'/auth.php';
