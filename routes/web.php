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

Route::get('torneos/', [TorneosController::class,'index'])->name('torneos.index');

Route::get('noticias/', [NoticiasController::class,'index'])->name('}');
Route::get('noticias/{noticia}', [NoticiasController::class,'show'])->name('');

Route::get('contacto/', [ContactoController::class,'index'])->name('');

//investigar si hay otras formas de subir imagenes. por medio de url?? omo
/*
*   ======================================  *
*   RUTAS DE ADMINISTRACION PARA LA PAGINA  *
*   ======================================  *
*/


//CRUD LIGAS
Route::get('/admon/ligas/crear', [LigaController::class, 'create'])->name('ligas.create');
Route::post('admon/ligas', [LigaController::class, 'store'])->name('ligas.store');
Route::get('/admon/ligas/{liga}', [LigaController::class, 'edit'])->name('ligas.edit');
Route::put('/admon/ligas/{liga}', [LigaController::class, 'update'])->name('ligas.update');
Route::get('/admon/ligas/eliminar', [LigaController::class, 'delete'])->name('ligas.delete');


/*
//CRUD EQUIPOS
Route::get('/admon/ligas/{liga}/equipos/crear', [EquipoController::class, 'create'])->name('equipos.create');
Route::get('/admon/ligas/{liga}/{equipo}', [EquipoController::class, 'edit'])->name('equipos.edit');
Route::get('/admon/ligas/{liga}/equipo/eliminar', [EquipoController::class, 'delete'])->name('equipos.delete');

//CRUD JUGADOR
Route::get('/admon/ligas/{liga}/{equipo}/jugadores/crear', [JugadorController::class, 'create'])->name('jugadores.create');
Route::get('/admon/ligas/{liga}/{equipo}/{jugador}', [JugadorController::class, 'edit'])->name('jugadores.edit');
Route::get('/admon/ligas/{liga}/{equipo}/jugadores/eliminar', [JugadorController::class, 'delete'])->name('jugadores.delete');

//CRUD ENTRENADOR
Route::get('/admon/ligas/{liga}/{equipo}/entrenadores/crear', [EntrenadorController::class, 'create'])->name('entrenadores.create');
Route::get('/admon/ligas/{liga}/{equipo}/{entrenador}/', [EntrenadorController::class, 'edit'])->name('entrenadores.edit');
Route::get('/admon/ligas/{liga}/{equipo}/entrenadores/eliminar', [EntrenadorController::class, 'delete'])->name('entrenadores.delete');

//CRUD TORNEOS
Route::get('/admon/torneos/crear', [TorneosController::class, 'create'])->name('torneos.create');
Route::get('/admon/torneos/{torneo}', [TorneosController::class, 'edit'])->name('torneos.edit');
Route::get('/admon/torneos/borrar', [TorneosController::class, 'delete'])->name('torneos.delete');

//CRUD NOTICIAS
Route::get('/admon/noticias/crear', [NoticiasController::class, 'create'])->name('noticias.create');
Route::get('/admon/noticias/{noticia}', [NoticiasController::class, 'edit'])->name('noticias.edit');
Route::get('/admon/noticias/borrar', [NoticiasController::class, 'delete'])->name('noticias.delete');

//CRUD ADMIN
Route::get('/admon/', [AdminController::class, 'index'])->name('admon.index');
Route::get('/admon/{gestor}', [AdminController::class, 'show'])->name('admon.show');
Route::get('/admon/crear', [AdminController::class, 'create'])->name('admon.create');
Route::get('/admon/ligas/{liga}/equipos/', [AdminController::class, 'index'])->name('admon.show'); //gestor de equipos
Route::get('/admon/ligas/{liga}/{equipo}/jugadores', [AdminController::class, 'index'])->name('admon.show'); //gestor de jugadores
Route::get('/admon/ligas/{liga}/{equipo}/entrenadores', [AdminController::class, 'index'])->name('admon.show'); //gestor de entrenadores

*/