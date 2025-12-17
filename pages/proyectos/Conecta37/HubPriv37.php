<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>NÚCLEO BETA · Ops Center</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Conecta 37, Hub Privado, Innovación, Dashboard" name="keywords">
    <meta content="Centro de Comandos de Operaciones para la innovación educativa." name="description">

    <!-- Favicon -->
    <link href="../../../img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

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
        :root {
            --bg-body: #F5F5F7;
            --bg-card: #FFFFFF;
            --text-primary: #1D1D1F;
            --text-secondary: #86868B;
            --accent-blue: #0071E3;
            --accent-green: #34C759;
            --accent-red: #FF3B30;
            --accent-orange: #FF9500;
            --border-color: #D2D2D7;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            background-color: var(--bg-body);
            color: var(--text-primary);
        }

        /* Header Metrics */
        .ops-header {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border-color);
            position: sticky;
            top: 0;
            z-index: 1000;
            padding: 1rem 0;
        }

        .metric-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--text-secondary);
        }

        .metric-value {
            color: var(--text-primary);
            font-weight: 700;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: var(--accent-green);
            display: inline-block;
        }

        /* Section Titles */
        .section-title-ops {
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--text-secondary);
            font-weight: 600;
            margin-bottom: 1.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .section-title-ops i {
            color: var(--accent-blue);
        }

        /* Launchpad (Horizontal Scroll) */
        .launchpad-container {
            display: flex;
            overflow-x: auto;
            gap: 1.5rem;
            padding-bottom: 2rem;
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none;  /* IE 10+ */
        }

        .launchpad-container::-webkit-scrollbar { 
            display: none;  /* Chrome Safari */
        }

        .idea-card {
            min-width: 320px;
            max-width: 320px;
            background: var(--bg-card);
            border-radius: 18px;
            padding: 1.5rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.04);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(0,0,0,0.02);
            display: flex;
            flex-direction: column;
        }

        .idea-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .idea-source {
            font-size: 0.75rem;
            text-transform: uppercase;
            color: var(--text-secondary);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .idea-title {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            line-height: 1.3;
        }

        .idea-kernel {
            font-family: 'SF Mono', 'Menlo', 'Monaco', 'Courier New', monospace;
            font-size: 0.8rem;
            background: #F2F2F7;
            padding: 0.3rem 0.6rem;
            border-radius: 6px;
            color: var(--accent-blue);
            margin-bottom: 1rem;
            display: inline-block;
        }

        .progress-label {
            display: flex;
            justify-content: space-between;
            font-size: 0.75rem;
            color: var(--text-secondary);
            margin-bottom: 0.3rem;
        }

        .progress-bar-custom {
            height: 6px;
            background: #E5E5EA;
            border-radius: 3px;
            overflow: hidden;
            margin-bottom: 1.5rem;
        }

        .progress-fill {
            height: 100%;
            background: var(--accent-blue);
            border-radius: 3px;
        }

        .btn-fork {
            background: var(--text-primary);
            color: white;
            border: none;
            border-radius: 20px;
            padding: 0.6rem 1rem;
            font-size: 0.9rem;
            font-weight: 600;
            width: 100%;
            transition: all 0.2s;
            margin-top: auto;
        }

        .btn-fork:hover {
            background: #000;
            transform: scale(1.02);
        }

        /* Live Run (Vertical List) */
        .sprint-row {
            background: var(--bg-card);
            border-radius: 16px;
            padding: 1.2rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 10px rgba(0,0,0,0.02);
            border: 1px solid rgba(0,0,0,0.02);
            transition: all 0.2s;
        }

        .sprint-row:hover {
            background: #FAFAFA;
        }

        .sprint-info {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .sprint-status-beacon {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            box-shadow: 0 0 0 4px rgba(52, 199, 89, 0.1);
        }

        .beacon-stable { background-color: var(--accent-green); }
        .beacon-bug { background-color: var(--accent-orange); box-shadow: 0 0 0 4px rgba(255, 149, 0, 0.1); }
        .beacon-critical { background-color: var(--accent-red); box-shadow: 0 0 0 4px rgba(255, 59, 48, 0.1); }

        .sprint-details h4 {
            font-size: 1rem;
            font-weight: 600;
            margin: 0;
            color: var(--text-primary);
        }

        .sprint-meta {
            font-size: 0.85rem;
            color: var(--text-secondary);
            margin-top: 0.2rem;
        }

        .sprint-actions {
            display: flex;
            gap: 0.8rem;
        }

        .btn-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 1px solid var(--border-color);
            background: transparent;
            color: var(--text-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
        }

        .btn-icon:hover {
            background: #F2F2F7;
            color: var(--text-primary);
        }

        .btn-panic {
            color: var(--accent-red);
            border-color: rgba(255, 59, 48, 0.3);
        }

        .btn-panic:hover {
            background: rgba(255, 59, 48, 0.1);
            color: var(--accent-red);
        }

        /* Dark Mode Toggle (Simple implementation) */
        body.dark-mode {
            --bg-body: #000000;
            --bg-card: #1C1C1E;
            --text-primary: #FFFFFF;
            --text-secondary: #98989D;
            --border-color: #38383A;
        }
        
        body.dark-mode .ops-header {
            background: rgba(28, 28, 30, 0.8);
        }
        
        body.dark-mode .idea-kernel {
            background: #2C2C2E;
        }
        
        body.dark-mode .progress-bar-custom {
            background: #3A3A3C;
        }
        
        body.dark-mode .btn-fork {
            background: #FFFFFF;
            color: #000000;
        }
        
        body.dark-mode .sprint-row:hover {
            background: #2C2C2E;
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

    <!-- Ops Header -->
    <div class="ops-header">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-4">
                    <h5 class="m-0 fw-bold">NÚCLEO BETA <span class="badge bg-dark ms-2" style="font-size: 0.6rem; vertical-align: middle;">v2.0</span></h5>
                    <div class="d-none d-md-flex gap-4 border-start ps-4 border-secondary">
                        <div class="metric-item">
                            <span class="status-dot"></span>
                            Sistema: <span class="metric-value">Nominal</span>
                        </div>
                        <div class="metric-item">
                            <i class="bi bi-lightbulb"></i>
                            Ideas: <span class="metric-value">12</span>
                        </div>
                        <div class="metric-item">
                            <i class="bi bi-activity"></i>
                            Sprints: <span class="metric-value">3</span>
                        </div>
                    </div>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill px-3" onclick="document.body.classList.toggle('dark-mode')">
                        <i class="bi bi-moon-stars"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        
        <!-- SECTION A: LAUNCHPAD -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="section-title-ops">
                    <i class="bi bi-rocket-takeoff"></i> A. Launchpad (Idea Backlog)
                </div>
                
                <div class="launchpad-container">
                    
                    <!-- Card 1 -->
                    <div class="idea-card">
                        <div class="idea-source">IES Alcántara</div>
                        <h3 class="idea-title">Sintaxis Inversa + ChatGPT</h3>
                        <div class="idea-kernel">Kernel: v1.0.2</div>
                        <div class="progress-label">
                            <span>Interés de la red</span>
                            <span>85%</span>
                        </div>
                        <div class="progress-bar-custom">
                            <div class="progress-fill" style="width: 85%"></div>
                        </div>
                        <div class="mb-3 text-secondary small">
                            <i class="bi bi-people me-1"></i> Waiting for Partners
                        </div>
                        <button class="btn btn-fork">
                            <i class="bi bi-git me-2"></i>Fork this Project
                        </button>
                    </div>

                    <!-- Card 2 -->
                    <div class="idea-card">
                        <div class="idea-source">Colegio Litterator</div>
                        <h3 class="idea-title">Podcast S2S QA Ring</h3>
                        <div class="idea-kernel">Kernel: v0.9.5</div>
                        <div class="progress-label">
                            <span>Interés de la red</span>
                            <span>60%</span>
                        </div>
                        <div class="progress-bar-custom">
                            <div class="progress-fill" style="width: 60%"></div>
                        </div>
                        <div class="mb-3 text-secondary small">
                            <i class="bi bi-people me-1"></i> 2 Partners Joined
                        </div>
                        <button class="btn btn-fork">
                            <i class="bi bi-git me-2"></i>Fork this Project
                        </button>
                    </div>

                    <!-- Card 3 -->
                    <div class="idea-card">
                        <div class="idea-source">IES Floridablanca</div>
                        <h3 class="idea-title">VR History Walk</h3>
                        <div class="idea-kernel">Kernel: v1.1.0</div>
                        <div class="progress-label">
                            <span>Interés de la red</span>
                            <span>45%</span>
                        </div>
                        <div class="progress-bar-custom">
                            <div class="progress-fill" style="width: 45%"></div>
                        </div>
                        <div class="mb-3 text-secondary small">
                            <i class="bi bi-people me-1"></i> Waiting for Partners
                        </div>
                        <button class="btn btn-fork">
                            <i class="bi bi-git me-2"></i>Fork this Project
                        </button>
                    </div>

                    <!-- Card 4 -->
                    <div class="idea-card">
                        <div class="idea-source">IES Cañada</div>
                        <h3 class="idea-title">Maths & Art AI</h3>
                        <div class="idea-kernel">Kernel: v0.8.0</div>
                        <div class="progress-label">
                            <span>Interés de la red</span>
                            <span>30%</span>
                        </div>
                        <div class="progress-bar-custom">
                            <div class="progress-fill" style="width: 30%"></div>
                        </div>
                        <div class="mb-3 text-secondary small">
                            <i class="bi bi-people me-1"></i> Waiting for Partners
                        </div>
                        <button class="btn btn-fork">
                            <i class="bi bi-git me-2"></i>Fork this Project
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <!-- SECTION B: LIVE RUN -->
        <div class="row">
            <div class="col-12">
                <div class="section-title-ops">
                    <i class="bi bi-heart-pulse"></i> B. Live Run (Active Sprints)
                </div>

                <!-- Sprint 1 -->
                <div class="sprint-row">
                    <div class="sprint-info">
                        <div class="sprint-status-beacon beacon-stable" title="Stable"></div>
                        <div class="sprint-details">
                            <h4>Sprint #1: IA en Lengua (Escritura Creativa)</h4>
                            <div class="sprint-meta">
                                <span class="me-3"><i class="bi bi-calendar2-week me-1"></i> Semana 2/3: Fase de Creación</span>
                                <span><i class="bi bi-building me-1"></i> 3 Centros activos</span>
                            </div>
                        </div>
                    </div>
                    <div class="sprint-actions">
                        <button class="btn-icon" title="Ver Telemetría"><i class="bi bi-graph-up"></i></button>
                        <button class="btn-icon" title="Ver Código"><i class="bi bi-code-slash"></i></button>
                        <button class="btn-icon btn-panic" title="Reportar Glitch"><i class="bi bi-exclamation-triangle"></i></button>
                    </div>
                </div>

                <!-- Sprint 2 -->
                <div class="sprint-row">
                    <div class="sprint-info">
                        <div class="sprint-status-beacon beacon-bug" title="Bug Report"></div>
                        <div class="sprint-details">
                            <h4>Sprint #2: Matemáticas Visuales (Geogebra)</h4>
                            <div class="sprint-meta">
                                <span class="me-3"><i class="bi bi-calendar2-week me-1"></i> Semana 1/4: Onboarding</span>
                                <span class="text-warning"><i class="bi bi-bug me-1"></i> Rúbrica compleja</span>
                            </div>
                        </div>
                    </div>
                    <div class="sprint-actions">
                        <button class="btn-icon" title="Ver Telemetría"><i class="bi bi-graph-up"></i></button>
                        <button class="btn-icon" title="Ver Código"><i class="bi bi-code-slash"></i></button>
                        <button class="btn-icon btn-panic" title="Reportar Glitch"><i class="bi bi-exclamation-triangle"></i></button>
                    </div>
                </div>

                <!-- Sprint 3 -->
                <div class="sprint-row">
                    <div class="sprint-info">
                        <div class="sprint-status-beacon beacon-stable" title="Stable"></div>
                        <div class="sprint-details">
                            <h4>Sprint #3: Radio Escolar Intercentros</h4>
                            <div class="sprint-meta">
                                <span class="me-3"><i class="bi bi-calendar2-week me-1"></i> Semana 4/4: Publicación</span>
                                <span><i class="bi bi-building me-1"></i> 5 Centros activos</span>
                            </div>
                        </div>
                    </div>
                    <div class="sprint-actions">
                        <button class="btn-icon" title="Ver Telemetría"><i class="bi bi-graph-up"></i></button>
                        <button class="btn-icon" title="Ver Código"><i class="bi bi-code-slash"></i></button>
                        <button class="btn-icon btn-panic" title="Reportar Glitch"><i class="bi bi-exclamation-triangle"></i></button>
                    </div>
                </div>

            </div>
        </div>

        <!-- SECTION C: MY WORKSHOPS -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="section-title-ops">
                    <i class="bi bi-calendar-check"></i> C. My Workshops (Portfolio)
                </div>
            </div>

            <!-- Column 1: Proposed (Hosted) -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h5 class="mb-3 text-secondary small fw-bold text-uppercase">Propuestos (Host)</h5>
                
                <!-- Card 1 -->
                <div class="sprint-row p-3">
                    <div class="d-flex gap-3 w-100">
                        <img src="https://images.unsplash.com/photo-1635070041078-e363dbe005cb?auto=format&fit=crop&w=100&q=80" class="rounded-3" style="width: 60px; height: 60px; object-fit: cover;" alt="Matemáticas con IA">
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start">
                                <h6 class="mb-1 fw-bold">Matemáticas con IA</h6>
                                <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Aprobado</span>
                            </div>
                            <div class="small text-secondary mb-2">
                                <i class="bi bi-calendar-event me-1"></i> 13 Enero 2026
                                <span class="mx-2">|</span>
                                <i class="bi bi-people me-1"></i> 40 plazas
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-secondary py-0 px-2" style="font-size: 0.75rem;">Editar</button>
                                <button class="btn btn-sm btn-outline-secondary py-0 px-2" style="font-size: 0.75rem;">Lista</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="sprint-row p-3">
                    <div class="d-flex gap-3 w-100">
                        <img src="https://images.unsplash.com/photo-1590602847861-f357a9332bbc?auto=format&fit=crop&w=100&q=80" class="rounded-3" style="width: 60px; height: 60px; object-fit: cover;" alt="Doblaje">
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start">
                                <h6 class="mb-1 fw-bold">Doblaje</h6>
                                <span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">Revisión</span>
                            </div>
                            <div class="small text-secondary mb-2">
                                <i class="bi bi-calendar-event me-1"></i> 14 Enero 2026
                                <span class="mx-2">|</span>
                                <i class="bi bi-people me-1"></i> 22 plazas
                            </div>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-outline-secondary py-0 px-2" style="font-size: 0.75rem;">Editar</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Column 2: Participating (Joined) -->
            <div class="col-md-6">
                <h5 class="mb-3 text-secondary small fw-bold text-uppercase">Inscrito (Guest)</h5>

                <!-- Card 3 -->
                <div class="sprint-row p-3">
                    <div class="d-flex gap-3 w-100">
                        <img src="https://images.unsplash.com/photo-1617396900799-f4ec2b43c7ae?q=80&w=1740&auto=format&fit=crop" class="rounded-3" style="width: 60px; height: 60px; object-fit: cover;" alt="Tinkercad">
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start">
                                <h6 class="mb-1 fw-bold">Tinkercad</h6>
                                <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25">Confirmado</span>
                            </div>
                            <div class="small text-secondary">
                                <i class="bi bi-calendar-event me-1"></i> 27 Enero 2026
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="sprint-row p-3">
                    <div class="d-flex gap-3 w-100">
                        <img src="https://images.unsplash.com/photo-1653158861306-e5b3804f6115?q=80&w=1740&auto=format&fit=crop" class="rounded-3" style="width: 60px; height: 60px; object-fit: cover;" alt="Realidad Virtual">
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start">
                                <h6 class="mb-1 fw-bold">Realidad Virtual</h6>
                                <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary border-opacity-25">Lista Espera</span>
                            </div>
                            <div class="small text-secondary">
                                <i class="bi bi-calendar-event me-1"></i> 19 Febrero 2026
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="sprint-row p-3">
                    <div class="d-flex gap-3 w-100">
                        <img src="https://images.unsplash.com/photo-1589903308904-1010c2294adc?auto=format&fit=crop&w=600&q=80" class="rounded-3" style="width: 60px; height: 60px; object-fit: cover;" alt="Podcast">
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start">
                                <h6 class="mb-1 fw-bold">Podcast</h6>
                                <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25">Confirmado</span>
                            </div>
                            <div class="small text-secondary">
                                <i class="bi bi-calendar-event me-1"></i> 3 Marzo 2026
                            </div>
                        </div>
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
