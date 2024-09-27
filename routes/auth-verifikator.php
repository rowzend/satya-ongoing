<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Verifikator\ProfileController;
use App\Http\Controllers\Verifikator\Auth\RegisteredUserController;
use App\Http\Controllers\Verifikator\Auth\AuthenticatedSessionController;

Route::middleware('guest:verifikator')->prefix('verifikator')->name('verifikator.')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth:verifikator')->prefix('verifikator')->name('verifikator.')->group(function () {
    Route::get('/dashboard', function () {
        return view('verifikator.dashboard');
    })->middleware(['verified'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});
