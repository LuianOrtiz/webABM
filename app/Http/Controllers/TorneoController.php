<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTorneo;
use App\Http\Requests\UpdateTorneo;
use App\Models\Torneo;
use Illuminate\Http\Request;

class TorneoController extends Controller
{
    public function index()
    {
        $torneos = Torneo::paginate();
        return view('torneos.index', compact('torneos'));
    }

    public function create()
    {
        return view('torneos.create');
    }

    public function store(StoreTorneo $request)
    {
        $nuevo_torneo = Torneo::create($request->all());
        return redirect()->route('torneos.index');
    }

    public function edit($torneo)
    {
        $torneo = Torneo::where('nombre_torneo', $torneo)->get();
        $torneo = $torneo[0];
        return view('torneos.edit', compact('torneo'));
        
    }
    
    public function update(UpdateTorneo $request, $torneo)
    {
        $torneo = Torneo::find($torneo);
        $torneo->update($request->all());
        return redirect()->route('torneos.index');
        
    }
    
    public function destroy($torneo)
    {
        $torneo = Torneo::find($torneo);
        $torneo->delete();
        return redirect()->route('torneos.index');

    }
}
