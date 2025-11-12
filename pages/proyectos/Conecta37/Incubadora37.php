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

    <div class="container-xxl py-5 bg-light">
        <div class="container wow fadeInUp" data-wow-delay="0.1s" id="procedimiento">
            <div class="text-center mb-5">
                <h3 class="inc-section-title">Procedimiento expr&eacute;s para descubrir usos de IA (20&ndash;40 min)</h3>
                <p class="mb-0">Rutina guiada que puedes repetir en tutor&iacute;as, departamentos o laboratorios de proyecto.</p>
            </div>
            <div class="inc-timeline">
                <div class="inc-procedure-step mb-4">
                    <h5>0) Preparar (2&rsquo;)</h5>
                    <p>Contexto (grupo/curso), l&iacute;mites (datos/tiempo/dispositivos), 1 indicador de &eacute;xito.</p>
                    <p class="mb-0"><em>Plantilla:</em> <code>Contexto: ___ | L&iacute;mites: ___ | Indicador: ___</code></p>
                </div>
                <div class="inc-procedure-step mb-4">
                    <h5>1) Enunciar el reto (HMW) (5&rsquo;)</h5>
                    <p>Formula una pregunta &ldquo;&iquest;C&oacute;mo podr&iacute;amos&hellip;?&rdquo; acotada.</p>
                    <p class="mb-0"><em>Plantilla:</em> <code>&iquest;C&oacute;mo podr&iacute;amos [apoyar/mejorar] a ___ en ___ para ___ sin ___?</code></p>
                </div>
                <div class="inc-procedure-step mb-4">
                    <h5>2) Mapear momentos y fricciones (6&rsquo;)</h5>
                    <p>Divide el proceso en 5&ndash;7 momentos. Para cada uno: Tarea | Fricci&oacute;n | Variabilidad | Riesgo.</p>
                    <p class="mb-0"><em>Plantilla fila:</em> <code>Momento: ___ | Fricci&oacute;n: ___ | Riesgo: ___</code></p>
                </div>
                <div class="inc-procedure-step mb-4">
                    <h5>3) Lentes IA (6&rsquo;) &mdash; sin proponer soluciones</h5>
                    <p>Marca oportunidades en lenguaje neutro.</p>
                    <ul>
                        <li><strong>Automatizar</strong> (repetitivo)</li>
                        <li><strong>Ampliar</strong> (alcance)</li>
                        <li><strong>Andamiar</strong> (apoyos)</li>
                        <li><strong>Analizar</strong> (datos)</li>
                    </ul>
                    <p class="mb-0"><em>Formato:</em> <code>Oportunidad: [verbo] [objeto] en [momento]</code></p>
                </div>
                <div class="inc-procedure-step mb-4">
                    <h5>4) Brainwriting 6-3-5 (10&rsquo;)</h5>
                    <p>3 enunciados por persona/5&rsquo;; rotar y enriquecer 2 rondas. Trabajo silencioso.</p>
                    <p class="mb-0"><em>Formato:</em> <code>Usar IA para ___ en ___ con el fin de ___ respetando ___</code></p>
                </div>
                <div class="inc-procedure-step mb-4">
                    <h5>5) Chequeo &eacute;tico-legal (3&rsquo;)</h5>
                    <p>Datos m&iacute;nimos · Transparencia · Autor&iacute;a · No sustituci&oacute;n indebida · Accesibilidad.</p>
                    <p class="mb-0"><em>Sem&aacute;foro:</em> <code>OK / Reformular / Aparcar</code></p>
                </div>
                <div class="inc-procedure-step mb-4">
                    <h5>6) Priorizaci&oacute;n ICE adaptado (5&rsquo;)</h5>
                    <p>Punt&uacute;a Impacto, Facilidad, Seguridad (1&ndash;5). Ordena y guarda Top-3.</p>
                </div>
                <div class="inc-procedure-step">
                    <h5>7) Micro-experimento (3&rsquo;)</h5>
                    <p>Define el siguiente paso m&iacute;nimo para aprender (no la soluci&oacute;n completa).</p>
                    <p class="mb-0"><em>Plantilla:</em> <code>Objetivo: ___ | Evidencia: ___ | Umbral: ___ | Fecha revisi&oacute;n: ___</code></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container wow fadeInUp" data-wow-delay="0.1s" id="formulario">
            <div class="row g-4 align-items-start">
                <div class="col-lg-6">
                    <h3 class="inc-section-title mb-3">Ficha breve &ldquo;Prop&oacute;n tu Idea&rdquo;</h3>
                    <div class="inc-form-card">
                        <ul class="mb-0">
                            <li><strong>Reto (HMW):</strong> ___</li>
                            <li><strong>Contexto &amp; l&iacute;mites:</strong> ___</li>
                            <li><strong>Oportunidad (formato neutro):</strong> ___</li>
                            <li><strong>Sem&aacute;foro &eacute;tico:</strong> OK / Reformular / Aparcar</li>
                            <li><strong>ICE (I/F/S):</strong> _ _ _ · <strong>Ranking:</strong> ___</li>
                            <li><strong>Micro-experimento (1 paso):</strong> ___</li>
                        </ul>
                    </div>
                    <p class="mt-3 mb-0">Enviamos la ficha a la comisi&oacute;n de la Incubadora. Tras una revisi&oacute;n de 72h publicamos en la galer&iacute;a con plantilla duplicable.</p>
                </div>
                <div class="col-lg-6" id="banco">
                    <h3 class="inc-section-title mb-3">Banco de recursos + galer&iacute;a S2S</h3>
                    <div class="inc-card inc-card--placeholder mb-3">
                        <h5>Gu&iacute;as y tutoriales</h5>
                        <ul class="mb-0">
                            <li>Gu&iacute;a r&aacute;pida de prompts docentes.</li>
                            <li>Checklist de accesibilidad para materiales IA.</li>
                            <li>R&uacute;bricas comparables entre centros.</li>
                            <li>Plantillas de declaraciones de uso de IA.</li>
                        </ul>
                    </div>
                    <div class="inc-card inc-card--placeholder">
                        <h5>Galer&iacute;a S2S</h5>
                        <p>Subimos evidencias con la r&uacute;brica utilizada y una copia editable (Docs, Canvas, Figma, etc.). Cada pieza incluye:</p>
                        <ul class="mb-0">
                            <li>Contexto + reto.</li>
                            <li>Indicadores medidos.</li>
                            <li>Plantilla duplicable.</li>
                            <li>Licencia abierta (CC BY o CC BY-SA).</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-5">
                <h3 class="inc-section-title">Variantes r&aacute;pidas del procedimiento</h3>
                <p class="mb-0">Cuando necesites otro enfoque creativo, elige una de estas tres rutas.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="inc-variant-card h-100">
                        <h5>SCAMPER educativo con IA (25&ndash;40&rsquo;)</h5>
                        <p>Aplica Sustituir-Combinar-Adaptar-Modificar-Poner otros usos-Eliminar-Reordenar a los momentos del mapa (no a herramientas). Cierra con 2 principios para testear.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="inc-variant-card h-100">
                        <h5>TRIZ escolar (30&ndash;45&rsquo;)</h5>
                        <p>Imagina el peor uso posible de IA en tu contexto, enumera da&ntilde;os, invierte y genera principios preventivos; despu&eacute;s reformula propuestas que cumplan esos principios.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="inc-variant-card h-100">
                        <h5>Seis Sombreros (30&ndash;45&rsquo;)</h5>
                        <p>Piensa la IA desde hechos, emociones, riesgos, beneficios, creatividad y control; solo salen criterios, no soluciones. Luego redacta propuestas alineadas con ellos.</p>
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
