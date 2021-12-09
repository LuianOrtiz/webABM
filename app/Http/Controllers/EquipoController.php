<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEquipo;
use App\Http\Requests\UpdateEquipo;
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
       
        return view('equipos.create', compact('liga'));
    }

    public function store(StoreEquipo $request)
    {
        $liga = Liga::select('nombre_liga')->where('id', $request->id_liga)->get();
        $liga = $liga[0]->nombre_liga;
        $nuevo_equipo = Equipo::create($request->all());
        return redirect()->route('equipos.index',$liga);
    }


    public function edit($liga, $equipo)
    {
        $equipo_all = Equipo::where('nombre_equipo', $equipo)->get();
        $equipo = $equipo_all[0];
        return view('equipos.edit', compact('liga','equipo'));
    }

    public function update(UpdateEquipo $request, $liga, $equipo)
    {
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
