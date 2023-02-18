<?php

use App\Controllers\PostController as PostController;
use App\Route\Route as Route;

Route::get('/', [PostController::class, 'show'])->name('name')->middleware('test');
Route::get('/posts', [PostController::class, 'show'])->name('name')->middleware('test');
Route::get('/posts/{post}', [PostController::class, 'create'])->name('create')->middleware('test');
Route::post('/posts', [PostController::class, 'store'])->name('store')->middleware('test');

//TODO: Add method that catch 404 route