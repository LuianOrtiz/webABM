@extends('layouts.plantilla')

@section('title', 'Jugadores edit')

@section('content')
    <h1>Bienvenido al Jugadores del equipo {{$equipo}} de la liga {{$liga}}</h1>

    <form action="{{route('jugadores.update', [$liga, $equipo, $jugador])}}" method="POST">
        
        @csrf
        @method('put')
        <label>
            Nombre del jugador: <br>
            <input type="text" name="nombre_jugador" value="{{old('nombre_jugador', $jugador->nombre_jugador)}}">
        </label>
        @error('nombre_jugador')
            <br>
            <small><*{{$message}}/small>
            <br>
        @enderror

        <br>
        
        <label>
            Apellido Paterno del jugador: <br>
            <input type="text" name="apaterno_jugador" value="{{old('apaterno_jugador', $jugador->apaterno_jugador)}}">
        </label>
        @error('apaterno_jugador')
            <br>
            <small><*{{$message}}/small>
            <br>
        @enderror

        <br>
        
        <label>
            Apellido materno del jugador: <br>
            <input type="text" name="amaterno_jugador" value="{{old('amaterno_jugador', $jugador->amaterno_jugador)}}">
        </label>
        @error('amaterno_jugador')
            <br>
            <small><*{{$message}}/small>
            <br>
        @enderror

        <br>
        
        <label>
            Posición <br>
            <input type="number" name="id_posicion" value="{{old('id_posicion', $jugador->id_posicion)}}">
        </label>
        @error('id_posicion')
            <br>
            <small><*{{$message}}/small>
            <br>
        @enderror

        <br>
        <label>
            Equipo <br>
            <input type="number" name="id_equipo" value="{{old('id_equipo', $jugador->id_equipo)}}">
        </label>
        @error('id_equipo')
            <br>
            <small><*{{$message}}/small>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar edicion del jugador</button>
    </form>
    
@endsection