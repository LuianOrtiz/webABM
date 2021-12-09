@extends('layouts.gestionar')

@section('title', 'Entrenadores')

@section('gestor')
    <div class="text">
        <h2 id="category">Gestionar Equipos</h2>
    </div>
@endsection

@section('content')
    @foreach ($entrenadores as $entrenador)
        <div class="row">
            <h2>{{$entrenador->nombre_entrenador}}</h2>
            <p></p>
            <div class="commons">
                <div class="ellipse" style="background-color: var(--ligas-row)" onclick="location.href = '{{route('jugadores.edit', [$liga, $equipo, $entrenador->nombre_entrenador])}}';">
                    <img src="/assets/icons/Edit.png" width="15px" height="15px">
                </div>
                <div class="ellipse" style="background-color: red;" >
                <img src="/assets/icons/Delete.png" width="15px" height="15px">
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('agregar')
    <div class="ellipse" id="floating" onclick="location.href = '';">
        <p>+</p>
    </div>
@endsection
  