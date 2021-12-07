<?php

namespace App\Http\Controllers;

use App\Models\Liga;
use App\Models\Equipo;
use Illuminate\Http\Request;

class LigaController extends Controller
{
    //
    public function index(){

        $ligas = Liga::paginate();
        
        return view('ligas.index', compact('ligas'));
    }

    public function create(){
        return view('ligas.create');
    }

    public function store(Request $request)
    {
        $nueva_liga = new Liga();

        $nueva_liga->nombre_liga = $request->nombre_liga;
        $nueva_liga->nombre_responsable = $request->nombre_responsable;;
        $nueva_liga->apaterno_responsable = $request->apaterno_responsable;;
        $nueva_liga->amaterno_responsable = $request->amaterno_responsable;
        $nueva_liga->telefono_responsable = $request->telefono_responsable;
        $nueva_liga->localidad = $request->localidad;
        $nueva_liga->ciudad = $request->ciudad;
        $nueva_liga->codigo_postal = $request->codigo_postal;
        $nueva_liga->colonia = $request->colonia;
        $nueva_liga->numero = $request->numero;
        $nueva_liga->edad_minima = $request->edad_minima;
        $nueva_liga->edad_maxima = $request->edad_maxima;

        $nueva_liga->save();

        return redirect()->route('ligas.index');

    }

    public function show($liga){

        $liga_nombre = Liga::select('id')->where('nombre_liga',$liga)->get();
        $equipos = Equipo::where('id_liga',$liga_nombre[0]->id)->get();
        
        return view('ligas.show', compact('liga','equipos'));
    }

    public function edit($liga)
    {   
        $liga= Liga::where('nombre_liga',$liga)->get();
        $liga = $liga[0];
        return view('ligas.edit', compact('liga'));
    }
    
    public function update(Request $request,$liga)
    {
        $liga = Liga::find($liga);

        $liga->nombre_liga = $request->nombre_liga;
        $liga->nombre_responsable = $request->nombre_responsable;;
        $liga->apaterno_responsable = $request->apaterno_responsable;;
        $liga->amaterno_responsable = $request->amaterno_responsable;
        $liga->telefono_responsable = $request->telefono_responsable;
        $liga->localidad = $request->localidad;
        $liga->ciudad = $request->ciudad;
        $liga->codigo_postal = $request->codigo_postal;
        $liga->colonia = $request->colonia;
        $liga->numero = $request->numero;
        $liga->edad_minima = $request->edad_minima;
        $liga->edad_maxima = $request->edad_maxima;

        $liga->save();

        return redirect()->route('ligas.index');


    }
}
