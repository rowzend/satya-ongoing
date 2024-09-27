<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsulanController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/auth-admin.php';
require __DIR__ . '/auth-verifikator.php';

Route::prefix('satya_lencana')->middleware(['auth:web'])->group(function () {
    Route::resource('usulan', UsulanController::class);
    Route::get('usulan/data', [UsulanController::class, 'getData'])->name('usulan.data');
    Route::post('usulan/{id}/kirim', [UsulanController::class, 'kirim'])->name('usulan.kirim');
});
