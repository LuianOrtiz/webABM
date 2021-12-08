@extends('layouts.plantilla')

@section('title', 'Torneos edit')

@section('content')
    <h1>En esta pagina podras crear un torneo</h1>

    <form action="{{route('torneos.update', $torneo)}}" method="POST">
        
        @csrf
        @method('put')

        <label>
            Nombre del Torneo
            <input type="text" name="nombre_torneo" value="{{old('nombre_torneo', $torneo->nombre_torneo)}}">
        </label>
        @error('nombre_torneo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        
        <br>
        <label>
            Calendario
            <textarea name="calendario" rows="5">{{old('calendario', $torneo->calendario)}}</textarea>
        </label>
        @error('calendario')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Resultados
            <textarea name="resultados" rows="5">{{old('resultados', $torneo->resultados)}}</textarea>
        </label>
        @error('resultados')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
            
        <br>
        <button type="submit">Actualizar torneo</button>
    </form>
@endsection
    