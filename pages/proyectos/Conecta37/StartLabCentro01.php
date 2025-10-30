<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Start Lab Centro 01 · Conecta 37</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="micro jornadas, conecta 37, start lab, entrenamiento interno, educaci&oacute;n" name="keywords">
    <meta content="Micro-Jornadas Conecta-37: entrenamiento interno para equipos intercentro en formato 45 minutos con productos listos para el Showcase." name="description">

    <!-- Favicon -->
    <link href="../../../img/favicon.png" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Bootstrap -->
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

        .lab-overview,
        .lab-block {
            border-radius: 18px;
            border: 1px solid rgba(1, 81, 131, 0.14);
            box-shadow: 0 0.85rem 1.8rem rgba(1, 81, 131, 0.08);
            overflow: hidden;
        }

        .lab-overview {
            background: linear-gradient(135deg, rgba(1, 81, 131, 0.1), rgba(1, 81, 131, 0.02));
        }

        .lab-badge {
            background: rgba(1, 81, 131, 0.12);
            color: #015183;
            padding: 0.45rem 0.85rem;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        .lab-block-media {
            min-height: 240px;
        }

        .lab-block-media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .lab-block-media--compact {
            display: flex;
            align-items: center;
        }

        .lab-block-media--compact img {
            height: auto;
            max-height: 320px;
        }

        .activity-card {
            border: 1px solid rgba(1, 81, 131, 0.14);
            border-radius: 16px;
            padding: 1.5rem 1.4rem;
            background: #fff;
            margin-bottom: 1.4rem;
        }

        .activity-title {
            font-weight: 700;
            color: #0a558c;
        }

        .activity-meta {
            color: #4f5f6f;
            font-size: 0.95rem;
        }

        .logistics-list li + li {
            margin-top: 0.4rem;
        }

        .extras-grid {
            display: grid;
            gap: 1rem;
        }

        @media (min-width: 768px) {
            .extras-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 575.98px) {
            .activity-card {
                padding: 1.25rem;
            }
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
            <h1 class="display-4 text-white mb-3">Start Lab Centro 01</h1>
            <p class="lead text-white mb-0">Micro-Jornadas Conecta-37 para entrenar equipos mezclados y publicar evidencias en 90 minutos.</p>
            <div class="d-flex flex-wrap justify-content-center gap-2 mt-4">
                <a href="index.php" class="btn btn-conecta37 pt-1 pb-1">Visi&oacute;n general</a>
                <a href="Encuentro37.php" class="btn btn-conecta37 pt-1 pb-1">Jornadas 26</a>
                <a href="StartLab01_Old.php" class="btn btn-conecta37 pt-1 pb-1">Start Lab 01</a>
                <a href="StartLab01.php" class="btn btn-conecta37 pt-1 pb-1">Start Lab 02</a>
                <a href="StarLabCentro01.php" class="btn btn-conecta37 pt-1 pb-1 active" aria-current="page">Start Lab Centro 01</a>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="lab-overview p-4 p-md-5 mb-5">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7">
                        <span class="lab-badge">Micro-Jornadas internas</span>
                        <h2 class="fw-bold mb-3">Entrenamiento intercentro en formato 45&rsquo;</h2>
                        <p class="mb-4">Objetivo: que equipos mixtos (varias clases) practiquen el ciclo Mercado &rarr; Sprint &rarr; Debrief y salgan con dos productos listos para el Showcase.</p>
                    </div>
                    <div class="col-lg-5">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="bg-white rounded-4 h-100 p-3 shadow-sm">
                                    <p class="text-uppercase text-muted mb-1 small fw-semibold">Duraci&oacute;n total</p>
                                    <p class="mb-0">90 min (2 talleres de 45&rsquo;)</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-white rounded-4 h-100 p-3 shadow-sm">
                                    <p class="text-uppercase text-muted mb-1 small fw-semibold">Equipos</p>
                                    <p class="mb-0">2&ndash;4 equipos mixtos · 4-5 personas</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="bg-white rounded-4 p-3 shadow-sm">
                                    <p class="text-uppercase text-muted mb-1 small fw-semibold">Productos a publicar</p>
                                    <p class="mb-0">Manifiesto 75 palabras + Term&oacute;metro de 1 pregunta (o formato alternativo B&rsquo;)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Logística -->
            <section class="lab-block card border-0 mb-4">
                <div class="row g-0 align-items-stretch flex-lg-row-reverse">
                    <div class="col-lg-5">
                        <div class="lab-block-media h-100 lab-block-media--compact">
                            <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1200&q=80" class="img-fluid" alt="Equipo de estudiantes organizando materiales durante un taller">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                                <span class="lab-badge">Log&iacute;stica express</span>
                                <h3 class="h4 mb-0">Todo listo antes de arrancar</h3>
                            </div>
                            <ul class="logistics-list ps-3 mb-4">
                                <li><strong>Participantes:</strong> 10&ndash;20 estudiantes en 2&ndash;4 equipos de 4&ndash;5 personas.</li>
                                <li><strong>Soporte:</strong> 1 docente coordinador + 2&ndash;4 mentores (alumnado avanzado) para rotar entre equipos.</li>
                                <li><strong>Canales:</strong> Meet principal + 2 salas Meet para talleres, Google Chat (space por equipo) y Drive (carpeta por equipo).</li>
                                <li><strong>Material base:</strong> plantillas 1-Slide/1-Page + Sello IA Responsable.</li>
                            </ul>
                            <p class="mb-0">La estructura replica el Start Lab completo, pero en mini formato: Mercado de ideas interno &rarr; Sprint en parejas de talleres &rarr; Debrief con lanzadera al Showcase.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Programa -->
            <section class="lab-block card border-0 mb-4">
                <div class="row g-0 align-items-stretch">
                    <div class="col-lg-5">
                        <div class="lab-block-media h-100">
                            <img src="https://as2.ftcdn.net/v2/jpg/05/18/75/43/1000_F_518754391_bgzyHPwU0KyijotX1qfjHiyxVMGPxhjM.jpg" class="img-fluid" alt="Docente liderando una sesi&oacute;n r&aacute;pida con equipos de estudiantes">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                                <span class="lab-badge">Programa 90&rsquo;</span>
                                <h3 class="h4 mb-0">Dos talleres paralelos de 45&rsquo;</h3>
                            </div>

                             <div class="activity-card">
                                <h4 class="activity-title h5 mb-2">Condiciones</h4>
                                <ul class="ps-3 mb-3">
                                <li>Mismo ritmo (45&rsquo;). El docente coordina tiempos globales; mentores lideran cada sala.</li>
                                <li>Checkpoints comunes en minuto 15 y 30 para asegurar entregables.</li>
                                <li>Demo rel&aacute;mpago final (60&ndash;90&rsquo;) por equipo en el Meet principal, alineado con los pitch y el Showcase.</li>
                            </ul>
                            </div>

                            <div class="activity-card">
                                <h4 class="activity-title h5 mb-2">Arranque (5&rsquo;)</h4>
                                <p class="activity-meta mb-0">Bienvenida, sorteo de equipos mixtos, ritmo 45&rsquo; y repaso de los criterios comunes: claridad, evidencia mínima, cr&eacute;ditos + IA Responsable.</p>
                                <div class="d-flex flex-wrap gap-2 justify-content-center mt-3">
                                    <a href="https://padlet.com/gines_ruiz/proyectos-conecta-37-dbg40ys4jgyem5s9"
                                    target="_blank" rel="noopener noreferrer"
                                    class="btn btn-outline-primary btn-sm">
                                        <i class="bi bi-grid-3x3-gap me-1"></i> Panel compartido
                                    </a>
                                </div>
                            </div>

                            <div class="activity-card">
                                <h4 class="activity-title h5 mb-2">Taller A (45&rsquo;) · Matem&aacute;ticas: Operaciones con enteros</h4>
                                <p class="activity-meta mb-3"><strong>T&iacute;tulo sugerido:</strong> &ldquo;Saldo Cero&hellip; si puedes&rdquo;</p>
                                <p class="mb-3">Objetivo: modelar una situaci&oacute;n real con n&uacute;meros enteros, crear el problema y resolverlo cumpliendo condiciones de dise&ntilde;o y verificaci&oacute;n.</p>
                                <h5 class="h6 text-primary text-uppercase mb-2">Producto (1 slide)</h5>
                                <ul class="ps-3 mb-3">
                                    <li>Enunciado del problema (contexto real).</li>
                                    <li>Datos (tabla/lista) y cadena de operaciones.</li>
                                    <li>Dos verificaciones: recta num&eacute;rica + operaci&oacute;n inversa.</li>
                                    <li>Conclusi&oacute;n + cr&eacute;ditos + Sello IA (qu&eacute; hizo la IA, autor&iacute;a, verificaci&oacute;n).</li>
                                </ul>
                                <h5 class="h6 text-primary text-uppercase mb-2">Condiciones obligatorias</h5>
                                <ul class="ps-3 mb-3">
                                    <li>Usar ≥4 enteros con signos distintos (al menos un negativo).</li>
                                    <li>Incluir par&eacute;ntesis en al menos una expresi&oacute;n.</li>
                                    <li>Resultado preacordado (0, −3, +7) o justificar por qu&eacute; no llega con esos datos.</li>
                                    <li>Mostrar cadena de operaciones y recta num&eacute;rica/diagrama.</li>
                                </ul>
                                <h5 class="h6 text-primary text-uppercase mb-2">Contextos sugeridos</h5>
                                <ul class="ps-3 mb-3">
                                    <li>Econom&iacute;a del club solidario: ingresos (+) y gastos (−).</li>
                                    <li>Ruta t&eacute;rmica: cambios de temperatura a lo largo del d&iacute;a.</li>
                                    <li>Ascensor/Desnivel: subir y bajar plantas o metros.</li>
                                </ul>
                                <h5 class="h6 text-primary text-uppercase mb-2">IA boost (opcional)</h5>
                            <ul class="ps-3 mb-0">
                                <li><code>Dame 3 ideas de contexto reales para operaciones con enteros (14&ndash;16 a&ntilde;os).</code></li>
                                <li><code>Prop&oacute;n una cadena de operaciones con par&eacute;ntesis que d&eacute; resultado = [target] usando estos enteros: [...].</code></li>
                                <li><code>Genera un enunciado ≤80 palabras, claro y sin ambig&uuml;edades.</code></li>
                            </ul>

                            </div>

                            <div class="activity-card mb-0">
                                <h4 class="activity-title h5 mb-2">Taller B (45&rsquo;) · Lengua: Expresi&oacute;n con restricciones</h4>
                                <p class="activity-meta mb-3"><strong>T&iacute;tulo sugerido:</strong> &ldquo;Mensaje con candados&rdquo;</p>
                                <p class="mb-3">Objetivo: escribir un texto breve y presentarlo oralmente cumpliendo restricciones que aseguren claridad, cohesi&oacute;n y creatividad.</p>
                                <h5 class="h6 text-primary text-uppercase mb-2">Producto (1 slide + pitch 60&rdquo;)</h5>
                                <ul class="ps-3 mb-3">
                                    <li>Texto de 60&ndash;75 palabras (m&aacute;x. 5 frases).</li>
                                    <li>Lista de candados cumplidos.</li>
                                    <li>T&iacute;tulo potente.</li>
                                    <li>Presentaci&oacute;n oral de 60&rdquo; en Meet.</li>
                                </ul>
                                <h5 class="h6 text-primary text-uppercase mb-2">Candados (elige al menos 3)</h5>
                                <ul class="ps-3 mb-3">
                                    <li>Conectores: 1 causal (porque/ya que) y 1 concesivo (aunque).</li>
                                    <li>Recursos: pregunta ret&oacute;rica o an&aacute;fora.</li>
                                    <li>Registro: indicar audiencia (familias, docentes, alumnado).</li>
                                    <li>L&eacute;xico: prohibidas “importante” y “cosa”; usar sin&oacute;nimos precisos.</li>
                                    <li>Claridad: frases ≤20 palabras; 3 sustantivos clave en negrita.</li>
                                </ul>
                                <h5 class="h6 text-primary text-uppercase mb-2">IA boost (opcional)</h5>
                                <ul class="ps-3 mb-3">
                                    <li><code>Reescribe este texto en ≤75 palabras manteniendo estos conectores: [porque/aunque].</code></li>
                                    <li><code>Prop&oacute;n 3 t&iacute;tulos de ≤6 palabras con tono [informativo/inspirador].</code></li>
                                    <li><code>Detecta palabras imprecisas y sugiere sin&oacute;nimos m&aacute;s espec&iacute;ficos.</code></li>
                                </ul>
                                <p class="mb-0"><strong>Accesibilidad r&aacute;pida:</strong> contraste legible, tama&ntilde;o ≥24 pt, texto alternativo para im&aacute;genes, subt&iacute;tulos autom&aacute;ticos en Meet si procede.</p>
                            </div>

                            <div class="activity-card mb-0">
                                <h4 class="activity-title h5 mb-2">Cierre (5&rsquo;)</h4>
                                <p class="activity-meta mb-0">Gallery walk (cada equipo comenta la evidencia de otro) + compromiso p&uacute;blico: qu&eacute; probar&aacute;n con su clase antes de la jornada real.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

           

            <!-- Extras -->
            <section class="lab-block card border-0 mb-4">
                <div class="row g-0 align-items-stretch flex-lg-row-reverse">
                    <div class="col-lg-5">
                        <div class="lab-block-media h-100">
                            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80" class="img-fluid" alt="Equipo docente revisando indicadores y recompensas del taller">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                                <span class="lab-badge">Extras que suman</span>
                                <h3 class="h4 mb-0">Ideas r&aacute;pidas para potenciar la experiencia</h3>
                            </div>
                            <div class="extras-grid mb-0">
                                <div class="activity-card mb-0">
                                    <h4 class="activity-title h6 mb-2">1. Pasaporte de equipo</h4>
                                    <p class="mb-0">Documento corto con nombre, links y m&eacute;trica prevista para cada equipo.</p>
                                </div>
                                <div class="activity-card mb-0">
                                    <h4 class="activity-title h6 mb-2">2. Aplaus&oacute;metro</h4>
                                    <p class="mb-0">Encuesta r&aacute;pida para votar “Mensaje m&aacute;s claro” y “Gr&aacute;fico m&aacute;s &uacute;til”.</p>
                                </div>
                                <div class="activity-card mb-0">
                                    <h4 class="activity-title h6 mb-2">3. Equipo espejo</h4>
                                    <p class="mb-0">Parejas de equipos se dan feedback cruzado en 3 minutos.</p>
                                </div>
                                <div class="activity-card mb-0">
                                    <h4 class="activity-title h6 mb-2">4. Panel de latido</h4>
                                    <p class="mb-0">Barra de progreso visible (0&ndash;100%) con checkpoints en los minutos 10/25/40.</p>
                                </div>
                                <div class="activity-card mb-0">
                                    <h4 class="activity-title h6 mb-2">5. Sello IA Responsable</h4>
                                    <p class="mb-0">Transparencia (qu&eacute; hizo la IA), autor&iacute;a (cr&eacute;ditos/licencias), verificaci&oacute;n (revisi&oacute;n humana).</p>
                                </div>
                                <div class="activity-card mb-0">
                                    <h4 class="activity-title h6 mb-2">6. Mini-insignias</h4>
                                    <p class="mb-0">Claridad, Evidencia y Trabajo en equipo. Las entregan docente/mentores al cierre.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Entregables -->
            <section class="lab-block card border-0 mb-5">
                <div class="row g-0 align-items-stretch">
                    <div class="col-lg-5">
                        <div class="lab-block-media h-100">
                            <img src="https://as2.ftcdn.net/v2/jpg/01/68/77/53/1000_F_168775396_3XinhdWrkJNeKzaSvmfzYE5SrNGGPYbI.jpg" class="img-fluid" alt="Capturas de diapositivas y documentos listos para publicar">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card-body p-4 p-md-5">
                            <div class="d-flex flex-wrap align-items-center gap-3 mb-3">
                                <span class="lab-badge">Entregables & criterios</span>
                                <h3 class="h4 mb-0">Checklist com&uacute;n para todos los talleres</h3>
                            </div>
                            <ul class="ps-3 mb-3">
                                <li>1 archivo por equipo (Slide/Doc) con nombre C37-Equipo##-MicroA/MicroB.</li>
                                <li><strong>Mensaje claro:</strong> t&iacute;tulo + una frase o conclusi&oacute;n.</li>
                                <li><strong>Evidencia mínima:</strong> texto, gr&aacute;fico o storyboard que lo sustente.</li>
                                <li><strong>Cr&eacute;ditos + IA Responsable:</strong> plantilla cumplimentada antes de publicar.</li>
                            </ul>
                            <p class="mb-0">Todo debe quedar en la carpeta del equipo y subirse al Showcase al terminar. La micro-jornada es el entrenamiento para llegar al evento real con ritmo y evidencias.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Footer -->
    <?php
        $img = "../../..";
        $pages = "../..";
        $index = "../../..";
        include "../../../footer.php";
    ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../lib/wow/wow.min.js"></script>
    <script src="../../../lib/easing/easing.min.js"></script>
    <script src="../../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../../lib/counterup/counterup.min.js"></script>
    <script src="../../../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../../lib/lightbox/js/lightbox.min.js"></script>
    <script src="../../../js/main.js"></script>
</body>

</html>
