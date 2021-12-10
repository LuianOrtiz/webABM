@extends('layouts.re_liga')

@section('title', 'Equipos create')

@section('crud')
<div class="text">
    <h2 id="category">Registrar Equipo</h2>
</div>
@endsection

@section('formulario')
    <div class="registrar-editar">
        <div class="datos">
            <form action="{{route('equipos.store', $liga)}}" method="POST">
                @csrf

                <input type="text" name="nombre_equipo" placeholder="Nombre del equipo" value="{{old('nombre_equipo')}}">
                @error('nombre_equipo')
                <small>*{{$message}}</small>
                <br>
                @enderror
                <input type="text"name="nombre_manager" value="{{old('nombre_manager')}}" placeholder="Nombre del Manager">
                @error('nombre_manager')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="apaterno_manager" value="{{old('apaterno_manager')}}" placeholder="Apellido Paterno">
                @error('apaterno_manager')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="amaterno_manager" value="{{old('amaterno_manager')}}" placeholder="Apellido Materno">
                @error('amaterno_manager')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" readonly name="id_liga" value="{{old('nombre_liga', $liga)}}" >
                @error('id_liga')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <br>
                <label >Entrenador: </label>
                <select name="id_entrenador" style="margin-top: 4em">
                        @foreach ($entrenadores as $entrenador)
                        <option value="{{$entrenador->id}}">{{$entrenador->nombre_entrenador}}</option>
                        @endforeach
                </select>                    
                @error('id_entrenador')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <div style="margin-top: 1em">
                    <label for="formFile">Logo</label>
                    <input class="form-control form-control-lg" id="input-file" type="file">
                </div>


                <div class="last" id="reg-ed-equipo-logo">
                    <button type="submit" class="btn">Guardar</button>  
                </div>
            </form>
        </div>
    </div>
@endsection