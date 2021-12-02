@extends('layouts.plantilla')

@section('title', 'Equipos ' . $equipo)
    
@section('content')
    <h1> Bienvenido al Equipo {{$equipo}}  de la liga {{$liga}}</h1>
    <p>Aquí veras información general de tu equipo favorito</p>    
@endsection
