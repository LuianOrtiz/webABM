@extends('layouts.re_liga')

@section('title', 'Noticias edit')

@section('crud')
    <div class="text">
        <h2 id="category">Editar Noticia</h2>
    </div>
@endsection

@section('formulario')
    <div class="registrar-editar">
        <div class="datos">
            <form action="{{route('noticias.update', $noticia)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                <input type="text" name="titulo" placeholder="Titulo" value="{{old('titulo', $noticia->titulo)}}">
                @error('titulo')
                <small>*{{$message}}</small>
                <br>
                @enderror
                <input type="text"name="descripcion" value="{{old('descripcion', $noticia->descripcion)}}" placeholder="Nombre del responsable">
                @error('descripcion')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="date" name="fecha_noticia" value="{{old('fecha_noticia', $noticia->fecha_noticia)}}" placeholder="Fecha noticia">
                @error('fecha_noticia')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="nombre_autor" value="{{old('nombre_autor', $noticia->nombre_autor)}}" placeholder="Autor">
                @error('nombre_autor')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="apaterno_autor" value="{{old('apaterno_autor', $noticia->apaterno_autor)}}" placeholder="Apellido Paterno">
                @error('apaterno_autor')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="amaterno_autor" value="{{old('amaterno_autor', $noticia->amaterno_autor)}}" placeholder="Apellido Materno">
                @error('amaterno_autor')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                
                <div class="last" id="reg-ed-equipo-logo">
                    <div style="margin-top: 1em">
                        <label for="formFile">Portada</label>
                        <input class="form-control form-control-lg" id="input-file" name="imagen" type="file">
                    </div>
                    <button type="submit" class="btn">Actualizar</button>  
                </div>
            </form>
        </div>
    </div>
@endsection