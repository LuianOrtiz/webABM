<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEquipo;
use App\Http\Requests\UpdateEquipo;
use App\Models\Entrenador;
use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Liga;
use  Illuminate\Support\Str;

class EquipoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
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
        //return $request;
        $equipo = new Equipo();
        $equipo->nombre_equipo = $request->nombre_equipo;
        $equipo->apaterno_manager = $request->apaterno_manager;
        $equipo->amaterno_manager = $request->amaterno_manager;
        $equipo->nombre_manager = $request->nombre_manager;
        $id_liga = Liga::select('id')->where('nombre_liga',$liga)->get();
        $equipo->id_liga = $id_liga[0]->id;
        $equipo->id_entrenador = $request->id_entrenador;
        //script para subir la imagen
        if($request->hasFile("imagen")){
            $imagen = $request->file("imagen");
            $id_equipo = Equipo::all()->max('id');
            $id_equipo++;
            $nombre_imagen = Str::slug($id_equipo).".".$imagen->guessExtension();
            $ruta = public_path("assets/images/logos-equipos");
            $imagen->move($ruta,$nombre_imagen);
            $equipo->logo_equipo = $nombre_imagen;
        }

        $equipo->save();
        return redirect()->route('equipos.index',$liga);
        
        
        /*$id_liga = Liga::select('id')->where('nombre_liga',$request->id_liga)->get();
        $request["id_liga"] = $id_liga[0]->id;
       
        $nuevo_equipo = Equipo::create($request->all());
        */
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
        $equipo = Equipo::find($equipo);
        $equipo->nombre_equipo = $request->nombre_equipo;
        $equipo->apaterno_manager = $request->apaterno_manager;
        $equipo->amaterno_manager = $request->amaterno_manager;
        $equipo->nombre_manager = $request->nombre_manager;
        $id_liga = Liga::select('id')->where('nombre_liga',$liga)->get();
        $equipo->id_liga = $id_liga[0]->id;
        $equipo->id_entrenador = $request->id_entrenador;
        //script para subir la imagen
        if($request->hasFile("imagen")){
            $imagen = $request->file("imagen");
            $nombre_imagen = Str::slug($equipo->id).".".$imagen->guessExtension();
            $ruta = public_path("assets/images/logos-equipos");
            $imagen->move($ruta,$nombre_imagen);
            $equipo->logo_equipo = $nombre_imagen;
        }

        $equipo->update();
        return redirect()->route('equipos.index',$liga);
    }
    
    public function destroy($liga, $equipo)
    {
        $equipo = Equipo::find($equipo);
        $equipo->delete();
        return redirect()->route('equipos.index', $liga);
    }
}
