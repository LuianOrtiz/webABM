@extends('layouts.re_liga')

@section('title', 'Entrenadores create')

@section('crud')
<div class="text">
    <h2 id="category">Registrar Entrenador</h2>
</div>
@endsection

@section('formulario')
    <div class="registrar-editar">
        <div class="datos">
            <form action="{{route('jugadores.store', [$liga, $equipo])}}" method="POST">
                @csrf

                <input type="text" name="nombre_entrenador" placeholder="Nombre del entrenador" value="{{old('nombre_entrenador')}}">
                @error('nombre_entrenador')
                <small>*{{$message}}</small>
                <br>
                @enderror
                <input type="text"name="apaterno_entrenador" value="{{old('apaterno_entrenador')}}" placeholder="Apellido Paterno">
                @error('apaterno_jugador')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="amaterno_entrenador" value="{{old('amaterno_entrenador')}}" placeholder="Apellido Materno">
                @error('amaterno_jugador')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="date" name="fecha_nacimiento" value="{{old('fecha_nacimiento')}}" placeholder="Fecha Nacimiento">
                @error('fecha_nacimiento')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                
                <div class="last" id="reg-ed-equipo-logo">
                    <div class="logo">
                        <p>Logotipo</p>
                        <button class="ellipse"></button>
                    </div>
                    <button type="submit" class="btn">Guardar</button>  
                </div>
            </form>
        </div>
    </div>
@endsection

  