@section('content')
    <h1>Bienvenido al entrenador del equipo {{$equipo}} de la liga {{$liga}}</h1>

    <form action="{{route('entrenadores.update', [$liga, $equipo, $entrenador])}}" method="POST">
        
        @csrf
        @method('put')

        <label>
            Nombre del entrenador: <br>
            <input type="text" name="nombre_entrenador" value="{{old('nombre_entrenador', $entrenador->nombre_entrenador)}}">
        </label>
        @error('nombre_entrenador')
            <br>
            <small><*{{$message}}/small>
            <br>
        @enderror

        <br>
        
        <label>
            Apellido Paterno del entrenador: <br>
            <input type="text" name="apaterno_entrenador" value="{{old('apaterno_entrenador', $entrenador->apaterno_entrenador)}}">
        </label>
        @error('apaterno_entrenador')
            <br>
            <small><*{{$message}}/small>
            <br>
        @enderror

        <br>
        
        <label>
            Apellido materno del entrenador: <br>
            <input type="text" name="amaterno_entrenador" value="{{old('amaterno_entrenador', $entrenador->amaterno_entrenador)}}">
        </label>
        @error('amaterno_entrenador')
            <br>
            <small><*{{$message}}/small>
            <br>
        @enderror

        <br>
        
        <label>
            Fecha de nacimiento del entrenador <br>
            <input type="date" name="fecha_nacimiento" value="{{old('fecha_nacimiento', $entrenador->fecha_nacimiento)}}">
        </label>
        @error('fecha_nacimiento')
            <br>
            <small><*{{$message}}/small>
            <br>
        @enderror

        <br>
        <button type="submit">Envir edicion del entrenador</button>
    </form>
    
@endsection