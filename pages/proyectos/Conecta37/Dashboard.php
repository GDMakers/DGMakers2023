<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Dashboard Conecta 37</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Resumen Conecta 37" name="description">

    <!-- Favicon -->
    <link href="../../../img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
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

    <style>
        .btn-conecta37 {
            background-color: #015183;
            border-color: #015183;
            color: #ffffff;
            transition: background-color .3s ease, color .3s ease, border-color .3s ease;
        }

        .btn-conecta37:hover,
        .btn-conecta37:focus {
            background-color: #ffffff;
            border-color: var(--primary-hover);
            color: var(--primary-hover);
        }

        .dashboard-image {
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(1, 81, 131, 0.18);
        }

        .dashboard-section {
            margin-bottom: 4rem;
        }
    </style>
</head>

<body>
    <!-- Menú común -->
    <?php
        $img = "../../..";
        $pages = "../..";
        $index = "../../..";
        include "../../../menu.php";
    ?>

    <div class="container-fluid hero-conecta py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 text-center">
            <h1 class="display-4 text-white mb-3">Dashboard Conecta 37</h1>
            <p class="lead text-white mb-0">Visión rápida de cada espacio Conecta 37: contenidos clave, enlaces directos e inspiración para avanzar.</p>
            <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
                <a href="index.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Visión general</a>
                <a href="Encuentro37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Jornadas 26</a>
                <a href="Livehub37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Live Hub</a>
                <a href="Recursos37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Showcase de proyectos</a>
                <a href="Roadmap.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Roadmap</a>
                <a href="Centros.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Centros participantes</a>
                <a href="Metodologia37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Metodología</a>
                <a href="Ia37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Uso de la IA</a>
                <a href="Dashboard.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1 active" aria-current="page">Dashboard</a>
            </div>
        </div>
    </div>

    <main class="container-xxl py-5">
        <div class="container">
            <section class="dashboard-section">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="text-primary mb-3">Visión general</h2>
                        <p class="mb-3">Descubre el propósito global de Conecta 37, los centros participantes y cómo la tecnología se integra en Lengua y Matemáticas para generar evidencias reales.</p>
                        <a class="btn btn-outline-primary" href="index.php">Ir a Visión general</a>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80" class="img-fluid dashboard-image" alt="Visión general">
                    </div>
                </div>
            </section>
            <section class="dashboard-section">
                <div class="row g-5 align-items-center flex-lg-row-reverse">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="text-primary mb-3">Jornadas 26</h2>
                        <p class="mb-3">Programa express con talleres en paralelo, materiales descargables y streaming. Ideal para planificar tu participación y preparar evidencias.</p>
                        <a class="btn btn-outline-primary" href="Encuentro37.php">Explorar Jornadas</a>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <img src="https://images.pexels.com/photos/3184325/pexels-photo-3184325.jpeg" class="img-fluid dashboard-image" alt="Jornadas 26">
                    </div>
                </div>
            </section>
            <section class="dashboard-section">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="text-primary mb-3">Live Hub</h2>
                        <p class="mb-3">Calendario dinámico de encuentros en directo: workshops, mentorías y clinics para seguir aprendiendo en comunidad.</p>
                        <a class="btn btn-outline-primary" href="Livehub37.php">Ir al Live Hub</a>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1200&q=80" class="img-fluid dashboard-image" alt="Live Hub">
                    </div>
                </div>
            </section>
            <section class="dashboard-section">
                <div class="row g-5 align-items-center flex-lg-row-reverse">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="text-primary mb-3">Showcase de proyectos</h2>
                        <p class="mb-3">Launchpad con fichas rápidas: producto, evidencias y enlace a los materiales. Perfecto para compartir y recibir feedback.</p>
                        <a class="btn btn-outline-primary" href="Recursos37.php">Ver Showcase</a>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <img src="https://cdn.pixabay.com/photo/2020/07/08/04/12/work-5382501_1280.jpg" class="img-fluid dashboard-image" alt="Showcase de proyectos">
                    </div>
                </div>
            </section>
            <section class="dashboard-section">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="text-primary mb-3">Roadmap vivo</h2>
                        <p class="mb-3">Hitos clave del curso: Kickoff, co-diseño, entregables y momentos de difusión. Actualizado tras cada reunión.</p>
                        <a class="btn btn-outline-primary" href="Roadmap.php">Consultar Roadmap</a>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <img src="https://images.unsplash.com/photo-1506784983877-45594efa4cbe?auto=format&fit=crop&w=1200&q=80" class="img-fluid dashboard-image" alt="Roadmap vivo">
                    </div>
                </div>
            </section>
            <section class="dashboard-section">
                <div class="row g-5 align-items-center flex-lg-row-reverse">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="text-primary mb-3">Centros participantes</h2>
                        <p class="mb-3">Mapa de la red Conecta 37: logos, enlaces y colaboraciones entre centros de Primaria y Secundaria.</p>
                        <a class="btn btn-outline-primary" href="Centros.php">Conocer los centros</a>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <img src="https://cdn.pixabay.com/photo/2024/06/28/18/47/laptop-8859951_1280.jpg" class="img-fluid dashboard-image" alt="Centros participantes">
                    </div>
                </div>
            </section>
            <section class="dashboard-section">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="text-primary mb-3">Metodología</h2>
                        <p class="mb-3">Principios, roles y productos públicos. Cómo funcionamos en el sprint Diseñar · Crear · Compartir.</p>
                        <a class="btn btn-outline-primary" href="Metodologia37.php">Ver metodología</a>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <img src="img/creando.png" class="img-fluid dashboard-image" alt="Metodología">
                    </div>
                </div>
            </section>
            <section class="dashboard-section">
                <div class="row g-5 align-items-center flex-lg-row-reverse">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="text-primary mb-3">IA en Conecta 37</h2>
                        <p class="mb-3">Principios de uso, herramientas y prompts para integrar IA de forma transparente, humana y verificable.</p>
                        <a class="btn btn-outline-primary" href="Ia37.php">Explorar IA</a>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <img src="img/iaconecta.png" class="img-fluid dashboard-image" alt="IA en Conecta 37">
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer común -->
    <?php
        $img = "../../..";
        $pages = "../..";
        $index = "../../..";
        include "../../../footer.php";
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
