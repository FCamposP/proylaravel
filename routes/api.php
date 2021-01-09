<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//todas las apis
Route::apiResource('categorias','App\Http\Controllers\BusquedaUsuarioController');
Route::apiResource('paises','App\Http\Controllers\CarritoProductoController');
Route::apiResource('categorias','App\Http\Controllers\CategoriaController');
Route::apiResource('paises','App\Http\Controllers\CategoriaPosicionamientoController');
Route::apiResource('categorias','App\Http\Controllers\CategoriaVendedorController');
Route::apiResource('paises','App\Http\Controllers\CiudadController');
Route::apiResource('categorias','App\Http\Controllers\ClienteController');
Route::apiResource('paises','App\Http\Controllers\ComentarioController');
Route::apiResource('categorias','App\Http\Controllers\CompraReclamoController');
Route::apiResource('paises','App\Http\Controllers\DireccionController');
Route::apiResource('categorias','App\Http\Controllers\EstadoController');
Route::apiResource('paises','App\Http\Controllers\FacturaController');
Route::apiResource('categorias','App\Http\Controllers\FacturaDetalleController');
Route::apiResource('paises','App\Http\Controllers\FichaTecnicaController');
Route::apiResource('categorias','App\Http\Controllers\FormaPagoController');
Route::apiResource('paises','App\Http\Controllers\IdiomaController');
Route::apiResource('categorias','App\Http\Controllers\ImagePathController');
Route::apiResource('paises','App\Http\Controllers\InformacionProductoController');
Route::apiResource('categorias','App\Http\Controllers\KeywordController');
Route::apiResource('paises','App\Http\Controllers\KeywordProductController');
Route::apiResource('categorias','App\Http\Controllers\MeInteresaProductoController');
Route::apiResource('paises','App\Http\Controllers\OfertaController');
Route::apiResource('categorias','App\Http\Controllers\PaisController');
Route::apiResource('paises','App\Http\Controllers\PasswordResetController');
Route::apiResource('categorias','App\Http\Controllers\PosicionamientoController');
Route::apiResource('paises','App\Http\Controllers\ProductoController');
Route::apiResource('categorias','App\Http\Controllers\ProductoPreguntaController');
Route::apiResource('paises','App\Http\Controllers\ProductoRespuestaController');
Route::apiResource('categorias','App\Http\Controllers\ProductoVendidoController');
Route::apiResource('paises','App\Http\Controllers\SoporteTicketController');
Route::apiResource('categorias','App\Http\Controllers\SoporteTipoController');
Route::apiResource('paises','App\Http\Controllers\TipoReclamoController');
Route::apiResource('categorias','App\Http\Controllers\UserReviewController');
Route::apiResource('paises','App\Http\Controllers\UsuarioController');
Route::apiResource('categorias','App\Http\Controllers\VendedorController');
Route::apiResource('paises','App\Http\Controllers\VentaController');
Route::apiResource('categorias','App\Http\Controllers\VentaPagoController');
