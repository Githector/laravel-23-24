<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

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

Route::get ('/register', [RegisterController::class, 'index'])->name('register');
Route::post ('/register', [RegisterController::class, 'store']);

Route::get ('/login', [LoginController::class, 'index'])->name('login');
Route::post ('/login', [LoginController::class, 'authenticate']);

//Route::get('/wall', [PostController::class, 'index'])->name('posts.index');
Route::get('/{user:username}', [PostController::class, 'index'])->name('posts.index');

Route::get('posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('posts/store', [PostController::class, 'store'])->name('posts.store');
Route::get('posts/remove/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::post('/switchlike/{post}/likes',[LikeController::class,'switchLike'])->name('posts.likes.switch');
Route::post('/posts/{post}/likes',[LikeController::class,'store'])->name('posts.likes.store');
Route::delete('/posts/{post}/likes',[LikeController::class,'destroy'])->name('posts.likes.destroy');