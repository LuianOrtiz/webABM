<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntrenador;
use App\Http\Requests\UpdateEntrenador;
use App\Models\Entrenador;
use App\Models\Equipo;
use App\Models\Liga;
use Illuminate\Http\Request;

class EntrenadorController extends Controller
{
    public function index($liga, $equipo)
    {
        return view('entrenadores.index', compact('liga','equipo'));
    }

    public function create($liga, $equipo)
    {
        return view('entrenadores.create', compact('liga','equipo'));

    }

    public function store(StoreEntrenador $request, $liga, $equipo)
    {
        $nuevo_entrenador = Entrenador::create($request->all());
        return redirect()->route('entrenadores.index', [$liga, $equipo]);


    }

    public function edit($liga, $equipo, $entrenador)
    {
        $entrenador = Entrenador::where('nombre_entrenador', $entrenador)->get();
        $entrenador = $entrenador[0];
        return view('entrenadores.edit', compact('liga','equipo','entrenador'));
    }

    public function update(UpdateEntrenador $request, $liga, $equipo, $entrenador)
    {
        $entrenador = Entrenador::find($entrenador);
        $entrenador->update($request->all());
        return redirect()->route('entrenadores.index', [$liga, $equipo]);
    }

    public function destroy($liga, $equipo, $entrenador)
    {
        $entrenador = Entrenador::find($entrenador);
        $entrenador->delete();
        return redirect()->route('entrenadores.index', $liga, $equipo);
    }
}
