<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Live Hub</title>
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
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Live Hub: Eventos & Conexiones</h1>
                            <h5 class="text-white text-uppercase mb-4 animated zoomIn"><i>Agenda viva para crear, aprender y compartir. Filtra por skill, centro o formato (online/presencial) y súmate en dos clics.</i></h4>
                            <!--a href="Jornadas4Inclusion.php#programa" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Ver programa</a>
                            <a href="Jornadas4Inclusion.php#claves" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Claves del día</a>
                            <a href="4Inclusion.php#livehub" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Live Hub: Eventos & Conexiones</a>
                            <a href="Jornadas4Inclusion.php" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Jornadas 4Inclusion</a-->
                            <h5 class="text-white text-uppercase mb-4 animated zoomIn" style="padding-top: 20px"><i>Alt: Quedadas & Demos · Playground 4Inclusion · Meet-ups DGMakers</i></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row gy-3 my-5 fact-item" id="calendario">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Calendario vivo</h6>
                        <p class="mb-4" style="text-align:justify;">
                            Consulta qué se viene esta semana y apúntate. Todo en <b>hora de Europa/Madrid</b>.
                        </p>
                        <p class="mb-4" style="text-align:justify;">
                            <b>Filtros rápidos</b>: Centro · Skill (3D, Vídeo, TTS, Pictos, Teatro) · Formato · Nivel · Accesibilidad.
                        </p>

                        <div class="container" style="padding-bottom: 50px;">
                            <div class="row">
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <h5 style="color: var(--primary)">Lunes 8 abril · 17:00 · Clinic</h5>
                                    <h4><b>Office Hours 3D</b></h4>
                                    <p>Trae tu STL y dudas de perfiles. Ajustamos altura de capa, relleno y tiempos. Sal con el perfil listo.</p>

                                    <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                                        <a class="btn btn-outline-primary" href="">Apuntarme</a>
                                    </p>                                    
                                </div>
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <h5 style="color: var(--primary)">Martes 9 abril · 18:30 · Lab</h5>
                                    <h4><b>Vídeo & Subtítulos Lab</b></h4>
                                    <p>Graba clips de 30–45 s y añade subtítulos claros. Audio limpio, planos estables y mensaje directo.</p>

                                    <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                                        <a class="btn btn-outline-primary" href="">Apuntarme</a>
                                    </p>                                    
                                </div>
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <h5 style="color: var(--primary)">Miércoles 10 abril · 16:00 · Clinic</h5>
                                    <h4><b>Señalética & Pictos</b></h4>
                                    <p>Carteles lectura fácil + pictos + QR con audio TTS. Señaliza aula, biblioteca o pasillos en una mañana.</p>

                                    <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                                        <a class="btn btn-outline-primary" href="">Apuntarme</a>
                                    </p>                                    
                                </div>
                            </div>
                        </div>

                        <div class="container" style="padding-bottom: 50px;">
                            <div class="row">
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <h5 style="color: var(--primary)">Jueves 11 abril · 18:00 · Match</h5>
                                    <h4><b>Match de Skills</b></h4>
                                    <p>Speed networking: “busco 3D”, “sé de TTS”, “edito vídeo”. Encuentra pareja de proyecto ya.</p>

                                    <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                                        <a class="btn btn-outline-primary" href="">Apuntarme</a>
                                    </p>                                    
                                </div>
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <h5 style="color: var(--primary)">Viernes 12 abril · 17:30 · Demo Day</h5>
                                    <h4><b>Demo Day</b></h4>
                                    <p>Presenta tu prototipo en 90 s. Feedback rápido, siguiente sprint decidido. Todo queda en galería.</p>

                                    <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                                        <a class="btn btn-outline-primary" href="">Apuntarme</a>
                                    </p>                                    
                                </div>
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <h5 style="color: var(--primary)">Sábado 13 abril · 10:30 · Mentoríac</h5>
                                    <h4><b>Mentorías 1:1</b></h4>
                                    <p>30 minutos para desbloquear tu proyecto: foco, siguiente paso y checklist de publicación.</p>

                                    <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                                        <a class="btn btn-outline-primary" href="">Apuntarme</a>
                                    </p>                                    
                                </div>
                            </div>
                        </div>

                        <div class="container" style="padding-bottom: 50px;">
                            <div class="row">
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <h5 style="color: var(--primary)">Domingo 14 abril · 19:00 · Clinic</h5>
                                    <h4><b>TTS & Comunicación Aumentativa</b></h4>
                                    <p>Crea soundboards y audios TTS de frases clave (sí/no, ayuda, pausa). Voz clara y accesible.</p>

                                    <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                                        <a class="btn btn-outline-primary" href="">Apuntarme</a>
                                    </p>                                    
                                </div>
                                <div class="col-sm-4 col-md-4">
                                </div>
                                <div class="col-sm-4 col-md-4">
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

            <div class="row gy-3 mb-5 fact-item" id="leyenda">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Leyenda de tipos de evento</h6>
                        <!--p class="mb-4" style="text-align:justify;">
                            Conoce quién está dentro. Este bloque presenta a los 5 dúos IES ↔ Educación Especial y enlaza al Directorio completo.
                        </p-->

                        <p class="mb-4" style="text-align:justify;">
                            <ul>
                                <li><b>Clinic</b>: práctica guiada.</li>
                                <li><b>Office Hours</b>: ventanas de ayuda de especialistas.</li>
                                <li><b>Demo Day</b>: presentaciones de 90 s + feedback.</li>
                                <li><b>Match</b>: speed networking de skills.</li>
                                <li><b>Mentoría</b>: 1:1 o 1:3, 30 min.</li>
                            </ul>
                        </p>

                        <!--p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="directorio-de-centros.php">Ir al Directorio de Centros</a>
                        </p-->
                    </div>
                </div>      
            </div>

            <div class="row gy-3 my-5 fact-item" id="capas">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Las 12 capas del Live Hub</h6>

                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <p><b>Office Hours 3D</b></p>
                                    <p>
                                       Trae tu STL y dudas de perfiles. Ajustamos altura de capa, relleno y tiempos. Te vas listo para imprimir.
                                    </p>
                                </div>
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <p><b>Vídeo & Subtítulos Lab</b></p>
                                    <p>
                                        Graba clips de 30–45 s y añade subtítulos claros. Audio limpio, planos estables y mensaje directo.
                                    </p>
                                </div>
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <p><b>Señalética & Pictos</b></p>
                                    <p>
                                        Carteles lectura fácil + pictos + QR con audio TTS. Señaliza aula, biblioteca o pasillos en una mañana.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <p><b>Lectura Fácil Studio</b></p>
                                    <p>
                                        Simplifica textos y guiones en 3–5 pasos. Probamos con usuarios, medimos claridad y mejoramos.
                                    </p>
                                </div>
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <p><b>Teatro Foro (ensayo)</b></p>
                                    <p>
                                        Escenas cortas de barreras reales y re-actuación con soluciones. Empatía ON, ideas útiles al momento.
                                    </p>
                                </div>
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <p><b>Demo Day</b></p>
                                    <p>
                                        Presenta tu prototipo en 90 s. Feedback rápido, siguiente sprint decidido. Todo queda en galería.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <p><b>Match de Skills</b></p>
                                    <p>
                                        Speed networking: “busco 3D”, “sé de TTS”, “edito vídeo”. Encuentra pareja de proyecto ya.
                                    </p>
                                </div>
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <p><b>TTS & Comunicación Aumentativa</b></p>
                                    <p>
                                        Crea soundboards y audios TTS de frases clave (sí/no, ayuda, pausa). Voz clara y accesible.
                                    </p>
                                </div>
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <p><b>AR/QR Cards</b></p>
                                    <p>
                                        Tarjetas con QR a mini-vídeos o gifs: “entrar a clase”, “pedir turno”, “ir a biblioteca”. Rápido y útil.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <p><b>3D Apoyos Rápidos</b></p>
                                    <p>
                                        Diseña grips, guías de lectura, adaptadores. Incluye perfil de impresión y ficha de uso en A4.
                                    </p>
                                </div>
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <p><b>Data & Scoreboard</b></p>
                                    <p>
                                        Leemos KPIs (uso, adopciones, equidad) y decidimos el próximo sprint. Lo que se mide, mejora.
                                    </p>
                                </div>
                                <div class="col-sm-4 col-md-4 fact-item">
                                    <p><b>Mentorías 1:1</b></p>
                                    <p>
                                        30 minutos para desbloquear tu proyecto: foco, siguiente paso y checklist de publicación.
                                    </p>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>

            <div class="row gy-3 my-5 fact-item" id="conecta">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Conecta, crea y comparte</h6>

                        <p class="mb-4" style="text-align:justify;">
                            Cada evento es una chispa; tu proyecto, la luz. Nos vemos en el próximo slot.
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="4Inclusion.php">Volver a DGMakers 4Inclusion</a>
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