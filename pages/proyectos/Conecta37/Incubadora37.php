<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Incubadora 37 · Conecta 37</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Incubadora 37: explora, prueba y comparte usos de IA y metodolog&iacute;as en el IES Alc&aacute;ntara" name="description">

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

        .inc-hero-subtitle {
            font-size: 1.15rem;
            letter-spacing: 0.08em;
        }

        .inc-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.3rem 0.9rem;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.35);
        }

        .inc-card,
        .inc-procedure-step,
        .inc-form-card,
        .inc-variant-card {
            background: #ffffff;
            border: 1px solid rgba(1, 81, 131, 0.1);
            border-radius: 1.25rem;
            padding: 1.75rem;
            box-shadow: 0 1.5rem 2.4rem rgba(1, 81, 131, 0.08);
        }

        .inc-divider {
            width: 100%;
            height: 1px;
            background: rgba(1, 81, 131, 0.15);
        }

        .inc-highlight {
            background: linear-gradient(120deg, rgba(1, 81, 131, 0.12), rgba(1, 81, 131, 0.04));
            border-radius: 1.25rem;
            padding: 1.25rem 1.6rem;
            border: 1px solid rgba(1, 81, 131, 0.12);
        }

        .inc-section-title {
            color: #0a3d62;
        }

        .inc-routes-img img {
            max-width: 100%;
            height: 250px;
            display: inline-block;
            border-radius: 1rem;
            box-shadow: 0 1.4rem 2.4rem rgba(1, 81, 131, 0.18);
            object-fit: cover;
        }

        .inc-focus-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
        }

        .inc-focus-item {
            display: flex;
            gap: 1rem;
            align-items: flex-start;
        }

        .inc-focus-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            background: rgba(1, 81, 131, 0.08);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #015183;
        }

        .inc-cta {
            text-transform: uppercase;
            letter-spacing: 0.08em;
            font-weight: 700;
            color: #0a558c;
        }

        .inc-focus-placeholder,
        .inc-card--placeholder,
        .inc-card--placeholder h5,
        .inc-card--placeholder p,
        .inc-card--placeholder ul li {
            color: rgba(10, 61, 98, 0.5);
        }

        .inc-procedure-step h5 {
            color: #0a558c;
        }

        .inc-procedure-step code,
        .inc-form-card code {
            background: rgba(1, 81, 131, 0.1);
            padding: 0.2rem 0.4rem;
            border-radius: 0.4rem;
        }

        .inc-timeline {
            counter-reset: inc-step;
        }

        .inc-timeline .inc-procedure-step {
            position: relative;
            padding-left: 3.3rem;
        }

        .inc-timeline .inc-procedure-step::before {
            counter-increment: inc-step;
            content: counter(inc-step);
            position: absolute;
            left: 1rem;
            top: 1.5rem;
            width: 2rem;
            height: 2rem;
            border-radius: 0.7rem;
            background: #015183;
            color: #ffffff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
        }

        .inc-form-card ul {
            padding-left: 1.1rem;
        }

        .inc-variant-card h5 {
            color: #0a3d62;
        }

        @media (max-width: 575.98px) {
            .inc-timeline .inc-procedure-step {
                padding-left: 2.6rem;
            }

            .hero-conecta .btn-conecta37 {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Menú común -->
    <?php
        $img = "../../..";
        $pages = "../..";
        $index = "../../..";
        include "../../../menu.php";
    ?>

    <div class="container-fluid hero-conecta py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 text-center text-white">
            <p class="inc-hero-subtitle mb-2 text-uppercase">Incubadora 37</p>
            <h1 class="display-4 text-white mb-3">Explora · Prueba · Mejora · Comparte</h1>
            <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
                <span class="inc-pill"><i class="bi bi-arrow-repeat"></i> Iteraci&oacute;n r&aacute;pida</span>
                <span class="inc-pill"><i class="bi bi-people"></i> Comunidades de pr&aacute;ctica</span>
                <span class="inc-pill"><i class="bi bi-shield-check"></i> Uso responsable</span>
            </div>
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <a href="#focos" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Explorar focos</a>
                <a href="#procedimiento" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Unirme al reto</a>
                <a href="#propon" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Lanzar mi idea</a>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="inc-highlight mb-4">
                <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                    <div>
                        <h2 class="inc-section-title mb-2">Incubadora 37</h2>
                        <p class="mb-0">Espacio donde testeamos ideas metodolog&iacute;as, tecnológicas y de uso de la IA con el foco en evidencias cortas, transferencia y comunidad.</p>
                        <p></p>
                        <a href="https://www.canva.com/design/DAG4nJDaMp8/yy7TlkQ_ewUYaEWfqgQFgw/edit?utm_content=DAG4nJDaMp8&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton"
                                    target="_blank" rel="noopener noreferrer"
                                    class="btn btn-outline-primary btn-sm">
                                        <i class="bi bi-grid-3x3-gap me-1"></i> Panel de ideas
                        </a>
                    </div>
                    <div>
                        
                        <div class="inc-routes-img text-center">
                            <img src="https://images.unsplash.com/photo-1503551723145-6c040742065b-v2?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1740" alt="Rutas sugeridas de la Incubadora 37">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4" id="focos">
                <div class="col-lg-6">
                    <div class="inc-card h-100">
                        <h3 class="mb-3">Estructura ligera</h3>
                        <h5 class="text-uppercase text-muted mb-3">1. Focos de innovaci&oacute;n</h5>
                        <ul class="inc-focus-list">
                            <li class="inc-focus-item">
                                <div class="inc-focus-icon"><i class="bi bi-cpu"></i></div>
                                <div>
                                    <strong>IA en Educaci&oacute;n</strong> (docentes | estudiantes): uso responsable y marcos de actuaci&oacute;n.
                                </div>
                            </li>
                            <li class="inc-focus-item">
                                <div class="inc-focus-icon"><i class="bi bi-diagram-3"></i></div>
                                <div>
                                    <strong>Metodolog&iacute;as Activas</strong>: ABP, gamificaci&oacute;n, flipped, rutinas de pensamiento.
                                </div>
                            </li>
                            <li class="inc-focus-item">
                                <div class="inc-focus-icon">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div>
                                    <strong>Inclusi&oacute;n (UDL/4Inclusion)</strong>: accesibilidad, apoyos multimodales, co-dise&ntilde;o.
                                </div>
                            </li>
                            <li class="inc-focus-item">
                                <div class="inc-focus-icon"><i class="bi bi-tools"></i></div>
                                <div>
                                    <strong>Herramientas</strong>: radar trimestral de pruebas, qui&eacute;n las eval&uacute;a y para qu&eacute;.
                                </div>
                            </li>
                        </ul>
                        <div class="mt-4">
                            <a href="#banco" class="inc-cta">CTA: Explorar focos →</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inc-card h-100">
                        <div class="d-flex flex-column gap-3">
                            <div>
                                <h5 class="text-uppercase text-muted mb-2">2. Banco de Recursos</h5>
                                <p class="mb-1">Gu&iacute;as r&aacute;pidas, tutoriales propios, enlaces curados.</p>
                                <a href="#banco" class="inc-cta">CTA: Abrir gu&iacute;as →</a>
                            </div>
                            <div class="inc-divider"></div>
                            <div id="galeria">
                                <h5 class="text-uppercase text-muted mb-2">3. Galer&iacute;a S2S</h5>
                                <p class="mb-1">Evidencias con r&uacute;brica y plantilla duplicable entre centros.</p>
                                <a href="#galeria" class="inc-cta">CTA: Ver ejemplos →</a>
                            </div>
                            <div class="inc-divider"></div>
                            <div id="propon">
                                <h5 class="text-uppercase text-muted mb-2">4. Prop&oacute;n tu Idea</h5>
                                <p class="mb-1">Formulario simple + revisi&oacute;n previa a publicaci&oacute;n.</p>
                                <a href="#formulario" class="inc-cta">CTA: Lanzar mi idea al Lab →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Footer común -->
    <?php
        $img = "../../..";
        $pages = "../..";
        $index = "../../..";
        include "../../../footer.php";
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
