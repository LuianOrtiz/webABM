<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Http\Requests\StoreNoticia;
use App\Http\Requests\UpdateNoticia;
use  Illuminate\Support\Str;
use PHPUnit\Framework\Error\Notice;

class APINoticiaController extends Controller
{
    
    public function getAll(){
        $noticias = Noticia::all();
        return $noticias;
    }
}
