<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\auth\SessionController;
use App\Http\Controllers\auth\RegisteredUserController;

Route::get('/', [JobController::class, 'index']);


Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register.create');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');

    Route::get('/login', [SessionController::class, 'create'])->name('login.create');
    Route::post('/login', [SessionController::class, 'store'])->name('login.store');
});

Route::delete('/logout', [SessionController::class, 'destroy'])->name('login.destroy')->middleware('auth');
