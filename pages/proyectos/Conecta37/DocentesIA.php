<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>IA para docentes &#183; Conecta 37</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Dos itinerarios para docentes que integran IA en el aula" name="description">

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
         .ia37-image {
            max-width: 100%;
            border-radius: 16px;
            box-shadow: 0 20px 45px rgba(15, 23, 42, 0.12);
        }

        .ia37-block {
            margin-bottom: 4.5rem;
        }

        .ia37-block:last-of-type {
            margin-bottom: 0;
        }
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

        .ia-card {
            background: #ffffff;
            border: 1px solid rgba(1, 81, 131, 0.12);
            border-radius: 1.5rem;
            padding: 1.75rem;
            box-shadow: 0 1.5rem 2.5rem rgba(1, 81, 131, 0.08);
        }

        .ia-mini-card {
            background: rgba(1, 81, 131, 0.04);
            border: 1px solid rgba(1, 81, 131, 0.1);
            border-radius: 1.25rem;
            padding: 1.25rem;
            height: 100%;
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

        .ia-pill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 2.4rem;
            height: 2.1rem;
            padding: 0 0.6rem;
            border-radius: 0.8rem;
            background: rgba(1, 81, 131, 0.08);
            color: #0a558c;
            font-weight: 700;
            letter-spacing: 0.01em;
            text-transform: uppercase;
            font-size: 0.8rem;
        }

        .ia-chip {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.35rem 0.85rem;
            border-radius: 0.75rem;
            font-weight: 600;
            background: rgba(10, 85, 140, 0.12);
            box-shadow: inset 0 0 0 1px rgba(10, 85, 140, 0.14);
            color: #0a558c;
            font-size: 0.9rem;
        }

        .ia-list {
            padding-left: 1.2rem;
            margin-bottom: 0;
        }

        .ia-list li {
            margin-bottom: 0.4rem;
        }

        .ia-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.25rem;
        }

        .ia-divider {
            width: 100%;
            height: 2px;
            margin: 1.8rem 0;
            background: linear-gradient(90deg, rgba(1, 81, 131, 0), rgba(1, 81, 131, 0.25), rgba(1, 81, 131, 0));
        }

        .ia-accent {
            color: #0a558c;
        }

        .ia-page p {
            text-align: justify;
        }

        .ia-note {
            font-size: 0.95rem;
            color: rgba(10, 61, 98, 0.85);
        }

        .ia-switch,
        .ia-subject {
            border-radius: 0.9rem;
            padding: 0.45rem 1.2rem;
            font-weight: 600;
            border: 1px solid #0a558c;
            background: #ffffff;
            color: #0a558c;
            transition: all 0.2s ease;
        }

        .ia-switch.active,
        .ia-subject.active {
            background-color: #015183;
            border-color: #015183;
            color: #ffffff;
            box-shadow: 0 0.8rem 1.6rem rgba(1, 81, 131, 0.18);
        }

        .ia-version {
            display: none;
        }

        .ia-version.active {
            display: block;
        }

        .ia-panel {
            display: none;
        }

        .ia-panel.active {
            display: block;
        }

        @media (max-width: 767.98px) {
            .hero-conecta h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body class="ia-page">
    <!-- Men&#250; com&#250;n -->
    <?php
        $img = "../../..";
        $pages = "../..";
        $index = "../../..";
        include "../../../menu.php";
    ?>

    <div class="container-fluid hero-conecta py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 text-center">
            <span class="text-uppercase text-white-50">Docentes con IA</span>
            <h1 class="display-5 text-white mb-3">Dos maneras de usar IA en Conecta 37</h1>
            <p class="lead text-white mb-0">Elige el itinerario que mejor encaja con tu estilo de aula. Dise&#241;ados para que el alumnado aprenda de forma &#233;tica, creativa y medible.</p>
            <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
                <a href="index.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Visi&#243;n general</a>
                <a href="MatematicasIA.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Matem&#225;ticas con IA</a>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light ia-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <div class="ia-card">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="ia-pill">Caracter&#237;sticas comunes</span>
                            <span class="text-muted">para las dos versiones</span>
                        </div>
                        <h3 class="mb-3">IA que cuida el aprendizaje</h3>
                        <ul class="ia-list mb-3">
                            <li>Principios compartidos: evidencia, accesibilidad, privacidad y transparencia en cada entrega.</li>
                            <li>IA como apoyo, no sustituto: el alumnado razona, la IA sugiere, verifica y acelera tareas.</li>
                            <li>Retroalimentaci&#243;n viva: se documentan hallazgos, se miden mejoras y se comparten plantillas reutilizables.</li>
                            <li>Material com&#250;n: rubricaci&#243;n, gu&#237;as de declaraci&#243;n de uso de IA y check de accesibilidad.</li>
                            <li>Flexibilidad: si falla la tecnolog&#237;a, existe un plan anal&#243;gico para continuar sin fricci&#243;n.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="ia-figure">
                        <img src="img/creando.png" alt="IA accesible para todos" class="img-fluid">
                        <p class="mt-2 ia-note mb-0">Mismo compromiso: aprendizaje activo, seguridad de datos y espacios donde la IA se usa con criterio.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <div class="ia-card">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="ia-pill">Mapa r&#225;pido</span>
                            <span class="text-muted">Selecciona la ruta y l&#225;nzate a probar</span>
                        </div>
                        <h3 class="mb-3">&#191;Qu&#233; ofrece cada versi&#243;n?</h3>
                        <div class="ia-grid">
                            <div class="ia-mini-card">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="bi bi-stars ia-accent"></i>
                                    <h5 class="mb-0">Docente innovador</h5>
                                </div>
                                <p class="mb-3">Metodolog&#237;as activas con IA como cotutora, proyectos vivos y personalizaci&#243;n 1-a-1.</p>
                                <ul class="ia-list">
                                    <li>Avatar de aprendizaje y grupos por afinidad.</li>
                                    <li>Proyectos contextualizados y productos digitales.</li>
                                    <li>Tutor&#237;as IA adaptativas y medici&#243;n continua.</li>
                                </ul>
                            </div>
                            <div class="ia-mini-card">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="bi bi-shield-check ia-accent"></i>
                                    <h5 class="mb-0">Docente tradicional</h5>
                                </div>
                                <p class="mb-3">IA como asistente de confianza: reduce carga, mantiene tu estilo y abre espacio a peque&#241;as innovaciones.</p>
                                <ul class="ia-list">
                                    <li>IA para resolver dudas.</li>
                                    <li>Correcci&#243;n autom&#225;tica y seguimiento de errores.</li>
                                    <li>Micro-proyectos y grupos de ayuda mutua.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="ia-figure">
                        <img src="img/iaconecta.png" alt="Gu&#237;a IA para docentes" class="img-fluid">
                        <p class="mt-2 ia-note mb-0">Ambas rutas comparten principios de evidencia, &#233;tica y accesibilidad. Puedes combinarlas seg&#250;n tu ritmo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-4">
                <span class="ia-pill">&#191;Qu&#233; tipo de docente eres?</span>
                <h3 class="mt-2 mb-2">Activa la versi&#243;n que quieres explorar</h3>
                <p class="mb-3 text-muted">Botones neutros hasta que selecciones. El bot&#243;n Reset limpia versi&#243;n y asignatura.</p>
                <div class="d-flex flex-wrap justify-content-center gap-2">
                    <button type="button" class="btn ia-switch" data-target="innovador">Docente innovador</button>
                    <button type="button" class="btn ia-switch" data-target="tradicional">Docente tradicional</button>
                    <button type="button" class="btn ia-switch ia-reset">Reset</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-4">
                <span class="ia-pill">Elige materia</span>
                <h3 class="mt-2 mb-2">Selecciona una asignatura para ver el plan detallado</h3>
                <p class="mb-0 text-muted">Primero elige versi&#243;n; luego materia. Ambos permanecer&#225;n en blanco hasta que decidas.</p>
            </div>
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <button type="button" class="btn ia-subject" data-subject="matematicas">Matem&#225;ticas</button>
                <button type="button" class="btn ia-subject" data-subject="lengua">Lengua</button>
                <button type="button" class="btn ia-subject" data-subject="ingles">Ingl&#233;s</button>
                <button type="button" class="btn ia-subject" data-subject="historia">Historia</button>
                <button type="button" class="btn ia-subject" data-subject="fyq">F&#237;sica y qu&#237;mica</button>
            </div>
        </div>
    </div>

    <div id="innovador" class="container-xxl py-5 bg-light ia-section ia-version">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-5">
                <span class="ia-pill">Versi&#243;n 1</span>
                <h2 class="mt-2 mb-2">Docente innovador</h2>
                <p class="mb-0">Ruta pensada para claustros que quieren experimentar con IA de forma integral, con proyectos contextualizados y aprendizaje activo.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="ia-card h-100">
                        <h4 class="mb-3 ia-accent">Pasos clave</h4>
                        <ul class="ia-list">
                            <li><strong>Diagn&#243;stico inteligente:</strong> IA para detectar estilos de aprendizaje, fortalezas, bloqueos emocionales y crear el avatar de aprendizaje de cada estudiante.</li>
                            <li><strong>Agrupamiento din&#225;mico:</strong> formaci&#243;n de grupos por afinidad cognitiva (Exploradores, Constructores, Desafiadores) optimizando cada combinaci&#243;n.</li>
                            <li><strong>Proyectos contextualizados:</strong> retos trimestrales con contexto real y patrimonial, como medir monumentos locales o dise&#241;ar planes de negocio.</li>
                            <li><strong>Personalizaci&#243;n:</strong> tutores IA 1-a-1 que adaptan explicaciones, generan ejercicios adaptativos y ofrecen retroalimentaci&#243;n inmediata.</li>
                            <li><strong>Socializaci&#243;n del conocimiento:</strong> creaci&#243;n de v&#237;deos, podcasts o dashboards que se comparten con la comunidad.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ia-card h-100">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="ia-chip">Ideas progresivas</span>
                            <span class="text-muted">elige la complejidad</span>
                        </div>
                        <div class="mb-3">
                            <h6 class="mb-2 text-success">Alta complejidad</h6>
                            <ul class="ia-list">
                                <li>Proyectos intercentros con IA para resolver retos comunitarios.</li>
                                <li>Museos matem&#225;ticos digitales con realidad aumentada.</li>
                            </ul>
                        </div>
                        <div class="mb-3">
                            <h6 class="mb-2 text-warning">Media complejidad</h6>
                            <ul class="ia-list">
                                <li>Hackathons matem&#225;ticos para problemas reales en tiempo limitado.</li>
                                <li>Generaci&#243;n y correcci&#243;n de ex&#225;menes personalizados con IA.</li>
                            </ul>
                        </div>
                        <div>
                            <h6 class="mb-2 text-primary">Baja complejidad</h6>
                            <ul class="ia-list">
                                <li>Tutor IA 24/7 para dudas b&#225;sicas.</li>
                                <li>Ejercicios adaptados al nivel de cada alumno creados autom&#225;ticamente.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ia-divider"></div>

            <div class="row g-4">
                <div class="col-12">
                    <div class="ia-card">
                        <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                            <span class="ia-chip">Aplicaci&#243;n por &#225;rea</span>
                            <span class="text-muted">Matem&#225;ticas, Lengua e Ingl&#233;s</span>
                        </div>
                        <div class="ia-grid">
                            <div class="ia-mini-card">
                                <h5 class="mb-2 ia-accent">Matem&#225;ticas</h5>
                                <ul class="ia-list">
                                    <li>Visualizaci&#243;n con IA: generaci&#243;n de c&#243;digo en Python/GeoGebra para gr&#225;ficas 3D.</li>
                                    <li>Resolver guiado: tutor socr&#225;tico que pregunta y ayuda a verificar.</li>
                                    <li>Proyectos reales: an&#225;lisis de datos econ&#243;micos del barrio con estad&#237;stica.</li>
                                </ul>
                            </div>
                            <div class="ia-mini-card">
                                <h5 class="mb-2 ia-accent">Lengua</h5>
                                <ul class="ia-list">
                                    <li>Entrenador de expresi&#243;n oral: la IA analiza discursos y sugiere mejoras.</li>
                                    <li>Generador de ideas para redacciones creativas o estructuraci&#243;n.</li>
                                    <li>Corrector avanzado: coherencia, estilo y ortograf&#237;a en el mismo flujo.</li>
                                </ul>
                            </div>
                            <div class="ia-mini-card">
                                <h5 class="mb-2 ia-accent">Ingl&#233;s</h5>
                                <ul class="ia-list">
                                    <li>Chatbot conversacional con acento nativo para practicar di&#225;logo.</li>
                                    <li>Traductor contextual para frases hechas o vocabulario t&#233;cnico.</li>
                                    <li>Generador de ejercicios de gram&#225;tica adaptados al nivel del alumno.</li>
                                </ul>
                            </div>
                            <div class="ia-mini-card">
                                <h5 class="mb-2 ia-accent">Enfoque transversal</h5>
                                <ul class="ia-list">
                                    <li>Proyectos interdisciplinares: ejemplo, crear un podcast en ingl&#233;s sobre un monumento local uniendo GDPatrimonio, Lengua e Ingl&#233;s.</li>
                                    <li>Socializar resultados en foros del centro o jornadas abiertas.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="tradicional" class="container-xxl py-5 ia-section ia-version">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-5">
                <span class="ia-pill">Versi&#243;n 2</span>
                <h2 class="mt-2 mb-2">Docente tradicional</h2>
                <p class="mb-0">La IA como ayudante discreto que respeta tu forma de ense&#241;ar, libera carga y suma peque&#241;as mejoras medibles.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="ia-card h-100">
                        <h4 class="mb-3 ia-accent">Filosof&#237;a</h4>
                        <p class="mb-3">No se trata de romper, sino de enriquecer. La IA act&#250;a como ayudante de confianza que mantiene tu esencia docente mientras te ofrece superpoderes.</p>
                        <div class="ia-note">Progreso gradual, sin depender de la tecnolog&#237;a: siempre existe una alternativa anal&#243;gica.</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ia-card h-100">
                        <h4 class="mb-3 ia-accent">Implementaci&#243;n por oleadas</h4>
                        <ul class="ia-list">
                            <li><strong>Primeros pasos (primeras 2 semanas):</strong> Usar la IA para dudas repetitivas.</li>
                            <li><strong>Alivio de carga (semanas 3-6):</strong> correcci&#243;n autom&#225;tica de ejercicios y generaci&#243;n de informes de errores comunes para repasar en clase.</li>
                            <li><strong>Peque&#241;as innovaciones (semanas 7-12):</strong> introducir un problema real por tema, como calcular &#225;reas del patio, y programar una clase espejo mensual con ejercicios personalizados por IA.</li>
                            <li><strong>Metodolog&#237;as activas (a partir del 2&#186; trimestre):</strong> un mini-proyecto por evaluaci&#243;n (ej. &#8220;Las matem&#225;ticas de nuestra ciudad&#8221;) y grupos de ayuda mutua organizados por IA.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="ia-divider"></div>

            <div class="row g-4">
                <div class="col-lg-5">
                    <div class="ia-card h-100">
                        <h4 class="mb-3 ia-accent">Kit de supervivencia</h4>
                        <ul class="ia-list">
                            <li>Herramientas sencillas: Google Forms y Drive/Teams como base.</li>
                            <li>Formaci&#243;n ligera: micro-v&#237;deos de 5-10 minutos, sin cursos largos.</li>
                            <li>Protocolo de emergencia: si falla la tecnolog&#237;a, se vuelve al m&#233;todo tradicional sin dramas.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="ia-card h-100">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <span class="ia-chip">C&#243;mo medir avance</span>
                            <span class="text-muted">sin burocracia extra</span>
                        </div>
                        <div class="ia-grid">
                            <div class="ia-mini-card">
                                <h6 class="mb-2 ia-accent">Alumnado</h6>
                                <ul class="ia-list">
                                    <li>Registro semanal de dudas resueltas por la IA y tiempo ahorrado.</li>
                                    <li>Comparativa de resultados en ejercicios con y sin IA.</li>
                                </ul>
                            </div>
                            <div class="ia-mini-card">
                                <h6 class="mb-2 ia-accent">Docente</h6>
                                <ul class="ia-list">
                                    <li>Minutos ahorrados en correcci&#243;n y preparaci&#243;n.</li>
                                    <li>Lista de mejoras recurrentes para las siguientes unidades.</li>
                                </ul>
                            </div>
                            <div class="ia-mini-card">
                                <h6 class="mb-2 ia-accent">Familias</h6>
                                <ul class="ia-list">
                                    <li>Bolet&#237;n breve con ejemplos de IA usada y enlace a recursos abiertos.</li>
                                    <li>Canal de dudas con respuesta est&#225;ndar y derivaci&#243;n a tutor&#237;a si procede.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="innovador-matematicas" class="container-xxl py-5 bg-light ia-section ia-panel" data-version="innovador" data-subject="matematicas">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-5">
                <span class="ia-pill">Docente innovador</span>
                <h2 class="mt-2 mb-2">Matem&#225;ticas con IA</h2>
                <p class="mb-0">Plan Math-IA 360&#176; y propuestas activas para el aula.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="ia-card h-100">
                        <h4 class="mb-3 ia-accent">Metodolog&#237;a Math-IA 360&#176;</h4>
                        <p class="mb-3">Doce semanas de trabajo estructurado con IA como cotutora y m&#233;tricas de progreso.</p>
                        <ul class="ia-list">
                            <li><strong>Diagn&#243;stico inteligente:</strong> test adaptativo, perfil matem&#225;tico por alumno y grupos optimizados.</li>
                            <li><strong>Fundamentos colaborativos:</strong> jigsaw matem&#225;tico, proyectos sencillos usando datos reales y tutor IA 24/7.</li>
                            <li><strong>Profundizaci&#243;n adaptativa:</strong> generador infinito de problemas, estaciones de aprendizaje y recomendaciones seg&#250;n errores.</li>
                            <li><strong>Aplicaci&#243;n y creaci&#243;n:</strong> mini-hackathons, museos matem&#225;ticos, proyectos reales y portafolio digital autom&#225;tico.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="ia-card h-100">
                        <h4 class="mb-3 ia-accent">Propuestas para el alumnado</h4>
                        <ul class="ia-list">
                            <li>Generar ejercicios por nivel y revisar cuadernos se&#241;alando errores.</li>
                            <li>Explicar conceptos en estilos variados, crear variantes y contraejemplos.</li>
                            <li>Preparar guiones de v&#237;deos o presentaciones y debates socr&#225;ticos.</li>
                            <li>Visualizar funciones con Python o GeoGebra.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="ia-divider"></div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="ia-card h-100">
                        <h4 class="mb-3 ia-accent">Pasos a seguir</h4>
                        <ul class="ia-list">
                            <li><strong>Diagn&#243;stico IA y grupos de desarrollo:</strong> test inicial, grupos heterog&#233;neos y perfil matem&#225;tico personalizado.</li>
                            <li><strong>Situar con Conecta 37 y GDPatrimonio:</strong> retos reales del entorno con apoyo de IA para contextualizar.</li>
                            <li><strong>Desarrollar con GD + 4Inclusion + IA:</strong> estaciones por niveles, ejercicios generados por IA y tutor 24/7 bajo reglas claras.</li>
                            <li><strong>Crear con DGMakers:</strong> v&#237;deos, dashboards, modelos 3D, podcasts o infograf&#237;as con ayuda de IA.</li>
                            <li><strong>Compartir en Conecta 37:</strong> presentaciones p&#250;blicas, ferias, intercambios y galer&#237;as digitales con r&#250;bricas mixtas.</li>
                            <li><strong>Reflexi&#243;n final:</strong> diario asistido por IA, an&#225;lisis de errores y plan de mejora.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ia-card h-100">
                        <h4 class="mb-3 ia-accent">Ideas progresivas</h4>
                        <div class="mb-3">
                            <h6 class="mb-2 text-primary">Nivel muy simple (bajo esfuerzo)</h6>
                            <ul class="ia-list">
                                <li>IA genera ejercicios por niveles y revisa cuadernos.</li>
                                <li>Reexplica conceptos con analog&#237;as.</li>
                            </ul>
                        </div>
                        <div class="mb-3">
                            <h6 class="mb-2 text-warning">Nivel intermedio</h6>
                            <ul class="ia-list">
                                <li>Mini-proyectos con datos reales.</li>
                                <li>Guiones para v&#237;deos de 1-2 minutos.</li>
                                <li>Dashboards creados a partir de medidas del instituto.</li>
                            </ul>
                        </div>
                        <div>
                            <h6 class="mb-2 text-success">Nivel avanzado</h6>
                            <ul class="ia-list">
                                <li>Hackathon matem&#225;tico sobre un reto real.</li>
                                <li>Maquetas 3D con geometr&#237;a para DGMakers.</li>
                                <li>Proyectos GDPatrimonio y museo matem&#225;tico digital con IA.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="tradicional-matematicas" class="container-xxl py-5 ia-section ia-panel" data-version="tradicional" data-subject="matematicas">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-5">
                <span class="ia-pill">Docente tradicional</span>
                <h2 class="mt-2 mb-2">Matem&#225;ticas con IA</h2>
                <p class="mb-0">IA como asistente discreto, con avances graduales y control en el aula.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="ia-card h-100">
                        <h4 class="mb-3 ia-accent">Niveles de uso</h4>
                        <ul class="ia-list">
                            <li><strong>IA para el profesor:</strong> preparar explicaciones, crear ejercicios por niveles y dise&#241;ar mejores ex&#225;menes.</li>
                            <li><strong>Cambios visibles:</strong> micro-situar con un problema real, minipausa activa y mini Grupos de Desarrollo de 10-15 minutos; IA como segundo profesor en casa con prompts socr&#225;ticos.</li>
                            <li><strong>Mini proyectos por trimestre:</strong> pocas sesiones para generar una explicaci&#243;n, ficha o mini v&#237;deo, con Conecta 37 suave y realista.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ia-card h-100">
                        <h4 class="mb-3 ia-accent">Etapas de despliegue</h4>
                        <ul class="ia-list">
                            <li><strong>Semanas 1-2:</strong> IA para preparar explicaciones, generar ejercicios y crear el examen; din&#225;mica intacta.</li>
                            <li><strong>Semanas 3-4:</strong> micro-situar de 5 minutos, minipausa activa e IA como tutor oficial en casa.</li>
                            <li><strong>Semanas 5-8:</strong> ex&#225;menes autocorregidos, reto semanal voluntario y ranking de participaci&#243;n.</li>
                            <li><strong>Semanas 9-12:</strong> primer mini proyecto Conecta 37 de 4-5 sesiones con ficha y v&#237;deo corto en grupos, muy guiado.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="ia-divider"></div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="ia-card h-100">
                        <h4 class="mb-3 ia-accent">&#191;Por qu&#233; funciona?</h4>
                        <ul class="ia-list">
                            <li>El docente conserva el control.</li>
                            <li>La IA ahorra tiempo en preparaci&#243;n y correcci&#243;n.</li>
                            <li>El alumnado participa m&#225;s con cambios graduales.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ia-card h-100">
                        <h4 class="mb-3 ia-accent">Soporte progresivo</h4>
                        <ul class="ia-list">
                            <li>Plantillas de prompts socr&#225;ticos para uso en casa.</li>
                            <li>Informe r&#225;pido de dudas frecuentes para ajustar la siguiente clase.</li>
                            <li>Banco de microrretos con contexto real y soluci&#243;n guiada.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section ia-panel" data-version="innovador" data-subject="lengua">
        <div class="container">
            <div class="ia-card text-center">
                <h5 class="mb-2 ia-accent">Lengua &#183; Docente innovador</h5>
                <p class="mb-0">Contenido espec&#237;fico en preparaci&#243;n. Selecciona Matem&#225;ticas para ver el ejemplo completo.</p>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section ia-panel" data-version="innovador" data-subject="ingles">
        <div class="container">
            <div class="ia-card text-center">
                <h5 class="mb-2 ia-accent">Ingl&#233;s &#183; Docente innovador</h5>
                <p class="mb-0">Contenido espec&#237;fico en preparaci&#243;n. Selecciona Matem&#225;ticas para ver el ejemplo completo.</p>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section ia-panel" data-version="innovador" data-subject="historia">
        <div class="container">
            <div class="ia-card text-center">
                <h5 class="mb-2 ia-accent">Historia &#183; Docente innovador</h5>
                <p class="mb-0">Contenido espec&#237;fico en preparaci&#243;n. Selecciona Matem&#225;ticas para ver el ejemplo completo.</p>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section ia-panel" data-version="innovador" data-subject="fyq">
        <div class="container">
            <div class="ia-card text-center">
                <h5 class="mb-2 ia-accent">F&#237;sica y qu&#237;mica &#183; Docente innovador</h5>
                <p class="mb-0">Contenido espec&#237;fico en preparaci&#243;n. Selecciona Matem&#225;ticas para ver el ejemplo completo.</p>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section ia-panel" data-version="tradicional" data-subject="lengua">
        <div class="container">
            <div class="ia-card text-center">
                <h5 class="mb-2 ia-accent">Lengua &#183; Docente tradicional</h5>
                <p class="mb-0">Contenido espec&#237;fico en preparaci&#243;n. Selecciona Matem&#225;ticas para ver el ejemplo completo.</p>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section ia-panel" data-version="tradicional" data-subject="ingles">
        <div class="container">
            <div class="ia-card text-center">
                <h5 class="mb-2 ia-accent">Ingl&#233;s &#183; Docente tradicional</h5>
                <p class="mb-0">Contenido espec&#237;fico en preparaci&#243;n. Selecciona Matem&#225;ticas para ver el ejemplo completo.</p>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section ia-panel" data-version="tradicional" data-subject="historia">
        <div class="container">
            <div class="ia-card text-center">
                <h5 class="mb-2 ia-accent">Historia &#183; Docente tradicional</h5>
                <p class="mb-0">Contenido espec&#237;fico en preparaci&#243;n. Selecciona Matem&#225;ticas para ver el ejemplo completo.</p>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section ia-panel" data-version="tradicional" data-subject="fyq">
        <div class="container">
            <div class="ia-card text-center">
                <h5 class="mb-2 ia-accent">F&#237;sica y qu&#237;mica &#183; Docente tradicional</h5>
                <p class="mb-0">Contenido espec&#237;fico en preparaci&#243;n. Selecciona Matem&#225;ticas para ver el ejemplo completo.</p>
            </div>
        </div>
    </div>


    <section class="py-5">
        <div class="container">
            <h3 class="text-primary mb-3 text-center">TABLA COMPARATIVA &#183; Uso de la IA seg&#250;n perfil docente en Conecta 37</h3>
            <div class="table-responsive w-100">
                <table class="table table-striped align-middle w-100">
                    <thead class="table-primary">
                        <tr>
                            <th>Dimensi&#243;n</th>
                            <th>Profesor tradicional (eficiencia y optimizaci&#243;n)</th>
                            <th>Profesor innovador C37 (GD, DGMakers, colaboraci&#243;n)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Rol de la IA</strong></td>
                            <td>Asistente del profesor. Prepara y corrige.</td>
                            <td>Copiloto del equipo. Ayuda a pensar y dise&#241;ar.</td>
                        </tr>
                        <tr>
                            <td><strong>Objetivo</strong></td>
                            <td>Hacer lo mismo de siempre, pero m&#225;s r&#225;pido.</td>
                            <td>Convertir problemas en retos y proyectos compartibles.</td>
                        </tr>
                        <tr>
                            <td><strong>Preparaci&#243;n de clases</strong></td>
                            <td>Ejercicios, ex&#225;menes, fichas, textos simplificados.</td>
                            <td>Retos GD, misiones, r&#250;bricas, prompts maestros.</td>
                        </tr>
                        <tr>
                            <td><strong>Din&#225;mica en el aula</strong></td>
                            <td>IA casi invisible; se usa fuera de clase.</td>
                            <td>IA visible en GD; se consulta en tiempo real.</td>
                        </tr>
                        <tr>
                            <td><strong>Tipo de actividades</strong></td>
                            <td>Pr&#225;ctica mec&#225;nica y problemas cerrados.</td>
                            <td>Prototipos, productos DGMakers, datos reales, apps sencillas.</td>
                        </tr>
                        <tr>
                            <td><strong>Gesti&#243;n del atasco</strong></td>
                            <td>El alumno pregunta al profe; soluci&#243;n o pista.</td>
                            <td>El grupo usa IA con protocolo Math-Hacker; luego profe.</td>
                        </tr>
                        <tr>
                            <td><strong>Rol del alumnado</strong></td>
                            <td>Trabajo individual siguiendo un guion dado.</td>
                            <td>Equipo de desarrollo con roles y decisiones compartidas.</td>
                        </tr>
                        <tr>
                            <td><strong>Rol del profesor</strong></td>
                            <td>Explicador y corrector t&#233;cnico.</td>
                            <td>Agile coach C37: dise&#241;a, acompa&#241;a y eval&#250;a el proceso.</td>
                        </tr>
                        <tr>
                            <td><strong>IA + inclusi&#243;n</strong></td>
                            <td>Fichas adaptadas y enunciados m&#225;s f&#225;ciles.</td>
                            <td>Materiales inclusivos co-creados: pictos, historias, formatos m&#250;ltiples.</td>
                        </tr>
                        <tr>
                            <td><strong>IA + proyectos C37</strong></td>
                            <td>Uso puntual para redactar o resumir.</td>
                            <td>Motor para investigar, guionar, dise&#241;ar y documentar proyectos.</td>
                        </tr>
                        <tr>
                            <td><strong>Evaluaci&#243;n</strong></td>
                            <td>Test, bancos de &#237;tems, nota num&#233;rica.</td>
                            <td>Feedback formativo, metacognici&#243;n y trabajo en GD.</td>
                        </tr>
                        <tr>
                            <td><strong>Producto final</strong></td>
                            <td>Cuaderno, fichas, ex&#225;menes.</td>
                            <td>Playbooks, v&#237;deos, infograf&#237;as, podcasts, miniapps en C37.</td>
                        </tr>
                        <tr>
                            <td><strong>Visi&#243;n del error</strong></td>
                            <td>Fallo a corregir y olvidar.</td>
                            <td>Bug del modelo que se analiza y se comparte.</td>
                        </tr>
                        <tr>
                            <td><strong>Integraci&#243;n en Conecta 37</strong></td>
                            <td>IA a&#241;adida encima del modelo cl&#225;sico.</td>
                            <td>IA como infraestructura del ecosistema (GD, DGMakers, 4Inclusion, GDPatrimonio).</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center mt-4">
                <img src="img/IATradivsInnova.png" alt="Comparativa IA tradicional vs innovador" class="img-fluid w-100 rounded-0">
            </div>
        </div>
    </section>

    <!-- Footer Start -->
    <?php include "../../../footer.php"; ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../lib/wow/wow.min.js"></script>
    <script src="../../../lib/easing/easing.min.js"></script>
    <script src="../../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../../lib/counterup/counterup.min.js"></script>
    <script src="../../../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../../lib/isotope/isotope.pkgd.min.js"></script>
    <script src="../../../lib/lightbox/js/lightbox.min.js"></script>
    <script src="../../../js/main.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var switches = Array.prototype.slice.call(document.querySelectorAll(".ia-switch"));
            var versions = Array.prototype.slice.call(document.querySelectorAll(".ia-version"));
            var subjects = Array.prototype.slice.call(document.querySelectorAll(".ia-subject"));
            var panels = Array.prototype.slice.call(document.querySelectorAll(".ia-panel"));
            var resets = Array.prototype.slice.call(document.querySelectorAll(".ia-reset"));
            var currentVersion = null;
            var currentSubject = null;

            function refresh(doScroll) {
                versions.forEach(function (section) {
                    section.classList.toggle("active", section.id === currentVersion);
                });
                switches.forEach(function (btn) {
                    btn.classList.toggle("active", btn.dataset.target === currentVersion);
                });
                subjects.forEach(function (btn) {
                    btn.classList.toggle("active", btn.dataset.subject === currentSubject);
                });
                panels.forEach(function (panel) {
                    var match = panel.dataset.version === currentVersion && panel.dataset.subject === currentSubject;
                    panel.classList.toggle("active", match);
                });
                if (doScroll && currentVersion) {
                    var targetEl = null;
                    if (currentSubject) {
                        targetEl = document.querySelector('.ia-panel[data-version="' + currentVersion + '"][data-subject="' + currentSubject + '"]');
                    }
                    if (!targetEl) {
                        targetEl = document.getElementById(currentVersion);
                    }
                    if (targetEl) targetEl.scrollIntoView({ behavior: "smooth", block: "start" });
                }
            }

            function setVersion(version, doScroll) {
                currentVersion = version;
                if (!version) currentSubject = null;
                refresh(doScroll);
            }

            function setSubject(subject, doScroll) {
                if (!currentVersion) return;
                currentSubject = subject;
                refresh(doScroll);
            }

            var initialHash = window.location.hash.replace("#", "");
            if (initialHash && initialHash.indexOf("-") !== -1) {
                var parts = initialHash.split("-");
                var maybeVersion = parts[0];
                var maybeSubject = parts[1];
                if (document.getElementById(maybeVersion)) currentVersion = maybeVersion;
                if (maybeSubject) currentSubject = maybeSubject;
            } else if (initialHash && document.getElementById(initialHash)) {
                currentVersion = initialHash;
            }
            refresh(false);

            switches.forEach(function (btn) {
                btn.addEventListener("click", function (ev) {
                    ev.preventDefault();
                    var target = btn.dataset.target;
                    if (target) {
                        setVersion(target, true);
                    }
                });
            });

            subjects.forEach(function (btn) {
                btn.addEventListener("click", function (ev) {
                    ev.preventDefault();
                    var subject = btn.dataset.subject;
                    if (subject) {
                        setSubject(subject, true);
                    }
                });
            });

            resets.forEach(function (btn) {
                btn.addEventListener("click", function (ev) {
                    ev.preventDefault();
                    currentVersion = null;
                    currentSubject = null;
                    refresh(true);
                });
            });
        });
    </script>
</body>

</html>
