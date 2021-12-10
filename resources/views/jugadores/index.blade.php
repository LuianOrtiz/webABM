@extends('layouts.gestionar')

@section('title', 'Jugadores')

@section('gestor')
    <div class="text">
        <h2 id="category">Gestionar Jugadores del equipo "{{$equipo}}"</h2>
    </div>
@endsection

@section('content')
    @foreach ($jugadores as $jugador)
        <div class="row">
            <?php $jugador_concat = $jugador->nombre_jugador . " " .$jugador->apaterno_jugador . " " . $jugador->amaterno_jugador; ?>
            <h2>{{$jugador_concat}} </h2>
            <p></p>
            <div class="commons">
                <div class="ellipse" style="background-color: var(--ligas-row)" onclick="location.href = '{{route('jugadores.edit', [$liga, $equipo, $jugador->nombre_jugador])}}';">
                    <img src="/assets/icons/Edit.png" width="15px" height="15px">
                </div>
                <form action="{{route('jugadores.destroy', [$liga, $equipo, $jugador] )}}" method="POST"  class="ellipse" style="background-color: red; margin-left: 10px;" >
                    @csrf

                    @method('delete')
                    
                    <button type="submit" class="ellipse" style="border:none; background-color: red;"> <img src="/assets/icons/Delete.png" width="15px" height="15px"></button>
                </form>
            </div>
        </div>
    @endforeach
@endsection

@section('agregar')
    <div class="ellipse" id="floating" onclick="location.href = '{{route('jugadores.create', [$liga, $equipo])}}';">
        <p>+</p>
    </div>
@endsection
  