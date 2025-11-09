<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>IA en el IES Alc&aacute;ntara · Conecta 37</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Marco de integraci&oacute;n de IA en el IES Alc&aacute;ntara" name="description">

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

        .ia-section {
            position: relative;
        }

        .ia-lede {
            font-size: 1.1rem;
            color: #0a3d62;
        }

        .ia-highlight,
        .ia-card,
        .ia-tier-card,
        .ia-playbook-card,
        .ia-governance-card,
        .ia-idea-card,
        .ia-glossary-card,
        .ia-declaration-card {
            background: #ffffff;
            border: 1px solid rgba(1, 81, 131, 0.12);
            border-radius: 1.5rem;
            padding: 1.75rem;
            box-shadow: 0 1.5rem 2.5rem rgba(1, 81, 131, 0.08);
        }

        .ia-highlight {
            background: linear-gradient(135deg, rgba(1, 81, 131, 0.08), rgba(1, 81, 131, 0.03));
        }

        .ia-list {
            padding-left: 1.2rem;
            margin-bottom: 0;
        }

        .ia-list li {
            margin-bottom: 0.4rem;
        }

        .ia-figure {
            border-radius: 1.5rem;
            padding: 1rem;
            background: #ffffff;
            border: 1px solid rgba(1, 81, 131, 0.12);
            box-shadow: 0 1.4rem 2.4rem rgba(1, 81, 131, 0.1);
        }

        .ia-figure img {
            width: 100%;
            height: auto;
        }

        .ia-caption {
            font-size: 0.9rem;
            margin-top: 0.5rem;
            color: rgba(10, 61, 98, 0.8);
        }

        .ia-principle-card {
            background: radial-gradient(circle at top right, rgba(1, 81, 131, 0.12), rgba(1, 81, 131, 0.04));
            border-radius: 1.5rem;
            padding: 1.6rem;
            height: 100%;
            border: 1px solid rgba(1, 81, 131, 0.12);
            box-shadow: inset 0 0 0 1px rgba(1, 81, 131, 0.08), 0 1rem 2rem rgba(1, 81, 131, 0.08);
        }

        .ia-principle-card img {
            max-width: 70px;
            height: auto;
            margin-bottom: 1rem;
        }

        .ia-tier-card {
            height: 100%;
        }

        .ia-tier-card h4 {
            color: #0a558c;
        }

        .ia-tier-image {
            max-width: 220px;
        }

        .ia-steps {
            padding-left: 1.2rem;
        }

        .ia-steps li {
            margin-bottom: 0.35rem;
        }

        .ia-mini-card {
            background: rgba(1, 81, 131, 0.04);
            border-radius: 1.25rem;
            padding: 1.25rem;
            height: 100%;
            border: 1px solid rgba(1, 81, 131, 0.08);
        }

        .ia-mini-card img {
            width: 64px;
            height: auto;
            margin-bottom: 0.75rem;
        }

        .ia-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.25rem;
        }

        .ia-idea-card h5 {
            color: #0a558c;
            font-size: 1.05rem;
        }

        .ia-pill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 0.9rem;
            background: #0a558c;
            color: #ffffff;
            font-weight: 700;
            margin-right: 0.6rem;
        }

        .ia-divider {
            width: 100%;
            height: 2px;
            margin: 1.8rem 0;
            background: linear-gradient(90deg, rgba(1, 81, 131, 0), rgba(1, 81, 131, 0.25), rgba(1, 81, 131, 0));
        }

        .ia-glossary-card dt {
            font-weight: 700;
            color: #0a558c;
        }

        .ia-glossary-card dd {
            margin-bottom: 1rem;
        }

        .ia-declaration-card code {
            background: rgba(1, 81, 131, 0.08);
            padding: 0.25rem 0.4rem;
            border-radius: 0.4rem;
        }

        @media (max-width: 767.98px) {
            .ia-tier-image {
                max-width: 160px;
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
            <h1 class="display-4 text-white mb-3">La inteligencia artificial en el IES Alc&aacute;ntara</h1>
            <p class="lead text-white mb-0">Formamos creadores, no solo usuarios: acompa&ntilde;amos a cada estudiante y docente en un viaje progresivo, &eacute;tico y medible.</p>
            <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
                <a href="index.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Visi&oacute;n general</a>
                <a href="Encuentro37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Jornadas 26</a>
                <a href="Livehub37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Live Hub</a>
                <a href="Recursos37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Showcase de proyectos</a>
                <a href="Roadmap.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Roadmap</a>
                <a href="Centros.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Centros participantes</a>
                <a href="IAIESAlcantara.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1 active" aria-current="page">IA IES Alc&aacute;ntara</a>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <span class="text-uppercase text-primary">Marco vivo</span>
                    <h2 class="mb-3">La inteligencia artificial en el IES Alc&aacute;ntara: formando creadores, no solo usuarios</h2>
                    <p class="ia-lede"><strong>&Aacute;mbito:</strong> alumnado (DGMakers y no DGMakers) y profesorado del IES Alc&aacute;ntara.</p>
                    <div class="ia-highlight mb-3">
                        <h5 class="mb-2">Filosof&iacute;a</h5>
                        <ul class="ia-list">
                            <li>Aprende para ense&ntilde;ar.</li>
                            <li>Hacemos cosas &uacute;tiles.</li>
                            <li>Compartimos y medimos.</li>
                        </ul>
                    </div>
                    <p class="mb-0">Activamos un ecosistema donde la IA se experimenta de manera guiada, se documentan los hallazgos y se comparten plantillas listas para usar en cualquier materia.</p>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="ia-figure">
                        <img src="img/IESAlcantara.png" alt="IES Alc&aacute;ntara" class="img-fluid">
                        <div class="ia-caption">IES Alc&aacute;ntara · Coraz&oacute;n de la red IA37</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light ia-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <div class="ia-card">
                        <h3 class="mb-3">&iquest;Para qu&eacute; este marco?</h3>
                        <p class="mb-3">Este documento explica c&oacute;mo integramos la IA en el IES Alc&aacute;ntara para aprender mejor, incluir a todo el alumnado y optimizar la docencia. Re&uacute;ne la visi&oacute;n DGMakers y las pr&aacute;cticas del profesorado en un plan accionable con principios, flujos, m&eacute;tricas y plantillas.</p>
                        <p class="mb-0">Sirve como gu&iacute;a de referencia r&aacute;pida para mentor&iacute;as, proyectos de aula, formaci&oacute;n del claustro y comunicaci&oacute;n con familias.</p>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="ia-figure">
                        <img src="img/iaconecta.png" alt="Marco Conecta IA" class="img-fluid">
                        <div class="ia-caption">Documentamos flujos, plantillas y m&eacute;tricas en IA37.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-5">
                <h3>Nuestra br&uacute;jula: uso responsable de IA</h3>
                <p class="mb-0">Seis principios alinean decisiones t&eacute;cnicas, did&aacute;cticas y &eacute;ticas. Cada evidencia incluye referencias a estos checks.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="ia-principle-card h-100">
                        <img src="img/creando.png" alt="Aprendizaje activo">
                        <div class="d-flex align-items-center mb-2">
                            <span class="ia-pill">1</span>
                            <h5 class="mb-0">Aprendizaje activo</h5>
                        </div>
                        <p class="mb-0">La IA no hace el trabajo; gu&iacute;a, sugiere y comprueba. El alumno razona, crea y cita.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="ia-principle-card h-100">
                        <img src="img/accesibilidad.png" alt="Inclusi&oacute;n e accesibilidad">
                        <div class="d-flex align-items-center mb-2">
                            <span class="ia-pill">2</span>
                            <h5 class="mb-0">Inclusi&oacute;n y accesibilidad</h5>
                        </div>
                        <p class="mb-0">Materiales en lectura f&aacute;cil cuando proceda; pictogramas, subt&iacute;tulos, ALT-text y contraste m&iacute;nimo AA.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="ia-principle-card h-100">
                        <img src="img/publico.png" alt="Privacidad y seguridad">
                        <div class="d-flex align-items-center mb-2">
                            <span class="ia-pill">3</span>
                            <h5 class="mb-0">Privacidad y seguridad</h5>
                        </div>
                        <p class="mb-0">Sin datos personales sensibles de alumnado o familias; datos siempre anonimizados.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="ia-principle-card h-100">
                        <img src="img/lengua.png" alt="Transparencia">
                        <div class="d-flex align-items-center mb-2">
                            <span class="ia-pill">4</span>
                            <h5 class="mb-0">Transparencia</h5>
                        </div>
                        <p class="mb-0">Toda entrega incluye Declaraci&oacute;n de uso de IA (plantilla al final).</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="ia-principle-card h-100">
                        <img src="img/evaluacion.png" alt="Evidencia">
                        <div class="d-flex align-items-center mb-2">
                            <span class="ia-pill">5</span>
                            <h5 class="mb-0">Evidencia</h5>
                        </div>
                        <p class="mb-0">Medimos antes/despu&eacute;s; guardamos muestras, r&uacute;bricas y diarios de aprendizaje.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="ia-principle-card h-100">
                        <img src="img/mentorias.png" alt="Licencias abiertas">
                        <div class="d-flex align-items-center mb-2">
                            <span class="ia-pill">6</span>
                            <h5 class="mb-0">Licencias abiertas</h5>
                        </div>
                        <p class="mb-0">Por defecto CC BY / CC BY-SA para facilitar la reutilizaci&oacute;n.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light ia-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-5">
                <h3>1) Los DGMakers: de usuarios a desarrolladores de IA</h3>
                <p class="mb-0">Formamos estudiantes con competencia digital cr&iacute;tica y creativa. Estructuramos el aprendizaje en tres niveles progresivos.</p>
            </div>
            <div class="row g-4 align-items-center mb-4">
                <div class="col-lg-8">
                    <div class="ia-tier-card">
                        <h4 class="mb-2">Nivel 1 &mdash; La IA como Cotutor (LLM)</h4>
                        <p><strong>Objetivo:</strong> aprender con la IA (no de la IA) usando di&aacute;logo socr&aacute;tico y verificaci&oacute;n.</p>
                        <h5>Claves</h5>
                        <ul class="ia-list">
                            <li>Pedir procesos, no respuestas: "Expl&iacute;came el m&eacute;todo", "Dame un ejemplo similar", "Eval&uacute;a mi borrador y se&ntilde;ala puntos d&eacute;biles".</li>
                            <li>Pensamiento cr&iacute;tico: fact-checking b&aacute;sico, detecci&oacute;n de sesgos y contraste de fuentes.</li>
                            <li>Prompts eficaces: objetivo claro, contexto, restricciones y formato de salida.</li>
                        </ul>
                        <h5 class="mt-3">Actividades tipo</h5>
                        <ul class="ia-list">
                            <li>Cotutor de estudio en Lengua, Matem&aacute;ticas, Historia.</li>
                            <li>Entrenador de redacci&oacute;n con r&uacute;brica.</li>
                            <li>Planificador de proyectos (ABP/GD): objetivos, cronograma, evidencias.</li>
                        </ul>
                        <h5 class="mt-3">Flujo r&aacute;pido (cotutor LLM)</h5>
                        <ol class="ia-steps">
                            <li>Objetivo y pregunta concreta.</li>
                            <li>La IA propone pasos.</li>
                            <li>El alumno ejecuta y comprueba.</li>
                            <li>Ajuste con nuevas preguntas.</li>
                            <li>Declaraci&oacute;n de uso de IA.</li>
                        </ol>
                        <p class="mb-1"><strong>Evidencias:</strong> plan de estudio, ejercicios hechos a mano, capturas del di&aacute;logo, r&uacute;brica y reflexi&oacute;n final.</p>
                        <p class="mb-0"><strong>Riesgos:</strong> dependencia, errores, sesgos -> <em>Mitigaci&oacute;n:</em> verificaci&oacute;n cruzada, preguntas socr&aacute;ticas, trabajo con fuentes.</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="ia-figure">
                        <img src="img/lengua.png" alt="Cotutor LLM" class="ia-tier-image">
                        <div class="ia-caption">El cotutor IA refuerza la autonom&iacute;a del estudiante.</div>
                    </div>
                </div>
            </div>
            <div class="row g-4 align-items-center mb-4">
                <div class="col-lg-4 order-lg-1 order-2 text-center">
                    <div class="ia-figure">
                        <img src="img/matematicas.png" alt="Fundamentos de IA" class="ia-tier-image">
                        <div class="ia-caption">Descomponemos modelos en piezas tangibles.</div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-2 order-1">
                    <div class="ia-tier-card">
                        <h4 class="mb-2">Nivel 2 &mdash; Fundamentos de IA (m&aacute;s all&aacute; de la caja negra)</h4>
                        <p><strong>Objetivo:</strong> comprender datos &rarr; modelo &rarr; p&eacute;rdida &rarr; entrenamiento &rarr; validaci&oacute;n, sesgo y sobreajuste; programar ejemplos.</p>
                        <h5>Actividades</h5>
                        <ul class="ia-list">
                            <li>Neuronas como "reglas" (actividad unplugged con tarjetas).</li>
                            <li>Perceptr&oacute;n / regresi&oacute;n lineal y descenso de gradiente (visual).</li>
                            <li>Glosario propio y mini-experimentos controlados.</li>
                        </ul>
                        <h5 class="mt-3">Mini-proyectos</h5>
                        <ul class="ia-list">
                            <li>MNIST reducido (n&uacute;meros a mano).</li>
                            <li>Detecci&oacute;n de formas (c&iacute;rculos, tri&aacute;ngulos) con dataset propio.</li>
                        </ul>
                        <p class="mb-0 mt-3"><strong>Evidencias:</strong> cuaderno de laboratorio, curvas de p&eacute;rdida/accuracy y conclusiones.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-8">
                    <div class="ia-tier-card">
                        <h4 class="mb-2">Nivel 3 &mdash; Creaci&oacute;n y aplicaci&oacute;n (TensorFlow y proyectos reales)</h4>
                        <p><strong>Objetivo:</strong> dise&ntilde;ar y entrenar modelos con TensorFlow/Keras, aplic&aacute;ndolos a problemas reales del centro y del entorno.</p>
                        <h5>Proyectos sugeridos</h5>
                        <ul class="ia-list">
                            <li>Visi&oacute;n: clasificaci&oacute;n de frutas, residuos (reciclaje), se&ntilde;ales de huerta.</li>
                            <li>Transfer learning (MobileNet/EfficientNet) con pocas im&aacute;genes.</li>
                            <li>Audio: detecci&oacute;n de palabras simples o sonidos del entorno.</li>
                            <li>Datos educativos (anonimizados): analizar mejoras tras una intervenci&oacute;n did&aacute;ctica.</li>
                        </ul>
                        <h5 class="mt-3">Ciclo m&iacute;nimo viable (CMV)</h5>
                        <ol class="ia-steps">
                            <li>Problema claro.</li>
                            <li>Dataset peque&ntilde;o y equilibrado.</li>
                            <li>Modelo base/transfer.</li>
                            <li>Entrenar/validar.</li>
                            <li>Medir.</li>
                            <li>Explicar errores.</li>
                            <li>Publicar (licencia + l&iacute;mites de uso).</li>
                        </ol>
                        <p class="mb-0"><strong>Evidencias:</strong> matriz de confusi&oacute;n, m&eacute;tricas (accuracy, precisi&oacute;n, recall), cartas del modelo (qu&eacute; acierta/falla) y README con limitaciones.</p>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="ia-figure">
                        <img src="img/creando.png" alt="Proyectos TensorFlow" class="ia-tier-image">
                        <div class="ia-caption">Los proyectos reales se documentan con licencias abiertas.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-5">
                <h3>2) El profesorado: la IA como catalizador docente</h3>
                <p class="mb-0">Para que el alumnado innove, el profesorado lidera la transformaci&oacute;n. Usamos IA en cuatro &aacute;reas clave (m&aacute;s extensiones).</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="ia-mini-card h-100">
                        <img src="img/ciclo.png" alt="Optimizaci&oacute;n docente">
                        <h5>2.1. Optimizaci&oacute;n</h5>
                        <p class="mb-0">Adi&oacute;s a tareas repetitivas: borradores de correos, res&uacute;menes, r&uacute;bricas iniciales, bancos de &iacute;tems, guiones de clase, listas de verificaci&oacute;n y organizaci&oacute;n de grupos/turnos.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="ia-mini-card h-100">
                        <img src="img/accesibilidad.png" alt="Inclusi&oacute;n">
                        <h5>2.2. Atenci&oacute;n a la diversidad</h5>
                        <p class="mb-0">Adaptaci&oacute;n a lectura f&aacute;cil, glosarios y versiones por nivel; pictogramas, audiodescripciones y subt&iacute;tulos cuando proceda; principios UDL.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="ia-mini-card h-100">
                        <img src="img/mentorias.png" alt="Situaciones de aprendizaje">
                        <h5>2.3. Creaci&oacute;n de SdA</h5>
                        <p class="mb-0">Compa&ntilde;ero de ideas para brainstorming, dise&ntilde;o backward (competencias &rarr; evidencias), andamiaje (mini-retos, checklist por fases) y contextualizaci&oacute;n local.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="ia-mini-card h-100">
                        <img src="img/evaluacion.png" alt="Evaluaci&oacute;n formativa">
                        <h5>2.4. Evaluaci&oacute;n</h5>
                        <p class="mb-0">R&uacute;bricas con descriptores claros, ejemplos de evidencias, feedback formativo; bancos de preguntas (abiertas y estructuradas); an&aacute;lisis de patrones de respuesta.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="ia-mini-card h-100">
                        <img src="img/publico.png" alt="Otros usos">
                        <h5>2.5. Otros usos ampliados</h5>
                        <p class="mb-0">Comunicaci&oacute;n con familias; an&aacute;lisis de datos del centro (tendencias an&oacute;nimas); convivencia y orientaci&oacute;n (bienestar digital, gesti&oacute;n del tiempo).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light ia-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-5">
                <h3>3) Playbooks (paso a paso)</h3>
                <p class="mb-0">Gu&iacute;as operativas listas para imprimir o incorporar en el aula virtual.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="ia-playbook-card h-100">
                        <h5>3.1. Cotutor de estudio (alumnado)</h5>
                        <ol class="ia-steps">
                            <li>Contrato de uso: "La IA me gu&iacute;a; yo resuelvo y cito".</li>
                            <li>Prompt base (abajo) + objetivo concreto.</li>
                            <li>Plan por pasos y 3 ejercicios graduados.</li>
                            <li>Alumno resuelve a mano; IA corrige y explica por qu&eacute;.</li>
                            <li>Reflexi&oacute;n breve + capturas.</li>
                            <li>Declaraci&oacute;n de uso de IA en la entrega.</li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ia-playbook-card h-100">
                        <h5>3.2. Preparar una SdA con IA (docentes)</h5>
                        <ol class="ia-steps">
                            <li>Competencias/criterios.</li>
                            <li>Producto final.</li>
                            <li>Evidencias.</li>
                            <li>R&uacute;brica.</li>
                            <li>Secuencia (tiempos/materiales).</li>
                            <li>Adaptaciones.</li>
                            <li>Instrumentos de evaluaci&oacute;n.</li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ia-playbook-card h-100">
                        <h5>3.3. Proyecto TensorFlow (imagen)</h5>
                        <ol class="ia-steps">
                            <li>Definir clases y m&iacute;nimo 30 im&aacute;genes/clase (CMV).</li>
                            <li>Estructurar dataset: train/val/test = 60/20/20.</li>
                            <li>Elegir modelo transfer ligero.</li>
                            <li>Entrenar 5&ndash;10 &eacute;pocas con early stopping y augmentations.</li>
                            <li>Evaluar (accuracy + matriz de confusi&oacute;n).</li>
                            <li>Analizar errores y proponer mejoras.</li>
                            <li>Publicar resultados con licencia y l&iacute;mites.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <div class="ia-governance-card">
                        <h3 class="mb-3">4) Gobernanza y roles</h3>
                        <ul class="ia-list">
                            <li>Comisi&oacute;n IA (equipo motor): Coordinaci&oacute;n TIC, DGMakers, Orientaci&oacute;n, Jefatura de Estudios.</li>
                            <li>Responsable de privacidad: valida que no se suben datos sensibles.</li>
                            <li>Curadores de repositorios: orden por materias, licencias y metadatos.</li>
                            <li>Mentores DGMakers: apoyo a docentes y alumnado en proyectos.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="ia-figure">
                        <img src="img/mentorias.png" alt="Gobernanza IA37" class="img-fluid">
                        <div class="ia-caption">Roles claros garantizan transparencia y seguimiento.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light ia-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-5">
                <h3>8) Ideas de proyectos y gu&iacute;as pr&aacute;cticas (IA37 + DGMakers)</h3>
                <p class="mb-0">Cat&aacute;logo de acciones r&aacute;pidas para activar la IA en aula, claustro y comunidad.</p>
            </div>
            <div class="ia-grid">
                <div class="ia-idea-card">
                    <h5>8.1. Crear con IA (alumnado)</h5>
                    <ul class="ia-list">
                        <li>Texto y guion: generar borradores, res&uacute;menes y refinar estilo para podcasts, blogs o presentaciones.</li>
                        <li>Matem&aacute;ticas que se expresan: estructurar razonamientos, anticipar preguntas y generar contraejemplos.</li>
                        <li>Producci&oacute;n audiovisual: listas de planos, checklists de calidad y subt&iacute;tulos autom&aacute;ticos.</li>
                    </ul>
                </div>
                <div class="ia-idea-card">
                    <h5>8.2. Dise&ntilde;ar con IA (profesorado)</h5>
                    <ul class="ia-list">
                        <li>Mini-unidades: objetivos, criterios de &eacute;xito y actividades clave en minutos.</li>
                        <li>R&uacute;bricas: primera versi&oacute;n lista para ajustes r&aacute;pidos.</li>
                        <li>Feedback: "pluses y preguntas" concretas sin sustituir la voz docente.</li>
                    </ul>
                </div>
                <div class="ia-idea-card">
                    <h5>8.3. Integraci&oacute;n en el sprint (3 semanas)</h5>
                    <ul class="ia-list">
                        <li>Semana 1 &ndash; Dise&ntilde;ar: lluvia de ideas y definici&oacute;n de criterios de &eacute;xito.</li>
                        <li>Semana 2 &ndash; Crear: la IA act&uacute;a como cr&iacute;tico amable que ofrece feedback.</li>
                        <li>Semana 3 &ndash; Compartir: t&iacute;tulos, descripciones y subt&iacute;tulos para publicar.</li>
                    </ul>
                </div>
                <div class="ia-idea-card">
                    <h5>8.4. L&iacute;mites claros</h5>
                    <ul class="ia-list">
                        <li>No se acepta texto generado &iacute;ntegramente por IA como trabajo propio.</li>
                        <li>Cada proyecto incluye Declaraci&oacute;n de uso de IA.</li>
                        <li>Privacidad y protecci&oacute;n de datos son innegociables.</li>
                    </ul>
                </div>
                <div class="ia-idea-card">
                    <h5>8.5. Kit de herramientas</h5>
                    <ul class="ia-list">
                        <li>Asistente de redacci&oacute;n online.</li>
                        <li>Herramientas de transcripci&oacute;n y subtitulado autom&aacute;ticos.</li>
                        <li>Suite colaborativa para documentos y presentaciones.</li>
                    </ul>
                </div>
                <div class="ia-idea-card">
                    <h5>8.6. Modelos de instrucciones (prompts)</h5>
                    <ul class="ia-list">
                        <li>Lengua (podcast): "Estructura un guion de 4 minutos sobre [tema] con introducci&oacute;n, dos argumentos y una llamada a la acci&oacute;n".</li>
                        <li>Matem&aacute;ticas (explicaci&oacute;n): "Revisa este razonamiento y detecta posibles saltos l&oacute;gicos. Prop&oacute;name una pregunta desafiante para defenderlo".</li>
                        <li>Audiovisual (publicaci&oacute;n): "Genera 5 t&iacute;tulos cortos y una descripci&oacute;n con palabras clave para un v&iacute;deo sobre [tema]".</li>
                    </ul>
                </div>
                <div class="ia-idea-card">
                    <h5>8.7. Indicadores de &eacute;xito</h5>
                    <ul class="ia-list">
                        <li>Tiempo ahorrado por el docente en cada sprint.</li>
                        <li>Calificaci&oacute;n media en las r&uacute;bricas del producto final.</li>
                        <li>% de proyectos con declaraci&oacute;n de uso de IA.</li>
                    </ul>
                </div>
                <div class="ia-idea-card">
                    <h5>8.8. Demostraci&oacute;n r&aacute;pida (en clase)</h5>
                    <ul class="ia-list">
                        <li>Antes y despu&eacute;s: mostrar un texto base y su versi&oacute;n mejorada con IA.</li>
                        <li>R&uacute;brica al instante: generar una r&uacute;brica y ajustarla en directo.</li>
                        <li>Subt&iacute;tulos autom&aacute;ticos: subir un v&iacute;deo corto y generar subt&iacute;tulos.</li>
                    </ul>
                </div>
                <div class="ia-idea-card">
                    <h5>8.9. Proyectos por materia (ideas r&aacute;pidas)</h5>
                    <ul class="ia-list">
                        <li>Lengua: analizador de figuras ret&oacute;ricas asistido por IA + reescritura en lectura f&aacute;cil.</li>
                        <li>Matem&aacute;ticas: generador de problemas graduados y corrector con explicaciones.</li>
                        <li>Tecnolog&iacute;a: clasificador de im&aacute;genes (residuos, herramientas) con transfer learning.</li>
                        <li>Biolog&iacute;a/Geo: reconocimiento de flora local (dataset propio + gu&iacute;a de campo).</li>
                        <li>Historia: l&iacute;nea del tiempo con fuentes primarias y an&aacute;lisis de sesgos.</li>
                        <li>M&uacute;sica: composici&oacute;n guiada por IA + an&aacute;lisis arm&oacute;nico b&aacute;sico.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="ia-glossary-card h-100">
                        <h3 class="mb-3">9) Glosario esencial</h3>
                        <dl>
                            <dt>LLM</dt>
                            <dd>Modelo de lenguaje que predice palabras; &uacute;til como cotutor.</dd>
                            <dt>Dataset</dt>
                            <dd>Conjunto de datos para entrenar o evaluar modelos.</dd>
                            <dt>Sobreajuste</dt>
                            <dd>El modelo memoriza el entrenamiento y falla en datos nuevos.</dd>
                            <dt>Matriz de confusi&oacute;n</dt>
                            <dd>Tabla que muestra aciertos y errores por clase.</dd>
                        </dl>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="ia-declaration-card h-100">
                        <h4 class="mb-3">Declaraci&oacute;n de uso de IA (plantilla)</h4>
                        <p class="mb-2">Cada entrega incorpora esta nota firmada por el equipo o estudiante:</p>
                        <ul class="ia-list">
                            <li><strong>Herramientas usadas:</strong> [nombre + versi&oacute;n].</li>
                            <li><strong>Usos concretos:</strong> [ideaci&oacute;n / revisi&oacute;n / c&oacute;digo / subt&iacute;tulos].</li>
                            <li><strong>Verificaci&oacute;n humana:</strong> [m&eacute;todos y referencias].</li>
                            <li><strong>Datos sensibles:</strong> no se compartieron / se anonimizaron.</li>
                            <li><strong>Responsable:</strong> [nombre, curso/rol, fecha].</li>
                        </ul>
                        <p class="mb-0"><code>Firmo que comprendo los l&iacute;mites de la IA y soy responsable del resultado.</code></p>
                    </div>
                </div>
            </div>
            <div class="ia-divider"></div>
            <p class="ia-lede mb-0">La IA no es un fin en s&iacute; mismo. Es una palanca para aprender mejor, incluir m&aacute;s y crear con prop&oacute;sito. En el IES Alc&aacute;ntara formamos creadores, no solo usuarios: estudiantes que comprenden, cuestionan y construyen tecnolog&iacute;a con sentido cr&iacute;tico, &eacute;tico y creativo.</p>
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
