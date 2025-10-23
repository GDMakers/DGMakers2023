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

        .roadmap-step {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .roadmap-step h4,
        .roadmap-step h5 {
            margin-bottom: 1rem;
            color: #0a558c;
            font-weight: 600;
        }

        .roadmap-step ul {
            padding-left: 1.2rem;
            margin-bottom: 0;
        }

        .roadmap-step ul li {
            margin-bottom: 0.4rem;
        }

        .roadmap-idea {
            background: rgba(1, 81, 131, 0.08);
            border-radius: 16px;
            padding: 2rem 1.5rem;
        }

        .roadmap-today {
            border-left: 6px solid #0a558c;
            background: rgba(10, 85, 140, 0.08);
            border-radius: 16px;
            padding: 2rem 1.5rem;
        }

        .roadmap-today img {
            border-radius: 16px;
        }

        .roadmap-next {
            opacity: 0.85;
            position: relative;
            overflow: hidden;

            border: 1px dashed rgba(1, 81, 131, 0.35);
            border-radius: 16px;
            padding: 2rem 1.5rem;
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
            <div class="row gy-4 mb-5 fact-item align-items-center roadmap-idea">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.05s">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1200&q=80" class="img-fluid roadmap-image" alt="Primer contacto e idea inicial">
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.15s">
                    <div class="h-100">
                        <h4 class="section-title bg-white text-start text-primary pe-3">Code Zero</h4>
                        <h5>MAY 25</h5>
                        <ul class="mb-0" style="display: flex; flex-direction: column; gap: 0.6rem;">
                            <li><strong>Reconexión con centros:</strong> mapa de personas clave y canales de coordinación.</li>
                            <li><strong>Necesidades detectadas:</strong> retos prioritarios en Lengua y Matemáticas.</li>
                            <li><strong>Hoja de ruta preliminar:</strong> calendario de trabajo y compromisos por centro.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row gy-4 mb-5 fact-item align-items-center flex-lg-row-reverse roadmap-today">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1200&q=80" class="img-fluid roadmap-image" alt="Docentes colaborando en una reunión de lanzamiento">
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="h-100">
                        <h4 class="section-title bg-white text-start text-primary pe-3">Reuni&oacute;n 0 · Kickoff</h4>
                        <h5>22 OCT 25</h5>
                        <ul class="mb-0" style="display: flex; flex-direction: column; gap: 0.75rem;">
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

            <div class="row gy-4 mb-5 fact-item align-items-center roadmap-next">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80" class="img-fluid roadmap-image" alt="Docentes co-diseñando contenidos en una mesa de trabajo">
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="h-100 roadmap-step">
                        <h4 class="section-title bg-white text-start text-primary pe-3">Reuni&oacute;n 1 · Activate Mode</h4>
                        <h5>13 NOV 25. 11:30 h</h5>
                        <ul class="mb-0">
                            <li><strong>Sprint planning:</strong> Lengua + Matem&aacute;ticas obligatorias, &aacute;reas extra bienvenidas.</li>
                            <li><strong>Mini-unidad 1:</strong> plantillas b&aacute;sicas listas para adaptar y publicar.</li>
                            <li><strong>Evidencias &amp; publicaci&oacute;n:</strong> pruebas pre/post y artefactos para la Showcase.</li>
                            <li><strong>Showcase de proyectos:</strong> demo-day, producto p&uacute;blico e hitos en el Hall of Learning.</li>
                            <li><strong>Live hub:</strong> microtalleres Student-to-Student, Teacher Clinics y matchmaking mentor&ndash;mentee.</li>
                            <li><strong>Jornadas 2026:</strong> keynotes, showroom y Hack-Sprint con Informe de Impacto.</li>
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
