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
                    <div class="alex-pill mb-3">La red del conocimiento</div>
                    <h1 class="display-5 mb-3">Proyecto Alejandr&#237;a</h1>
                    <p class="lead mb-4"><strong>La palabra como tecnolog&#237;a de aprendizaje.</strong> Leemos para pensar, pensamos para escribir y publicamos para que otros aprendan.</p>
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
                <h3 class="mb-3">Alejandr&#237;a 2025 rompe los muros del aula</h3>
                <p class="mb-0">Antes el saber se acumulaba; hoy se distribuye. Convertimos la clase en una redacci&#243;n de contenidos donde cada estudiante activa tres roles: autor&#237;a, edici&#243;n y divulgaci&#243;n.</p>
            </div>
            <div class="alex-grid">
                <div class="alex-card">
                    <h4 class="mb-3">Nuestra filosof&#237;a</h4>
                    <ul class="alex-list">
                        <li><strong>Domina lo que cuentas:</strong> ense&#241;ar es la mejor forma de aprender.</li>
                        <li><strong>Audiencia real:</strong> no hacemos &ldquo;trabajos para el profesor&rdquo;, creamos activos digitales para el mundo.</li>
                        <li><strong>En fase beta:</strong> el error no penaliza, es un dato que nos ayuda a mejorar la siguiente versi&#243;n.</li>
                        <li><strong>Efecto red:</strong> lo que funciona aqu&#237;, se comparte y replica en otros centros v&#237;a <strong>Conecta 37</strong>.</li>
                    </ul>
                </div>
                <div class="alex-card">
                    <h4 class="mb-3">ADN Alejandr&#237;a (qu&#233; medimos)</h4>
                    <ol class="mb-0">
                        <li><strong>Claridad:</strong> se entiende a la primera, sin ruido.</li>
                        <li><strong>Rigor:</strong> datos exactos, citas correctas y vocabulario preciso.</li>
                        <li><strong>Estructura:</strong> inicio potente, desarrollo l&#243;gico y cierre memorable.</li>
                        <li><strong>Impacto:</strong> &#191;sirve para algo? &#191;genera conversaci&#243;n? &#191;es compartible en <strong>Conecta 37</strong>?</li>
                    </ol>
                    <div class="alex-divider"></div>
                    <p class="mb-0"><strong>Estilo visual:</strong> minimalismo funcional. Poco texto, mucha idea, dise&#241;o limpio. Hibridamos lo mejor del papel (bocetos, pensamiento profundo) con la potencia de lo digital (alcance, multimedia).</p>
                </div>
            </div>
        </div>
    </div>

    <div id="algoritmo" class="container-xxl py-5 bg-light alex-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-4">
                <span class="alex-pill">El algoritmo de trabajo</span>
                <h3 class="mt-3 mb-2">Tres fases, siete personas m&#225;ximo, un objetivo com&#250;n.</h3>
                <p class="mb-0">Situar, desarrollar, compartir. Cada fase con foco y roles definidos.</p>
            </div>
            <div class="alex-grid">
                <div class="alex-card">
                    <h5 class="mb-2">1. Situar (el detonante)</h5>
                    <p class="mb-2">Contexto, reto y prop&#243;sito. No empezamos con teor&#237;a, empezamos con una pregunta potente. Definimos la misi&#243;n y a qui&#233;n le vamos a hablar. Es el momento de conectar el contenido curricular con la realidad palpable.</p>
                </div>
                <div class="alex-card">
                    <h5 class="mb-2">2. Desarrollar (el laboratorio)</h5>
                    <p class="mb-0">Creaci&#243;n y prototipado. Equipos de <strong>m&#225;ximo 7 personas</strong> con roles especializados: gui&#243;n, voz, t&#233;cnica, dise&#241;o y direcci&#243;n. Aqu&#237; se cocina el contenido en formatos &#225;giles: audio, v&#237;deo, narrativa transmedia o IA generativa.</p>
                </div>
                <div class="alex-card">
                    <h5 class="mb-2">3. Compartir (el legado)</h5>
                    <p class="mb-2">Publicaci&#243;n e impacto. El conocimiento no se queda en el disco duro. Se libera.</p>
                    <ul class="alex-list">
                        <li><strong>Repositorio Alejandr&#237;a:</strong> una revista digital viva.</li>
                        <li><strong>QRs f&#237;sicos:</strong> las paredes del centro hablan a trav&#233;s de los dispositivos m&#243;viles.</li>
                        <li><strong>Conecta 37:</strong> intercambio de &ldquo;episodios espejo&rdquo; con otros centros para globalizar el aprendizaje.</li>
                    </ul>
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
                    <p class="mb-2"><strong>Hackeando a los cl&#225;sicos.</strong> &#191;C&#243;mo viralizar&#237;a L&#225;zaro de Tormes sus desgracias en un hilo de redes sociales? &#191;Qu&#233; lista de reproducci&#243;n escuchar&#237;a Bernarda Alba? Usamos la tecnolog&#237;a para dialogar con la tradici&#243;n.</p>
                    <ul class="alex-list mb-0">
                        <li><strong>Situar:</strong> detectamos problemas eternos (pobreza, noticias falsas, amor t&#243;xico) en textos antiguos.</li>
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
            <p class="mb-4">Materiales vivos, con licencia para iterar. Cada versi&#243;n es una oportunidad de aprendizaje compartido.</p>
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
