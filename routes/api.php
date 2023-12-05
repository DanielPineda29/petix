<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DomicilioController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\OfertaController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/nombre_URL',[nombre_Controlador::class,'nombre_Del_Metodo_A_Usar_Del_Controlador']);

Route::post('/registrarDomicilio', [DomicilioController::class,'create']);
Route::post('/registrarUsuario',[UsuarioController::class,'create'])->name('registrarUsuario');
Route::post('/registrarCategoria', [CategoriaController::class,'create']);
Route::post('/registrarProducto', [ProductoController::class, 'create']);
Route::post('/registrarOferta', [OfertaController::class, 'create']);

Route::get('/mostrarDomicilio/{id}', [DomicilioController::class, 'read']);
Route::get('/mostrarUsuario/{id}', [UsuarioController::class, 'read']);
Route::get('/mostrarCategoria/{id}', [CategoriaController::class, 'read']);
Route::get('/mostrarProducto/{id}', [ProductoController::class, 'read']);
Route::get('/mostrarOferta/{id}', [OfertaController::class, 'read']);

Route::put('/actualizarDomicilio/{id}', [DomicilioController::class, 'update']);
Route::put('/actualizarCategoria/{id}', [CategoriaController::class, 'update']);