@extends('layouts.plantilla')

@section('title', 'Ligas create')
    
@section('content')
    <h1>En esta página podrás crear una liga</h1>    


    <form action="{{route('ligas.store')}}" method="POST">

        @csrf

        <label>
            Nombre Liga:<br>
            <input type="text" name="nombre_liga">
        </label>
        <br>
        <label>
            Nombre Responsable:<br>
            <input type="text" name="nombre_responsable">
        </label>
        <br>
        <label>
            Apellido Paterno Responsable:<br>
            <input type="text" name="apaterno_responsable">
        </label>
        <br>
        <label>
            Apellido Materno Responsable:<br>
            <input type="text" name="amaterno_responsable">
        </label><br>
        <label>
            Telefono del Responsable:<br>
            <input type="text" name="telefono_responsable">
        </label><br>
        <label>
            Localidad:<br>
            <input type="text" name="localidad">
        </label><br>
        <label>
            Ciudad:<br>
            <input type="text" name="ciudad">
        </label><br>
        <label>
            Codigo Postal:<br>
            <input type="text" name="codigo_postal">
        </label><br>
        <label>
            Colonia:<br>
            <input type="text" name="colonia">
        </label><br>
        <label>
            Numero:<br>
            <input type="number" name="numero">
        </label><br>
        <label>
            Edad minima:<br>
            <input type="number" name="edad_minima">
        </label><br>
        <label>
            Edad maxima:<br>
            <input type="number" name="edad_maxima">
        </label>

        <br>
        <button type="submit">Enviar nueva liga</button>
    </form>
    
@endsection
