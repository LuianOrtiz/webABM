@extends('layouts.gestionar')

@section('title', 'Torneos')

@section('gestor')
    <div class="text">
        <h2 id="category">Gestionar Torneos</h2>
    </div>
@endsection
@section('content')
    @foreach ($torneos as $torneo) 
        <div class="row" style="background-color: #CAA97E;">
            <h2>{{$torneo->nombre_torneo}}</h2>
            <p></p>
            <div class="commons">
                <div class="ellipse" style="background-color: #CAA97E;" onclick="location.href = '{{route('torneos.edit',$torneo->nombre_torneo)}}';">
                    <img src="/assets/icons/Edit.png" width="15px" height="15px">
                </div>
                <form action="{{route('torneos.destroy',$torneo)}}" method="POST"  class="ellipse" style="background-color: red; margin-left: 10px;" >
                    @csrf

                    @method('delete')
                    
                    <button type="submit" class="ellipse" style="border:none; background-color: red;"> <img src="/assets/icons/Delete.png" width="15px" height="15px"></button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
@section('agregar')
    <div class="ellipse" id="floating" onclick="location.href = '{{route('torneos.create')}}';">
        <p>+</p>
    </div>
@endsection