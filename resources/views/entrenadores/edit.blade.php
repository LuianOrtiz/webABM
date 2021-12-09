@extends('layouts.re_liga')

@section('title', 'Entrenadores edit')

@section('crud')
<div class="text">
    <h2 id="category">Editar Entrenador</h2>
</div>
@endsection

@section('formulario')
    <div class="registrar-editar">
        <div class="datos">
            <form action="{{route('entrenadores.update', $entrenador)}}" method="POST">
                @csrf
                @method('put')
                <input type="text" name="nombre_entrenador" placeholder="Nombre del entrenador" value="{{old('nombre_entrenador', $entrenador->nombre_entrenador)}}">
                @error('nombre_entrenador')
                <small>*{{$message}}</small>
                <br>
                @enderror
                <input type="text"name="apaterno_entrenador" value="{{old('apaterno_entrenador', $entrenador->apaterno_entrenador)}}" placeholder="Apellido Paterno">
                @error('apaterno_jugador')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="amaterno_entrenador" value="{{old('amaterno_entrenador', $entrenador->amaterno_entrenador)}}" placeholder="Apellido Materno">
                @error('amaterno_jugador')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="date" name="fecha_nacimiento" value="{{old('fecha_nacimiento', $entrenador->fecha_nacimiento)}}" placeholder="Fecha Nacimiento">
                @error('fecha_nacimiento')
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

  