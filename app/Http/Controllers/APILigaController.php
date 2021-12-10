<?php

namespace App\Http\Controllers;

use App\Models\Liga;
use App\Models\Equipo;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLiga;
use App\Http\Requests\UpdateLiga;
use  Illuminate\Support\Str;

class APILigaController extends Controller
{

    public function getAll()
    {
        $ligas = Liga::all();
        return $ligas;
    }

    public function getLiga($id_liga){
        $liga = Liga::where('id',$id_liga)->get();
        return $liga;
    }
}