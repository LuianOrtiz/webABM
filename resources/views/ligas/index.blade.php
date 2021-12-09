@extends('layouts.gestionar')

@section('title', 'Ligas')
    
@section('gestor')
    <div class="text">
        <h2 id="category">Gestionar Ligas</h2>
    </div>
@endsection

@section('ligas')
    @foreach ($ligas as $liga)
        <div class="row">
            <h2>{{$liga->nombre_liga}}</h2>
            <p></p>
            <div class="commons">
                <div class="ellipse" style="background-color: var(--ligas-row)" onclick="location.href = '{{route('ligas.edit', $liga->nombre_liga)}}';">
                    <img src="../assets/icons/Edit.png" width="15px" height="15px">
                </div>
                <div class="ellipse" style="background-color: red;" >
                <img src="../assets/icons/Delete.png" width="15px" height="15px">
                </div>
            </div>
        </div>
    @endforeach
@endsection