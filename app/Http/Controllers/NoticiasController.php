<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function getAll(){
        $noticias = Noticia::all();
        return $noticias;
    }
}
