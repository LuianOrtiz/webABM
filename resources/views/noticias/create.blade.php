@extends('layouts.re_liga')

@section('title', 'Noticias create')

@section('crud')
    <div class="text">
        <h2 id="category">Crear Noticia</h2>
    </div>
@endsection

@section('formulario')
    <div class="registrar-editar">
        <div class="datos">
            <form action="{{route('noticias.store')}}" method="POST">
                @csrf

                <input type="text" name="titulo" placeholder="Titulo" value="{{old('titulo')}}">
                @error('titulo')
                <small>*{{$message}}</small>
                <br>
                @enderror
                <input type="text"name="descripcion" value="{{old('descripcion')}}" placeholder="Nombre del responsable">
                @error('descripcion')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="fecha_noticia" value="{{old('fecha_noticia')}}" placeholder="Fecha noticia">
                @error('fecha_noticia')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="nombre_autor" value="{{old('nombre_autor')}}" placeholder="Autor">
                @error('nombre_autor')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="apaterno_autor" value="{{old('apaterno_autor')}}" placeholder="Apellido Paterno">
                @error('apaterno_autor')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="apaterno_autor" value="{{old('apaterno_autor')}}" placeholder="Apellido Materno">
                @error('amaterno_autor')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                
                <div class="last" id="reg-ed-equipo-logo">
                    <div style="margin-top: 1em">
                        <label for="formFile">Portada</label>
                        <input class="form-control form-control-lg" id="input-file" type="file">
                    </div>
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