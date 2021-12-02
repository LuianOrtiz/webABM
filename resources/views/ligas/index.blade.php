@extends('layouts.plantilla')

@section('title', 'Ligas')
    
@section('content')
    <h1> Bienvenido a la pagina de ligas </h1> 
    <ul>
        @foreach ($ligas as $liga)
        <li>    
            <section>
                <h3>{{$liga->nombre_liga}} </h3>
                <div>
                    <p>{{$liga->localidad}}</p>
                    <p>{{$liga->ciudad}}</p>
                </div>
                <div>
                    <p>{{$liga->edad_minima}}</p>
                    <p>{{$liga->edad_maxima}}</p>
                </div>
            </section>
                
            </li>   
        @endforeach
    </ul>
    
    {{$ligas->links()}}
@endsection
