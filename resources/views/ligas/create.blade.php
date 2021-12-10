@extends('layouts.re_liga')

@section('title', 'Ligas create')
    
@section('crud')
<div class="text">
    <h2 id="category">Registrar Liga</h2>
</div>
@endsection

@section('formulario')
    <div class="registrar-editar">
        <div class="datos">
            <form action="{{route('ligas.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="text" name="nombre_liga" placeholder="Nombre de la liga" value="{{old('nombre_liga')}}">
                @error('nombre_liga')
                <small>*{{$message}}</small>
                <br>
                @enderror
                <input type="text"name="nombre_responsable" value="{{old('nombre_responsable')}}" placeholder="Nombre del responsable">
                @error('nombre_responsable')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="telefono_responsable" value="{{old('telefono_responsable')}}" placeholder="Telefono del responsable">
                <input type="text" name="localidad" value="{{old('localidad')}}" placeholder="Localidad">
                <input type="text" name="ciudad" value="{{old('ciudad')}}" placeholder="Ciudad">
                <input type="text" name="edad_minima" value="{{old('edad_minima')}}" placeholder="Edad minima">
                @error('edad_minima')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <br>
                <input type="text" name="edad_maxima" value="{{old('edad_maxima')}}" placeholder="Edad maxima">
                @error('edad_maxima')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <br>
                
                <div class="last" id="reg-ed-equipo-logo">
                    <div style="margin-top: 1em">
                        <label for="formFile">Logo</label>
                        <input class="form-control form-control-lg" name="imagen" id="input-file" type="file">
                    </div>
                    <button type="submit" class="btn">Guardar</button>  
                </div>
            </form>
        </div>
    </div>
@endsection
