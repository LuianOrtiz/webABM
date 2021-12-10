<?php

namespace App\Http\Controllers;

use App\Models\Liga;
use App\Models\Equipo;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLiga;
use App\Http\Requests\UpdateLiga;

class LigaController extends Controller
{
    //
    public function index(){

        $ligas = Liga::all();
        
        return view('ligas.index', compact('ligas'));
    }

    public function getAll()
    {
        $ligas = Liga::all();
        return $ligas;
    }

    public function getLiga($id_liga){
        $liga = Liga::where('id',$id_liga)->get();
        return $liga;
    }

    public function create(){
        return view('ligas.create');
    }

    public function store(StoreLiga $request)
    { 
        
        $nueva_liga = Liga::create($request->all()); 
        return redirect()->route('ligas.index');
    
    }

    public function show($liga){

        $liga_nombre = Liga::select('id')->where('nombre_liga',$liga)->get();
        $equipos = Equipo::where('id_liga',$liga_nombre[0]->id)->get();
        return $liga;
        return view('ligas.show', compact('liga','equipos'));
    }


    public function edit($liga)
    {   
        $liga= Liga::where('nombre_liga',$liga)->get();
        $liga = $liga[0];
        return view('ligas.edit', compact('liga'));
    }
    
    public function update(UpdateLiga $request,$liga)
    {
        return $request;
        $liga = Liga::find($liga);
        $liga->update($request->all());
        return redirect()->route('ligas.index');

    }

    public function destroy($liga)
    {    
        $liga = Liga::find($liga);
        $liga->delete();
        return redirect()->route('ligas.index');
    }
}
