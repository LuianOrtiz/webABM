@extends('layouts.plantilla')

@section('title', 'Ligas ', 'Equipos')
    
@section('content')
    <h1> Bienvenido a la liga {{$liga}}</h1>
    
    <ul>
        @foreach ($equipos as $equipo)
            <li>
                <section>
                    <h3>{{$equipo->nombre_equipo}}</h3>
                    <div>
                        <p>{{$equipo->nombre_manager}}</p>
                    </div>
                </section>
            </li>
        @endforeach
    </ul>    
@endsection
