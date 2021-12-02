<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index($liga){

        return view('equipos.index', compact('liga'));
    }

    public function create(){
        return view('equipos.create');
    }

    public function show($liga, $equipo){
        return view('equipos.show', compact('liga','equipo'));
    }
}
