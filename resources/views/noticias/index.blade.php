@extends('layouts.gestionar')

@section('title', 'Noticias')

@section('gestor')
    <div class="text">
        <h2 id="category">Gestionar Noticias</h2>
    </div>
@endsection

@section('content')
    @foreach ($noticias as $noticia) 
        <div class="row" style="background-color: #3C4A1E;">
            <h2>{{$noticia->titulo}}</h2>
            <p></p>
            <div class="commons">
                <div class="ellipse" style="background-color: #3C4A1E;" onclick="location.href = '{{route('noticias.edit',$noticia->titulo)}}';">
                    <img src="/assets/icons/Edit.png" width="15px" height="15px">
                </div>
                <form action="{{route('noticias.destroy',$noticia)}}" method="POST"  class="ellipse" style="background-color: red; margin-left: 10px;" >
                    @csrf

                    @method('delete')
                    
                    <button type="submit" class="ellipse" style="border:none; background-color: red;"> <img src="/assets/icons/Delete.png" width="15px" height="15px"></button>
                </form>
            </div>
        </div>
    @endforeach
@endsection

@section('agregar')
    <div class="ellipse" id="floating" onclick="location.href = '{{route('noticias.create')}}';">
        <p>+</p>
    </div>
@endsection