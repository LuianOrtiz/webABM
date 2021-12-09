@extends('layouts.gestionar')

@section('title', 'Ligas')
    
@section('gestor')
    <div class="text">
        <h2 id="category">Gestionar Ligas</h2>
    </div>
@endsection

@section('content')
    @foreach ($ligas as $liga)
        <div class="row">
            <a style="text-decoration: none;" href="{{route('equipos.index', $liga->nombre_liga)}}"><h2 style="color: white;">{{$liga->nombre_liga}}</h2></a>
            <p></p>
            <div class="commons">
                <div class="ellipse" style="background-color: var(--ligas-row)" onclick="location.href = '{{route('ligas.edit', $liga->nombre_liga)}}';">
                    <img src="/assets/icons/Edit.png" width="15px" height="15px">
                </div>
                <form action="{{route('ligas.destroy',$liga)}}" method="POST"  class="ellipse" style="background-color: red; margin-left: 10px;" >
                    @csrf

                    @method('delete')
                    
                    <button type="submit" class="ellipse" style="border:none; background-color: red;"> <img src="/assets/icons/Delete.png" width="15px" height="15px"></button>
                </form>
                <!--
                <div class="ellipse" style="background-color: red;" onclick="location.href = '';">
                    <img src="/assets/icons/Delete.png" width="15px" height="15px">
                </div>
                -->
            </div>
        </div>
    @endforeach
@endsection
@section('agregar')
    <div class="ellipse" id="floating" onclick="location.href = '{{route('ligas.create')}}';">
        <p>+</p>
    </div>
@endsection