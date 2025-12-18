<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Alejandr&#237;a &#183; La red del conocimiento</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Proyecto Alejandr&#237;a: la palabra como tecnolog&#237;a de aprendizaje" name="description">

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
        :root {
            --alex-primary: #015183;
            --alex-soft: rgba(1, 81, 131, 0.06);
        }

        body.alex-page {
            background: #f6f9fc;
            color: #0b2f4a;
        }

        .btn-alex {
            background-color: var(--alex-primary);
            border-color: var(--alex-primary);
            color: #ffffff;
            transition: all .25s ease;
        }

        .btn-alex:hover,
        .btn-alex:focus {
            background: #ffffff;
            color: var(--alex-primary);
            border-color: var(--alex-primary);
        }

        .hero-alex {
            background: radial-gradient(circle at 15% 20%, rgba(1, 81, 131, 0.14), transparent 35%), radial-gradient(circle at 80% 0%, rgba(255, 168, 88, 0.22), transparent 42%), linear-gradient(140deg, rgba(1, 81, 131, 0.08), #ffffff);
            border-bottom: 1px solid rgba(1, 81, 131, 0.08);
        }

        .alex-card {
            background: #ffffff;
            border: 1px solid rgba(1, 81, 131, 0.12);
            border-radius: 1.25rem;
            padding: 1.6rem;
            box-shadow: 0 1.4rem 2.4rem rgba(1, 81, 131, 0.08);
            height: 100%;
        }

        .alex-pill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.4rem 1rem;
            background: var(--alex-soft);
            color: var(--alex-primary);
            border-radius: 999px;
            font-weight: 700;
            letter-spacing: 0.02em;
        }

        .alex-section {
            position: relative;
        }

        .alex-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.25rem;
        }

        .alex-list {
            margin-bottom: 0;
            padding-left: 1.1rem;
        }

        .alex-indent {
            padding-left: 2rem;
        }

        .alex-divider {
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, rgba(1, 81, 131, 0), rgba(1, 81, 131, 0.22), rgba(1, 81, 131, 0));
            margin: 1.6rem 0;
        }

        .alex-chip {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.35rem 0.85rem;
            border-radius: 0.75rem;
            background: rgba(1, 81, 131, 0.1);
            color: #0b3f63;
            font-weight: 600;
            font-size: 0.95rem;
        }

        .alex-section p {
            text-align: justify;
        }
    </style>
</head>

<body class="alex-page">
    <!-- Men&#250; com&#250;n -->
    <?php
        $img = "../../..";
        $pages = "../..";
        $index = "../../..";
        include "../../../menu.php";
    ?>

    <div class="container-fluid hero-alex py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <div class="alex-pill mb-3">La palabra al servicio de la cultura</div>
                    <h1 class="display-5 mb-3 text-uppercase">Proyecto Alejandr&#237;a</h1>
                    <p class="lead mb-4"><strong>La palabra no desaparece en el mundo tecnol&#243;gico, evoluciona.</strong> El saber ya no se almacena: se distribuye, se comparte y se comunica.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="#concepto" class="btn btn-alex">Ver concepto</a>
                        <a href="#algoritmo" class="btn btn-outline-primary">El algoritmo de trabajo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="concepto" class="container-xxl py-5 alex-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="alex-card mb-4">
                <div class="d-flex align-items-center gap-2 mb-2">
                    <span class="alex-chip"><i class="bi bi-lightning-charge"></i> Concepto</span>
                </div>
                <h3 class="mb-3">La palabra al servicio de la cultura</h3>
                
                <p class="mb-3">El aula se transforma en un espacio vivo donde el alumnado asume tres papeles esenciales:</p>
                <ul class="alex-list alex-indent mb-3">
                    <li><strong>Creador:</strong> produce conocimiento.</li>
                    <li><strong>Protagonista:</strong> aprende desde la acci&#243;n.</li>
                    <li><strong>Divulgador:</strong> comunica lo aprendido a otros.</li>
                </ul>
                <p class="mb-0">La lengua deja de ser un contenido aislado para convertirse en herramienta de pensamiento, creaci&#243;n y conexi&#243;n con la realidad.</p>
            </div>
            <div class="alex-grid">
                <div class="alex-card">
                    <h4 class="mb-3">Nuestra filosof&#237;a</h4>
                    <p class="mb-3"><strong>Aprende para ense&#241;ar. Crea para aportar y crecer.</strong></p>
                    <p class="mb-2">En Alejandr&#237;a:</p>
                    <ul class="alex-list mb-0">
                        <li>El aprendizaje no se hace para el profesor, sino para compartirlo.</li>
                        <li>El error no penaliza: impulsa la mejora.</li>
                        <li>Todo lo creado tiene valor cuando se comunica y se pone al servicio de los dem&#225;s.</li>
                        <li>El aula es un laboratorio de ideas donde ense&#241;ar y aprender forman parte del mismo proceso.</li>
                    </ul>
                </div>
                <div class="alex-card">
                    <h4 class="mb-3">ADN Alejandr&#237;a &#183; Nuestra finalidad</h4>
                    <p class="mb-2">El Proyecto Alejandr&#237;a busca:</p>
                    <ul class="alex-list mb-3">
                        <li>Mejorar la claridad en la expresi&#243;n escrita y oral.</li>
                        <li>Fomentar el rigor en el uso de fuentes y contenidos.</li>
                        <li>Crear productos que sirvan realmente para aprender.</li>
                    </ul>
                    <p class="mb-0">Apostamos por un equilibrio consciente entre lo anal&#243;gico y lo digital: el papel, la escritura y la lectura profunda como base para potenciar la creaci&#243;n digital, no para sustituirla.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="algoritmo" class="container-xxl py-5 bg-light alex-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-4">
                <span class="alex-pill">El algoritmo de trabajo</span>
                <h3 class="mt-3 mb-2">El aprendizaje se articula en grupos cooperativos con roles definidos.</h3>
                <p class="mb-0">Tres fases: situar, desarrollar y compartir.</p>
            </div>
            <div class="alex-grid">
                <div class="alex-card">
                    <h5 class="mb-2">1. Situar &#183; El reto</h5>
                    <p class="mb-0">Se plantea un desaf&#237;o conectado con el curr&#237;culo y con la realidad del alumnado.</p>
                </div>
                <div class="alex-card">
                    <h5 class="mb-2">2. Desarrollar</h5>
                    <p class="mb-0">Cada grupo avanza seg&#250;n sus habilidades, se ayuda, se complementa y refuerza sus fortalezas. Se utilizan formatos diversos: audio, v&#237;deo, escritura, soportes f&#237;sicos, herramientas digitales e IA generativa.</p>
                </div>
                <div class="alex-card">
                    <h5 class="mb-2">3. Compartir &#183; La puesta en com&#250;n</h5>
                    <p class="mb-2">Lo aprendido se comparte fuera del aula: redes, c&#243;digos QR, exposiciones, podcasts, intercambios con otros centros o proyectos intercentros.</p>
                    <p class="mb-0"><em>Porque comunicar da sentido a lo aprendido.</em></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 alex-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-4">
                <span class="alex-pill">Aplicaciones por &#225;reas</span>
                <h3 class="mt-3 mb-2">El despliegue</h3>
                <p class="mb-0">Modelos a medida para lengua, ciencias y mates. Narrativas que conectan con el mundo real.</p>
            </div>
            <div class="alex-grid">
                <div class="alex-card">
                    <h5 class="mb-2">Lengua castellana</h5>
                    <p class="mb-2"><strong>Los guardianes de los cl&#225;sicos.</strong> &#191;C&#243;mo viralizar&#237;a L&#225;zaro de Tormes sus desgracias en un hilo de redes sociales? &#191;Qu&#233; lista de reproducci&#243;n escuchar&#237;a Bernarda Alba? Usamos la tecnolog&#237;a para dialogar con la tradici&#243;n.</p>
                    <ul class="alex-list mb-0">
                        <li><strong>Situar:</strong> detectamos problemas eternos (pobreza, noticias falsas) en textos antiguos.</li>
                        <li><strong>Desarrollar:</strong> creamos desde &ldquo;rese&#241;as podcast&rdquo; de un minuto hasta &ldquo;knolling literario&rdquo; (bodegones visuales de la obra) o batallas de versos con ayuda de IA.</li>
                        <li><strong>Compartir:</strong> todo converge en una presentaci&#243;n digital interactiva y accesible mediante QRs.</li>
                    </ul>
                </div>
                <div class="alex-card">
                    <h5 class="mb-2">F&#237;sica y qu&#237;mica</h5>
                    <p class="mb-2"><strong>Ciencia contada, ciencia entendida.</strong> La ciencia no se memoriza, se comunica. Transformamos cada unidad en una misi&#243;n de divulgaci&#243;n cient&#237;fica.</p>
                    <ul class="alex-list mb-0">
                        <li><strong>Situar:</strong> leemos divulgaci&#243;n para entender el vocabulario y lanzamos un reto: &ldquo;&#191;qu&#233; ocurre aqu&#237; y c&#243;mo me lo explicas?&rdquo;</li>
                        <li><strong>Desarrollar:</strong> traducimos conceptos abstractos a narrativas. Desde un &ldquo;cuento cient&#237;fico&rdquo; donde los &#225;tomos tienen personalidad, hasta un podcast de &ldquo;minuto cient&#237;fico&rdquo; o una infograf&#237;a de alto impacto.</li>
                        <li><strong>Compartir:</strong> defensa oral con soporte visual minimalista. Si no eres capaz de explicarlo de forma sencilla, es que no lo has entendido bien.</li>
                    </ul>
                </div>
                <div class="alex-card">
                    <h5 class="mb-2">Matem&#225;ticas</h5>
                    <p class="mb-2"><strong>Narrativa de datos.</strong> En mates el resultado es solo el final de la historia; lo importante es el viaje del razonamiento. Pasamos del problema abstracto a la situaci&#243;n real explicada.</p>
                    <ul class="alex-list mb-0">
                        <li><strong>Situar:</strong> el alumnado trae la realidad al aula (deporte, econom&#237;a, mapas). Dise&#241;amos la pregunta matem&#225;tica sobre un contexto vivo.</li>
                        <li><strong>Desarrollar:</strong> creamos &ldquo;historias de pensamiento&rdquo;. Un v&#237;deo tutorial resolviendo el enigma, un p&#243;ster sobre &ldquo;c&#243;mo detectar errores t&#237;picos&rdquo; o un informe de debug de procedimientos.</li>
                        <li><strong>Compartir:</strong> mini-defensa oral. Explicar el proceso en voz alta ordena las ideas, detecta fallos y consolida la l&#243;gica matem&#225;tica.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light alex-section">
        <div class="container text-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="alex-pill mb-3">Proyecto Alejandr&#237;a</div>
            <h3 class="mb-3">Publicamos para que otros aprendan</h3>
            <p class="mb-2">Alejandr&#237;a es comunidad.</p>
            <p class="mb-4">Un proyecto que conecta aulas, centros y personas. Un espacio donde la palabra construye identidad, pensamiento cr&#237;tico y cultura compartida.</p>
            <a href="#concepto" class="btn btn-alex">Volver al inicio</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../lib/wow/wow.min.js"></script>
    <script src="../../../lib/easing/easing.min.js"></script>
    <script src="../../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../../lib/counterup/counterup.min.js"></script>
    <script src="../../../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../../lib/isotope/isotope.pkgd.min.js"></script>
    <script src="../../../lib/lightbox/js/lightbox.min.js"></script>
    <script src="../../../js/main.js"></script>
</body>

</html>
