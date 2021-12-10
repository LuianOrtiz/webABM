<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJugador;
use App\Http\Requests\UpdateJugador;
use App\Models\Jugador;
use App\Models\Equipo;
use App\Models\Liga;
use App\Models\Posicion;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function index($liga, $equipo)
    {
        $equipo_id = Equipo::select('id')->where('nombre_equipo', $equipo)->get();
        $jugadores = Jugador::where('id_equipo', $equipo_id[0]->id)->get();
        return view('jugadores.index', compact('liga','equipo', 'jugadores'));
    }

    public function create($liga, $equipo)
    {
        $posiciones = Posicion::all();
     
        return view('jugadores.create', compact('liga','equipo', 'posiciones'));

    }

    public function store(StoreJugador $request, $liga, $equipo)
    {
        $id_equipo = Equipo::select('id')->where('nombre_equipo',$equipo)->get();
        $request['id_equipo'] = $id_equipo[0]->id;
        $nuevo_jugador = Jugador::create($request->all());
        return redirect()->route('jugadores.index', [$liga, $equipo]);


    }

    public function edit($liga, $equipo, $jugador)
    {
        $jugador_posicion = Jugador::where('nombre_jugador', $jugador)->get();
        $posicion = Posicion::select('posicion')->where('id',$jugador_posicion[0]->id_posicion)->get();
        $posicion = $posicion[0]->posicion;
        $jugador = Jugador::where('nombre_jugador', $jugador)->get();
        $jugador = $jugador[0];
        $posiciones = Posicion::all(); 
        return view('jugadores.edit', compact('liga','equipo','jugador','posiciones', 'posicion'));
    }

    public function update(UpdateJugador $request, $liga, $equipo, $jugador)
    {
        $jugador_pos = Jugador::select('id_posicion')->where('id', $jugador)->get();
        $jugador_pos = $jugador_pos[0]->id_posicion;
        
        $id_equipo = Equipo::select('id')->where('nombre_equipo', $request->id_equipo)->get();
        $request['id_equipo'] = $id_equipo[0]->id;
        $jugador = Jugador::find($jugador);
        $jugador->update($request->all());
        return redirect()->route('jugadores.index', [$liga, $equipo]);
    }

    public function destroy($liga, $equipo, $jugador)
    {   
        $jugador = Jugador::find($jugador);
        $jugador->delete();
        return redirect()->route('jugadores.index', [$liga, $equipo]);
    }

    public function getAll($id_liga,$id_equipo){
        $jugadores = Jugador::where('id_equipo',$id_equipo)->get();
        return $jugadores;
    }

    public function getJugador($id_liga,$id_equipo,$id_jugador){
        $jugador = Jugador::where('id',$id_jugador)->get();
        return $jugador;
    }
}
