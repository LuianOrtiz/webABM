@extends('layouts.re_liga')

@section('title', 'Torneos edit')

@section('crud')
    <div class="text">
        <h2 id="category">Editar Torneo</h2>
    </div>
@endsection
@section('formulario')
    <div class="registrar-editar">
        <div class="datos">
            <form action="{{route('torneos.update', $torneo)}}" method="POST">
                @csrf
                @method('put')

                <input type="text" name="nombre_torneo" value="{{old('nombre_torneo', $torneo->nombre_torneo)}}" placeholder="Nombre del Torneo">
                @error('nombre_torneo')
                <small>*{{$message}}</small>
                <br>
                @enderror
                <input type="text" name="calendario" value="{{old('calendario', $torneo->calendario)}}" placeholder="Calendario">
                @error('calendario')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="resultados" value="{{old('resultados', $torneo->resultados)}}" placeholder="Resultados">
                @error('resultados')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                
                <div class="last" id="reg-ed-equipo-logo">
                    <button type="submit" class="btn">Actualizar</button>  
                </div>
            </form>
        </div>
    </div>
@endsection
    