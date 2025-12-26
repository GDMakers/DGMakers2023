<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Start Lab 01 &middot; Conecta 37</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="taller, sprint creativo, conecta 37, start lab, ia en el aula" name="keywords">
    <meta content="Guion final mejorado del Start Lab 01: un sprint creativo de 2 h 30 min donde la IA actúa como copiloto." name="description">

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

        .inc-card {
            background: #fff;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .inc-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .inc-hero-subtitle {
            font-size: 1.1rem;
            letter-spacing: 2px;
            opacity: 0.9;
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

    <!-- HERO -->
    <div class="container-fluid hero-conecta py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 text-center">
            <p class="inc-hero-subtitle mb-2 text-uppercase text-white">Start Lab</p>
            <h1 class="display-4 text-white mb-3">Innova y comparte</h1>
            <p class="lead text-white mb-4">Experimentos rápidos, focos claros y evidencias públicas.</p>
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <a href="index.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Visión general</a>
                <a href="Encuentro37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Jornadas 26</a>
                <a href="Livehub37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Live Hub</a>
                <a href="Recursos37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Showcase de proyectos</a>
                <a href="Roadmap.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Roadmap</a>
                <a href="Centros.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Centros participantes</a>
                <a href="ProximaReunion.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Próxima reunión</a>
                <a href="StartLab01.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1 active" aria-current="page">Start Lab 01</a>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="inc-card h-100">
                        <h3 class="mb-3">Qué es Start Lab</h3>
                        <p class="mb-3">
                            Un espacio de experimentación rápida donde equipos prueban metodologías, tecnología y usos de IA
                            con entregables cortos y transferencia entre centros.
                        </p>
                        <p class="mb-3">
                            Cada reto termina con un recurso público y una breve guía para que otros lo repliquen.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inc-card h-100">
                        <h4 class="text-uppercase text-muted mb-2">Opciones rápidas</h4>
                        <ul class="mb-0">
                            <li><a href="Incubadora37.php">Incubadora 37</a>: explora focos y lanza ideas.</li>
                            <li><a href="UsoIA.php">Uso Responsable IA</a>: principios de seguridad y ética.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row gy-4 mt-2">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="inc-card h-100 text-center">
                        <img src="../../../img/IA/DGIA02.jpeg" alt="Laboratorio de IA" class="img-fluid rounded-3 mb-3" />
                        <h5 class="mb-2">Laboratorio de IA</h5>
                        <p class="mb-3">Prueba IA con enfoque pro: prompts, evidencias y hacks rápidos para tu clase.</p>
                        <a href="Ia37.php" class="btn btn-conecta37 pt-1 pb-1">
                            Entrar
                        </a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="inc-card h-100 text-center">
                        <img src="img/MatematicasIA2.png" alt="Matemáticas con IA" class="img-fluid rounded-3 mb-3" />
                        <h5 class="mb-2">Matemáticas con IA</h5>
                        <p class="mb-3">Math-Hacker modo turbo: IA como copiloto para modelar, probar y compartir.</p>
                        <a href="MatematicasIA.php" class="btn btn-conecta37 pt-1 pb-1">
                            Ver plan
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="inc-card h-100 text-center">
                        <img src="https://images.unsplash.com/photo-1757955622421-b75472080224?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Lab Vídeos con IA" class="img-fluid rounded-3 mb-3" />
                        <h5 class="mb-2">Lab Vídeos con IA</h5>
                        <p class="mb-3">Estudio DGMakers en tu bolsillo: guiones, visuales y quizzes listos para grabar.</p>
                        <a href="IAVideos.php" class="btn btn-conecta37 pt-1 pb-1">
                            Montar vídeo
                        </a>
                    </div>
                </div>
            </div>
           
            <div class="row gy-4 mt-2">
                 <div class="col-12 col-md-6 col-lg-4">
                    <div class="inc-card h-100 text-center">
                        <img src="https://images.unsplash.com/photo-1643822308530-533d7d11a8d2?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Operaciones con enteros" class="img-fluid rounded-3 mb-3" />
                        <h5 class="mb-2">Enteros 1</h5>
                        <p class="mb-3">Detecta tu bug de signos y consigue un plan guiado para operaciones con enteros.</p>
                        <a href="Enteros01.php" class="btn btn-conecta37 pt-1 pb-1">
                            Ir a Enteros 1
                        </a>
                    </div>
            </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="inc-card h-100 text-center">
                        <img src="https://images.unsplash.com/photo-1509228627152-72ae9ae6848d?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Ecuaciones en pizarra" class="img-fluid rounded-3 mb-3" />
                        <h5 class="mb-2">Ecuaciones 1</h5>
                        <p class="mb-3">Generador de prompts blindados y mapa de bugs para ecuaciones lineales.</p>
                        <a href="Ecuaciones1.php" class="btn btn-conecta37 pt-1 pb-1">
                            Ir a Ecuaciones 1
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

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
