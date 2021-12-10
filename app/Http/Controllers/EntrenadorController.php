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
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    { 
        $entrenadores = Entrenador::all();
        return view('entrenadores.index', compact('entrenadores'));
    }

    public function create()
    {
        return view('entrenadores.create');

    }

    public function store(StoreEntrenador $request)
    {
        $nuevo_entrenador = Entrenador::create($request->all());
        return redirect()->route('entrenadores.index');


    }

    public function edit($entrenador)
    {
        $entrenador = Entrenador::where('nombre_entrenador', $entrenador)->get();
        $entrenador = $entrenador[0];
        return view('entrenadores.edit', compact('entrenador'));
    }

    public function update(UpdateEntrenador $request, $entrenador)
    {
        $entrenador = Entrenador::find($entrenador);
        $entrenador->update($request->all());
        return redirect()->route('entrenadores.index');
    }

    public function destroy($entrenador)
    {
        $entrenador = Entrenador::find($entrenador);
        $entrenador->delete();
        return redirect()->route('entrenadores.index');
    }
    public function getEntrenador($id_liga,$id_equipo)
    {
        $id_entrenador = Equipo::select('id_entrenador')->where('id',$id_equipo)->get();
        $entrenador = Entrenador::where('id',$id_entrenador[0]->id_entrenador)->get();
        return $entrenador;
    }
}
