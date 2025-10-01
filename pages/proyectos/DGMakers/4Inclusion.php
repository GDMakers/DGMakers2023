<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DGMakers 4Inclusion</title>
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

                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1">
                    <img class="w-100" src="../../../img/4Inclusion/Cartel4InclusionH.png" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                    <img class="w-100" src= "../../../img/4Inclusion/IMG_9344.JPG" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                    <img class="w-100" src= "../../../img/4Inclusion/IMG_9345.JPG" alt="Image">
                </button>
            </div>
            <div class="carousel-inner">
  
                <div class="carousel-item active">
                    <img class="w-100" src="../../../img/4Inclusion/Cartel4InclusionH.png" alt="Image">
                    
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Ayúdanos </h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">a cambiarlo todo</h1>
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../../../img/4Inclusion/IMG_9344.JPG" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Construye con nosotros </h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Redefine la inclusión</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    
                    <img class="w-100" src= "../../../img/4Inclusion/IMG_9345.JPG" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Forma parte de una</h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Comunidad </h1>
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



    <!-- About Start -->
    <div class="container-xxl py-5" style="margin-bottom: 0px;">
        <div class="container" style="margin-bottom: 0px;">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div style="height: 470px; border-width: 0px;">
                        <!-- class="img-border" -->
                        <img src="../../../img/4Inclusion/Logo4Inclusion.png" alt=""
                            style="padding-left: -50px; margin-left: -20px ; width: 440px; height: 320px;">
                        <!-- class="img-fluid" -->

                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">¿Qué es</h6>
                        <h1 class="display-6 mb-4">4Inclusion?</h1>
                        <p>Un equipo de centros dispuestos a redefinir la inclusión.</p>
                        <p>Equipos de estudiantes de educación especial, primaria y secundaria creando juntos.
                        </p>
                        <p class="mb-4">Usando la metodología de Grupos de Desarrollo, podrás formarte, crear proyectos,
                        compartirlos en eventos y formar a otros estudiantes</p>
                        <p class="mb-4">El 4 referencia a los cuatro tipos de diversidad que se buscan incluir: diversidad étnica, cultural, de género y de habilidade
                        </p>
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
                <h6 class="section-title bg-white text-center text-primary px-3">Equipo</h6>
                <h6><img class="img-fluid rounded mb-4" src="../../../img/4Inclusion/Team4Inclusion.png" alt=""></h6>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <!--h1 class="display-6 mb-4">¿Qué hacemos?</h1-->
                <h6 class="section-title bg-white text-center text-primary px-3">¿Qué hacemos?</h6>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4"
                        href=""
                        target="_blank">
                        <img class="img-fluid rounded mb-4" src="../../../img/4Inclusion/CajaTeach.png" alt="">
                        <h4 class="mb-0">Crear materiales útiles</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4"
                        href="" target="_blank">
                        <img class="img-fluid rounded mb-4" src="../../../img/4Inclusion/LectorOcular.png" alt="">
                        <h4 class="mb-0">Usar lectores oculares</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4"
                        href=""
                        target="_blank">
                        <img class="img-fluid rounded mb-4" src="../../../img/4Inclusion/IMG_9483.JPG" alt="">
                        <h4 class="mb-0">Trabajar en equipo</h4>
                    </a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4"
                        href=""
                        target="_blank">
                        <img class="img-fluid rounded mb-4" src="../../../img/4Inclusion/TallerIOS.png" alt="">
                        <h4 class="mb-0">Formación para estudiantes</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4"
                        href="" target="_blank">
                        <img class="img-fluid rounded mb-4" src="../../../img/4Inclusion/TallerDGMakers.png" alt="">
                        <h4 class="mb-0">Talleres impartidos por DGMakers</h4>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a class="service-item d-block rounded text-center h-100 p-4"
                        href=""
                        target="_blank">
                        <img class="img-fluid rounded mb-4" src="../../../img/4Inclusion/FormDocentes.png" alt="">
                        <h4 class="mb-0">Formación para docentes</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-start text-primary pe-3">¿Quieres unirte?
                </h6>
                <h1 class="display-6 mb-4">Forma parte del equipo DGMakers 4Inclusion</h1>
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
                            <h5 style = "color:red">Como centro</h5>
                            <p class="mb-4" style="text-align:justify  ;">
                                Selecciona un coordinador y contacta con nosotros.
                            </p>
                            <h5 style = "color:red">Como docente</h5>
                            <p class="mb-4" style="text-align:justify  ;">
                                Selecciona a un grupo de estudiantes y crea un equipo DGMakers.
                            </p>
                            <h5 style = "color:red">Como estudiante</h5>
                            <p class="mb-4" style="text-align:justify  ;">
                                Todos podemos aportar algo: diseña, crea presentaciones, imprime en 3D...
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/vITabvM9dEg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        
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
                    <img class="img-fluid" src="../../../img/4Inclusion/CompProyecto.PNG" alt=""
                    style="padding-left: -50px; margin-left: -20px ; width: 500px; height: 520px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3">¿Qué puedes crear?
                    </h6> 
                    <h5 style = "color:red">Creación de cajas Teacch</h5>
                    <p class="mb-4" style="text-align:justify  ;">
                        Diseña e imprime cajas Teacch.
                    </p>
                    <h5 style = "color:red">Productos de apoyo</h5>
                    <p class="mb-4" style="text-align:justify  ;">
                        Ayuda a estudiantes con dificultades a abrir puertas, usar sensores, activar mecanismos...
                    </p>
                    <h5 style = "color:red">Sistema de intercambio de imágenes</h5>
                    <p class="mb-4" style="text-align:justify  ;">
                        Crea materiales para la comunicación visual de estudiantes con dificultades.
                    </p>
                    <h5 style = "color:red">Creación de material audiovisual</h5>
                    <p class="mb-4" style="text-align:justify  ;">
                        Crea vídeos, podcast... con otros estudiantes.    
                    </p>
                    <h5 style = "color:red">Apps de comunicación</h5>
                    <p class="mb-4" style="text-align:justify  ;">
                        Crea Geniallys, presentaciones...

                    </p> 
                    <h5 style = "color:red">Mundos Minecraft</h5>
                    <p class="mb-4" style="text-align:justify  ;">
                        Crea mundos en Minecraft Educación para ayudar a otros.
                    </p>
                    <h5 style = "color:red">Crea robots útiles</h5>
                    <p class="mb-4" style="text-align:justify  ;">
                        Construye robots que ayuden en tareas cotidianas.
                    </p>

                </div>
            </div>
            
        </div>
    </div>
</div>


 <!-- Publicaciones -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">

            <iframe width="560" height="315" style="margin-bottom: 50px;" src="https://www.youtube.com/embed/ST2KwcF-FVA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


            <h6 class="section-title bg-white text-center text-primary px-3">Pasos a seguir</h6>
            <h1 class="display-6 mb-4">como centro</h1>
            
                <a class="service-item d-block rounded text-center h-100 p-4">
                    <h6 class="mb-0">Paso 1: Contacta con nosotros</h6>
                </a>
                <a class="service-item d-block rounded text-center h-100 p-4">
                    <h6 class="mb-0">Paso 2: Crea un equipo</h6>
                </a>
                <a class="service-item d-block rounded text-center h-100 p-4">
                    <h6 class="mb-0">Paso 3: Construye con nosotros</h6>
                </a>


        </div>
        
    </div>
</div>
<!-- Service End -->
        
    <!-- Talleres asociados -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">4Inclusion</h6>
                <h1 class="display-6 mb-4">Principios básico del proyecto</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="../../../img/4Inclusion/AprendeParaEnse.PNG" alt="">
                        <h4 class="mb-0">Aprende para enseñar</h4>
                        <p></p>
                        <h6>   Enseña a otros lo que sabes para que la comunidad crezca.</h6>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- <div class ="Fecha">
                        16 nov
                    </div> -->
                    <div style="position: relative; z-index: 1;">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="../../../img/4Inclusion/98vs2.PNG" alt="">
                        <h4 class="mb-0">Trabaja con otros estudiantes. </h4>
                        <p></p>
                        <h6>    Colaborar no implica un 50%, a veces 98% y 2% implica igualdad</h6>
                    </a>
                    </div>
                </div>
               
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    
                    <!--<div class="Fecha">
                            oct
                        </div>
                        <div style="position: relative; z-index: 1;"> -->
                            <a class="service-item d-block rounded text-center h-100 p-4" href="">
                                <img class="img-fluid rounded mb-4" src="../../../img/4Inclusion/Equipo.PNG" alt="">
                                <h4 class="mb-0">Compartimos los materiales del proyecto. </h4>
                                <p></p>
                                <h6>No somos distintos centros, somos un equipo</h6>
                            </a>
                        <!-- </div> -->
                    
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a class="service-item d-block rounded text-center h-100 p-4" href="">
                        <img class="img-fluid rounded mb-4" src="../../../img/4Inclusion/Share.PNG" alt="">
                        <h4 class="mb-0">Compartimos todo lo que hacemos </h4>
                        <p></p>
                        <h6> Los recursos creados se comparten en abierto: Github.</h6>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- <div class="Fecha" >
                        27 oct
                    </div> -->
                    <div style="position: relative; z-index: 1;">
                        <a class="service-item d-block rounded text-center h-100 p-4" href="">
                            <img class="img-fluid rounded mb-4" src="../../../img/4Inclusion/DarAntes.PNG" alt="">
                            <h4 class="mb-0">Dar antes de recibir </h4>
                        <p></p>
                        <h6>No esperes a recibir, sé el primero en compartir</h6>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- <div class="Fecha">
                        11 nov
                    </div> -->
                    <div style="position: relative; z-index: 1;">
                        <a class="service-item d-block rounded text-center h-100 p-4" href="">
                            <img class="img-fluid rounded mb-4" src="../../../img/4Inclusion/Util.PNG" alt="">
                            <h4 class="mb-0"> Crea algo útil</h4>
                        <p></p>
                        <h6> Utiliza la metodología de Grupos de Desarrollo  </h6>
                        </a>
                    </div>
                </div>
                

            </div>
        </div>
    </div>

    <!-- Service End -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Presentación del proyecto
                </h6>
                <h1 class="display-6 mb-4">DGMakers 4Inclusion</h1>
                <h4>22 de marzo de 2023</h4>
                <h5 style="font-size:medium; font-style:normal " > Con la Consejería de Educación, Fundación Integra, Microsoft, GoldenMac, Irisbond... numerosas asociaciones y centros educativos se 
                    presentó el proyecto y se realizaron numerosos talleres donde estudiantes de secundaria y educación especial trabajaron de forma conjunta.
                </h5>
            </div>
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <a href="4Inclusion presentacion.php">
                    <img class="img-fluid rounded" src="../../../img/4Inclusion/Inicio4Inclusion.PNG"> 
                </a>
            </div>
        </div>
    </div>

     <!-- Medios de comunicación-->
     <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3 mb-3">El proyecto en los medios</h6>
                <!-- <h1 class="display-6 mb-4">En proyectos y becas</h1> -->
                <p class="fact-item bg-light rounded text-center h-100 p-3">
                        <a href="https://news.microsoft.com/es-es/2023/03/23/el-instituto-de-ies-alcantara-presenta-el-proyecto-4inclusion-que-mejora-las-capacidades-digitales-de-docentes-y-estudiantes-con-necesidades-educativas-especiales-con-tecnologia-de-microsoft/?ocid=AID3052872_TWITTER_oo_spl100003937708472">
                            <img class="img-fluid rounded" src="../../../img/4Inclusion/Microsoft.png">
                        </a>
                </p>
            </div>
        </div>
    </div>
    <!-- Colaboradores-->



        <!-- Colaboradores-->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h6 class="section-title bg-white text-center text-primary px-3">Colaboran</h6>
                    <!-- <h1 class="display-6 mb-4">En proyectos y becas</h1> -->
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="fact-item bg-light rounded text-center h-100 p-5">
                            <img class="img-fluid rounded" src="../../../img/4Inclusion/LOGOCONS.jpg">
                            <!-- <i class="fa fa-check fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Proyectos</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">7</h1> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="fact-item bg-light rounded text-center h-100 p-5">
                            <img class="img-fluid rounded" src="../../../img/Colaboran/logo-fundacion-Integra.png">
                            <!-- <i class="fa fa-check fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Proyectos</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">7</h1> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="fact-item bg-light rounded text-center h-100 p-5">
                            <img class="img-fluid rounded" src="../../../img/Colaboran/LogoGoldenEdu.png">
                            <!--  <i class="fa fa-users-cog fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Número de participantes</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">117</h1> -->
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="fact-item bg-light rounded text-center h-100 p-5">
                            <img class="img-fluid rounded" src="../../../img/Colaboran/LogoMicrosoft.png">
                            <!-- <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Años de experiencia</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">3</h1> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="fact-item bg-light rounded text-center h-100 p-5">
                            <img class="img-fluid rounded" src="../../../img/4Inclusion/LogoIrisbond.png">
                            <!-- <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Años de experiencia</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">3</h1> -->
                        </div>
                    </div>

                </div>
                <!-- Segunda fila -->
              
            </div>
        </div>
        <!-- Colaboradores-->

        <!-- Footer común -->
        <?php
            $img="../../../";                   // ruta a la carpeta de imágenes
            $pages="../../";                    // ruta a la carpeta del resto de páginas de la web
            $index="../../../";                 // ruta a la carpeta del index.php
            include "../../../footer.php";      // inlcuye el footer común
        ?>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
                class="bi bi-arrow-up"></i></a>


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