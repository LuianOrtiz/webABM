@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <!-- -->
    <!--Inicio-->
    <section>
        <div class="container-r container-wide img-c-90" id="banner-inicio">
            <h1 class="encabezado">Besbolistas michoacanos A.C</h1>
        </div>
    </section>

    <!--Conocenos-->
    <section>
        <div class="grid-conocenos">
            <div class="container-r container-big bg-primario">
                <h2 class="encabezado">Conocenos</h2>
                <p class="parrafo-white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Magnam voluptatum voluptate aperiam odio
                    obcaecati! Molestias ratione exercitationem modi cumque nam blanditiis quod. Atque ducimus omnis
                    obcaecati architecto totam distinctio. Assumenda.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Magnam voluptatum voluptate aperiam odio
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Magnam voluptatum voluptate aperiam odioLorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>
            <div class="conocenos-galeria">
                <div class="container-r container-tall img-c-90" id="conocenos-img-1"></div>
                <div class="container-r img-c-90" id="conocenos-img-2"></div>
                <div class="container-r" id="conocenos-img-3"></div>
            </div>
        </div>
    </section>

    <!--Ligas-->
    <section>
        <h2 class="titulo"> Nuestras Ligas</h2>
        <div class="container-fluid">
            <!---->
            <div class="ligas-grupo">
                <div class="container-circle ligas-item" id="logo-liga-1"></div>
                <div class="container-circle ligas-item" id="logo-liga-2"></div>
                <div class="container-circle ligas-item" id="logo-liga-3"></div>
                <div class="container-circle ligas-item" id="logo-liga-4"></div>
                <div class="container-circle ligas-item" id="logo-liga-5"></div>
            </div>
        </div>
    </section>

    <!--Torneos-->
    <section>
        <div class="grid-torneos">
            <div class="torneos-galeria">
                <div class="container-r" id="torneos-img-1"></div>
                <div class="container-r" id="torneos-img-2"></div>
            </div>
            <div class="container-r container-big bg-terciario">
                <h2 class="encabezado">Torneos</h2>
                <p class="parrafo-white">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Magnam voluptatum voluptate aperiam odio
                    obcaecati! Molestias ratione exercitationem modi cumque nam blanditiis quod. Atque ducimus omnis
                    obcaecati architecto totam distinctio. Assumenda.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Magnam voluptatum voluptate aperiam odio
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Magnam voluptatum voluptate aperiam odioLorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="image-mosaic" id="galeria">
            <div class="container-r card-tall card-wide"
                style="background-image: url('./assets/images/keith-johnston-NIrRqqrs0Fs-unsplash.jpg')"></div>
            <div class="container-r"
                style="background-image: url('./assets/images/diana-polekhina-w1sYdquxs-I-unsplash.jpg')"></div>
            <div class="container-r" style="background-image: url('./assets/images/bo-lane-8rTB0mImuUo-unsplash.jpg')">
            </div>
            <div class="container-r card-tall"
                style="background-image: url('./assets/images/geronimo-giqueaux-M_FdI_qrtNU-unsplash.jpg')"></div>
            <div class="container-r card-wide"
                style="background-image: url('./assets/images/josh-hemsley-e-f17L4EBBc-unsplash.jpg')"></div>
            <div class="container-r"
                style="background-image: url('./assets/images/keith-johnston-PenZT_IMrV8-unsplash.jpg')"></div>
            <div class="container-r"
                style="background-image: url('./assets/images/amanda-wolbert-YzKbXZtidT4-unsplash.jpg')"></div>
            <div class="container-r"
                style="background-image: url('./assets/images/kendall-scott-rYi3ZpupNlM-unsplash.jpg')"></div>
            <div class="container-r card-wide"
                style="background-image: url('./assets/images/antoine-schibler-P_NdM0ua3lg-unsplash.jpg')"></div>
        </div>
    </section>

    <!--contactanos-->
    <section>
        <div class="container-fluid d-flex justify-content-center mt-5">
            <p class="titulo"> Contáctanos</p>
        </div>
        <div class="contactanos container-fluid d-flex justify-content-evenly mt-5">
            <a href="https://www.facebook.com/BEISMICH"> <img src="assets/icons/facebook.png" width="100" height="100"> </a>
            <a href=""> <img src="assets/icons/whatsapp.png" width="100" height="100"> </a>
            <a href=""> <img src="assets/icons/email.png" width="100" height="100"> </a>
        </div>
    </section>

@endsection
