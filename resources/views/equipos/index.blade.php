@extends('layouts.gestionar')


@section('title', 'Equipos')

@section('gestor')

    <div class="text">
        <h2 id="category">Gestionar Equipos</h2>
    </div>
@endsection

@section('content')
    @foreach ($equipos as $equipo)
        <div class="row">
            <a style="text-decoration: none;" href="{{route('jugadores.index', [$liga, $equipo->nombre_equipo])}}"><h2 style="color: white;">{{$equipo->nombre_equipo}}</h2></a>
            <p></p>
            <div class="commons">
                <div class="ellipse" style="background-color: var(--ligas-row)" onclick="location.href = '{{route('equipos.edit', [$liga, $equipo->nombre_equipo])}}';">
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
    <div class="ellipse" id="floating" onclick="location.href = '{{route('equipos.create', $liga)}}';">
        <p>+</p>
    </div>
@endsection
