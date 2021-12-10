<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTorneo;
use App\Http\Requests\UpdateTorneo;
use App\Models\Torneo;
use Illuminate\Http\Request;

class APITorneoController extends Controller
{
    public function getAll(){
        $torneos = Torneo::all();
        return $torneos;
    }
}
