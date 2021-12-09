<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEquipo;
use App\Http\Requests\UpdateEquipo;
use App\Models\Entrenador;
use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Liga;

class EquipoController extends Controller
{
    public function index($liga){
        $liga_id = Liga::select('id')->where('nombre_liga', $liga)->get();
        $equipos = Equipo::where('id_liga', $liga_id[0]->id)->get();
        return view('equipos.index', compact('liga', 'equipos'));
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

    public function create($liga){
        $entrenadores = Entrenador::select('id','nombre_entrenador')->get();
        return view('equipos.create', compact('liga', 'entrenadores'));
    }

    public function store(StoreEquipo $request, $liga)
    {   
        $id_liga = Liga::select('id')->where('nombre_liga',$request->id_liga)->get();
        $request["id_liga"] = $id_liga[0]->id;
       
        $nuevo_equipo = Equipo::create($request->all());
        return redirect()->route('equipos.index',$liga);
    }


    public function edit($liga, $equipo)
    {   
        $entrenadores = Entrenador::select('id','nombre_entrenador')->get();
        $equipo_all = Equipo::where('nombre_equipo', $equipo)->get();
        $equipo = $equipo_all[0];
        $entrenador = Entrenador::select('nombre_entrenador')->where('id', $equipo->id_entrenador)->get();
        $entrenador = $entrenador[0]->nombre_entrenador;
        return view('equipos.edit', compact('liga','equipo', 'entrenadores', 'entrenador'));
    }

    public function update(UpdateEquipo $request, $liga, $equipo)
    {   
        $id_liga = Liga::select('id')->where('nombre_liga',$request->id_liga)->get();
        $request["id_liga"] = $id_liga[0]->id;
        $equipo = Equipo::find($equipo);
        $equipo->update($request->all());
        return redirect()->route('equipos.index',$liga);
        
    }
    
    public function destroy($liga, $equipo)
    {
        $equipo = Equipo::find($equipo);
        $equipo->delete();
        return redirect()->route('equipos.index', $liga);
    }
}
