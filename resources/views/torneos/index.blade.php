@extends('layouts.plantilla')
@section('tittle', 'Torneos')

@section('content')
    <section>
        <h2 class="titulo">Torneos</h2>
    </section>

    <section>
        @foreach ($torneos as $torneo)
        <div class="grid" id="torneos">
            <div class="row">
                <div class="col-lg-6">
                    <div class="container-r Container-big bg-primary justify-content-center mb-4">
                        <h2 class="encabezado d-flex justify-content-center mb-5 p-5">{{$torneo->nombre_torneo}} </h2>
                        <div class="grid">
                            <div class="d-flex justify-content-center">
                                <a href="{{$torneo->calendario}}" class="parrafo-white">Calenadrio</a>
                                <a href="{{$torneo->calendario}}" class="parrafo-white">Resultados</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        @endforeach
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="/js/index.js"></script>
@endsection