<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [LoginController::class, 'index']);

Route::get('/logout', [LogoutController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/producto', [ProductoController::class, 'index']); /*informacion productos*/

Route::post('/add', [ProductoController::class, 'create']);

Route::post('/edit', [ProductoController::class, 'update']);

Route::delete('/delete', [ProductoController::class, 'destroy']);