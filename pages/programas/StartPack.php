<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Start Pack</title>
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
    <link href="..././lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
	<!-- Menú común -->
	<?php
        $img="../..";                   // ruta a la carpeta de imágenes
        $pages="..";                    // ruta a la carpeta del resto de páginas de la web
        $index="../..";                 // ruta a la carpeta del index.php
        include "../../menu.php";       // inlcuye el menu común
    ?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../../img/4Inclusion/DGM4Inclusion.png" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-0 animated zoomIn">Start Pack</h1>
                            <h5 class="text-white text-uppercase mb-4 animated zoomIn"><i>Crea. Sube. Brilla.</i></h4>
                            <!--a href="StartPack.php" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Crea. Sube. Brilla.</a>
                            <a href="4Inclusion.php#participan" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Ver centros y equipos</a>
                            <a href="4Inclusion.php#livehub" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Live Hub: Eventos & Conexiones</a>
                            <a href="Jornadas4Inclusion.php" class="btn animated zoomIn pt-1 pb-1" style="background: #015183">Jornadas 4Inclusion</a-->
                            <h5 class="text-white text-uppercase mb-4 animated zoomIn" style="padding-top: 20px"><i>Este pack es tu pista de despegue: plantillas, guías y mini-retos para convertir ideas en materiales inclusivos reales. IA como copiloto (pistas, no soluciones), accesibilidad by default y productos listos para clase.</i></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row gy-3 mb-5 fact-item" id="paraquien">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">¿Para quién?</h6>
                        <!--p class="mb-4" style="text-align:justify;">
                            Conoce quién está dentro. Este bloque presenta a los 5 dúos IES ↔ Educación Especial y enlaza al Directorio completo.
                        </p-->

                        <p class="mb-4" style="text-align:justify;">
                            <ul>
                                <li><b>DGMakers</b> (equipos de secundaria) que crean materiales para aulas de Educación Especial.</li>
                                <li>Docentes que facilitan un <b>sprint corto</b> (40–60 min).</li>
                                <li>Estudiantes de EE que actúan como <b>Product Owner</b> porque la necesidad real manda.</li>
                            </ul>
                        </p>

                        <!--p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="directorio-de-centros.php">Ir al Directorio de Centros</a>
                        </p-->
                    </div>
                </div>      
            </div>

            <div class="row gy-3 mb-5 fact-item" id="incluye">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Qué incluye (descargables)</h6>
                        <!--p class="mb-4" style="text-align:justify;">
                            Conoce quién está dentro. Este bloque presenta a los 5 dúos IES ↔ Educación Especial y enlaza al Directorio completo.
                        </p-->

                        <p class="mb-4" style="text-align:justify;">
                            <ul>
                                <li><a href="../../doc/4Inclusion/Idea_Card_DGMakers4Inclusion.docx"><b>Idea Card</b></a> – la tarjeta para aterrizar una idea en 5 minutos.</li>
                                <li><a href="../../doc/4Inclusion/Plantilla_Proyecto_DGMakers4Inclusion.docx"><b>Plantilla de Proyecto (paso a paso)</b></a> – guía para documentar y publicar en la plataforma.</li>
                                <li><a href="../../doc/4Inclusion/rubrica-express.docx"><b>Rúbrica Exprés (0–2)</b></a> – Impacto · Inclusión · Simplicidad · Viabilidad.</li>
                                <li><a href="../../doc/4Inclusion/guia-udl.docx"><b>Guía rápida de accesibilidad (UDL)</b></a> – contraste, pictos, lectura fácil, subtítulos y audio TTS.</li>
                                <li><b>Consentimientos</b> – voz/imagen, claros y cortos.</li>
                                <li><b>Guion “Teatro Foro”</b> – mini-teatro para detectar barreras y proponer soluciones.</li>
                                <li><b>Kits por tipo</b> – 3D, Señalética, Vídeo corto, Audio/TTS, QR.</li>
                            </ul>
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            Próximamente: Playbooks por materia (Mates, Lengua, Patrimonio, STEAM).
                        </p>
                        
                        <!--p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="directorio-de-centros.php">Ir al Directorio de Centros</a>
                        </p-->
                    </div>
                </div>      
            </div>

            <div class="row gy-3 mb-5 fact-item" id="usarlo">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Cómo usarlo en 10 minutos</h6>
                        <!--p class="mb-4" style="text-align:justify;">
                            Conoce quién está dentro. Este bloque presenta a los 5 dúos IES ↔ Educación Especial y enlaza al Directorio completo.
                        </p-->

                        <p class="mb-4" style="text-align:justify;">
                            <ol>
                                <li><b>Elige un reto</b> real (ej.: “Señalizar biblioteca en lectura fácil”).</li>
                                <li>Rellena la <b>Idea Card</b> (5 min).</li>
                                <li>Abre la <b>Plantilla de Proyecto</b> y completa solo los apartados 1–4 (5 min).</li>
                                <li><b>Prototipa</b> lo mínimo (un pictograma, 1 STL simple, 30–45 s de vídeo).</li>
                                <li>Pasa <b>Rúbrica Exprés + Checklist UDL</b>.</li>
                                <li><b>Publica</b>: sube archivos, licencia CC BY-NC-SA, etiquetas y mini-demo.</li>
                            </ol>
                        </p>

                        <!--p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="directorio-de-centros.php">Ir al Directorio de Centros</a>
                        </p-->
                    </div>
                </div>      
            </div>

            <div class="row gy-3 mb-5 fact-item" id="plantillas">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Plantillas (contenido listo para copiar/pegar)</h6>
                        <p class="mb-4" style="text-align:justify;">
                            Descarga, rellena en equipo y comparte tu primera versión en menos de una hora.
                        </p>
                   </div>
                </div>      
            </div>

            <div class="row gy-3 my-5 fact-item" id="ideacard">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">1) Idea Card (Hack4Rookies)</h6>
                        <p class="mb-4" style="text-align:justify;">
                            <b>Título (máx. 6 palabras):</b>
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <b>Para quién</b>: (p.ej., aula EE 1.º ciclo, profes de Lengua…) 
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <b>Problema real (1 frase):</b>  
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <b>Solución en 1 frase</b>: (ej.: “QR con audio TTS y pictos”)    
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <b>Cómo funciona (3 pasos):</b>  
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <ol>
                                <li>...</li>
                                <li>...</li>
                                <li>...</li>
                            </ol>
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <b>Qué la hace inclusiva (marca 3)</b>: Lectura fácil · Alt-text/Audio · Contraste alto · Pictos · Pasos cortos · Modo sin IA
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <b>Tecnología mínima</b>: (Drive/QR/visor 3D…) 
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <b>Riesgos/vallas (1–2)</b>:  
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <b>Primer siguiente paso (mañana):</b>    
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <b>Equipo (nombres de pila/roles):</b>  
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="../../doc/4Inclusion/Idea_Card_DGMakers4Inclusion.docx">Descargar Idea Card (DOCX)</a>
                        </p>
                    </div>
                </div>              
            </div>

            <div class="row gy-3 my-5 fact-item" id="pasoapaso">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="1.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">2) Plantilla de Proyecto (paso a paso)</h6>

                        <ol>
                            <li class="mb-4" style="text-align:justify;">
                                <b>Nombre del proyecto</b>
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Para quién va</b> (persona/situación/objetivo)
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Qué resuelve</b> (dolor concreto)
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Qué entregamos</b> (lista de archivos: STL/3MF, PNG, MP4, PDF…)    
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Cómo usarlo (3–5 pasos en lectura fácil)</b>  

                                <ul>
                                    <li>Paso1: ...</li>
                                    <li>Paso2: ...</li>
                                    <li>Paso3: ...</li>
                                </ul>
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Accesibilidad/UDL</b>: (marca lo que aplicaste)

                                <ul>
                                    <li>Contraste alto · Lectura fácil · Pictogramas · Subtítulos · Alt-text · Audio TTS · Paso a paso · Versión sin IA</li>
                                </ul>
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Materiales y apps</b>: (p.ej., PLA blanco, Cura, Canva, CapCut, voz TTS…) 
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Consejos de seguridad</b> (si aplica)  
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Versiones</b> (v1, v1.1 con cambios)
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Licencia</b> (CC BY-NC-SA) + créditos de autoría 
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Mini-demo (30–45 s)</b> – enlace/QR 
                            </li>
                        </ol>

                        <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="../../doc/4Inclusion/Plantilla_Proyecto_DGMakers4Inclusion.docx">Descargar Plantilla de Proyecto (DOCX)</a>
                        </p>
                    </div>
                </div>              
            </div>

            <div class="row gy-3 my-5 fact-item" id="rubrica">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="1.3s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">3) Rúbrica Exprés (0–2)</h6>

                        <ul>
                            <li class="mb-4" style="text-align:justify;">
                                <b>Impacto</b> · 0: dudoso · 1: útil a veces · <b>2: útil a muchas aulas</b>
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Inclusión</b> · 0: sin foco · 1: parcial · <b>2: accesibilidad embebida</b>
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Simplicidad</b> · 0: lioso · 1: claro con guía · <b>2: claro a la primera</b>
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Viabilidad (≤6 semanas)</b> · 0: difícil · 1: posible con ayuda · </b>2: montable con lo que tenemos</b>   
                            </li>
                        </ul>

                        <p class="mb-4" style="text-align:justify;">
                            <b>Total</b>: /8 → <b>pasa si ≥6</b> (si empata, gana el de mayor Inclusión).  
                        </p>

                        <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="../../doc/4Inclusion/rubrica-express.docx">Descargar Rúbrica Exprés (DOCX)</a>
                        </p>
                    </div>
                </div>              
            </div>

            <div class="row gy-3 my-5 fact-item" id="guia">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="1.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">4) Guía rápida de accesibilidad (UDL)</h6>

                        <ul>
                            <li class="mb-4" style="text-align:justify;">
                                <b>Texto</b>: frases cortas, lectura fácil, evita jerga.
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Visual</b>: contraste alto (fondo claro + texto oscuro), tamaño ≥16 px.
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Pictos + texto</b>: nunca solo icono.
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Audio/TTS</b>: añade versión en voz.
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Subtítulos/alt-text</b>: describe lo importante.
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Ritmo</b>: 3–5 pasos máximo por instrucción.
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Plan B offline</b>: PDF imprimible / señalética física.
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Sensibilidad sensorial</b>: sin flashes, volumen suave, opción auriculares.
                            </li>
                        </ul>

                        <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="../../doc/4Inclusion/guia-udl.docx">Descargar Guía UDL (DOCX)</a>
                        </p>
                    </div>
                </div>              
            </div>

            <div class="row gy-3 my-5 fact-item" id="consentimientos">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="1.7s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">5) Consentimientos (resumen)</h6>

                        <ul>
                            <li class="mb-4" style="text-align:justify;">
                                <b>Voz/imagen</b>: marca “sí”/“no” por tipo de uso (web interna, demo en evento, galería).
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Sin datos personales</b> en archivos; usa avatares o manos si no hay permiso.
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Retirada</b>: puedes revocar el consentimiento cuando quieras (correo de contacto).
                            </li>
                        </ul>

                        <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="../../doc/4Inclusion/consentimientos.pdf">Descargar Consentimientos (PDF)</a>
                        </p>
                    </div>
                </div>              
            </div>

            <div class="row gy-3 my-5 fact-item" id="teatro">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="1.9s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">6) Guion “Teatro Foro” (20–30 min)</h6>

                        <ul>
                            <li class="mb-4" style="text-align:justify;">
                                <b>Escena-problema (2–3 min)</b>: muestra una barrera real (ruido, instrucciones confusas, señalética pobre).
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Debate (3 min)</b>: ¿qué duele?
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Re-actuación (10–15 min)</b>: el público propone cambios (pictos, timer, lectura fácil, pista de IA) y actúa la solución.
                            </li>
 
                            <li class="mb-4" style="text-align:justify;">
                                <b>Cosecha (5 min)</b>: lista de mejoras para el prototipo.
                            </li>
                        </ul>

                        <p class="wow fadeIn" data-wow-delay="0.5s" style="text-align:center;">
                            <a class="btn btn-outline-primary" href="../../doc/4Inclusion/teatro-foro.pdf">Descargar Guión Teatro Foro (PDF)</a>
                        </p>
                    </div>
                </div>              
            </div>

             <div class="row gy-3 my-5 fact-item" id="kits">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="2.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Kits por tipo (checklists express)</h6>

                        <p class="mb-4" style="text-align:justify;">
                            <b>Kit 3D (apoyos rápidos)</b>

                            <ul>
                                <li class="mb-4" style="text-align:justify;">
                                    Archivos: <b>STL/3MF</b> + perfil de impresión (altura capa, relleno, material).
                                </li>

                                <li class="mb-4" style="text-align:justify;">
                                    Requisitos: tolerancias, tiempo estimado, seguridad (bordes).
                                </li>

                                <li class="mb-4" style="text-align:justify;">
                                    Inclusión: agarres/grips, marcadores táctiles, guías de lectura.
                                </li>
                            </ul>
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <b>Kit Señalética</b>

                            <ul>
                                <li class="mb-4" style="text-align:justify;">
                                    Pictos + texto (lectura fácil), flechas claras, alto contraste.
                                </li>

                                <li class="mb-4" style="text-align:justify;">
                                    Tamaños sugeridos (A5/A4), plasti o cartón pluma.
                                </li>

                                <li class="mb-4" style="text-align:justify;">
                                    Añade <b>QR</b> a audio breve (TTS) y mini-vídeo sin rostros.
                                </li>
                            </ul>
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <b>Kit Vídeo 30–45 s</b>

                            <ul>
                                <li class="mb-4" style="text-align:justify;">
                                    Guion 3 pasos, <b>subtítulos</b> auto + revisión, planos estables (móvil + trípode).
                                </li>

                                <li class="mb-4" style="text-align:justify;">
                                    Música low-key o silencio; exporta MP4 1080p.
                                </li>
                            </ul>
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <b>Kit Audio/TTS</b>

                            <ul>
                                <li class="mb-4" style="text-align:justify;">
                                    Texto en lectura fácil (≤100 palabras), voz clara, volumen constante.
                                </li>

                                <li class="mb-4" style="text-align:justify;">
                                    Exporta MP3/WAV, revisa pronunciación de nombres clave.
                                </li>
                            </ul>
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <b>Kit QR</b>

                            <ul>
                                <li class="mb-4" style="text-align:justify;">
                                    URL corta y estable; prueba en móvil con datos y wifi.
                                </li>

                                <li class="mb-4" style="text-align:justify;">
                                    Pega QR en la <b>ficha</b> A4 del proyecto.
                                </li>
                            </ul>
                        </p>
                    </div>
                </div>              
            </div>           

            <div class="row gy-3 my-5 fact-item" id="politicaia">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="2.3s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Política de IA (copiloto)</h6>

                        <ul>
                            <li class="mb-4" style="text-align:justify;">
                                <b>Pistas, no soluciones.</b>
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                Explica qué te sugirió la IA (transparencia).
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                Parte del trabajo va sin IA (manuscrito/oral).
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                Revisa sesgos y lenguaje.
                            </li>
                        </ul>
                    </div>
                </div>              
            </div> 

            <div class="row gy-3 my-5 fact-item" id="publicaplantilla">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="2.5s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Publica en la plataforma (pasos)</h6>

                        <ol>
                            <li class="mb-4" style="text-align:justify;">
                                <b>Crear ficha</b> con la Plantilla de Proyecto.
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Subir archivos</b> (3D/PNG/MP4/MP3/PDF).
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                Elegir <b>licencia CC BY-NC-SA</b> y etiquetas (3D-print, lectura-fácil, TTS, pictos, calm-tech…).
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                Añadir <b>mini-demo</b> (30–45 s) y <b>QR</b>.
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Enviar a revisión</b> (Checklist UDL + Rúbrica Exprés).
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Publicar</b> y compartir en el Calendario & Quedadas (si hay demo).
                            </li>
                        </ol>
                    </div>
                </div>              
            </div> 

            <div class="row gy-3 my-5 fact-item" id="microretos">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="2.7s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Micro-retos (para activar equipos)</h6>

                        <ul>
                            <li class="mb-4" style="text-align:justify;">
                                <b>Reto 90’ “Señaliza tu aula”</b>: 6 pictos + lectura fácil + audio TTS + QR.
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Reto 90’ “Apoyo 3D”</b>: 1 STL útil + hoja de uso + perfil de impresión.
                            </li>

                            <li class="mb-4" style="text-align:justify;">
                                <b>Reto 60’ “Cómo pedir ayuda”</b>: vídeo 30–45 s con subtítulos + póster con QR.
                            </li>
                        </ul>
                    </div>
                </div>              
            </div> 

            <div class="row gy-3 my-5 fact-item" id="etiquetas">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="2.9s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">Etiquetas recomendadas</h6>

                        <p class="mb-4" style="text-align:justify;">
                            <b>#3D-print · #lectura-fácil · #pictos · #TTS · #subtítulos · #calm-tech · #AR-QR · #guía-rápida · #plantilla</b>
                        </p>
                    </div>
                </div>              
            </div> 

            <div class="row gy-3 my-5 fact-item" id="faq">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="3.1s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">FAQ rápidas</h6>

                        <p class="mb-4" style="text-align:justify;">
                            <b>¿Podemos publicar sin vídeo?</b> Sí, pero añade 3 fotos y audio TTS.
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <b>¿Y si no tenemos impresora 3D?</b> Sube el STL igual; otro centro puede imprimir.
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <b>¿Puedo mejorar un recurso de otro equipo?</b> Sí: haz fork, cita autoría y licencia.
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <b>¿Cuánto dura un primer sprint?</b> 40–60 min. Publica la v1 y mejora luego.
                        </p>
                    </div>
                </div>              
            </div> 

            <div class="row gy-3 my-5 fact-item" id="listo">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="3.3s">
                    <div class="h-100">
                        <h6 class="section-title bg-white text-start text-primary pe-3 wow fadeInLeftBig">¿Listos para despegar?</h6>

                        <p class="mb-4" style="text-align:justify;">
                            <b>1. Elige reto · 2) Idea Card · 3) Prototipo mínimo · 4) Publica.</b>
                        </p>

                        <p class="mb-4" style="text-align:justify;">
                            <b>Crea. Sube. Brilla.</b>
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
            include "../../footer.php";       // inlcuye el footer común
        ?>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
                class="bi bi-arrow-up"></i></a>


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