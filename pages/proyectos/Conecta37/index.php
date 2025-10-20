<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Proyecto Conecta 37</title>
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
    </style>
</head>

<body>
    <!-- Men&uacute; com&uacute;n -->
    <?php
        $img = "../../..";                // ruta a la carpeta de imagenes
        $pages = "../..";                 // ruta a la carpeta del resto de paginas de la web
        $index = "../../..";              // ruta a la carpeta del index.php
        include "../../../menu.php";      // incluye el menu comun
    ?>

    <div class="container-fluid hero-conecta py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5 text-center">
            <h1 class="display-4 text-white mb-3">Proyecto Conecta 37</h1>
            <p class="lead text-white mb-0">Transformaci&oacute;n digital enfocada en la calidad del aprendizaje y con evidencias.</p>
            <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
                <a href="index.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1 active" aria-current="page">Visi&oacute;n general</a>
                <a href="Encuentro37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Jornadas 26</a>
                <a href="Livehub37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Live Hub</a>
                <a href="Recursos37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Showcase de proyectos</a>
                <a href="Centros.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Centros participantes</a>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row gy-4 mb-5 fact-item align-items-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h4 class="section-title bg-white text-start text-primary pe-3">¿Qué es Conecta 37?</h4>
                        <p class="mb-3" style="text-align:justify;">
                            <strong>Aprendizaje eficaz, impulsado por tecnología</strong>: menos tareas mecánicas, más pensamiento y creación.
                        </p>
                        <p class="mb-0" style="text-align:justify;">
                            Conecta 37 es un proyecto de transformaci&oacute;n digital para mejorar los resultados acad&eacute;micos.
                            Centros de Primaria y Secundaria colaboran para que el alumnado aprenda m&aacute;s y mejor,
                            demostr&aacute;ndolo con evidencias. El foco est&aacute; en Lengua y Matem&aacute;ticas, integrando la
                            tecnolog&iacute;a de forma pr&aacute;ctica y creativa.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <img src="img/LogoConecta37.png" alt="Logo Conecta 37" class="img-fluid" style="max-width: 260px;">
                </div>
            </div>

            <div class="row gy-4 mb-5 fact-item">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.15s">
                    <div class="h-100">
                        <h4 class="section-title bg-white text-start text-primary pe-3">Centros participantes</h4>
                        <ul class="mb-0">
                            <li>CEIPS Santo Domingo (Madrid)</li>
                            <li>Colegio Litterator (Madrid)</li>
                            <li>IES Alc&aacute;ntara (Murcia)</li>
                            <li>IES Ca&ntilde;ada de las Eras (Murcia)</li>
                            <li>IES Floridablanca (Murcia)</li>
                            <li>IES Sangonera la Verde (Murcia)</li>
                        </ul>
                        <p class="mt-3 mb-0">
                            <a href="Centros.php" class="btn btn-conecta37 btn-sm">Conocer los centros.</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row gy-4 mb-5 fact-item">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="h-100">
                        <h4 class="section-title bg-white text-start text-primary pe-3">Prop&oacute;sito</h4>
                        <ul class="mb-0">
                            <li><strong>Mejorar notas y competencias:</strong> demostrar una mejora medible en los resultados acad&eacute;micos.</li>
                            <li><strong>Aprender creando:</strong> cambiar el rol del alumno de consumidor a creador de contenidos.</li>
                            <li><strong>Dejar capacidad instalada:</strong> diseñar modelos replicables por otros centros.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row gy-4 mb-5 fact-item">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="h-100">
                        <h4 class="section-title bg-white text-start text-primary pe-3">Metodolog&iacute;a Conecta-37</h4>
                        <div class="mb-4">
                            <h5 class="fw-semibold text-primary">Aprender Creando</h5>
                            <p class="mb-0" style="text-align:justify;">
                                El alumnado aprende haciendo: investiga, dise&ntilde;a y comunica lo aprendido. Cada reto termina con un producto
                                p&uacute;blico: un v&iacute;deo, podcast, infograf&iacute;a o presentaci&oacute;n,  donde muestra lo que sabe.
                            </p>
                        </div>
                        <div class="mb-4">
                            <h5 class="fw-semibold text-primary">Matem&aacute;ticas que se expresan</h5>
                            <ul class="mb-0">
                                <li>Redactan el proceso de resoluci&oacute;n de problemas reales.</li>
                                <li>Graban v&iacute;deos o podcasts explicando c&oacute;mo pensaron.</li>
                                <li>Exponen oralmente sus conclusiones.</li>
                            </ul>
                        </div>
                        <div class="mb-0">
                            <h5 class="fw-semibold text-primary">Palabras en Acción</h5>
                            <ul class="mb-0">
                                <li>Producen contenidos para el peri&oacute;dico o la radio escolar digital.</li>
                                <li>Escriben guiones y graban podcasts o programas de v&iacute;deo sobre temas de su inter&eacute;s.</li>
                                <li>Dise&ntilde;an campa&ntilde;as de comunicaci&oacute;n y exposiciones para compartir sus investigaciones con la comunidad.</li>
                            </ul>
                        </div>
                        <p class="mt-4 mb-0" style="text-align:justify;">
                            Lengua y Matem&aacute;ticas son obligatorias, pero se suman otras &aacute;reas (Ciencias, Historia, Inglés...)
                            para crear proyectos interdisciplinares.
                        </p>
                        <div class="mt-3">
                            <a href="Metodologia37.php" class="btn btn-conecta37 btn-lg">Explorar la metodolog&iacute;a</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4 mb-5 fact-item">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="h-100">
                        <h4 class="section-title bg-white text-start text-primary pe-3">Flujo de Trabajo</h4>
                        <div class="mb-4">
                            <h5 class="fw-semibold text-primary">Ciclo de Trabajo</h5>
                            <ul class="mb-0">
                                <li><strong>Dise&ntilde;ar:</strong> elegir un reto real y definir c&oacute;mo se mostrar&aacute; el aprendizaje.</li>
                                <li><strong>Crear:</strong> el alumnado desarrolla sus productos con apoyo digital, mientras el docente gu&iacute;a y ofrece feedback.</li>
                                <li><strong>Compartir:</strong> publicar el resultado en la galer&iacute;a del proyecto y presentarlo a una audiencia.</li>
                            </ul>
                        </div>
                        <div class="mb-0">
                            <h5 class="fw-semibold text-primary">Reuni&oacute;n Cero</h5>
                            <p class="mb-0" style="text-align:justify;">
                                En la sesi&oacute;n inicial de octubre:
                            </p>
                            <ul class="mb-0">
                                <li>Se forma al equipo docente.</li>
                                <li>Se prepara la plataforma y los materiales comunes.</li>
                                <li>Se co-dise&ntilde;a la primera mini-unidad del trimestre.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4 fact-item">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h4 class="section-title bg-white text-start text-primary pe-3">&iquest;C&oacute;mo Medimos el &Eacute;xito?</h4>
                        <ul class="mb-0">
                            <li><strong>Evaluaci&oacute;n antes y despu&eacute;s:</strong> pruebas de nivel al inicio y final del curso para medir el progreso.</li>
                            <li><strong>Productos del alumnado:</strong> la calidad de los trabajos se eval&uacute;a con r&uacute;bricas claras.</li>
                            <li><strong>Motivaci&oacute;n:</strong> encuestas breves para registrar el nivel de implicaci&oacute;n del estudiante.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer com&uacute;n -->
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
