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
            <form action="{{route('equipos.update', [$liga, $equipo])}}" method="POST" enctype="multipart/form-data">
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
                <input type="text" name="id_liga" value="{{old('nombre_liga', $liga)}}" >
                @error('id_liga')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <br>
                <label style="margin-top: 3em;">Entrenador Actual: </label>
                <input type="text" name="" value="{{old('id_entrenador', $entrenador)}}">
                <br>
                <label >Cambiar Entrenador: </label>
                <select name="id_entrenador" style="margin-top: 4em">
                        @foreach ($entrenadores as $entrenador)
                        <option value="{{$entrenador->id}}"> {{($entrenador->nombre_entrenador)}}</option>
                        @endforeach
                </select>
                @error('id_entrenador')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <div style="margin-top: 1em">
                    <label for="formFile">Logo</label>
                    <input class="form-control form-control-lg" id="input-file" name="imagen" type="file">
                </div>
                <div class="last" id="reg-ed-equipo-logo">
                    <button type="submit" class="btn">Actualizar</button>  
                </div>
            </form>
        </div>
    </div>
@endsection