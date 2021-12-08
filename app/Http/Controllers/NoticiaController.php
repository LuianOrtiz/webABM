<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Http\Requests\StoreNoticia;
use App\Http\Requests\UpdateNoticia;

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::paginate();
        return view('noticias.index',compact('noticias'));
    }

    public function create()
    {
        return view('noticias.create');
    }

    public function store(StoreNoticia $request)
    {
        $nueva_noticia = Noticia::create($request->all());
        return redirect()->route('noticias.index');
    }
    
    public function edit($noticia)
    {
        $noticia = Noticia::where('titulo', $noticia)->get();
        $noticia = $noticia[0];
        return view('noticias.edit', compact('noticia'));
    }
    
    public function update(UpdateNoticia $request, $noticia)
    {
        $noticia = Noticia::find($noticia);
        $noticia->update($request->all());
        return redirect()->route('noticias.index');
        
    }

    public function destroy($noticia)
    {
        $noticia = Noticia::find($noticia);
        $noticia->delete();
        return redirect()->route('noticias.index');

    }
}
