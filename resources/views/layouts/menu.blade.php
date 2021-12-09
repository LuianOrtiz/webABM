<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
        <title>Panel General</title>
    </head>
    <body>
        <header>
            <div class="text">
                <h2 id="category">Administración General</h2>
            </div>
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
                <div class="main-menu">
                 
                        <div class="general-card" id="card-ligas">
                            <span class="" style="background-color: #174377;"><a href="{{route('ligas.index')}}">Gestionar Ligas</a></span>
                        </div>
                   
                   
                        <div class="general-card">
                            <span class="" style="background-color: #CAA97E;"><a href="{{route('torneos.index')}}">Gestionar Torneos</a></span>
                        </div>
                   
                   
                        <div class="general-card">
                            <span class="" style="background-color: #3C4A1E;"><a href="{{route('noticias.index')}}">Gestionar Noticias</a></span>
                        </div>
                    
                   
                        <div class="general-card">
                            <span class="" style="background-color: #db901f;"><a href="{{route('entrenadores.index')}}">Gestionar Entrenadores</a></span>
                        </div>
                    
                  
                        <div class="general-card">
                            <span class="" style="background-color: #C7011C;"><a href="">Registrar Administrador</a></span>
                        </div>
                </div>
            </div>
        </div>
    </body>
</html>