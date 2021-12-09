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
        //$equipo_id = Equipo::select('id')->where('nombre_equipo', $equipo)->get();
        //$entrenadores_id = Equipo::select('id_entrenador')->where('id', $equipo_id[0]->id)->get();
        //$entrenadores = Entrenador::where('id', $entrenadores_id[0]->id_entrenador)->get();
        //return $entrenadores;
        $entrenadores = Entrenador::all();
        return view('entrenadores.index', compact('liga','equipo','entrenadores'));
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
    public function getEntrenador($id_liga,$id_equipo)
    {
        $id_entrenador = Equipo::select('id_entrenador')->where('id',$id_equipo)->get();
        $entrenador = Entrenador::where('id',$id_entrenador[0]->id_entrenador)->get();
        return $entrenador;
    }
}
