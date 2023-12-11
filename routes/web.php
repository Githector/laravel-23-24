<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
Route::get ('/login', [RegisterController::class, 'login']);

Route::get('/wall', [PostController::class, 'index'])->name('posts.index');



