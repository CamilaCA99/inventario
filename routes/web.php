<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LogoutController;
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


Route::controller(LoginController::class)->middleware('guest')->group(function (){
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'store')->name('login.store');
});


Route::post('/logout', [LogoutController::class, 'store'])->name('logout');


Route::controller(RegisterController::class)->group(function (){
    Route::get('/register','index')->name('register');
    Route::post('/register', 'store')->name('register.store');
});


Route::controller(ProductoController::class)->group(function(){
    Route::get('/producto', 'index')->name('producto');
    Route::post('/producto','store')->name('producto.store');
});


Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');




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



//rutas de prueba
Route::get('/producto_detalle', function(){
    return view('producto_detalle');
});
Route::get('/trabajador', function(){
    return view('registrar_trabajador');
});
Route::get('/trabajadores', function(){
    return view('trabajadores');
});