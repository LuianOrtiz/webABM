<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntrenador;
use App\Http\Requests\UpdateEntrenador;
use App\Models\Entrenador;
use App\Models\Equipo;
use App\Models\Liga;
use Illuminate\Http\Request;

class APIEntrenadorController extends Controller
{

    public function getEntrenador($id_liga,$id_equipo)
    {
        $id_entrenador = Equipo::select('id_entrenador')->where('id',$id_equipo)->get();
        $entrenador = Entrenador::where('id',$id_entrenador[0]->id_entrenador)->get();
        return $entrenador;
    }
}