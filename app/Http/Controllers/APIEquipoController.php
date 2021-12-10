<?php

namespace App\Http\Controllers;

use App\Models\Liga;
use App\Models\Equipo;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLiga;
use App\Http\Requests\UpdateLiga;
use  Illuminate\Support\Str;

class APIEquipoController extends Controller
{

    public function getAll($id_liga){
        //$liga_nombre = Liga::select('id')->where('nombre_liga',$liga)->get();
        $equipos = Equipo::where('id_liga',$id_liga)->get();
        return $equipos;
    }

    public function getEquipo($id_liga,$id_equipo){
        $equipo = Equipo::where('id',$id_equipo)->get();
        return $equipo;
    }
}