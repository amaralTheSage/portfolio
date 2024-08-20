<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Nette\Utils\Html;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/create', [PostController::class, 'create'])->name('posts.create')->middleware('auth');

Route::resource('/posts', PostController::class)->only(['store', 'delete'])->middleware('auth');

Route::get('/links', function () {
    return view('pages.links');
})->name('links');


// AUTH 
Route::get('/login', function () {
    return view('pages.login');
})->name('login')->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate')->middleware('guest');


Route::get('/resume', function () {
    return Storage::download('public/Currículo.pdf', 'resume_gabriel_amaral.pdf');
})->name('download_resume');
