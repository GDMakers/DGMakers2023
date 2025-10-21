<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Roadmap · Conecta 37</title>
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

        .roadmap-image {
            border-radius: 0.75rem;
            box-shadow: 0 0.75rem 1.5rem rgba(1, 81, 131, 0.18);
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
            <h1 class="display-4 text-white mb-3">Roadmap Conecta 37</h1>
            <p class="lead text-white mb-0">Hoja de ruta viva: cada hito suma evidencias, alianzas y aprendizaje compartido.</p>
            <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
                <a href="index.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Visi&oacute;n general</a>
                <a href="Encuentro37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Jornadas 26</a>
                <a href="Livehub37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Live Hub</a>
                <a href="Recursos37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Showcase de proyectos</a>
                <a href="Roadmap.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1 active" aria-current="page">Roadmap</a>
                <a href="Centros.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Centros participantes</a>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row gy-4 mb-5 fact-item align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1200&q=80" class="img-fluid roadmap-image" alt="Docentes colaborando en una reunión de lanzamiento">
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="h-100">
                        <h4 class="section-title bg-white text-start text-primary pe-3">Reuni&oacute;n 0 · Kickoff Conecta 37</h4>
                        <ul class="mb-0">
                            <li><strong>Equipo activado:</strong> equipos docentes por centro y t&aacute;ndems intercentros definidos.</li>
                            <li><strong>Ecosistema digital preparado:</strong> plataforma com&uacute;n, carpetas, permisos y plantillas.</li>
                            <li><strong>Metodolog&iacute;a en acci&oacute;n:</strong> ciclo Dise&ntilde;ar &middot; Crear &middot; Compartir.</li>
                            <li><strong>Uso responsable de IA:</strong> automatizamos lo rutinario para dedicar tiempo a pensar, crear y conectar.</li>
                            <li><strong>Visi&oacute;n compartida:</strong> prop&oacute;sito, criterios de &eacute;xito y m&eacute;tricas del curso.</li>
                            <li><strong>Formaci&oacute;n en com&uacute;n:</strong> calendario de talleres y repositorio “how-to”.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row gy-4 mb-5 fact-item align-items-center flex-lg-row-reverse">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80" class="img-fluid roadmap-image" alt="Docentes co-diseñando contenidos en una mesa de trabajo">
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="h-100">
                        <h4 class="section-title bg-white text-start text-primary pe-3">Reuni&oacute;n 1 · Co-dise&ntilde;o de contenidos</h4>
                        <ul class="mb-0">
                            <li><strong>Sprint planning:</strong> Lengua + Matem&aacute;ticas obligatorias, &aacute;reas extra bienvenidas.</li>
                            <li><strong>Mini-unidad 1:</strong> plantillas b&aacute;sicas listas para adaptar y publicar.</li>
                            <li><strong>Evidencias &amp; publicaci&oacute;n:</strong> pruebas pre/post y artefactos para la Showcase.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row gy-4 mb-5 fact-item align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=1200&q=80" class="img-fluid roadmap-image" alt="Equipo docente presentando un proyecto en vivo">
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="h-100">
                        <h4 class="section-title bg-white text-start text-primary pe-3">Showcase de Proyectos</h4>
                        <ul class="mb-0">
                            <li><strong>Demo-Day:</strong> 3&prime; de presentaci&oacute;n + 2&prime; de Q&amp;A por equipo.</li>
                            <li><strong>Producto p&uacute;blico:</strong> v&iacute;deo, podcast, infograf&iacute;a o dashboard con cr&eacute;ditos e IA declarada.</li>
                            <li><strong>Hall of Learning:</strong> lecciones clave en formato breve.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row gy-4 mb-5 fact-item align-items-center flex-lg-row-reverse">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="https://images.unsplash.com/photo-1518606376740-b93c27bd6510?auto=format&fit=crop&w=1200&q=80" class="img-fluid roadmap-image" alt="Estudiantes colaborando en un taller tecnológico">
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="h-100">
                        <h4 class="section-title bg-white text-start text-primary pe-3">Live Hub</h4>
                        <ul class="mb-0">
                            <li><strong>Student-to-Student:</strong> microtalleres de 30&rsquo; entre centros (edici&oacute;n, datos, oratoria).</li>
                            <li><strong>Teacher Clinics:</strong> r&uacute;bricas, IA, accesibilidad y difusi&oacute;n.</li>
                            <li><strong>Matchmaking:</strong> pares mentor&ndash;mentee para acelerar proyectos.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row gy-4 mb-5 fact-item align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="https://images.unsplash.com/photo-1515169067865-5387ec356754?auto=format&fit=crop&w=1200&q=80" class="img-fluid roadmap-image" alt="Auditorio con asistentes a una conferencia educativa">
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="h-100">
                        <h4 class="section-title bg-white text-start text-primary pe-3">Jornadas 2026 · Conecta-37 Summit</h4>
                        <ul class="mb-0">
                            <li><strong>Keynotes cortas y paneles:</strong> ideas accionables para escalar la transformaci&oacute;n.</li>
                            <li><strong>Showroom de proyectos:</strong> stands de centros con demostraciones en vivo.</li>
                            <li><strong>Hack-Sprint 90&rsquo;:</strong> reto colaborativo y publicaci&oacute;n del Informe de Impacto.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row gy-4 fact-item">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="h-100 text-center">
                        <p class="mb-3">El roadmap se actualiza tras cada sesi&oacute;n. &iquest;Quieres sumar una actividad o proponer un reto?</p>
                        <a href="mailto:dgmakers@iesalcantara.es?subject=Propuesta%20Roadmap%20Conecta%2037" class="btn btn-conecta37">Compartir propuesta</a>
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
