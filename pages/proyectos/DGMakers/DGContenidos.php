<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DGContenidos</title>
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
        $img="../../..";                    // ruta a la carpeta de imágenes
        $pages="../..";                     // ruta a la carpeta del resto de páginas de la web
        $index="../../..";                  // ruta a la carpeta del index.php
        include "../../../menu.php";        // inlcuye el menu común
    ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">

                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="../../../img/DGCurricular/DGCurr01.jpeg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 2">
                    <img class="img-fluid" src="../../../img/DGCurricular/DGCurr02.jpeg" alt="Image">
                </button>
                <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" class="active" aria-current="true" aria-label="Slide 3">
                    <img class="img-fluid" src="../../../img/DGCurricular/DGCurr03.jpeg" alt="Image">
                </button>
                
            </div>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="w-100" src="../../../img/DGCurricular/DGCurr01.jpeg" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Creando materiales de </h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Primaria y Secundaria</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../../../img/DGCurricular/DGCurr02.jpeg" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Los creadores son los  </h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Estudiantes</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="../../../img/DGCurricular/DGCurr03.jpeg" alt="Image">
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
            
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <h6 class="section-title bg-white text-start text-primary pe-3">¿Qué es DGContenidos?</h6>
                    <h1 class="display-6 mb-4">¿Cómo pueden crear 
                         <span class="text-primary">materiales curriculares</span> los estudiantes?</h1>
                    <p class="mb-4" style="text-align: justify;">La mejor forma de aprender es enseñar y creando materiales es como mejor se aprende.</p>
                    <p class="mb-4" style="text-align: justify;">¿Y si utilizamos la metodología de Grupos de Desarrollo para aprender las 
                        distintas asignaturas? Unos estudiantes crean materiales y talleres para formar a otros.</p>
                    <p  class="mb-4" style="text-align: justify;">
                        Con unos simples pasos, creando un vídeo, algún ejemplo y algunas actividades, podemos comenzar.
                    </p>
                    <p class="mb-4" style="text-align: justify;">
                        Como ejemplo, podemos analizar DGMaths.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="img-border" style ="height: 470px;">
                    <img   src="../../../img/DGCONT/DGCONT.PNG" alt="" >
                    
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
                    <div class="img-border" style ="height: 470px;"> <a href="dgmaths.php">
                        <img   src="../../../img/DGMaths/LogoDGMathsC.png" alt="" style ="padding-left: -50px; margin-left: -20px ; width: 440px; height: 350px;">  <!-- class="img-fluid" -->
                    </a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3">¿Qué es DGMaths?</h6>
                        <h1 class="display-6 mb-4">¿Cómo <span class="text-primary">aprender y enseñar</span> de otra forma?</h1>
                        <p class="mb-4" style="text-align: justify;">¿Y si son los estudiantes los que crean materiales para enseñar matemáticas?</p>
                        <p class="mb-4" style="text-align: justify;">Y si utilizamos la metodología de Grupos de Desarrollo para aprender matemáticas. Unos estudiantes crean maetriales para formar a otros.</p>
                        <p class="mb-4" style="text-align: justify;">Dedicamos algunas sesiones a la creación de dichos materiales y los compartimos en la web del proyecto.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Footer común -->
	<?php
        $img="../../../";                   // ruta a la carpeta de imágenes
        $pages="../../";                    // ruta a la carpeta del resto de páginas de la web
        $index="../../../";                 // ruta a la carpeta del index.php
        include "../../../footer.php";      // inlcuye el footer común
    ?>

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