<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/create', [PostController::class, 'create'])->name('posts.create');

// REMEMBER TO ADD AUTH MIDDLEWARE ⬇️
Route::resource('/posts', PostController::class)->only(['store', 'delete']);



Route::get('/links', function () {
    return view('pages.links');
})->name('links');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');
