<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Talleres · Conecta 37</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Talleres juveniles para estudiantes de Conecta 37" name="description">

    <!-- Favicon -->
    <link href="../../../img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

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
            --c37-blue: #0069A8;
            --c37-blue-soft: #4FA4D8;
            --c37-orange: #FD4305;
            --c37-orange-soft: #FF8A4A;
            --c37-mint: #00C9A7;
            --c37-purple: #7F5AF0;
            --c37-dark: #111827;

            --card-bg: #ffffff;
            --text-dark: #2d3436;
            --text-light: #636e72;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f8f9fa;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Outfit', sans-serif;
        }

        .hero-talleres {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 6rem 0;
        }

        .workshop-card {
            background: var(--card-bg);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            border: none;
            position: relative;
        }

        .workshop-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .workshop-header {
            padding: 1.5rem;
            color: white;
            position: relative;
        }

        .bg-gradient-1 {
            background-color: var(--c37-blue);
        }

        .bg-gradient-2 {
            background-color: var(--c37-orange);
        }

        .bg-gradient-3 {
            background-color: var(--c37-purple);
        }

        .bg-gradient-4 {
            background-color: var(--c37-orange);
        }

        .bg-gradient-5 {
            background-color: var(--c37-mint);
        }

        .bg-gradient-6 {
            background-color: var(--c37-blue);
        }

        .bg-gradient-7 {
            background-color: var(--c37-dark);
        }

        .bg-gradient-8 {
            background-color: var(--c37-dark);
        }

        .bg-gradient-9 {
            background-color: var(--c37-purple);
        }

        .bg-gradient-10 {
            background-color: var(--c37-blue-soft);
        }

        .workshop-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            line-height: 1.2;
        }

        .workshop-center {
            font-size: 0.9rem;
            opacity: 0.9;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .workshop-body {
            padding: 1.5rem;
        }

        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 0.8rem;
            color: var(--text-light);
            font-size: 0.95rem;
        }

        .info-item i {
            width: 24px;
            margin-right: 10px;
            color: #015183;
            text-align: center;
        }

        .workshop-desc {
            margin-top: 1rem;
            margin-bottom: 1.5rem;
            color: var(--text-dark);
            line-height: 1.6;
            font-size: 0.95rem;
        }

        .workshop-footer {
            padding: 1.5rem;
            background-color: #f8f9fa;
            border-top: 1px solid #eee;
            display: flex;
            gap: 10px;
        }

        .btn-register {
            flex: 2;
            background-color: #015183;
            color: white;
            border: none;
            padding: 0.6rem 1rem;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-register:hover {
            background-color: #0a558c;
            transform: scale(1.02);
            color: white;
        }

        .btn-info {
            flex: 1;
            background-color: white;
            color: #015183;
            border: 2px solid #015183;
            padding: 0.6rem 1rem;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-info:hover {
            background-color: #e6f2ff;
            color: #015183;
        }

        .badge-mode {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .workshop-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 1.2rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Filter Styles */
        .filter-container {
            margin-bottom: 2rem;
        }
        
        .filter-btn {
            margin: 0.25rem;
            border-radius: 20px;
            padding: 0.5rem 1.5rem;
            border: 2px solid var(--c37-blue);
            background: transparent;
            color: var(--c37-blue);
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .filter-btn:hover, .filter-btn.active {
            background: var(--c37-blue);
            color: white;
        }

        .form-check-input:checked {
            background-color: var(--c37-blue);
            border-color: var(--c37-blue);
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

    <div class="container-fluid hero-talleres wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-3 text-white mb-3 fw-bold">Talleres Conecta 37</h1>
            <p class="lead text-white mb-4 fs-4">Sin profes, solo cracks. Talleres diseñados e impartidos por
                estudiantes.</p>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            
            <!-- Filters -->
            <div class="row mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-12 text-center">
                    <div class="filter-container">
                        <button class="btn filter-btn active" onclick="filterProjects('all')">Todos</button>
                        <button class="btn filter-btn" onclick="filterProjects('DGMakers')">DGMakers</button>
                        <button class="btn filter-btn" onclick="filterProjects('GDPatrimonio')">GDPatrimonio</button>
                        <button class="btn filter-btn" onclick="filterProjects('Conecta37')">Conecta37</button>
                        <button class="btn filter-btn" onclick="filterProjects('4Inclusion')">4Inclusion</button>
                    </div>
                    <div class="form-check form-switch d-inline-block">
                        <input class="form-check-input" type="checkbox" id="hidePastEvents" onchange="togglePastEvents()">
                        <label class="form-check-label" for="hidePastEvents">Ocultar eventos pasados</label>
                    </div>
                </div>
            </div>

            <div class="row g-4" id="workshops-container">

                <?php
                // Definición de talleres
                $talleres = [
                    [
                        'title' => 'Matemáticas con IA',
                        'center' => 'IES Alcántara',
                        'mode' => 'Online',
                        'image' => 'https://images.unsplash.com/photo-1635070041078-e363dbe005cb?auto=format&fit=crop&w=600&q=80',
                        'date' => '2026-01-13',
                        'display_date' => '13 Enero 2026',
                        'time' => '10:00 - 11:30',
                        'capacity' => '40 plazas',
                        'desc' => 'Descubre cómo la Inteligencia Artificial puede ayudarte a visualizar y resolver problemas matemáticos complejos de forma intuitiva y sorprendente.',
                        'header_class' => 'bg-gradient-9',
                        'projects' => ['DGMakers','Conecta37']
                    ],
                    [
                        'title' => 'Doblaje',
                        'center' => 'IES Floridablanca',
                        'mode' => 'Presencial',
                        'image' => 'https://images.unsplash.com/photo-1590602847861-f357a9332bbc?auto=format&fit=crop&w=600&q=80',
                        'date' => '2026-01-29', // Asumiendo fecha exacta basada en orden original o placeholder
                        'display_date' => '29 Enero 2026',
                        'time' => '11:15 - 13:15',
                        'capacity' => '22 plazas',
                        'desc' => 'Pon voz a tus personajes favoritos de cine y animación. Aprende técnicas de interpretación vocal, sincronización y grabación en estudio profesional.',
                        'header_class' => 'bg-gradient-2',
                        'projects' => ['DGMakers', 'GDPatrimonio', 'Conecta37', '4Inclusion']
                    ],
                    [
                        'title' => 'Tinkercad',
                        'center' => 'IES Alcántara',
                        'mode' => 'Presencial',
                        'image' => 'https://images.unsplash.com/photo-1617396900799-f4ec2b43c7ae?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                        'date' => '2026-01-27',
                        'display_date' => '27 Enero 2026',
                        'time' => '10:00 - 12:00',
                        'capacity' => '20 plazas',
                        'desc' => 'Aprende a diseñar objetos en 3D desde cero. Crea tus propios llaveros, figuras y piezas mecánicas listas para imprimir. ¡Tu imaginación es el límite!',
                        'header_class' => 'bg-gradient-1',
                        'projects' => ['DGMakers', 'GDPatrimonio', 'Conecta37', '4Inclusion']
                    ],
                    [
                        'title' => 'Escaneado 3D iPad',
                        'center' => 'IES Cañada',
                        'mode' => 'Online',
                        'image' => 'https://images.unsplash.com/photo-1612888077748-00e3a1bd7aad?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                        'date' => '2026-01-23',
                        'display_date' => '23 Enero 2026',
                        'time' => '10:00 - 11:00',
                        'capacity' => '25 plazas',
                        'desc' => 'Digitaliza el mundo real. Utiliza la tecnología LiDAR del iPad para escanear objetos y entornos, y llévalos a tus proyectos de realidad aumentada.',
                        'header_class' => 'bg-gradient-3',
                        'projects' => ['DGMakers', 'GDPatrimonio', 'Conecta37', '4Inclusion']
                    ],
                    [
                        'title' => 'Lengua con IA',
                        'center' => 'IES Alcántara',
                        'mode' => 'Online',
                        'image' => 'https://images.unsplash.com/photo-1455390582262-044cdead277a?auto=format&fit=crop&w=600&q=80',
                        'date' => '2026-01-14',
                        'display_date' => '14 Enero 2026',
                        'time' => '11:15 - 12:45',
                        'capacity' => '40 plazas',
                        'desc' => 'Potencia tu creatividad literaria. Utiliza herramientas de IA para generar ideas, corregir estilo y explorar nuevas formas de narrativa digital.',
                        'header_class' => 'bg-gradient-10',
                        'projects' => ['DGMakers','Conecta37']
                    ],
                    [
                        'title' => 'Fotogrametría',
                        'center' => 'IES Floridablanca',
                        'mode' => 'Presencial',
                        'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80',
                        'date' => '2026-02-16',
                        'display_date' => '16 Febrero 2026',
                        'time' => '10:00 - 12:00',
                        'capacity' => '12 plazas',
                        'desc' => 'Crea modelos 3D hiperrealistas a partir de fotografías. Aprende el flujo de trabajo completo: toma de fotos, procesado y optimización de modelos.',
                        'header_class' => 'bg-gradient-4',
                        'projects' => ['DGMakers', 'GDPatrimonio', 'Conecta37', '4Inclusion']
                    ],
                    [
                        'title' => 'Realidad Virtual',
                        'center' => 'IES Floridablanca',
                        'mode' => 'Presencial',
                        'image' => 'https://images.unsplash.com/photo-1653158861306-e5b3804f6115?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                        'date' => '2026-02-19',
                        'display_date' => '19 Febrero 2026',
                        'time' => '11:15 - 13:15',
                        'capacity' => '10 plazas',
                        'desc' => 'Sumérgete en nuevos mundos. Experimenta con gafas VR de última generación y aprende los principios básicos para crear tus propias experiencias inmersivas.',
                        'header_class' => 'bg-gradient-5',
                        'projects' => ['DGMakers', 'GDPatrimonio', 'Conecta37', '4Inclusion']
                    ],
                    [
                        'title' => 'Minecraft Education',
                        'center' => 'IES Alcántara',
                        'mode' => 'Online',
                        'image' => 'https://images.unsplash.com/photo-1524685794168-52985e79c1f8?q=80&w=1548&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                        'date' => '2026-02-24',
                        'display_date' => '24 Febrero 2026',
                        'time' => '10:00 - 12:00',
                        'capacity' => '30 plazas',
                        'desc' => 'Construye, programa y colabora. Utiliza Minecraft Education Edition para resolver retos de ingeniería y crear mundos interactivos mediante código.',
                        'header_class' => 'bg-gradient-6',
                        'projects' => ['DGMakers', 'GDPatrimonio', 'Conecta37', '4Inclusion']
                    ],
                    [
                        'title' => 'Podcast',
                        'center' => 'IES Alcántara',
                        'mode' => 'Presencial',
                        'image' => 'https://images.unsplash.com/photo-1589903308904-1010c2294adc?auto=format&fit=crop&w=600&q=80',
                        'date' => '2026-03-03',
                        'display_date' => '3 Marzo 2026',
                        'time' => '11:15 - 13:15',
                        'capacity' => '15 plazas',
                        'desc' => 'Tu voz, tu historia. Aprende a guionizar, grabar y editar podcasts profesionales. Descubre los secretos del storytelling sonoro.',
                        'header_class' => 'bg-gradient-7',
                        'projects' => ['DGMakers', 'GDPatrimonio', 'Conecta37', '4Inclusion']
                    ],
                    [
                        'title' => 'Radio',
                        'center' => 'CEPEE Eusebio',
                        'mode' => 'Presencial',
                        'image' => 'https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?auto=format&fit=crop&w=600&q=80',
                        'date' => '2026-03-10',
                        'display_date' => '10 Marzo 2026',
                        'time' => '10:00 - 12:00',
                        'capacity' => '12 plazas',
                        'desc' => '¡En el aire! Vive la experiencia de realizar un programa de radio en directo. Control técnico, locución y producción en un estudio real.',
                        'header_class' => 'bg-gradient-8',
                        'projects' => ['DGMakers', 'GDPatrimonio', 'Conecta37', '4Inclusion']
                    ]
                ];

                // Ordenar por fecha
                usort($talleres, function ($a, $b) {
                    return strtotime($a['date']) - strtotime($b['date']);
                });

                foreach ($talleres as $taller):
                    $projectsJson = json_encode($taller['projects']);
                ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp workshop-item" 
                         data-wow-delay="0.1s" 
                         data-projects='<?php echo $projectsJson; ?>'
                         data-date="<?php echo $taller['date']; ?>">
                        <div class="workshop-card">
                            <div class="workshop-header <?php echo $taller['header_class']; ?>">
                                <span class="badge-mode"><?php echo $taller['mode']; ?></span>
                                <h3 class="workshop-title"><?php echo $taller['title']; ?></h3>
                                <div class="workshop-center"><?php echo $taller['center']; ?></div>
                            </div>
                            <div class="workshop-body">
                                <img src="<?php echo $taller['image']; ?>" class="workshop-img" alt="<?php echo $taller['title']; ?>">
                                <div class="info-item"><i class="far fa-calendar-alt"></i> <?php echo $taller['display_date']; ?></div>
                                <div class="info-item"><i class="far fa-clock"></i> <?php echo $taller['time']; ?></div>
                                <div class="info-item"><i class="fas fa-users"></i> <?php echo $taller['capacity']; ?></div>
                                <p class="workshop-desc"><?php echo $taller['desc']; ?></p>
                            </div>
                            <div class="workshop-footer">
                                <a href="https://forms.gle/D2AvTgLfYFk65oGZ8" class="btn btn-register text-center" target="_blank">Inscribirse</a>
                                <a href="#" class="btn btn-info text-center"><i class="fas fa-info-circle"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

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

    <script>
        let currentProject = 'all';
        let hidePast = false;

        // Check for URL parameter
        const urlParams = new URLSearchParams(window.location.search);
        const projectParam = urlParams.get('project');
        if (projectParam) {
            currentProject = projectParam;
        }

        // Initialize on load
        document.addEventListener('DOMContentLoaded', () => {
             // Set active button
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.classList.remove('active');
                if (btn.textContent.trim() === (currentProject === 'all' ? 'Todos' : currentProject)) {
                    btn.classList.add('active');
                }
            });
            applyFilters();
        });

        function filterProjects(project) {
            currentProject = project;
            
            // Update active button state
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.classList.remove('active');
                if (btn.textContent.trim() === (project === 'all' ? 'Todos' : project)) {
                    btn.classList.add('active');
                }
            });

            applyFilters();
        }

        function togglePastEvents() {
            hidePast = document.getElementById('hidePastEvents').checked;
            applyFilters();
        }

        function applyFilters() {
            const items = document.querySelectorAll('.workshop-item');
            const today = new Date();
            today.setHours(0, 0, 0, 0);

            items.forEach(item => {
                const projects = JSON.parse(item.getAttribute('data-projects'));
                const dateStr = item.getAttribute('data-date');
                const itemDate = new Date(dateStr);
                
                let show = true;

                // Project filter
                if (currentProject !== 'all' && !projects.includes(currentProject)) {
                    show = false;
                }

                // Past events filter
                if (hidePast && itemDate < today) {
                    show = false;
                }

                if (show) {
                    item.style.display = 'block';
                    // Re-trigger animation if needed, or just let it be
                    item.classList.add('wow', 'fadeInUp');
                } else {
                    item.style.display = 'none';
                }
            });
        }
    </script>
</body>

</html>