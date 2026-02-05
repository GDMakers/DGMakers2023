<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Live Hub</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../../img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
    <style>
        #calendario .card-img-top {
            height: 240px;
            object-fit: cover;
            width: 100%;
        }

        #workshopFilters .btn,
        .card .btn {
            border-radius: 7px;
        }

        #workshopFilters .btn.active {
            color: #fff;
            background-color: var(--primary, #0d6efd);
            border-color: var(--primary, #0d6efd);
        }

        .clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .read-more-btn {
            padding: 0;
            font-size: 0.9rem;
            display: block;
            text-align: right;
            margin-top: -30px;
            margin-bottom: 6px;
        }
    </style>
</head>

<body>
	<!-- Menú común -->
	<?php
        $img="../..";                   // ruta a la carpeta de imágenes
        $pages="..";                    // ruta a la carpeta del resto de páginas de la web
        $index="../..";                 // ruta a la carpeta del index.php
        include "../../menu.php";       // incluye el menú común
    ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../../img/4Inclusion/DGM4Inclusion.png" alt="Live Hub 4Inclusion">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Live Hub: Eventos & Conexiones</h1>
                            <h5 class="text-white text-uppercase mb-4 animated zoomIn"><i>Agenda viva para crear, aprender y compartir. Filtra por skill, centro o formato (online/presencial) y súmate en dos clics.</i></h5>
                            <!--a href="Jornadas4Inclusion.php#programa" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Ver programa</a>
                            <a href="Jornadas4Inclusion.php#claves" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Claves del día</a>
                            <a href="4Inclusion.php#livehub" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Live Hub: Eventos & Conexiones</a>
                            <a href="Jornadas4Inclusion.php" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Jornadas 4Inclusion</a-->
                            <h5 class="text-white text-uppercase mb-4 animated zoomIn" style="padding-top: 20px"><i>Alt: Quedadas & Demos · Playground 4Inclusion · Meet-ups DGMakers</i></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row gy-3 my-5 fact-item" id="calendario">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Calendario vivo</h6>
                        <p class="mb-4" style="text-align:justify;">
                            Consulta qué se viene esta semana y apúntate. Todo en <b>hora de Europa/Madrid</b>.
                        </p>
                        <p class="mb-4" style="text-align:justify;">
                            <b>Filtros rápidos</b>: Centro · Skill (3D, Vídeo, TTS, Pictos, Teatro) · Formato · Nivel · Accesibilidad.
                        </p>

                        <div class="d-flex flex-wrap gap-2 mb-4" id="workshopFilters" role="group" aria-label="Filtros de talleres">
                            <button type="button" class="btn btn-outline-primary btn-sm active" data-filter="all">Todos</button>
                            <button type="button" class="btn btn-outline-primary btn-sm" data-filter="next-week">Próxima semana</button>
                            <button type="button" class="btn btn-outline-primary btn-sm" data-filter="next-month">Próximo mes</button>
                            <button type="button" class="btn btn-outline-primary btn-sm" data-filter="next-quarter">Próximo trimestre</button>
                            <button type="button" class="btn btn-outline-primary btn-sm" data-filter="no-date">Por confirmar</button>
                            <button type="button" class="btn btn-outline-primary btn-sm" data-filter="mode-presencial">Presencial</button>
                            <button type="button" class="btn btn-outline-primary btn-sm" data-filter="mode-streaming">Streaming</button>
                            <button type="button" class="btn btn-outline-primary btn-sm" data-filter="center-cee-eusebio">CEE Eusebio</button>
                            <button type="button" class="btn btn-outline-primary btn-sm" data-filter="center-ies-alcantara">IES Alcántara</button>
                        </div>

                        <div class="row g-4" id="workshopGrid">
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop data-date="2025-11-15" data-mode="Presencial" data-center="CEE Eusebio">
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://live.staticflickr.com/65535/54917593635_3a086f783f_b.jpg" class="card-img-top" alt="Mesa de mezclas de radio y micrófonos">
                                    
                                    
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Lumio y Tinkercad</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">CEE Eusebio + IES Alcántara</span>
                                            <span class="badge bg-secondary">Comunicación</span>
                                        </p>
                                        <p class="card-text">Creación de materiales utilizando Lumio y Tinkercard.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> 11/11/2025</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Presencial</li>
                                                <li><i class="bi bi-people me-1"></i> 30 plazas</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                            
                                            <a href="https://drive.google.com/drive/folders/1BG9h_Xh3OOFg-xhgDheGQ54--t9S_G6u?usp=share_link" class="btn btn-sm btn-outline-primary" target="_blank" ><i class="bi bi-file-earmark-text"></i> Galería</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop data-date="2025-11-15" data-mode="Presencial" data-center="CEE Eusebio">
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://live.staticflickr.com/65535/54915095715_c0943d9dcd_b.jpg" class="card-img-top" alt="Mesa de mezclas de radio y micrófonos">
                                    
                                    
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Radio (La Chula Radio)</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">CEE Eusebio</span>
                                            <span class="badge bg-secondary">Comunicación</span>
                                        </p>
                                        <p class="card-text">Producción de una pieza en directo junto al equipo de La Chula Radio: guion, locución y mesa accesible.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> 10/11/2025</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Presencial</li>
                                                <li><i class="bi bi-people me-1"></i> 10 plazas</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                            <!-- <a href="https://drive.google.com/drive/folders/1BG9h_Xh3OOFg-xhgDheGQ54--t9S_G6u?usp=share_link" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#radio15112025" ><i class="bi bi-file-earmark-text"></i> Galería</a> -->
                                            <a href="https://drive.google.com/drive/folders/1-ZIk0xlM0IpRUReEDS8oeenGPj-U8-D7?usp=share_link" class="btn btn-sm btn-outline-primary" target="_blank" rel="noopener noreferrer"><i class="bi bi-file-earmark-text"></i> Galería</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop data-date="2025-11-15">
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://drive.google.com/thumbnail?id=1qXb6DDjMGxDDMyrhk4d0nrvCARo7GROK&sz=w1200" class="card-img-top" alt="Manos preparando bombas de semilla" referrerpolicy="no-referrer">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Elaboración de instrumentos musicales</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">Centro Educaativo SUSARTE - Asociación Talentismo</span>
                                            <span class="badge bg-secondary">Música y arte</span>
                                        </p>
                                        <p class="card-text">
                                            <span class="clamp-3" data-readmore-text>En el marco del proyecto 4Inclusión, se llevaron a cabo talleres de elaboración de instrumentos musicales con material reciclado junto a los usuarios de la Asociación Talentismo, promoviendo la creatividad, la participación activa y la conciencia medioambiental.
La tercera sesión tuvo lugar el 22 de diciembre en el Centro Educativo SUSTRAE, coincidiendo con el Festival de Villancicos, donde los usuarios de Talentismo participaron en la interpretación musical, compartiendo una experiencia inclusiva y enriquecedora.
Desde nuestro centro agradecemos y reconocemos la implicación del alumnado en este proyecto 4Inclusión, que demuestra que la educación, la música y la convivencia son herramientas clave para construir una sociedad más justa, diversa e inclusiva.</span>
                                        </p>
                                        <button type="button" class="btn btn-link text-primary read-more-btn" data-readmore-toggle>Más</button>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> 28/10/2025 · 18/12/2025</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Presencial · Hub Murcia</li>
                                                <li><i class="bi bi-people me-1"></i> 30 plazas</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                            
                                            <a href="https://drive.google.com/drive/folders/1hSkKogOwJjNiUTL7frIKda25ewVDOf98" class="btn btn-sm btn-outline-primary" target="_blank" rel="noopener noreferrer"><i class="bi bi-file-earmark-text"></i> Galería</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://images.unsplash.com/photo-1599580856824-f5224acb901b?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1740" class="card-img-top" alt="Pantalla de edición de audio en ordenador">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Audacity</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Floridablanca</span>
                                            <span class="badge bg-secondary">Audio</span>
                                        </p>
                                        <p class="card-text">Edición sencilla de voz y música con Audacity: limpieza de ruido, cortes precisos y exportación en distintos formatos.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://cdn.palbincdn.com/users/44916/images/CHAPAS-PERSONALIZADAS-50mm-1612570203.jpg" class="card-img-top" alt="Chapas personalizadas y maquinaria de troquelado">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Chapas</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Floridablanca</span>
                                            <span class="badge bg-secondary">Diseño rápido</span>
                                        </p>
                                        <p class="card-text">Diseño e impresión de chapas con mensajes inclusivos y gráficos creados por el propio alumnado.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://images.unsplash.com/photo-1600857544200-b2f666a9a2ec?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1740" class="card-img-top" alt="Jabones artesanales de colores">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Jabón Casero</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Floridablanca</span>
                                            <span class="badge bg-secondary">Maker sostenible</span>
                                        </p>
                                        <p class="card-text">Elaboración de jabones sólidos con ingredientes naturales, moldes personalizados y etiquetado inclusivo.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://images.unsplash.com/photo-1508700929628-666bc8bd84ea?auto=format&fit=crop&w=1200&q=80" class="card-img-top" alt="Grupo de estudiantes en un taller de danza">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Danza</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Floridablanca + CEE Eusebio</span>
                                            <span class="badge bg-secondary">Escénicas</span>
                                        </p>
                                        <p class="card-text">Coreografías inclusivas que integran movimiento, expresión corporal y adaptación a distintos ritmos y apoyos.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://images.unsplash.com/photo-1615286922420-c6b348ffbd62?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1740" class="card-img-top" alt="Cortadora láser trabajando sobre madera">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Corte Láser</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Alcántara</span>
                                            <span class="badge bg-secondary">Fabricación digital</span>
                                        </p>
                                        <p class="card-text">Introducción al corte láser: preparación de archivos, elección de materiales y postprocesado seguro.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?auto=format&fit=crop&w=1200&q=80" class="card-img-top" alt="Materiales artísticos variados sobre una mesa">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Arte</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Alcántara</span>
                                            <span class="badge bg-secondary">Artes plásticas</span>
                                        </p>
                                        <p class="card-text">Exploración de técnicas mixtas para crear obras colaborativas que representen inclusión y diversidad.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://images.unsplash.com/photo-1676238560626-45d35b63b38f?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1548" class="card-img-top" alt="Diseño 3D en pantalla con Tinkercad">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Diseño 3D Tinkercad</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Alcántara</span>
                                            <span class="badge bg-secondary">3D</span>
                                        </p>
                                        <p class="card-text">Modelado accesible en Tinkercad para crear apoyos personalizados listos para imprimir en 3D.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6yXioWr6ZwAeLa3uaTfaYcpJYI9DEBLFFTA&s" class="card-img-top" alt="Profesor usando Lumio en una pizarra digital">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Lumio</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Alcántara</span>
                                            <span class="badge bg-secondary">Tecnología educativa</span>
                                        </p>
                                        <p class="card-text">Sesión práctica con Lumio para crear experiencias interactivas accesibles y listas para usar en el aula.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://images.unsplash.com/photo-1519417836265-a245dc27ef52?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=774" class="card-img-top" alt="Experimento científico con magia y ciencia">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Magia con Ciencia</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Alcántara</span>
                                            <span class="badge bg-secondary">STEAM</span>
                                        </p>
                                        <p class="card-text">Experimentos sorprendentes que combinan física y química para explicar trucos y fenómenos cotidianos.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://images.unsplash.com/photo-1725439507649-dd6345bf9c7f?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1748" class="card-img-top" alt="Mundo de Minecraft en pantalla grande">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Minecraft</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Alcántara</span>
                                            <span class="badge bg-secondary">Videojuegos</span>
                                        </p>
                                        <p class="card-text">Creación de mundos inclusivos en Minecraft para practicar colaboración, resolución de retos y diseño accesible.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=1200&q=80" class="card-img-top" alt="Micrófono preparado para grabar un podcast">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Podcast</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Alcántara</span>
                                            <span class="badge bg-secondary">Comunicación</span>
                                        </p>
                                        <p class="card-text">Producción de episodios breves: guion, grabación multipista y publicación con licencias abiertas.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://images.unsplash.com/photo-1576724196706-3f23f51ea351?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1740" class="card-img-top" alt="Escenario teatral con iluminación colorida">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Teatro</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Alcántara</span>
                                            <span class="badge bg-secondary">Escénicas</span>
                                        </p>
                                        <p class="card-text">Creación de escenas y personajes que reflejan situaciones reales, trabajando expresión, voz y escucha activa.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://images.unsplash.com/photo-1520607162513-77705c0f0d4a?auto=format&fit=crop&w=1200&q=80" class="card-img-top" alt="Pantalla con interfaz de Tinkercad">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Tinkercard</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Alcántara</span>
                                            <span class="badge bg-secondary">3D</span>
                                        </p>
                                        <p class="card-text">Exploración avanzada de Tinkercad con trucos de diseño rápido, duplicación inteligente y preparación para imprimir.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1200&q=80" class="card-img-top" alt="Estudio de doblaje con micrófonos">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Doblaje</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Cañada</span>
                                            <span class="badge bg-secondary">Comunicación</span>
                                        </p>
                                        <p class="card-text">Sincronización voz-imagen, interpretación de personajes y técnicas de registro de audio profesional.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://images.unsplash.com/photo-1527430253228-e93688616381?auto=format&fit=crop&w=1200&q=80" class="card-img-top" alt="Escáner 3D capturando un objeto">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Escaneado 3D</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Cañada</span>
                                            <span class="badge bg-secondary">3D</span>
                                        </p>
                                        <p class="card-text">Uso de escáneres 3D y apps móviles para digitalizar objetos reales y crear réplicas accesibles.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://images.unsplash.com/photo-1523475472560-d2df97ec485c?auto=format&fit=crop&w=1200&q=80" class="card-img-top" alt="Persona utilizando una tableta digital">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Uso de Pantallas a Nivel Básico</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Cañadas</span>
                                            <span class="badge bg-secondary">Competencia digital</span>
                                        </p>
                                        <p class="card-text">Rutinas seguras para comenzar con tablets y portátiles: accesibilidad, control parental y hábitos saludables.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaH7K8Q7SCyl2wMzxKnH42KMwJnxU8Dz3BFA&s" class="card-img-top" alt="Captura de monumento para fotogrametría">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Fotogrametría</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Flori</span>
                                            <span class="badge bg-secondary">3D</span>
                                        </p>
                                        <p class="card-text">Conversión de fotografías en modelos 3D con workflows sencillos para crear recursos táctiles y visuales.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://as2.ftcdn.net/v2/jpg/04/66/56/97/1000_F_466569787_qU46q6s2ymoB2LTyIr3c1i8P5yHTyxbr.jpg" class="card-img-top" alt="Estudiante grabando voces para doblaje">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Doblaje</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Floridablanca</span>
                                            <span class="badge bg-secondary">Comunicación</span>
                                        </p>
                                        <p class="card-text">Prácticas de sincronía labial y creación de voces para animaciones con apoyo de cabinas móviles.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://images.unsplash.com/photo-1576633587382-13ddf37b1fc1?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1744" class="card-img-top" alt="Estudiante usando gafas de realidad virtual">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Gafas R.V.</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Floridablanca</span>
                                            <span class="badge bg-secondary">Realidad virtual</span>
                                        </p>
                                        <p class="card-text">Experiencias inmersivas para comprender entornos, practicar habilidades sociales y explorar profesiones.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://images.unsplash.com/photo-1711559653299-eeb9bb60cfc5?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=814" class="card-img-top" alt="Observación de microorganismos al microscopio">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Microorganismos</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Floridablanca</span>
                                            <span class="badge bg-secondary">Biología</span>
                                        </p>
                                        <p class="card-text">Observación microscópica y cultivos sencillos para descubrir microorganismos y su impacto en el entorno.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://images.unsplash.com/photo-1524578471438-cdd96d68d82c?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1740" class="card-img-top" alt="Manos tocando un teclado adaptado">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">PianoTEA</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Mariano Aroca</span>
                                            <span class="badge bg-secondary">Música</span>
                                        </p>
                                        <p class="card-text">Exploración musical sensorial con teclados adaptados, secuenciadores y dinámicas TEA-friendly.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <img src="https://resizer.glanacion.com/resizer/v2/JZZTPBHJE5GXZDIH2I2UDGDXQI.jpg?auth=fe07428b850ea9e068f0a3236a3960ddb2ea39e0ad3775218fbc54bb37e11885&width=1280&height=853&quality=70&smart=true" class="card-img-top" alt="Profesor y estudiantes trabajando en música adaptada">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title mb-1">Música Adaptada en Aulario del IES</h5>
                                        <p class="mb-2">
                                            <span class="badge bg-primary">IES Marqués de los Vélez</span>
                                            <span class="badge bg-secondary">Música</span>
                                        </p>
                                        <p class="card-text">Recursos musicales accesibles con instrumentos alternativos, apps y rutinas multisensoriales.</p>
                                        <div class="mt-auto pt-2">
                                            <ul class="small mb-3">
                                                <li><i class="bi bi-calendar-event me-1"></i> Próxima fecha · Por confirmar</li>
                                                <li><i class="bi bi-geo-alt me-1"></i> Modalidad · Por confirmar</li>
                                                <li><i class="bi bi-people me-1"></i> Plazas según demanda</li>
                                            </ul>
                                            <a href="#" class="btn btn-sm btn-primary me-2"><i class="bi bi-box-arrow-in-right"></i> Inscripción</a>
                                            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-file-earmark-text"></i> Programa</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                        <div class="row gy-3 my-5 fact-item" id="conecta">
<div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.15s" data-workshop>
                                <div class="card h-100 shadow-sm border-0">
                                    <div class="card-body">
                                        <h5 class="card-title mb-3">Leyenda de tipos de evento</h5>
                                        <ul class="list-unstyled mb-0 small">
                                            <li><strong>Clinic:</strong> práctica guiada.</li>
                                            <li><strong>Office Hours:</strong> ventanas de ayuda de especialistas.</li>
                                            <li><strong>Demo Day:</strong> presentaciones de 90 s + feedback.</li>
                                            <li><strong>Match:</strong> speed networking de skills.</li>
                                            <li><strong>Mentoría:</strong> 1:1 o 1:3, 30 min.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
    </div>
            <div class="row gy-3 my-5 fact-item" id="conecta">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Conecta, crea y comparte</h6>

                        <p class="mb-4" style="text-align:justify;">
                            Cada evento es una chispa; tu proyecto, la luz. Nos vemos en el próximo slot.
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="4Inclusion.php">Volver a DGMakers 4Inclusion</a>
                        </p>
                    </div>
                </div>              
            </div> 
        </div>
    </div>

        <!-- Footer común -->
        <?php
            $img="../..";                   // ruta a la carpeta de imágenes
            $pages="..";                 // ruta a la carpeta del resto de páginas de la web
            $index="../..";                 // ruta a la carpeta del index.php
            include "../../footer.php";       // incluye el footer común
        ?>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
                class="bi bi-arrow-up"></i></a>

        <script>
            (function () {
                const filterContainer = document.getElementById('workshopFilters');
                const grid = document.getElementById('workshopGrid');
                if (!filterContainer || !grid) {
                    return;
                }

                const cards = Array.prototype.slice.call(grid.querySelectorAll('[data-workshop]'));
                if (!cards.length) {
                    return;
                }

                const slugify = function (value) {
                    return value
                        .toLowerCase()
                        .normalize('NFD')
                        .replace(/[̀-ͯ]/g, '')
                        .replace(/[^a-z0-9]+/g, '-')
                        .replace(/(^-|-$)/g, '');
                };

                const parseIsoDate = function (value) {
                    if (!value) {
                        return null;
                    }
                    const date = new Date(value);
                    return isNaN(date.getTime()) ? null : date;
                };

                const parseDateFromText = function (text) {
                    if (!text) {
                        return null;
                    }
                    const match = text.match(/(\d{1,2})\/(\d{1,2})(?:\/(\d{2,4}))?/);
                    if (!match) {
                        return null;
                    }
                    const today = new Date();
                    const day = parseInt(match[1], 10);
                    const month = parseInt(match[2], 10) - 1;
                    if (isNaN(day) || isNaN(month)) {
                        return null;
                    }
                    let year = match[3];
                    if (year) {
                        year = year.length === 2 ? 2000 + parseInt(year, 10) : parseInt(year, 10);
                    } else {
                        year = today.getFullYear();
                    }
                    let candidate = new Date(year, month, day);
                    const diffDays = (candidate.getTime() - today.getTime()) / (24 * 60 * 60 * 1000);
                    if (diffDays < -30) {
                        candidate = new Date(year + 1, month, day);
                    }
                    return candidate;
                };

                cards.forEach(function (card) {
                    const manualCenter = card.getAttribute('data-center') || '';
                    const manualMode = card.getAttribute('data-mode') || '';
                    const manualDate = card.getAttribute('data-date') || '';

                    let centerSlug = manualCenter ? slugify(manualCenter) : '';
                    const centerBadge = card.querySelector('.badge.bg-primary');
                    if (!centerSlug && centerBadge) {
                        centerSlug = slugify(centerBadge.textContent.trim());
                    }

                    let modeSlug = manualMode ? slugify(manualMode) : '';
                    const infoItems = card.querySelectorAll('ul li');
                    let dateText = '';
                    if (infoItems.length > 0 && infoItems[0]) {
                        dateText = infoItems[0].textContent.trim();
                    }

                    let parsedDate = parseIsoDate(manualDate);
                    if (!parsedDate) {
                        parsedDate = parseDateFromText(dateText);
                    }

                    const modeText = infoItems.length > 1 && infoItems[1]
                        ? infoItems[1].textContent.split('·')[0].trim()
                        : '';
                    if (!modeSlug) {
                        if (!modeText || /modalidad|confirmar/i.test(modeText)) {
                            modeSlug = 'por-confirmar';
                        } else {
                            modeSlug = slugify(modeText);
                        }
                    }

                    card.dataset.centerSlug = centerSlug;
                    card.dataset.modeSlug = modeSlug || 'por-confirmar';
                    card.dataset.timestamp = parsedDate ? String(parsedDate.getTime()) : '';
                    card.dataset.hasDate = parsedDate ? '1' : '0';
                });

                const MS_PER_DAY = 24 * 60 * 60 * 1000;

                const isWithin = function (timestamp, days) {
                    if (!timestamp) {
                        return false;
                    }
                    const value = Number(timestamp);
                    if (!isFinite(value)) {
                        return false;
                    }
                    const diffDays = (value - Date.now()) / MS_PER_DAY;
                    return diffDays >= 0 && diffDays <= days;
                };

                const applyFilter = function (filter) {
                    cards.forEach(function (card) {
                        let show = true;
                        const timestamp = card.dataset.timestamp || '';
                        const hasDate = card.dataset.hasDate || '0';
                        const centerValue = card.dataset.centerSlug || '';
                        const modeValue = card.dataset.modeSlug || '';

                        switch (filter) {
                            case 'next-week':
                                show = isWithin(timestamp, 7);
                                break;
                            case 'next-month':
                                show = isWithin(timestamp, 30);
                                break;
                            case 'next-quarter':
                                show = isWithin(timestamp, 90);
                                break;
                            case 'no-date':
                                show = hasDate === '0';
                                break;
                            case 'mode-presencial':
                                show = modeValue === 'presencial' || modeValue === 'hibrido' || modeValue === 'presencial-hibrido';
                                break;
                            case 'mode-streaming':
                                show = modeValue === 'streaming' || modeValue === 'online';
                                break;
                            case 'center-cee-eusebio':
                                show = centerValue.indexOf(slugify('CEE Eusebio')) !== -1
                                    || centerValue.indexOf(slugify('CEPEE Eusebio')) !== -1;
                                break;
                            case 'center-ies-alcantara':
                                show = centerValue.indexOf(slugify('IES Alcántara')) !== -1;
                                break;
                            case 'all':
                            default:
                                show = true;
                        }

                        card.classList.toggle('d-none', !show);
                        card.style.display = show ? '' : 'none';
                        card.setAttribute('aria-hidden', show ? 'false' : 'true');
                    });
                };

                const findButton = function (target) {
                    let node = target;
                    while (node && node !== filterContainer) {
                        if (node.hasAttribute('data-filter')) {
                            return node;
                        }
                        node = node.parentElement;
                    }
                    return null;
                };

                filterContainer.addEventListener('click', function (event) {
                    const button = findButton(event.target);
                    if (!button) {
                        return;
                    }
                    event.preventDefault();
                    Array.prototype.forEach.call(filterContainer.querySelectorAll('.btn'), function (btn) {
                        btn.classList.remove('active');
                    });
                    button.classList.add('active');
                    applyFilter(button.getAttribute('data-filter'));
                });

                const initialButton = filterContainer.querySelector('.btn.active');
                applyFilter(initialButton ? initialButton.getAttribute('data-filter') : 'all');
            }());
        </script>
        <script>
            (function () {
                const toggles = document.querySelectorAll('[data-readmore-toggle]');
                if (!toggles.length) {
                    return;
                }

                const shouldHideToggle = function (textEl) {
                    if (!textEl) {
                        return true;
                    }
                    const isClamped = textEl.classList.contains('clamp-3');
                    if (!isClamped) {
                        return false;
                    }
                    return textEl.scrollHeight <= textEl.clientHeight + 1;
                };

                toggles.forEach(function (toggle) {
                    const textEl = toggle.parentElement
                        ? toggle.parentElement.querySelector('[data-readmore-text]')
                        : null;

                    if (!textEl || shouldHideToggle(textEl)) {
                        toggle.classList.add('d-none');
                        return;
                    }

                    toggle.addEventListener('click', function () {
                        const isExpanded = !textEl.classList.contains('clamp-3');
                        textEl.classList.toggle('clamp-3', isExpanded);
                        toggle.textContent = isExpanded ? 'Más' : 'Menos';
                    });
                });
            }());
        </script>

        <!-- Galería Drive Modal -->
         <div class="modal fade" id="lumio11112025" tabindex="-1" aria-labelledby="lumio11112025Label" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="lumio11112025Label">Galería · Drive</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <div style="max-width:1200px;margin:auto">

                            <iframe
                                src="https://drive.google.com/drive/folders/1BG9h_Xh3OOFg-xhgDheGQ54--t9S_G6u?usp=share_link"
                                style="width:100%;height:700px;border:0;overflow:hidden"
                                allow="fullscreen">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="radio15112025" tabindex="-1" aria-labelledby="radio15112025Label" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="radio15112025Label">Galería · Drive</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <div style="max-width:1200px;margin:auto">
                            <iframe
                                src="https://drive.google.com/drive/folders/1-ZIk0xlM0IpRUReEDS8oeenGPj-U8-D7?usp=share_link"
                                style="width:100%;height:700px;border:0;overflow:hidden"
                                allow="fullscreen">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <!--script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../../lib/wow/wow.min.js"></script>
        <script src="../../lib/easing/easing.min.js"></script>
        <script src="../../lib/waypoints/waypoints.min.js"></script>
        <script src="../../lib/counterup/counterup.min.js"></script>
        <script src="../../lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="../../lib/lightbox/js/lightbox.min.js"></script>

        <!-- Template Javascript -->
        <script src="../../js/main.js"></script>
</body>

</html>
