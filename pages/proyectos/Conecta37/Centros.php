<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Centros participantes · Conecta 37</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../../../img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../../css/style.css" rel="stylesheet">
    <style>
        .btn-conecta37 {
            background-color: #015183;
            border-color: #015183;
            color: #ffffff;
            transition: background-color .3s ease, color .3s ease, border-color .3s ease;
        }

        .btn-conecta37:hover,
        .btn-conecta37:focus {
            background-color: #ffffff;
            border-color: var(--primary-hover);
            color: var(--primary-hover);
        }

        .logo-card img {
            max-height: 140px;
            object-fit: contain;
        }
    </style>
</head>

<body>
    <!-- Menú común -->
    <?php
        $img = "../../..";                // ruta a la carpeta de imagenes
        $pages = "../..";                 // ruta a la carpeta del resto de paginas de la web
        $index = "../../..";              // ruta a la carpeta del index.php
        include "../../../menu.php";      // incluye el menu comun
    ?>

    <div class="container-fluid hero-conecta py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 text-center">
            <h1 class="display-4 text-white mb-3">Centros participantes</h1>
            <p class="lead text-white mb-0">CEIPS y IES que impulsan Conecta 37 con proyectos y evidencias compartidas.</p>
            <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
                <a href="index.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Visi&oacute;n general</a>
                <a href="Encuentro37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Jornadas 26</a>
                <a href="Livehub37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Live Hub</a>
                <a href="Recursos37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Showcase de proyectos</a>
                <a href="Centros.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1 active" aria-current="page">Centros participantes</a>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row gy-4 mb-5 fact-item">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h4 class="section-title bg-white text-start text-primary pe-3">Conecta 37 es red</h4>
                        <p class="mb-0" style="text-align:justify;">
                            Esta edición reúne centros de Madrid y Murcia que comparten un objetivo común: mejorar Lengua y Matemáticas demostrando evidencias. Cada logotipo enlaza con la identidad de un centro que aporta equipo directivo, docentes y alumnado a la red Conecta 37.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row gy-4">
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card border-0 shadow-sm text-center h-100 logo-card">
                        <div class="card-body d-flex flex-column justify-content-center position-relative">
                            <a href="https://www.ceipsantodomingo.com" class="stretched-link d-inline-block mx-auto" target="_blank" rel="noopener noreferrer" aria-label="CEIPS Santo Domingo (Madrid)">
                                <img src="img/CEIPSSantoDomingo.png" class="img-fluid mx-auto" alt="Logotipo CEIPS Santo Domingo">
                            </a>
                        </div>
                    </div>
                </div>
                   
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card border-0 shadow-sm text-center h-100 logo-card">
                        <div class="card-body d-flex flex-column justify-content-center position-relative">
                            <a href="https://colegiolitterator.com" class="stretched-link d-inline-block mx-auto" target="_blank" rel="noopener noreferrer" aria-label="Colegio Litterator (Madrid)">
                                <img src="img/ColegioLitterator.png" class="img-fluid mx-auto" alt="Logotipo Colegio Litterator">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card border-0 shadow-sm text-center h-100 logo-card">
                        <div class="card-body d-flex flex-column justify-content-center position-relative">
                            <a href="https://www.iesalcantara.es" class="stretched-link d-inline-block mx-auto" target="_blank" rel="noopener noreferrer" aria-label="IES Alcántara (Murcia)">
                                <img src="img/IESAlcantara.png" class="img-fluid mx-auto" alt="Logotipo IES Alcántara">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card border-0 shadow-sm text-center h-100 logo-card">
                        <div class="card-body d-flex flex-column justify-content-center position-relative">
                            <a href="https://ieseras.es/" class="stretched-link d-inline-block mx-auto" target="_blank" rel="noopener noreferrer" aria-label="IES Cañada de las Eras (Murcia)">
                                <img src="img/IESCanadaDeLasEras.png" class="img-fluid mx-auto" alt="Logotipo IES Cañada de las Eras">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="card border-0 shadow-sm text-center h-100 logo-card">
                        <div class="card-body d-flex flex-column justify-content-center position-relative">
                            <a href="https://iesfloridablanca.es" class="stretched-link d-inline-block mx-auto" target="_blank" rel="noopener noreferrer" aria-label="IES Floridablanca (Murcia)">
                                <img src="img/IESFloridablanca.svg" class="img-fluid mx-auto" alt="Logotipo IES Floridablanca">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card border-0 shadow-sm text-center h-100 logo-card">
                        <div class="card-body d-flex flex-column justify-content-center position-relative">
                            <a href="https://www.iessangoneralaverde.es" class="stretched-link d-inline-block mx-auto" target="_blank" rel="noopener noreferrer" aria-label="IES Sangonera la Verde (Murcia)">
                                <img src="img/IESSangoneraLaVerde.png" class="img-fluid mx-auto" alt="Logotipo IES Sangonera la Verde">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4 mt-5 fact-item">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="h-100 text-center">
                        <p class="mb-3">¿Quieres sumar a tu centro a Conecta 37? Cuéntanos qué evidencia quieres mejorar y te ayudamos a preparar la entrada.</p>
                        <a href="mailto:dgmakers@iesalcantara.es?subject=Sumar%20centro%20a%20Conecta%2037" class="btn btn-conecta37">Contactar con la coordinación</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer común -->
    <?php
        $img = "../../..";                // ruta a la carpeta de imagenes
        $pages = "../..";                 // ruta a la carpeta del resto de paginas de la web
        $index = "../../..";              // ruta a la carpeta del index.php
        include "../../../footer.php";    // incluye el footer comun
    ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../lib/wow/wow.min.js"></script>
    <script src="../../../lib/easing/easing.min.js"></script>
    <script src="../../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../../lib/counterup/counterup.min.js"></script>
    <script src="../../../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../../lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../../js/main.js"></script>
</body>

</html>
