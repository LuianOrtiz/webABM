<?php

namespace App\Http\Controllers;

use App\Models\Entrenador;
use App\Models\Equipo;
use Illuminate\Http\Request;

class EntrenadorController extends Controller
{
    //
    public function getEntrenador($id_liga,$id_equipo){
        $id_entrenador = Equipo::select('id_entrenador')->where('id',$id_equipo)->get();
        $entrenador = Entrenador::where('id',$id_entrenador)->get();
        return $entrenador;
    }
}
