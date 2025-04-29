<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DishController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);

Route::post('/login', [AuthController::class, 'login']);

// Ejemplo de ruta RESTful
Route::apiResource('posts', PostController::class);
Route::apiResource('dishes', DishController::class);
Route::get('/search-dishes/{word}', [DishController::class, 'searchByWord']);
