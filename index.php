<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>DGMakers 2025</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon" type="image/png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
	<!-- Menú común -->
	<?php
        $img="img";                 // ruta a la carpeta de imágenes
        $pages="pages";             // ruta a la carpeta del resto de páginas de la web
        $index=".";                 // ruta a la carpeta del index.php
        include "menu.php";         // inlcuye el menu común
    ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="img/GD/Gd1.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
                    <img class="img-fluid" src="img/GD/GD2.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
                    <img class="img-fluid" src="img/GD/GD3.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="3" aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="img/GDPatrimonio/Comunidad.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="4" aria-label="Slide 2">
                    <img class="img-fluid" src="img/EstTrabj2.jpg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="5" aria-label="Slide 3">
                    <img class="img-fluid" src="img/EstTrabj1.jpg" alt="Image">
                </button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/GD/Gd1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Trabaja en equipo por</h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Grupos de Desarrollo</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/GD/GD2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Crea, desarrolla y </h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Comparte</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/GD/GD3.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">

                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Enseña a otros</h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">para aprender eficazmente </h1>
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/GDPatrimonio/Comunidad.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Forma parte de una</h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Comunidad de Innovación</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/EstTrabj2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Desarrolla tu creatividad </h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Construyendo Proyectos Útiles</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/EstTrabj1.jpg" alt="Image">
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

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">IES ALCÁNTARA</h6>
                <h1 class="display-6 mb-4">APRENDE PARA ENSEÑAR</h1>
            </div>
        </div>
    </div>



    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
            
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Aprende por 
                            <a style="color: gray;">Grupos de</a> <a style="color: rgb(138, 0, 0);">Desarrollo</a></h6>
                        <h1 class="display-6 mb-4">¿En qué consiste la metodología? </h1>
                        <p style="text-align:justify  ;">La metodología de <a style="color: gray;">Grupos de</a> <a style="color: rgb(138, 0, 0);">Desarrollo</a>, término que proviene del mundo tecnológico y que viene a significar que unos aprenden algo para enseñárselos a otros, y éstos a otros, y así sucesivamente hasta desarrollar una red de aprendizaje, se basa en tres principios:</p>
                        <ul>
                            <li>Crear algo útil.</li>
                            <li>Utilizar la tecnología</li>
                            <li>Comparte lo aprendido</li>
                        </ul>
                        <p style="text-align:justify  ;">Los estudiantes son los creadores de contenido y los formadores del resto de estudiantes. Para ello se forman los denominados <a style="color: rgb(138, 0, 0);">D</a><a style="color: gray;">G</a><a style="color: rgb(11, 9, 9);">Makers</a>.
                        Docentes, estudiantes de cursos superiores, estudiantes especializados... forman a un pequeño grupo en 
                        campos muy específicos y éstos posteriormente formarán al resto de estudiantes que participen en el proyecto.</p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img-border" style="">
                        <img src="img/GD/CreUtiComp.png" alt="" style="height: 100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <!--div class="img-border" style=""-->
                        <img src="img/GD/SitDesComp.png" alt="" style="height: 60%">
                    <!--/div-->
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-4">Fases de la metodología</h1>
                        <p style="text-align:justify  ;">La metodología de <a style="color: gray;">Grupos de</a> <a style="color: rgb(138, 0, 0);">Desarrollo</a>, 
                            , cuando la aplicamos a la resoluciónd e proyectos se dividen en tres fases:</p>
                        <ul>
                            <li>
                                <p style="margin: 0 auto; padding-bottom: 5px;"><b>Situar.</b> </p>
                                <p style="margin: 0 auto;padding-bottom: 10px;">Visitar el lugar donde vamos a trabajar, buscar información, 
                                    hacer fotografías...
                                </p>
                            </li>
                            <li>
                                <p style="margin: 0 auto; padding-bottom: 5px;"><b>Desarrollar.</b> </p>
                                <p style="margin: 0 auto;padding-bottom: 10px;">Se forman los equipos de trabajo y se comienza a desarrollar el proyecto.
                                    Esta fase incluye también formación para los estudinates en los campos que sean necesarios.
                                </p>
                            </li>
                            <li>
                                <p style="margin: 0 auto; padding-bottom: 5px;"><b>Compartir.</b> </p>
                                <p style="margin: 0 auto;padding-bottom: 10px;">Se realizan distintas exposiciones, se participa en las Jornadas 
                                    que se celebran y se pueden compartir los materiales en la web del proyecto.
                                </p>
                            </li>
                        </ul>
                        <p style="text-align:justify;">
                            Los proyectos pueden durar más de un curso escolar y los equipos pueden ser de distintos niveles académicos.    
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Nuestra visión de la enseñanza -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">
                            Nuestra visión de la enseñanza
                        </h6>
                        <h1 class="display-6 mb-4">¿Qué queremos conseguir? </h1>
                        <p style="text-align:justify  ;">
                            Necesitamos formar a estudiantes para la era digital que sean capaces de:
                        </p>
                        <ul style="text-align:justify  ;">
                            <li> <b> Aprender de forma autónoma.</b>Los estudiantes deben aprender a planificarse, controlar el proceso de aprendizaje y su propia motivación en el proceso. Todo esto permite al estudiante crear nuevo conocimiento desarrollando diversas habilidades y conectando con otros estudiantes, creando comunidades de aprendizaje.
                                </li>
                            <li><b>Ser ciudadanos activos,</b> comprometidos con el entorno y la realidad. Los estudiantes deben utilizar los conocimientos y las habilidades desarrolladas en mejorar su entorno. Desde la formación de otros estudiantes a la creación de proyectos que ayuden a otros.</li>
                            <li><b>Adaptarse a un mundo cambiante. </b> Es necesario el desarrollo de la empatía para una sociedad que requiere la colaboración entre ciudadanos y la adaptación a lo incierto del futuro. Trabajar con personas muy distintas requiere ciudadanos acostumbrados a la interacción con la diversidad.</li>
                        </ul>
                         <p style="text-align:justify  ;">
                            Los estudiantes deben ser capaces de superar las dificultades y adaptarse a la incertidumbre de un mundo cambiante en el que sufrirá numerosos retrocesos </p>
                            <p style="text-align:justify  ;">
                            El estudiante debe aprender a transmitir sus conocimientos utilizando numerosos instrumentos, no solo lingüísticos, sino también tecnológicos, científicos y artísticos.</p>
                            <p style="text-align:justify  ;">
                            Los docentes requieren una mejora continua en su práctica docente para adaptar su papel a las necesidades de la sociedad. </p>
                            <p style="text-align:justify  ;">
                            El modelo de aprendizaje debe preparar a los estudiantes para un aprendizaje permanente a lo largo de toda su vida, para ello es necesario fomentar el autoaprendizaje, proporcionando herramientas y habilidades que lo posibiliten.
                        </p>

                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="img-border" style ="height: 720px;">
                        <img class="img-fluid"  src="img/GD/Estudiantes.png" alt="" style ="padding-left: -50px; margin-left: -20px ;height: 750px;">  <!-- class="img-fluid" style ="padding-left: -50px; margin-left: -20px ; width: 440px; height: 350px;"-->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

     <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="img/GD/Exito.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">¿Por qué Grupos de Desarrollo?</h6>
                        <h1 class="display-6 mb-4">¿Qué puedo conseguir con esta metodología?</h1>
                        <p class="mb-4" style="text-align:justify  ;">
                            Cuando usamos la metodología Grupos de Desarrollo  proporcionamos a los estudiantes: </p>
                            <ul>
                                <li>Unos resultados alcanzables en un tiempo limitado.</li>
                                <li>Podemos medir las aportaciones de cada estudiante.</li>
                                <li>Un proyecto global al que pertenece.</li>
                            </ul>
                            <p style="text-align:justify  ;">
                                Estos objetivos forman parte de un proyecto más grande que se desarrollará en varios meses o años.</p>
                                <p style="text-align:justify  ;">
                                Los resultados alcanzables incluirán unos proporcionados por el docente y otros generados por los estudiantes que forman parte del equipo, siempre en línea con el proyecto general.</p>
                                <p style="text-align:justify  ;">
                                Todos los equipos deben conocer los resultados que intentan alcanzar el resto de grupos y es muy positivo que colaboren entre ellos en algunos momentos del proyecto.</p>
                                <p style="text-align:justify  ;">
                                La metodología de Grupos de Desarrollo permite a los estudiantes un aprendizaje profundo, es decir, comprender ideas, procesos y ser capaces de transferir dicho aprendizaje para realizar nuevos proyectos.</p>
                                <p style="text-align:justify  ;">
                                El estudiante aprende procesando contenido usando habilidades de pensamiento que implican la creación de significado.</p>
                                <p style="text-align:justify  ;">
                                Para ello debemos centrar el aprendizaje en GRANDES IDEAS, debemos centrarnos en pocos contenidos, tratarlos más profundamente y estructurarlos adecuadamente para mejorar la retención y el uso de los mismos.

                        </p>
                        <a class="btn btn-primary rounded-pill py-3 px-5" href="doc/ModeloEducativoGDResumen.pdf" target="_blank">Historia de GD</a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5" >
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" >
                    <div class="img-border" style="height: 470px; width:570px;">
                        <img src="img/GDPatrimonio/CentrosPart.png" alt=""
                            style="padding-left: -50px; margin-left: -20px ; width: 470px; height: 270px;">
                        <!-- class="img-fluid" -->

                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">Nosotros</h6>
                        <h1 class="display-6 mb-4">Somos un equipo de <span class="text-primary">20 centros</span> de
                            primaria y secundaria</h1>
                        <p>¿Te gusta la tecnología? ¿Quieres formarte parcipando en la creación de proyectos útiles para
                            la sociedad?</p>
                        <p class="mb-4">Usando la metodología de Grupos de Desarrollo, podrás formarte, crear proyectos,
                            compartirlos en eventos y formar a otros estudiantes</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-certificate fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Años de experiencia</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">7</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users-cog fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Número de participantes</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">2374</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-users fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Centros participantes</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">20</h1>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <i class="fa fa-check fa-4x text-primary mb-4"></i>
                        <h5 class="mb-3">Proyectos</h5>
                        <h1 class="display-5 mb-0" data-toggle="counter-up">37</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">¿Por qué DGMakers?</h6>
                        <h1 class="display-6 mb-4">¿Qué me proporciona DGMakers?</h1>
                        <p class="mb-4" style="text-align:justify  ;">Nuestros estudiantes aprenden a trabajar en equipo
                            con estudiantes de otros centros
                            desarrollando tanto las habilidades blandas como las distintas competencias. También
                            proporciona una motivación extra
                            que se refleja en las calificaciones obtenidas en las distintas asignaturas.

                        </p>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Competencias</p>
                                        <p class="mb-2">85%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Habilidades Blandas</p>
                                        <p class="mb-2">90%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="skill">
                                    <div class="d-flex justify-content-between">
                                        <p class="mb-2">Motivación</p>
                                        <p class="mb-2">95%</p>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="img-border">
                        <img class="img-fluid" src="img/Est.JPG" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Nuestros equipos</h6>
                <h1 class="display-6 mb-4">Equipos de primaria y secundaria</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="img/Team1.JPG" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>2º Bachillerato</h5>
                                <span>Code17</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="img/Team2.JPG" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>2º ESO</h5>
                                <span>Blue Design</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item text-center p-4">
                        <img class="img-fluid border rounded-circle w-75 p-2 mb-4" src="img/Team3.JPG" alt="">
                        <div class="team-text">
                            <div class="team-title">
                                <h5>3º ESO</h5>
                                <span>BlackHacker</span>
                            </div>
                            <div class="team-social">
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary rounded-circle" href=""><i
                                        class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Nuestras experiencias</h6>
                <h1 class="display-6 mb-4">¿Qué hemos realizado estos años?</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/GDMuseos/GDMuseos2.PNG" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">GDMuseos</h5>
                            <span><a href="http://gdmuseos.es">Proyecto original</a></span>
                        </div>
                    </div>
                    <p class="mb-0"><a href="http://gdmuseos.es">

                            Primer proyecto desarrollado por 7 centros de la Región de Murcia generando materiales sobre
                            museos de la Región de Murcia</a>
                    </p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/GDPatrimonio/GDPatrimonio.PNG"
                            alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">GDPatrimonio</h5>
                            <span>Programa Educativo de la Consejería de Educación</span>
                        </div>
                    </div>
                    <p class="mb-0">El proyecto GDMuseos pasó a ser un Programa Educativo en el que participan 15
                        centros de la Región de Murcia.</p>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <div class="d-flex align-items-center mb-4">
                        <img class="flex-shrink-0 rounded-circle border p-1" src="img/DGMakers02.png" alt="">
                        <div class="ms-4">
                            <h5 class="mb-1">DGMakers</h5>
                            <span>Especialistas en tecnología</span>
                        </div>
                    </div>
                    <p class="mb-0">Los estudiantes especialistas en el uso de la tecnología para crear materiales,
                        impartir cursos y colaborar con la sociedad.</p>
                </div>

            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Colaboradores-->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Colaboran</h6>
                <h1 class="display-6 mb-4">En proyectos y becas</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/GDG.jpg">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/LogoGoldenEdu.png">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/logo-fundacion-Integra.png">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/LogoMicrosoft.png">
                    </div>
                </div>

            </div>
            <!-- Segunda fila -->
            <div class="row g-4" style="padding-top: 20px;">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/vv.jpg.png">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/santillana.jpg">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/LogoLaberit.PNG">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/LogoMulti.PNG">
                    </div>
                </div>

            </div>
            <!-- Tercera fila -->
            <div class="row g-4" style="padding-top: 20px;">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/logommm.png">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/LogoAyuntAlca.PNG">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/SmLogo.png">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/oxford.jpg.png">
                    </div>
                </div>


            </div>
            <!-- Cuarta fila -->
            <div class="row g-4" style="padding-top: 20px;">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/AMPA1.png">
                    </div>
                </div>
            
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/Logohp.png">
                    </div>
                </div>
            
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/LogoLenovo.png">
                    </div>
                </div>
            
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/Matific.jpg">
                    </div>
                </div>
            </div>
            <!-- Quinta fila -->
            <div class="row g-4" style="padding-top: 20px;">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/l3tcraft.png">
                    </div>
                </div>
            
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/Asus.png">
                    </div>
                </div>
            
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/PosibleLab.png">
                    </div>
                </div>
            
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item bg-light rounded text-center h-100 p-5">
                        <img class="img-fluid rounded" src="img/Colaboran/gae.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Colaboradores-->

    <!-- Footer común -->
	<?php
        $img="img";                 // ruta a la carpeta de imágenes
        $pages="pages";             // ruta a la carpeta del resto de páginas de la web
        $index=".";                 // ruta a la carpeta del index.php
        include "footer.php";       // inlcuye el footer común
    ?>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script> 
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
