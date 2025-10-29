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

        .benefits-card {
            background: #ffffff;
            border-radius: 16px;
            border: 1px solid rgba(1, 81, 131, 0.12);
            box-shadow: 0 0.75rem 1.5rem rgba(1, 81, 131, 0.08);
            height: 100%;
            padding: 1.75rem;
        }

        .benefits-card h5 {
            color: #015183;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .benefits-card ul {
            margin-bottom: 0;
            padding-left: 1.1rem;
        }

        .benefits-card li {
            margin-bottom: 0.55rem;
        }

        .commitment-card {
            background: rgba(1, 81, 131, 0.06);
            border-left: 6px solid #015183;
            border-radius: 16px;
            padding: 2rem;
        }

        .commitment-card h5 {
            color: #015183;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .commitment-card ul {
            margin-bottom: 0;
        }

        .commitment-card li {
            margin-bottom: 0.5rem;
        }

        .quickwins-card {
            background: #ffffff;
            border-radius: 16px;
            border: 1px dashed rgba(1, 81, 131, 0.3);
            box-shadow: 0 0.5rem 1.25rem rgba(1, 81, 131, 0.06);
            padding: 2rem;
        }

        .quickwins-card h5 {
            color: #015183;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .quickwins-card ul {
            margin-bottom: 0;
            padding-left: 1.1rem;
        }

        .quickwins-card li {
            margin-bottom: 0.5rem;
        }

        .comparison-card {
            background: #ffffff;
            border-radius: 16px;
            border: 1px solid rgba(1, 81, 131, 0.12);
            box-shadow: 0 0.5rem 1.25rem rgba(1, 81, 131, 0.08);
            padding: 1.75rem;
        }

        .comparison-card h6 {
            color: #015183;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .comparison-card ul {
            list-style: none;
            margin-bottom: 0;
            padding-left: 0;
        }

        .comparison-card li {
            margin-bottom: 0.65rem;
        }

        .comparison-card li:last-child {
            margin-bottom: 0;
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
                <a href="Roadmap.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Roadmap</a>
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
                            Esta edición reúne centros de Madrid y Murcia que comparten un objetivo común.
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
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h4 class="section-title bg-white text-start text-primary pe-3">Conecta 37: La Innovaci&oacute;n que Funciona</h4>
                        <p class="mb-2" style="text-align:justify;">Menos papeleo, m&aacute;s producto. Menos promesas, m&aacute;s evidencias.</p>
                        <p class="mb-0" style="text-align:justify;">Elige Conecta 37 por tres victorias claras:</p>
                    </div>
                </div>
            </div>

            <div class="row gy-4">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="benefits-card">
                        <h5>1. Alumnado que crea, debate y conecta</h5>
                        <ul class="mb-0">
                            <li><strong>Aprendizaje S2S:</strong> productos reales (v&iacute;deos, apps, podcasts) que usan y comparten entre centros.</li>
                            <li><strong>Competencias que se miden:</strong> Mates y Lengua con r&uacute;bricas comunes y comparables.</li>
                            <li><strong>IA como copiloto:</strong> bocetan, revisan y publican con seguridad y criterios &eacute;ticos.</li>
                            <li class="mb-0"><strong>DUA real:</strong> mismo reto, m&uacute;ltiples caminos (audio, v&iacute;deo, guion) para m&aacute;s voz y menos ficha repetitiva.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="benefits-card">
                        <h5>2. Profes que ganan tiempo y foco</h5>
                        <ul class="mb-0">
                            <li><strong>Banco Plug &amp; Play:</strong> tareas, r&uacute;bricas y plantillas listas para usar ma&ntilde;ana mismo.</li>
                            <li><strong>Evidencias autom&aacute;ticas:</strong> los productos y datos se vuelcan solos al PDC o a la memoria.</li>
                            <li class="mb-0"><strong>Sprints y mentor&iacute;as:</strong> sistema replicable que crece en comunidad, sin depender de h&eacute;roes quemados.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="benefits-card">
                        <h5>3. Direcci&oacute;n con resultados y visibilidad</h5>
                        <ul class="mb-0">
                            <li><strong>Indicadores claros:</strong> datos pre/post sobre competencias clave.</li>
                            <li><strong>Alineado con tu plan:</strong> cumples objetivos de innovaci&oacute;n (DUA, Metodolog&iacute;as Activas, CDD) sin rehacer documentos.</li>
                            <li class="mb-0"><strong>Visibilidad positiva:</strong> galer&iacute;a de proyectos, sello de participaci&oacute;n y puente a alianzas (Erasmus+, redes).</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row gy-4 mt-4 fact-item">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="commitment-card text-center">
                        <h5 class="mb-0">&iquest;Qu&eacute; recibes? &iquest;Qu&eacute; pones?</h5>
                    </div>
                </div>

                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="comparison-card">
                        <div class="row g-4 align-items-start">
                            <div class="col-md-6">
                                <h6>Lo que te damos </h6>
                                <ul class="mb-0">
                                    <li><strong>Onboarding Kit:</strong> Gu&iacute;a r&aacute;pida + 12 tareas listas.</li>
                                    <li><strong>Pack IA:</strong> Prompts seguros y gu&iacute;as.</li>
                                    <li class="mb-0"><strong>Soporte entre iguales:</strong> Canal de dudas y demos.</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6>Tu compromiso </h6>
                                <ul class="mb-0">
                                    <li><strong>1 Coordinador/a</strong> + Equipo de 3&ndash;5 profes.</li>
                                    <li><strong>1 tarea/mes</strong> por grupo.</li>
                                    <li class="mb-0"><strong>1 exposici&oacute;n/trimestre</strong>.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4 mt-4 fact-item">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="quickwins-card">
                        <h5>Tus &ldquo;Quick Wins&rdquo; (en 6&ndash;8 semanas)</h5>
                        <ul class="mb-0">
                            <li><strong>Primeras tareas de Mates y Lengua</strong> publicadas y visibles.</li>
                            <li><strong>Panel de evidencias del centro</strong> activo y compartible.</li>
                            <li class="mb-0"><strong>Primer mini-evento S2S</strong> conectando a dos grupos.</li>
                        </ul>
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
