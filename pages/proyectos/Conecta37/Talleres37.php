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
            <div class="row g-4">

                <!-- 1. Matemáticas con IA (13 Enero) -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="workshop-card">
                        <div class="workshop-header bg-gradient-9">
                            <span class="badge-mode">Online</span>
                            <h3 class="workshop-title">Matemáticas con IA</h3>
                            <div class="workshop-center">IES Alcántara</div>
                        </div>
                        <div class="workshop-body">
                            <img src="https://images.unsplash.com/photo-1635070041078-e363dbe005cb?auto=format&fit=crop&w=600&q=80"
                                class="workshop-img" alt="Matemáticas con IA">
                            <div class="info-item"><i class="far fa-calendar-alt"></i> 13 Enero 2026</div>
                            <div class="info-item"><i class="far fa-clock"></i> 16:00 - 17:30</div>
                            <div class="info-item"><i class="fas fa-users"></i> 40 plazas</div>
                            <p class="workshop-desc">Descubre cómo la Inteligencia Artificial puede ayudarte a
                                visualizar y resolver problemas matemáticos complejos de forma intuitiva y sorprendente.
                            </p>
                        </div>
                        <div class="workshop-footer">
                            <a href="https://forms.gle/D2AvTgLfYFk65oGZ8" class="btn btn-register text-center"
                                target="_blank">Inscribirse</a>
                            <a href="#" class="btn btn-info text-center"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 2. Doblaje (14 Enero) -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="workshop-card">
                        <div class="workshop-header bg-gradient-2">
                            <span class="badge-mode">Presencial</span>
                            <h3 class="workshop-title">Doblaje</h3>
                            <div class="workshop-center">IES Floridablanca</div>
                        </div>
                        <div class="workshop-body">
                            <img src="https://images.unsplash.com/photo-1590602847861-f357a9332bbc?auto=format&fit=crop&w=600&q=80"
                                class="workshop-img" alt="Doblaje">
                            <div class="info-item"><i class="far fa-calendar-alt"></i> 14 Enero 2026</div>
                            <div class="info-item"><i class="far fa-clock"></i> 17:00 - 19:00</div>
                            <div class="info-item"><i class="fas fa-users"></i> 15 plazas</div>
                            <p class="workshop-desc">Pon voz a tus personajes favoritos de cine y animación. Aprende
                                técnicas de interpretación vocal, sincronización y grabación en estudio profesional.</p>
                        </div>
                        <div class="workshop-footer">
                            <a href="https://forms.gle/D2AvTgLfYFk65oGZ8" class="btn btn-register text-center"
                                target="_blank">Inscribirse</a>
                            <a href="#" class="btn btn-info text-center"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 3. Tinkercad (15 Enero) -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="workshop-card">
                        <div class="workshop-header bg-gradient-1">
                            <span class="badge-mode">Presencial</span>
                            <h3 class="workshop-title">Tinkercad</h3>
                            <div class="workshop-center">IES Alcántara</div>
                        </div>
                        <div class="workshop-body">
                            <img src="https://images.unsplash.com/photo-1631541909061-71e349d1f203?auto=format&fit=crop&w=600&q=80"
                                class="workshop-img" alt="Tinkercad">
                            <div class="info-item"><i class="far fa-calendar-alt"></i> 15 Enero 2026</div>
                            <div class="info-item"><i class="far fa-clock"></i> 16:30 - 18:30</div>
                            <div class="info-item"><i class="fas fa-users"></i> 20 plazas</div>
                            <p class="workshop-desc">Aprende a diseñar objetos en 3D desde cero. Crea tus propios
                                llaveros, figuras y piezas mecánicas listas para imprimir. ¡Tu imaginación es el límite!
                            </p>
                        </div>
                        <div class="workshop-footer">
                            <a href="https://forms.gle/D2AvTgLfYFk65oGZ8" class="btn btn-register text-center"
                                target="_blank">Inscribirse</a>
                            <a href="#" class="btn btn-info text-center"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 4. Escaneado 3D iPad (19 Enero) -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="workshop-card">
                        <div class="workshop-header bg-gradient-3">
                            <span class="badge-mode">Online</span>
                            <h3 class="workshop-title">Escaneado 3D iPad</h3>
                            <div class="workshop-center">IES Cañada</div>
                        </div>
                        <div class="workshop-body">
                            <img src="https://images.unsplash.com/photo-1544256718-3bcf237f3974?auto=format&fit=crop&w=600&q=80"
                                class="workshop-img" alt="Escaneado 3D iPad">
                            <div class="info-item"><i class="far fa-calendar-alt"></i> 19 Enero 2026</div>
                            <div class="info-item"><i class="far fa-clock"></i> 16:00 - 18:00</div>
                            <div class="info-item"><i class="fas fa-users"></i> 25 plazas</div>
                            <p class="workshop-desc">Digitaliza el mundo real. Utiliza la tecnología LiDAR del iPad para
                                escanear objetos y entornos, y llévalos a tus proyectos de realidad aumentada.</p>
                        </div>
                        <div class="workshop-footer">
                            <a href="https://forms.gle/D2AvTgLfYFk65oGZ8" class="btn btn-register text-center"
                                target="_blank">Inscribirse</a>
                            <a href="#" class="btn btn-info text-center"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 5. Lengua con IA (20 Enero) -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="workshop-card">
                        <div class="workshop-header bg-gradient-10">
                            <span class="badge-mode">Online</span>
                            <h3 class="workshop-title">Lengua con IA</h3>
                            <div class="workshop-center">IES Alcántara</div>
                        </div>
                        <div class="workshop-body">
                            <img src="https://images.unsplash.com/photo-1455390582262-044cdead277a?auto=format&fit=crop&w=600&q=80"
                                class="workshop-img" alt="Lengua con IA">
                            <div class="info-item"><i class="far fa-calendar-alt"></i> 20 Enero 2026</div>
                            <div class="info-item"><i class="far fa-clock"></i> 16:00 - 17:30</div>
                            <div class="info-item"><i class="fas fa-users"></i> 40 plazas</div>
                            <p class="workshop-desc">Potencia tu creatividad literaria. Utiliza herramientas de IA para
                                generar ideas, corregir estilo y explorar nuevas formas de narrativa digital.</p>
                        </div>
                        <div class="workshop-footer">
                            <a href="https://forms.gle/D2AvTgLfYFk65oGZ8" class="btn btn-register text-center"
                                target="_blank">Inscribirse</a>
                            <a href="#" class="btn btn-info text-center"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 6. Fotogrametría (21 Enero) -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="workshop-card">
                        <div class="workshop-header bg-gradient-4">
                            <span class="badge-mode">Presencial</span>
                            <h3 class="workshop-title">Fotogrametría</h3>
                            <div class="workshop-center">IES Floridablanca</div>
                        </div>
                        <div class="workshop-body">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80"
                                class="workshop-img" alt="Fotogrametría">
                            <div class="info-item"><i class="far fa-calendar-alt"></i> 21 Enero 2026</div>
                            <div class="info-item"><i class="far fa-clock"></i> 16:30 - 18:30</div>
                            <div class="info-item"><i class="fas fa-users"></i> 12 plazas</div>
                            <p class="workshop-desc">Crea modelos 3D hiperrealistas a partir de fotografías. Aprende el
                                flujo de trabajo completo: toma de fotos, procesado y optimización de modelos.</p>
                        </div>
                        <div class="workshop-footer">
                            <a href="https://forms.gle/D2AvTgLfYFk65oGZ8" class="btn btn-register text-center"
                                target="_blank">Inscribirse</a>
                            <a href="#" class="btn btn-info text-center"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 7. Realidad Virtual (26 Enero) -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="workshop-card">
                        <div class="workshop-header bg-gradient-5">
                            <span class="badge-mode">Presencial</span>
                            <h3 class="workshop-title">Realidad Virtual</h3>
                            <div class="workshop-center">IES Floridablanca</div>
                        </div>
                        <div class="workshop-body">
                            <img src="https://images.unsplash.com/photo-1622979135225-d2ba269fb1bd?auto=format&fit=crop&w=600&q=80"
                                class="workshop-img" alt="Realidad Virtual">
                            <div class="info-item"><i class="far fa-calendar-alt"></i> 26 Enero 2026</div>
                            <div class="info-item"><i class="far fa-clock"></i> 17:00 - 19:00</div>
                            <div class="info-item"><i class="fas fa-users"></i> 10 plazas</div>
                            <p class="workshop-desc">Sumérgete en nuevos mundos. Experimenta con gafas VR de última
                                generación y aprende los principios básicos para crear tus propias experiencias
                                inmersivas.</p>
                        </div>
                        <div class="workshop-footer">
                            <a href="https://forms.gle/D2AvTgLfYFk65oGZ8" class="btn btn-register text-center"
                                target="_blank">Inscribirse</a>
                            <a href="#" class="btn btn-info text-center"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 8. Minecraft Education (28 Enero) -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="workshop-card">
                        <div class="workshop-header bg-gradient-6">
                            <span class="badge-mode">Online</span>
                            <h3 class="workshop-title">Minecraft Education</h3>
                            <div class="workshop-center">IES Alcántara</div>
                        </div>
                        <div class="workshop-body">
                            <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&fit=crop&w=600&q=80"
                                class="workshop-img" alt="Minecraft Education">
                            <div class="info-item"><i class="far fa-calendar-alt"></i> 28 Enero 2026</div>
                            <div class="info-item"><i class="far fa-clock"></i> 16:00 - 18:00</div>
                            <div class="info-item"><i class="fas fa-users"></i> 30 plazas</div>
                            <p class="workshop-desc">Construye, programa y colabora. Utiliza Minecraft Education Edition
                                para resolver retos de ingeniería y crear mundos interactivos mediante código.</p>
                        </div>
                        <div class="workshop-footer">
                            <a href="https://forms.gle/D2AvTgLfYFk65oGZ8" class="btn btn-register text-center"
                                target="_blank">Inscribirse</a>
                            <a href="#" class="btn btn-info text-center"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 9. Podcast (2 Febrero) -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="workshop-card">
                        <div class="workshop-header bg-gradient-7">
                            <span class="badge-mode">Presencial</span>
                            <h3 class="workshop-title">Podcast</h3>
                            <div class="workshop-center">IES Alcántara</div>
                        </div>
                        <div class="workshop-body">
                            <img src="https://images.unsplash.com/photo-1589903308904-1010c2294adc?auto=format&fit=crop&w=600&q=80"
                                class="workshop-img" alt="Podcast">
                            <div class="info-item"><i class="far fa-calendar-alt"></i> 2 Febrero 2026</div>
                            <div class="info-item"><i class="far fa-clock"></i> 16:30 - 18:30</div>
                            <div class="info-item"><i class="fas fa-users"></i> 15 plazas</div>
                            <p class="workshop-desc">Tu voz, tu historia. Aprende a guionizar, grabar y editar podcasts
                                profesionales. Descubre los secretos del storytelling sonoro.</p>
                        </div>
                        <div class="workshop-footer">
                            <a href="https://forms.gle/D2AvTgLfYFk65oGZ8" class="btn btn-register text-center"
                                target="_blank">Inscribirse</a>
                            <a href="#" class="btn btn-info text-center"><i class="fas fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>

                <!-- 10. Radio (4 Febrero) -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="workshop-card">
                        <div class="workshop-header bg-gradient-8">
                            <span class="badge-mode">Presencial</span>
                            <h3 class="workshop-title">Radio</h3>
                            <div class="workshop-center">CEPEE Eusebio</div>
                        </div>
                        <div class="workshop-body">
                            <img src="https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?auto=format&fit=crop&w=600&q=80"
                                class="workshop-img" alt="Radio">
                            <div class="info-item"><i class="far fa-calendar-alt"></i> 4 Febrero 2026</div>
                            <div class="info-item"><i class="far fa-clock"></i> 17:00 - 19:00</div>
                            <div class="info-item"><i class="fas fa-users"></i> 12 plazas</div>
                            <p class="workshop-desc">¡En el aire! Vive la experiencia de realizar un programa de radio
                                en directo. Control técnico, locución y producción en un estudio real.</p>
                        </div>
                        <div class="workshop-footer">
                            <a href="https://forms.gle/D2AvTgLfYFk65oGZ8" class="btn btn-register text-center"
                                target="_blank">Inscribirse</a>
                            <a href="#" class="btn btn-info text-center"><i class="fas fa-info-circle"></i></a>
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
</body>

</html>