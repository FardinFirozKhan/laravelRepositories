<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

//code laravel repositories
Route::get('/post', [PostController::class, 'store']);
Route::get('/post/all', [PostController::class, 'getAll']);
Route::get('/post/update', [PostController::class, 'update']);

//code for Factory design pattern
Route::get('/user', [UserController::class, 'index']);