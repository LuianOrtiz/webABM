@extends('layouts.gestionar')

@section('title', 'Noticias')

@section('gestor')
    <div class="text">
        <h2 id="category">Gestionar Noticias</h2>
    </div>
@endsection

@section('content')
    @foreach ($noticias as $noticia) 
        <div class="row">
            <h2>{{$noticia->titulo}}</h2>
            <p></p>
            <div class="commons">
                <div class="ellipse" style="background-color: var(--ligas-row)" onclick="location.href = '{{route('noticias.edit',$noticia->titulo)}}';">
                    <img src="/assets/icons/Edit.png" width="15px" height="15px">
                </div>
                <div class="ellipse" style="background-color: red;" >
                <img src="/assets/icons/Delete.png" width="15px" height="15px">
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('agregar')
    <div class="ellipse" id="floating" onclick="location.href = '{{route('noticias.create')}}';">
        <p>+</p>
    </div>
@endsection