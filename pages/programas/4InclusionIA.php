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

    <style>
        .section-illustration {
            border-radius: 18px;
            box-shadow: 0 1.2rem 2.5rem rgba(1, 81, 131, 0.18);
        }

        .section-tag {
            letter-spacing: 0.08em;
            text-transform: uppercase;
            font-weight: 700;
            color: #015183;
            font-size: 0.82rem;
        }
    </style>
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
                            <h1 class="display-3 text-white mb-3 animated zoomIn">IA en  4Inclusion</h1>
                            <h5 class="text-white text-uppercase mb-4 animated zoomIn"><i>Un copiloto inteligente al servicio de la inclusión.</i></h5>
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
            <div class="row align-items-center g-5 mb-5" id="vision">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <span class="section-tag mb-2 d-inline-block">Visi&oacute;n general</span>
                    <h2 class="mb-3">Una IA al servicio de la inclusi&oacute;n</h2>
                    <p class="mb-3">
                        La inteligencia artificial se integra en 4Inclusion como copiloto que ayuda a dise&ntilde;ar apoyos, crear materiales accesibles y automatizar tareas repetitivas. Cada equipo mantiene siempre el liderazgo creativo y usa la IA como motor para acelerar propuestas que incrementan la autonom&iacute;a del alumnado.
                    </p>
                    <p class="mb-0">
                        Trabajamos con pautas claras de privacidad y autor&iacute;a: ninguna soluci&oacute;n se publica sin revisi&oacute;n humana, los datos personales se protegen y las contribuciones finales reconocen el trabajo de quienes las desarrollan.
                    </p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="https://images.unsplash.com/photo-1665690399857-9de8bbbeb108?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1932" alt="Estudiantes colaborando con tecnolog&iacute;a accesible" class="img-fluid section-illustration">
                </div>
            </div>

            <div class="row align-items-center g-5 mb-5 flex-lg-row-reverse" id="principios">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <span class="section-tag mb-2 d-inline-block">Principios de uso</span>
                    <h2 class="mb-3">Cuatro reglas para un uso responsable</h2>
                    <ul class="mb-0">
                        <li><b>Transparencia</b>: cada proyecto explica c&oacute;mo, cu&aacute;ndo y para qu&eacute; se emple&oacute; la IA.</li>
                        <li><b>Autor&iacute;a humana</b>: las decisiones creativas pertenecen al profesorado y al alumnado; la IA sugiere, no sustituye.</li>
                        <li><b>Verificaci&oacute;n y fiabilidad</b>: la informaci&oacute;n generada se contrasta con, al menos, dos fuentes fiables.</li>
                        <li><b>Accesibilidad y privacidad</b>: se aplican criterios de accesibilidad (contraste alto, pictogramas, subt&iacute;tulos, texto alternativo) y nunca se emplean datos personales ni rostros sin consentimiento.</li>
                    </ul>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="Docentes revisando principios &eacute;ticos con estudiantes" class="img-fluid section-illustration">
                </div>
            </div>

            <div class="row align-items-center g-5 mb-5" id="crear-ia">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <span class="section-tag mb-2 d-inline-block">IA como copiloto</span>
                    <h2 class="mb-3">Crear con IA (alumnado)</h2>
                    <p class="mb-3">El alumnado utiliza la IA como herramienta de apoyo para desbloquear ideas, reforzar aprendizajes y producir contenidos inclusivos.</p>
                    <ul class="mb-0">
                        <li><b>Generaci&oacute;n de ideas y guiones</b>: producir borradores de historias, guiones de teatro foro o esquemas para v&iacute;deos educativos.</li>
                        <li><b>Apoyo curricular</b>: estructurar razonamientos, generar ejemplos y contraejemplos que aclaran conceptos.</li>
                        <li><b>Producci&oacute;n audiovisual</b>: crear listas de planos, checklist de calidad y subt&iacute;tulos autom&aacute;ticos que aseguran accesibilidad.</li>
                    </ul>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="https://images.unsplash.com/photo-1523580846011-d3a5bc25702b?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="Grupo de estudiantes trabajando con ordenadores y tabletas" class="img-fluid section-illustration">
                </div>
            </div>

            <div class="row align-items-center g-5 mb-5 flex-lg-row-reverse" id="disenar-ia">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <span class="section-tag mb-2 d-inline-block">IA como copiloto</span>
                    <h2 class="mb-3">Dise&ntilde;ar con IA (profesorado)</h2>
                    <p class="mb-3">El profesorado incorpora la IA para agilizar la planificaci&oacute;n y acompa&ntilde;ar la co-creaci&oacute;n de materiales inclusivos.</p>
                    <ul class="mb-0">
                        <li><b>Mini unidades did&aacute;cticas</b>: definir objetivos, criterios de &eacute;xito y actividades adaptadas en pocos minutos.</li>
                        <li><b>R&uacute;bricas inclusivas</b>: obtener borradores de r&uacute;bricas que eval&uacute;an accesibilidad, impacto y simplicidad antes de personalizarlos.</li>
                        <li><b>Feedback formativo</b>: solicitar sugerencias en formato &ldquo;pluses y preguntas&rdquo; que orientan al alumnado sin sustituir su voz.</li>
                    </ul>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="Docentes planificando actividades con recursos digitales" class="img-fluid section-illustration">
                </div>
            </div>

            <div class="row align-items-center g-5 mb-5" id="sprint">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <span class="section-tag mb-2 d-inline-block">Sprint 4Inclusion</span>
                    <h2 class="mb-3">Integraci&oacute;n de la IA en tres fases</h2>
                    <p class="mb-3">Adaptamos el sprint de Conecta&nbsp;37 a la realidad de 4Inclusion con un ciclo de tres semanas.</p>
                    <ol class="mb-0">
                        <li class="mb-2">
                            <b>Dise&ntilde;ar (semana 1)</b>
                            <ul>
                                <li>Presentar el reto inclusivo y generar, con IA, soluciones accesibles.</li>
                                <li>Definir criterios de &eacute;xito: autonom&iacute;a, simplicidad y viabilidad.</li>
                                <li>Revisar en equipo la gu&iacute;a de privacidad y accesibilidad.</li>
                            </ul>
                        </li>
                        <li class="mb-2">
                            <b>Prototipar (semana 2)</b>
                            <ul>
                                <li>Crear un primer prototipo o recurso (objeto 3D, pictograma, audiogu&iacute;a).</li>
                                <li>Usar IA como cr&iacute;tico amable para revisar claridad, simplicidad y accesibilidad.</li>
                                <li>Documentar el proceso con fotograf&iacute;as sin rostros y textos claros.</li>
                            </ul>
                        </li>
                        <li>
                            <b>Compartir (semana 3)</b>
                            <ul>
                                <li>Generar t&iacute;tulos, descripciones y subt&iacute;tulos con ayuda de la IA.</li>
                                <li>Publicar el recurso en el repositorio con licencia Creative Commons.</li>
                                <li>A&ntilde;adir declaraci&oacute;n de uso de IA y descripciones en lectura f&aacute;cil.</li>
                            </ul>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="Equipos creativos trabajando en un sprint colaborativo" class="img-fluid section-illustration">
                </div>
            </div>

            <div class="row align-items-center g-5 mb-5 flex-lg-row-reverse" id="herramientas">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <span class="section-tag mb-2 d-inline-block">Herramientas</span>
                    <h2 class="mb-3">IA recomendada para 4Inclusion</h2>
                    <p class="mb-3">Seleccionamos servicios con licencias educativas o gratuitas que cumplen criterios de privacidad y accesibilidad.</p>
                    <ul class="mb-0">
                        <li>Asistentes de redacci&oacute;n para resumir textos y mejorar estructuras (EdIA, ChatGPT en modo educativo).</li>
                        <li>Servicios de transcripci&oacute;n y subtitulado: YouTube Studio, Whisper o soluciones de la Consejer&iacute;a.</li>
                        <li>Generadores de pictogramas y materiales visuales basados en IA con licencias libres.</li>
                        <li>Suites colaborativas con IA para proponer plantillas de presentaciones o r&uacute;bricas.</li>
                    </ul>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="https://images.unsplash.com/photo-1697577418970-95d99b5a55cf?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8YWl8ZW58MHx8MHx8fDI%3D&auto=format&fit=crop&q=60&w=800" alt="Colecci&oacute;n de herramientas digitales accesibles" class="img-fluid section-illustration">
                </div>
            </div>

            <div class="row align-items-center g-5 mb-5" id="prompts">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <span class="section-tag mb-2 d-inline-block">Prompts inclusivos</span>
                    <h2 class="mb-3">Modelos de instrucciones listas para usar</h2>
                    <ul class="mb-0">
                        <li><b>Lectura f&aacute;cil</b>: &laquo;Resume este texto en 100 palabras con lenguaje claro y frases cortas para un p&uacute;blico de educaci&oacute;n especial.&raquo;</li>
                        <li><b>Pictogramas y agendas visuales</b>: &laquo;Genera una lista de pictogramas con descripciones para los pasos de [tarea] (m&aacute;ximo 6 pictos).&raquo;</li>
                        <li><b>Audiogu&iacute;a</b>: &laquo;Crea un guion de 2 minutos que describa el objeto [nombre] en formato audio para una persona con baja visi&oacute;n.&raquo;</li>
                        <li><b>Evaluaci&oacute;n</b>: &laquo;Prop&oacute;n tres preguntas de autoevaluaci&oacute;n sencillas para comprobar si se ha comprendido el concepto [tema].&raquo;</li>
                        <li><b>Inclusi&oacute;n tecnol&oacute;gica</b>: &laquo;Sugiere adaptaciones tecnol&oacute;gicas simples para que un estudiante con movilidad reducida pueda utilizar [herramienta].&raquo;</li>
                    </ul>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="https://images.unsplash.com/photo-1517430816045-df4b7de11d1d?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="Notas adhesivas con ideas generadas por IA" class="img-fluid section-illustration">
                </div>
            </div>

            <div class="row align-items-center g-5 mb-5 flex-lg-row-reverse" id="indicadores">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <span class="section-tag mb-2 d-inline-block">Impacto y &eacute;tica</span>
                    <h2 class="mb-3">Indicadores de &eacute;xito</h2>
                    <ul class="mb-0">
                        <li><b>Ahorro de tiempo</b>: horas invertidas en tareas repetitivas antes y despu&eacute;s de usar IA.</li>
                        <li><b>Calidad de los recursos</b>: puntuaci&oacute;n de r&uacute;bricas en accesibilidad, impacto y simplicidad.</li>
                        <li><b>Declaraci&oacute;n de uso de IA</b>: porcentaje de proyectos que explicitan c&oacute;mo se utiliz&oacute; la IA.</li>
                        <li><b>Cumplimiento &eacute;tico</b>: verificaci&oacute;n de que no se incluyen datos personales, rostros ni textos generados totalmente por IA.</li>
                    </ul>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="Panel de indicadores con datos y an&aacute;lisis" class="img-fluid section-illustration">
                </div>
            </div>

            <div class="row align-items-center g-5 mb-5" id="participar">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <span class="section-tag mb-2 d-inline-block">C&oacute;mo participar</span>
                    <h2 class="mb-3">Pasos para activar tu proyecto 4Inclusion</h2>
                    <ol class="mb-4">
                        <li>Descargar el <a href="#start-pack" class="text-primary fw-semibold text-decoration-none">Start Pack</a> desde la plataforma y revisar la gu&iacute;a de accesibilidad junto a la r&uacute;brica expr&eacute;s.</li>
                        <li>Completar la encuesta inicial para compartir intereses y retos de tu centro.</li>
                        <li>Unirse al Live Hub para recibir mentor&iacute;as y participar en talleres sobre IA y dise&ntilde;o inclusivo.</li>
                        <li>Cargar los materiales en el repositorio de 4Inclusion, incluyendo la declaraci&oacute;n de uso de IA y etiquetas claras.</li>
                        <li>Evaluar y compartir: aplicar la r&uacute;brica, solicitar feedback a otros centros y publicar mejoras iterativas.</li>
                    </ol>
                    <div class="alert alert-primary" role="alert">
                        <i class="bi bi-lightbulb me-2"></i>Documenta c&oacute;mo la IA te ayud&oacute; y qu&eacute; decisiones mantuvieron la voz del alumnado.
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&amp;fit=crop&amp;w=1200&amp;q=80" alt="Equipo docente celebrando un proyecto inclusivo" class="img-fluid section-illustration">
                </div>
            </div>

            <div class="row mb-5" id="start-pack">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card border-0 shadow-sm start-pack-card">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">Start Pack 4Inclusion + IA copiloto</h5>
                        </div>
                        <div class="card-body">
                            <div class="ponente-toggle d-flex flex-wrap gap-2 mb-3">
                                <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#start-pack-collapse" aria-expanded="false" aria-controls="start-pack-collapse">
                                    Ver Start Pack
                                </button>
                                <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#start-pack-ejemplos" aria-expanded="false" aria-controls="start-pack-ejemplos">
                                    Ver ejemplos
                                </button>
                                <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#start-pack-ee" aria-expanded="false" aria-controls="start-pack-ee">
                                    Ejemplos en EE
                                </button>
                                <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#start-pack-ejemplo-detallado" aria-expanded="false" aria-controls="start-pack-ejemplo-detallado">
                                    Ejemplo detallado 1
                                </button>
                                <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#start-pack-ejemplo-detallado-2" aria-expanded="false" aria-controls="start-pack-ejemplo-detallado-2">
                                    Ejemplo detallado 2
                                </button>
                                <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#start-pack-carta" aria-expanded="false" aria-controls="start-pack-carta">
                                    Ejemplo carta personalizada
                                </button>
                                <a class="btn btn-outline-secondary btn-sm" href="https://padlet.com/gines_ruiz/dgmakers-4inclusion-ufve9o46bguqdf0y" target="_blank" rel="noopener noreferrer">
                                    Repositorio Padlet
                                </a>
                            </div>
                            <div id="start-pack-collapse" class="collapse">
                                <h3 class="h5 mb-3">Start Pack 4Inclusion + IA copiloto (v1.0)</h3>
                                <p><strong>Prop&oacute;sito.</strong> Este paquete te gu&iacute;a para dise&ntilde;ar, prototipar y publicar un reto inclusivo usando la IA como copiloto (no sustituto) y cumpliendo criterios de accesibilidad, privacidad y autor&iacute;a humana.</p>

                                <h4 class="h6 mt-4">0) Visi&oacute;n r&aacute;pida</h4>
                                <p><strong>Qu&eacute; es 4Inclusion + IA.</strong> Un enfoque para crear recursos inclusivos (pictogramas, audiogu&iacute;as, v&iacute;deos con subt&iacute;tulos) que aumentan la autonom&iacute;a del alumnado y liberan tiempo docente.</p>
                                <p><strong>Principios.</strong> Transparencia del uso de IA, autor&iacute;a humana, verificaci&oacute;n con 2 fuentes, accesibilidad y privacidad.</p>
                                <p><strong>Ciclo Sprint (3 semanas).</strong> Dise&ntilde;ar &rarr; Prototipar &rarr; Compartir.</p>

                                <h4 class="h6 mt-4">1) Gu&iacute;a expr&eacute;s de uso responsable</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 class="h6">Qu&eacute; S&Iacute;</h5>
                                        <ul>
                                            <li>Usar IA para bocetar, resumir, estructurar, se&ntilde;alar mejoras y generar borradores.</li>
                                            <li>Verificar todo con, al menos, dos fuentes fiables.</li>
                                            <li>Declarar c&oacute;mo, cu&aacute;ndo y para qu&eacute; se us&oacute; la IA.</li>
                                            <li>Proteger datos personales y respetar licencias.</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h5 class="h6">Qu&eacute; NO</h5>
                                        <ul>
                                            <li>Publicar contenidos sin revisi&oacute;n humana.</li>
                                            <li>Subir rostros o datos identificables sin consentimiento.</li>
                                            <li>Entregar textos 100% generados por IA como producto final.</li>
                                            <li>Usar material con licencias que impidan su difusi&oacute;n educativa.</li>
                                        </ul>
                                    </div>
                                </div>
                                <h5 class="h6 mt-3">Declaraci&oacute;n de uso de IA (modelo, 8&ndash;10 l&iacute;neas)</h5>
                                <p class="mb-3">
                                    En este proyecto hemos utilizado IA como copiloto para: [resumir/estructurar/idear/maquetar]. Todas las decisiones creativas y de evaluaci&oacute;n corresponden al profesorado y al alumnado. El contenido ha sido verificado con [Fuente 1] y [Fuente 2]. Se han aplicado criterios de accesibilidad (lectura f&aacute;cil, alt-text, subt&iacute;tulos, contraste) y de privacidad (sin rostros ni datos personales). La IA no ha sustituido la voz del alumnado ni las tareas de an&aacute;lisis y revisi&oacute;n.
                                </p>
                                <h5 class="h6">Licencias y cr&eacute;ditos (recomendaci&oacute;n)</h5>
                                <ul>
                                    <li>Publica con Creative Commons (p. ej., CC BY o CC BY-NC).</li>
                                    <li>Cita autor&iacute;a (equipo, centro), fuentes y herramientas.</li>
                                </ul>

                                <h4 class="h6 mt-4">2) Checklist de accesibilidad (1 p&aacute;gina)</h4>
                                <ul>
                                    <li>Contraste suficiente y tipograf&iacute;a legible (&ge;12&ndash;14 pt en documentos).</li>
                                    <li>Lectura f&aacute;cil: frases cortas, vocabulario com&uacute;n, sin tecnicismos.</li>
                                    <li>Alt-text en im&aacute;genes: describe lo esencial (qu&eacute; se ve/qu&eacute; significa).</li>
                                    <li>Subt&iacute;tulos en v&iacute;deos y guiones de audio disponibles.</li>
                                    <li>Pictogramas para pasos o instrucciones clave (&le;6 pasos).</li>
                                    <li>Privacidad: sin rostros ni nombres; consentimiento si aplica.</li>
                                    <li>Navegaci&oacute;n clara: t&iacute;tulos, listas, numeraciones, enlaces descriptivos.</li>
                                </ul>

                                <h4 class="h6 mt-4">3) R&uacute;brica expr&eacute;s 4I (Autonom&iacute;a, Simplicidad, Accesibilidad)</h4>
                                <p><strong>Gating item (obligatorio):</strong></p>
                                <ul>
                                    <li>&#10004; Declaraci&oacute;n de uso de IA incluida y verificada.</li>
                                    <li>&#10004; Sin datos personales/rostros; licencias y fuentes citadas.</li>
                                </ul>
                                <p><strong>Niveles</strong></p>
                                <ol class="mb-3">
                                    <li><b>Inicial</b> &middot; Autonom&iacute;a: el recurso requiere ayuda constante para entenderse/usar. &middot; Simplicidad: lenguaje t&eacute;cnico o pasos confusos. &middot; Accesibilidad: sin alt-text/subt&iacute;tulos o contraste pobre.</li>
                                    <li><b>En progreso</b> &middot; Autonom&iacute;a: el alumnado lo usa con apoyos puntuales. &middot; Simplicidad: estructura clara con alg&uacute;n tecnicismo. &middot; Accesibilidad: alt-text y subt&iacute;tulos presentes; algunos detalles a mejorar.</li>
                                    <li><b>&Oacute;ptimo</b> &middot; Autonom&iacute;a: el recurso se comprende y usa de forma aut&oacute;noma. &middot; Simplicidad: pasos breves, lenguaje plano, objetivos claros. &middot; Accesibilidad: alt-text preciso, subt&iacute;tulos limpios, contraste adecuado, lectura f&aacute;cil.</li>
                                </ol>

                                <h4 class="h6 mt-4">4) Banco de prompts inclusivos (copiar y pegar)</h4>
                                <ul>
                                    <li><b>Lectura f&aacute;cil</b>: &laquo;Resume este texto en 100&ndash;120 palabras con lectura f&aacute;cil: frases de 10&ndash;15 palabras, vocabulario cotidiano, evita tecnicismos. A&ntilde;ade 3 ideas clave en vi&ntilde;etas.&raquo;</li>
                                    <li><b>Pictogramas y pasos</b>: &laquo;Genera 4&ndash;6 pasos para [tarea]. Para cada paso: t&iacute;tulo (&le;4 palabras) + descripci&oacute;n (1 frase) con lectura f&aacute;cil.&raquo;</li>
                                    <li><b>Audiogu&iacute;a (2 minutos)</b>: &laquo;Convierte este contenido en un guion de audiogu&iacute;a de 2 minutos: tono cercano, pausas sugeridas, orientaciones espaciales para baja visi&oacute;n y despedida breve.&raquo;</li>
                                    <li><b>R&uacute;brica 4I como cr&iacute;tico amable</b>: &laquo;Act&uacute;a como cr&iacute;tico amable. Dame 3 pluses y 3 preguntas para mejorar claridad, simplicidad y accesibilidad de este borrador. S&eacute; concreto.&raquo;</li>
                                    <li><b>T&iacute;tulos y descripci&oacute;n de publicaci&oacute;n</b>: &laquo;Prop&oacute;n 1 t&iacute;tulo (&le;70) y 1 descripci&oacute;n (&le;150 palabras) en lectura f&aacute;cil para p&uacute;blico general + 5 etiquetas. A&ntilde;ade la frase: Incluye audiogu&iacute;a y pictogramas.&raquo;</li>
                                </ul>

                                <h4 class="h6 mt-4">5) Herramientas recomendadas (criterios: privacidad + accesibilidad)</h4>
                                <ul>
                                    <li>Asistentes de redacci&oacute;n para estructurar y revisar (modo educativo).</li>
                                    <li>Transcripci&oacute;n y subtitulado: YouTube Studio, Whisper, soluciones institucionales.</li>
                                    <li>Pictogramas con licencias libres (y registro de alt-text).</li>
                                    <li>Suites colaborativas con IA para plantillas y coedici&oacute;n.</li>
                                </ul>
                                <p class="mb-0"><strong>Consejo.</strong> Guarda capturas o exportaciones que prueben el flujo con IA (borradores, revisiones, prompts). Te servir&aacute;n para la declaraci&oacute;n y la memoria.</p>
                            </div>
                            <div id="start-pack-ejemplos" class="collapse mt-4">
                                <h3 class="h5 mb-3">Ejemplos operativos para el sprint</h3>
                                <p class="mb-3">Usa esta hoja como recordatorio r&aacute;pido durante la sesi&oacute;n. La IA act&uacute;a como copiloto: parte del trabajo se realiza sin ella y siempre mantenemos privacidad y accesibilidad por defecto.</p>

                                <h4 class="h6">1) Prompts esenciales (copiar, pegar y adaptar)</h4>
                                <ol class="mb-4">
                                    <li><strong>Lectura f&aacute;cil:</strong> &laquo;Convierte este texto en lectura f&aacute;cil para alumnado con dificultades de comprensi&oacute;n. Usa frases cortas, listas con vi&ntilde;etas y ejemplos. A&ntilde;ade 2 preguntas de verificaci&oacute;n. Texto: [pegar].&raquo;</li>
                                    <li><strong>Alt-text:</strong> &laquo;Escribe un texto alternativo (m&aacute;ximo 120 caracteres) que describa esta imagen para alguien que no puede verla. Explica qu&eacute; sucede y por qu&eacute; es relevante. Contexto: [1 frase].&raquo;</li>
                                    <li><strong>Subt&iacute;tulos + t&iacute;tulos:</strong> &laquo;Genera subt&iacute;tulos para este v&iacute;deo de 30&ndash;45 segundos con tildes y puntuaci&oacute;n. Despu&eacute;s propone 3 t&iacute;tulos breves y 1 descripci&oacute;n con 5 palabras clave.&raquo;</li>
                                    <li><strong>Audio TTS (guion):</strong> &laquo;Escribe un guion de 4&ndash;6 frases para dar esta instrucci&oacute;n al alumnado. Tono amable y directo. Tema: [indicar].&raquo;</li>
                                    <li><strong>3D · Plan de escaneado:</strong> &laquo;Prop&oacute;n una lista de tomas (frontal, 45&deg;, superior...) para escanear [objeto] con buena cobertura y sin brillos. Explica por qu&eacute; cada toma es &uacute;til.&raquo;</li>
                                    <li><strong>3D · Postproceso de malla:</strong> &laquo;Describe pasos sencillos para limpiar y simplificar la malla de [objeto] y dejarla lista para impresi&oacute;n (malla cerrada, sin agujeros).&raquo;</li>
                                    <li><strong>3D · Orientaci&oacute;n y soportes:</strong> &laquo;Sugiere orientaci&oacute;n y esquema de soportes para imprimir [objeto] en PLA, junto a una checklist previa al slicing.&raquo;</li>
                                    <li><strong>3D · Hoja de uso:</strong> &laquo;Genera una hoja de uso en lectura f&aacute;cil para [apoyo 3D], con pictogramas sugeridos y advertencias de seguridad.&raquo;</li>
                                    <li><strong>V&iacute;deo/Podcast · Guion:</strong> &laquo;Escribe un guion de 6 frases para explicar [tema] a alumnado de educaci&oacute;n especial; incluye saludo y cierre amable.&raquo;</li>
                                    <li><strong>V&iacute;deo · Plan de grabaci&oacute;n:</strong> &laquo;Lista 6 planos sencillos (duraci&oacute;n, qu&eacute; decir, qu&eacute; mostrar) para un v&iacute;deo de 40 segundos sobre [tema].&raquo;</li>
                                    <li><strong>V&iacute;deo · Subt&iacute;tulos:</strong> &laquo;Corrige y mejora estos subt&iacute;tulos; devuelve el texto con tildes, sin muletillas y con buena puntuaci&oacute;n.&raquo;</li>
                                    <li><strong>V&iacute;deo/Podcast · Car&aacute;tula:</strong> &laquo;Prop&oacute;n 3 t&iacute;tulos breves y 1 descripci&oacute;n con 5 palabras clave para publicar este v&iacute;deo/podcast.&raquo;</li>
                                    <li><strong>RA · Marcador alto contraste:</strong> &laquo;Describe un marcador RA de alto contraste para [tema]: forma, colores y elementos distintivos.&raquo;</li>
                                    <li><strong>RA · Instrucciones en 6 pasos:</strong> &laquo;Redacta instrucciones en 6 pasos para usar la tarjeta RA [nombre] con el grupo; lenguaje claro y pictogramas sugeridos.&raquo;</li>
                                    <li><strong>RA · Audio TTS:</strong> &laquo;Convierte estas instrucciones en un guion de audio TTS de 30 segundos con tono amable y pausas.&raquo;</li>
                                </ol>

                                <h4 class="h6">2) Checklist de accesibilidad express (marca 8/10)</h4>
                                <ul class="mb-0">
                                    <li>Lenguaje claro: frases cortas y vocabulario cotidiano.</li>
                                    <li>Estructura con listas y encabezados reconocibles.</li>
                                    <li>Contraste y tama&ntilde;o de letra adecuados.</li>
                                    <li>Texto alternativo en todas las im&aacute;genes.</li>
                                    <li>Subt&iacute;tulos disponibles en los v&iacute;deos.</li>
                                    <li>Audio limpio, sin ruido y con volumen suficiente.</li>
                                    <li>Pictogramas coherentes cuando se utilicen.</li>
                                    <li>Evitar tecnicismos y met&aacute;foras confusas.</li>
                                    <li>Privacidad asegurada: sin datos personales ni rostros sin consentimiento.</li>
                                    <li>Declaraci&oacute;n de uso de IA incluida.</li>
                                </ul>
                            </div>
                            <div id="start-pack-ee" class="collapse mt-4">
                                <h3 class="h5 mb-3">Ejemplos en Centros de Educaci&oacute;n Especial</h3>
                                <p class="mb-3">Siete aplicaciones guiadas, pensadas para docentes de CEE que buscan combinar accesibilidad, autonom&iacute;a y ahorro de tiempo con la IA como copiloto.</p>
                                <ol class="mb-4">
                                    <li class="mb-3">
                                        <strong>Lectura f&aacute;cil y adaptaci&oacute;n de textos</strong>
                                        <ul>
                                            <li><strong>Para qu&eacute;:</strong> facilitar la comprensi&oacute;n de contenidos a estudiantes con DI, TEA o DLE.</li>
                                            <li><strong>C&oacute;mo:</strong> solicitar res&uacute;menes en lectura f&aacute;cil con glosario visual.</li>
                                            <li><strong>Prompt:</strong> &laquo;Reescribe este texto en lectura f&aacute;cil (frases cortas, vocabulario cotidiano) y a&ntilde;ade 3 ideas clave y un mini glosario con definiciones simples.&raquo;</li>
                                        </ul>
                                    </li>
                                    <li class="mb-3">
                                        <strong>Agendas visuales y secuencias con pictogramas</strong>
                                        <ul>
                                            <li><strong>Para qu&eacute;:</strong> anticipar rutinas de entrada, aseo o taller y potenciar la autonom&iacute;a.</li>
                                            <li><strong>C&oacute;mo:</strong> generar 4&ndash;6 pasos con descripciones y asociar pictogramas libres.</li>
                                            <li><strong>Prompt:</strong> &laquo;Crea 6 pasos para [tarea] con t&iacute;tulo breve y una frase en lectura f&aacute;cil. A&ntilde;ade sugerencia de pictograma y alt-text para cada paso.&raquo;</li>
                                        </ul>
                                    </li>
                                    <li class="mb-3">
                                        <strong>Audiogu&iacute;as y subt&iacute;tulos accesibles</strong>
                                        <ul>
                                            <li><strong>Para qu&eacute;:</strong> apoyar a alumnado con baja visi&oacute;n, dificultades lectoras o de comprensi&oacute;n auditiva.</li>
                                            <li><strong>C&oacute;mo:</strong> la IA redacta un guion de 2 minutos, combinado con TTS para audio y YouTube Studio para subt&iacute;tulos.</li>
                                            <li><strong>Prompt:</strong> &laquo;Convierte este contenido en guion de audiogu&iacute;a (2 min) con pausas y orientaciones espaciales. Cierra con una frase motivadora.&raquo;</li>
                                        </ul>
                                    </li>
                                    <li class="mb-3">
                                        <strong>Historias sociales personalizadas</strong>
                                        <ul>
                                            <li><strong>Para qu&eacute;:</strong> preparar transiciones (comedor, autob&uacute;s) y normas sociales.</li>
                                            <li><strong>C&oacute;mo:</strong> estructurar en &laquo;Situaci&oacute;n &rarr; Qu&eacute; espero &rarr; Qu&eacute; puedo hacer &rarr; C&oacute;mo me siento&raquo;.</li>
                                            <li><strong>Prompt:</strong> &laquo;Escribe una historia social para [situaci&oacute;n] con 6&ndash;8 frases en primera persona, tono calmado y pasos claros. A&ntilde;ade 3 pictogramas sugeridos.&raquo;</li>
                                        </ul>
                                    </li>
                                    <li class="mb-3">
                                        <strong>Comunicaci&oacute;n aumentativa (bancos de frases y tableros)</strong>
                                        <ul>
                                            <li><strong>Para qu&eacute;:</strong> ampliar vocabulario funcional en SAAC.</li>
                                            <li><strong>C&oacute;mo:</strong> la IA propone frases modelo por contexto y categor&iacute;a para exportar a tarjetas.</li>
                                            <li><strong>Prompt:</strong> &laquo;Genera 20 frases funcionales (yo/quiero/necesito) para [contexto], ordenadas por categor&iacute;a, con versi&oacute;n pictogr&aacute;fica sugerida.&raquo;</li>
                                        </ul>
                                    </li>
                                    <li class="mb-3">
                                        <strong>Evaluaci&oacute;n y seguimiento con r&uacute;bricas inclusivas</strong>
                                        <ul>
                                            <li><strong>Para qu&eacute;:</strong> observar progreso en autonom&iacute;a, simplicidad y accesibilidad.</li>
                                            <li><strong>C&oacute;mo:</strong> IA genera una r&uacute;brica 3&times;3, hoja de observaci&oacute;n y feedback en formato &ldquo;pluses y preguntas&rdquo;.</li>
                                            <li><strong>Prompt:</strong> &laquo;Crea una r&uacute;brica de 3 niveles para [tarea] con criterios: Autonom&iacute;a, Simplicidad, Accesibilidad, y una hoja de observaci&oacute;n de 10 &iacute;tems.&raquo;</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <strong>Planificaci&oacute;n r&aacute;pida con apoyos sensoriales y TEACCH</strong>
                                        <ul>
                                            <li><strong>Para qu&eacute;:</strong> dise&ntilde;ar mini-unidades con actividades A/B/C, tiempos y materiales.</li>
                                            <li><strong>C&oacute;mo:</strong> IA sugiere opciones manipulativas, visuales y motoras, incluyendo espacios TEACCH.</li>
                                            <li><strong>Prompt:</strong> &laquo;Dise&ntilde;a una mini-unidad de 3 sesiones sobre [tema] con tres niveles de apoyo (A/B/C), tiempos, materiales low-cost y adaptaci&oacute;n TEACCH.&raquo;</li>
                                        </ul>
                                    </li>
                                </ol>
                                <h4 class="h6">Consejos de uso seguro</h4>
                                <ul class="mb-0">
                                    <li>Verifica siempre con dos fuentes y revisa el producto final antes de compartirlo.</li>
                                    <li>No publiques rostros ni datos personales sin consentimiento expreso.</li>
                                    <li>A&ntilde;ade declaraci&oacute;n de uso de IA y licencias de los recursos empleados.</li>
                                </ul>
                                <p class="mt-3 mb-0">Si lo necesitas, podemos preparar plantillas (Docs, Slides o Sheets) con los prompts incrustados para cada uso.</p>
                            </div>
                            <div id="start-pack-ejemplo-detallado" class="collapse mt-4">
                                <h3 class="h5 mb-3">Ejemplo detallado 1 &middot; Lectura f&aacute;cil y adaptaci&oacute;n de textos</h3>
                                
                                <div class="ponente-note">
                                    <p class="mb-3"><strong>Uso 1 &mdash; Lectura f&aacute;cil y adaptaci&oacute;n de textos</strong></p>
                                    <ul class="ps-3 mb-3">
                                        <li><strong>Objetivo:</strong> convertir un texto curricular a lectura f&aacute;cil para alumnado de un CEE (DI/TEA/DLE).</li>
                                        <li><strong>Producto:</strong> ficha en lectura f&aacute;cil + mini glosario + 3 preguntas de comprobaci&oacute;n.</li>
                                    </ul>
                                    <hr>
                                    <h4 class="h6 mb-2">1) Texto original (Ciencias &mdash; &ldquo;El ciclo del agua&rdquo;)</h4>
                                    <p class="mb-3">El ciclo del agua es un proceso continuo por el cual el agua se mueve entre la superficie terrestre y la atm&oacute;sfera. Cuando el sol calienta r&iacute;os, lagos y mares, parte del agua se evapora y pasa al estado gaseoso. Ese vapor asciende y se enfr&iacute;a hasta condensarse formando nubes. Cuando las gotas se unen y aumentan de tama&ntilde;o, caen a la superficie en forma de precipitaci&oacute;n: lluvia, nieve o granizo. Una parte del agua circula por la superficie hacia r&iacute;os y oc&eacute;anos (escorrent&iacute;a). Otra parte se infiltra en el suelo, alimenta acu&iacute;feros y puede tardar mucho tiempo en regresar a la superficie. Las plantas tambi&eacute;n liberan agua mediante transpiraci&oacute;n. Gracias a este ciclo, el agua se limpia en gran medida, se reparte por el planeta y hace posible la vida.</p>
                                    <hr>
                                    <h4 class="h6 mb-2">2) Prompt maestro (copia y pega)</h4>
                                    <div class="bg-light border border-1 border-primary-subtle rounded p-3 mb-3">
                                        <p class="text-primary mb-2"><strong>Prompt maestro:</strong></p>
                                        <p class="mb-0"><code>Reescribe el siguiente texto en lectura f&aacute;cil para alumnado de un centro de educaci&oacute;n especial.<br>
Instrucciones de formato:<br>
• Frases de 10&ndash;15 palabras, vocabulario cotidiano, sin subordinadas.<br>
• Estructura con: &iquest;De qu&eacute; trata?, Ideas clave (5 vi&ntilde;etas), Glosario (5 t&eacute;rminos con definici&oacute;n simple) y 3 preguntas de comprensi&oacute;n (respuesta corta o s&iacute;/no).<br>
• Marca palabras dif&iacute;ciles con negrita en el glosario.<br>
• No inventes datos. Mant&eacute;n un tono cercano.<br>
• Longitud total: 120&ndash;150 palabras.<br>
Texto a adaptar:<br>
[PEGA AQU&Iacute; EL TEXTO ORIGINAL]</code></p>
                                    </div>
                                    <hr>
                                    <h4 class="h6 mb-2">3) Resultado (lectura f&aacute;cil)</h4>
                                    <p class="mb-2"><strong>&iquest;De qu&eacute; trata?</strong><br>El texto explica c&oacute;mo se mueve el agua por la Tierra y el aire.</p>
                                    <p class="mb-2"><strong>Ideas clave</strong></p>
                                    <ul class="ps-3 mb-3">
                                        <li>El sol calienta mares, r&iacute;os y lagos. Parte del agua se evapora.</li>
                                        <li>El vapor sube, se enfr&iacute;a y se condensa. As&iacute; nacen las nubes.</li>
                                        <li>Cuando las gotas son grandes, cae precipitaci&oacute;n: lluvia, nieve o granizo.</li>
                                        <li>Una parte del agua corre por la superficie hasta r&iacute;os y oc&eacute;anos.</li>
                                        <li>Otra parte entra en el suelo y llena acu&iacute;feros. Las plantas transpiran agua.</li>
                                    </ul>
                                    <p class="mb-2"><strong>Glosario</strong></p>
                                    <ul class="ps-3 mb-3">
                                        <li><strong>Evaporaci&oacute;n</strong>: el agua l&iacute;quida se convierte en gas por el calor.</li>
                                        <li><strong>Condensaci&oacute;n</strong>: el vapor se enfr&iacute;a y forma gotas y nubes.</li>
                                        <li><strong>Precipitaci&oacute;n</strong>: el agua cae del cielo (lluvia, nieve o granizo).</li>
                                        <li><strong>Escorrent&iacute;a</strong>: el agua que corre por la superficie hacia r&iacute;os y mares.</li>
                                        <li><strong>Acu&iacute;fero</strong>: lugar bajo tierra donde se guarda el agua.</li>
                                    </ul>
                                    <p class="mb-2"><strong>Preguntas</strong></p>
                                    <ol class="mb-3">
                                        <li>&iquest;Qu&eacute; hace el sol para que el agua se evapore?</li>
                                        <li>Nombra dos tipos de precipitaci&oacute;n.</li>
                                        <li>&iquest;D&oacute;nde se guarda el agua que entra en el suelo?</li>
                                    </ol>
                                    <hr>
                                    <h4 class="h6 mb-2">4) Extras r&aacute;pidos</h4>
                                    <ul class="ps-3 mb-3">
                                        <li><strong>Prompt de verificaci&oacute;n l&eacute;xica:</strong> &laquo;Se&ntilde;ala las palabras dif&iacute;ciles que queden y prop&oacute;n alternativas simples. Indica tambi&eacute;n si alguna frase supera 15 palabras y c&oacute;mo dividirla.&raquo;</li>
                                        <li><strong>Prompt para pictogramas + alt-text:</strong> &laquo;Sugiere 5 pictogramas para apoyar el texto (evaporaci&oacute;n, nubes, lluvia, escorrent&iacute;a, acu&iacute;fero). Para cada imagen, escribe un alt-text de 1 frase en lectura f&aacute;cil.&raquo;</li>
                                        <li><strong>Prompt para evaluaci&oacute;n:</strong> &laquo;Crea una r&uacute;brica 3&times;3 (Inicial/En progreso/&Oacute;ptimo) para valorar comprensi&oacute;n y autonom&iacute;a en esta actividad.&raquo;</li>
                                    </ul>
                                    <hr>
                                    <h4 class="h6 mb-2">5) Paso a paso en clase</h4>
                                    <ol class="mb-0">
                                        <li>Copia el texto original y ejecuta el Prompt maestro.</li>
                                        <li>Revisa y corrige nombres propios o t&eacute;rminos locales.</li>
                                        <li>Ejecuta los prompts extra si necesitas pictogramas, alt-text o r&uacute;brica.</li>
                                        <li>Maqueta en A4 con tipograf&iacute;a legible, alto contraste y espacio en blanco.</li>
                                        <li>Lee en voz alta, subraya 3 ideas clave y responde las preguntas.</li>
                                        <li>Guarda una declaraci&oacute;n de uso de IA y cita las fuentes.</li>
                                    </ol>
                                </div>
                            </div>
                            <div id="start-pack-ejemplo-detallado-2" class="collapse mt-4">
                                <h3 class="h5 mb-3">Ejemplo detallado 2 &middot; Agendas visuales y secuencias con pictogramas</h3>
                                <div class="d-flex flex-wrap gap-2 mb-3">
                                    <a class="btn btn-sm btn-primary" href="https://drive.google.com/file/d/1IYsgDtASeQBgXfJWk-p6Ga1Gp0HSY9MX/view?usp=sharing" target="_blank" rel="noopener noreferrer">
                                        <i class="bi bi-file-earmark-text me-1"></i>Plantilla
                                    </a>
                                </div>
                                <div class="ponente-note">
                                    <p class="mb-3"><strong>Uso 2 &mdash; Agendas visuales y secuencias con pictogramas</strong></p>
                                    <ul class="ps-3 mb-3">
                                        <li><strong>Objetivo:</strong> anticipar lo que va a ocurrir y aumentar la autonom&iacute;a en rutinas.</li>
                                        <li><strong>Producto:</strong> secuencia de 6 pasos con t&iacute;tulo corto, frase en lectura f&aacute;cil, pictograma sugerido y alt-text.</li>
                                    </ul>
                                    <hr>
                                    <h4 class="h6 mb-2">1) Prompt maestro (copia y pega)</h4>
                                    <div class="bg-light border border-1 border-primary-subtle rounded p-3 mb-3">
                                        <p class="text-primary mb-2"><strong>Prompt maestro:</strong></p>
                                        <p class="mb-0"><code>Crea 6 pasos para la tarea [RUTINA] pensando en alumnado de un Centro de Educaci&oacute;n Especial.<br>
Formato requerido (tabla o lista numerada):<br>
&ndash; Paso (n&uacute;mero)<br>
&ndash; T&iacute;tulo corto (&le;4 palabras)<br>
&ndash; Descripci&oacute;n (1 frase, lectura f&aacute;cil, 10&ndash;12 palabras, verbo al inicio)<br>
&ndash; Pictograma sugerido (palabras clave tipo ARASAAC/&iacute;cono gen&eacute;rico)<br>
&ndash; Alt-text (1 frase que describa la imagen)<br>
Condiciones: evita tecnicismos, no uses nombres propios, incluye un paso final de &ldquo;Terminado&rdquo; o de autorregulaci&oacute;n (respirar/esperar). No inventes riesgos ni diagn&oacute;sticos.</code></p>
                                    </div>
                                    <hr>
                                    <h4 class="h6 mb-2">2) Ejemplo completo (listo para el Start Pack)</h4>
                                    <p class="mb-3"><strong>Rutina:</strong> Entrada al aula (ma&ntilde;ana)</p>
                                    <div class="table-responsive mb-3">
                                        <table class="table table-bordered align-middle">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">Paso</th>
                                                    <th scope="col">T&iacute;tulo corto</th>
                                                    <th scope="col">Descripci&oacute;n (lectura f&aacute;cil)</th>
                                                    <th scope="col">Pictograma sugerido</th>
                                                    <th scope="col">Alt-text</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Llego y saludo</td>
                                                    <td>Entra al aula y saluda con la mano.</td>
                                                    <td>&ldquo;entrada&rdquo;, &ldquo;saludo&rdquo;</td>
                                                    <td>Pictograma: persona entrando y saludando.</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Cuelga mochila</td>
                                                    <td>Ve al perchero y cuelga la mochila despacio.</td>
                                                    <td>&ldquo;perchero&rdquo;, &ldquo;mochila&rdquo;</td>
                                                    <td>Pictograma: percha con mochila colgada.</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Guarda abrigo</td>
                                                    <td>Quita el abrigo y gu&aacute;rdalo en el perchero.</td>
                                                    <td>&ldquo;abrigo&rdquo;, &ldquo;guardar&rdquo;</td>
                                                    <td>Pictograma: abrigo en percha.</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Saca agenda</td>
                                                    <td>Saca la agenda y el estuche de la mochila.</td>
                                                    <td>&ldquo;agenda&rdquo;, &ldquo;material escolar&rdquo;</td>
                                                    <td>Pictograma: libreta y l&aacute;piz.</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>Si&eacute;ntate</td>
                                                    <td>Si&eacute;ntate en tu sitio y mira al docente.</td>
                                                    <td>&ldquo;silla&rdquo;, &ldquo;sentarse&rdquo;</td>
                                                    <td>Pictograma: persona sentada en silla.</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>Respira y listo</td>
                                                    <td>Respira tres veces y espera la primera actividad.</td>
                                                    <td>&ldquo;respirar&rdquo;, &ldquo;terminado&rdquo;</td>
                                                    <td>Pictograma: icono respiraci&oacute;n y check de terminado.</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <h5 class="h6">Notas de accesibilidad</h5>
                                    <ul class="ps-3 mb-3">
                                        <li>Tipograf&iacute;a grande y alto contraste.</li>
                                        <li>Cada tarjeta incluye n&uacute;mero, t&iacute;tulo, pictograma y alt-text debajo.</li>
                                        <li>A&ntilde;ade tarjeta final &ldquo;Hoy cambi&oacute; algo&rdquo; para avisos de cambios cuando sea necesario.</li>
                                    </ul>
                                    <hr>
                                    <h4 class="h6 mb-2">3) Prompts extra (opcionales)</h4>
                                    <ul class="ps-3 mb-3">
                                        <li><strong>Versi&oacute;n TEACCH (con tiempos y espacio):</strong> &laquo;Reescribe la secuencia para TEACCH indicando qu&eacute; espacio, tiempo y material necesita cada paso. Mant&eacute;n t&iacute;tulos cortos y lectura f&aacute;cil.&raquo;</li>
                                        <li><strong>Apoyos sensoriales y conductuales:</strong> &laquo;Sugiere apoyos sensoriales discretos para la rutina (tarjeta &ldquo;espera&rdquo;, pelota antiestr&eacute;s, temporizador visual) y redacta una mini historia social de 4 frases para &ldquo;Entrar con calma&rdquo;.&raquo;</li>
                                        <li><strong>Personalizaci&oacute;n por nivel:</strong> &laquo;Adapta cada paso con tres niveles de ayuda: A) apoyo total (modelo + gesto), B) apoyo parcial (clave visual) y C) independencia (autoinstrucci&oacute;n). Devuelve en tabla.&raquo;</li>
                                        <li><strong>Comprobaci&oacute;n r&aacute;pida para familias:</strong> &laquo;Redacta una hoja para familias con la misma secuencia en lectura f&aacute;cil y un espacio de firma &ldquo;He practicado en casa&rdquo;.&raquo;</li>
                                    </ul>
                                    <hr>
                                    <h4 class="h6 mb-2">4) Evaluaci&oacute;n y seguimiento</h4>
                                    <p class="mb-2"><strong>R&uacute;brica 3&times;3 (resumen)</strong></p>
                                    <ul class="ps-3 mb-3">
                                        <li><strong>Autonom&iacute;a:</strong> necesita gu&iacute;a continua / gu&iacute;a puntual / realiza solo.</li>
                                        <li><strong>Simplicidad:</strong> pasos largos / pasos claros con alguna duda / pasos breves y claros.</li>
                                        <li><strong>Accesibilidad:</strong> pictos sin alt-text / con alt-text mejorable / con alt-text preciso y contraste adecuado.</li>
                                    </ul>
                                    <p class="mb-2"><strong>Hoja de observaci&oacute;n (10 &iacute;tems)</strong></p>
                                    <ol class="mb-3">
                                        <li>Sigue el orden.</li>
                                        <li>Reconoce cada pictograma.</li>
                                        <li>Usa &ldquo;terminado&rdquo;.</li>
                                        <li>Pide ayuda si se atasca.</li>
                                        <li>Mantiene la calma.</li>
                                        <li>Respira cuando se indica.</li>
                                        <li>Coloca el material en su lugar.</li>
                                        <li>Respeta los tiempos.</li>
                                        <li>Atiende a la consigna inicial.</li>
                                        <li>Completa la rutina.</li>
                                    </ol>
                                    <hr>
                                    <h4 class="h6 mb-2">5) C&oacute;mo usarlo en clase (paso a paso)</h4>
                                    <ol class="mb-3">
                                        <li>Imprime las 6 tarjetas en A6 con velcro (panel TEACCH).</li>
                                        <li>Antes de entrar, muestra la secuencia completa y se&ntilde;ala el paso 1.</li>
                                        <li>Refuerza con modelado y gesto; reduce ayudas cada semana.</li>
                                        <li>Si hay cambio, usa la tarjeta &ldquo;Hoy cambi&oacute; algo&rdquo; y expl&iacute;calo en una frase.</li>
                                        <li>Finaliza con &ldquo;Respira y listo&rdquo; (autorregulaci&oacute;n + sensaci&oacute;n de logro).</li>
                                        <li>Registra en la hoja de observaci&oacute;n y ajusta apoyos.</li>
                                    </ol>
                                    <hr>
                                    <h4 class="h6 mb-2">6) Materiales low-cost sugeridos</h4>
                                    <ul class="ps-3 mb-3">
                                        <li>Pictogramas libres (blanco y negro o paleta simple).</li>
                                        <li>Cartulina y velcro; temporizador visual; llavero con &ldquo;espera&rdquo;, &ldquo;terminado&rdquo;, &ldquo;ba&ntilde;o&rdquo;.</li>
                                    </ul>
                                    <hr>
                                    <h4 class="h6 mb-2">7) Variantes r&aacute;pidas (mismo prompt)</h4>
                                    <ul class="ps-3 mb-0">
                                        <li>Aseo: &laquo;Ir al ba&ntilde;o de clase&raquo;.</li>
                                        <li>Taller: &laquo;Ponerse bata y recoger herramientas&raquo;.</li>
                                        <li>Comedor: &laquo;Hacer la fila y sentarse&raquo;.</li>
                                        <li>Salidas: &laquo;Preparar mochila antes de ir a casa&raquo;.</li>
                                    </ul>
                                </div>                                
                        </div>
                                <div id="start-pack-carta" class="collapse mt-4">
                                    <div class="ponente-note">
                                        <h3 class="h5 mb-3">Prompt &ldquo;Carta Autom&aacute;gica 4Inclusion&rdquo;</h3>
                                        <p class="mb-3"><strong>Rol:</strong> Eres mi asistente de redacci&oacute;n. Rellena una carta a familias usando la plantilla y las reglas de m&aacute;s abajo.</p>
                                        <p class="mb-3"><strong>Objetivo:</strong> producir una carta clara, breve y con tono adecuado seg&uacute;n la calificaci&oacute;n.</p>
                                        <p class="mb-2"><strong>Datos:</strong></p>
                                        <ul class="ps-3 mb-3">
                                            <li><strong>Nombre destinatario/a:</strong> [NOMBRE]</li>
                                            <li><strong>Estudiante:</strong> [ESTUDIANTE]</li>
                                            <li><strong>Asignatura:</strong> ASIGNATURA</li>
                                            <li><strong>Calificaci&oacute;n:</strong> CALIFICACI&Oacute;N (1&ndash;10 o &ldquo;Insuficiente/Suficiente/Notable/Sobresaliente&rdquo;)</li>
                                            <li><strong>Fecha:</strong> FECHA (si no la indicas, usa hoy en formato largo, Espa&ntilde;a)</li>
                                            <li><strong>Medio:</strong> [correo / carta impresa / WhatsApp]</li>
                                            <li><strong>Tono:</strong> [formal / cercano / muy cercano]</li>
                                            <li><strong>Extra (opcional):</strong> [breve motivo o comentario]</li>
                                        </ul>
                                        <h4 class="h6 mb-2">Plantilla m&iacute;nima</h4>
                                        <ul class="ps-3 mb-3">
                                            <li>Saludo personalizado</li>
                                            <li>Fecha y asunto (l&iacute;nea corta)</li>
                                            <li>Resultado (decir la calificaci&oacute;n)</li>
                                            <li>Mensaje adaptado a la calificaci&oacute;n</li>
                                            <li>Siguientes pasos (si procede)</li>
                                            <li>Despedida acorde</li>
                                            <li>Firma del centro/docente</li>
                                        </ul>
                                        <h4 class="h6 mb-2">Reglas de tono seg&uacute;n calificaci&oacute;n</h4>
                                        <ul class="ps-3 mb-3">
                                            <li><strong>Insuficiente / 1&ndash;4:</strong> tono firme y emp&aacute;tico. Incluye plan de mejora con 3 acciones concretas y oferta de reuni&oacute;n. Despedida motivadora.</li>
                                            <li><strong>Suficiente / 5&ndash;6:</strong> reconocimiento + 2 recomendaciones para consolidar. Despedida cordial.</li>
                                            <li><strong>Notable / 7&ndash;8:</strong> felicitaci&oacute;n + 2 retos de ampliaci&oacute;n. Despedida entusiasta y cercana.</li>
                                            <li><strong>Sobresaliente / 9&ndash;10:</strong> felicitaci&oacute;n destacada + propuesta de enriquecimiento (taller, mentor&iacute;a, concurso). Despedida celebrativa.</li>
                                        </ul>
                                        <h4 class="h6 mb-2">Estilo y formato</h4>
                                        <ul class="ps-3 mb-3">
                                            <li>Espa&ntilde;ol (Espa&ntilde;a), lectura f&aacute;cil (frases de 8&ndash;15 palabras).</li>
                                            <li>P&aacute;rrafos cortos (m&aacute;ximo 4 l&iacute;neas).</li>
                                            <li>Si el medio es &ldquo;WhatsApp&rdquo;, incluye asunto corto y versi&oacute;n resumida (&le; 320 caracteres).</li>
                                            <li>No incluyas datos sensibles.</li>
                                            <li>Cierra con firma: &ldquo;[DOCENTE] &ndash; [CENTRO] &ndash; [Contacto]&rdquo;.</li>
                                        </ul>
                                        <h4 class="h6 mb-2">Salida esperada</h4>
                                        <ol class="mb-0">
                                            <li>Asunto (m&aacute;x. 60 caracteres).</li>
                                            <li>Carta completa.</li>
                                            <li>P.D. con enlaces o recursos si procede.</li>
                                            <li>Versi&oacute;n corta (si medio = WhatsApp).</li>
                                            <li>Checklist de 4 &iacute;tems: calificaci&oacute;n correcta, tono adecuado, siguientes pasos, despedida.</li>
                                        </ol>
                                    </div>
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
