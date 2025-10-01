<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DGContenidos DGMaths</title>
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
        $img="../../..";                   // ruta a la carpeta de imágenes
        $pages="../..";                    // ruta a la carpeta del resto de páginas de la web
        $index="../../..";                 // ruta a la carpeta del index.php
        include "../../../menu.php";        // inlcuye el menu común
    ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">

                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="../../../img/DGMaths/MathFondo01.png" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 2">
                    <img class="img-fluid" src="../../../img/DGMaths/MathFondo02.jpeg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" class="active" aria-current="true" aria-label="Slide 3">
                    <img class="img-fluid" src="../../../img/DGMaths/MathFondo03.jpg" alt="Image">
                </button>
                
            </div>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="w-100" src="../../../img/DGMaths/MathFondo01.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">DGMakers Contenidos</h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">DGMaths</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../../../img/DGMaths/MathFondo02.jpeg" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Los creadores son los  </h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Estudiantes</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../../../img/DGMaths/MathFondo03.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">

                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Enseñar</h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">es la mejor forma de aprender</h1>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img-border" style ="height: 470px;">
                        <img   src="../../../img/DGMaths/LogoDGMathsC.png" alt="" style ="padding-left: -50px; margin-left: -20px ; width: 440px; height: 350px;">  <!-- class="img-fluid" -->
                        
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">¿Qué es DGMaths?</h6>
                        <h1 class="display-6 mb-4">¿Cómo <span class="text-primary">aprender y enseñar</span> de otra forma?</h1>
                        <p>¿Y si son los estudiantes los que crean materiales para enseñar matemáticas?</p>
                        <p class="mb-4">Y si utilizamos la metodología de Grupos de Desarrollo para aprender matemáticas. Unos estudiantes crean maetriales para formar a otros.</p>
                        <p class="mb-4">Dedicamos algunas sesiones a la creación de dichos materiales y los compartimos en la web del proyecto.</p>
                        <!-- <div class="d-flex align-items-center mb-4 pb-2">
                            <img class="flex-shrink-0 rounded-circle" src="../../../img/team-1.jpg" alt="" style="width: 50px; height: 50px;">
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


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Objetivos</h6>
                <h1 class="display-6 mb-4">Curso 22 - 23</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    
                        <a class="service-item d-block rounded text-center h-100 p-4" href="">
                            <img class="img-fluid rounded mb-4" 
                            style="
                            filter:grayscale(100%);
                            opacity:.5;
                            transition:0.6s;
                            -webkit-transition: .6s;
                            -moz-transition: .6s;
                            "
                            src="../../../img/DGMaths/1ESOTema01.PNG" alt="">
                            <h4 class="mb-0">Números enteros</h4>
                        </a>
                   
                    
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" style="
                            filter:grayscale(100%);
                            opacity:.5;
                            transition:0.6s;
                            -webkit-transition: .6s;
                            -moz-transition: .6s;
                            " src="../../../img/DGMaths/1ESOTema02.PNG" alt="">
                        <h4 class="mb-0">Números racionales</h4>
                    </a>
                    
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="DGMaths_ecuaciones.php">
                        <img class="img-fluid rounded mb-4" src="../../../img/DGMaths/1ESOTema03.PNG" alt="">
                        <h4 class="mb-0">Ecuaciones</h4>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">¿Cómo participar?</h6>
                        <h1 class="display-6 mb-4">¿Qué pasos debemos dar?</h1>
                        <p class="mb-4" style="text-align:justify;">
                            Dividimos a los estudiantes en varios equipos formados por entre 5 y 7 estudiantes, 
                            a cada equipo le asignamos desarrollar una parte del tema. Estos materiales los podemos
                            evaluar con estudiantes que tengan dificultades en ellos, bien de este grupo o de otros grupos.
                            Finalmente, publicamos los materiales. 
                        </p>
                        <p>
                            En resumen:
                            <ol style="list-style-type: decimal; padding-left: 2em;">
                                <li>Forma varios equipos de estudiantes.</li>
                                <li>Cada equipo crea materiales sobre una parte de un tema.</li>
                                <li>Compartamos los materiales.</li>
                            </ol>
                        </p>
                        
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s" style="width: 400px ; height: 425px">
                    <div class="img-border" style="width: 400px ; height: 325px"> 
                        <img class="img-fluid" src="../../../img/DGMaths/FasesDGMath.png" alt="" style="width: 400px ; height: 325px"> 
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
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img-border" style ="height: 400px;">
                        <img   src="../../../img/DGMaths/DGMathProductos.PNG" alt="" style =" ">  <!-- class="img-fluid" -->
                        
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Productos finales</h6>
                        <h1 class="display-6 mb-4">¿Qué debemos construir?</h1>
                        <p class="mb-4" style="text-align:justify;">
                            Los materiales deben permitir a un estudiante aprender de forma autónoma una parte de un tema. 
                            Es necesario incluir al menos:
                        </p>
                        <p>
                            
                            <ol style="list-style-type: decimal; padding-left: 2em;">
                                <li>Un vídeo explicativo.</li>
                                <li>Un ejemplo resuelto.</li>
                                <li>Dos actividades propuestas.</li>
                            </ol>
                        </p>
                        
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Recursos -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Recursos</h6>
                <h1 class="display-6 mb-4">Plantillas, ejemplos, talleres...</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    
                    <!--<div class="Fecha">
                            oct
                        </div>
                        <div style="position: relative; z-index: 1;"> -->
                            <a class="service-item d-block rounded text-center h-100 p-4" href="https://docs.google.com/presentation/d/1kdfmlysnuMpcvZvsLqzOHUMm7Vqb5oxUOM_t4XNQnw0/edit?usp=sharing">
                                <img class="img-fluid rounded mb-4" src="../../../img/DGMaths/PortPlantilla.png" alt="">
                                <h4 class="mb-0">Plantilla para presentación</h4>
                            </a>
                        <!-- </div> -->
                    
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- <div class="Fecha">
                        oct
                    </div>
                    <div style="position: relative; z-index: 1;"> -->
                        <a class="service-item d-block rounded text-center h-100 p-4" href="https://docs.google.com/presentation/d/1F5f4SFtDyMsU20pe64h-OxWvsaMTStutz0cNR0dupB8/edit?usp=sharing">
                            <img class="img-fluid rounded mb-4" src="../../../img/DGMaths/DGMathEjem1.png" alt="">
                            <h4 class="mb-0">Ejemplo de presentación</h4>
                        </a>
                    <!-- </div> -->
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- <div class="Fecha">
                        oct
                    </div>
                    <div style="position: relative; z-index: 1;"> -->
                        <a class="service-item d-block rounded text-center h-100 p-4" href="TVideo.php">
                            <img class="img-fluid rounded mb-4" src="../../../img/Talleres/TVideo/TDGVideo01.jpg" alt="">
                            <h4 class="mb-0">Grabación y edición de vídeo</h4>
                        </a>
                    <!-- </div> -->
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- <div class="Fecha">
                        oct
                    </div>
                    <div style="position: relative; z-index: 1;"> -->
                        <a class="service-item d-block rounded text-center h-100 p-4" href="">
                            <img class="img-fluid rounded mb-4" src="../../../img/DGMaths/Creatividad.jpg" alt="">
                            <h4 class="mb-0">Creatividad y expresión</h4>
                        </a>
                    <!-- </div> -->
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- <div class="Fecha">
                        oct
                    </div>
                    <div style="position: relative; z-index: 1;"> -->
                        <a class="service-item d-block rounded text-center h-100 p-4" href="">
                            <img class="img-fluid rounded mb-4" src="../../../img/DGMaths/Exponer.jpg" alt="">
                            <h4 class="mb-0">Exponer</h4>
                        </a>
                    <!-- </div> -->
                </div>
                
                

            </div>
        </div>
    </div>

    <!-- Recursos -->


    <!-- Temporalización -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Temporalización</h6>
                <h1 class="display-6 mb-4">Sesiones necesarias:</h1>
                <p style ="text-align: justify; padding-bottom: 50px;">
                    Si dividimos a los estudiantes en equipos, el tiempo necesario es mejor.
                </p>
                <table style="width:100%; ">
                    <tr style="background-color: #015183; color:white; border: 0.5px ;border-width: 1px; border-color: #015183; border-style:solid;">
                        <th>Sesión</th>
                        <th>Contenidos</th>
                        <th>Duración</th>
                    </tr>
                    <tr
                        style="text-align: justify; border: 0.5px ;border-width: 1px; border-color: #015183; border-style:solid;">
                        <td>Plantillas</td>
                        <td>Crear las plantillas usadas</td>
                        <td>2 horas</td>
                    </tr>
                    <tr
                        style="text-align: justify; border: 1px ;border-width: 1px; border-color: #015183; border-style:solid;">
                        <td>Contenidos</td>
                        <td>Selección y organización de los contenidos </td>
                        <td>1 hora</td>
                    </tr>
                    <tr
                        style="text-align: justify; border: 1px ;border-width: 1px; border-color: #015183; border-style:solid;">
                        <td>Guiones</td>
                        <td>Diseño de guiones</td>
                        <td>1 hora</td>
                    </tr>
                    <tr
                        style="text-align: justify; border: 1px ;border-width: 1px; border-color: #015183; border-style:solid;">
                        <td>Creación de materiales</td>
                        <td>Grabaciones y textos</td>
                        <td>2 horas</td>
                    </tr>
                    <tr
                        style="text-align: justify; border: 1px ;border-width: 1px; border-color: #015183; border-style:solid;">
                        <td>Editar y publicar</td>
                        <td>Editar los materiales y publicarlos</td>
                        <td>1 hora</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="text-align: right ; padding-right: 10px;">Total:</td>
                        <td style = "background-color: #015183; color:white"> 7 horas</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- Temporalización -->

    <!-- Footer común -->
	<?php
        $img="../../../";                   // ruta a la carpeta de imágenes
        $pages="../../";                    // ruta a la carpeta del resto de páginas de la web
        $index="../../../";                 // ruta a la carpeta del index.php
        include "../../../footer.php";      // inlcuye el footer común
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