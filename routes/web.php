<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EntrenadorController;
use App\Http\Controllers\EquipoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\LigaController;
use App\Http\Controllers\TorneosController;

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

//Ruta legibles para el usuario
Route::get('/', HomeController::class);

Route::get('ligas', [LigaController::class, 'index'])->name('ligas.index');
Route::get('ligas/{liga}', [LigaController::class, 'show'])->name('ligas.show');
Route::get('ligas/{liga}/{equipo}', [EquipoController::class,'show'])->name('equipos.show');

Route::get('torneos/', [TorneosController::class,'index'])->name('');

Route::get('noticias/', [NoticiasController::class,'index'])->name('}');
Route::get('noticias/{noticia}', [NoticiasController::class,'show'])->name('');

Route::get('contacto/', [ContactoController::class,'index'])->name('');


/*
*   ======================================  *
*   RUTAS DE ADMINISTRACION PARA LA PAGINA  *
*   ======================================  *
*/


//CRUD LIGAS
Route::get('/admon/ligas/crear', [LigaController::class, 'create'])->name('ligas.create');
Route::get('/admon/ligas/{liga}', [LigaController::class, 'update'])->name('ligas.update');
Route::get('/admon/ligas/eliminar', [LigaController::class, 'delete'])->name('ligas.delete');

//CRUD EQUIPOS
Route::get('/admon/equipos/{liga}/equipos/crear', [EquipoController::class, 'create'])->name('equipos.create');
Route::get('/admon/equipos/{liga}/{equipo}', [EquipoController::class, 'update'])->name('equipos.update');
Route::get('/admon/equipos/{liga}/eliminar', [EquipoController::class, 'delete'])->name('equipos.delete');

//CRUD JUGADOR
Route::get('/admon/ligas/{liga}/{equpo}/jugadores/crear', [JugadorController::class, 'create'])->name('jugadores.create');
Route::get('/admon/ligas/{liga}/{equpo}/{jugador}', [JugadorController::class, 'update'])->name('jugadores.update');
Route::get('/admon/ligas/{liga}/{equpo}/jugadores/eliminar', [JugadorController::class, 'delete'])->name('jugadores.delete');

//CRUD ENTRENADOR
Route::get('/admon/ligas/{liga}/{equpo}/entrenadores/crear', [EntrenadorController::class, 'create'])->name('entrenadores.create');
Route::get('/admon/ligas/{liga}/{equpo}/{entrenador}/', [EntrenadorController::class, 'update'])->name('entrenadores.update');
Route::get('/admon/ligas/{liga}/{equpo}/entrenadores/eliminar', [EntrenadorController::class, 'delete'])->name('entrenadores.delete');

//CRUD TORNEOS
Route::get('/admon/torneos/crear', [TorneosController::class, 'create'])->name('torneos.create');
Route::get('/admon/torneos/{torneo}', [TorneosController::class, 'update'])->name('torneos.update');
Route::get('/admon/torneos/delete', [TorneosController::class, 'delete'])->name('torneos.delete');

//CRUD NOTICIAS
Route::get('/admon/noticias/crear', [NoticiasController::class, 'create'])->name('noticias.create');
Route::get('/admon/noticias/{noticia}', [NoticiasController::class, 'update'])->name('noticias.update');
Route::get('/admon/noticias/delete', [NoticiasController::class, 'delete'])->name('noticias.delete');

//CRUD ADMIN
Route::get('/admon/', [AdminController::class, 'index'])->name('admon.index');
Route::get('/admon/{gestor}', [AdminController::class, 'show'])->name('admon.show');
Route::get('/admon/crear', [AdminController::class, 'create'])->name('admon.create');

Route::get('/admon/equipos/{liga}/equipos/', [AdminController::class, 'index'])->name('admon.show'); //gestor de equipos
Route::get('/admon/equipos/{liga}/{equipo}/jugadores', [AdminController::class, 'index'])->name('admon.show'); //gestor de jugadores
Route::get('/admon/equipos/{liga}/{equipo}/entrenadores', [AdminController::class, 'index'])->name('admon.show'); //gestor de entrenadores