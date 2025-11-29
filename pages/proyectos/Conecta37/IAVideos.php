<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>IA para v&iacute;deos DGMakers &middot; Conecta 37</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Chuletas IA para crear v&iacute;deos educativos r&aacute;pidos" name="description">

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
        .ia-card {
            background: #ffffff;
            border: 1px solid rgba(1, 81, 131, 0.12);
            border-radius: 1.5rem;
            padding: 1.75rem;
            box-shadow: 0 1.5rem 2.5rem rgba(1, 81, 131, 0.08);
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

        .ia-list {
            padding-left: 1.2rem;
            margin-bottom: 0;
        }

        .ia-list li {
            margin-bottom: 0.4rem;
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

        .hero-conecta {
            background: linear-gradient(135deg, #015183, #0a8cc4);
        }

        .studio-hero {
            background: radial-gradient(circle at 20% 20%, rgba(255, 127, 80, 0.14), transparent 32%), radial-gradient(circle at 80% 0, rgba(1, 81, 131, 0.18), transparent 40%), linear-gradient(135deg, rgba(1, 81, 131, 0.04), rgba(255, 255, 255, 0.9));
        }

        .studio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1rem;
        }

        .studio-step {
            background: #ffffff;
            border: 1px solid rgba(1, 81, 131, 0.12);
            border-radius: 1rem;
            padding: 1rem 1.25rem;
            box-shadow: 0 0.85rem 1.5rem rgba(1, 81, 131, 0.08);
        }

        .studio-step h5 {
            margin-bottom: 0.35rem;
        }

        .studio-step p {
            margin-bottom: 0.4rem;
        }

        .studio-step ul {
            padding-left: 1.2rem;
            margin-bottom: 0;
        }

        @media (max-width: 767.98px) {
            .hero-conecta h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body class="ia-page">
    <?php
        $img = "../../..";
        $pages = "../..";
        $index = "../../..";
        include "../../../menu.php";
    ?>

    <div class="container-fluid hero-conecta py-5 mb-5">
        <div class="container py-5 text-center text-white">
            <span class="ia-pill bg-white text-primary">DGMakers</span>
            <h1 class="display-5 text-white mb-3">IA para v&#237;deos: acelera tu estudio</h1>
            <p class="lead mb-0">Tu estudio de producci&#243;n con IA: guiones, visuales y extras listos para compartir en Conecta 37.</p>
        </div>
    </div>

    <div class="container-xxl py-5 ia-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="ia-card studio-hero">
                        <span class="ia-chip mb-2">Math Studio</span>
                        <h2 class="mb-2">De alumno a creador</h2>
                        <p class="mb-3"><em>&ldquo;Si no puedes explicarlo en un minuto, es que no lo has entendido. Coge el micro y demu&#233;stralo.&rdquo;</em></p>
                        <div class="studio-grid">
                            <div class="studio-step">
                                <span class="ia-pill d-inline-flex mb-2">Fase 1</span>
                                <h5 class="ia-accent mb-1">El guion (scripting)</h5>
                                <p class="text-muted mb-2">Prohibido improvisar. Los grandes youtubers escriben cada palabra.</p>
                                <ul class="ia-list">
                                    <li><strong>Gancho (0-5s):</strong> nada de &ldquo;Hola, soy Juan...&rdquo;. Empieza con una pregunta o un error com&#250;n.</li>
                                    <li><strong>Estructura doble:</strong> divide tu hoja: izquierda lo que se ve (f&#243;rmulas), derecha lo que dices.</li>
                                    <li><strong>IA assistant:</strong> pide revisi&#243;n para hacerlo m&#225;s directo y con ritmo.</li>
                                </ul>
                            </div>
                            <div class="studio-step">
                                <span class="ia-pill d-inline-flex mb-2">Fase 2</span>
                                <h5 class="ia-accent mb-1">El setup (assets)</h5>
                                <p class="text-muted mb-2">Mata el PowerPoint. Queremos acci&#243;n, no diapositivas est&#225;ticas.</p>
                                <ul class="ia-list">
                                    <li><strong>Estilo &ldquo;Khan&rdquo;:</strong> graba la pantalla de tu tablet mientras escribes en directo.</li>
                                    <li><strong>Estilo &ldquo;Maker&rdquo;:</strong> c&#225;mara cenital con tus manos y rotuladores en papel limpio.</li>
                                    <li><strong>Formato vertical:</strong> atr&#233;vete con un Short/Reel &lt; 60s.</li>
                                </ul>
                            </div>
                            <div class="studio-step">
                                <span class="ia-pill d-inline-flex mb-2">Fase 3</span>
                                <h5 class="ia-accent mb-1">Rec &amp; edit</h5>
                                <p class="text-muted mb-2">La magia ocurre en la edici&#243;n. Ritmo, claridad y sonido.</p>
                                <ul class="ia-list">
                                    <li><strong>Audio &gt; video:</strong> graba en silencio o con cascos; un mal audio arruina todo.</li>
                                    <li><strong>Cortes r&#225;pidos:</strong> elimina silencios y dudas; usa jump cuts.</li>
                                    <li><strong>Call to action:</strong> remata con un reto: &ldquo;Pausa el v&#237;deo e intenta resolver este t&#250;&rdquo;.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
                
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <img src="img/VideosIA1.png" alt="Ruta r\u00e1pida para v\u00eddeos con IA" class="img-fluid rounded-3 shadow-sm">
                    </div>
                </div>

            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="ia-card">
                        <span class="ia-chip mb-2">Versi&#243;n 1 &#183; reducida (3 pasos)</span>
                        <h3 class="mb-2">Tu copiloto IA para v&#237;deos: crea contenido &#233;pico en 3 pasos</h3>
                        <div class="ia-divider"></div>
                        <h5 class="ia-accent">1. Preparar (Setup)</h5>
                        <p><strong>Tu objetivo:</strong> hackear el temario y dise&#241;ar el esqueleto.</p>
                        <p><strong>Prompt IA:</strong> &ldquo;Expl&#237;came este tema con analog&#237;as como si tuviera 10 a&#241;os y organiza una estructura de v&#237;deo de 3 minutos con: gancho inicial, desarrollo y reto final.&rdquo;</p>
                        <h5 class="ia-accent mt-3">2. Guionizar (Flow)</h5>
                        <p><strong>Tu objetivo:</strong> escribir con tono cercano, apoyos visuales y chuletas.</p>
                        <p><strong>Prompt IA:</strong> &ldquo;Escribe un guion corto con tono youtuber para 1&#186; ESO. Sugiere qu&#233; dibujar en pantalla y convierte el texto en puntos clave para mis tarjetas.&rdquo;</p>
                        <h5 class="ia-accent mt-3">3. Empaquetar (Render)</h5>
                        <p><strong>Tu objetivo:</strong> t&#237;tulos con gancho, descripci&#243;n y extras gamificados.</p>
                        <p class="mb-0"><strong>Prompt IA:</strong> &ldquo;Dame 5 t&#237;tulos atractivos para este v&#237;deo, una descripci&#243;n corta para redes y un mini-quiz de 3 preguntas para el final.&rdquo;</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="img/IAVideoBreve.png" alt="Infograf&#237;a breve IA v&#237;deos" class="img-fluid rounded-3 shadow-sm">
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 bg-light ia-section">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="ia-card">
                        <span class="ia-chip mb-2">Versi&#243;n 2 &#183; Extendida</span>
                        <h3 class="mb-2">Chuleta DGMakers: tu estudio de producci&#243;n con IA</h3>
                        <p class="mb-3">Hackea tu flujo de trabajo: usa la IA como asistente de producci&#243;n para renderizar m&#225;s r&#225;pido.</p>
                        <div class="ia-divider"></div>
                        <h5 class="ia-accent">Fase 1 &#183; Pre-producci&#243;n (Setup)</h5>
                        <ul class="ia-list mb-3">
                            <li><strong>Hackear el temario complejo:</strong> &ldquo;Expl&#237;came [TEMA] como si tuviera 12 a&#241;os con analog&#237;as y frases ultra cortas.&rdquo;</li>
                            <li><strong>Destilar ideas y estructurar:</strong> &ldquo;Saca 5 ideas vitales y monta una estructura de 3 min: inicio gancho, explicaci&#243;n, 2 ejemplos visuales y reto final.&rdquo;</li>
                        </ul>
                        <h5 class="ia-accent">Fase 2 &#183; Producci&#243;n &amp; gui&#243;n (Flow)</h5>
                        <ul class="ia-list mb-3">
                            <li><strong>Guion base y visuales:</strong> &ldquo;Act&#250;a como creador top; guion corto para 1&#186; ESO y 3 apoyos visuales para dibujar.&rdquo;</li>
                            <li><strong>Pulir claridad y orden:</strong> &ldquo;Lee este borrador como alumno de 1&#186; ESO: se&#241;ala confusiones y reordena el flow.&rdquo;</li>
                            <li><strong>Teleprompter (chuletas):</strong> &ldquo;Convierte el guion final en bullet points brev&#237;simos para grabar sin leer.&rdquo;</li>
                        </ul>
                        <h5 class="ia-accent">Fase 3 &#183; Packaging &amp; extras (Render)</h5>
                        <ul class="ia-list mb-3">
                            <li><strong>T&#237;tulos y descripci&#243;n:</strong> &ldquo;Sugiere 5 t&#237;tulos con gancho y una frase de descripci&#243;n sobre qu&#233; aprender&#225;n.&rdquo;</li>
                            <li><strong>Bonus track:</strong> &ldquo;Crea un mini-quiz de 3 preguntas (con soluci&#243;n aparte) y una ficha resumen de 10 l&#237;neas.&rdquo;</li>
                        </ul>
                        <div class="ia-divider"></div>
                        <p class="mb-0"><strong>Mindset DGMaker:</strong> Crear contenido es hackear tu aprendizaje. Si puedes explicarlo en un v&#237;deo simple, lo has entendido para siempre. &#161;A renderizar!</p>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="img/IAVideoExt.png" alt="Infograf&#237;a extendida IA v&#237;deos" class="img-fluid rounded-3 shadow-sm">
                </div>

            </div>
<div class="ia-card">
                <h4 class="mb-3 text-white" style="background-color:#E65525; display:inline-block; padding:0.5rem 1rem; border-radius:0.75rem;">IA para acelerar tus v&#237;deos (Chuleta DGMakers)</h4>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered align-middle">
                        <thead class="table-primary">
                            <tr>
                                <th>Ayuda de la IA</th>
                                <th>Prompt de ejemplo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Entender bien la parte del tema</td>
                                <td>&ldquo;Expl&#237;came este apartado del libro sobre n&#250;meros enteros como si tuviera 12 a&#241;os, con frases cortas y un ejemplo sencillo.&rdquo;</td>
                            </tr>
                            <tr>
                                <td>Resumir las ideas clave que voy a explicar</td>
                                <td>&ldquo;Este es el texto que tengo que explicar. Res&#250;melo en 5 ideas clave para 1&#186; de ESO.&rdquo;</td>
                            </tr>
                            <tr>
                                <td>Dise&#241;ar la estructura del v&#237;deo (inicio&ndash;explicaci&#243;n&ndash;ejemplos&ndash;reto)</td>
                                <td>&ldquo;Ay&#250;dame a organizar un v&#237;deo de 3&ndash;4 minutos sobre este tema con: inicio, explicaci&#243;n, 2 ejemplos y un mini reto final.&rdquo;</td>
                            </tr>
                            <tr>
                                <td>Elegir ejemplos y dibujos que se vean bien en pantalla</td>
                                <td>&ldquo;Sugiere 3 ejemplos y qu&#233; podr&#237;a dibujar en la pizarra para explicar este contenido de forma visual.&rdquo;</td>
                            </tr>
                            <tr>
                                <td>Preparar un guion breve con frases claras</td>
                                <td>&ldquo;Escribe un guion muy corto y claro para explicar este tema a otros alumnos de 1&#186; de ESO, con tono cercano.&rdquo;</td>
                            </tr>
                            <tr>
                                <td>Convertir el guion en puntos clave (tarjetas de apoyo)</td>
                                <td>&ldquo;Convierte este guion en una lista de puntos clave para tenerlos en una tarjeta mientras hablo, sin frases largas.&rdquo;</td>
                            </tr>
                            <tr>
                                <td>Ensayar la explicaci&#243;n y pulir el orden de las ideas</td>
                                <td>&ldquo;Este es el guion que pienso decir en el v&#237;deo. Ordena las ideas para que la explicaci&#243;n sea m&#225;s clara y no d&#233; saltos.&rdquo;</td>
                            </tr>
                            <tr>
                                <td>Comprobar si la explicaci&#243;n es clara para 1&#186; ESO</td>
                                <td>&ldquo;Voy a explicarte mi tema con mis palabras. Dime qu&#233; partes ser&#237;an confusas para un alumno de 1&#186; de ESO y c&#243;mo mejorarlas.&rdquo;</td>
                            </tr>
                            <tr>
                                <td>Ajustar la duraci&#243;n aproximada del v&#237;deo</td>
                                <td>&ldquo;Este es mi guion. &#191;Crees que se puede explicar en 3&ndash;4 minutos? Si es muy largo, dime qu&#233; partes puedo recortar.&rdquo;</td>
                            </tr>
                            <tr>
                                <td>Inventar un t&#237;tulo atractivo para el v&#237;deo</td>
                                <td>&ldquo;Sugiere 5 t&#237;tulos cortos y atractivos para un v&#237;deo donde explico este tema a alumnos de 1&#186; de ESO.&rdquo;</td>
                            </tr>
                            <tr>
                                <td>Escribir una descripci&#243;n corta de qu&#233; se aprende en el v&#237;deo</td>
                                <td>&ldquo;Escribe una descripci&#243;n muy corta para mi v&#237;deo explicando qu&#233; aprender&#225; quien lo vea.&rdquo;</td>
                            </tr>
                            <tr>
                                <td>Crear preguntas tipo quiz sobre lo que explico</td>
                                <td>&ldquo;A partir de este guion, crea 5 preguntas tipo test sobre el contenido del v&#237;deo, con 4 opciones y una correcta.&rdquo;</td>
                            </tr>
                            <tr>
                                <td>Hacer una mini ficha-resumen para acompa&#241;ar el v&#237;deo</td>
                                <td>&ldquo;Resume en 8&ndash;10 l&#237;neas lo m&#225;s importante del v&#237;deo para que mis compa&#241;eros lo tengan delante mientras lo ven.&rdquo;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
    </div>

    <?php include "../../../footer.php"; ?>

    <a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>

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
</body>

</html>
