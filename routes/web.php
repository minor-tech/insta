<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('layouts.guest');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/{username}', [ProfileController::class, 'show'])->name('profile.show');
    Route::post('/post/create', [PostController::class, 'create'])->name('post.create');


    Route::get('/home', function () {
        return view('layouts.home');
    })->name('home');
});

require __DIR__ . '/auth.php';
