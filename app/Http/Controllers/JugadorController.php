<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Jugador;
use App\Models\Liga;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    //

    public function getAll($id_liga,$id_equipo){
        $jugadores = Jugador::where('id_equipo',$id_equipo)->get();
        return $jugadores;
    }

    public function getJugador($id_liga,$id_equipo,$id_jugador){
        $jugador = Jugador::where('id',$id_jugador)->get();
        return $jugador;
    }
}
