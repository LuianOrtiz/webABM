@extends('layouts.gestionar')

@section('title', 'Torneos')

@section('gestor')
    <div class="text">
        <h2 id="category">Gestionar Torneos</h2>
    </div>
@endsection
@section('content')
    @foreach ($torneos as $torneos) 
        <div class="row" style="background-color: #CAA97E;">
            <h2>{{$torneos->nombre_torneo}}</h2>
            <p></p>
            <div class="commons">
                <div class="ellipse" style="background-color: #CAA97E;" onclick="location.href = '{{route('torneos.edit',$torneos->nombre_torneo)}}';">
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
    <div class="ellipse" id="floating" onclick="location.href = '{{route('torneos.create')}}';">
        <p>+</p>
    </div>
@endsection