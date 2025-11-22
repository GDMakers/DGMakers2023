<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Math-Hacker C37 &#183; Ecuaciones con IA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Protocolo Math-Hacker para ecuaciones con IA" name="description">

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

        table.ia-compare {
            width: 100%;
            border-collapse: collapse;
        }

        table.ia-compare th,
        table.ia-compare td {
            border: 1px solid rgba(1, 81, 131, 0.12);
            padding: 0.75rem;
            vertical-align: top;
        }

        table.ia-compare th {
            background: rgba(1, 81, 131, 0.06);
            color: #0a558c;
        }

        table.ia-compare td:nth-child(2) {
            background: rgba(10, 85, 140, 0.03);
        }

        table.ia-compare td:nth-child(3) {
            background: linear-gradient(135deg, rgba(255, 127, 80, 0.08), rgba(255, 127, 80, 0.02));
        }

        @media (max-width: 767.98px) {
            .hero-conecta h1 {
                font-size: 1.8rem;
            }

            table.ia-compare th,
            table.ia-compare td {
                font-size: 0.95rem;
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
            <span class="text-uppercase text-white-50">Math-Hacker C37</span>
            <h1 class="display-5 text-white mb-3">Matem&#225;ticas Aumentadas con IA</h1>
            <p class="lead text-white mb-0"><strong>Tu inteligencia dirige. La Artificial te asiste.</strong> El m&#233;todo que transforma la resoluci&#243;n de problemas: la IA no resuelve por ti, act&#250;a como copiloto para detectar bugs, desbloquear niveles y potenciar tu l&#243;gica.</p>
            <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
                <a href="index.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Visi&#243;n general</a>
                <a href="#protocolo" class="btn btn-outline-light animated zoomIn pt-1 pb-1">Ver protocolo</a>
            </div>
        </div>
    </div>

    <div id="protocolo" class="container-xxl py-5 ia-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-4 align-items-center mb-4">
                <div class="col-lg-7">
                    <div class="mb-3">
                        <span class="ia-pill d-inline-block mb-2">El protocolo</span>
                        <h2 class="mb-2">Protocolo de sincronizaci&#243;n: c&#243;mo usar tu copiloto digital</h2>
                        <p class="mb-0">Sigue esta secuencia de arranque para hackear cualquier problema matem&#225;tico.</p>
                    </div>
                    <div class="ia-card">
                        <h5 class="mb-2 ia-accent">Visi&#243;n r&#225;pida</h5>
                        <p class="mb-0">Arranque humano, validaci&#243;n de datos, kit de desbloqueo, depuraci&#243;n, test de Turing inverso y certificaci&#243;n final. La IA audita, sugiere y cuestiona; la decisi&#243;n y el c&#243;digo final siempre son del alumno.</p>
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <img src="img/MHIA1.png" alt="Protocolo Math-Hacker con IA" class="img-fluid rounded-3 shadow-sm">
                </div>
            </div>
            <div class="ia-grid">
                <div class="ia-card">
                    <h5 class="mb-2 ia-accent">1. Arranque en fr&#237;o (Modo Humano)</h5>
                    <p class="mb-2"><strong>Primero, tu cerebro.</strong> Antes de encender la IA, ejecuta tu propio sistema.</p>
                    <ul class="ia-list">
                        <li>Lee el problema y reescr&#237;belo mentalmente.</li>
                        <li>Ejecuta el <em>Escaneo de Datos</em>: actores, cantidades, tiempos.</li>
                        <li>Regla de oro: sin esto, la IA no se activa.</li>
                    </ul>
                </div>
                <div class="ia-card">
                    <h5 class="mb-2 ia-accent">2. Validaci&#243;n de datos (Data Check)</h5>
                    <p class="mb-2"><strong>IA para auditar, no para solucionar.</strong></p>
                    <ul class="ia-list">
                        <li>Env&#237;a tu escaneo a la IA: &ldquo;&#191;Es s&#243;lido o ves alg&#250;n fallo l&#243;gico?&rdquo;</li>
                        <li>Objetivo: confirmar la base antes de construir.</li>
                    </ul>
                </div>
                <div class="ia-card">
                    <h5 class="mb-2 ia-accent">3. Kit de desbloqueo (Power-ups)</h5>
                    <p class="mb-2"><strong>Si te atascas, pide soportes, no respuestas.</strong></p>
                    <ul class="ia-list">
                        <li>Pista de sintaxis: &ldquo;&#191;Diferencia implica restar o comparar?&rdquo;</li>
                        <li>Soporte visual: &ldquo;Sugi&#233;reme una tabla o diagrama.&rdquo;</li>
                        <li>Autocompletado y clon de entrenamiento.</li>
                    </ul>
                </div>
                <div class="ia-card">
                    <h5 class="mb-2 ia-accent">4. Depuraci&#243;n de c&#243;digo</h5>
                    <p class="mb-2"><strong>Compilaci&#243;n y b&#250;squeda de errores.</strong></p>
                    <ul class="ia-list">
                        <li>La IA marca incoherencias; t&#250; corriges.</li>
                        <li>Sin ecuaciones corregidas: el c&#243;digo es tuyo.</li>
                    </ul>
                </div>
                <div class="ia-card">
                    <h5 class="mb-2 ia-accent">5. Test de Turing inverso</h5>
                    <p class="mb-2"><strong>Ens&#233;&#241;ale a la m&#225;quina.</strong></p>
                    <ul class="ia-list">
                        <li>Explica paso a paso y pide una pregunta trampa.</li>
                        <li>Objetivo: comprobar dominio real.</li>
                    </ul>
                </div>
                <div class="ia-card">
                    <h5 class="mb-2 ia-accent">6. Certificaci&#243;n humana (QA Final)</h5>
                    <p class="mb-2"><strong>La firma es tuya.</strong></p>
                    <ul class="ia-list">
                        <li>Sustituye el resultado en el problema y valida.</li>
                        <li>A&#241;ade tu Declaraci&#243;n de Uso de IA.</li>
                    </ul>
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
                <a href="#" class="btn btn-conecta37">Descargar gu&#237;a PDF</a>
                <a href="#comparativa" class="btn btn-outline-primary">Ver comparativa</a>
            </div>
        </div>
    </div>

    <div id="comparativa" class="container-xxl py-5 bg-light ia-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-4">
                <span class="ia-pill">Comparativa</span>
                <h3 class="mt-2 mb-2">Elige tu modo de juego: cl&#225;sico o Pro C37</h3>
                <p class="mb-0">Adaptamos la tecnolog&#237;a a tu estilo de aula.</p>
            </div>
            <div class="row g-4 align-items-center mb-4">
                <div class="col-md-6 text-center">
                    <img src="img/MHIATrad.png" alt="Modo tradicional Math-Hacker" class="img-fluid rounded-3 shadow-sm">
                </div>
                <div class="col-md-6 text-center">
                    <img src="img/MHIAInno.png" alt="Modo innovador Math-Hacker" class="img-fluid rounded-3 shadow-sm">
                </div>
            </div>
            <div class="ia-card">
                <div class="table-responsive">
                    <table class="ia-compare">
                        <thead>
                            <tr>
                                <th>Caracter&#237;stica</th>
                                <th>Modo Est&#225;ndar (Docente tradicional)</th>
                                <th>Modo Pro C37 (Docente innovador)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Objetivo</strong></td>
                                <td>Eficacia y orden: guion estable y seguro.</td>
                                <td>Dise&#241;o y colaboraci&#243;n: modelos conectados a proyectos reales.</td>
                            </tr>
                            <tr>
                                <td><strong>Estructura</strong></td>
                                <td>Lineal: Lectura &#8594; Planteamiento &#8594; C&#225;lculo &#8594; Comprobaci&#243;n.</td>
                                <td>C&#237;clica: fases Situar-Desarrollar-Compartir integradas en GD.</td>
                            </tr>
                            <tr>
                                <td><strong>Rol del alumno</strong></td>
                                <td>Hacker solitario con apoyo puntual de IA.</td>
                                <td>Equipo de desarrollo con roles (L&#237;der, Abogado del diablo...).</td>
                            </tr>
                            <tr>
                                <td><strong>Rol del profesor</strong></td>
                                <td>Supervisor t&#233;cnico que corrige desviaciones.</td>
                                <td>Agile Coach: gestiona tiempos, retos y prompts.</td>
                            </tr>
                            <tr>
                                <td><strong>La IA es...</strong></td>
                                <td>Tutor estructurado: revisa datos y ofrece pistas.</td>
                                <td>Copiloto 4 en 1: analista, consultor visual, compilador y coach.</td>
                            </tr>
                            <tr>
                                <td><strong>Soportes</strong></td>
                                <td>Pautados: fichas claras y guiones cerrados.</td>
                                <td>Abiertos: prototipado visual, cr&#237;tica entre pares, recursos propios.</td>
                            </tr>
                            <tr>
                                <td><strong>Producto final</strong></td>
                                <td>Cuaderno de bit&#225;cora con proceso visible.</td>
                                <td>Recurso p&#250;blico: playbooks, v&#237;deos, infograf&#237;as.</td>
                            </tr>
                            <tr>
                                <td><strong>El error es...</strong></td>
                                <td>Un fallo a corregir volviendo a fases anteriores.</td>
                                <td>Un bug interesante que se analiza y comparte.</td>
                            </tr>
                            <tr>
                                <td><strong>Evaluaci&#243;n</strong></td>
                                <td>Resultado + protocolo.</td>
                                <td>Proceso + producto y uso cr&#237;tico de IA.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-4">
                <span class="ia-pill">&#191;Qu&#233; tipo de docente eres?</span>
                <h3 class="mt-2 mb-2">Activa la versi&#243;n que quieres explorar</h3>
                <p class="mb-3 text-muted">Botones neutros hasta que selecciones. El bot&#243;n Reset limpia versi&#243;n y ejemplo.</p>
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
                <span class="ia-pill">Elige ejemplo</span>
                <h3 class="mt-2 mb-2">Selecciona contenido para ver el plan detallado</h3>
                <p class="mb-0 text-muted">Primero elige versi&#243;n; luego ejemplo. Ambos permanecen en blanco hasta que decidas.</p>
            </div>
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <button type="button" class="btn ia-subject" data-subject="ecuaciones">Ecuaciones</button>
                <button type="button" class="btn ia-subject" data-subject="enteros">Operaciones con enteros</button>
            </div>
        </div>
    </div>

    <div id="innovador" class="container-xxl py-5 bg-light ia-section ia-version">
        <div class="container wow FadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-5">
                <span class="ia-pill">Versi&#243;n innovador</span>
                <h2 class="mt-2 mb-2">Math-Hacker C37 Pro</h2>
                <p class="mb-0">Modelo para docentes innovadores: GD + IA como copiloto cr&#237;tico, dise&#241;o de modelos y productos compartibles.</p>
            </div>
        </div>
    </div>

    <div id="tradicional" class="container-xxl py-5 ia-section ia-version">
        <div class="container wow FadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-5">
                <span class="ia-pill">Versi&#243;n tradicional</span>
                <h2 class="mt-2 mb-2">Protocolo Math-Hacker v1.1</h2>
                <p class="mb-0">Modelo lineal y seguro para docentes tradicionales con IA como tutor estructurado.</p>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section ia-panel" data-version="tradicional" data-subject="ecuaciones">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-4">
                <span class="ia-pill">Docente tradicional</span>
                <h2 class="mt-2 mb-2">Ejemplo: problemas de ecuaciones</h2>
                <p class="mb-0">Protocolo Math-Hacker v1.1 &#183; Modelo lineal y seguro para docentes tradicionales con IA como tutor estructurado.</p>
            </div>
            <div class="ia-card">
                <h4 class="mb-3 ia-accent">1. Problema (input)</h4>
                <p class="mb-2">En un garaje hay coches y motos. En total hay 20 veh&#237;culos y 70 ruedas. &#191;Cu&#225;ntos coches y cu&#225;ntas motos hay?</p>
                <p class="mb-3">Aplicamos el m&#233;todo paso a paso; la IA solo revisa y da pistas.</p>
                <div class="ia-grid">
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 0 &#183; Boot</h6>
                        <ul class="ia-list">
                            <li>Objetivo claro antes de calcular.</li>
                            <li>El alumno escribe: &ldquo;Quiero saber cu&#225;ntos coches y cu&#225;ntas motos hay&rdquo;.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 1 &#183; Escaneo</h6>
                        <ul class="ia-list">
                            <li>Actores: coches (4 ruedas), motos (2 ruedas).</li>
                            <li>Totales: 20 veh&#237;culos, 70 ruedas.</li>
                            <li>Variable eficiente: x = coches; motos = 20 - x.</li>
                            <li>IA opcional: revisa lectura y definici&#243;n de x.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 2 &#183; Visual</h6>
                        <ul class="ia-list">
                            <li>20 huecos de veh&#237;culos; coches con 4 ruedas, motos con 2.</li>
                            <li>Si todos fueran motos: 40 ruedas; faltan 30 &rarr; hay coches.</li>
                            <li>IA opcional: valida el esquema, no da la ecuaci&#243;n.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 3 &#183; C&#243;digo</h6>
                        <ul class="ia-list">
                            <li>Ruedas coches: 4x</li>
                            <li>Ruedas motos: 2(20 - x)</li>
                            <li>Ecuaci&#243;n: 4x + 2(20 - x) = 70</li>
                            <li>IA opcional: solo confirma coherencia.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 4 &#183; Test</h6>
                        <ul class="ia-list">
                            <li>4x + 40 - 2x = 70 &rarr; 2x + 40 = 70 &rarr; x = 15.</li>
                            <li>Coches: 15; motos: 5.</li>
                            <li>Test: 15&#183;4 + 5&#183;2 = 70.</li>
                            <li>IA opcional: chequeo final, sin c&#225;lculo por la IA.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 5 &#183; Log</h6>
                        <ul class="ia-list">
                            <li>Log breve: qu&#233; es x, ecuaci&#243;n, resultado y comprobaci&#243;n.</li>
                            <li>Reflexi&#243;n: demuestra comprensi&#243;n, no solo n&#250;mero.</li>
                        </ul>
                    </div>
                </div>
                <div class="ia-divider"></div>
                <h6 class="mb-2 ia-accent">Kit de emergencias con IA</h6>
                <ul class="ia-list">
                    <li>Nivel 1: pista ligera sobre lenguaje (4 ruedas, 2 ruedas).</li>
                    <li>Nivel 2: autocompletado (motos = 20 - __).</li>
                    <li>Nivel 3: problema gemelo resuelto con otros n&#250;meros para copiar la estructura.</li>
                </ul>
            </div>
            <div class="ia-divider"></div>
            <div class="ia-card">
                <h4 class="mb-3 ia-accent">C&#243;mo aplicar el m&#233;todo Math-Hacker C37 con IA</h4>
                <p class="mb-2"><strong>Versi&#243;n profesor tradicional</strong></p>
                <p class="mb-3">Objetivo: guion sencillo y estable con IA como apoyo (pistas/revisi&#243;n), no como m&#225;quina de soluciones.</p>
                <div class="ia-grid">
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Prepara la clase</h6>
                        <ul class="ia-list">
                            <li>Elige 1-2 problemas adecuados.</li>
                            <li>Define datos clave y visual aceptable (recta, tabla, esquema).</li>
                            <li>Decide fases con IA: tras lectura, ecuaci&#243;n y/o al final.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Paso 1 &#183; Boot</h6>
                        <ul class="ia-list">
                            <li>Meta: nadie calcula sin saber qu&#233; contesta.</li>
                            <li>Frase: &ldquo;El problema me pide que averig&#252;e...&rdquo;</li>
                            <li>Sin n&#250;meros ni IA hasta fijar el objetivo.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Paso 2 &#183; Escaneo de datos</h6>
                        <ul class="ia-list">
                            <li>Subrayar actores/magnitudes; rodear datos.</li>
                            <li>Anotar lista de datos y definir x con precisi&#243;n.</li>
                            <li>T&#250; revisas signos y definici&#243;n de x.</li>
                            <li>IA opcional: revisar datos y definici&#243;n de x.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Paso 3 &#183; Renderizado visual</h6>
                        <ul class="ia-list">
                            <li>Recta, barras, tabla o esquema.</li>
                            <li>Regla: sin ecuaci&#243;n hasta dibujar el modelo.</li>
                            <li>IA opcional: validar el esquema.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Paso 4 &#183; Codificaci&#243;n</h6>
                        <ul class="ia-list">
                            <li>La ecuaci&#243;n nace del dibujo: expresiones y suma en una igualdad.</li>
                            <li>IA opcional: solo comprueba el planteamiento.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Paso 5 &#183; Compilar y testear</h6>
                        <ul class="ia-list">
                            <li>Resolver, sustituir y comprobar sentido.</li>
                            <li>Preguntas: &#191;tiene sentido que sea negativo?, &#191;cuadra con ruedas/edades?</li>
                            <li>IA opcional: chequeo del razonamiento, no del n&#250;mero.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Paso 6 &#183; Cierre</h6>
                        <ul class="ia-list">
                            <li>Mini log: qu&#233; es x, ecuaci&#243;n usada, c&#243;mo se comprob&#243;.</li>
                        </ul>
                    </div>
                </div>
                <div class="ia-divider"></div>
                <h6 class="mb-2 ia-accent">Kit de emergencias con IA</h6>
                <ul class="ia-list">
                    <li>Nivel 1: pista de lenguaje (&ldquo;&#191;te quita 5&rdquo; es sumar o restar?).</li>
                    <li>Nivel 2: rellena-huecos (&ldquo;Si x es..., entonces...&rdquo;).</li>
                    <li>Nivel 3: problema gemelo para copiar estructura, no resultado.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section ia-panel" data-version="tradicional" data-subject="enteros">
        <div class="container wow FadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-4">
                <span class="ia-pill">Docente tradicional</span>
                <h2 class="mt-2 mb-2">Protocolo Math-Hacker &#183; Enteros v1.0</h2>
                <p class="mb-0">Problema tipo videojuego, misma secuencia de fases.</p>
            </div>
            <div class="ia-card">
                <h4 class="mb-3 ia-accent">Problema (input)</h4>
                <p class="mb-3">Personaje empieza con -3, gana +7, pierde -5. &#191;Con cu&#225;nta energ&#237;a termina?</p>
                <div class="ia-grid">
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Boot</h6>
                        <p class="mb-0">Objetivo claro: energ&#237;a final.</p>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 1 &#183; Escaneo</h6>
                        <p class="mb-0">Datos: -3, +7, -5. Respeto de signos.</p>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 2 &#183; Visual</h6>
                        <p class="mb-0">Recta num&#233;rica: salto a la derecha (+7), luego a la izquierda (-5).</p>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 3 &#183; C&#243;digo</h6>
                        <p class="mb-0">Expresi&#243;n: -3 + 7 - 5.</p>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 4 &#183; Test</h6>
                        <p class="mb-0">Resultado: -1. Se comprueba en la recta.</p>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 5 &#183; Explica</h6>
                        <p class="mb-0">Mini log de 2-3 frases para cerrar.</p>
                    </div>
                </div>
                <div class="ia-divider"></div>
                <h6 class="mb-2 ia-accent">Kit de emergencias</h6>
                <ul class="ia-list">
                    <li>Pista ligera de signos.</li>
                    <li>Pista visual: dibuja el primer salto.</li>
                    <li>Ejemplo gemelo para copiar la estructura.</li>
                </ul>
            </div>
            <div class="ia-divider"></div>
            <div class="ia-card">
                <h4 class="mb-3 ia-accent">Ejemplo detallado con enteros</h4>
                <p class="mb-3">Protocolo Math-Hacker para profesor tradicional, fases completas con comentarios para el profe.</p>
                <div class="mb-3">
                    <h5 class="mb-2 ia-accent">Problema (input)</h5>
                    <p class="mb-0">En un videojuego, el personaje empieza con -3 puntos de energia, consigue +7 y pierde 5. &#191;Con cuanta energia termina?</p>
                </div>
                <div class="ia-grid">
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 0 &#183; Boot</h6>
                        <p class="mb-0">Alumno: expresa el objetivo en una frase. Profe: si no lo formula, no pasa de fase.</p>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 1 &#183; Escaneo</h6>
                        <ul class="ia-list">
                            <li>Datos con signo: -3, +7, -5.</li>
                            <li>Secuencia: empiezo en -3, sumo 7, resto 5.</li>
                            <li>Profe: vigila que &#8220;quitar 5&#8221; sea -5.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 2 &#183; Visual</h6>
                        <ul class="ia-list">
                            <li>Recta numerica: inicio en -3.</li>
                            <li>Salto +7 a la derecha; salto -5 a la izquierda.</li>
                            <li>Profe: corrige si no se ve el punto final.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 3 &#183; Codigo</h6>
                        <ul class="ia-list">
                            <li>Operacion: -3 + 7 - 5.</li>
                            <li>Orden sugerido: primero -3 + 7, luego restar 5.</li>
                            <li>Profe: comprueba respeto de signos.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 4 &#183; Test</h6>
                        <ul class="ia-list">
                            <li>Calculo: -3 + 7 = 4; 4 - 5 = -1.</li>
                            <li>Test de realidad en la recta: final en -1.</li>
                            <li>Profe: si no coincide con el dibujo, error de calculo.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 5 &#183; Explica</h6>
                        <ul class="ia-list">
                            <li>Log de 2-3 frases con pasos y resultado.</li>
                            <li>Evidencia de comprension, no solo calculo.</li>
                        </ul>
                    </div>
                </div>
                <div class="ia-divider"></div>
                <h6 class="mb-2 ia-accent">Kit de emergencias</h6>
                <ul class="ia-list">
                    <li>Nivel 1: pista de signos.</li>
                    <li>Nivel 2: dibuja solo el primer salto (+7).</li>
                    <li>Nivel 3: problema gemelo (por ejemplo, -2 + 6 - 3).</li>
                </ul>
                <div class="ia-divider"></div>
                <h6 class="mb-2 ia-accent">Uso en clase</h6>
                <ul class="ia-list">
                    <li>No cambia el temario; cambia el procedimiento.</li>
                    <li>Secuencia fija: objetivo &#8594; datos/signos &#8594; recta &#8594; expresion &#8594; calcular y comprobar.</li>
                    <li>Reutilizable para temperatura, dinero o alturas.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light ia-section ia-panel" data-version="innovador" data-subject="ecuaciones">
        <div class="container wow FadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-4">
                <span class="ia-pill">Docente innovador</span>
                <h2 class="mt-2 mb-2">Ejemplo: problemas de ecuaciones</h2>
                <p class="mb-0">Math-Hacker C37&#183;Pro con GD e IA como copiloto: dise&#241;ar, probar y defender modelos.</p>
            </div>
            <div class="ia-card">
                <h4 class="mb-3 ia-accent">Problema (input)</h4>
                <p class="mb-2">En un garaje hay coches y motos. En total hay 20 veh&#237;culos y 70 ruedas. &#191;Cu&#225;ntos coches y cu&#225;ntas motos hay?</p>
                <p class="mb-3">Se vive como mini-proyecto: se dise&#241;a, prueba y defiende el modelo con GD e IA como copiloto.</p>
            </div>
            <div class="ia-divider"></div>
            <div class="ia-card">
                <h4 class="mb-3 ia-accent">Fase 1 &#183; Boot y miner&#237;a de datos</h4>
                <p class="mb-2">Objetivo: investigar el problema, no leer en piloto autom&#225;tico.</p>
                <ul class="ia-list">
                    <li>Alumnado (modo avi&#243;n): frase objetivo, actores y totales (20 veh&#237;culos, 70 ruedas), variable eficiente x = coches; motos = 20 - x.</li>
                    <li>GD: consensuar qu&#233; es x y qu&#233; es 20 - x; acordar significado de 20 y 70.</li>
                    <li>IA (analista de riesgos): revisa datos y definici&#243;n de x, sin dar ecuaci&#243;n.</li>
                </ul>
            </div>
            <div class="ia-divider"></div>
            <div class="ia-card">
                <h4 class="mb-3 ia-accent">Fase 2 &#183; Prototipado visual</h4>
                <p class="mb-2">Objetivo: del texto al mapa antes de escribir la ecuaci&#243;n.</p>
                <ul class="ia-list">
                    <li>Alumnado: 20 slots de veh&#237;culos; coches con 4 ruedas, motos con 2; exploran casos (todos motos = 40 ruedas; faltan 30 &rarr; hay coches).</li>
                    <li>GD: prototipos se intercambian; si no se entiende a simple vista, se redibuja.</li>
                    <li>IA (consultor de dise&#241;o): sugiere tablas/barras si hay confusi&#243;n.</li>
                </ul>
            </div>
            <div class="ia-divider"></div>
            <div class="ia-card">
                <h4 class="mb-3 ia-accent">Fase 3 &#183; Dise&#241;o algor&#237;tmico</h4>
                <p class="mb-2">Objetivo: traducir el mapa a ecuaci&#243;n.</p>
                <ul class="ia-list">
                    <li>Expresiones: coches = x &rarr; 4x; motos = 20 - x &rarr; 2(20 - x).</li>
                    <li>Ecuaci&#243;n (modo LEGO): 4x + 2(20 - x) = 70.</li>
                    <li>GD: comparan ecuaciones, cazan bugs de signos/unidades.</li>
                    <li>IA (compilador): valida coherencia ruedas/ruedas; no da la ecuaci&#243;n desde cero.</li>
                </ul>
            </div>
            <div class="ia-divider"></div>
            <div class="ia-card">
                <h4 class="mb-3 ia-accent">Fase 4 &#183; Test de estr&#233;s y retro</h4>
                <p class="mb-2">Objetivo: resolver, comprobar y analizar.</p>
                <ul class="ia-list">
                    <li>Resoluci&#243;n: 4x + 40 - 2x = 70 &#8594; 2x + 40 = 70 &#8594; x = 15; motos = 5.</li>
                    <li>Test de realidad: 15&#183;4 + 5&#183;2 = 70.</li>
                    <li>GD: abogado del diablo plantea variantes (x como motos, rueda de repuesto...).</li>
                    <li>IA (coach): preguntas de reflexi&#243;n sobre errores probables y trucos para evitarlos.</li>
                </ul>
            </div>
            <div class="ia-divider"></div>
            <div class="ia-card">
                <h4 class="mb-3 ia-accent">Fase 5 &#183; Commit y difusi&#243;n</h4>
                <p class="mb-2">Objetivo: documentar y compartir el hack.</p>
                <ul class="ia-list">
                    <li>Log: definir x y motos, ecuaci&#243;n 4x + 2(20 - x) = 70, resultado 15/5, comprobaci&#243;n.</li>
                    <li>Producto: ficha &ldquo;veh&#237;culos y ruedas&rdquo;, esquema visual, v&#237;deo corto.</li>
                    <li>Centro/C37: subir a IA37 / GDMath como ejemplo modelo para reutilizar.</li>
                </ul>
            </div>
            <div class="ia-divider"></div>
            <div class="ia-card">
                <h4 class="mb-3 ia-accent">C&#243;mo aplicar el m&#233;todo Math-Hacker C37&#183;Pro con IA</h4>
                <p class="mb-2"><strong>Versi&#243;n profesor innovador</strong></p>
                <p class="mb-3">Objetivo: mini-proyectos de modelado con GD, IA como copiloto y productos finales para el ecosistema Conecta 37.</p>
                <div class="ia-grid">
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Prepara la secuencia</h6>
                        <ul class="ia-list">
                            <li>Elige familia de problemas (veh&#237;culos/ruedas, edades, recta num&#233;rica).</li>
                            <li>Plan 2-3 sesiones: Situar (lectura/miner&#237;a), Desarrollar (visual + ecuaciones), Compartir (test + producto).</li>
                            <li>Define GD (roles/tama&#241;o) y momentos de IA.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Paso 1 &#183; Situar (Boot + miner&#237;a)</h6>
                        <ul class="ia-list">
                            <li>Alumnado: frase objetivo, actores, totales, x definida.</li>
                            <li>GD: modelo de datos com&#250;n.</li>
                            <li>IA analista: marca datos olvidados o definiciones vagas.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Paso 2 &#183; Prototipado visual</h6>
                        <ul class="ia-list">
                            <li>Prototipo visual viable: barras, tabla, recta, diagrama.</li>
                            <li>Regla: si no se entiende a simple vista, se redibuja.</li>
                            <li>IA dise&#241;o: sugiere ajustes/formatos.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Paso 3 &#183; Dise&#241;o algor&#237;tmico</h6>
                        <ul class="ia-list">
                            <li>Traducci&#243;n a expresiones y ecuaci&#243;n (modo LEGO).</li>
                            <li>GD compara ecuaciones y caza bugs de signos/unidades.</li>
                            <li>IA compilador: valida coherencia con el modelo.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Paso 4 &#183; Test de estr&#233;s y retro</h6>
                        <ul class="ia-list">
                            <li>Resolver y hacer test de realidad.</li>
                            <li>Abogado del diablo rompe el modelo; se localiza la fase del error.</li>
                            <li>IA coach: preguntas de reflexi&#243;n y aprendizajes.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Paso 5 &#183; Commit y difusi&#243;n</h6>
                        <ul class="ia-list">
                            <li>Log: qu&#233; es x, ecuaci&#243;n/operaci&#243;n, comprobaci&#243;n.</li>
                            <li>Producto: mini-gu&#237;a, infograf&#237;a o v&#237;deo.</li>
                            <li>Centro: subir a IA37/GDMath como recurso modelo.</li>
                        </ul>
                    </div>
                </div>
                <div class="ia-divider"></div>
                <h6 class="mb-2 ia-accent">Kit de IA para profes innovadores</h6>
                <ul class="ia-list">
                    <li>Situar: revisar datos, detectar trampas de lenguaje, afinar x.</li>
                    <li>Prototipado: sugerir formato de esquema o tabla, aclarar etiquetas.</li>
                    <li>Ecuaci&#243;n/Resoluci&#243;n: comprobar coherencia con el modelo, marcar bugs.</li>
                    <li>Reflexi&#243;n: preguntas de metacognici&#243;n y mejoras para el siguiente sprint.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section ia-panel" data-version="innovador" data-subject="enteros">
        <div class="container wow FadeInUp" data-wow-delay="0.1s">
            <div class="text-center mb-4">
                <span class="ia-pill">Docente innovador</span>
                <h2 class="mt-2 mb-2">C&#243;mo aplicar el m&#233;todo Math-Hacker C37 con IA</h2>
                <p class="mb-0">Versi&#243;n profesor tradicional &#183; Operaciones con enteros.</p>
            </div>
            <div class="ia-card">
                <h4 class="mb-3 ia-accent">Objetivo</h4>
                <p class="mb-3">Guion sencillo y repetible para operaciones con enteros usando IA como apoyo controlado.</p>
                <ul class="ia-list">
                    <li>Pasos: leer &#8594; traducir &#8594; representar &#8594; operar &#8594; comprobar.</li>
                    <li>Andamios: recta num&#233;rica, tablas, frases guiadas.</li>
                    <li>IA: revisar lectura, dar pistas y validar razonamiento (no calcular).</li>
                </ul>
                <div class="ia-divider"></div>
                <h5 class="mb-2 ia-accent">1. Prepara la clase</h5>
                <ul class="ia-list">
                    <li>Elige 2-3 problemas en contexto (energ&#237;a, temperatura, dinero).</li>
                    <li>Define la operaci&#243;n (-3 + 7 - 5...) y el modelo visual (recta/tabla).</li>
                    <li>Marca cu&#225;ndo se permite IA: tras lectura, tras operaci&#243;n y al cierre.</li>
                </ul>
                <div class="ia-divider"></div>
                <h5 class="mb-2 ia-accent">2. Boot del problema</h5>
                <p class="mb-2"><strong>Meta:</strong> saber qu&#233; pregunta el problema.</p>
                <ul class="ia-list">
                    <li>Frase inicial: &ldquo;El problema me pide saber con cu&#225;ntos puntos/temperatura/dinero termino.&rdquo;</li>
                    <li>Sin cuentas ni IA hasta tenerla.</li>
                </ul>
                <div class="ia-divider"></div>
                <h5 class="mb-2 ia-accent">3. Escaneo de datos y signos</h5>
                <ul class="ia-list">
                    <li>Subrayar acciones: empieza con, gana, pierde, sube, baja.</li>
                    <li>Lista limpia: estado inicial con signo; cada cambio con signo.</li>
                    <li>Ejemplo: inicio -3; cambio 1 +7; cambio 2 -5.</li>
                    <li>T&#250; revisas signos; IA opcional para validar la lista.</li>
                </ul>
                <div class="ia-divider"></div>
                <h5 class="mb-2 ia-accent">4. Renderizado visual</h5>
                <p class="mb-2"><strong>Meta:</strong> ver el movimiento antes de calcular.</p>
                <ul class="ia-list">
                    <li>Recta num&#233;rica: 0 centrado, inicio marcado, saltos +7 derecha, -5 izquierda.</li>
                    <li>O tabla de estados: inicio &#8594; cambio 1 &#8594; cambio 2.</li>
                    <li>Regla: no escribir la operaci&#243;n hasta dibujar/tabla.</li>
                    <li>IA opcional: validar esquema y direcci&#243;n de saltos.</li>
                </ul>
                <div class="ia-divider"></div>
                <h5 class="mb-2 ia-accent">5. Codificaci&#243;n</h5>
                <ul class="ia-list">
                    <li>De la representaci&#243;n a la expresi&#243;n: -3 + 7 - 5.</li>
                    <li>Explicar en voz alta qu&#233; significa cada t&#233;rmino.</li>
                    <li>IA opcional: comprobar coherencia de la expresi&#243;n (sin calcular).</li>
                </ul>
                <div class="ia-divider"></div>
                <h5 class="mb-2 ia-accent">6. Compilar y testear</h5>
                <ul class="ia-list">
                    <li>Calcular: -3 + 7 = 4; 4 - 5 = -1.</li>
                    <li>Volver a la recta/tabla y validar sentido (energ&#237;a negativa, bajo cero, saldo en rojo).</li>
                    <li>IA opcional: chequeo del razonamiento, no del n&#250;mero.</li>
                </ul>
                <div class="ia-divider"></div>
                <h5 class="mb-2 ia-accent">7. Cierre: mini explicaci&#243;n</h5>
                <ul class="ia-list">
                    <li>Log en 2-3 frases: inicio (con signo), cambios (por qu&#233;), resultado y por qu&#233; tiene sentido.</li>
                    <li>Ejemplo: &ldquo;Empiezo en -3, gano 7 (4), pierdo 5 y termino en -1; en la recta se ve.&rdquo;</li>
                </ul>
                <div class="ia-divider"></div>
                <h5 class="mb-2 ia-accent">8. Kit de emergencias con IA</h5>
                <ul class="ia-list">
                    <li>Nivel 1: lenguaje y signos (&ldquo;&#191;perder 5 es sumar o restar 5?&rdquo;, &ldquo;&#191;Este -3 es empezar bajo cero?&rdquo;).</li>
                    <li>Nivel 2: visual (c&#243;mo colocar -3 y +7 en la recta o tabla).</li>
                    <li>Nivel 3: ejemplo gemelo con otros n&#250;meros para copiar la estructura, no el resultado.</li>
                </ul>
            </div>
            <div class="ia-divider"></div>
            <div class="ia-card">
                <h4 class="mb-3 ia-accent">Ejemplo detallado: energ&#237;a en videojuego</h4>
                <p class="mb-3">Aplicado en modo Math-Hacker con IA como copiloto (sin dar la soluci&#243;n).</p>
                <div class="mb-3">
                    <h5 class="mb-2 ia-accent">Desaf&#237;o (input)</h5>
                    <p class="mb-1">En un videojuego, el personaje empieza con -3 puntos de energ&#237;a, gana +7 y luego pierde 5.</p>
                    <p class="mb-0">Objetivo: modelar el sistema, no solo hacer cuentas.</p>
                </div>
                <div class="ia-divider"></div>
                <div class="ia-grid">
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 1 &#183; Boot y miner&#237;a</h6>
                        <ul class="ia-list">
                            <li>Objetivo claro: energ&#237;a final.</li>
                            <li>Datos con signo: -3 inicial, +7 bonus, -5 ataque.</li>
                            <li>IA como analista de riesgos: revisa signos y datos faltantes.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 2 &#183; Prototipado visual</h6>
                        <ul class="ia-list">
                            <li>Recta num&#233;rica: inicio en -3.</li>
                            <li>Salto +7 a la derecha; salto -5 a la izquierda.</li>
                            <li>IA como consultor: corrige direcci&#243;n o propone tabla de estados.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 3 &#183; Dise&#241;o algor&#237;tmico</h6>
                        <ul class="ia-list">
                            <li>Script matem&#225;tico: -3 + 7 - 5.</li>
                            <li>Parejas: uno dicta desde la recta, otro escribe.</li>
                            <li>IA como compilador: valida coherencia con el mapa.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 4 &#183; Test de estr&#233;s</h6>
                        <ul class="ia-list">
                            <li>C&#225;lculo: -3 + 7 = 4; 4 - 5 = -1.</li>
                            <li>Revisi&#243;n en la recta: punto final en -1.</li>
                            <li>Abogado del diablo: variaciones (+/-) para detectar bugs.</li>
                        </ul>
                    </div>
                    <div class="ia-mini-card">
                        <h6 class="mb-2 ia-accent">Fase 5 &#183; Commit y difusi&#243;n</h6>
                        <ul class="ia-list">
                            <li>Log breve: qu&#233; datos, qu&#233; expresi&#243;n, qu&#233; comprobaci&#243;n.</li>
                            <li>Recurso compartible: tarjeta paso a paso o infograf&#237;a.</li>
                            <li>IA37 / GDMath: subir como caso modelo.</li>
                        </ul>
                    </div>
                </div>
                <div class="ia-divider"></div>
                <h6 class="mb-2 ia-accent">Reflexi&#243;n guiada por IA</h6>
                <ul class="ia-list">
                    <li>&#191;En qu&#233; parte os confundisteis primero?</li>
                    <li>&#191;Qu&#233; truco visual evita errores de signo?</li>
                    <li>&#191;Qu&#233; har&#237;ais distinto en la siguiente iteraci&#243;n?</li>
                </ul>
            </div>
        </div>
    </div>

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
