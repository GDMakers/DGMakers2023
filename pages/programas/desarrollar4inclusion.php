<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Desarrollar 4Inclusion · Fase de Desarrollo y Planificaci&oacute;n</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Gu&iacute;a para la fase de desarrollo del programa 4Inclusion" name="description">

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
        .dev-hero {
            background: linear-gradient(135deg, #001f3f 0%, #015183 70%, rgba(1, 81, 131, 0.85) 100%);
            position: relative;
            overflow: hidden;
        }

        .dev-hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: url("../../img/4Inclusion/DGM4Inclusion.png") center/cover no-repeat;
            opacity: 0.18;
            mix-blend-mode: screen;
        }

        .dev-hero .container {
            position: relative;
            z-index: 1;
        }

        .dev-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.35rem 0.9rem;
            border-radius: 999px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            color: #fff;
            margin: 0.2rem;
        }

        .dev-card {
            background: #ffffff;
            border-radius: 1.5rem;
            padding: 2rem;
            box-shadow: 0 1.8rem 3.2rem rgba(1, 81, 131, 0.12);
            border: 1px solid rgba(1, 81, 131, 0.1);
        }

        .dev-card--soft {
            background: linear-gradient(135deg, rgba(1, 81, 131, 0.08), rgba(1, 81, 131, 0.02));
        }

        .dev-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .dev-list li {
            position: relative;
            padding-left: 1.75rem;
            margin-bottom: 0.75rem;
        }

        .dev-list li::before {
            content: "•";
            position: absolute;
            left: 0;
            top: 0;
            color: #015183;
            font-weight: 700;
        }

        .dev-table-wrap {
            overflow-x: auto;
        }

        .dev-table thead {
            background: #015183;
            color: #ffffff;
        }

        .dev-table th {
            white-space: nowrap;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .dev-table tbody tr:nth-child(even) {
            background: rgba(1, 81, 131, 0.04);
        }

        .dev-table tbody tr.is-completed {
            background: rgba(255, 138, 0, 0.15);
        }

        .dev-table tbody tr.is-completed td {
            border-top: 2px solid rgba(255, 138, 0, 0.45);
            border-bottom: 2px solid rgba(255, 138, 0, 0.45);
            font-weight: 600;
            color: #f47d20;
        }

        .dev-divider {
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, rgba(1, 81, 131, 0), rgba(1, 81, 131, 0.35), rgba(1, 81, 131, 0));
            margin: 2.5rem 0;
        }

        .dev-tag {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.25rem 0.8rem;
            border-radius: 999px;
            background: rgba(1, 81, 131, 0.08);
            color: #015183;
            font-weight: 600;
            margin-right: 0.35rem;
            margin-bottom: 0.35rem;
        }
    </style>
</head>

<body>
    <!-- Menú común -->
    <?php
        $img = "../..";
        $pages = "..";
        $index = "../..";
        include "../../menu.php";
    ?>

    <div class="container-fluid dev-hero py-5 mb-5 text-white">
        <div class="container py-5">
            <p class="text-uppercase fw-semibold mb-2">Fase de desarrollo y planificaci&oacute;n</p>
            <h1 class="display-4 mb-3">Desarrollar 4Inclusion</h1>
            <p class="lead mb-4">Conectamos aprendizajes de las jornadas con decisiones concretas: reflexionamos, redefinimos enfoque, calendarizamos talleres y proyectamos las pr&oacute;ximas jornadas.</p>
            <div>
                <span class="dev-pill"><i class="bi bi-chat-dots"></i> Reflexi&oacute;n guiada</span>
                <span class="dev-pill"><i class="bi bi-shuffle"></i> Cambios de enfoque</span>
                <span class="dev-pill"><i class="bi bi-calendar-event"></i> Planificaci&oacute;n de talleres</span>
                <span class="dev-pill"><i class="bi bi-lightning-charge"></i> Acciones inmediatas</span>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-start" id="reflexion">
                <div class="col-lg-7">
                    <div class="dev-card">
                        <h6 class="section-title bg-white text-start text-primary pe-3">1. Analizando el camino recorrido</h6>
                        <h2 class="mb-3">Reflexiones sobre las Jornadas 4Inclusion</h2>
                        <p>Espacio para una conversaci&oacute;n honesta (no encuesta). Se puede trabajar en peque&ntilde;os grupos y cerrar en plenario con highlights.</p>
                        <ul class="dev-list">
                            <li>&iquest;Qu&eacute; momento o actividad te sorprendi&oacute; m&aacute;s o te hizo sonre&iacute;r especialmente?</li>
                            <li>&iquest;Hubo alg&uacute;n taller o interacci&oacute;n que cambiara tu forma de ver la colaboraci&oacute;n entre centros de Educaci&oacute;n Especial y Secundaria? &iquest;C&oacute;mo?</li>
                            <li>Si pudieras describir las jornadas con una sola palabra, &iquest;cu&aacute;l ser&iacute;a y por qu&eacute;?</li>
                            <li>&iquest;Qu&eacute; crees que fue lo m&aacute;s valioso que se llevaron los estudiantes (EE y Secundaria) de esta experiencia?</li>
                            <li>&iquest;Hay algo que, con lo aprendido, har&iacute;amos diferente si organiz&aacute;ramos unas jornadas similares?</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="dev-card dev-card--soft h-100">
                        <h5 class="mb-3">Din&aacute;mica sugerida</h5>
                        <ol class="mb-3">
                            <li>Trabajo en grupos mixtos (10&prime;).</li>
                            <li>Selecci&oacute;n de aprendizajes clave (5&prime;).</li>
                            <li>Puesta en com&uacute;n y acuerdos (10&prime;).</li>
                        </ol>
                        <p class="mb-0">Objetivo: sintetizar insights emocionales y operativos que inspiren la siguiente fase.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light" id="cambios">
        <div class="container">
            <div class="dev-card">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <h6 class="section-title bg-white text-start text-primary pe-3">2. Cambios de enfoque</h6>
                        <h2 class="mb-3">Antes &harr; Despu&eacute;s</h2>
                        <p>Contrastamos percepciones iniciales con lo que ocurre tras convivir en las jornadas.</p>
                    </div>
                    <div class="col-lg-7">
                        <ul class="dev-list">
                            <li><strong>Antes:</strong> &iquest;qu&eacute; cre&iacute;as que era 4Inclusion? <strong>Despu&eacute;s:</strong> &iquest;qu&eacute; es ahora para ti?</li>
                            <li>&iquest;Cu&aacute;l era la principal expectativa o preocupaci&oacute;n antes del encuentro?</li>
                            <li>Tras ver a los estudiantes interactuar, &iquest;qu&eacute; aspecto gan&oacute; fuerza o cambi&oacute; tu perspectiva?</li>
                            <li>Si 4Inclusion fuera una planta, &iquest;qu&eacute; “semilla” plantamos con estas jornadas y c&oacute;mo esperamos que crezca?</li>
                            <li>&iquest;Qu&eacute; nueva oportunidad o ventana se abre tras esta experiencia?</li>
                            <li>&iquest;Qu&eacute; nos impulsa ahora con m&aacute;s fuerza para llevar 4Inclusion al siguiente nivel?</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5" id="talleres">
        <div class="container">
            <div class="row g-4 mb-4">
                <div class="col-lg-8">
                    <h6 class="section-title bg-white text-start text-primary pe-3">3. Planificando los pr&oacute;ximos pasos</h6>
                    <h2 class="mb-3">Talleres por parejas de centros</h2>
                    <p>Organiza la ejecuci&oacute;n en parejas (centro solicitante + centro impartidor) y comparte la informaci&oacute;n clave en el plenario.</p>
                </div>
                <div class="col-lg-4">
                    <div class="dev-card dev-card--soft h-100">
                        <p class="mb-2 fw-semibold">Checklist r&aacute;pido</p>
                        <div>
                            <span class="dev-tag"><i class="bi bi-people"></i> Parejas</span>
                            <span class="dev-tag"><i class="bi bi-geo"></i> Espacios</span>
                            <span class="dev-tag"><i class="bi bi-tools"></i> Equipos</span>
                            <span class="dev-tag"><i class="bi bi-clock"></i> Fechas</span>
                        </div>
                        <p class="mb-0 mt-2">Capturemos compromisos en caliente para evitar cuellos de botella.</p>
                    </div>
                </div>
            </div>

            <div class="dev-card mb-4">
                <div class="dev-table-wrap">
                    <table class="table dev-table mb-0 align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Taller</th>
                                <th scope="col">Centro solicitante</th>
                                <th scope="col">Centro impartidor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="is-completed">
                                <td>Radio (La Chula Radio)</td>
                                <td>IES Alc&aacute;ntara</td>
                                <td>CEE Eusebio</td>
                            </tr>
                            <tr>
                                <td>Bombas de semilla</td>
                                <td>IES Alc&aacute;ntara</td>
                                <td>CEPEE Eusebio</td>
                            </tr>
                            <tr>
                                <td>Radio</td>
                                <td>IES Sierra Minera</td>
                                <td>CEPEE Eusebio</td>
                            </tr>
                            <tr>
                                <td>Audacity</td>
                                <td>IES Ca&ntilde;ada</td>
                                <td>IES Floridablanca</td>
                            </tr>
                            <tr>
                                <td>Chapas</td>
                                <td>CEIP Mariano Aroca</td>
                                <td>IES Floridablanca</td>
                            </tr>
                            <tr>
                                <td>Jab&oacute;n casero</td>
                                <td>Las Boqueras</td>
                                <td>IES Floridablanca</td>
                            </tr>
                            <tr>
                                <td>Danza</td>
                                <td>CEIP Mariano Aroca</td>
                                <td>IES Floridablanca + CEE Eusebio</td>
                            </tr>
                            <tr>
                                <td>Corte l&aacute;ser</td>
                                <td>IES Ca&ntilde;ada</td>
                                <td>IES Alc&aacute;ntara</td>
                            </tr>
                            <tr>
                                <td>Arte</td>
                                <td>CEE Eusebio</td>
                                <td>IES Alc&aacute;ntara</td>
                            </tr>
                            <tr>
                                <td>Cortadora l&aacute;ser</td>
                                <td>CEE Eusebio</td>
                                <td>IES Alc&aacute;ntara</td>
                            </tr>
                            <tr>
                                <td>Dise&ntilde;o 3D Tinkercad</td>
                                <td>Marqu&eacute;s de los V&eacute;lez</td>
                                <td>IES Alc&aacute;ntara</td>
                            </tr>
                            <tr>
                                <td>Lumio</td>
                                <td>CEE Eusebio</td>
                                <td>IES Alc&aacute;ntara</td>
                            </tr>
                            <tr>
                                <td>Magia con ciencia</td>
                                <td>CEE Eusebio</td>
                                <td>IES Alc&aacute;ntara</td>
                            </tr>
                            <tr>
                                <td>Minecraft</td>
                                <td>Ciudad de la Paz</td>
                                <td>IES Alc&aacute;ntara</td>
                            </tr>
                            <tr>
                                <td>Minecraft</td>
                                <td>Marqu&eacute;s de los V&eacute;lez</td>
                                <td>IES Alc&aacute;ntara</td>
                            </tr>
                            <tr>
                                <td>Podcast</td>
                                <td>CEE Eusebio</td>
                                <td>IES Alc&aacute;ntara</td>
                            </tr>
                            <tr>
                                <td>Taller de hacer chapas</td>
                                <td>CEE Eusebio</td>
                                <td>IES Alc&aacute;ntara</td>
                            </tr>
                            <tr>
                                <td>Teatro</td>
                                <td>CEE Eusebio</td>
                                <td>IES Alc&aacute;ntara</td>
                            </tr>
                            <tr>
                                <td>Tinkercard</td>
                                <td>CEE Eusebio</td>
                                <td>IES Alc&aacute;ntara</td>
                            </tr>
                            <tr>
                                <td>Doblage</td>
                                <td>Las Boqueras</td>
                                <td>IES Ca&ntilde;ada</td>
                            </tr>
                            <tr>
                                <td>Escaneado 3D</td>
                                <td>IES Alc&aacute;ntara</td>
                                <td>IES Ca&ntilde;ada</td>
                            </tr>
                            <tr>
                                <td>Uso de pantallas a nivel b&aacute;sico</td>
                                <td>Las Boqueras</td>
                                <td>IES Ca&ntilde;adas</td>
                            </tr>
                            <tr>
                                <td>Fotogrametr&iacute;a</td>
                                <td>IES Alc&aacute;ntara</td>
                                <td>IES Flori</td>
                            </tr>
                            <tr>
                                <td>Doblage</td>
                                <td>CEE Eusebio</td>
                                <td>IES Floridablanca</td>
                            </tr>
                            <tr>
                                <td>Doblage</td>
                                <td>CEIP Mariano Aroca</td>
                                <td>IES Floridablanca</td>
                            </tr>
                            <tr>
                                <td>Gafas R.V.</td>
                                <td>IES Alc&aacute;ntara</td>
                                <td>IES Floridablanca</td>
                            </tr>
                            <tr>
                                <td>Microorganismos</td>
                                <td>CEIP Mariano Aroca</td>
                                <td>IES Floridablanca</td>
                            </tr>
                            <tr>
                                <td>PianoTEA</td>
                                <td>IES Floridablanca</td>
                                <td>IES Mariano Aroca</td>
                            </tr>
                            <tr>
                                <td>M&uacute;sica adaptada en aulario del IES</td>
                                <td>Ciudad de la Paz</td>
                                <td>IES Marqu&eacute;s de los V&eacute;lez</td>
                            </tr>
                            <tr>
                                <td>App Inventor</td>
                                <td>IES Alc&aacute;ntara</td>
                                <td>(A definir)</td>
                            </tr>
                            <tr>
                                <td>Danza</td>
                                <td>IES Floridablanca</td>
                                <td>(A definir)</td>
                            </tr>
                            <tr>
                                <td>Doblage</td>
                                <td>IES Alc&aacute;ntara</td>
                                <td>(A definir)</td>
                            </tr>
                            <tr>
                                <td>Entornos 3D y realidad virtual</td>
                                <td>IES Ca&ntilde;ada</td>
                                <td>(A definir)</td>
                            </tr>
                            <tr>
                                <td>Gafas R.V.</td>
                                <td>CEIP Mariano Aroca</td>
                                <td>(A definir)</td>
                            </tr>
                            <tr>
                                <td>Impresora 3D</td>
                                <td>IES Sierra Minera</td>
                                <td>(A definir)</td>
                            </tr>
                            <tr>
                                <td>Minecrat</td>
                                <td>IES Sierra Minera</td>
                                <td>(A definir)</td>
                            </tr>
                            <tr>
                                <td>Modelado 3D</td>
                                <td>CEIP Mariano Aroca</td>
                                <td>(A definir)</td>
                            </tr>
                            <tr>
                                <td>Realidad virtual</td>
                                <td>CEE Enrique Viviente</td>
                                <td>(A definir)</td>
                            </tr>
                            <tr>
                                <td>Unity y Acore</td>
                                <td>IES Ca&ntilde;ada</td>
                                <td>(A definir)</td>
                            </tr>
                            <tr>
                                <td>Uso de croma</td>
                                <td>IES Sierra Minera</td>
                                <td>(A definir)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="dev-card">
                <h4 class="mb-3">C&oacute;mo fijar fechas y participaci&oacute;n (proceso en 15&prime;)</h4>
                <ul class="dev-list mb-0">
                    <li>&iquest;Cu&aacute;l es la mejor fecha o rango de fechas para realizar el taller en el centro solicitante?</li>
                    <li>&iquest;Cu&aacute;ntos estudiantes participar&aacute;n por sesi&oacute;n? (n&uacute;mero estimado para planificar recursos).</li>
                    <li>&iquest;Necesitamos alg&uacute;n recurso o material especial que deba aportar el centro impartidor?</li>
                    <li>&iquest;Hay requisitos espec&iacute;ficos (espacios, adaptaciones, etc.) que el centro impartidor deba conocer?</li>
                    <li>&iquest;C&oacute;mo coordinaremos el contacto previo, contenidos y log&iacute;stica para asegurar el &eacute;xito del taller?</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light" id="jornadas">
        <div class="container">
            <div class="dev-card">
                <h6 class="section-title bg-white text-start text-primary pe-3">4. Pr&oacute;ximas Jornadas 4Inclusion (abril)</h6>
                <h2 class="mb-3">Visionando el futuro</h2>
                <p>Planificamos el siguiente gran encuentro con foco en fechas, sedes, talleres y equipos docentes.</p>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <h5>Propuestas de fechas</h5>
                        <ul class="dev-list">
                            <li>&iquest;Qu&eacute; d&iacute;as o semanas de abril se ajustan mejor al calendario?</li>
                            <li>&iquest;Jornada completa o varias sesiones distribuidas?</li>
                        </ul>
                        <h5 class="mt-4">Lugar</h5>
                        <ul class="dev-list">
                            <li>&iquest;D&oacute;nde organizar para maximizar participaci&oacute;n y experiencia? (centro anfitri&oacute;n, espacio externo, formato rotatorio)</li>
                        </ul>
                        <h5 class="mt-4">Talleres a ofrecer</h5>
                        <ul class="dev-list">
                            <li>&iquest;Qu&eacute; talleres consolidamos y cu&aacute;les nuevos podemos incorporar?</li>
                            <li>&iquest;C&oacute;mo garantizar que la oferta sea atractiva y accesible para ambos tipos de alumnado?</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h5>Equipos de docentes</h5>
                        <ul class="dev-list">
                            <li>&iquest;Qu&eacute; profesorado puede liderar o apoyar la organizaci&oacute;n y desarrollo?</li>
                            <li>&iquest;C&oacute;mo favorecemos la creaci&oacute;n de equipos inter-centro?</li>
                        </ul>
                        <h5 class="mt-4">Formaci&oacute;n de docentes</h5>
                        <ul class="dev-list">
                            <li>&iquest;Qu&eacute; formaci&oacute;n necesitamos para involucrar a m&aacute;s docentes y escalar 4Inclusion?</li>
                            <li>&iquest;C&oacute;mo dise&ntilde;ar un plan para invitar a nuevos centros a la red?</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5" id="cierre">
        <div class="container">
            <div class="dev-card">
                <h6 class="section-title bg-white text-start text-primary pe-3">5. Conclusi&oacute;n y mirada al horizonte</h6>
                <h2 class="mb-3">Mesa redonda final</h2>
                <p>Clausura reflexiva para capturar compromisos y mantener la energ&iacute;a.</p>
                <ul class="dev-list mb-4">
                    <li>Si tuvi&eacute;ramos que elegir una &ldquo;palabra m&aacute;gica&rdquo; para 4Inclusion este a&ntilde;o, &iquest;cu&aacute;l ser&iacute;a?</li>
                    <li>&iquest;Cu&aacute;l es el mayor desaf&iacute;o por delante y c&oacute;mo lo convertimos en oportunidad?</li>
                    <li>Si imaginamos 4Inclusion dentro de un a&ntilde;o, &iquest;qu&eacute; logro nos gustar&iacute;a celebrar?</li>
                    <li>&iquest;Qu&eacute; compromiso personal nos llevamos hoy para impulsar la iniciativa?</li>
                    <li>Recordando la energ&iacute;a de las jornadas, &iquest;qu&eacute; mensaje final nos damos para mantener viva la ilusi&oacute;n?</li>
                </ul>
                <p class="mb-0 fw-semibold">Cerramos con acuerdos compartidos y un plan visible para sumar m&aacute;s centros, docentes y estudiantes a la red.</p>
            </div>
        </div>
    </div>

    <!-- Footer común -->
    <?php
        $img = "../..";
        $pages = "..";
        $index = "../..";
        include "../../footer.php";
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
