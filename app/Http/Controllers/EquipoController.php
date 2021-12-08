<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Liga;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index($liga){

        return view('equipos.index', compact('liga'));
    }

    public function getAll($id_liga){
        //$liga_nombre = Liga::select('id')->where('nombre_liga',$liga)->get();
        $equipos = Equipo::where('id_liga',$id_liga)->get();
        return $equipos;
    }

    public function getEquipo($id_liga,$id_equipo){
        $equipo = Equipo::where('id',$id_equipo)->get();
        return $equipo;
    }

    public function create(){
        return view('equipos.create');
    }

    public function show($liga, $equipo){
        return view('equipos.show', compact('liga','equipo'));
    }
}
