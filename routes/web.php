<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\CategoriaController;
use GuzzleHttp\Middleware;

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

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::controller(ProductoController::class)->group(function(){
    Route::get('/producto', 'index')->middleware('auth')->name('producto');
    Route::post('/producto','store')->middleware('auth')->name('producto.store');
    Route::post('/producto/filter', 'filter_product')->middleware('auth')->name('filter');
    Route::post('/producto/search', 'search')->middleware('auth')->name('search');
    Route::get('/producto/{id}', 'show')->middleware('auth')->name('producto.show');
    Route::delete('/producto/{id}', 'destroy')->middleware('auth')->name('producto.destroy');
    Route::patch('/producto/{id}', 'update')->middleware('auth')->name('producto.update');
});

Route::controller(TrabajadorController::class)->group(function(){
    Route::get('/trabajador','index')->middleware('auth')->name('trabajador');
    Route::get('/trabajador_create', 'create')->middleware('auth')->name('trabajador.create');
    Route::post('/trabajador', 'store')->middleware('auth')->name('trabajador.store');
});

Route::controller(CategoriaController::class)->group(function(){
    Route::get('/categoria', 'index')->middleware('auth')->name('categoria');
    Route::post('/categoria', 'store')->middleware('auth')->name('categoria.store');
    Route::delete('/categoria/{id}', 'destroy')->middleware('auth')->name('categoria.destroy');
});




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
// Route::get('/categoria', function(){
//     return view('categorias');
// })->name('categoria');
