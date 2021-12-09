@extends('layouts.re_liga')

@section('title', 'Equipos edit')

@section('crud')
<div class="text">
    <h2 id="category">Editar Equipo</h2>
</div>
@endsection

@section('formulario')
    <div class="registrar-editar">
        <div class="datos">
            <form action="{{route('equipos.update', [$liga, $equipo])}}" method="POST">
                @csrf
                @method('put')

                <input type="text" name="nombre_equipo" placeholder="Nombre del equipo" value="{{old('nombre_equipo', $equipo->nombre_equipo)}}">
                @error('nombre_equipo')
                <small>*{{$message}}</small>
                <br>
                @enderror
                <input type="text"name="nombre_manager" value="{{old('nombre_manager', $equipo->nombre_manager)}}" placeholder="Nombre del Manager">
                @error('nombre_manager')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="apaterno_manager" value="{{old('apaterno_manager', $equipo->apaterno_manager)}}" placeholder="Apellido Paterno">
                @error('apaterno_manager')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="amaterno_manager" value="{{old('amaterno_manager', $equipo->apaterno_manager)}}" placeholder="Apellido Materno">
                @error('amaterno_manager')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="id_liga" value="{{old('id_liga', $equipo->id_liga)}}" placeholder="Liga">
                @error('id_liga')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="id_entrenador" value="{{old('id_entrenador', $equipo->id_entrenador)}}" placeholder="Entrenador">
                @error('id_entrenador')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                
                <div class="last" id="reg-ed-equipo-logo">
                    <div class="logo">
                        <p>Logotipo</p>
                        <button class="ellipse"></button>
                    </div>
                    <button type="submit" class="btn">Actualizar</button>  
                </div>
            </form>
        </div>
    </div>
@endsection