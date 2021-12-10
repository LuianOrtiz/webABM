<?php

namespace App\Http\Controllers;

use App\Models\Liga;
use App\Models\Equipo;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLiga;
use App\Http\Requests\UpdateLiga;
use  Illuminate\Support\Str;

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
        $liga = new Liga();
        $liga->nombre_liga = $request->nombre_liga;
        $liga->nombre_responsable = $request->nombre_responsable;
        $liga->telefono_responsable = $request->telefono_responsable;
        $liga->localidad = $request->localidad;
        $liga->ciudad = $request->ciudad;
        $liga->edad_minima = $request->edad_minima;
        $liga->edad_maxima = $request->edad_maxima;
        //script para subir la imagen
        if($request->hasFile("imagen")){
            $imagen = $request->file("imagen");
            $id_liga = Liga::all()->max('id');
            $id_liga++;
            $nombre_imagen = Str::slug($id_liga).".".$imagen->guessExtension();
            $ruta = public_path("assets/images/logos-ligas");
            $imagen->move($ruta,$nombre_imagen);
            $liga->logo_liga = $nombre_imagen;
        }

        $liga->save();
        return redirect()->route('ligas.index');
        /*$input = $request->all();
        if($request->hasFile('image')){
            
            $destination_path = '/assets/images/logos-ligas';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);
            $input['logo_liga'] = $image_name;
            //return $input;
        }
        $nueva_liga = Liga::create($input); */
        
        
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
        $liga->nombre_liga = $request->nombre_liga;
        $liga->nombre_responsable = $request->nombre_responsable;
        $liga->telefono_responsable = $request->telefono_responsable;
        $liga->localidad = $request->localidad;
        $liga->ciudad = $request->ciudad;
        $liga->edad_minima = $request->edad_minima;
        $liga->edad_maxima = $request->edad_maxima;
        //script para subir la imagen
        if($request->hasFile("imagen")){
            $imagen = $request->file("imagen");
            $nombre_imagen = Str::slug($liga->id).".".$imagen->guessExtension();
            $ruta = public_path("assets/images/logos-ligas");
            $imagen->move($ruta,$nombre_imagen);
            $liga->logo_liga = $nombre_imagen;
        }

        $liga->update();
        return redirect()->route('ligas.index');

    }

    public function destroy($liga)
    {    
        $liga = Liga::find($liga);
        $liga->delete();
        return redirect()->route('ligas.index');
    }
}
