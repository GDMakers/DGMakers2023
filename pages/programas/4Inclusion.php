<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Programa Educativo 4Inclusion</title>
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
                            <h1 class="display-1 text-white mb-0 animated zoomIn">DGMakers 4Inclusion</h1>
                            <h5 class="text-white text-uppercase mb-4 animated zoomIn"><i>Aprende creando · Enseña compartiendo · Demuestra con datos</i></h4>
                            <a href="StartPack.php" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Crea. Sube. Brilla.</a>
                            <a href="4Inclusion.php#participan" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Ver centros y equipos</a>
                            <a href="4Inclusion.php#livehub" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Live Hub: Eventos & Conexiones</a>
                            <a href="Jornadas4Inclusion.php" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Jornadas 4Inclusion</a>
                            <h5 class="text-white text-uppercase mb-4 animated zoomIn" style="padding-top: 20px"><i>Crea sin límites, comparte sin barreras. Aquí la tech se usa para ayudar de verdad: diseñamos apoyos que mejoran el día a día en aulas de Educación Especial.</i></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row gy-3 mb-5 fact-item" id="participan">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Participan</h6>
                        <p class="mb-4" style="text-align:justify;">
                            Conoce quién está dentro. Este bloque presenta a los 5 dúos IES ↔ Educación Especial y enlaza al Directorio completo.
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <ul>
                                <li>IES Alcántara (Alcantarilla) ↔ CEE Eusebio Martínez (Alcantarilla)</li>
                                <li>IES Floridablanca (Murcia) ↔ CEIP Mariano Aroca (Murcia)</li>
                                <li>IES Sierra Minera (La Unión) ↔ CEE Enrique Viviente (La Unión)</li>
                                <li>IES Marqués de los Vélez (El Palmar) ↔ CEIP Ciudad de la Paz (El Palmar)</li>
                                <li>IES Cañada de las Eras (Molina de Segura) ↔ CEE Las Boqueras (Murcia)</li>
                            </ul>
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="directorio-de-centros.php">Ir al Directorio de Centros</a>
                        </p>
                    </div>
                </div>      
            </div>

            <div class="row gy-3 my-5 fact-item" id="startpack">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Arranca ahora (Start Pack)</h6>
                        <p class="mb-4" style="text-align:justify;">
                            Listo en 10 minutos. Descarga el Start Pack con los esenciales para lanzar tu reto de inclusión desde el aula.
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <ul>
                                <li>Idea Card (plantilla de ideación)</li>
                                <li>Plantilla de proyecto paso a paso (con lectura fácil)</li>
                                <li>Rúbrica exprés (Impacto · Inclusión · Simplicidad · Viabilidad)</li>
                                <li>Guía rápida de accesibilidad (pictos, contraste, alt-text, audio)</li>
                                <li>Consentimientos (voz/imagen) y mini-guía RGPD</li>
                                <li>Guion de Teatro Foro (dinámica de co-diseño con EE)</li>
                            </ul>
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="StartPack.php">Abrir Start Pack</a>
                        </p>
                    </div>
                </div>              
            </div>

            <div class="row gy-3 my-5 fact-item" id="livehub">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Live Hub: Eventos & Conexiones</h6>
                        <p class="mb-4" style="text-align:justify;">
                            Agenda viva para crear, aprender y compartir. Filtra por skill, centro o formato (online/presencial) y súmate en dos clics.
                        </p>

                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <p>Taller exprés de modelado 3D para crear soportes personalizados en aula.</p>
                                </div>
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <p>Sesión colaborativa de señalética accesible con pictogramas listos para imprimir.</p>
                                </div>
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <p>Office hours de TTS: resuelve dudas sobre voces sintéticas y flujos de publicación.</p>
                                </div>
                            </div>
                        </div>

                        <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="live-hub.php">Ir a Live Hub</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row gy-3 my-5 fact-item" id="repositorio">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Repositorio de recursos</h6>
                        <p class="mb-4" style="text-align:justify;">
                            Tu hub de materiales reutilizables. Sube modelos 3D (STL/3MF), vídeos cortos subtitulados, guías en lectura fácil, señalética con pictogramas y audios TTS.
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            Elige licencia Creative Commons y añade etiquetas claras (3D-print, TTS, pictos, calm tech…). Haz fork de un recurso, mejora y comparte. La idea es de todos; la mejora también.
                        </p>

                        <div class="container wow fadeIn mb-4" data-wow-delay="0.5s">
                            <div class="row">
                                <div class="col-sm-6 col-md-6" style="text-align:center;">
                                    <a class="btn btn-outline-primary" href="repositorio.php">Explorar recursos</a>
                                </div>
                                <div class="col-sm-6 col-md-6" style="text-align:center;">
                                    <a class="btn btn-outline-primary" href="subir-recurso.php">Subir recurso</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-3 my-5 fact-item" id="proyectos">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Proyectos en curso</h6>
                        <p class="mb-4" style="text-align:justify;">
                            De la idea al impacto, a la vista. Sigue cada equipo en cuatro pasos: Idea → Prototipo → Piloto → Publicado.
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            Cada tarjeta enlaza a su ficha con vídeo breve (30–45 s), código QR de acceso y el aula que ya lo está utilizando.
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="proyectos-en-curso.php">Ver todos los proyectos</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row gy-3 my-5 fact-item" id="comunidad">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="1.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Comunidad & Normas</h6>
                        <p class="mb-4" style="text-align:justify;">
                            Buen rollo, buenas prácticas. IA como copiloto: da pistas, no hace la tarea. Parte del trabajo va sin IA (manuscrito/oral).
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            Privacidad first: sin datos personales en recursos; avatares o manos, no caras (salvo consentimiento). Accesibilidad por defecto: contraste alto, pictos + texto, subtítulos y alt-text, pasos cortos.
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            Respeto total: quien más lo necesita, más decide. Se debate con argumentos, no con volumen.
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="politicas-y-normas.php">Leer normas completas</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="row gy-3 my-5 fact-item" id="microcopys">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="1.3s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Microcopys recomendados</h6>
                        <p class="mb-2" style="text-align:justify;">
                            <ul>
                                <li>Crea. Sube. Brilla.</li>
                                <li>Pedir ayuda a un especialista</li>
                                <li>Proponer una quedada</li>
                                <li>Ver office hours</li>
                                <li>Hacer fork de este recurso</li>
                                <li>Subir versión mejorada</li>
                                <li>Publicar demo (30–45 s)</li>
                            </ul>
                        </p>
                    </div>
                </div>      
            </div>

            <div class="row gy-3 my-5 fact-item" id="textos">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="1.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Textos auxiliares</h6>
                        <p class="mb-4 mt-2" style="text-align:justify;">
                            Alt-text sugeridos para asegurar accesibilidad desde la primera iteración:
                        </p>

                        <p class="mb-2" style="text-align:justify;">
                            <ul>
                                <li>Logo: “Logo de DGMakers 4Inclusion.”</li>
                                <li>Galería de recursos: “Miniaturas de modelos 3D, señalética accesible y vídeos con subtítulos.”</li>
                                <li>Kanban: “Tablero con tarjetas de proyectos: Idea, Prototipo, Piloto y Publicado.”</li>
                                <li>Calendario: “Agenda con quedadas por habilidades y ‘office hours’ de especialistas.”</li>
                            </ul>
                        </p>
                    </div>
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