<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GDPatrimonio</title>
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
    <link href="../../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
	<!-- Menú común -->
	<?php
        $img="../..";                  // ruta a la carpeta de imágenes
        $pages="..";                 // ruta a la carpeta del resto de páginas de la web
        $index="../..";                // ruta a la carpeta del index.php
        include "../../menu.php";      // inlcuye el menu común
    ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">

                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="../../img/GDPatrimonio/Taller3J.JPG" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                    <img class="img-fluid" src="../../img/GDPatrimonio/Taller2J.JPG" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                    <img class="img-fluid" src="../../img/GDPatrimonio/Taller1J.JPG" alt="Image">
                </button>
            </div>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="w-100" src="../../img/GDPatrimonio/Taller3J.JPG" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Forma parte de una</h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Comunidad de Innovación</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../../img/GDPatrimonio/Taller2J.JPG" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Desarrolla tu creatividad </h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Construyendo Proyectos Útiles</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src= "../../img/GDPatrimonio/Taller1J.JPG" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">

                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Avanza en tu </h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Formación Tecnológica</h1>

                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <img class="img-fluid rounded mb-4" src="../../img/GDPatrimonio/LogoGDPatrimonio.png" alt="">
    </div>

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div style="height: 470px; border-width: 0px;">
                        <!-- class="img-border" -->
                        <img src="../../img/GDPatrimonio/CentrosPart.png" alt=""
                            style="padding-left: -50px; margin-left: -20px ; width: 440px; height: 220px;">
                        <!-- class="img-fluid" -->

                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Nosotros</h6>
                        <h1 class="display-6 mb-4">Somos un equipo de <span class="text-primary">20 centros</span> de
                            primaria y secundaria</h1>
                        <p>Desarrollamos materiales sobre el Patrimonio de la Región de Murcia</p>
                        <p>Puedes formar parte del Programa Educativo, en las convocatorias que se convocan para ello
                        </p>
                        <p class="mb-4">Usando la metodología de Grupos de Desarrollo, podrás formarte, crear proyectos,
                            compartirlos en eventos y formar a otros estudiantes</p>
                        <!-- <div class="d-flex align-items-center mb-4 pb-2">
                            <img class="flex-shrink-0 rounded-circle" src="../../img/team-1.jpg" alt="" style="width: 50px; height: 50px;">
                            <div class="ps-4">
                                <h6>Ginés Ruiz</h6>
                                <small>Coordinador</small>
                            </div>
                        </div> -->
                        <!-- <a class="btn btn-primary rounded-pill py-3 px-5" href="">Leer más</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

        <!-- Colaboradores-->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h6 class="section-title bg-white text-center text-primary px-3">Colaboran</h6>
                    <!-- <h1 class="display-6 mb-4">En proyectos y becas</h1> -->
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="fact-item bg-light rounded text-center h-100 p-5">
                            <img class="img-fluid rounded" src="../../img/Colaboran/GDG.jpg">
                            <!-- <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Años de experiencia</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">3</h1> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="fact-item bg-light rounded text-center h-100 p-5">
                            <img class="img-fluid rounded" src="../../img/Colaboran/LogoGoldenEdu.png">
                            <!--  <i class="fa fa-users-cog fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Número de participantes</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">117</h1> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="fact-item bg-light rounded text-center h-100 p-5">
                            <img class="img-fluid rounded" src="../../img/Colaboran/logo-fundacion-Integra.png">
                            <!-- <i class="fa fa-check fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Proyectos</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">7</h1> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="fact-item bg-light rounded text-center h-100 p-5">
                            <img class="img-fluid rounded" src="../../img/Colaboran/LogoMicrosoft.png">
                            <!-- <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Años de experiencia</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">3</h1> -->
                        </div>
                    </div>

                </div>
                <!-- Segunda fila -->
                <div class="row g-4" style="padding-top: 20px;">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="fact-item bg-light rounded text-center h-100 p-5">
                            <img class="img-fluid rounded" src="../../img/Colaboran/vv.jpg.png">
                            <!-- <i class="fa fa-users fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Centros participantes</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">15</h1> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="fact-item bg-light rounded text-center h-100 p-5">
                            <img class="img-fluid rounded" src="../../img/Colaboran/santillana.jpg">
                            <!-- <i class="fa fa-check fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Proyectos</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">7</h1> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="fact-item bg-light rounded text-center h-100 p-5">
                            <img class="img-fluid rounded" src="../../img/Colaboran/LogoLaberit.PNG">
                            <!--  <i class="fa fa-users-cog fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Número de participantes</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">117</h1> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="fact-item bg-light rounded text-center h-100 p-5">
                            <img class="img-fluid rounded" src="../../img/Colaboran/LogoMulti.PNG">
                            <!-- <i class="fa fa-users fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Centros participantes</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">15</h1> -->
                        </div>
                    </div>

                </div>
                <!-- Tercera fila -->
                <div class="row g-4" style="padding-top: 20px;">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="fact-item bg-light rounded text-center h-100 p-5">
                            <img class="img-fluid rounded" src="../../img/Colaboran/logommm.png">
                            <!-- <i class="fa fa-check fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Proyectos</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">7</h1> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="fact-item bg-light rounded text-center h-100 p-5">
                            <img class="img-fluid rounded" src="../../img/Colaboran/LogoAyuntAlca.PNG">
                            <!-- <i class="fa fa-check fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Proyectos</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">7</h1> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="fact-item bg-light rounded text-center h-100 p-5">
                            <img class="img-fluid rounded" src="../../img/Colaboran/SmLogo.png">
                            <!-- <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Años de experiencia</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">3</h1> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="fact-item bg-light rounded text-center h-100 p-5">
                            <img class="img-fluid rounded" src="../../img/Colaboran/oxford.jpg.png">
                            <!--  <i class="fa fa-users-cog fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Número de participantes</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">117</h1> -->
                        </div>
                    </div>


                </div>
                <!-- Cuarta fila -->
                <div class="row g-4" style="padding-top: 20px;">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="fact-item bg-light rounded text-center h-100 p-5">
                            <img class="img-fluid rounded" src="../../img/Colaboran/AMPA1.png">
                            <!-- <i class="fa fa-users fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Centros participantes</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">15</h1> -->
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Colaboradores-->

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