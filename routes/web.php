<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EntrenadorController;
use App\Http\Controllers\EquipoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\LigaController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\TorneoController;
use Illuminate\Support\Facades\Auth;

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


/*
*   ======================================  *
*   RUTAS DE ADMINISTRACION PARA LA PAGINA  *
*   ======================================  *
*/

//Route::get('/admon', HomeController::class)->name('home');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//CRUD LIGAS
Route::get('/admon/ligas', [LigaController::class, 'index'])->name('ligas.index');
Route::get('/admon/ligas/crear', [LigaController::class, 'create'])->name('ligas.create');
Route::post('admon/ligas', [LigaController::class, 'store'])->name('ligas.store');
Route::get('/admon/ligas/{liga}', [LigaController::class, 'edit'])->name('ligas.edit');
Route::put('/admon/ligas/{liga}', [LigaController::class, 'update'])->name('ligas.update');
Route::delete('/admon/ligas/{liga}', [LigaController::class, 'destroy'])->name('ligas.destroy');

//CRUD TORNEOS
Route::get('/admon/torneos', [TorneoController::class, 'index'])->name('torneos.index');
Route::get('/admon/torneos/crear', [TorneoController::class, 'create'])->name('torneos.create');
Route::post('/admon/torneos', [TorneoController::class, 'store'])->name('torneos.store');
Route::get('/admon/torneos/{torneo}', [TorneoController::class, 'edit'])->name('torneos.edit');
Route::put('/admon/torneos/{torneo}', [TorneoController::class, 'update'])->name('torneos.update');
Route::delete('/admon/torneos/{torneo}', [TorneoController::class, 'destroy'])->name('torneos.destroy');

//CRUD NOTICIAS
Route::get('/admon/noticias', [NoticiaController::class, 'index'])->name('noticias.index');
Route::get('/admon/noticias/crear', [NoticiaController::class, 'create'])->name('noticias.create');
Route::post('/admon/noticias', [NoticiaController::class, 'store'])->name('noticias.store');
Route::get('/admon/noticias/{noticia}', [NoticiaController::class, 'edit'])->name('noticias.edit');
Route::put('/admon/noticias/{noticia}', [NoticiaController::class, 'update'])->name('noticias.update');
Route::delete('/admon/noticias/{noticia}', [NoticiaController::class, 'destroy'])->name('noticias.destroy');

//CRUD ENTRENADOR 
#Cambiar xd
Route::get('/admon/entrenadores/', [EntrenadorController::class, 'index'])->name('entrenadores.index');
Route::get('/admon/entrenadores/crear', [EntrenadorController::class, 'create'])->name('entrenadores.create');
Route::post('/admon/entrenadores', [EntrenadorController::class, 'store'])->name('entrenadores.store');
Route::get('/admon/entrenadores/{entrenador}', [EntrenadorController::class, 'edit'])->name('entrenadores.edit');
Route::put('/admon/entrenadores/{entrenador}', [EntrenadorController::class, 'update'])->name('entrenadores.update');
Route::delete('/admon/entrenadores/{entrenador}', [EntrenadorController::class, 'destroy'])->name('entrenadores.destroy');

//CRUD EQUIPOS
Route::get('/admon/ligas/{liga}/equipos', [EquipoController::class, 'index'])->name('equipos.index');
Route::get('/admon/ligas/{liga}/equipos/crear', [EquipoController::class, 'create'])->name('equipos.create');
Route::post('/admon/ligas/{liga}/equipos', [EquipoController::class, 'store'])->name('equipos.store');
Route::get('/admon/ligas/{liga}/{equipo}', [EquipoController::class, 'edit'])->name('equipos.edit');
Route::put('/admon/ligas/{liga}/{equipo}', [EquipoController::class, 'update'])->name('equipos.update');
Route::delete('/admon/ligas/{liga}/{equipo}', [EquipoController::class, 'destroy'])->name('equipos.destroy');


//CRUD JUGADOR
Route::get('/admon/ligas/{liga}/{equipo}/jugadores/', [JugadorController::class, 'index'])->name('jugadores.index');
Route::get('/admon/ligas/{liga}/{equipo}/jugadores/crear', [JugadorController::class, 'create'])->name('jugadores.create');
Route::post('/admon/{liga}/{equipo}/jugadores', [JugadorController::class, 'store'])->name('jugadores.store');
Route::get('/admon/ligas/{liga}/{equipo}/jugadores/{jugador}', [JugadorController::class, 'edit'])->name('jugadores.edit');
Route::put('/admon/ligas/{liga}/{equipo}/jugadores/{jugador}', [JugadorController::class, 'update'])->name('jugadores.update');
Route::delete('/admon/ligas/{liga}/{equipo}/jugadores/{jugador}', [JugadorController::class, 'destroy'])->name('jugadores.destroy');


//CRUD ADMIN

/*
Route::get('/admon/{gestor}', [AdminController::class, 'show'])->name('admon.show');
Route::get('/admon/crear', [AdminController::class, 'create'])->name('admon.create');
Route::get('/admon/ligas/{liga}/equipos/', [AdminController::class, 'index'])->name('admon.show'); //gestor de equipos
Route::get('/admon/ligas/{liga}/{equipo}/jugadores', [AdminController::class, 'index'])->name('admon.show'); //gestor de jugadores
Route::get('/admon/ligas/{liga}/{equipo}/entrenadores', [AdminController::class, 'index'])->name('admon.show'); //gestor de entrenadores
*/



