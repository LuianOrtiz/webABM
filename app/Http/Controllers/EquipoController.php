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

        return view('equipos.index', compact('liga'));
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
