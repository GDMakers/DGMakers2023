<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Start Lab 01 &middot; Conecta 37</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="taller, sprint creativo, conecta 37, start lab, ia en el aula" name="keywords">
    <meta content="Guion final mejorado del Start Lab 01: un sprint creativo de 2 h 30 min donde la IA act&uacute;a como copiloto." name="description">

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

        .lab-overview {
            border-radius: 22px;
            border: 1px solid rgba(1, 81, 131, 0.12);
            background: linear-gradient(135deg, rgba(1, 81, 131, 0.09), rgba(1, 81, 131, 0.02));
            box-shadow: 0 1.2rem 2.4rem rgba(1, 81, 131, 0.12);
        }

        .lab-tag {
            letter-spacing: 0.05em;
            font-weight: 600;
        }

        .lab-block {
            border-radius: 18px;
            border: 1px solid rgba(1, 81, 131, 0.14);
            box-shadow: 0 0.85rem 1.8rem rgba(1, 81, 131, 0.08);
            overflow: hidden;
        }

        .lab-badge {
            background: rgba(1, 81, 131, 0.12);
            color: #015183;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.08em;
            padding: 0.45rem 0.85rem;
            border-radius: 999px;
            font-weight: 700;
        }

        .activity-card {
            border-radius: 16px;
            border: 1px solid rgba(1, 81, 131, 0.12);
            padding: 1.5rem 1.4rem;
            background: #ffffff;
            margin-bottom: 1.4rem;
        }

        .activity-title {
            font-weight: 700;
            color: #0a558c;
        }

        .activity-meta {
            font-size: 0.92rem;
            color: #4f5f6f;
        }

        .ponente-toggle .btn {
            font-size: 0.82rem;
            color: #4c5f73;
        }

        .ponente-note {
            background: #f4f6f8;
            border-radius: 12px;
            border-left: 4px solid rgba(1, 81, 131, 0.35);
            color: #58687a;
            font-size: 0.9rem;
            padding: 0.95rem 1.15rem;
        }

        .ponente-note strong {
            color: #3e5164;
        }

        .microproject-toggle .btn {
            font-size: 0.9rem;
            font-weight: 600;
            letter-spacing: 0.01em;
        }

        .microproject-card {
            background: #f5f7fa;
            border-radius: 16px;
            border: 1px solid rgba(1, 81, 131, 0.15);
            padding: 1.75rem 1.6rem;
            color: #3e5164;
            font-size: 0.95rem;
        }

        .microproject-card h5 {
            font-weight: 700;
            color: #0a558c;
        }

        .microproject-card hr {
            border-top: 1px solid rgba(1, 81, 131, 0.15);
            margin: 1.2rem 0;
        }

        .microproject-card code {
            display: inline-block;
            padding: 0.15rem 0.35rem;
            border-radius: 6px;
            background: rgba(1, 81, 131, 0.08);
            color: #0a558c;
            font-size: 0.88rem;
        }

        .microproject-table {
            background: #ffffff;
            border: 1px solid rgba(1, 81, 131, 0.18);
        }

        .microproject-table thead th {
            background: rgba(1, 81, 131, 0.12);
            color: #0a558c;
            border-bottom: 1px solid rgba(1, 81, 131, 0.2);
            font-size: 0.9rem;
        }

        .microproject-table td {
            vertical-align: top;
            font-size: 0.9rem;
        }

        .lab-block-media {
            position: relative;
            min-height: 240px;
        }

        .lab-block-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .object-fit-cover {
            object-fit: cover;
        }

        .lab-highlights {
            border-radius: 16px;
            background: rgba(1, 81, 131, 0.08);
            border: 1px solid rgba(1, 81, 131, 0.16);
            padding: 1.5rem;
        }

        .lab-highlights li {
            margin-bottom: 0.45rem;
        }

        @media (max-width: 575.98px) {
            .lab-overview {
                border-radius: 18px;
            }

            .activity-card {
                padding: 1.25rem;
            }
        }
    </style>
</head>

<body>
    <!-- Men&uacute; com&uacute;n -->
    <?php
        $img = "../../..";
        $pages = "../..";
        $index = "../../..";
        include "../../../menu.php";
    ?>

    <!-- HERO -->
    <div class="container-fluid hero-conecta py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 text-center">
            <h1 class="display-4 text-white mb-3">Start Lab 01 &middot; Conecta 37</h1>
            <p class="lead text-white mb-0">Guion final para vivir un sprint creativo con IA como copiloto y evidencias en 150 minutos.</p>
            <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
                <a href="index.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Visi&oacute;n general</a>
                <a href="Encuentro37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Jornadas 26</a>
                <a href="Livehub37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Live Hub</a>
                <a href="Recursos37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Showcase de proyectos</a>
                <a href="Roadmap.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Roadmap</a>
                <a href="Centros.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Centros participantes</a>
                <a href="ProximaReunion.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Pr&oacute;xima reuni&oacute;n</a>
                <a href="StartLab01.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1 active" aria-current="page">Start Lab 01</a>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="lab-overview p-4 p-md-5 mb-5">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                        <span class="text-uppercase text-primary lab-tag d-inline-block mb-2">Guion Final Mejorado</span>
                        <h2 class="fw-bold mb-3">Conecta-37 Start Lab (2 h 30 min)</h2>
                        <p class="mb-4">Un taller que acelera el ciclo Dise&ntilde;ar &rarr; Crear &rarr; Compartir utilizando la IA como copiloto inteligente, sin sustituir la mirada pedag&oacute;gica del docente.</p>
                    </div>
                    <div class="col-lg-5">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="bg-white rounded-4 h-100 p-3 shadow-sm">
                                    <p class="text-uppercase text-muted mb-1 small fw-semibold">Estructura</p>
                                    <p class="mb-0">Taller&middot; Sprint creativo potenciado con IA.</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-white rounded-4 h-100 p-3 shadow-sm">
                                    <p class="text-uppercase text-muted mb-1 small fw-semibold">Duraci&oacute;n total</p>
                                    <p class="mb-0">2 h 30 min</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="bg-white rounded-4 p-3 shadow-sm">
                                    <p class="text-uppercase text-muted mb-1 small fw-semibold">Objetivo</p>
                                    <p class="mb-0">Que el docente viva un sprint creativo y experimente c&oacute;mo la IA acelera cada fase del proceso sin reemplazar la parte humana.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bloque 1 -->
            <section class="lab-block card border-0 mb-4">
                <div class="row g-0 align-items-stretch">
                    <div class="col-lg-5">
                        <div class="lab-block-media h-100">
                            <img src="https://as1.ftcdn.net/v2/jpg/04/83/27/44/1000_F_483274446_buBxiEmTRDcTH7W0SB4p97IfW6LtBXgU.jpg" class="img-fluid w-100 h-100 object-fit-cover" alt="Docentes conectando y compartiendo ideas al inicio de un taller creativo">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                                <span class="lab-badge">Bloque 1</span>
                                <h3 class="h4 mb-0">The Spark &middot; El Desaf&iacute;o <span class="text-muted fw-normal ms-2">(25 min)</span></h3>
                            </div>
                            <p class="mb-4">Objetivo: despertar prop&oacute;sito y concretar el reto que se va a resolver.</p>

                            <div class="activity-card">
                                <h4 class="activity-title h5 mb-2">Actividad 1 (10 min) &middot; Bienvenida y conexi&oacute;n</h4>
                                <p class="activity-meta mb-0">Inicio energizante que conecta con la acci&oacute;n y presenta el sprint.</p>
                                <div class="ponente-toggle mt-3">
                                    <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#nota-b1a1" aria-expanded="false" aria-controls="nota-b1a1">
                                        Mostrar notas para el ponente
                                    </button>
                                    <div class="collapse" id="nota-b1a1">
                                        <div class="ponente-note mt-3">
                                            <p class="mb-3">&ldquo;Hoy no venimos a hablar de innovaci&oacute;n: venimos a hacerla. Conecta-37 va de crear, compartir y mejorar juntos. Y hoy vamos a demostrar que con IA y colaboraci&oacute;n, el tiempo deja de ser excusa.&rdquo;</p>
                                            <p class="mb-0"><strong>Micro-v&iacute;deo inspirador</strong> (2 min m&aacute;x.) sobre el poder de crear.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="activity-card mb-0">
                                <h4 class="activity-title h5 mb-2">Actividad 2 (15 min) &middot; El Muro de los Proyectos Atascados</h4>
                                <p class="activity-meta mb-3">Visibilizar retos pendientes y elegir los proyectos que se prototipar&aacute;n durante el sprint.</p>
                                <ul class="mb-0 ps-3">
                                    <li>Herramienta: Padlet o Jamboard.</li>
                                    <li>Prompt para docentes: &ldquo;Piensa en un micro-proyecto (1-3 h) que siempre quisiste hacer con tu alumnado, pero nunca arrancaste por falta de tiempo.&rdquo;</li>
                                    <li>Cada docente publica su idea (5 min).</li>
                                    <li>El facilitador selecciona 3-4 ejemplos y cierra con direcci&oacute;n de foco.</li>
                                </ul>
                                <div class="ponente-toggle mt-3">
                                    <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#nota-b1a2" aria-expanded="false" aria-controls="nota-b1a2">
                                        Mostrar notas para el ponente
                                    </button>
                                    <div class="collapse" id="nota-b1a2">
                                        <div class="ponente-note mt-3">
                                            <p class="mb-0">&ldquo;Perfecto. Hoy vais a dise&ntilde;ar, crear y evaluar uno de esos proyectos&hellip; en solo 90 minutos.&rdquo;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Bloque 2 -->
            <section class="lab-block card border-0 mb-4">
                <div class="row g-0 align-items-stretch flex-lg-row-reverse">
                    <div class="col-lg-5">
                        <div class="lab-block-media h-100">
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80" class="img-fluid w-100 h-100 object-fit-cover" alt="Equipo docente colaborando con port&aacute;tiles y herramientas digitales">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                                <span class="lab-badge">Bloque 2</span>
                                <h3 class="h4 mb-0">Start Lab &middot; Sprint Creativo con IA <span class="text-muted fw-normal ms-2">(90 min)</span></h3>
                            </div>
                            <p class="mb-4">Objetivo: vivir el ciclo Dise&ntilde;ar &rarr; Crear &rarr; Compartir utilizando la IA como acelerador en cada fase.</p>

                            <div class="activity-card">
                                <h4 class="activity-title h5 mb-2">Paso 1 &middot; Dise&ntilde;ar (25 min)</h4>
                                <ul class="mb-0 ps-3">
                                    <li>Formar equipos interdisciplinarios.</li>
                                    <li>Elegir un proyecto del muro y dise&ntilde;ar una actividad real para el alumnado.</li>
                                    <li>Definir impacto, producto y criterios de calidad antes de producir.</li>
                                </ul>
                                <div class="ponente-toggle mt-3">
                                    <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#nota-b2p1" aria-expanded="false" aria-controls="nota-b2p1">
                                        Mostrar notas para el ponente
                                    </button>
                                    <div class="collapse" id="nota-b2p1">
                                        <div class="ponente-note mt-3">
                                            <p class="mb-2"><strong>IA Boost 1 (Demo + Acci&oacute;n):</strong> muestra c&oacute;mo usar IA para generar ideas y estructuras.</p>
                                            <p class="mb-2"><strong>Prompt de ejemplo:</strong> &ldquo;Act&uacute;a como dise&ntilde;ador instruccional experto. Crea un guion para un v&iacute;deo/podcast de 2 min donde el alumnado explique [tema del proyecto].&rdquo;</p>
                                            <p class="mb-0"><strong>Acci&oacute;n:</strong> los equipos generan y refinan su propio guion o estructura de producto usando la Gu&iacute;a de IA Responsable para registrar prompts y verificar resultados.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="activity-card">
                                <h4 class="activity-title h5 mb-2">Paso 2 &middot; Crear (45 min)</h4>
                                <ul class="mb-0 ps-3">
                                    <li>Reto: producir un MVP (Producto M&iacute;nimo Viable) actuando como si fuesen su propio alumnado.</li>
                                    <li>Posibles formatos: audio/podcast (Audacity, CapCut Audio), p&oacute;ster (Canva), clip de v&iacute;deo (Clipchamp).</li>
                                </ul>
                                <div class="ponente-toggle mt-3">
                                    <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#nota-b2p2" aria-expanded="false" aria-controls="nota-b2p2">
                                        Mostrar notas para el ponente
                                    </button>
                                    <div class="collapse" id="nota-b2p2">
                                        <div class="ponente-note mt-3">
                                            <p class="mb-2"><strong>IA Boost 2 (Asistencia en paralelo):</strong> rota entre equipos mostrando micro-trucos.</p>
                                            <ul class="mb-2 ps-4">
                                                <li>&ldquo;P&iacute;dele a la IA: &lsquo;Mejora este p&aacute;rrafo para hacerlo m&aacute;s inspirador.&rsquo;&rdquo;</li>
                                                <li>&ldquo;Sube el v&iacute;deo a [herramienta] y genera subt&iacute;tulos autom&aacute;ticos.&rdquo;</li>
                                            </ul>
                                            <p class="mb-0"><strong>Recordatorio:</strong> acompañar en verificaci&oacute;n de resultados IA vs. criterio docente.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="activity-card mb-0">
                                <h4 class="activity-title h5 mb-2">Paso 3 &middot; Compartir (20 min)</h4>
                                <ul class="mb-0 ps-3">
                                    <li>Publicar el MVP en la carpeta compartida del taller.</li>
                                    <li>Dise&ntilde;ar la r&uacute;brica expr&eacute;s asociada.</li>
                                    <li>Seleccionar 2-3 equipos para compartir su producto (2 min cada uno).</li>
                                </ul>
                                <div class="ponente-toggle mt-3">
                                    <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#nota-b2p3" aria-expanded="false" aria-controls="nota-b2p3">
                                        Mostrar notas para el ponente
                                    </button>
                                    <div class="collapse" id="nota-b2p3">
                                        <div class="ponente-note mt-3">
                                            <p class="mb-2"><strong>IA Boost 3 (Demo + Acci&oacute;n):</strong> gu&iacute;a la creaci&oacute;n de la r&uacute;brica.</p>
                                            <p class="mb-2"><strong>Prompt sugerido:</strong> &ldquo;Crea una r&uacute;brica 4&times;3 para evaluar Claridad, Creatividad y Calidad T&eacute;cnica de este producto.&rdquo;</p>
                                            <p class="mb-0"><strong>Acci&oacute;n:</strong> cada equipo genera, revisa y adjunta la r&uacute;brica a su carpeta antes de presentar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Bloque 3 -->
            <section class="lab-block card border-0 mb-4">
                <div class="row g-0 align-items-stretch">
                    <div class="col-lg-5">
                        <div class="lab-block-media h-100">
                            <img src="https://as2.ftcdn.net/v2/jpg/03/23/40/55/1000_F_323405569_JjKuR2oguMY1y7OFNn9kI5EXhkA0NOlW.jpg" class="img-fluid w-100 h-100 object-fit-cover" alt="Grupo de docentes reflexionando juntos tras una actividad">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                                <span class="lab-badge">Bloque 3</span>
                                <h3 class="h4 mb-0">The Debrief &middot; Metacognici&oacute;n <span class="text-muted fw-normal ms-2">(20 min)</span></h3>
                            </div>
                            <p class="mb-4">Objetivo: reflexionar sobre el proceso y consolidar los principios de uso de IA.</p>

                            <div class="activity-card mb-0">
                                <h4 class="activity-title h5 mb-2">Actividad &uacute;nica &middot; Di&aacute;logo guiado</h4>
                                <p class="activity-meta mb-3">Conversaci&oacute;n abierta con el grupo para detectar aprendizajes y escalar buenas pr&aacute;cticas.</p>
                                <p class="mb-3">Preguntas clave:</p>
                                <ol class="mb-0 ps-3">
                                    <li>&ldquo;&iquest;Qu&eacute; parte del trabajo hizo la IA y cu&aacute;l hicisteis vosotros?&rdquo; &mdash; Conclusi&oacute;n: la IA hace el trabajo pesado; el docente, el trabajo inteligente.</li>
                                    <li>&ldquo;&iquest;D&oacute;nde ha estado el verdadero aprendizaje?&rdquo;</li>
                                    <li>&ldquo;Revisemos los 3 principios IA &mdash; Transparencia, Autor&iacute;a, Verificaci&oacute;n &mdash; &iquest;c&oacute;mo se aplicaron hoy?&rdquo;</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Bloque 4 -->
            <section class="lab-block card border-0 mb-5">
                <div class="row g-0 align-items-stretch flex-lg-row-reverse">
                    <div class="col-lg-5">
                        <div class="lab-block-media h-100">
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80" class="img-fluid w-100 h-100 object-fit-cover" alt="Docente planificando los siguientes pasos tras un taller colaborativo">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                                <span class="lab-badge">Bloque 4</span>
                                <h3 class="h4 mb-0">Next Move &middot; Cierre <span class="text-muted fw-normal ms-2">(15 min)</span></h3>
                            </div>
                            <p class="mb-4">Objetivo: convertir la experiencia en acci&oacute;n concreta que contin&uacute;e en el aula.</p>

                            <div class="activity-card">
                                <h4 class="activity-title h5 mb-2">Actividad 1 (10 min) &middot; Completar la Mini-Unidad Conecta-37</h4>
                                <p class="activity-meta mb-0">Rematar el plan de vuelo con reto, guion y r&uacute;brica.</p>
                                <div class="ponente-toggle mt-3">
                                    <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#nota-b4a1" aria-expanded="false" aria-controls="nota-b4a1">
                                        Mostrar notas para el ponente
                                    </button>
                                    <div class="collapse" id="nota-b4a1">
                                        <div class="ponente-note mt-3">
                                            <p class="mb-0">&ldquo;Esto no son deberes; es vuestro plan de vuelo. En los pr&oacute;ximos 10 min terminad de pulir la plantilla: reto, guion y r&uacute;brica ya los ten&eacute;is.&rdquo;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="activity-card mb-0">
                                <h4 class="activity-title h5 mb-2">Actividad 2 (5 min) &middot; Compromiso P&uacute;blico</h4>
                                <p class="activity-meta mb-3">Cerrar con una declaraci&oacute;n accionable.</p>
                                <p class="mb-0">Prompt: &ldquo;Escribe una cosa que has aprendido hoy y que vas a probar en tu aula antes del viernes.&rdquo; Lectura espont&aacute;nea y cierre con agradecimiento.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Microproyecto ejemplo -->
            <section class="lab-block card border-0 mb-4">
                <div class="card-body p-4 p-md-5">
                    <div class="microproject-toggle text-center">
                        <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#microproyecto-mates" aria-expanded="false" aria-controls="microproyecto-mates">
                            Ver ejemplo de microproyecto (Matem&aacute;ticas)
                        </button>
                    </div>
                    <div class="collapse mt-4" id="microproyecto-mates">
                        <div class="microproject-card mx-auto" style="max-width: 760px;">
                            <h5 class="mb-2">Microproyecto 1 &mdash; Matem&aacute;ticas</h5>
                            <p class="mb-3"><strong>Tema:</strong> Ecuaciones lineales en la vida real.</p>

                            <hr>
                            <h6 class="fw-semibold text-primary mb-2">1. Idea inicial (borrador)</h6>
                            <p class="mb-2">&ldquo;Los alumnos dise&ntilde;an y graban un micro-v&iacute;deo de 2 minutos explicando c&oacute;mo resolver un problema cotidiano que implique una ecuaci&oacute;n lineal.&rdquo;</p>
                            <p class="mb-3"><strong>Ejemplo:</strong> repartir gastos en un viaje, calcular cu&aacute;nto falta para ahorrar una cantidad o determinar la velocidad media de un trayecto.</p>

                            <hr>
                            <h6 class="fw-semibold text-primary mb-2">2. Refinamiento del proyecto (versi&oacute;n guiada Conecta-37)</h6>
                            <p class="mb-2"><strong>T&iacute;tulo sugerido:</strong> &ldquo;Ecuaciones que resuelven mi vida&rdquo;</p>
                            <p class="mb-2"><strong>Duraci&oacute;n:</strong> 2 sesiones de clase (90 min aprox.).</p>
                            <p class="mb-3"><strong>Producto p&uacute;blico:</strong> v&iacute;deo corto (90&Prime;) o infograf&iacute;a digital donde el estudiante explica un problema real modelado con una ecuaci&oacute;n y muestra c&oacute;mo lo resuelve paso a paso.</p>

                            <hr>
                            <h6 class="fw-semibold text-primary mb-2">Objetivos de aprendizaje</h6>
                            <ul class="ps-3 mb-3">
                                <li>Formular y resolver ecuaciones lineales de primer grado con una inc&oacute;gnita.</li>
                                <li>Aplicar el razonamiento algebraico a situaciones reales.</li>
                                <li>Comunicar de forma oral o visual el proceso de resoluci&oacute;n.</li>
                            </ul>

                            <hr>
                            <h6 class="fw-semibold text-primary mb-2">Reto para el alumnado</h6>
                            <p class="mb-3">&ldquo;Encuentra una situaci&oacute;n de tu d&iacute;a a d&iacute;a donde necesites usar una ecuaci&oacute;n para resolver un problema real. Explica c&oacute;mo la planteas, la resuelves y qu&eacute; decisi&oacute;n tomas con el resultado.&rdquo;</p>

                            <hr>
                            <h6 class="fw-semibold text-primary mb-2">Guion orientativo del producto</h6>
                            <ol class="ps-3 mb-3">
                                <li class="mb-2"><strong>Introducci&oacute;n (20 s):</strong> el contexto o problema.<br><em>&ldquo;Quiero organizar una cena con mis amigos. El men&uacute; cuesta&hellip; y tengo un presupuesto de&hellip;&rdquo;</em></li>
                                <li class="mb-2"><strong>Planteamiento (40 s):</strong> c&oacute;mo convierto el problema en una ecuaci&oacute;n.<br><em>&ldquo;Si llamo x al n&uacute;mero de personas&hellip; entonces la ecuaci&oacute;n ser&iacute;a&hellip;&rdquo;</em></li>
                                <li><strong>Soluci&oacute;n y decisi&oacute;n (30 s):</strong> mostrar el c&aacute;lculo y qu&eacute; significa el resultado.<br><em>&ldquo;As&iacute; que si vienen 8 personas, cada una pagar&aacute;&hellip;&rdquo;</em></li>
                            </ol>

                            <hr>
                            <h6 class="fw-semibold text-primary mb-2">C&oacute;mo usar la IA en el dise&ntilde;o</h6>
                            <ul class="ps-3 mb-3">
                                <li class="mb-2"><strong>Para inspirarse:</strong> Prompt: <code>Dame 5 ejemplos de situaciones cotidianas de adolescentes donde se pueda usar una ecuaci&oacute;n lineal.</code></li>
                                <li class="mb-2"><strong>Para estructurar el guion:</strong> Prompt: <code>Ay&uacute;dame a crear un guion de 90 segundos para explicar este problema de ecuaciones de forma divertida.</code></li>
                                <li><strong>Para mejorar el texto:</strong> Prompt: <code>Reescribe mi enunciado para que suene m&aacute;s claro y motivador para estudiantes de 3&ordm; ESO.</code></li>
                            </ul>

                            <hr>
                            <h6 class="fw-semibold text-primary mb-3">Evaluaci&oacute;n (r&uacute;brica express)</h6>
                            <div class="table-responsive mb-3">
                                <table class="table table-sm microproject-table mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Criterio</th>
                                            <th scope="col">Excelente (3)</th>
                                            <th scope="col">Medio (2)</th>
                                            <th scope="col">Inicial (1)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Plantea correctamente la ecuaci&oacute;n</td>
                                            <td>Representa la situaci&oacute;n con precisi&oacute;n algebraica.</td>
                                            <td>Representa parcialmente la situaci&oacute;n.</td>
                                            <td>No logra relacionar el problema con la ecuaci&oacute;n.</td>
                                        </tr>
                                        <tr>
                                            <td>Razonamiento y resoluci&oacute;n</td>
                                            <td>Explica con claridad cada paso y justifica el resultado.</td>
                                            <td>Explica parcialmente el proceso.</td>
                                            <td>No justifica el procedimiento.</td>
                                        </tr>
                                        <tr>
                                            <td>Comunicaci&oacute;n</td>
                                            <td>Mensaje claro, creativo y con lenguaje matem&aacute;tico adecuado.</td>
                                            <td>Mensaje comprensible, con algunos errores.</td>
                                            <td>Explicaci&oacute;n confusa o incompleta.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <hr>
                            <h6 class="fw-semibold text-primary mb-2">Impacto esperado</h6>
                            <ul class="ps-3 mb-0">
                                <li>El alumnado comprende mejor el sentido de las ecuaciones al relacionarlas con su entorno.</li>
                                <li>Se potencia la expresi&oacute;n oral y digital en Matem&aacute;ticas.</li>
                                <li>Se refuerza la motivaci&oacute;n: &ldquo;No solo s&eacute; resolver ecuaciones, s&eacute; para qu&eacute; sirven.&rdquo;</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Claves -->
            <div class="lab-highlights">
                <h4 class="h5 fw-semibold mb-3">Claves del nuevo formato</h4>
                <ul class="mb-0 ps-3">
                    <li>La IA no se ense&ntilde;a: se usa en contexto.</li>
                    <li>El aprendizaje surge del hacer, no del ver.</li>
                    <li>Se refuerzan los valores de autonom&iacute;a docente, &eacute;tica digital y evidencia de impacto.</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer com&uacute;n -->
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
