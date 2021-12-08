@extends('layouts.plantilla')

@section('title', 'Torneos create')

@section('content')
    <h1>En esta pagina podras crear un torneo</h1>

    <form action="{{route('torneos.store')}}" method="POST">
        
        @csrf

        <label>
            Nombre del Torneo <br>
            <input type="text" name="nombre_torneo" value="{{old('nombre_torneo')}}">
        </label>
        @error('nombre_torneo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        
        <br>
        <label>
            Calendario <br>
            <textarea name="calendario" rows="5">{{old('calendario')}}</textarea>
        </label>
        @error('calendario')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Resultados <br>
            <textarea name="resultados" rows="5">{{old('resultados')}}</textarea>
        </label>
        @error('resultados')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
            
        <br>
        <button type="submit">Enviar nuevo torneo</button>
    </form>
@endsection