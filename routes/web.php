<?php

use App\Controllers\PostController as PostController;
use App\Controllers\AppController as AppController;
use App\Controllers\AuthController as AuthController;
use App\Controllers\UserController as UserController;

use App\Route\Route as Route;

Route::get('/', [AppController::class, 'home'])->name('index');
Route::get('/about-us', [AppController::class, 'aboutUs'])->name('about-us');
Route::get('/login', [AppController::class, 'login'])->name('login');
Route::get('/registration', [AppController::class, 'registration'])->name('registration');

/** Auth routes **/
Route::post('/sign-up', [AuthController::class, 'signUp'])->name('sign-up');
Route::post('/sign-in', [AuthController::class, 'signIn'])->name('sign-in');
Route::get('/log-out', [AuthController::class, 'logOut'])->name('log-out');
/** End auth routes **/

/** User routes **/
Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
Route::get('/user/cars', [UserController::class, 'userCars'])->name('user.cars');
/** End user routes **/


Route::get('/posts/dd', [PostController::class, 'show'])->name('name')->middleware('test');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('name')->middleware('test');
Route::post('/posts', [PostController::class, 'store'])->name('store')->middleware('test');
Route::post('/posts/create', [PostController::class, 'create'])->name('create')->middleware('test');

//TODO: Add method that catch 404 route