<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Conecta 37 · Jornadas Online</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="conecta-37, jornadas, online, secundaria, ESO, bachillerato, streaming" name="keywords">
    <meta content="Jornadas Online Conecta-37: sesiones breves y prácticas para enseñar en digital con producto público y evidencias." name="description">

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
        .encuentro-card-img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            object-position: center;
        }

        @media (min-width: 992px) {
            .encuentro-card-img {
                height: 240px;
            }
        }

        .accordion-button {
            font-family: 'Open Sans', 'Segoe UI', system-ui, -apple-system, sans-serif;
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

    <!-- HERO -->
    <div class="container-fluid hero-conecta py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 text-center">
            <h1 class="display-4 text-white mb-3">Jornadas Online Conecta 37</h1>
            <p class="lead text-white mb-4">Sesiones cortas, muy prácticas y en directo: enseñar en digital con producto público y evidencias.</p>
            <a href="#" class="btn btn-light btn-lg"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
        </div>
    </div>

    <div class="container-xxl py-5">
      <div class="container">

        <!-- Intro -->
        <div class="row mb-4">
          <div class="col-lg-10 mx-auto text-center">
            <h4 class="section-title bg-white text-primary d-inline-block px-3">Programa & Streaming</h4>
            <h5 class="card-title mb-1">Febrero 2026</h5>
            <p class="mt-3 mb-0">Formato online · sesiones de 60–90’ · materiales descargables · Q&A en vivo.</p>
          </div>
        </div>

        <!-- PROGRAMA (tarjetas con imagen) -->
        <div class="row g-4">

          <!-- Sesión 1 -->
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.05s">
            <div class="card h-100 shadow-sm">
              <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1864" class="card-img-top encuentro-card-img" alt="Enseñar en digital con propósito">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title mb-1">Enseñar en digital con propósito</h5>
                <p class="mb-2"><span class="badge bg-primary">Metodología</span> <span class="badge bg-secondary">Producto público</span></p>
                <ul class="small mb-3">
                  <li><i class="bi bi-calendar-event"></i> Próximamente · 17:00–18:15</li>
                  <li><i class="bi bi-broadcast"></i> Streaming en YouTube</li>
                </ul>
                <p class="card-text">Ciclo simple: mini-lección → práctica guiada → tarea rica → evidencia. Ejemplos reales y checklist de aula.</p>
                <div class="mt-auto">
                  <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                  <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Sesión 2 -->
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="card h-100 shadow-sm">
              <img src="https://images.pexels.com/photos/7743253/pexels-photo-7743253.jpeg?_gl=1*1yb2vyl*_ga*MTY3Nzk3MjE3My4xNzYwNDUxMjcy*_ga_8JE65Q40S6*czE3NjA0NTEyNzEkbzEkZzEkdDE3NjA0NTEzMDQkajI3JGwwJGgw" class="card-img-top encuentro-card-img" alt="Matemáticas que se expresan">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title mb-1">Matemáticas que se expresan</h5>
                <p class="mb-2"><span class="badge bg-primary">Matemáticas</span> <span class="badge bg-secondary">Vídeo/Podcast</span></p>
                <ul class="small mb-3">
                  <li><i class="bi bi-calendar-event"></i> Próximamente · 18:30–19:30</li>
                  <li><i class="bi bi-broadcast"></i> Streaming en YouTube</li>
                </ul>
                <p class="card-text">Resolver, **escribir** y **explicar**: guiones, ejemplos ancla y rúbrica de claridad/razonamiento para vídeo y podcast.</p>
                <div class="mt-auto">
                  <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                  <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Materiales</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Sesión 3 -->
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.15s">
            <div class="card h-100 shadow-sm">
              <img src="https://images.pexels.com/photos/3184399/pexels-photo-3184399.jpeg" class="card-img-top encuentro-card-img" alt="Lengua: productos que importan">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title mb-1">Lengua: productos que importan</h5>
                <p class="mb-2"><span class="badge bg-primary">Lengua</span> <span class="badge bg-secondary">Comunicación</span></p>
                <ul class="small mb-3">
                  <li><i class="bi bi-calendar-event"></i> Próximamente · 17:00–18:00</li>
                  <li><i class="bi bi-broadcast"></i> Streaming en YouTube</li>
                </ul>
                <p class="card-text">Periódico y radio escolar digital: guiones breves, licencias abiertas y publicaciones con impacto real.</p>
                <div class="mt-auto">
                  <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                  <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-archive"></i> Plantillas</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Sesión 4 -->
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.05s">
            <div class="card h-100 shadow-sm">
              <img src="https://images.pexels.com/photos/8850706/pexels-photo-8850706.jpeg" class="card-img-top encuentro-card-img" alt="Evaluar sin complicarse">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title mb-1">Evaluar sin complicarse</h5>
                <p class="mb-2"><span class="badge bg-primary">Evaluación</span> <span class="badge bg-secondary">Rúbricas 1-página</span></p>
                <ul class="small mb-3">
                  <li><i class="bi bi-calendar-event"></i> Próximamente · 18:15–19:15</li>
                  <li><i class="bi bi-broadcast"></i> Streaming en YouTube</li>
                </ul>
                <p class="card-text">Pre/Post, tablero simple y rúbricas de producto, explicación oral y escrita. Exportables a PDF/CSV.</p>
                <div class="mt-auto">
                  <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                  <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-spreadsheet"></i> Tablero</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Sesión 5 -->
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="card h-100 shadow-sm">
              <img src="https://images.pexels.com/photos/6954220/pexels-photo-6954220.jpeg" class="card-img-top encuentro-card-img" alt="Herramientas de grabación rápida">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title mb-1">Grabación rápida: vídeo & audio</h5>
                <p class="mb-2"><span class="badge bg-primary">Taller</span> <span class="badge bg-secondary">Herramientas</span></p>
                <ul class="small mb-3">
                  <li><i class="bi bi-calendar-event"></i> Próximamente · 17:00–18:00</li>
                  <li><i class="bi bi-broadcast"></i> Streaming en YouTube</li>
                </ul>
                <p class="card-text">Flujo “one-take”: set básico, micro, plano y edición express. Checklist de publicación segura (RGPD).</p>
                <div class="mt-auto">
                  <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                  <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-archive"></i> Materiales</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Sesión 6 -->
          <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.15s">
            <div class="card h-100 shadow-sm">
              <img src="https://images.unsplash.com/photo-1655993810480-c15dccf9b3a0?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1160" class="card-img-top encuentro-card-img" alt="Intercentros: casos y mentoría">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title mb-1">Intercentros: casos y mentoría</h5>
                <p class="mb-2"><span class="badge bg-primary">Colaboración</span> <span class="badge bg-secondary">Mentoría</span></p>
                <ul class="small mb-3">
                  <li><i class="bi bi-calendar-event"></i> Próximamente · 18:15–19:15</li>
                  <li><i class="bi bi-broadcast"></i> Streaming en YouTube</li>
                </ul>
                <p class="card-text">Parejas de centros, protocolos ligeros (tuning, pluses y preguntas) y repositorio común de buenas prácticas.</p>
                <div class="mt-auto">
                  <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                  <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-collection"></i> Casos</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- STREAMING + MATERIALES -->
        <div class="row mt-5 g-4">
          <div class="col-lg-7">
            <div class="ratio ratio-16x9 shadow-sm">
              <!-- Sustituye el src por el enlace real del directo -->
              <iframe src="https://www.youtube.com/embed/yz73wdm_ozM" title="Streaming Jornadas Conecta-37" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="p-4 border rounded-3 h-100">
              <h5 class="mb-2">Materiales y enlaces</h5>
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><i class="bi bi-folder2-open me-2"></i><a href="#" target="_blank">Carpeta general (Slides, PDFs, rúbricas)</a></li>
                <li class="mb-2"><i class="bi bi-calendar2-plus me-2"></i><a href="#" target="_blank">Añadir al calendario (ICS)</a></li>
                <li class="mb-2"><i class="bi bi-chat-dots me-2"></i><a href="#" target="_blank">Foro/Canal de dudas</a></li>
                <li class="mb-2"><i class="bi bi-shield-lock me-2"></i><a href="#" target="_blank">RGPD y licencias de publicación</a></li>
              </ul>
            </div>
          </div>
        </div>

        <!-- FAQ -->
        <div class="row mt-5">
          <div class="col-lg-10 mx-auto">
            <h4 class="section-title bg-white text-start text-primary pe-3">Preguntas frecuentes</h4>
            <div class="accordion mt-3" id="faqJornadas">
              <div class="accordion-item">
                <h2 class="accordion-header" id="q1">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#a1" aria-expanded="true" aria-controls="a1">
                    ¿Las jornadas son gratuitas?
                  </button>
                </h2>
                <div id="a1" class="accordion-collapse collapse show" aria-labelledby="q1" data-bs-parent="#faqJornadas">
                  <div class="accordion-body">Sí. Son abiertas a la red Conecta-37. Algunas sesiones pueden requerir inscripción previa por aforo.</div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="q2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a2" aria-expanded="false" aria-controls="a2">
                    ¿Recibiré certificado de participación?
                  </button>
                </h2>
                <div id="a2" class="accordion-collapse collapse" aria-labelledby="q2" data-bs-parent="#faqJornadas">
                  <div class="accordion-body">Emitimos certificado digital a quienes completen al menos 3 sesiones y entreguen su mini-producto.</div>
                </div>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="q3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#a3" aria-expanded="false" aria-controls="a3">
                    ¿Cómo enviamos dudas o propuestas de sesión?
                  </button>
                </h2>
                <div id="a3" class="accordion-collapse collapse" aria-labelledby="q1" data-bs-parent="#faqJornadas">
                  <div class="accordion-body">Usa el formulario de propuesta o el canal de la red. Respondemos en menos de 48 h lectivas.</div>
                </div>
              </div>
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
