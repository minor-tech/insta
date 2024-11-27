<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('layouts.guest', ['title' => 'Guest Page']);
    })->name('guest');
    Route::get('/sign-up', function () {
        return view('layouts.register');
    })->name('register');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/{username}', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/post/create', [PostController::class, 'create'])->name('post.create');


    Route::get('/home', [PostController::class, 'index'])->name('home');
    Route::get('/explore', function () {
        return view('explore');
    });
});

require __DIR__ . '/auth.php';
