<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
    <title>@yield('title')</title>
</head>
<body>
    <header>
        @yield('gestor')
        <!-- 
            <div class="text">
                <h2 id="category">Gestionar Ligas</h2>
            </div>
        -->
        <div class="component">
            <div class="ellipse">
                <img src="../assets/icons/User Male.png" width="20px" align="center">
            </div>
            <span class="admin-name">Nombre Administrador</span> 
        </div>
    </header>
    <div class="big-container">
        <div class="side-bar">
            <div class="nav-side">
                <a href="Gestionar.html">Ligas</a>
                <a>Torneos</a>
                <a>Noticias</a>
            </div>
            <div class="component-ad">
                <img src="../assets/icons/Settings.png" width="20px" height="20px">
                <span>Administrador</span>
            </div>
        </div>
        <div class="average-container">
            <div class="gestionar-menu">
                <!--1-->
                @yield('content')
            </div>
        </div>
        @yield('agregar')
        <!-- 
            <div class="ellipse" id="floating" onclick="location.href = '/Registrar-Editar-Liga.html';">
                <p>+</p>
            </div>
        -->
    </div>
</div>
</body>
</html>