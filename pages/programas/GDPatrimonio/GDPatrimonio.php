<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Programa Educativo GDPatrimonio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
</head>

<body>
	<!-- Menú común -->
	<?php
        $img="../../../img";                   // ruta a la carpeta de imágenes
        $pages="../../../pages";               // ruta a la carpeta del resto de páginas de la web
        $index="../../..";                     // ruta a la carpeta del index.php
        include "../../../menu.php";           // inlcuye el menu común
    ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">

                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="../../../img/GDPatrimonio/Taller3J.JPG" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                    <img class="img-fluid" src="../../../img/GDPatrimonio/Taller2J.JPG" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                    <img class="img-fluid" src="../../../img/GDPatrimonio/Taller1J.JPG" alt="Image">
                </button>
            </div>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="w-100" src="../../../img/GDPatrimonio/Taller3J.JPG" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Forma parte de una</h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Comunidad de Innovación</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../../../img/GDPatrimonio/Taller2J.JPG" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Desarrolla tu creatividad </h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Construyendo Proyectos Útiles</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src= "../../../img/GDPatrimonio/Taller1J.JPG" alt="Image">
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
        <img class="img-fluid rounded mb-4" src="../../../img/GDPatrimonio/LogoGDPatrimonio.png" alt="">
    </div>

    <!-- Service End -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row gy-4 align-items-center wow fadeInUp" data-wow-delay="0.1s">
              
                <div class="col-lg-7">
                    <div class="bg-white rounded-3 shadow-sm p-4">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Centros que participan</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li>CBEP Artero</li>
                                    <li>CEIP El Alba</li>
                                    <li>CEIP Las Tejeras</li>
                                    <li>CEIP Virgen del Oro</li>
                                    <li>Colegio Susarte</li>
                                    <li>IES Alcántara</li>
                                    <li>IES Bartolomé Pérez Casas</li>
                                    <li>IES Cañada de las Eras</li>
                                    <li>IES Diego Tortosa</li>
                                    <li>IES Europa</li>
                                    <li>IES Floridablanca</li>
                                    <li>IES Francisco de Goya</li>
                                    <li>IES José Luis Castillo-Puche</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled mb-0">
                                    <li>IES Jose Planes</li>
                                    <li>IES Licenciado Francisco Cascales</li>
                                    <li>IES Los Albares</li>
                                    <li>IES Los Molinos</li>
                                    <li>IES Mediterráneo</li>
                                    <li>IES Miguel Hernández</li>
                                    <li>IES Príncipe de Asturias</li>
                                    <li>IES Rambla de Nogalte</li>
                                    <li>IES Ribera de los Molinos</li>
                                    <li>IES Saavedra Fajardo</li>
                                    <li>IES San Isidoro</li>
                                    <li>IES Vega del Argos</li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-start text-primary pe-3">¿Qué ventajas proporciona?
                </h6>
                <h1 class="display-6 mb-4">¿Por qué participar en GDPatrimonio?</h1>
            </div>
        </div>
    </div>


        <!-- Feature Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="h-100">
                            <!-- <h6 class="section-title bg-white text-start text-primary pe-3">¿Qué ventajas proporciona?
                            </h6> -->
                            <h5 style = "color:red">Exponer delante de 1000 estudiantes</h5>
                            <p class="mb-4" style="text-align:justify  ;">
                                Las I Jornadas se han realizado en el Auditorio y Centro de Congresos Víctor Villegas de Murcia
                                donde nuestros estudiantes han expuesto sus proyectos delante 1000 personas. 
                            </p>
                            <h5 style = "color:red">Trabajar con estudiantes de 15 centros</h5>
                            <p class="mb-4" style="text-align:justify  ;">
                                El trabajo en equipo, colaborando, formándose y exponiendo de forma conjunta, enriquece
                                a todos los estudiantes del proyecto.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="img-border">
                            <img class="img-fluid" src="../../../img/GDPatrimonio/Comunidad.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->

    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="../../../img/GDPatrimonio/ImpTalleres.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <!-- <h6 class="section-title bg-white text-start text-primary pe-3">¿Qué ventajas proporciona?
                        </h6> -->
                        <h5 style = "color:red">Impartir talleres con estudiantes de otros centros</h5>
                        <p class="mb-4" style="text-align:justify  ;">
                            Se realizan talleres online y también presenciales en las jornadas.
                        </p>
                        <h5 style = "color:red">Los ponentes son los propios estudiantes</h5>
                        <p class="mb-4" style="text-align:justify  ;">
                            Los estudiantes son los formadores, ellos son los protagonistas de los talleres que forman a 
                            estudinates de otros centros presencialmente y/u online.
                        </p>
                        <h5 style = "color:red">Los docentes se forman con docentes de 15 centros</h5>
                        <p class="mb-4" style="text-align:justify  ;">
                            Esto permite un enriquecimiento de la formación y nos permite compartir experencias y 
                            formarnos unos a otros.
                        </p>
                        <h5 style = "color:red">Tanto docentes como estudiantes nos formamos por Grupos de Desarrollo</h5>
                        <p class="mb-4" style="text-align:justify  ;">
                            La formación se realiza por Grupos de Desarrollo, siendo los ponentes estudiantes y/o docentes de los 
                            distintos centros, aunque también podemos invitar a otros ponentes.

                        </p>
                        <p class="mb-4" style="text-align:justify  ;">
                            En las I Jornadas de Docentes, los ponentes de la mañana fueron estudiantes de los distintos centros participantes.

                        </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Convocatoria</h6>
                <h1 class="display-6 mb-4">Programa Educativo</h1>
                <p>
                    <a class="service-item d-block rounded text-center h-100 p-4"
                        href="https://programaseducativos.es/programa/gdpatrimonio-grupos-de-desarrollo-del-patrimonio/"
                        target="_blank">
                        <img class="img-fluid rounded mb-4" src="../../../img/GDPatrimonio/carmGDP.png" alt="">
                        <!--h4 class="mb-0">Convocatoria oficial</h4-->
                    </a>
                </p>
            </div>
        </div>
    </div>

    <!-- Publicaciones -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Publicaciones</h6>
                <h1 class="display-6 mb-4">Conoce nuestro proyecto</h1>
                <p>
                    <a class="service-item d-block rounded text-center h-100 p-4"
                        href="https://digitum.um.es/digitum/bitstream/10201/91774/1/reif2_5.pdf"
                        target="_blank">
                        <img class="img-fluid rounded mb-4" src="../../../img/GDPatrimonio/Publicacion1.png" alt="">
                        <!--h6 class="mb-0">GDPatrimonio: creando materiales para el patrimonio de la Región de Murcia</h6-->
                    </a>
                </p>
            </div>
            
        </div>
    </div>

   
        <!-- Footer común -->
        <?php
        $img="../../../img";                   // ruta a la carpeta de imágenes
        $pages="../../../pages";               // ruta a la carpeta del resto de páginas de la web
        $index="../../..";                     // ruta a la carpeta del index.php
        include "../../../footer.php";         // inlcuye el footer común
        ?>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
                class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script-->
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
