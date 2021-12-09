@extends('layouts.re_liga')

@section('title', 'Torneos create')

@section('crud')
    <div class="text">
        <h2 id="category">Crear Torneo</h2>
    </div>
@endsection
@section('formulario')
    <div class="registrar-editar">
        <div class="datos">
            <form action="{{route('torneos.store')}}" method="POST">
                @csrf

                <input type="text" name="nombre_torneo" value="{{old('nombre_torneo')}}" placeholder="Nombre del Torneo">
                @error('nombre_torneo')
                <small>*{{$message}}</small>
                <br>
                @enderror
                <input type="text" name="calendario" value="{{old('calendario')}}" placeholder="Calendario">
                @error('calendario')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="resultados" value="{{old('resultados')}}" placeholder="Resultados">
                @error('resultados')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

                <div class="last" id="reg-ed-equipo-logo">
                    <button type="submit" class="btn">Enviar</button>  
                </div>
            </form>
        </div>
<!--
<div class="edades">
    <form action="action="" method="POST">
        <label for="edadmin">Edad mínima</label> 
        <input type="text" name="edad_minima" value="">
       
    </form>
    <form action="action="" method="POST">
        <label for="edadmax">Edad maxíma</label> 
        <input type="text" name="edad_maxima" value="">
        
    </form>
</div>
-->

    </div>
@endsection