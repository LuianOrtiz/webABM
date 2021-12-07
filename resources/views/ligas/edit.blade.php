@extends('layouts.plantilla')

@section('title', 'Ligas edit')
    
@section('content')
    <h1>En esta página podrás editar una liga</h1>    


    <form action="{{route('ligas.update', $liga)}}" method="POST">

        @csrf
        @method('put')
        <label>
            Nombre Liga:<br>
            <input type="text" name="nombre_liga" value="{{$liga->nombre_liga}}" >
        </label>
        <br>
        <label>
            Nombre Responsable:<br>
            <input type="text" name="nombre_responsable" value="{{$liga->nombre_responsable}}">
        </label>
        <br>
        <label>
            Apellido Paterno Responsable:<br>
            <input type="text" name="apaterno_responsable" value="{{$liga->apaterno_responsable}}">
        </label>
        <br>
        <label>
            Apellido Materno Responsable:<br>
            <input type="text" name="amaterno_responsable" value="{{$liga->amaterno_responsable}}">
        </label><br>
        <label>
            Telefono del Responsable:<br>
            <input type="text" name="telefono_responsable" value="{{$liga->telefono_responsable}}">
        </label><br>
        <label>
            Localidad:<br>
            <input type="text" name="localidad" value="{{$liga->localidad}}">
        </label><br>
        <label>
            Ciudad:<br>
            <input type="text" name="ciudad" value="{{$liga->ciudad}}">
        </label><br>
        <label>
            Codigo Postal:<br>
            <input type="text" name="codigo_postal" value="{{$liga->codigo_postal}}">
        </label><br>
        <label>
            Colonia:<br>
            <input type="text" name="colonia" value="{{$liga->colonia}}">
        </label><br>
        <label>
            Numero:<br>
            <input type="number" name="numero" value="{{$liga->numero}}">
        </label><br>
        <label>
            Edad minima:<br>
            <input type="number" name="edad_minima" value="{{$liga->edad_minima}}">
        </label><br>
        <label>
            Edad maxima:<br>
            <input type="number" name="edad_maxima"  value="{{$liga->edad_maxima}}">
        </label>

        <br>
        <button type="submit">Actualizar liga {{$liga->nombre_liga}}</button>
    </form>
    
@endsection
