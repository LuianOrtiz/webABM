<?php

namespace App\Http\Controllers;

use App\Models\Torneo;
use Illuminate\Http\Request;

class TorneosController extends Controller
{
    public function index()
    {
        $torneos = Torneo::paginate();
        return view('torneos.index', compact('torneos'));
    }

    public function create()
    {
        return view();
    }
}
