@extends('layouts.re_liga')

@section('title', 'Jugadores edit')

@section('crud')
<div class="text">
    <h2 id="category">Editar Jugador</h2>
</div>
@endsection

@section('formulario')
    <div class="registrar-editar">
        <div class="datos">
            <form action="{{route('jugadores.update', [$liga, $equipo, $jugador])}}" method="POST">
                @csrf
                @method('put')

                <input type="text" name="nombre_jugador" placeholder="Nombre del jugador" value="{{old('nombre_jugador', $jugador->nombre_jugador)}}">
                @error('nombre_jugador')
                <small>*{{$message}}</small>
                <br>
                @enderror
                <input type="text"name="apaterno_jugador" value="{{old('apaterno_jugador', $jugador->apaterno_jugador)}}" placeholder="Apellido Paterno">
                @error('apaterno_jugador')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="amaterno_jugador" value="{{old('amaterno_jugador', $jugador->amaterno_jugador)}}" placeholder="Apellido Materno">
                @error('amaterno_jugador')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="id_posicion" value="{{old('id_posicion', $jugador->id_posicion)}}" placeholder="Posición">
                @error('id_posicion')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="id_equipo" value="{{old('id_equipo', $jugador->id_equipo)}}" placeholder="Equipo">
                @error('id_equipo')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                
                <div class="last" id="reg-ed-equipo-logo">
                    <div class="logo">
                        <p>Logotipo</p>
                        <button class="ellipse"></button>
                    </div>
                    <button type="submit" class="btn">Actualizar</button>  
                </div>
            </form>
        </div>
    </div>
@endsection