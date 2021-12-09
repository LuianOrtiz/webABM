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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*API*/
//LIGAS
Route::get('/ligas',"App\Http\Controllers\LigaController@getAll");
Route::get('ligas/{liga}/',"App\Http\Controllers\LigaController@getLiga");
//EQUIPOS
Route::get('ligas/{liga}/equipos/',"App\Http\Controllers\EquipoController@getAll");
Route::get('ligas/{liga}/equipos/{Equipo}/',"App\Http\Controllers\EquipoController@getEquipo");
//JUGADORES
Route::get('ligas/{liga}/equipos/{Equipo}/jugadores',"App\Http\Controllers\JugadorController@getAll");
Route::get('ligas/{liga}/equipos/{Equipo}/jugadores/{jugador}',"App\Http\Controllers\JugadorController@getJugador");
//ENTRENADOR
Route::get('ligas/{liga}/equipos/{Equipo}/entrenador',"App\Http\Controllers\EntrenadorController@getEntrenador");
//NOTICIAS
Route::get('/noticias',"App\Http\Controllers\NoticiaController@getAll");
//TORNEOS
Route::get('/torneos',"App\Http\Controllers\TorneoController@getAll");
