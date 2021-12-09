<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <title>@yield('title')</title>
</head>
<body>
    <header>
        @yield('crud')
        <!--
        <div class="text">
            <h2 id="category">Registrar-Editar Liga</h2>
        </div>
        -->
        <div class="component">
            <div class="ellipse">
                <img src="/assets/icons/User Male.png" width="20px" align="center">
            </div>
            <span class="admin-name">Nombre Administrador</span> 
        </div>
    </header>
    <div class="big-container">
        <div class="side-bar">
            <div class="nav-side">
                <a href="{{route('home')}}">Menú</a>
                <a href="{{route('ligas.index')}}">Ligas</a>
                <a href="{{route('torneos.index')}}">Torneos</a>
                <a href="{{route('noticias.index')}}">Noticias</a>
                <a href="{{route('entrenadores.index')}}">Entrenadores</a>
            </div>
            
        </div>
        <div class="average-container">
            @yield('formulario')
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>