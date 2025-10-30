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
            <p class="lead text-white mb-0">Plataforma de matchmaking e incubaci&oacute;n para que equipos intercentro dise&ntilde;en, creen y lancen proyectos con IA en 150 minutos.</p>
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
                        <span class="text-uppercase text-primary lab-tag d-inline-block mb-2">Plataforma Intercentro</span>
                        <h2 class="fw-bold mb-3">Conecta-37 Start Lab (2 h 30 min)</h2>
                        <p class="mb-4">El Start Lab conecta centros, crea equipos mixtos y les da soporte antes, durante y despu&eacute;s del sprint para que lancen proyectos con IA y evidencias compartidas.</p>
                    </div>
                    <div class="col-lg-5">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="bg-white rounded-4 h-100 p-3 shadow-sm">
                                    <p class="text-uppercase text-muted mb-1 small fw-semibold">Estructura</p>
                                    <p class="mb-0">Mercado de ideas + Sprint intercentro + Incubadora.</p>
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
                                    <p class="mb-0">Que cada equipo intercentro co-dise&ntilde;e, produzca y mantenga vivo un proyecto apoyado por IA y acompa&ntilde;amiento docente.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mercado de Ideas -->
            <section class="lab-block card border-0 mb-4">
                <div class="row g-0 align-items-stretch flex-lg-row-reverse">
                    <div class="col-lg-5">
                        <div class="lab-block-media h-100">
                            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1200&q=80" class="img-fluid w-100 h-100 object-fit-cover" alt="Estudiantes compartiendo ideas en un espacio colaborativo digital">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                                <span class="lab-badge text-uppercase">Pre-Jornada</span>
                                <h3 class="h4 mb-0">Mercado de Ideas · Matchmaking Intercentros</h3>
                            </div>
                            <p class="mb-4">Antes del Start Lab, el foco est&aacute; en que los equipos intercentro se encuentren, compartan prop&oacute;sitos y lleguen al taller listos para producir.</p>
                            <div class="activity-card">
                                <h4 class="activity-title h5 mb-2">Muro de Proyectos y Habilidades</h4>
                                <p class="activity-meta mb-3">Espacio abierto (Padlet/Notion) donde cada clase publica:</p>
                                <ul class="ps-3 mb-0">
                                    <li><strong>Buscamos equipo para&hellip;</strong> descripci&oacute;n breve del reto o producto so&ntilde;ado.</li>
                                    <li><strong>Ofrecemos habilidades&hellip;</strong> capacidades del grupo: programaci&oacute;n, dise&ntilde;o, edici&oacute;n de v&iacute;deo, storytelling, etc.</li>
                                    <li>Links a prototipos previos o evidencias del centro.</li>
                                </ul>
                                <div class="ponente-toggle mt-3">
                                    <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#ejemplos-muro" aria-expanded="false" aria-controls="ejemplos-muro">
                                        Ver ejemplos de publicaciones
                                    </button>
                                    <div class="collapse" id="ejemplos-muro">
                                        <div class="ponente-note mt-3">
                                            <p class="mb-3"><strong>Mates · “3 problemas = 3 ecuaciones” (Documento 1 p&aacute;gina)</strong></p>
                                            <ul class="ps-3 mb-3">
                                                <li><strong>Producto:</strong> una hoja con 3 problemas cotidianos, ecuaci&oacute;n asociada, soluci&oacute;n y comprobaci&oacute;n.</li>
                                                <li><strong>Plan de trabajo:</strong> 5’ ejemplo guiado &rarr; 15’ redactar problemas &rarr; 10’ resolver &rarr; 10’ revisar/maquetar &rarr; 5’ publicar.</li>
                                                <li><strong>IA boost sugerido:</strong> <code>Genera 3 contextos cotidianos con ecuaciones de 1.º-3.º ESO, lenguaje sencillo y dato sobrante en uno de ellos.</code></li>
                                            </ul>
                                            <p class="mb-3"><strong>Lengua · “Micro-manifiesto (50-75 palabras)” (Diapositiva 1)</strong></p>
                                            <ul class="ps-3 mb-0">
                                                <li><strong>Producto:</strong> una diapositiva con t&iacute;tulo potente y manifiesto breve.</li>
                                                <li><strong>Plan de trabajo:</strong> 5’ lluvia de ideas &rarr; 15’ borrador &rarr; 15’ condensar a 50-75 palabras + tipograf&iacute;a &rarr; 10’ revisi&oacute;n/cr&eacute;ditos &rarr; 5’ publicar.</li>
                                                <li><strong>IA boost sugerido:</strong> <code>Reescribe este texto en &le;75 palabras, tono inspirador y claro para 14-16 años.</code></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="activity-card mb-0">
                                <h4 class="activity-title h5 mb-2">Inscripci&oacute;n por Equipos</h4>
                                <p class="activity-meta mb-3">Los facilitadores dinamizan la formaci&oacute;n de equipos intercentro antes de la jornada.</p>
                                <ul class="ps-3 mb-0">
                                    <li>Asignaci&oacute;n de equipos en funci&oacute;n de complementariedad de habilidades y disponibilidad horaria.</li>
                                    <li>Mini kit previo: canal digital de bienvenida + gu&iacute;a de convivencia y roles.</li>
                                    <li>Checklist de preparaci&oacute;n (herramientas digitales, responsables de cada tarea, horarios de conexi&oacute;n).</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Bloque 1 -->
            <section class="lab-block card border-0 mb-4">
                <div class="row g-0 align-items-stretch">
                    <div class="col-lg-5">
                        <div class="lab-block-media h-100">
                            <img src="https://as2.ftcdn.net/v2/jpg/05/18/75/43/1000_F_518754391_bgzyHPwU0KyijotX1qfjHiyxVMGPxhjM.jpg" class="img-fluid w-100 h-100 object-fit-cover" alt="Equipos intercentro conectando al inicio del taller">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                                <span class="lab-badge">Bloque 1</span>
                                <h3 class="h4 mb-0">Sprint Kick-off Intercentros <span class="text-muted fw-normal ms-2">(25 min)</span></h3>
                            </div>
                            <p class="mb-4">Objetivo: consolidar la identidad del nuevo equipo intercentro, alinear expectativas y refinar el reto elegido en el Mercado de Ideas.</p>

                            <div class="activity-card">
                                <h4 class="activity-title h5 mb-2">Actividad 1 (10 min) · Ritual de bienvenida</h4>
                                <p class="activity-meta mb-3">Dinámica rápida para que los integrantes de cada centro compartan motivaciones y acuerden reglas de juego.</p>
                                <ul class="ps-3 mb-0">
                                    <li>Mapa rápido de quién es quién + rol asumido (lead narrativo, datos, producción).</li>
                                    <li>Declaración de propósito común: ¿qué impacto quieren lograr con este prototipo?</li>
                                </ul>
                                <div class="ponente-toggle mt-3">
                                    <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#nota-b1a1" aria-expanded="false" aria-controls="nota-b1a1">
                                        Mostrar notas para el facilitador
                                    </button>
                                    <div class="collapse" id="nota-b1a1">
                                        <div class="ponente-note mt-3">
                                            <p class="mb-2">Haz que cada equipo active su canal privado en Discord/Teams y se presente con audio breve.</p>
                                            <p class="mb-0"><strong>Recordatorio:</strong> todos los acuerdos quedan registrados en el mural digital del equipo.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="activity-card mb-0">
                                <h4 class="activity-title h5 mb-2">Actividad 2 (15 min) · Afinar el reto</h4>
                                <p class="activity-meta mb-3">Revisión conjunta del reto traído del Mercado de Ideas para asegurar que encaja con las fortalezas del equipo.</p>
                                <ul class="ps-3 mb-0">
                                    <li>Checklist: audiencia, problema, impacto y entregable público.</li>
                                    <li>Decidir indicadores rápidos de éxito para el sprint (qué significa un MVP —Producto Mínimo Viable— logrado).</li>
                                    <li>Backlog inicial de tareas compartidas en la plataforma colaborativa.</li>
                                </ul>
                                <div class="ponente-toggle mt-3">
                                    <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#nota-b1a2" aria-expanded="false" aria-controls="nota-b1a2">
                                        Mostrar notas para el facilitador
                                    </button>
                                    <div class="collapse" id="nota-b1a2">
                                        <div class="ponente-note mt-3">
                                            <p class="mb-2">Guía al equipo para transformar la idea en un statement claro: <em>&ldquo;Crearemos [producto] para [audiencia] porque [insight].&rdquo;</em></p>
                                            <p class="mb-0"><strong>Entrega:</strong> publicar el reto refinado en el canal #anuncios-equipo para transparencia.</p>
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
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1200&q=80" class="img-fluid w-100 h-100 object-fit-cover" alt="Equipo intercentro trabajando conectado en una plataforma digital">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                                <span class="lab-badge">Bloque 2</span>
                                <h3 class="h4 mb-0">Sprint Intercentros con IA <span class="text-muted fw-normal ms-2">(90 min)</span></h3>
                            </div>
                            <p class="mb-4">Objetivo: operar como un estudio distribuido. Dise&ntilde;ar, producir y documentar el MVP (Producto M&iacute;nimo Viable) aprovechando la plataforma colaborativa central y los boosts de IA.</p>

                            <div class="activity-card">
                                <h4 class="activity-title h5 mb-2">Momento 0 (10 min) · Activar el HQ digital (Headquarters)</h4>
                                <p class="activity-meta mb-3">Cada equipo lanza su canal privado en Discord/Slack/Teams con tablero integrado.</p>
                                <ul class="ps-3 mb-0">
                                    <li>Plantilla base: #brief, #assets, #feedback.</li>
                                    <li>Checklist de convivencia digital (c&aacute;maras, turnos, tiempos de silencio productivo).</li>
                                    <li>Asignaci&oacute;n de responsable de bit&aacute;cora para documentar decisiones clave.</li>
                                </ul>
                                <div class="ponente-toggle mt-3">
                                    <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#nota-b2p0" aria-expanded="false" aria-controls="nota-b2p0">
                                        Mostrar notas para el facilitador
                                    </button>
                                    <div class="collapse" id="nota-b2p0">
                                        <div class="ponente-note mt-3">
                                            <p class="mb-0">Asegura que el canal incluye acceso directo al drive compartido, a la Gu&iacute;a IA Responsable y al tablero Kanban del equipo.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="activity-card">
                                <h4 class="activity-title h5 mb-2">Momento 1 (25 min) · Dise&ntilde;o asistido por IA</h4>
                                <ul class="ps-3 mb-0">
                                    <li>Clarificar cómo vivir&aacute; la experiencia quien use el producto y qué historia contaremos en el MVP.</li>
                                    <li>Crear checklist de calidad compartida y rúbrica interna.</li>
                                    <li>Prompts coordinados (cada integrante solicita a la IA desde su rol).</li>
                                </ul>
                                <div class="ponente-toggle mt-3">
                                    <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#nota-b2p1" aria-expanded="false" aria-controls="nota-b2p1">
                                        Mostrar notas para el facilitador
                                    </button>
                                    <div class="collapse" id="nota-b2p1">
                                        <div class="ponente-note mt-3">
                                            <p class="mb-2"><strong>Prompt maestro:</strong> &ldquo;Act&uacute;a como project manager educativo. Genera un plan de 6 tareas con responsables y entregables para construir [MVP].&rdquo;</p>
                                            <p class="mb-0">Valida que las decisiones clave queden en el tablero y que cada tarea tenga due time dentro del sprint.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="activity-card">
                                <h4 class="activity-title h5 mb-2">Momento 2 (45 min) · Producci&oacute;n distribuida</h4>
                                <ul class="ps-3 mb-0">
                                    <li>Trabajo simult&aacute;neo por salas: guion, visuales, datos, revisi&oacute;n.</li>
                                    <li>Uso de IA para iterar prototipos: mejora de texto, generaci&oacute;n de recursos visuales, subtitulado autom&aacute;tico.</li>
                                    <li>Check-in cada 15 min en el canal principal para sincronizar avances.</li>
                                </ul>
                                <div class="ponente-toggle mt-3">
                                    <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#nota-b2p2" aria-expanded="false" aria-controls="nota-b2p2">
                                        Mostrar notas para el facilitador
                                    </button>
                                    <div class="collapse" id="nota-b2p2">
                                        <div class="ponente-note mt-3">
                                            <p class="mb-2"><strong>IA Boost:</strong> comparte atajos live: generaci&oacute;n de storyboards, limpieza de audio, guiones adaptados seg&uacute;n nivel.</p>
                                            <p class="mb-0"><strong>Entregable:</strong> MVP subido al drive + changelog en el canal.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="activity-card mb-0">
                                <h4 class="activity-title h5 mb-2">Momento 3 (10 min) · Demo sincronizada</h4>
                                <ul class="ps-3 mb-0">
                                    <li>Preparar pitch de 90 segundos y evidencias para el Showcase.</li>
                                    <li>Checklist de accesibilidad (subt&iacute;tulos, cr&eacute;ditos, licencias de IA).</li>
                                    <li>Publicar anuncio del MVP en el canal general con link al repositorio del equipo.</li>
                                </ul>
                                <div class="ponente-toggle mt-3">
                                    <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#nota-b2p3" aria-expanded="false" aria-controls="nota-b2p3">
                                        Mostrar notas para el facilitador
                                    </button>
                                    <div class="collapse" id="nota-b2p3">
                                        <div class="ponente-note mt-3">
                                            <p class="mb-0">Invita a grabar la demo en el canal de voz del equipo para tener versi&oacute;n asincr&oacute;nica y subirla al Showcase.</p>
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
                                <h3 class="h4 mb-0">Debrief Estrat&eacute;gico Intercentros <span class="text-muted fw-normal ms-2">(20 min)</span></h3>
                            </div>
                            <p class="mb-4">Objetivo: capturar aprendizajes del equipo distribuido, evaluar el uso de IA y fijar mejoras en la colaboraci&oacute;n digital antes de la incubadora.</p>

                            <div class="activity-card mb-3">
                                <h4 class="activity-title h5 mb-2">Actividad 1 · Mapa de aprendizajes</h4>
                                <p class="activity-meta mb-3">Cada equipo completa un canvas compartido en el canal #retro:</p>
                                <ul class="ps-3 mb-0">
                                    <li><strong>Lo que funcion&oacute;:</strong> rituales, prompts, flujos de trabajo.</li>
                                    <li><strong>Lo que ajustaremos:</strong> horarios, roles, integraciones digitales.</li>
                                    <li><strong>Se&ntilde;ales de impacto:</strong> feedback recibido, indicadores prometedores.</li>
                                </ul>
                            </div>

                            <div class="activity-card mb-0">
                                <h4 class="activity-title h5 mb-2">Actividad 2 · IA Responsable en equipo</h4>
                                <p class="activity-meta mb-3">Debate guiado sobre transparencia, autor&iacute;a y verificaci&oacute;n en contextos intercentro.</p>
                                <ol class="mb-0 ps-3">
                                    <li>&ldquo;&iquest;Qu&eacute; tareas delegamos en la IA y cu&aacute;les mantuvimos humanas?&rdquo;</li>
                                    <li>&ldquo;&iquest;C&oacute;mo documentamos las decisiones tomadas por la IA para compartirlas con la comunidad?&rdquo;</li>
                                    <li>&ldquo;&iquest;Qu&eacute; ajustes propondremos para la pr&oacute;xima iteraci&oacute;n?&rdquo;</li>
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
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80" class="img-fluid w-100 h-100 object-fit-cover" alt="Equipo celebrando el lanzamiento de su proyecto colaborativo">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                                <span class="lab-badge">Bloque 4</span>
                                <h3 class="h4 mb-0">Lanzamiento de la Incubadora <span class="text-muted fw-normal ms-2">(20 min)</span></h3>
                            </div>
                            <p class="mb-4">Objetivo: cerrar con un lanzamiento. Cada equipo sale con roadmap, mentor asignado y el plan de visibilidad en la comunidad Conecta-37.</p>

                            <div class="activity-card">
                                <h4 class="activity-title h5 mb-2">Actividad 1 (12 min) · Mini hoja de ruta</h4>
                                <p class="activity-meta mb-3">Template en el HQ digital (Headquarters) para acordar los pr&oacute;ximos 3 hitos.</p>
                                <ul class="ps-3 mb-0">
                                    <li>Hito 1 (semana 1): validaci&oacute;n con alumnado / recogida de feedback.</li>
                                    <li>Hito 2 (semana 2-3): iteraci&oacute;n del MVP y recopilaci&oacute;n de evidencias.</li>
                                    <li>Hito 3 (semana 4): publicaci&oacute;n parcial en Showcase + avance teaser (Live Hub).</li>
                                </ul>
                                <div class="ponente-toggle mt-3">
                                    <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#nota-b4a1" aria-expanded="false" aria-controls="nota-b4a1">
                                        Mostrar notas para el facilitador
                                    </button>
                                    <div class="collapse" id="nota-b4a1">
                                        <div class="ponente-note mt-3">
                                            <p class="mb-0">Pide fecha, hora y responsable para la primera reunión post-jornada y registra el evento en el calendario de la incubadora.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="activity-card mb-3">
                                <h4 class="activity-title h5 mb-2">Actividad 2 (5 min) · Asignaci&oacute;n de mentor&iacute;as</h4>
                                <p class="activity-meta mb-3">Vincula a cada equipo con un docente mentor que har&aacute; seguimiento quincenal.</p>
                                <ul class="ps-3 mb-0">
                                    <li>Registrar en el canal #incubadora el mentor, contacto y canal de soporte.</li>
                                    <li>Definir indicador de seguimiento (impacto, evidencias, engagement).</li>
                                    <li>Agendar check-in de 30 minutos cada dos semanas.</li>
                                </ul>
                            </div>

                            <div class="activity-card mb-0">
                                <h4 class="activity-title h5 mb-2">Actividad 3 (3 min) · Rampa de visibilidad</h4>
                                <p class="activity-meta mb-0">Activar la narrativa p&uacute;blica del proyecto.</p>
                                <ul class="ps-3 mb-0">
                                    <li>Publicar el MVP y la roadmap en el <a href="Recursos37.php" class="sub-link">Showcase de proyectos</a>.</li>
                                    <li>Reservar espacio para la pr&oacute;xima presentaci&oacute;n en <a href="Livehub37.php" class="sub-link">Live Hub</a>.</li>
                                    <li>Compartir un micro-update semanal en el canal general #incubadora-conecta37.</li>
                                </ul>
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
                            Ver recurso de ejemplo de microproyecto (Matem&aacute;ticas)
                        </button>
                    </div>
                    <div class="collapse mt-4" id="microproyecto-mates">
                        <div class="microproject-card mx-auto" style="max-width: 760px;">
                            <h5 class="mb-2">Microproyecto 1 &mdash; Matem&aacute;ticas</h5>
                            <p class="mb-3"><strong>Tema:</strong> Ecuaciones lineales en la vida real.</p>
                            <p class="mb-3">Puedes usarlo como modelo para publicar la ficha de tu equipo en el Showcase y en la Incubadora.</p>

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
                    <li>Los equipos se forman antes del taller en el Mercado de Ideas, aprovechando habilidades complementarias.</li>
                    <li>Todo el sprint se gestiona desde un HQ digital (Headquarters) persistente (Discord/Teams) con IA como copiloto.</li>
                    <li>La incubadora mantiene el proyecto vivo: roadmap, mentor&iacute;as y actualizaciones en Showcase + Live Hub.</li>
                    <li>La IA sigue siendo herramienta situada: se usa en contexto, con transparencia, autor&iacute;a y verificaci&oacute;n compartidas.</li>
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
