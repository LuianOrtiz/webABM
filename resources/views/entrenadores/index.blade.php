@extends('layouts.gestionar')

@section('title', 'Entrenadores')

@section('gestor')
    <div class="text">
        <h2 id="category">Gestionar Entrenadores</h2>
    </div>
@endsection

@section('content')
    @foreach ($entrenadores as $entrenador)
        <div class="row" style="background-color: #db901f;">
            <?php $entrenador_concat = $entrenador->nombre_entrenador . " " .$entrenador->apaterno_entrenador . " " . $entrenador->amaterno_entrenador; ?>
            <h2>{{$entrenador_concat}}</h2>
            <p></p>
            <div class="commons">
                <div class="ellipse" style="background-color: #db901f;" onclick="location.href = '{{route('entrenadores.edit', $entrenador->nombre_entrenador)}}';">
                    <img src="/assets/icons/Edit.png" width="15px" height="15px">
                </div>
                <form action="{{route('entrenadores.destroy',$entrenador)}}" method="POST"  class="ellipse" style="background-color: red; margin-left: 10px;" >
                    @csrf
                    @method('delete')
                    <button type="submit" class="ellipse" style="border:none; background-color: red;"> <img src="/assets/icons/Delete.png" width="15px" height="15px"></button>
                </form>
            </div>
        </div>
    @endforeach
@endsection

@section('agregar')
    <div class="ellipse" id="floating" onclick="location.href = '{{route('entrenadores.create')}}';">
        <p>+</p>
    </div>
@endsection
  