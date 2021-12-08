<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJugador;
use App\Http\Requests\UpdateJugador;
use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function index($liga, $equipo)
    {
        return view('jugadores.index', compact('liga','equipo'));
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
}
