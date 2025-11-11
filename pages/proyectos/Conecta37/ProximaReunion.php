<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Pr&oacute;xima Reuni&oacute;n · Conecta 37</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Detalles de la pr&oacute;xima reuni&oacute;n del programa Conecta 37" name="description">

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

        .roadmap-next {
            opacity: 0.95;
            position: relative;
            overflow: hidden;
            border: 1px dashed rgba(1, 81, 131, 0.35);
            border-radius: 16px;
            padding: 2rem 1.5rem;
        }

        .roadmap-topics {
            background: linear-gradient(135deg, rgba(1, 81, 131, 0.08), rgba(24, 119, 174, 0.12));
            border: 1px solid rgba(1, 81, 131, 0.18);
            border-radius: 18px;
            padding: 1.75rem 1.6rem;
            box-shadow: 0 1.4rem 2.4rem rgba(1, 81, 131, 0.08);
        }

        .section-title--tail-lines {
            display: flex;
            align-items: center;
            gap: 1rem;
            width: 100%;
        }

        .section-title--tail-lines::before,
        .section-title--tail-lines::after {
            display: none;
        }

        .section-title__text {
            flex: 0 1 auto;
            letter-spacing: 0.04em;
            min-width: 0;
        }

        .section-title__tails {
            flex: 1;
            min-height: 1.6em;
            border-top: 2px solid var(--primary);
            border-bottom: 2px solid var(--primary);
        }

        .roadmap-topics__list {
            list-style: none;
            counter-reset: topic-counter;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin: 0;
            padding: 0;
        }

        .roadmap-topics__list>li {
            counter-increment: topic-counter;
            display: flex;
            gap: 1rem;
            align-items: flex-start;
        }

        .topic-badge {
            min-width: 2.5rem;
            height: 2.5rem;
            border-radius: 0.75rem;
            background: #0a558c;
            color: #ffffff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.1rem;
            box-shadow: 0 0.6rem 1.2rem rgba(10, 85, 140, 0.22);
        }

        .topic-content {
            flex: 1;
        }

        .topic-title {
            font-size: 1.05rem;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            margin-bottom: 0.75rem;
            color: #083c67;
        }

        .topic-points {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 0.35rem;
        }

        .topic-points li {
            position: relative;
            padding-left: 1.8rem;
            margin-bottom: 0;
            line-height: 1.45;
        }

        .topic-points li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0.55rem;
            width: 0.55rem;
            height: 0.55rem;
            background: #ffffff;
            border: 2px solid #0a558c;
            border-radius: 50%;
            box-shadow: 0 0 0 3px rgba(10, 85, 140, 0.12);
        }

        .topic-subtitle {
            font-weight: 600;
            display: inline-block;
            margin-bottom: 0.35rem;
        }

        .sub-points {
            list-style: none;
            padding: 0;
            margin: 0.35rem 0 0 0;
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .sub-points li {
            position: relative;
            padding-left: 1.4rem;
            line-height: 1.4;
            color: #1c3d5b;
        }

        .sub-points li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0.5rem;
            width: 0.4rem;
            height: 0.4rem;
            background: #0a558c;
            opacity: 0.65;
            border-radius: 50%;
        }

        .topic-link,
        .sub-link {
            color: #0a558c;
            text-decoration: none;
        }

        .topic-link {
            font-weight: 600;
            transition: color 0.2s ease, text-decoration 0.2s ease;
        }

        .topic-link:hover,
        .topic-link:focus {
            color: #084674;
            text-decoration: underline;
        }

        .sub-link {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.18rem 0.65rem;
            border-radius: 7px;
            font-weight: 600;
            background: rgba(10, 85, 140, 0.12);
            box-shadow: inset 0 0 0 1px rgba(10, 85, 140, 0.26);
            transition: background-color 0.2s ease, color 0.2s ease, box-shadow 0.2s ease, transform 0.2s ease;
        }

        .sub-link::after {
            content: "→";
            font-size: 0.9rem;
            transition: transform 0.2s ease;
        }

        .sub-link:hover,
        .sub-link:focus {
            background: #0a558c;
            color: #ffffff;
            box-shadow: inset 0 0 0 1px #0a558c, 0 0.4rem 0.8rem rgba(10, 85, 140, 0.2);
            text-decoration: none;
            transform: translateX(1px);
        }

        .sub-link:hover::after,
        .sub-link:focus::after {
            transform: translateX(3px);
        }

        .template-card {
            background: radial-gradient(circle at top right, rgba(10, 85, 140, 0.14), rgba(10, 85, 140, 0.05) 42%, rgba(10, 85, 140, 0.04));
            border: 1px solid rgba(1, 81, 131, 0.18);
            border-left: 6px solid #0a558c;
            border-radius: 22px;
            padding: 2rem;
            box-shadow: 0 1.4rem 2.8rem rgba(1, 81, 131, 0.1);
        }

        .template-meta {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.2rem;
            margin-bottom: 1.75rem;
        }

        .template-label {
            font-size: 0.75rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: rgba(10, 85, 140, 0.75);
            margin-bottom: 0.25rem;
        }

        .template-value {
            font-family: "Courier New", Courier, monospace;
            font-size: 1rem;
            color: rgba(10, 85, 140, 0.9);
        }

        .template-section {
            margin-bottom: 1.75rem;
        }

        .template-section:last-child {
            margin-bottom: 0;
        }

        .template-section h5 {
            font-size: 1.05rem;
            margin-bottom: 0.6rem;
        }

        .template-choices,
        .template-checklist {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            gap: 0.65rem;
        }

        .template-choices {
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
        }

        .template-choices li {
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(10, 85, 140, 0.18);
            border-radius: 14px;
            padding: 0.6rem 0.85rem;
            text-align: center;
            font-weight: 600;
            color: #0a558c;
            backdrop-filter: blur(6px);
        }

        .template-checklist li {
            position: relative;
            padding-left: 1.9rem;
            margin-bottom: 0;
            line-height: 1.45;
        }

        .template-checklist li::before {
            content: "\2714";
            position: absolute;
            left: 0;
            top: 0.15rem;
            width: 1.4rem;
            height: 1.4rem;
            border-radius: 0.5rem;
            background: #0a558c;
            color: #ffffff;
            font-size: 0.9rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0.6rem 1.2rem rgba(10, 85, 140, 0.2);
        }

        @media (max-width: 575.98px) {
            .topic-badge {
                min-width: 2.2rem;
                height: 2.2rem;
                font-size: 1rem;
            }

            .roadmap-topics {
                padding: 1.6rem 1.4rem;
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
        <div class="container py-5 text-center">
            <h1 class="display-4 text-white mb-3">Pr&oacute;xima reuni&oacute;n Conecta 37</h1>
            <p class="lead text-white mb-0">Todo lo necesario para llegar al Activate Mode listos para co-diseñar, compartir evidencias y activar el hub en directo.</p>
            <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
                <a href="index.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Visi&oacute;n general</a>
                <a href="Encuentro37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Jornadas 26</a>
                <a href="Livehub37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Live Hub</a>
                <a href="Recursos37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Showcase de proyectos</a>
                <a href="Roadmap.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Roadmap</a>
                <a href="Centros.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Centros participantes</a>
                <a href="ProximaReunion.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1 active" aria-current="page">Pr&oacute;xima reuni&oacute;n</a>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row gy-4 mb-5 fact-item align-items-center roadmap-next">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80" class="img-fluid roadmap-image" alt="Docentes co-diseñando contenidos en una mesa de trabajo">
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="h-100 roadmap-step">
                        <h4 class="section-title section-title--tail-lines text-start text-primary pe-3">
                            <span class="section-title__text">Reuni&oacute;n 1 · Activate Mode</span>
                            <span class="section-title__tails" aria-hidden="true"></span>
                        </h4>
                        <h5>13 NOV 25. 11:30 h</h5>
                        <div class="roadmap-topics">
                            <ol class="roadmap-topics__list">
                                <li>
                                    <span class="topic-badge">1</span>
                                    <div class="topic-content">
                                        <h5 class="topic-title">Decidir</h5>
                                        <ul class="topic-points">
                                            <li>
                                                <span class="topic-subtitle"><strong>Revisión de la página web</strong></span>
                                            </li>
                                            <li>
                                                <a class="sub-link" href="https://docs.google.com/forms/d/e/1FAIpQLSei_SkthRo0JXkGjWslXOupe280eH7TF6_mIRpVKB8j9CDLiQ/viewform" target="_blank" rel="noopener noreferrer">
                                                    <strong>Asignaturas que participan:</strong> lengua, matem&aacute;ticas&hellip;
                                                </a>
                                                <ul class="sub-points">
                                                    <li>
                                                        <a class="sub-link" href="https://forms.gle/MmPJJUowBDSDXStVA" target="_blank" rel="noopener noreferrer">
                                                            <strong>Por centro:</strong> confirma participantes y datos de contacto.
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="sub-link" href="#talleres-profesorado">
                                                    <strong>Formaci&oacute;n com&uacute;n:</strong>  formato (micro-talleres por temas y taller com&uacute;n&hellip;), contenidos&hellip;
                                                </a>
                                                <ul class="sub-points">
                                                    <li>
                                                        <a class="sub-link" href="https://forms.gle/ZXfyZBoGLctSbASc6" target="_blank" rel="noopener noreferrer">
                                                            <strong>Encuesta de formaci&oacute;n.</strong>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="topic-subtitle"><strong>Definici&oacute;n de hecho:</strong></span>
                                                <ul class="sub-points">
                                                   <li>¿Qué temas trabajamos primero?.</li> 
                                                    <li>Pre/Post com&uacute;n: prueba inicial y final.</li>
                                                    <li>Producto p&uacute;blico: v&iacute;deo 90&rsquo;&rsquo;, podcast, web&hellip;</li>
                                                    <li>C&oacute;mo se eval&uacute;a: examen, exposici&oacute;n&hellip;</li>
                                                    <li>Fechas realistas de incio.</li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="topic-subtitle"><strong>Showcase de proyectos:</strong></span>
                                                <ul class="sub-points">
                                                    <li><a class="sub-link" href="#mini-unidad-1">&iquest;Qu&eacute; mostramos? (producto + proceso)</a></li>
                                                    <li>Formato: stand + pitch 3&rsquo;.</li>
                                                    <li>Publicaci&oacute;n: Hub (licencias + citaci&oacute;n).</li>
                                                    <li>Responsables por centro.</li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="topic-subtitle"><strong>Jornadas:</strong></span>
                                                <ul class="sub-points">
                                                    <li><a class="sub-link" href="Encuentro37.php">&iquest;Qu&eacute; talleres organizamos?</a></li>
                                                    <li>Duraci&oacute;n.</li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <span class="topic-badge">2</span>
                                    <div class="topic-content">
                                        <h5 class="topic-title">Comenzar</h5>
                                        <ul class="topic-points">
                                            <li><strong>Equipo intercentros:</strong> c&oacute;mo comunicarnos y generar comunidad.</li>
                                            <li>
                                                <a class="sub-link" href="Livehub37.php">
                                                    <strong>Microtalleres para estudiantes</strong> antes de comenzar el proyecto.
                                                </a>
                                            </li>
                                            <li>
                                                <a class="sub-link" href="Ia37.php">
                                                    <strong>&iquest;C&oacute;mo usamos la IA?</strong>
                                                </a>
                                                <ul class="sub-points">
                                                    <li>
                                                        <a class="sub-link" href="https://forms.gle/9v9xu72s4GGgfmyQA" target="_blank" rel="noopener noreferrer">
                                                            <strong>Mi propuesta.</strong>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><strong>Ideas aplazadas.</strong></li>
                                        </ul>
                                    </div>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4 mb-5 fact-item align-items-center flex-lg-row-reverse roadmap-idea">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=1200&q=80" class="img-fluid roadmap-image" alt="Equipo docente preparando un prototipo de aprendizaje">
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="h-100 roadmap-step template-card">
                        <h4 id="mini-unidad-1" class="section-title section-title--tail-lines text-start text-primary pe-3">
                            <span class="section-title__text">Mini-Unidad 1 &mdash; Plantilla MVP</span>
                            <span class="section-title__tails" aria-hidden="true"></span>
                        </h4>
                        <div class="template-meta">
                            <div>
                                <p class="template-label mb-1">Centro</p>
                                <p class="template-value">____________________</p>
                            </div>
                            <div>
                                <p class="template-label mb-1">&Aacute;reas</p>
                                <p class="template-value">____________________</p>
                            </div>
                        </div>
                        <div class="template-section">
                            <h5 class="mb-2">1) El impacto</h5>
                            <p class="mb-0">Al finalizar, el alumnado ser&aacute; capaz de.</p>
                        </div>
                        <div class="template-section">
                            <h5 class="mb-2">2) Producto p&uacute;blico (elige 1)</h5>
                            <ul class="template-choices">
                                <li>V&iacute;deo 90&rsquo;&rsquo;</li>
                                <li>P&oacute;ster A3</li>
                                <li>Podcast 2&rsquo;</li>
                                <li>&hellip;</li>
                            </ul>
                        </div>
                        <div class="template-section">
                            <h5 class="mb-2">3) Definition of Done (todo debe cumplirse)</h5>
                            <ul class="template-checklist">
                                <li>Pre/Post com&uacute;n (5 &iacute;tems) definido</li>
                                <li>Evaluaci&oacute;n:</li>
                                <li>Publicaci&oacute;n en Hub ( )</li>
                                <li>Fechas fijadas: PRE ___/___ &middot; POST ___/___ &middot; Showcase ___/___</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4 mb-5 fact-item align-items-center roadmap-next">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1200&q=80" class="img-fluid roadmap-image" alt="Docentes preparando un taller formativo">
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="h-100 roadmap-step template-card">
                        <h4 id="talleres-profesorado" class="section-title section-title--tail-lines text-start text-primary pe-3">
                            <span class="section-title__text">Propuesta de talleres para el profesorado</span>
                            <span class="section-title__tails" aria-hidden="true"></span>
                        </h4>
                        <div class="template-section">
                            <h5 class="mb-2">1. Kickstart de Aula (30&rsquo;)</h5>
                            <ul class="template-checklist">
                                <li><strong>Qu&eacute;:</strong> completar la Plantilla Mini-Unidad 1 y fijar fechas (PRE, POST, Showcase).</li>
                                <li><strong>Salida:</strong> plantilla terminada + &ldquo;Definition of Done&rdquo; marcada.</li>
                                <li><strong>Material:</strong> Tablero &uacute;nico + Plantilla Mini-Unidad 1.</li>
                            </ul>
                        </div>
                        <div class="template-section">
                            <h5 class="mb-2">2. Producto p&uacute;blico expr&eacute;s (20&rsquo;)</h5>
                            <ul class="template-checklist">
                                <li><strong>Qu&eacute;:</strong> elegir formato (v&iacute;deo 90&rsquo;&rsquo; o p&oacute;ster A3) y preparar guion/maqueta.</li>
                                <li><strong>Salida:</strong> guion (v&iacute;deo) o borrador de p&oacute;ster listo.</li>
                                <li><strong>Material:</strong> mini-guiones y ejemplos de estructura.</li>
                            </ul>
                        </div>
                        <div class="template-section">
                            <h5 class="mb-2">3. IA en el aula: usos permitidos (30&rsquo;)</h5>
                            <ul class="template-checklist">
                                <li><strong>Qu&eacute;:</strong> cu&aacute;ndo s&iacute;/no, c&oacute;mo citar, y 3 prompts &uacute;tiles (guion, feedback, checklist).</li>
                                <li><strong>Salida:</strong> Gu&iacute;a de IA responsable + 3 prompts copiable/pegable.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4 fact-item">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="h-100 text-center">
                        <p class="mb-3">Comparte recursos previos o dudas de coordinaci&oacute;n para que la reuni&oacute;n sea 100% acci&oacute;n.</p>
                        <a href="mailto:dgmakers@iesalcantara.es?subject=Pr&oacute;xima%20reuni&oacute;n%20Conecta%2037" class="btn btn-conecta37">Enviar aportaci&oacute;n</a>
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
