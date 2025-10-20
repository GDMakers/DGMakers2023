<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Conecta-37 · Live Hub</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="encuentros, talleres, streaming, jornadas, Conecta-37, secundaria" name="keywords">
    <meta content="Calendario de encuentros Conecta-37: talleres, jornadas y directos intercentros con proyectos del alumnado." name="description">

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
            <h1 class="display-4 text-white mb-3">Live Hub Conecta 37</h1>
            <p class="lead text-white mb-0">Talleres, directos y jornadas donde el alumnado enseña y comparte sus proyectos.</p>
            <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
                <a href="index.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Visi&oacute;n general</a>
                <a href="Encuentro37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Jornadas 26</a>
                <a href="Livehub37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1 active" aria-current="page">Live Hub</a>
                <a href="Recursos37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Showcase de proyectos</a>
                <a href="Centros.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Centros participantes</a>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
      <div class="container">

        <!-- Pestañas Próximos / Realizados -->
        <ul class="nav nav-pills justify-content-center mb-4" id="encuentrosTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="proximos-tab" data-bs-toggle="pill" data-bs-target="#proximos" type="button" role="tab" aria-controls="proximos" aria-selected="true">
              Próximos
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="realizados-tab" data-bs-toggle="pill" data-bs-target="#realizados" type="button" role="tab" aria-controls="realizados" aria-selected="false">
              Realizados
            </button>
          </li>
        </ul>

        <div class="tab-content" id="encuentrosTabsContent">
          <!-- =================== PROXIMOS =================== -->
          <div class="tab-pane fade show active" id="proximos" role="tabpanel" aria-labelledby="proximos-tab">
            <div class="row g-4">

              <!-- Card 1 -->
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card h-100 shadow-sm">
                  <img src="https://images.unsplash.com/photo-1526628953301-3e589a6a8b74?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1612" class="card-img-top" alt="Encuentro Matemáticas en vivo">
                  <div class="card-body d-flex flex-column">
                    <h5 class="card-title mb-1">Math Live: Explicar con datos</h5>
                    <p class="mb-2">
                      <span class="badge bg-primary">Matemáticas</span>
                      <span class="badge bg-secondary">Streaming</span>
                    </p>
                    <ul class="small mb-3">
                      <li><i class="bi bi-calendar-event"></i> 28/10 · 18:00–19:00</li>
                      <li><i class="bi bi-geo-alt"></i> Online (YouTube Live)</li>
                      <li><i class="bi bi-people"></i> Abierto · Intercentros</li>
                    </ul>
                    <p class="card-text">Presentaciones cortas de 2–3 min donde equipos explican problemas reales y sus soluciones.</p>
                    <div class="mt-auto">
                      <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                      <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card 2 -->
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.15s">
                <div class="card h-100 shadow-sm">
                  <img src="https://images.unsplash.com/photo-1589903308904-1010c2294adc?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1740" class="card-img-top" alt="Taller Podcast Escolar">
                  <div class="card-body d-flex flex-column">
                    <h5 class="card-title mb-1">AudioLab: Tu podcast en 60 minutos</h5>
                    <p class="mb-2">
                      <span class="badge bg-primary">Lengua</span>
                      <span class="badge bg-secondary">Podcast</span>
                    </p>
                    <ul class="small mb-3">
                      <li><i class="bi bi-calendar-event"></i> 06/11 · 17:30–18:30</li>
                      <li><i class="bi bi-geo-alt"></i> Presencial · Hub Murcia</li>
                      <li><i class="bi bi-people"></i> 30 plazas</li>
                    </ul>
                    <p class="card-text">Guion rápido, grabación y publicación con licencias abiertas. Equipos mixtos de distintos centros.</p>
                    <div class="mt-auto">
                      <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                      <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card 3 -->
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="card h-100 shadow-sm">
                  <img src="https://images.unsplash.com/photo-1611117775350-ac3950990985?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1742" class="card-img-top" alt="Jornada STEAM Intercentros">
                  <div class="card-body d-flex flex-column">
                    <h5 class="card-title mb-1">STEAM Jam: Diseña–Construye–Presenta</h5>
                    <p class="mb-2">
                      <span class="badge bg-primary">Tecnología</span>
                      <span class="badge bg-secondary">STEAM</span>
                    </p>
                    <ul class="small mb-3">
                      <li><i class="bi bi-calendar-event"></i> 20/11 · 16:30–19:30</li>
                      <li><i class="bi bi-geo-alt"></i> IES Sede Madrid</li>
                      <li><i class="bi bi-people"></i> 12 equipos · Híbrido</li>
                    </ul>
                    <p class="card-text">Reto express: prototipo útil + pitch de 120 segundos. Jurado con docentes y estudiantes mentores.</p>
                    <div class="mt-auto">
                      <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                      <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- =================== REALIZADOS =================== -->
          <div class="tab-pane fade" id="realizados" role="tabpanel" aria-labelledby="realizados-tab">
            <div class="row g-4">

              <!-- Card 4 -->
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card h-100 shadow-sm">
                  <img src="https://picsum.photos/seed/enc4/800/520" class="card-img-top" alt="Demo Day Conecta-37">
                  <div class="card-body d-flex flex-column">
                    <h5 class="card-title mb-1">Demo Day: Muestra de proyectos T1</h5>
                    <p class="mb-2">
                      <span class="badge bg-secondary">Muestra</span>
                    </p>
                    <ul class="small mb-3">
                      <li><i class="bi bi-calendar-event"></i> 12/06 · 17:00–19:00</li>
                      <li><i class="bi bi-geo-alt"></i> Hub Primaria + Streaming</li>
                    </ul>
                    <p class="card-text">Galería abierta con pósters, vídeos y demos en vivo. Feedback de pares con “pluses y preguntas”.</p>
                    <div class="mt-auto">
                      <a href="#" class="btn btn-sm btn-outline-primary me-2"><i class="bi bi-broadcast"></i> Streaming</a>
                      <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-archive"></i> Materiales</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card 5 -->
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.15s">
                <div class="card h-100 shadow-sm">
                  <img src="https://picsum.photos/seed/enc5/800/520" class="card-img-top" alt="Foro de Comunicación Escolar">
                  <div class="card-body d-flex flex-column">
                    <h5 class="card-title mb-1">Foro: Radio y TV escolar</h5>
                    <p class="mb-2">
                      <span class="badge bg-secondary">Foro</span>
                      <span class="badge bg-primary">Lengua</span>
                    </p>
                    <ul class="small mb-3">
                      <li><i class="bi bi-calendar-event"></i> 02/05 · 18:00–19:30</li>
                      <li><i class="bi bi-geo-alt"></i> Online</li>
                    </ul>
                    <p class="card-text">Buenas prácticas y checklist para lanzar tu propio canal. Referencias y plantillas descargables.</p>
                    <div class="mt-auto">
                      <a href="#" class="btn btn-sm btn-outline-primary me-2"><i class="bi bi-broadcast"></i> Streaming</a>
                      <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-archive"></i> Materiales</a>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card 6 -->
              <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="card h-100 shadow-sm">
                  <img src="https://picsum.photos/seed/enc6/800/520" class="card-img-top" alt="Clínica de evaluación">
                  <div class="card-body d-flex flex-column">
                    <h5 class="card-title mb-1">Clínica: Rúbricas en 1 página</h5>
                    <p class="mb-2">
                      <span class="badge bg-secondary">Clínica</span>
                    </p>
                    <ul class="small mb-3">
                      <li><i class="bi bi-calendar-event"></i> 18/04 · 17:00–18:00</li>
                      <li><i class="bi bi-geo-alt"></i> Online</li>
                    </ul>
                    <p class="card-text">Cómo evaluar producto, oral y razonamiento en Conecta-37 sin complicarse. Casos reales y plantillas.</p>
                    <div class="mt-auto">
                      <a href="#" class="btn btn-sm btn-outline-primary me-2"><i class="bi bi-broadcast"></i> Streaming</a>
                      <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-archive"></i> Materiales</a>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>

        <!-- CTA proponer encuentro -->
        <div class="row mt-5">
          <div class="col-12 text-center">
            <div class="p-4 border rounded-3">
              <h5 class="mb-1">¿Quieres proponer un encuentro?</h5>
              <p class="mb-3">Comparte tu idea (taller, directo, muestra) y la sumamos a la agenda de la red.</p>
              <a href="#" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Enviar propuesta</a>
            </div>
          </div>
        </div>

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
