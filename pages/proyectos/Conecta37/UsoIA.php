<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Uso Responsable IA · Conecta 37</title>
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
    </style>
</head>

<body>
    <!-- Menú común -->
    <?php
        $img = "../../..";                // ruta a la carpeta de imagenes
        $pages = "../..";                 // ruta a la carpeta del resto de paginas de la web
        $index = "../../..";              // ruta a la carpeta del index.php
        include "../../../menu.php";      // incluye el menu comun
    ?>

    <?php
    $principles = [
        [
            'number' => '1',
            'title' => 'Modo fantasma',
            'badge' => 'Sin datos personales',
            'intro' => 'La IA nunca sabrá quién eres.',
            'rule' => 'La regla: no introducimos nombres reales, direcciones, ni datos personales.',
            'practice' => 'La práctica: usamos nombres ficticios si el ejercicio lo requiere.',
            'icon' => 'bi-shield-lock',
        ],
        [
            'number' => '2',
            'title' => 'El copiloto',
            'badge' => 'Supervisión docente',
            'intro' => 'No soltamos al alumnado en internet.',
            'rule' => 'La regla: la IA se usa solo en clase, bajo la guía del profesorado.',
            'practice' => 'La práctica: el docente diseña la actividad y supervisa qué se escribe y qué se responde.',
            'icon' => 'bi-compass',
        ],
        [
            'number' => '3',
            'title' => 'Tú piensas, la IA ayuda',
            'badge' => 'Pensamiento crítico',
            'intro' => 'La IA es una calculadora de palabras: ayuda, pero no decide.',
            'rule' => 'La regla: prohibido "copiar y pegar" sin leer.',
            'practice' => 'La práctica: enseñamos a buscar errores en la IA, a contrastar la información y a mejorar lo que propone.',
            'icon' => 'bi-lightbulb',
        ],
        [
            'number' => '4',
            'title' => 'Filtros activados',
            'badge' => 'Seguridad activa',
            'intro' => 'Minimizamos riesgos.',
            'rule' => 'La regla: usamos herramientas configuradas para evitar contenido inadecuado.',
            'practice' => 'La práctica: si algo raro aparece, paramos y lo analizamos en clase como parte del aprendizaje.',
            'icon' => 'bi-shield-check',
        ],
        [
            'number' => '5',
            'title' => 'Familias informadas',
            'badge' => 'Puertas abiertas',
            'intro' => 'Tenéis derecho a saber qué hacemos.',
            'rule' => 'Si tenéis dudas sobre cómo usamos estas herramientas, las puertas del proyecto están abiertas para explicároslo.',
            'practice' => '',
            'icon' => 'bi-people',
        ],
    ];
    ?>

    <div class="container-fluid hero-conecta py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-8 text-white">
                    <p class="text-uppercase fw-bold mb-2" style="letter-spacing: 0.14em;">Uso responsable</p>
                    <h1 class="display-5 fw-bold mb-3 text-white">Inteligencia Artificial en Conecta 37: aprender seguros</h1>
                    <p class="lead mb-0 text-white">
                        La IA es una herramienta de aprendizaje. La usamos con cuidado, con guía docente y con las familias informadas.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end text-center">
                    <img src="img/LogoConecta37ByN.png" alt="Logo Conecta 37" class="img-fluid" style="max-width: 220px;">
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row g-4">
            <?php foreach ($principles as $p): ?>
                <div class="col-md-6">
                    <div class="inc-card h-100">
                        <div class="d-flex align-items-center mb-3">
                            <span class="badge bg-primary-subtle text-primary border border-primary-subtle me-3" style="min-width: 44px; background-color: rgba(13, 110, 253, 0.1); color: #0d6efd; border-color: rgba(13, 110, 253, 0.2);">
                                #<?php echo $p['number']; ?>
                            </span>
                            <div>
                                <h5 class="mb-1"><?php echo $p['title']; ?></h5>
                                <small class="text-muted text-uppercase" style="letter-spacing: 0.05em;"><?php echo $p['badge']; ?></small>
                            </div>
                        </div>
                        <p class="mb-2 text-primary fw-semibold">
                            <i class="bi <?php echo $p['icon']; ?> me-2"></i>
                            <?php echo $p['intro']; ?>
                        </p>
                        <p class="mb-1"><strong><?php echo $p['rule']; ?></strong></p>
                        <?php if (!empty($p['practice'])): ?>
                            <p class="mb-0"><?php echo $p['practice']; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Footer común -->
    <?php
        $img = "../../..";                // ruta a la carpeta de imagenes
        $pages = "../..";                 // ruta a la carpeta del resto de paginas de la web
        $index = "../../..";              // ruta a la carpeta del index.php
        include "../../../footer.php";    // incluye el footer comun
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
