<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Launchpad Conecta-37 · Galería</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Conecta-37, proyectos, galería, showcase, estudiantes, secundaria, ESO, bachillerato" name="keywords">
    <meta content="Launchpad Conecta-37: sube tu proyecto, compártelo con la red y muestra tu talento en vídeo, podcast, apps, ciencia y arte." name="description">

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

    <!-- Hero -->
    <div class="container-fluid hero-conecta py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 text-center">
            <h1 class="display-4 text-white mb-3">Launchpad Conecta 37</h1>
            <p class="lead text-white mb-0">
                Sube tu proyecto, enseña a tu comunidad y comparte tu talento. Aquí no se guarda: <strong>se lanza</strong>.
            </p>
            <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
                <a href="index.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Visi&oacute;n general</a>
                <a href="Encuentro37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Jornadas 26</a>
                <a href="Livehub37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Live Hub</a>
                <a href="Recursos37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1 active" aria-current="page">Showcase de proyectos</a>
                <a href="Roadmap.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Roadmap</a>
                <a href="Centros.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Centros participantes</a>
            </div>
        </div>
    </div>

    <!-- Galería de Proyectos -->
    <section class="container-xxl py-5">
      <div class="container">

        <!-- Intro -->
        <div class="row mb-4">
          <div class="col-12 text-center">
            <h4 class="section-title bg-white text-primary d-inline-block px-3">Showcase de Proyectos</h4>
            <p class="mt-3 mb-0">Vídeos, podcasts, apps, ciencia, arte, datos… da el salto y <strong>muestra lo que sabes hacer</strong>.</p>
          </div>
        </div>

        <!-- Grid 3 x fila -->
        <div class="row g-4">

          <!-- PROYECTO 1 -->
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="card h-100 shadow-sm">
              <img src="https://images.pexels.com/photos/5399017/pexels-photo-5399017.jpeg" class="card-img-top" alt="MathCast portada">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title mb-1">MathCast: Números que cuentan historias</h5>
                <p class="mb-2">
                  <span class="badge bg-primary">Matemáticas</span>
                  <span class="badge bg-secondary">Lengua</span>
                </p>
                <p class="card-text">Podcast donde explicamos problemas reales con datos: bus, descuentos y cómo NO caer en trampas numéricas.</p>
                <ul class="small mb-3">
                  <li>Centro: IES Demo</li>
                  <li>Nivel: 4.º ESO</li>
                  <li>Herramientas: iMovie, GarageBand, Sheets</li>
                </ul>
                <div class="mt-auto">
                  <a href="#" class="me-3"><i class="bi bi-play-circle"></i> Vídeo</a>
                  <a href="#" class="me-3"><i class="bi bi-mic"></i> Podcast</a>
                  <a href="#"><i class="bi bi-folder2-open"></i> Carpeta</a>
                </div>
              </div>
            </div>
          </div>

          <!-- PROYECTO 2 -->
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.15s">
            <div class="card h-100 shadow-sm">
              <img src="https://images.pexels.com/photos/5077049/pexels-photo-5077049.jpeg" class="card-img-top" alt="GeoVlog portada">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title mb-1">GeoVlog: Mi barrio en 3 capas</h5>
                <p class="mb-2">
                  <span class="badge bg-primary">Geografía</span>
                  <span class="badge bg-secondary">Tecnología</span>
                </p>
                <p class="card-text">Mapa interactivo con capas de transporte, zonas verdes y servicios. Vlog explicando decisiones y lectura de datos.</p>
                <ul class="small mb-3">
                  <li>Centro: IES Demo</li>
                  <li>Nivel: 3.º ESO</li>
                  <li>Herramientas: MyMaps, Canva, Docs</li>
                </ul>
                <div class="mt-auto">
                  <a href="#" class="me-3"><i class="bi bi-geo-alt"></i> Mapa</a>
                  <a href="#" class="me-3"><i class="bi bi-camera-video"></i> Vlog</a>
                  <a href="#"><i class="bi bi-file-earmark-text"></i> Memoria</a>
                </div>
              </div>
            </div>
          </div>

          <!-- PROYECTO 3 -->
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="card h-100 shadow-sm">
              <img src="https://images.pexels.com/photos/7567222/pexels-photo-7567222.jpeg" class="card-img-top" alt="EcoImpact portada">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title mb-1">EcoImpact: Datos que cambian hábitos</h5>
                <p class="mb-2">
                  <span class="badge bg-primary">Ciencias</span>
                  <span class="badge bg-secondary">Matemáticas</span>
                </p>
                <p class="card-text">Medimos consumo energético y proponemos un plan de ahorro. Dashboard + pitch de 2 minutos.</p>
                <ul class="small mb-3">
                  <li>Centro: IES Demo</li>
                  <li>Nivel: 1.º Bach</li>
                  <li>Herramientas: Looker Studio, Excel, Keynote</li>
                </ul>
                <div class="mt-auto">
                  <a href="#" class="me-3"><i class="bi bi-bar-chart"></i> Dashboard</a>
                  <a href="#" class="me-3"><i class="bi bi-megaphone"></i> Pitch</a>
                  <a href="#"><i class="bi bi-folder2-open"></i> Datos</a>
                </div>
              </div>
            </div>
          </div>

          <!-- PROYECTO 4 -->
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="card h-100 shadow-sm">
              <img src="https://picsum.photos/seed/historia/800/600" class="card-img-top" alt="Historia Viva portada">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title mb-1">Historia Viva: Mini-docu de patrimonio local</h5>
                <p class="mb-2">
                  <span class="badge bg-primary">Historia</span>
                  <span class="badge bg-secondary">Lengua</span>
                </p>
                <p class="card-text">Guion + rodaje + edición para contar un rincón histórico del barrio. Subtítulos, créditos y licencias abiertas.</p>
                <ul class="small mb-3">
                  <li>Centro: IES Demo</li>
                  <li>Nivel: 4.º ESO</li>
                  <li>Herramientas: CapCut, Drive, CC</li>
                </ul>
                <div class="mt-auto">
                  <a href="#" class="me-3"><i class="bi bi-film"></i> Mini-docu</a>
                  <a href="#" class="me-3"><i class="bi bi-file-earmark-richtext"></i> Guion</a>
                  <a href="#"><i class="bi bi-image"></i> Fotos</a>
                </div>
              </div>
            </div>
          </div>

          <!-- PROYECTO 5 -->
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.15s">
            <div class="card h-100 shadow-sm">
              <img src="https://picsum.photos/seed/biolab/800/600" class="card-img-top" alt="BioLab portada">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title mb-1">BioLab: Podcast de ciencia cercana</h5>
                <p class="mb-2">
                  <span class="badge bg-primary">Biología</span>
                  <span class="badge bg-secondary">Lengua</span>
                </p>
                <p class="card-text">Serie de podcasts sobre microbioma, sueño y alimentación. Guiones claros y entrevistas a expertos locales.</p>
                <ul class="small mb-3">
                  <li>Centro: IES Demo</li>
                  <li>Nivel: 1.º ESO</li>
                  <li>Herramientas: Spotify for Podcasters, Docs, Canva</li>
                </ul>
                <div class="mt-auto">
                  <a href="#" class="me-3"><i class="bi bi-mic"></i> Episodios</a>
                  <a href="#" class="me-3"><i class="bi bi-journal-text"></i> Guiones</a>
                  <a href="#"><i class="bi bi-link-45deg"></i> Referencias</a>
                </div>
              </div>
            </div>
          </div>

          <!-- PROYECTO 6 -->
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="card h-100 shadow-sm">
              <img src="https://picsum.photos/seed/robostem/800/600" class="card-img-top" alt="RoboSTEM portada">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title mb-1">RoboSTEM: Reto de logística inteligente</h5>
                <p class="mb-2">
                  <span class="badge bg-primary">Tecnología</span>
                  <span class="badge bg-secondary">Matemáticas</span>
                </p>
                <p class="card-text">Robot que optimiza rutas dentro del centro. Bitácora técnica y vídeo demo explicando el algoritmo.</p>
                <ul class="small mb-3">
                  <li>Centro: IES Demo</li>
                  <li>Nivel: 4.º ESO</li>
                  <li>Herramientas: Arduino/Micro:bit, GitHub, Figma</li>
                </ul>
                <div class="mt-auto">
                  <a href="#" class="me-3"><i class="bi bi-camera-video"></i> Demo</a>
                  <a href="#" class="me-3"><i class="bi bi-code-slash"></i> Código</a>
                  <a href="#"><i class="bi bi-diagram-3"></i> Esquemas</a>
                </div>
              </div>
            </div>
          </div>

          <!-- PROYECTO 7 -->
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="card h-100 shadow-sm">
              <img src="https://images.pexels.com/photos/164501/pexels-photo-164501.jpeg" class="card-img-top" alt="FinHack portada">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title mb-1">FinHack: Finanzas en la vida real</h5>
                <p class="mb-2">
                  <span class="badge bg-primary">Economía</span>
                  <span class="badge bg-secondary">Matemáticas</span>
                </p>
                <p class="card-text">Simulador de presupuesto joven: sueldo, gastos, ahorro e inversión. Informe final y vídeo tutorial.</p>
                <ul class="small mb-3">
                  <li>Centro: IES Demo</li>
                  <li>Nivel: 1.º Bach</li>
                  <li>Herramientas: Sheets/Excel, Notion, YouTube</li>
                </ul>
                <div class="mt-auto">
                  <a href="#" class="me-3"><i class="bi bi-cash-coin"></i> Simulador</a>
                  <a href="#" class="me-3"><i class="bi bi-file-earmark-spreadsheet"></i> Hoja</a>
                  <a href="#"><i class="bi bi-youtube"></i> Tutorial</a>
                </div>
              </div>
            </div>
          </div>

          <!-- PROYECTO 8 -->
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.15s">
            <div class="card h-100 shadow-sm">
              <img src="https://picsum.photos/seed/artfusion/800/600" class="card-img-top" alt="ArtFusion portada">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title mb-1">ArtFusion: Diseño con propósito</h5>
                <p class="mb-2">
                  <span class="badge bg-primary">Plástica/Arte</span>
                  <span class="badge bg-secondary">Lengua</span>
                </p>
                <p class="card-text">Campañas visuales para causas cercanas: cartel, post, micro-vídeo y texto persuasivo. Exposición digital.</p>
                <ul class="small mb-3">
                  <li>Centro: IES Demo</li>
                  <li>Nivel: 3.º ESO</li>
                  <li>Herramientas: Canva, CapCut, Instagram escolar</li>
                </ul>
                <div class="mt-auto">
                  <a href="#" class="me-3"><i class="bi bi-collection"></i> Exposición</a>
                  <a href="#" class="me-3"><i class="bi bi-brush"></i> Recursos</a>
                  <a href="#"><i class="bi bi-share"></i> Publicación</a>
                </div>
              </div>
            </div>
          </div>

          <!-- PROYECTO 9 -->
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="card h-100 shadow-sm">
              <img src="https://images.pexels.com/photos/24426021/pexels-photo-24426021.jpeg" class="card-img-top" alt="SportData portada">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title mb-1">SportData: Ciencia del deporte</h5>
                <p class="mb-2">
                  <span class="badge bg-primary">Educación Física</span>
                  <span class="badge bg-secondary">Matemáticas</span>
                </p>
                <p class="card-text">Analizamos rendimiento con wearables y visualizamos métricas clave. Vídeo comentado + informe de datos.</p>
                <ul class="small mb-3">
                  <li>Centro: IES Demo</li>
                  <li>Nivel: 4.º ESO</li>
                  <li>Herramientas: Data Studio, Excel, GoPro</li>
                </ul>
                <div class="mt-auto">
                  <a href="#" class="me-3"><i class="bi bi-activity"></i> Panel</a>
                  <a href="#" class="me-3"><i class="bi bi-camera-video"></i> Vídeo</a>
                  <a href="#"><i class="bi bi-file-earmark-text"></i> Informe</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

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
