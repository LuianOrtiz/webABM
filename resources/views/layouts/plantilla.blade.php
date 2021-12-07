<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.css">
    <title>@yield('title')</title>
</head>
<body>
     <!--Navbar-->
     <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-options"
                    aria-controls="navbar-options" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar-options">
                    <div class="container d-flex justify-content-end">
                        <ul class="navbar-nav ">
                            <li class="nav-item pe-4">
                                <a class="nav-link" href="./Inicio.html">Conócenos</a>
                            </li>
                            <li class="nav-item pe-4">
                                <a class="nav-link" href="./Ligas.html">Ligas</a>
                            </li>
                            <li class="nav-item pe-4">
                                <a class="nav-link" href="./Torneos.html">Torneos</a>
                            </li>
                            <li class="nav-item pe-4">
                                <a class="nav-link" href="./Noticias.html">Noticias</a>
                            </li>
                            <li class="nav-item pe-4">
                                <a class="nav-link" href="./Contacto.html">Contacto</a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </nav>
    </header>
    
    @yield('content')
    
    <footer>
        <div>Asociación de Besbolistas michoacanos</div>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
