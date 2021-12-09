<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJugador;
use App\Http\Requests\UpdateJugador;
use App\Models\Jugador;
use App\Models\Equipo;
use App\Models\Liga;
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
        return view('jugadores.create', compact('liga','equipo'));

    }

    public function store(StoreJugador $request, $liga, $equipo)
    {
        $nuevo_jugador = Jugador::create($request->all());
        return redirect()->route('jugadores.index', [$liga, $equipo]);


    }

    public function edit($liga, $equipo, $jugador)
    {
        $jugador = Jugador::where('nombre_jugador', $jugador)->get();
        $jugador = $jugador[0];
        return view('jugadores.edit', compact('liga','equipo','jugador'));
    }

    public function update(UpdateJugador $request, $liga, $equipo, $jugador)
    {
        $jugador = Jugador::find($jugador);
        $jugador->update($request->all());
        return redirect()->route('jugadores.index', [$liga, $equipo]);
    }

    public function destroy($liga, $equipo, $jugador)
    {
        $jugador = Jugador::find($jugador);
        $jugador->delete();
        return redirect()->route('jugadores.index', $liga, $equipo);
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
