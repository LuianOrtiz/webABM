@extends('layouts.re_liga')

@section('title', 'Ligas edit')
    
@section('crud')
<div class="text">
    <h2 id="category">Editar Liga</h2>
</div>
@endsection
@section('formulario')
    <div class="registrar-editar">
        <div class="datos">
            <form action="{{route('ligas.store')}}" method="POST">
                @csrf
                @method('put')

                <input type="text" name="nombre_liga" placeholder="Nombre de la liga" value="{{old('nombre_liga',$liga->nombre_liga)}}">
                @error('nombre_liga')
                <small>*{{$message}}</small>
                <br>
                @enderror
                <input type="text"name="nombre_responsable" value="{{old('nombre_responsable',$liga->nombre_responsable)}}" placeholder="Nombre del responsable">
                @error('nombre_responsable')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <input type="text" name="telefono_responsable" value="{{old('telefono_responsable',$liga->telefono_responsable)}}" placeholder="Telefono del responsable">
                <input type="text" name="localidad" value="{{old('localidad',$liga->localidad)}}" placeholder="Localidad">
                <input type="text" name="ciudad" value="{{old('ciudad',$liga->ciudad)}}" placeholder="Ciudad">
                <input type="text" name="edad_minima" value="{{old('edad_minima',$liga->edad_minima)}}" placeholder="Edad minima">
                @error('edad_minima')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <br>
                <input type="text" name="edad_maxima" value="{{old('edad_maxima',$liga->edad_maxima)}}" placeholder="Edad maxima">
                @error('edad_maxima')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror
                <br>
                
                <div class="last" id="reg-ed-equipo-logo">
                    <div class="logo">
                        <p>Logotipo</p>
                        <button class="ellipse"></button>
                    </div>
                    <button type="submit" class="btn">Actualizar</button>  
                </div>
            </form>
        </div>
        <!--
        <div class="edades">
            <form action="action="" method="POST">
                <label for="edadmin">Edad mínima</label> 
                <input type="text" name="edad_minima" value="">
               
            </form>
            <form action="action="" method="POST">
                <label for="edadmax">Edad maxíma</label> 
                <input type="text" name="edad_maxima" value="">
                
            </form>
        </div>
        -->
        
    </div>
@endsection