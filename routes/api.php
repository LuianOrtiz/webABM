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

//mostrar todos los registros
Route::get('/ligas',"App\Http\Controllers\LigaController@getAll");
Route::get('/noticias',"App\Http\Controllers\NoticiasController@getAll");
Route::get('/torneos',"App\Http\Controllers\TorneosController@getAll");
