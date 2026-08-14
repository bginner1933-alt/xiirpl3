<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Api\KategoriController;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/profile', [AuthController::class, 'profile']);
//     Route::post('/logout', [AuthController::class, 'logout']);

//     Route::get('/kategori', [KategoriController::class, 'index']);
//     Route::post('/kategori', [KategoriController::class, 'store']);
//     Route::put('/kategori/{id}', [KategoriController::class, 'update']);
//     Route::delete('/kategori/{id}', [KategoriController::class, 'destroy']);
// });
