<?php

namespace App\Http\Controllers;

use App\Models\Liga;
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

    public function show($liga){
        return view('ligas.show', compact('liga'));
    }
}
