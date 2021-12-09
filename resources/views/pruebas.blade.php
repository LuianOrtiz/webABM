@section('content')
    <section>
        <h2 class="titulo">Nuestras Ligas</h2>
    </section>
    <section id="Lista-ligas">
        @foreach ($ligas as $liga)
        <div>
            <div class="liga">
                <div class="container-circle liga-logo">
                    <div class="container-r container-big">
                        <div class="liga-info">
                                <h2 class="encabezado">{{$liga->nombre_liga}}</h2>
                                <p class="parrafo white">
                                    {{$liga->localidad}}<br>
                                    De {{$liga->edad_minima}} a {{$liga->edad_maxima}} años <br>
                                    Responsable: {{$liga->nombre_responsable}}<br>
                                    Contacto: {{$liga->telefono_responsable}}<br> 
                                </p>
                                <div class="btn-equipos">
                                    <a href="" class="btn btn-outline-light ps-5 pe-5 pt-2 pb-2">Equipos</a>
                                </div>
                                <div>
                                    <form action="{{route('ligas.destroy', $liga)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit">Eliminar</button>
                                    </form>
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
    {{$ligas->links()}} 

@endsection
