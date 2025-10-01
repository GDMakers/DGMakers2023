<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contacto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Favicon -->
    <link href="../img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
	<!-- Menú común -->
	<?php
        $img="../img";              // ruta a la carpeta de imágenes
        $pages=".";                 // ruta a la carpeta del resto de páginas de la web
        $index="..";                // ruta a la carpeta del index.php
        include "../menu.php";      // inlcuye el menu común
    ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-3">Contacta con nosotros</h1>
        </div>
    </div>
 
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="section-title bg-white text-center text-primary px-3">Contacto</h6>
                <h1 class="display-6 mb-4">¿Más información? </h1>
            </div>

            <div class="row g-0 justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="text-center mb-4">
                        <a href="mailto:dgmakers@gruposdedesarrollo.es">Envía un correo a DGMakers</a> 
                    </p>
                    <br><br><br><br><br><br><br>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer común -->
	<?php
        $img="../img";                  // ruta a la carpeta de imágenes
        $pages=".";                     // ruta a la carpeta del resto de páginas de la web
        $index="..";                    // ruta a la carpeta del index.php
        include "../footer.php";        // inlcuye el footer común
    ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/counterup/counterup.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/lightbox/js/lightbox.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            setTimeout(function () {
                $(".content").fadeOut(1500);
            }, 3000);

            setTimeout(function () {
                $(".content2").fadeIn(1500);
            }, 6000);
        });
    </script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>