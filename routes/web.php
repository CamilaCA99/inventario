<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/logout', [LogoutController::class, 'index']);


Route::controller(RegisterController::class)->group(function (){
    Route::get('/register','index')->name('register');
    Route::post('register', 'create')->name('register.create');
});



Route::get('/home', [HomeController::class, 'index']);


Route::get('/producto', [ProductoController::class, 'index']); /*informacion productos*/

Route::post('/add', [ProductoController::class, 'create']);

Route::post('/edit', [ProductoController::class, 'update']);

Route::delete('/delete', [ProductoController::class, 'destroy']);


/*admin routes*/
Route::controller(UserController::class)->group(function (){
    Route::get('/users','index');
    Route::post('/users/create', 'create');
    Route::post('/users/update/{username}','update');
    Route::delete('/users/delete/{username}','destroy');
});
