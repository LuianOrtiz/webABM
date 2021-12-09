@extends('layouts.re_liga')

@section('title', 'Jugadores create')

@section('crud')
<div class="text">
    <h2 id="category">Registrar Jugador</h2>
</div>
@endsection

@section('formulario')
    <div class="registrar-editar">
        <div class="datos">
            <form action="{{route('jugadores.store', [$liga, $equipo])}}" method="POST">
                @csrf

                <input type="text" name="nombre_jugador" placeholder="Nombre del jugador" value="{{old('nombre_jugador')}}">
                @error('nombre_jugador')
                <small>*{{$message}}</small>
                <br>
                @enderror
                <input type="text"name="apaterno_jugador" value="{{old('apaterno_jugador')}}" placeholder="Apellido Paterno">
                @error('apaterno_jugador')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="amaterno_jugador" value="{{old('amaterno_jugador')}}" placeholder="Apellido Materno">
                @error('amaterno_jugador')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <br>
                <label >Posiciones: </label>
                <select name="id_posicion" style="margin-top: 4em">
                        @foreach ($posiciones as $posicion)
                        <option value="{{$posicion->id}}">{{$posicion->posicion}}</option>
                        @endforeach
                </select> 
                @error('id_posicion')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="id_equipo" value="{{old('id_equipo', $equipo)}}" >
                @error('id_equipo')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                
                <div class="last" id="reg-ed-equipo-logo">
                    <button type="submit" class="btn">Guardar</button>  
                </div>
            </form>
        </div>
    </div>
@endsection