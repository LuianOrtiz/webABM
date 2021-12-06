@extends('layouts.plantilla')

@section('title', 'Ligas')
    
@section('content')
    <section>
        <h2 class="titulo">Nuestras Ligas</h2>
    </section>
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
    <div id="app">
        <example-component>
            
        </example-component>
    </div>
    <!-- {{$ligas->links()}} -->
@endsection
