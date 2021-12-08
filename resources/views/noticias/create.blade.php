@extends('layouts.plantilla')

@section('title', 'Noticias create')

@section('content')
    <h1>Creación de noticias</h1>

    <form action="{{route('noticias.store')}}" method="POST">
       
        @csrf
        
        <label >
            Titulo:<br>
            <input type="text" name="titulo" value="{{old('titulo')}}">
        </label>
        @error('titulo')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        
        <br>
        <label >
            Descripción:<br>
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>
        @error('descripcion')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        
        <br>
        <label >
            Fecha:<br>
            <input type="date" name="fecha_noticia" value="{{old('fecha_noticia')}}">
        </label>
        @error('fecha_noticia')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label>
            Nombre del autor:<br>
            <input type="text" name="nombre_autor" value="{{old('nombre_autor')}}">
        </label>
        @error('nombre_autor')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label >
            Apellido Paterno del autor:<br>
            <input type="text" name="apaterno_autor" value="{{old('apaterno_autor')}}">
        </label>
        @error('apaterno_autor')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror

        <br>
        <label >
            Apellido Materno del autor:<br>
            <input type="text" name="amaterno_autor" value="{{old('amaterno_autor')}}">
        </label>
        @error('amaterno_autor')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror


        <br>
        <button type="submit">Enviar nueva noticia</button>
    </form>
@endsection