<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>IA en Conecta 37</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Uso de la IA en Conecta-37" name="description">

    <!-- Favicon -->
    <link href="../../../img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
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
    </style>

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

        .ia-chip-link {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.35rem 0.85rem;
            border-radius: 0.75rem;
            font-weight: 600;
            background: rgba(10, 85, 140, 0.12);
            box-shadow: inset 0 0 0 1px rgba(10, 85, 140, 0.26);
            color: #0a558c;
            text-decoration: none;
            transition: background-color 0.2s ease, color 0.2s ease, box-shadow 0.2s ease, transform 0.2s ease;
        }

        .ia-chip-link::after {
            content: "&#8594;";
            font-size: 0.9rem;
            transition: transform 0.2s ease;
        }

        .ia-chip-link:hover,
        .ia-chip-link:focus {
            background: #0a558c;
            color: #ffffff;
            box-shadow: inset 0 0 0 1px #0a558c, 0 0.4rem 0.8rem rgba(10, 85, 140, 0.2);
            text-decoration: none;
            transform: translateX(1px);
        }

        .ia-chip-link:hover::after,
        .ia-chip-link:focus::after {
            transform: translateX(3px);
        }
    </style>
</head>

<body>
    <!-- Men&#250; com&#250;n -->
    <?php
        $img = "../../..";
        $pages = "../..";
        $index = "../../..";
        include "../../../menu.php";
    ?>

    <header class="hero-conecta" style="background: linear-gradient(120deg, rgba(1,81,131,0.92), rgba(18,111,184,0.92)), url('img/ia-header.jpg') center/cover no-repeat;">
        <div class="container py-5">
            <div class="row align-items-center gy-4">
                <div class="col-lg-3 text-center text-lg-start">
                    <img src="img/LogoConecta37ByN.png" alt="Logo Conecta 37 en blanco y negro" class="img-fluid" style="max-width: 220px;">
                </div>
                <div class="col-lg-9 text-center text-lg-start">
                    <h1 class="display-4 text-white fw-bold mb-3">Estrategias digitales con inteligencia artificial</h1>
                    <p class="lead text-white mb-0">Un impulso para aprender: automatizamos lo rutinario para dedicar tiempo a pensar, crear y conectar.</p>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-2 mt-4">
                        <a href="index.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Visi&oacute;n general</a>
                        <a href="Encuentro37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Jornadas 26</a>
                        <a href="Livehub37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Live Hub</a>
                        <a href="Recursos37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Showcase de proyectos</a>
                        <a href="Roadmap.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Roadmap</a>
                        <a href="Centros.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Centros participantes</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="container-xxl py-5">
        <div class="container">
            <section class="ia37-block">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h2 class="text-primary mb-3">IA en Conecta 37: Un impulso para aprender</h2>
                        <p class="mb-4">Automatizamos las tareas rutinarias para dedicar m&#225;s tiempo a lo que importa: pensar, crear y conectar con nuestra comunidad.</p>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="https://images.unsplash.com/photo-1665690399857-9de8bbbeb108?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1932" class="ia37-image" alt="Estudiantes colaborando con tecnolog&#237;a">
                    </div>
                </div>
            </section>

            <section class="ia37-block">
                <div class="row g-5 align-items-center flex-lg-row-reverse">
                    <div class="col-lg-6">
                        <h3 class="text-primary mb-3">Principios de uso</h3>
                        <ul class="mb-4">
                            <li><strong>Transparencia:</strong> siempre indicamos d&#243;nde y c&#243;mo se ha utilizado la IA.</li>
                            <li><strong>Autor&#237;a humana:</strong> las ideas, la voz y el producto final son del alumnado.</li>
                            <li><strong>Verificaci&#243;n:</strong> contrastamos cada aportaci&#243;n con al menos dos fuentes fiables.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="https://drive.google.com/thumbnail?id=1LvaoMb0HmH_y0mQ0VX3KMV6gNubBIzsd&sz=w1200" class="ia37-image" alt="Detalle de circuito iluminado con IA">
                    </div>
                </div>
            </section>

            <section class="ia37-block">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h3 class="text-primary mb-3">Crear con IA (alumnado)</h3>
                        <ul class="mb-4">
                            <li><strong>Texto y guion:</strong> generar borradores, crear res&#250;menes y refinar el estilo.</li>
                            <li><strong>Matem&#225;ticas que se expresan:</strong> estructurar razonamientos, anticipar preguntas y generar contraejemplos.</li>
                            <li><strong>Producci&#243;n audiovisual:</strong> crear listas de planos, checklists de calidad y subt&#237;tulos autom&#225;ticos.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="https://images.unsplash.com/photo-1563273941-3f576efb8738?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1548" class="ia37-image" alt="L&#237;nea de tiempo de un editor de v&#237;deo">
                    </div>
                </div>
            </section>

            <section class="ia37-block">
                <div class="row g-5 align-items-center flex-lg-row-reverse">
                    <div class="col-lg-6">
                        <h3 class="text-primary mb-3">Dise&#241;ar con IA (profesorado)</h3>
                        <ul class="mb-4">
                            <li><strong>Mini-unidades:</strong> definir objetivos, criterios de &#233;xito y actividades clave en minutos.</li>
                            <li><strong>R&#250;bricas:</strong> obtener una primera versi&#243;n lista para ajustes r&#225;pidos.</li>
                            <li><strong>Feedback:</strong> sugerir &#8220;pluses y preguntas&#8221; concretas sin sustituir la voz docente.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="https://images.pexels.com/photos/6153354/pexels-photo-6153354.jpeg" class="ia37-image" alt="Docente guiando a estudiantes con un port&#225;til">
                    </div>
                </div>
            </section>

            <section class="ia37-block">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h3 class="text-primary mb-3">Integraci&#243;n de la IA en el sprint</h3>
                        <ul class="mb-4">
                            <li><strong>Semana 1 (Dise&#241;ar):</strong> lluvia de ideas y definici&#243;n de criterios de &#233;xito.</li>
                            <li><strong>Semana 2 (Crear):</strong> la IA act&#250;a como cr&#237;tico amable que ofrece feedback.</li>
                            <li><strong>Semana 3 (Compartir):</strong> generaci&#243;n de t&#237;tulos, descripciones y subt&#237;tulos.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="https://images.pexels.com/photos/25626433/pexels-photo-25626433.jpeg" class="ia37-image" alt="Tablero Kanban digital">
                    </div>
                </div>
            </section>

            <section class="ia37-block">
                <div class="row g-5 align-items-center flex-lg-row-reverse">
                    <div class="col-lg-6">
                        <h3 class="text-primary mb-3">L&#237;mites claros</h3>
                        <ul class="mb-4">
                            <li>No se acepta texto generado &#237;ntegramente por IA como trabajo propio.</li>
                            <li>Cada proyecto incluye una declaraci&#243;n de uso de IA.</li>
                            <li>Privacidad y protecci&#243;n de datos son innegociables.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="https://images.unsplash.com/photo-1695902173528-0b15104c4554?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1932" class="ia37-image" alt="Pantalla con candado digital">
                    </div>
                </div>
            </section>

            <section class="ia37-block">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h3 class="text-primary mb-3">Nuestro kit de herramientas</h3>
                        <ul class="mb-4">
                            <li>Asistente de redacci&#243;n online.</li>
                            <li>Herramientas de transcripci&#243;n y subtitulado autom&#225;ticos.</li>
                            <li>Suite colaborativa para documentos y presentaciones.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="https://images.unsplash.com/photo-1589254047589-db4c14ad7779?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1740" class="ia37-image" alt="Reuni&#243;n de trabajo con port&#225;tiles y notas">
                    </div>
                </div>
            </section>

            <section class="ia37-block">
                <div class="row g-5 align-items-center flex-lg-row-reverse">
                    <div class="col-lg-6">
                        <h3 class="text-primary mb-3">Modelos de instrucciones (prompts)</h3>
                        <ul class="mb-4">
                            <li><strong>Lengua (podcast):</strong> &#8220;Estructura un guion de 4 minutos sobre [tema] con introducci&#243;n, dos argumentos y una llamada a la acci&#243;n&#8221;.</li>
                            <li><strong>Matem&#225;ticas (explicaci&#243;n):</strong> &#8220;Revisa este razonamiento y detecta posibles saltos l&#243;gicos. Proponme una pregunta desafiante para defenderlo&#8221;.</li>
                            <li><strong>Audiovisual (publicaci&#243;n):</strong> &#8220;Genera 5 t&#237;tulos cortos y una descripci&#243;n con palabras clave para un v&#237;deo sobre [tema]&#8221;.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="https://images.unsplash.com/photo-1561719998-e6763867e182?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1548" class="ia37-image" alt="Estudiantes escribiendo guiones en un port&#225;til">
                    </div>
                </div>
            </section>

            <section class="ia37-block">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h3 class="text-primary mb-3">Indicadores de &#233;xito</h3>
                        <ul class="mb-4">
                            <li>Tiempo ahorrado por el docente en cada sprint.</li>
                            <li>Calificaci&#243;n media en las r&#250;bricas del producto final.</li>
                            <li>Porcentaje de proyectos con declaraci&#243;n de uso de IA.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="https://images.pexels.com/photos/193821/pexels-photo-193821.jpeg" class="ia37-image" alt="Panel de datos con m&#233;tricas">
                    </div>
                </div>
            </section>

            <section class="ia37-block">
                <div class="row g-5 align-items-center flex-lg-row-reverse">
                    <div class="col-lg-6">
                        <h3 class="text-primary mb-3">Demostraci&#243;n r&#225;pida</h3>
                        <ol class="mb-4">
                            <li><strong>Antes y despu&#233;s:</strong> mostrar un texto base y su versi&#243;n mejorada con IA.</li>
                            <li><strong>R&#250;brica al instante:</strong> generar una r&#250;brica y ajustarla en directo.</li>
                            <li><strong>Subt&#237;tulos autom&#225;ticos:</strong> subir un v&#237;deo corto y generar subt&#237;tulos.</li>
                        </ol>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="img/iaconecta.png" class="ia37-image" alt="Alumna presentando su proyecto final">
                    </div>
                </div>
            </section>


            <section class="ia37-block text-center">
                <h3 class="text-primary mb-3">Ejemplos de uso</h3>
                <a href="IAIESAlcantara.php" class="ia-chip-link">
                    La inteligencia artificial en el IES Alc&aacute;ntara
                </a>
            </section>

            <section class="ia37-block">
                <h3 class="text-primary mb-3 text-center">TABLA COMPARATIVA &#183; Uso de la IA seg&#250;n perfil docente en Conecta 37</h3>
                <div class="table-responsive">
                    <table class="table table-striped align-middle">
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
                    <img src="img/IATradivsInnova.png" alt="Comparativa IA tradicional vs innovador" class="img-fluid rounded-3 shadow-sm">
                </div>

            </section>

        </div>
    </main>

    <!-- Footer com&#250;n -->
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
