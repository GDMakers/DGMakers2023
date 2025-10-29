<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>IA en 4Inclusion</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ia, inclusion, dgmakers, educacion especial, 4inclusion" name="keywords">
    <meta content="Gu&iacute;a pr&aacute;ctica para incorporar la inteligencia artificial como copiloto en las Jornadas 4Inclusion." name="description">

    <!-- Favicon -->
    <link href="../../img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Men&uacute; com&uacute;n -->
    <?php
        $img="../..";                   // ruta a la carpeta de im&aacute;genes
        $pages="..";                    // ruta a la carpeta del resto de p&aacute;ginas de la web
        $index="../..";                 // ruta a la carpeta del index.php
        include "../../menu.php";       // incluye el men&uacute; com&uacute;n
    ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../../img/4Inclusion/DGM4Inclusion.png" alt="Imagen Jornadas 4Inclusion">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-3 text-white mb-3 animated zoomIn">IA en las Jornadas 4Inclusion</h1>
                            <h5 class="text-white text-uppercase mb-4 animated zoomIn"><i>Un copiloto inteligente al servicio de la autonom&iacute;a y la creatividad.</i></h5>
                            <a href="#vision" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Ver gu&iacute;a</a>
                            <a href="#participar" class="btn animated zoomIn pt-1 pb-1 ms-2" style="background: #015183">C&oacute;mo participar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row gy-3 mb-5 fact-item" id="vision">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Visi&oacute;n general</h6>
                        <h2 class="mb-3">Una IA al servicio de la inclusi&oacute;n</h2>
                        <p class="mb-3" style="text-align:justify;">
                            La inteligencia artificial se integra en 4Inclusion como copiloto que ayuda a dise&ntilde;ar apoyos, crear materiales accesibles y automatizar tareas repetitivas. Cada equipo mantiene siempre el liderazgo creativo y usa la IA como motor para acelerar propuestas que incrementan la autonom&iacute;a del alumnado.
                        </p>
                        <p style="text-align:justify;">
                            Trabajamos con pautas claras de privacidad y autor&iacute;a: ninguna soluci&oacute;n se publica sin revisi&oacute;n humana, los datos personales se protegen y las contribuciones finales reconocen el trabajo de quienes las desarrollan.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row gy-3 mb-5 fact-item" id="principios">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Principios de uso</h6>
                        <ul class="mb-0">
                            <li><b>Transparencia</b>: cada proyecto explica c&oacute;mo, cu&aacute;ndo y para qu&eacute; se emple&oacute; la IA.</li>
                            <li><b>Autor&iacute;a humana</b>: las decisiones creativas pertenecen al profesorado y al alumnado; la IA sugiere, no sustituye.</li>
                            <li><b>Verificaci&oacute;n y fiabilidad</b>: la informaci&oacute;n generada se contrasta con, al menos, dos fuentes fiables.</li>
                            <li><b>Accesibilidad y privacidad</b>: se aplican criterios de accesibilidad (contraste alto, pictogramas, subt&iacute;tulos, texto alternativo) y nunca se emplean datos personales ni rostros sin consentimiento.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row gy-3 mb-5 fact-item" id="recursos">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">IA como copiloto</h6>

                        <div class="card border-0 shadow-sm mb-3">
                            <div class="card-header bg-white d-flex flex-wrap align-items-center justify-content-between">
                                <h5 class="mb-0">Crear con IA (alumnado)</h5>
                                <button class="btn btn-sm btn-outline-primary mt-2 mt-sm-0" type="button" data-bs-toggle="collapse" data-bs-target="#ia-alumnado" aria-expanded="true" aria-controls="ia-alumnado">
                                    Ver ideas
                                </button>
                            </div>
                            <div id="ia-alumnado" class="collapse show">
                                <div class="card-body">
                                    <p class="mb-3">El alumnado usa la IA como herramienta de apoyo para desbloquear ideas, mejorar explicaciones y preparar productos inclusivos.</p>
                                    <ul class="mb-0">
                                        <li><b>Generaci&oacute;n de ideas y guiones</b>: producir borradores de historias, guiones de teatro foro o esquemas para v&iacute;deos educativos.</li>
                                        <li><b>Apoyo en matem&aacute;ticas y ciencia</b>: estructurar razonamientos, generar ejemplos y contraejemplos que aclaran conceptos.</li>
                                        <li><b>Producci&oacute;n audiovisual</b>: crear listas de planos, checklist de calidad y subt&iacute;tulos autom&aacute;ticos que mejoran la accesibilidad.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm mb-3">
                            <div class="card-header bg-white d-flex flex-wrap align-items-center justify-content-between">
                                <h5 class="mb-0">Dise&ntilde;ar con IA (profesorado)</h5>
                                <button class="btn btn-sm btn-outline-primary mt-2 mt-sm-0" type="button" data-bs-toggle="collapse" data-bs-target="#ia-profesorado" aria-expanded="false" aria-controls="ia-profesorado">
                                    Ver ideas
                                </button>
                            </div>
                            <div id="ia-profesorado" class="collapse">
                                <div class="card-body">
                                    <p class="mb-3">La IA acelera tareas docentes repetitivas para liberar tiempo y concentrarse en acompa&ntilde;ar procesos creativos.</p>
                                    <ul class="mb-0">
                                        <li><b>Mini unidades did&aacute;cticas</b>: definir objetivos, criterios de &eacute;xito y actividades inclusivas en pocos minutos.</li>
                                        <li><b>R&uacute;bricas inclusivas</b>: obtener borradores para evaluar accesibilidad, impacto y sencillez antes de personalizarlos.</li>
                                        <li><b>Feedback formativo</b>: solicitar recomendaciones en formato &ldquo;pluses y preguntas&rdquo; que orientan al alumnado sin sustituir su voz.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm mb-3">
                            <div class="card-header bg-white d-flex flex-wrap align-items-center justify-content-between">
                                <h5 class="mb-0">Integraci&oacute;n de la IA en el Sprint 4Inclusion</h5>
                                <button class="btn btn-sm btn-outline-primary mt-2 mt-sm-0" type="button" data-bs-toggle="collapse" data-bs-target="#ia-sprint" aria-expanded="false" aria-controls="ia-sprint">
                                    Ver plan
                                </button>
                            </div>
                            <div id="ia-sprint" class="collapse">
                                <div class="card-body">
                                    <p class="mb-3">Proponemos un ciclo de tres semanas que adapta el sprint de Conecta&nbsp;37 a los retos de 4Inclusion.</p>
                                    <ol class="mb-0">
                                        <li>
                                            <b>Dise&ntilde;ar (semana 1)</b>
                                            <ul>
                                                <li>Presentar el reto inclusivo y usar IA para generar soluciones accesibles.</li>
                                                <li>Definir criterios de &eacute;xito: autonom&iacute;a, simplicidad y viabilidad.</li>
                                                <li>Revisar en equipo la gu&iacute;a de privacidad y accesibilidad.</li>
                                            </ul>
                                        </li>
                                        <li class="mt-2">
                                            <b>Prototipar (semana 2)</b>
                                            <ul>
                                                <li>Crear un primer prototipo o recurso (objeto 3D, pictograma, audiogu&iacute;a).</li>
                                                <li>Usar IA como cr&iacute;tico amable para revisar claridad, simplicidad y accesibilidad.</li>
                                                <li>Documentar el proceso con fotograf&iacute;as sin rostros y textos claros.</li>
                                            </ul>
                                        </li>
                                        <li class="mt-2">
                                            <b>Compartir (semana 3)</b>
                                            <ul>
                                                <li>Generar t&iacute;tulos, descripciones y subt&iacute;tulos con ayuda de la IA.</li>
                                                <li>Publicar el recurso en el repositorio con licencia Creative Commons.</li>
                                                <li>A&ntilde;adir declaraci&oacute;n de uso de IA y descripciones en lectura f&aacute;cil.</li>
                                            </ul>
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm mb-3">
                            <div class="card-header bg-white d-flex flex-wrap align-items-center justify-content-between">
                                <h5 class="mb-0">Herramientas de IA recomendadas</h5>
                                <button class="btn btn-sm btn-outline-primary mt-2 mt-sm-0" type="button" data-bs-toggle="collapse" data-bs-target="#ia-herramientas" aria-expanded="false" aria-controls="ia-herramientas">
                                    Ver listado
                                </button>
                            </div>
                            <div id="ia-herramientas" class="collapse">
                                <div class="card-body">
                                    <p class="mb-3">Seleccionamos herramientas gratuitas o con licencia educativa que cumplen criterios de privacidad y accesibilidad.</p>
                                    <ul class="mb-0">
                                        <li>Asistentes de redacci&oacute;n para resumir textos y mejorar estructuras (EdIA, ChatGPT en modo educativo).</li>
                                        <li>Servicios de transcripci&oacute;n y subtitulado como YouTube Studio, Whisper o soluciones de la Consejer&iacute;a.</li>
                                        <li>Generadores de pictogramas y materiales visuales basados en IA con licencias libres.</li>
                                        <li>Suites colaborativas que integran IA para proponer plantillas de presentaciones o r&uacute;bricas.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm mb-3">
                            <div class="card-header bg-white d-flex flex-wrap align-items-center justify-content-between">
                                <h5 class="mb-0">Modelos de instrucciones (prompts) para inclusi&oacute;n</h5>
                                <button class="btn btn-sm btn-outline-primary mt-2 mt-sm-0" type="button" data-bs-toggle="collapse" data-bs-target="#ia-prompts" aria-expanded="false" aria-controls="ia-prompts">
                                    Ver ejemplos
                                </button>
                            </div>
                            <div id="ia-prompts" class="collapse">
                                <div class="card-body">
                                    <ul class="mb-0">
                                        <li><b>Lectura f&aacute;cil</b>: &laquo;Resume este texto en 100 palabras con lenguaje claro y frases cortas para un p&uacute;blico de educaci&oacute;n especial.&raquo;</li>
                                        <li><b>Pictogramas y agendas visuales</b>: &laquo;Genera una lista de pictogramas con descripciones para los pasos de [tarea] (m&aacute;ximo 6 pictos).&raquo;</li>
                                        <li><b>Audiogu&iacute;a</b>: &laquo;Crea un guion de 2 minutos que describa el objeto [nombre] en formato audio para una persona con baja visi&oacute;n.&raquo;</li>
                                        <li><b>Evaluaci&oacute;n</b>: &laquo;Prop&oacute;n tres preguntas de autoevaluaci&oacute;n sencillas para comprobar si se ha comprendido el concepto [tema].&raquo;</li>
                                        <li><b>Inclusi&oacute;n tecnol&oacute;gica</b>: &laquo;Sugiere adaptaciones tecnol&oacute;gicas simples para que un estudiante con movilidad reducida pueda utilizar [herramienta].&raquo;</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm">
                            <div class="card-header bg-white d-flex flex-wrap align-items-center justify-content-between">
                                <h5 class="mb-0">Indicadores de &eacute;xito y &eacute;tica</h5>
                                <button class="btn btn-sm btn-outline-primary mt-2 mt-sm-0" type="button" data-bs-toggle="collapse" data-bs-target="#ia-indicadores" aria-expanded="false" aria-controls="ia-indicadores">
                                    Ver indicadores
                                </button>
                            </div>
                            <div id="ia-indicadores" class="collapse">
                                <div class="card-body">
                                    <ul class="mb-0">
                                        <li><b>Ahorro de tiempo</b>: horas invertidas en tareas repetitivas antes y despu&eacute;s de usar IA.</li>
                                        <li><b>Calidad de los recursos</b>: puntuaci&oacute;n de r&uacute;bricas en accesibilidad, impacto y simplicidad.</li>
                                        <li><b>Declaraci&oacute;n de uso de IA</b>: porcentaje de proyectos que explicitan c&oacute;mo se utiliz&oacute; la IA.</li>
                                        <li><b>Cumplimiento &eacute;tico</b>: verificaci&oacute;n de que no se incluyen datos personales, rostros ni textos generados totalmente por IA.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-3 mb-5 fact-item" id="participar">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">C&oacute;mo participar</h6>
                        <ol class="mb-4">
                            <li>Descargar el Start Pack desde la plataforma y revisar la gu&iacute;a de accesibilidad junto a la r&uacute;brica expr&eacute;s.</li>
                            <li>Completar la encuesta inicial para compartir intereses y retos de tu centro.</li>
                            <li>Unirse al Live Hub para recibir mentor&iacute;as y participar en talleres sobre IA y dise&ntilde;o inclusivo.</li>
                            <li>Cargar los materiales en el repositorio de 4Inclusion, incluyendo la declaraci&oacute;n de uso de IA y etiquetas claras.</li>
                            <li>Evaluar y compartir: aplicar la r&uacute;brica, solicitar feedback a otros centros y publicar mejoras iterativas.</li>
                        </ol>
                        <div class="alert alert-primary" role="alert">
                            <i class="bi bi-lightbulb me-2"></i>Recuerda documentar c&oacute;mo la IA te ayud&oacute; y qu&eacute; decisiones mantuvieron la voz del alumnado.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer com&uacute;n -->
        <?php
            $img="../..";                   // ruta a la carpeta de im&aacute;genes
            $pages="..";                    // ruta a la carpeta del resto de p&aacute;ginas de la web
            $index="../..";                 // ruta a la carpeta del index.php
            include "../../footer.php";     // incluye el footer com&uacute;n
        ?>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../../lib/wow/wow.min.js"></script>
        <script src="../../lib/easing/easing.min.js"></script>
        <script src="../../lib/waypoints/waypoints.min.js"></script>
        <script src="../../lib/counterup/counterup.min.js"></script>
        <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="../../lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Javascript -->
        <script src="../../js/main.js"></script>
</body>

</html>
