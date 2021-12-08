@extends('layouts.plantilla')

@section('title', 'Equipos create')
    
@section('content')
    <h1>En esta página podrás crear un equipo</h1>    
    <form action="{{route('equipos.store', $liga)}}" method="POST">
        
        @csrf

        <label>
            Nombre del equipo: <br>
            <input type="text" name="nombre_equipo" value="{{old('nombre_equipo')}}">
        </label>
        @error('nombre_equipo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
           Nombre del manager: <br>
            <input type="text" name="nombre_manager" value="{{old('nombre_manager')}}">
        </label>
        @error('nombre_manager')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        
        <br>
        <label>
            Apellido Paterno del Manager: <br>
            <input type="text" name="apaterno_manager" value="{{old('apaterno_manager')}}">
        </label>
        @error('apaterno_manager')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        
        <br>
        <label>
            Apellido materno del Manager: <br>
            <input type="text" name="amaterno_manager" value="{{old('amaterno_manager')}}">
        </label>
        @error('amaterno_manager')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Numero de la liga: <br>
            <input type="number" name="id_liga" value="{{old('id_liga')}}">
        </label>
        @error('id_liga')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Numero del entrenador: <br>
            <input type="number" name="id_entrenador" value="{{old('id_entrenador')}}">
        </label>
        @error('id_entrenador')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar nuevo equipo</button>
    </form>
@endsection
