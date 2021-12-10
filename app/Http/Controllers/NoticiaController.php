<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Http\Requests\StoreNoticia;
use App\Http\Requests\UpdateNoticia;
use  Illuminate\Support\Str;
use PHPUnit\Framework\Error\Notice;

class NoticiaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $noticias = Noticia::paginate();
        return view('noticias.index', compact('noticias'));
    }

    public function create()
    {
        return view('noticias.create');
    }

    public function store(StoreNoticia $request)
    {
        $noticia = new Noticia();
        $noticia->titulo = $request->titulo;
        $noticia->descripcion = $request->descripcion;
        $noticia->fecha_noticia = $request->fecha_noticia;
        $noticia->nombre_autor = $request->nombre_autor;
        $noticia->apaterno_autor = $request->apaterno_autor;
        $noticia->amaterno_autor = $request->amaterno_autor;
        //script para subir la imagen
        if($request->hasFile("imagen")){
            $imagen = $request->file("imagen");
            $id_noticia = Noticia::all()->max('id');
            $id_noticia++;
            $nombre_imagen = Str::slug($id_noticia).".".$imagen->guessExtension();
            $ruta = public_path("assets/images/noticias");
            $imagen->move($ruta,$nombre_imagen);
            $noticia->portada = $nombre_imagen;
        }

        $noticia->save();
        return redirect()->route('noticias.index');
    }
    
    public function edit($noticia)
    {
        $noticia = Noticia::where('titulo', $noticia)->get();
        $noticia = $noticia[0];
        
        //return $noticia;
        return view('noticias.edit', compact('noticia'));
    }
    
    public function update(UpdateNoticia $request, $noticia)
    {
        $noticia = Noticia::find($noticia);
        $noticia->titulo = $request->titulo;
        $noticia->descripcion = $request->descripcion;
        $noticia->fecha_noticia = $request->fecha_noticia;
        $noticia->nombre_autor = $request->nombre_autor;
        $noticia->apaterno_autor = $request->apaterno_autor;
        $noticia->amaterno_autor = $request->amaterno_autor;
        //script para subir la imagen
        if($request->hasFile("imagen")){
            $imagen = $request->file("imagen");
            $nombre_imagen = Str::slug($noticia->id).".".$imagen->guessExtension();
            $ruta = public_path("assets/images/noticias");
            $imagen->move($ruta,$nombre_imagen);
            $noticia->portada = $nombre_imagen;
        }

        $noticia->update();
        return redirect()->route('noticias.index');
    }

    public function destroy($noticia)
    {
        $noticia = Noticia::find($noticia);
        $noticia->delete();
        return redirect()->route('noticias.index');

    }
    public function getAll(){
        $noticias = Noticia::all();
        return $noticias;
    }
}
