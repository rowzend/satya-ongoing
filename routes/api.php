<?php

use App\Http\Controllers\Api\UsulanController;
use Illuminate\Support\Facades\Route;



Route::apiResource('/data', [UsulanController::class, 'index']);
Route::apiResource('/data', [UsulanController::class, 'store']);
