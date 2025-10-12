<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jornadas 4Inclusion</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    <link href="..././lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
	<!-- Menú común -->
	<?php
        $img="../..";                   // ruta a la carpeta de imágenes
        $pages="..";                    // ruta a la carpeta del resto de páginas de la web
        $index="../..";                 // ruta a la carpeta del index.php
        include "../../menu.php";       // inlcuye el menu común
    ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../../img/4Inclusion/DGM4Inclusion.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Jornadas 4Inclusion</h1>
                            <h5 class="text-white text-uppercase mb-4 animated zoomIn"><i>Tech + diversión + impacto real en una mañana completa.</i></h4>
                            <a href="Jornadas4Inclusion.php#programa" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Ver programa</a>
                            <a href="Jornadas4Inclusion.php#claves" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Claves del día</a>
                            <!--a href="4Inclusion.php#livehub" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Live Hub: Eventos & Conexiones</a>
                            <a href="Jornadas4Inclusion.php" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Jornadas 4Inclusion</a-->
                            <h5 class="text-white text-uppercase mb-4 animated zoomIn" style="padding-top: 20px"><i>Toca inventar, prototipar y compartir. En cuatro horas montarás recursos inclusivos con tu equipo usando Minecraft, 3D, Realidad Aumentada, audio, vídeo y más.</i></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row gy-3 mb-5 fact-item" id="rapidos">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Datos rápidos</h6>
                        <!--p class="mb-4" style="text-align:justify;">
                            Conoce quién está dentro. Este bloque presenta a los 5 dúos IES ↔ Educación Especial y enlaza al Directorio completo.
                        </p-->

                        <p class="mb-4" style="text-align:justify;">
                            <ul>
                                <li><b>Lugar</b>: IES Alcántara</li>
                                <li><b>Fecha</b>: 6 Noviembre</li>
                                <li><b>Horario</b>: 09:00 – 13:15</li>
                                <li><b>Público</b>: DGMakers + Educación Especial</li>
                                <li><b>Vibe</b>: colaborativo, creativo y muy tech</li>
                            </ul>
                        </p>

                        <!--p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="directorio-de-centros.php">Ir al Directorio de Centros</a>
                        </p-->
                    </div>
                </div>      
            </div>

            <div class="row gy-3 my-5 fact-item" id="programa">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Programa express</h6>
                        <p class="mb-4" style="text-align:justify;">
                            Cada hora se activan cuatro talleres en paralelo. Elige aula, completa el reto rápido y comparte resultados en la nube 4Inclusion antes de moverte a la siguiente parada.
                        </p>
                        <div class="alert alert-primary" role="alert">
                            <strong>09:00 – 09:15 · Kick-off en Salón de actos</strong> · Bienvenida, reto del día y formación de equipos mixtos DGMakers + EE.
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped align-middle">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">Horario</th>
                                        <th scope="col">Aula DGMakers</th>
                                        <th scope="col">Aula 0A04</th>
                                        <th scope="col">Aula 0A06</th>
                                        <th scope="col">Salón de actos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">09:15 – 10:15</th>
                                        <td>
                                            <ul class="mb-0">
                                                <li>Escaneado, modelado (CrealityScan) e impresión 3D</li>
                                                <li>Diseño e impresión 3D</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="mb-0">
                                                <li>Animación de objetos 3D en Blender</li>
                                                <li>Diseño 3D con Tinkercad</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="mb-0">
                                                <li>Realidad aumentada con Reality Composer</li>
                                                <li>Creación de entorno 3D e interacciones en Roblox Estudio</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="mb-0">
                                                <li>Vídeo Podcast</li>
                                                <li>Doblaje</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10:15 – 11:15</th>
                                        <td>
                                            <ul class="mb-0">
                                                <li>Gafas de Realidad Virtual y vídeo 360º</li>
                                                <li>Edición vídeo y croma (OBS o iPad)</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="mb-0">
                                                <li>MBot2</li>
                                                <li>Arduino</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="mb-0">
                                                <li>Minecraft</li>
                                                <li>Programación Scratch</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="mb-0">
                                                <li>App Inventor</li>
                                                <li>Diseño web</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11:15 – 12:15</th>
                                        <td>
                                            <ul class="mb-0">
                                                <li>IA para rendimiento académico</li>
                                                <li>Microbit</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="mb-0">
                                                <li>Construcción filtros de agua</li>
                                                <li>Jabón casero</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="mb-0">
                                                <li>Chapas</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="mb-0">
                                                <li>Música/Teatro</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12:15 – 13:15</th>
                                        <td>
                                            <ul class="mb-0">
                                                <li>Lumio Smart TV</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="mb-0">
                                                <li>Construye tu amuleto egipcio</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="mb-0">
                                                <li>Cortadora Láser</li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul class="mb-0">
                                                <li>Juegos y deporte</li>
                                            </ul>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="alert alert-primary mt-4" role="alert">
                            <strong>13:15 · Closing Flash</strong> · Demo en 60 segundos por equipo, subida de materiales y entrega de badges 4Inclusion.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-3 mb-5 fact-item" id="aprovechar">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Cómo aprovechar cada taller</h6>
                        <p class="mb-4" style="text-align:justify;">
                            Elige uno por bloque o rota. Piensa en quién lo usará mañana y qué problema le soluciona.
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <ul>
                                <li>Documenta con capturas, audio o vídeo mientras creas.</li>
                                <li>Sube tus archivos (STL, MP4, MP3, PDF) al repositorio compartido.</li>
                                <li>Aplica accesibilidad básica: subtítulos, pictos, contraste alto, texto claro.</li>
                            </ul>
                        </p>

                        <!--p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="directorio-de-centros.php">Ir al Directorio de Centros</a>
                        </p-->
                    </div>
                </div>      
            </div>

            <div class="row gy-3 mb-5 fact-item" id="claves">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Claves para brillar</h6>
                        <!--p class="mb-4" style="text-align:justify;">
                            Elige uno por bloque o rota. Piensa en quién lo usará mañana y qué problema le soluciona.
                        </p-->

                        <ul>
                            <li><b>Modo feria</b>: talleres en paralelo, muévete libremente.</li>
                            <li><b>Entrega express</b>: todo listo para compartir hoy.</li>
                            <li><b>Equipos mixtos</b>: mezcla DGMakers y EE para sumar talentos.</li>
                            <li><b>Lenguaje tech</b>: habla de sprints, jams, demos y badges.</li>
                            <li><b>Producto final</b>: audio, vídeo, 3D, escena o música que ayuda de verdad.</li>
                        </ul>

                        <!--p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="directorio-de-centros.php">Ir al Directorio de Centros</a>
                        </p-->
                    </div>
                </div>      
            </div>
        </div>

        <!-- Footer común -->
        <?php
            $img="../..";                   // ruta a la carpeta de imágenes
            $pages="..";                 // ruta a la carpeta del resto de páginas de la web
            $index="../..";                 // ruta a la carpeta del index.php
            include "../../footer.php";       // inlcuye el footer común
        ?>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
                class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script-->
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
