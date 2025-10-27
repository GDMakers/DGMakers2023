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

        .anchor-nav .btn {
            font-weight: 600;
            letter-spacing: 0.02em;
        }

        .agenda-timeline {
            position: relative;
            padding-left: 1.75rem;
            border-left: 3px solid rgba(1, 81, 131, 0.15);
        }

        .agenda-timeline .timeline-item {
            position: relative;
            padding-bottom: 1.5rem;
        }

        .agenda-timeline .timeline-item:last-child {
            padding-bottom: 0;
        }

        .agenda-timeline .timeline-marker {
            position: absolute;
            left: -1.1rem;
            top: 0.25rem;
            width: 0.85rem;
            height: 0.85rem;
            border-radius: 50%;
            background-color: #015183;
            box-shadow: 0 0 0 6px rgba(1, 81, 131, 0.15);
        }

        .agenda-timeline .timeline-time {
            display: inline-flex;
            align-items: center;
            font-weight: 600;
            color: #015183;
            margin-bottom: 0.25rem;
            margin-left: 0.6rem;
        }

        .agenda-timeline .timeline-time i {
            margin-right: 0.35rem;
        }

        .agenda-timeline .timeline-title {
            margin-bottom: 0.25rem;
            font-size: 1.02rem;
        }

        .agenda-timeline .timeline-body {
            margin-bottom: 0;
            color: #4f4f4f;
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
            <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
                <a href="index.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Visi&oacute;n general</a>
                <a href="Encuentro37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1 active" aria-current="page">Jornadas 26</a>
                <a href="Livehub37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Live Hub</a>
                <a href="Recursos37.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Showcase de proyectos</a>
                <a href="Roadmap.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Roadmap</a>
                <a href="Centros.php" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Centros participantes</a>
            </div>
            <div class="mt-3">
                <a href="#" class="btn btn-light btn-lg"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
      <div class="container">

        <!-- Intro -->
        <div class="row mb-4">
          <div class="col-lg-10 mx-auto text-center">
            <h4 class="section-title bg-white text-primary d-inline-block px-3">Programa & Streaming</h4>
            <h5 class="card-title mb-1">Febrero 2026</h5>
            <p class="mt-3 mb-0">Formato  online · sesiones de 30 - 45’ · materiales descargables</p> 
            <p class="mt-3 mb-0">S2S (Student to Student) · Q&A  en vivo.</p>
          </div>
        </div>

        <!-- PROGRAMA (tarjetas con imagen) -->
        <div class="row g-4">
          <div class="col-12">
            <div class="p-4 p-md-5 border rounded-3 shadow-sm bg-white">
              <h2 class="mb-3">Jornadas S2S · Conecta 37 (online)</h2>
              <p class="mb-2"><strong>S2S = Student to Student.</strong> Un día para <strong>hacer</strong>, no para escuchar.</p>
              <p class="mb-4"><strong>Centros:</strong> CEIPS Santo Domingo (Madrid) · Colegio Litterator (Madrid) · IES Alcántara · IES Cañada de las Eras · IES Floridablanca · IES Sangonera la Verde (Murcia)</p>
              <h3 class="h5 text-uppercase text-primary mb-3">Stack</h3>
              <ul class="list-unstyled mb-4">
                <li class="mb-2"><strong>Meet:</strong> Sala Main + Breakout Rooms</li>
                <li class="mb-2"><strong>Padlet:</strong> muro vivo de proyectos</li>
                <li class="mb-0"><strong>Tools:</strong> Tinkercad · MakeCode · Genially · Canva · Clipchamp · BandLab/Soundtrap · Docs</li>
              </ul>
              <div class="anchor-nav d-flex flex-wrap gap-2 justify-content-center justify-content-md-start mb-4">
                <a class="btn btn-outline-primary btn-sm" href="#agenda"><i class="bi bi-clock-history me-1"></i>Agenda</a>
                <a class="btn btn-outline-primary btn-sm" href="#talleres"><i class="bi bi-kanban me-1"></i>Talleres</a>
                <a class="btn btn-outline-primary btn-sm" href="#padlet"><i class="bi bi-collection me-1"></i>Padlet</a>
                <a class="btn btn-outline-primary btn-sm" href="#tandems"><i class="bi bi-people-fill me-1"></i>Tándems</a>
              </div>
              <h3 class="h5 text-uppercase text-primary mb-3" id="agenda">Agenda (09:30–13:30)</h3>
              <div class="agenda-timeline mb-4">
                <div class="timeline-item">
                  <span class="timeline-marker"></span>
                  <span class="timeline-time"><i class="bi bi-clock"></i>09:30–09:45</span>
                  <h6 class="timeline-title">Kickoff</h6>
                  <p class="timeline-body">Main: bienvenida + mapa de centros + nube de habilidades (Mentimeter).</p>
                </div>
                <div class="timeline-item">
                  <span class="timeline-marker"></span>
                  <span class="timeline-time"><i class="bi bi-clock"></i>09:45–10:15</span>
                  <h6 class="timeline-title">Lightning Pitches</h6>
                  <p class="timeline-body">6 monitores (alumnado) venden su taller. 3 min cada uno (demo + “qué vas a crear”).</p>
                </div>
                <div class="timeline-item">
                  <span class="timeline-marker"></span>
                  <span class="timeline-time"><i class="bi bi-clock"></i>10:15–11:20</span>
                  <h6 class="timeline-title">Build A</h6>
                  <p class="timeline-body">Move → Breakouts. Talleres 1–3 (60’). Docentes flotan; monitores guían.</p>
                </div>
                <div class="timeline-item">
                  <span class="timeline-marker"></span>
                  <span class="timeline-time"><i class="bi bi-clock"></i>11:20–11:50</span>
                  <h6 class="timeline-title">Break + Social Café</h6>
                  <p class="timeline-body">Main → salas aleatorias 4–5 pax. Sin tarea: charlar, conectar.</p>
                </div>
                <div class="timeline-item">
                  <span class="timeline-marker"></span>
                  <span class="timeline-time"><i class="bi bi-clock"></i>11:50–13:00</span>
                  <h6 class="timeline-title">Build B</h6>
                  <p class="timeline-body">Main 10’ + move → Breakouts. Talleres 4–6 (60’).</p>
                </div>
                <div class="timeline-item">
                  <span class="timeline-marker"></span>
                  <span class="timeline-time"><i class="bi bi-clock"></i>13:00–13:20</span>
                  <h6 class="timeline-title">Gallery Live</h6>
                  <p class="timeline-body">Main: subir captura/URL al Padlet + lightning demos (30–60’’).</p>
                </div>
                <div class="timeline-item">
                  <span class="timeline-marker"></span>
                  <span class="timeline-time"><i class="bi bi-clock"></i>13:20–13:30</span>
                  <h6 class="timeline-title">Wrap</h6>
                  <p class="timeline-body mb-0">Foto final + próximos pasos + thanks a monitores.</p>
                </div>
              </div>
              

              <hr class="my-4">
              <h3 class="h5 text-uppercase text-primary mb-3" id="talleres">Talleres (60’ cada uno)</h3>
              <p class="mb-2"><strong>Elige 1 del Bloque A y 1 del Bloque B.</strong> Sal con un borrador publicado.</p>
              <p class="mb-3">Elige tus dos talleres (A/B) en los bloques siguientes.</p>
              <div class="alert alert-warning mb-4" role="alert">
                Antes de las jornadas se seleccionarán solo 6 talleres (3 por bloque) para ofertar en directo durante el día S2S.
              </div>
              <h4 class="h6 text-muted text-uppercase mb-3">Bloque A (10:20–11:20)</h4>
              <div class="row g-4 mb-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.05s">
                  <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1611117775350-ac3950990985?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=2671" class="card-img-top encuentro-card-img" alt="Taller 3D Exprés en Tinkercad">
                    <div class="card-body d-flex flex-column">
                      <h5 class="card-title mb-1">3D Exprés</h5>
                      <p class="mb-2"><span class="badge bg-primary">Diseño 3D</span> <span class="badge bg-secondary">Tinkercad</span></p>
                      <ul class="small mb-3">
                        <li><i class="bi bi-clock me-1"></i> 10:20–11:20</li>
                        <li><i class="bi bi-geo-alt me-1"></i> Breakout · Bloque A</li>
                      </ul>
                      <p class="card-text">Modela y exporta un llavero o figura simple dominando mover, agrupar y sustraer en Tinkercad.</p>
                      <div class="mt-auto">
                        <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Guía</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1587620962725-abab7fe55159?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1931" class="card-img-top encuentro-card-img" alt="Taller Code Creativo con micro:bit">
                    <div class="card-body d-flex flex-column">
                      <h5 class="card-title mb-1">Code Creativo</h5>
                      <p class="mb-2"><span class="badge bg-primary">Coding</span> <span class="badge bg-secondary">MakeCode micro:bit</span></p>
                      <ul class="small mb-3">
                        <li><i class="bi bi-clock me-1"></i> 10:20–11:20</li>
                        <li><i class="bi bi-geo-alt me-1"></i> Breakout · Bloque A</li>
                      </ul>
                      <p class="card-text">Programa un mini-juego o banner de LEDs en el simulador micro:bit y publícalo listo para compartir.</p>
                      <div class="mt-auto">
                        <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-code-slash"></i> Proyecto</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.15s" id="tandems">
                  <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=800&q=80" class="card-img-top encuentro-card-img" alt="Taller One-Take de grabación en una toma">
                    <div class="card-body d-flex flex-column">
                      <h5 class="card-title mb-1">One-Take</h5>
                      <p class="mb-2"><span class="badge bg-primary">Vídeo</span> <span class="badge bg-secondary">Clipchamp</span></p>
                      <ul class="small mb-3">
                        <li><i class="bi bi-clock me-1"></i> 10:20–11:20</li>
                        <li><i class="bi bi-geo-alt me-1"></i> Breakout · Bloque A</li>
                      </ul>
                      <p class="card-text">Diseña y graba en una sola toma con checklist de audio y RGPD, editando remates rápidos en Clipchamp.</p>
                      <div class="mt-auto">
                        <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-camera-video"></i> Checklist</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.05s">
                  <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?auto=format&fit=crop&w=800&q=80" class="card-img-top encuentro-card-img" alt="Taller Lengua que Impacta con Docs y Canva">
                    <div class="card-body d-flex flex-column">
                      <h5 class="card-title mb-1">Lengua que Impacta</h5>
                      <p class="mb-2"><span class="badge bg-primary">Comunicación</span> <span class="badge bg-secondary">Docs · Canva</span></p>
                      <ul class="small mb-3">
                        <li><i class="bi bi-clock me-1"></i> 10:20–11:20</li>
                        <li><i class="bi bi-geo-alt me-1"></i> Breakout · Bloque A</li>
                      </ul>
                      <p class="card-text">Redacta titular y guion breve bajo licencias CC y publícalo como podcast o pieza visual de impacto.</p>
                      <div class="mt-auto">
                        <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-journal-text"></i> Plantilla</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?auto=format&fit=crop&w=800&q=80" class="card-img-top encuentro-card-img" alt="Taller Beat Lab con BandLab o Soundtrap">
                    <div class="card-body d-flex flex-column">
                      <h5 class="card-title mb-1">Beat Lab</h5>
                      <p class="mb-2"><span class="badge bg-primary">Música</span> <span class="badge bg-secondary">BandLab · Soundtrap</span></p>
                      <ul class="small mb-3">
                        <li><i class="bi bi-clock me-1"></i> 10:20–11:20</li>
                        <li><i class="bi bi-geo-alt me-1"></i> Breakout · Bloque A</li>
                      </ul>
                      <p class="card-text">Construye un loop de 8 compases combinando pistas y samples y publícalo con feedback instantáneo.</p>
                      <div class="mt-auto">
                        <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-music-note-beamed"></i> Sesión</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.15s">
                  <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=800&q=80" class="card-img-top encuentro-card-img" alt="Taller IA con Propósito con herramientas generativas">
                    <div class="card-body d-flex flex-column">
                      <h5 class="card-title mb-1">IA con Propósito</h5>
                      <p class="mb-2"><span class="badge bg-primary">IA Responsable</span> <span class="badge bg-secondary">ChatGPT · Gemini · Copilot</span></p>
                      <ul class="small mb-3">
                        <li><i class="bi bi-clock me-1"></i> 10:20–11:20</li>
                        <li><i class="bi bi-geo-alt me-1"></i> Breakout · Bloque A</li>
                      </ul>
                      <p class="card-text">Practica prompting ético para guiones y recursos, documentando usos responsables y transparencia IA.</p>
                      <div class="mt-auto">
                        <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-lightbulb"></i> Prompts</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h4 class="h6 text-muted text-uppercase mb-3">Bloque B (12:00–13:00)</h4>
              <div class="row g-4 mb-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.05s">
                  <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1523475472560-d2df97ec485c?auto=format&fit=crop&w=800&q=80" class="card-img-top encuentro-card-img" alt="Taller Narrativa Interactiva en Genially">
                    <div class="card-body d-flex flex-column">
                      <h5 class="card-title mb-1">Narrativa Interactiva</h5>
                      <p class="mb-2"><span class="badge bg-primary">Storytelling</span> <span class="badge bg-secondary">Genially</span></p>
                      <ul class="small mb-3">
                        <li><i class="bi bi-clock me-1"></i> 12:00–13:00</li>
                        <li><i class="bi bi-geo-alt me-1"></i> Breakout · Bloque B</li>
                      </ul>
                      <p class="card-text">Diseña una historia “elige tu aventura” con 2–3 decisiones, capas interactivas y navegación fluida.</p>
                      <div class="mt-auto">
                        <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-stars"></i> Plantilla</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=800&q=80" class="card-img-top encuentro-card-img" alt="Taller Póster Pro con Canva">
                    <div class="card-body d-flex flex-column">
                      <h5 class="card-title mb-1">Póster Pro</h5>
                      <p class="mb-2"><span class="badge bg-primary">Visual</span> <span class="badge bg-secondary">Canva</span></p>
                      <ul class="small mb-3">
                        <li><i class="bi bi-clock me-1"></i> 12:00–13:00</li>
                        <li><i class="bi bi-geo-alt me-1"></i> Breakout · Bloque B</li>
                      </ul>
                      <p class="card-text">Diseña un póster A3 o para Instagram con jerarquía, paleta y tipografía coherente para publicar ya.</p>
                      <div class="mt-auto">
                        <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-brush"></i> Kit</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.15s">
                  <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1607968565043-36af90dde238?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1738" class="card-img-top encuentro-card-img" alt="Taller Vídeo 60s con Clipchamp o WeVideo">
                    <div class="card-body d-flex flex-column">
                      <h5 class="card-title mb-1">Vídeo 60s</h5>
                      <p class="mb-2"><span class="badge bg-primary">Vídeo</span> <span class="badge bg-secondary">Clipchamp · WeVideo</span></p>
                      <ul class="small mb-3">
                        <li><i class="bi bi-clock me-1"></i> 12:00–13:00</li>
                        <li><i class="bi bi-geo-alt me-1"></i> Breakout · Bloque B</li>
                      </ul>
                      <p class="card-text">Edita una secuencia vertical con cortes ágiles, música y títulos estilo reel, lista para publicar.</p>
                      <div class="mt-auto">
                        <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-play-btn"></i> Timeline</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.05s">
                  <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1636466497217-26a8cbeaf0aa?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1548" class="card-img-top encuentro-card-img" alt="Taller Mates que se Expresan con Docs y Jamboard">
                    <div class="card-body d-flex flex-column">
                      <h5 class="card-title mb-1">Mates que se Expresan</h5>
                      <p class="mb-2"><span class="badge bg-primary">Matemáticas</span> <span class="badge bg-secondary">Docs · Jamboard</span></p>
                      <ul class="small mb-3">
                        <li><i class="bi bi-clock me-1"></i> 12:00–13:00</li>
                        <li><i class="bi bi-geo-alt me-1"></i> Breakout · Bloque B</li>
                      </ul>
                      <p class="card-text">Transforma un reto matemático en guion visual con ejemplo ancla y explicación clara compartida.</p>
                      <div class="mt-auto">
                        <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-grid-3x3-gap"></i> Plantilla</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=80" class="card-img-top encuentro-card-img" alt="Taller Eval Rápida con formularios y rúbricas">
                    <div class="card-body d-flex flex-column">
                      <h5 class="card-title mb-1">Eval Rápida</h5>
                      <p class="mb-2"><span class="badge bg-primary">Evaluación</span> <span class="badge bg-secondary">Forms · Rúbrica 3×4</span></p>
                      <ul class="small mb-3">
                        <li><i class="bi bi-clock me-1"></i> 12:00–13:00</li>
                        <li><i class="bi bi-geo-alt me-1"></i> Breakout · Bloque B</li>
                      </ul>
                      <p class="card-text">Diseña un formulario pre/post de 5 ítems y una rúbrica 3×4 para feedback inmediato y claro.</p>
                      <div class="mt-auto">
                        <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-clipboard-check"></i> Plantilla</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.15s">
                  <div class="card h-100 shadow-sm">
                    <img src="https://images.unsplash.com/photo-1529333166437-7750a6dd5a70?auto=format&fit=crop&w=800&q=80" class="card-img-top encuentro-card-img" alt="Taller Tándem Intercentros con colaboración online">
                    <div class="card-body d-flex flex-column">
                      <h5 class="card-title mb-1">Tándem Intercentros</h5>
                      <p class="mb-2"><span class="badge bg-primary">Colaboración</span> <span class="badge bg-secondary">Docs · Padlet</span></p>
                      <ul class="small mb-3">
                        <li><i class="bi bi-clock me-1"></i> 12:00–13:00</li>
                        <li><i class="bi bi-geo-alt me-1"></i> Breakout · Bloque B</li>
                      </ul>
                      <p class="card-text">Coordina tándems entre centros con feedback “pluses y preguntas” y plan compartido en Docs/Padlet.</p>
                      <div class="mt-auto">
                        <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-people"></i> Formulario</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4">
              <h3 class="h5 text-uppercase text-primary mb-3">Roles</h3>
              <ul class="list-unstyled mb-4">
                <li class="mb-2"><strong>Monitores S2S (alumnado):</strong> demo 5’ &rarr; práctica 20’ &rarr; evidencia 10’.</li>
                <li class="mb-2"><strong>Docentes:</strong> soporte, tiempo, técnica.</li>
                <li class="mb-0"><strong>Equipo Hub:</strong> recoge links, modera Padlet.</li>
              </ul>
              <h3 class="h5 text-uppercase text-primary mb-3">Entregables del día</h3>
              <ul class="list-unstyled mb-4">
                <li class="mb-2">1 micro-producto por persona/equipo (vídeo 60–90’’, póster, podcast, genially) subido a Padlet. Sube tu link al Padlet al cerrar tu sesión.</li>
                <li class="mb-2">Evidencias (captura/URL) + si aplica pre/post.</li>
                <li class="mb-0">Tándems entre centros confirmados (referentes + primer hito). Apúntate a un tándem con el formulario corto.</li>
              </ul>
              <h3 class="h5 text-uppercase text-primary mb-3">Reglas rápidas</h3>
              <ul class="list-unstyled mb-4">
                <li class="mb-2"><strong>CC & créditos</strong> siempre.</li>
                <li class="mb-2"><strong>Privacidad:</strong> sin datos sensibles.</li>
                <li class="mb-2"><strong>Transparencia IA:</strong> di si la usaste y cómo.</li>
                <li class="mb-0"><strong>Respeto & foco:</strong> 5–20–10 en cada taller.</li>
              </ul>
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
            <div class="p-4 border rounded-3 h-100" id="padlet">
              <h5 class="mb-2">Materiales y enlaces</h5>
              <ul class="list-unstyled mb-0">
                <li class="mb-2"><i class="bi bi-folder2-open me-2"></i><a href="#" target="_blank">Carpeta general (Slides, PDFs, rúbricas)</a></li>
                <li class="mb-2"><i class="bi bi-camera-video me-2"></i><a href="#" target="_blank">Únete a tu room (Meet)</a></li>
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
