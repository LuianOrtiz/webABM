@extends('layouts.plantilla')

@section('title', 'Ligas create')
    
@section('content')
    <h1>En esta página podrás crear una liga</h1>    


    <form action="{{route('ligas.store')}}" method="POST">

        @csrf

        <label>
            Nombre Liga:<br>
            <input type="text" name="nombre_liga" value="{{old('nombre_liga')}}">
        </label>
        
        @error('nombre_liga')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Nombre Responsable:<br>
            <input type="text" name="nombre_responsable" value="{{old('nombre_responsable')}}">
        </label>
        
        @error('nombre_responsable')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Apellido Paterno Responsable:<br>
            <input type="text" name="apaterno_responsable" value="{{old('apaterno_responsable')}}">
        </label>
        <br>
        <label>
            Apellido Materno Responsable:<br>
            <input type="text" name="amaterno_responsable" value="{{old('amaterno_responsable')}}">
        </label>
        <br>
        <label>
            Telefono del Responsable:<br>
            <input type="text" name="telefono_responsable" value="{{old('telefono_responsable')}}">
        </label>
        <br>
        <label>
            Localidad:<br>
            <input type="text" name="localidad" value="{{old('localidad')}}">
        </label>
        @error('localidad')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        
        <br>
        <label>
            Ciudad:<br>
            <input type="text" name="ciudad" value="{{old('ciudad')}}">
        </label>
        @error('ciudad')
            <br> 
            <small>*{{$message}}</small>
            <br>
        @enderror
    
        <br>
        <label>
            Codigo Postal:<br>
            <input type="text" name="codigo_postal" value="{{old('codigo postal')}}">
        </label>
        <br>
        <label>
            Colonia:<br>
            <input type="text" name="colonia" value="{{old('colonia')}}">
        </label>
        <br>
        <label>
            Numero:<br>
            <input type="number" name="numero" value="{{old('numero')}}">
        </label>
        <br>
        <label>
            Edad minima:<br>
            <input type="number" name="edad_minima" value="{{old('edad_minima')}}">
        </label>
        @error('edad_minima')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Edad maxima:<br>
            <input type="number" name="edad_maxima" value="{{old('edad_maxima')}}">
        </label>
        @error('edad_maxima')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Enviar nueva liga</button>
    </form>
    
@endsection
