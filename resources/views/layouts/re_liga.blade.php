<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
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
            <div class="component-ad">
                <img src="/assets/icons/Settings.png" width="20px" height="20px">
                <span>Administrador</span>
            </div>
        </div>
        <div class="average-container">
            @yield('formulario')
            <!--
            <div class="registrar-editar">
                <div class="datos">
                    <form>
                        <input type="text" id="name" name="name" placeholder="Nombre">
                        <input type="text" id="locate" name="locate" placeholder="Localidad">
                        <input type="text" id="direc" name="direc" placeholder="Dirección">
                        <input type="text" id="respname" name="respname" placeholder="Nombre del responsable">
                        <input type="text" id="tel" name="tel" placeholder="Teléfono del responsable">
                    </form>
                </div>
                <div class="edades">
                    <form>
                        <label for="edadmin">Edad mínima</label> 
                        <input type="text" id="edadmin" name="edadmin">
                    </form>
                    <form>
                        <label for="edadmax">Edad maxíma</label> 
                        <input type="text" id="edadmax" name="edadmax">
                    </form>
                </div>
               <div class="last" id="reg-ed-equipo-logo">
                    <div class="logo">
                        <p>Logotipo</p>
                        <button class="ellipse"></button>
                    </div>
                    <div class="btn">
                        Guardar
                    </div>
               </div>
            </div>
            -->
        </div>
</div>
</body>
</html>