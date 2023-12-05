<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::view('/', 'welcome')->name('inicio');


Route::view('/atencion-cliente', 'atencionCliente')->name('atencion');
//Route::view('/nosotros', 'nosotros')->name('nosotros');
//Route::view('/carrito', 'carrito')->name('carrito');
Route::view('/sign-up', 'registro')->name('signup');
Route::view('/sign-in', 'iniciarSesion')->name('signin');

//Rutas protegidas

Route::get('/mascota-perro', 'MascotaController@mostrarPerro')->name('mascotaPerro');
Route::get('/mascota-gato', 'MascotaController@mostrarGato')->name('mascotaGato');
Route::get('/ofertas', 'OfertaController@index')->name('oferta');
Route::post('/store/cart-add', 'CartController@add')->name('cart.add');
