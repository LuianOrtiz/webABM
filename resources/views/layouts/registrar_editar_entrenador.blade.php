<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <div class="text">
            <h2 id="category">Registrar-Editar Entrenador</h2>
        </div>
        <div class="component">
            <div class="ellipse">
                <img src="img/User Male.png" width="20px" align="center">
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
                <img src="img/Settings.png" width="20px" height="20px">
                <span>Administrador</span>
            </div>
        </div>
        <div class="average-container">
            @yield('name')
            <div class="registrar-editar">
                <div class="datos" id="reg-ed-entrenador">
                    <form>
                        <input type="text" id="name" name="name" placeholder="Nombre entrenador">
                        <input type="text" id="name" name="name" placeholder="Apellido paterno del entrenador">
                        <input type="text" id="name" name="name" placeholder="Apellido materno del entrenador">
                        <input type="text" id="date" name="date" placeholder="Fecha de nacimiento">
                    </form>
                </div>
               <div class="last">
                    <div class="btn">
                        Guardar
                    </div>
               </div>
            </div>
        </div>
</div>
</body>
</html>