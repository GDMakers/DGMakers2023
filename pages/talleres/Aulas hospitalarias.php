<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Talleres Aulas Hospitalarias</title>
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

    <style>
        img.zoomGallery {
            -webkit-transition: all .2s ease-in-out;
            -moz-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            -ms-transition: all .2s ease-in-out;
        }
             
        .transition {
            -webkit-transform: scale(1.05);
            -moz-transform: scale(1.05);
            -o-transform: scale(1.05);
            transform: scale(1.05);
        }
            
        .imgshadow {
             box-shadow: 3px 3px 3px rgba(25, 25, 25, 0.25);
        }
    </style>    
</head>

<body>
	<!-- Menú común -->
	<?php
        $img="../../img";                   // ruta a la carpeta de imágenes
        $pages="../../pages";               // ruta a la carpeta del resto de páginas de la web
        $index="../..";                     // ruta a la carpeta del index.php
        include "../../menu.php";           // inlcuye el menu común
    ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="w-100" src="../../img/DGMakersTools/fondo_content_creators.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4 animated zoomIn">Talleres</h4>
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Aulas Hospitalarias</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Gallery Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto px-5 mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 100%;">
                <h5 class="section-title bg-white text-center text-primary px-3">
                    DGMakers del IES Alcántara y del Cañada de las Eras trabajaron con estudiantes de las Aulas Hospitalarias del Hospital Virgen de la Arrixaca.
                </h5>
            </div>
            <?php

            $directory="../../img/Talleres/Aulas_hospitalarias/";
            $dirint = dir($directory);

            while (($archivo = $dirint->read()) != false)
            {
                if (strpos($archivo,'jpg') || strpos($archivo,'jpeg') || strpos($archivo,'png') || strpos($archivo,'PNG')){
                    $image = $directory. $archivo;
                    echo'<a href='.$image.'><img class="imgshadow rounded zoomGallery" style="width: 10vw; margin: 1vw; width: 40%;" src='.$image.'></a>';
                }
            }
            $dirint->close();

            ?>

            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="bg-white text-center text-primary px-3"><a href="https://www.laverdad.es/murcia/alumnos-secundaria-imparten-talleres-sobre-tecnologia-estudiantes-20240229103750-nt.html">La Verdad</a></h6>
                <h6 class="bg-white text-center text-primary px-3"><a href="https://www.laopiniondemurcia.es/comunidad/2024/02/29/alumnos-talleres-estudiantes-hospitales-tecnologia-98812889.html">La Opinión de Murcia</a></h6>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- Footer común -->
	<?php
        $img="../../img";                   // ruta a la carpeta de imágenes
        $pages="../../pages";                     // ruta a la carpeta del resto de páginas de la web
        $index="../..";                     // ruta a la carpeta del index.php
        include "../../footer.php";         // inlcuye el footer común
    ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../lib/wow/wow.min.js"></script>
    <script src="../../lib/easing/easing.min.js"></script>
    <script src="../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../lib/counterup/counterup.min.js"></script>
    <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../js/main.js"></script>

    <script>
        $(document).ready(function(){
            $('.zoomGallery').hover(function() {
                $(this).addClass('transition');
                $(this).css("box-shadow", "6px 6px 6px rgba(25, 25, 25, 0.25)");
            }, function() {
                $(this).removeClass('transition');
                $(this).css("box-shadow", "3px 3px 3px rgba(25, 25, 25, 0.25)");
            });
        });
    </script>    
</body>

</html>