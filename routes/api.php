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

//apis de chat
Route::post('message/send','App\Http\Controllers\Api\MessageController@send')->middleware('auth:api');
// Route::post('message/sendDM','App\Http\Controllers\Api\MessageController@sendDM')->middleware('auth:api');
Route::post('message/sendDM', 'App\Http\Controllers\Api\MessageController@sendDM')
    ->name('api.message.sendDM')
    ->middleware('auth:api');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('users','App\Http\Controllers\UsuarioController@store');
Route::post('login','App\Http\Controllers\UsuarioController@login');

//apis publicas
Route::group(['prefix' => 'v1'], function () {
   
Route::apiResource('busquedasusuario','App\Http\Controllers\BusquedaUsuarioController');
Route::apiResource('userreviews','App\Http\Controllers\UserReviewController');
Route::apiResource('posicionamientos','App\Http\Controllers\PosicionamientoController');
Route::apiResource('meinteresan','App\Http\Controllers\MeInteresaProductoController');
Route::apiResource('ofertas','App\Http\Controllers\OfertaController');
Route::apiResource('paises','App\Http\Controllers\PaisController');
Route::apiResource('idiomas','App\Http\Controllers\IdiomaController');
Route::apiResource('imgpath','App\Http\Controllers\ImagePathController');
Route::apiResource('infoproduct','App\Http\Controllers\InformacionProductoController');
Route::apiResource('fichastecnicas','App\Http\Controllers\FichaTecnicaController');
Route::apiResource('direcciones','App\Http\Controllers\DireccionController');
Route::apiResource('estados','App\Http\Controllers\EstadoController');
Route::apiResource('categorias','App\Http\Controllers\CategoriaController');
Route::apiResource('categoriasposicionamiento','App\Http\Controllers\CategoriaPosicionamientoController');
});

//apis privadas
Route::group(['prefix' => 'v2'], function () {
    Route::apiResource('carritoproducto','App\Http\Controllers\CarritoProductoController');

    Route::apiResource('categoriasvendedor','App\Http\Controllers\CategoriaVendedorController');
    Route::apiResource('ciudades','App\Http\Controllers\CiudadController');
    Route::apiResource('clientes','App\Http\Controllers\ClienteController');
    Route::apiResource('comentarios','App\Http\Controllers\ComentarioController');
    Route::apiResource('comprareclamos','App\Http\Controllers\CompraReclamoController');

    Route::apiResource('facturas','App\Http\Controllers\FacturaController');
    Route::apiResource('facturadetalles','App\Http\Controllers\FacturaDetalleController');

    Route::apiResource('formaspago','App\Http\Controllers\FormaPagoController');


    Route::apiResource('productos','App\Http\Controllers\ProductoController');
    Route::apiResource('productopreguntas','App\Http\Controllers\ProductoPreguntaController');
    Route::apiResource('productorespuestas','App\Http\Controllers\ProductoRespuestaController');
    Route::apiResource('productosvendidos','App\Http\Controllers\ProductoVendidoController');
    Route::apiResource('soportetickets','App\Http\Controllers\SoporteTicketController');
    Route::apiResource('soportetipos','App\Http\Controllers\SoporteTipoController');
    Route::apiResource('tiposreclamo','App\Http\Controllers\TipoReclamoController');


    Route::apiResource('vendedores','App\Http\Controllers\VendedorController');
    Route::apiResource('ventas','App\Http\Controllers\VentaController');
    Route::apiResource('ventapago','App\Http\Controllers\VentaPagoController');

    Route::apiResource('keyws','App\Http\Controllers\KeywordController');
    Route::apiResource('keywsproduct','App\Http\Controllers\KeywordProductController');

    Route::apiResource('passwreset','App\Http\Controllers\PasswordResetController');

});

Route::group(['middleware' => ['auth:api']], function () {

    //auth
    

    Route::ApiResource('keyws', 'App\Http\Controllers\KeywordController');
});