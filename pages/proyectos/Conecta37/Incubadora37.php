<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Incubadora 37 · Conecta 37</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Incubadora 37: explora, prueba y comparte usos de IA y metodolog&iacute;as en el IES Alc&aacute;ntara" name="description">

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

        .inc-hero-subtitle {
            font-size: 1.15rem;
            letter-spacing: 0.08em;
        }

        .inc-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.3rem 0.9rem;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.35);
        }

        .inc-card,
        .inc-procedure-step,
        .inc-form-card,
        .inc-variant-card {
            background: #ffffff;
            border: 1px solid rgba(1, 81, 131, 0.1);
            border-radius: 1.25rem;
            padding: 1.75rem;
            box-shadow: 0 1.5rem 2.4rem rgba(1, 81, 131, 0.08);
        }

        .inc-divider {
            width: 100%;
            height: 1px;
            background: rgba(1, 81, 131, 0.15);
        }

        .inc-highlight {
            background: linear-gradient(120deg, rgba(1, 81, 131, 0.12), rgba(1, 81, 131, 0.04));
            border-radius: 1.25rem;
            padding: 1.25rem 1.6rem;
            border: 1px solid rgba(1, 81, 131, 0.12);
        }

        .inc-section-title {
            color: #0a3d62;
        }

        .inc-routes-img img {
            max-width: 100%;
            height: 250px;
            display: inline-block;
            border-radius: 1rem;
            box-shadow: 0 1.4rem 2.4rem rgba(1, 81, 131, 0.18);
            object-fit: cover;
        }

        .inc-focus-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
        }

        .inc-focus-item {
            display: flex;
            gap: 1rem;
            align-items: flex-start;
        }

        .inc-focus-icon {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            background: rgba(1, 81, 131, 0.08);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #015183;
        }

        .inc-cta {
            text-transform: uppercase;
            letter-spacing: 0.08em;
            font-weight: 700;
            color: #0a558c;
        }

        .inc-focus-placeholder,
        .inc-card--placeholder,
        .inc-card--placeholder h5,
        .inc-card--placeholder p,
        .inc-card--placeholder ul li {
            color: rgba(10, 61, 98, 0.5);
        }

        .inc-procedure-step h5 {
            color: #0a558c;
        }

        .inc-procedure-step code,
        .inc-form-card code {
            background: rgba(1, 81, 131, 0.1);
            padding: 0.2rem 0.4rem;
            border-radius: 0.4rem;
        }

        .inc-timeline {
            counter-reset: inc-step;
        }

        .inc-timeline .inc-procedure-step {
            position: relative;
            padding-left: 3.3rem;
        }

        .inc-timeline .inc-procedure-step::before {
            counter-increment: inc-step;
            content: counter(inc-step);
            position: absolute;
            left: 1rem;
            top: 1.5rem;
            width: 2rem;
            height: 2rem;
            border-radius: 0.7rem;
            background: #015183;
            color: #ffffff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
        }

        .inc-form-card ul {
            padding-left: 1.1rem;
        }

        .inc-variant-card h5 {
            color: #0a3d62;
        }

        @media (max-width: 575.98px) {
            .inc-timeline .inc-procedure-step {
                padding-left: 2.6rem;
            }

            .hero-conecta .btn-conecta37 {
                width: 100%;
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

    <div class="container-fluid hero-conecta py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 text-center text-white">
            <p class="inc-hero-subtitle mb-2 text-uppercase">Incubadora 37</p>
            <h1 class="display-4 text-white mb-3">Explora · Prueba · Mejora · Comparte</h1>
            <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
                <span class="inc-pill"><i class="bi bi-arrow-repeat"></i> Iteraci&oacute;n r&aacute;pida</span>
                <span class="inc-pill"><i class="bi bi-people"></i> Comunidades de pr&aacute;ctica</span>
                <span class="inc-pill"><i class="bi bi-shield-check"></i> Uso responsable</span>
            </div>
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <a href="#focos" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Explorar focos</a>
                <a href="#procedimiento" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Unirme al reto</a>
                <a href="#propon" class="btn btn-conecta37 animated zoomIn pt-1 pb-1">Lanzar mi idea</a>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <div class="inc-highlight mb-4">
                <div class="d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3">
                    <div>
                        <h2 class="inc-section-title mb-2">Incubadora 37</h2>
                        <p class="mb-0">Espacio donde testeamos ideas metodolog&iacute;as, tecnológicas y de uso de la IA con el foco en evidencias cortas, transferencia y comunidad.</p>
                        <p></p>
                        <a href="https://www.canva.com/design/DAG4nJDaMp8/yy7TlkQ_ewUYaEWfqgQFgw/edit?utm_content=DAG4nJDaMp8&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton"
                                    target="_blank" rel="noopener noreferrer"
                                    class="btn btn-outline-primary btn-sm">
                                        <i class="bi bi-grid-3x3-gap me-1"></i> Panel de ideas
                        </a>
                        <a href="#enteros" class="btn btn-primary btn-sm ms-2">
                             <i class="bi bi-calculator me-1"></i> Enteros
                        </a>
                        <a href="#ecuaciones" class="btn btn-primary btn-sm ms-2">
                             <i class="bi bi-x-diamond me-1"></i> Ecuaciones
                        </a>
                    </div>
                    <div>
                        
                        <div class="inc-routes-img text-center">
                            <img src="https://images.unsplash.com/photo-1503551723145-6c040742065b-v2?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1740" alt="Rutas sugeridas de la Incubadora 37">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4" id="focos">
                <div class="col-lg-6">
                    <div class="inc-card h-100">
                        <h3 class="mb-3">Estructura ligera</h3>
                        <h5 class="text-uppercase text-muted mb-3">1. Focos de innovaci&oacute;n</h5>
                        <ul class="inc-focus-list">
                            <li class="inc-focus-item">
                                <div class="inc-focus-icon"><i class="bi bi-cpu"></i></div>
                                <div>
                                    <strong>IA en Educaci&oacute;n</strong> (docentes | estudiantes): uso responsable y marcos de actuaci&oacute;n.
                                </div>
                            </li>
                            <li class="inc-focus-item">
                                <div class="inc-focus-icon"><i class="bi bi-diagram-3"></i></div>
                                <div>
                                    <strong>Metodolog&iacute;as Activas</strong>: ABP, gamificaci&oacute;n, flipped, rutinas de pensamiento.
                                </div>
                            </li>
                            <li class="inc-focus-item">
                                <div class="inc-focus-icon">
                                    <i class="bi bi-people"></i>
                                </div>
                                <div>
                                    <strong>Inclusi&oacute;n (UDL/4Inclusion)</strong>: accesibilidad, apoyos multimodales, co-dise&ntilde;o.
                                </div>
                            </li>
                            <li class="inc-focus-item">
                                <div class="inc-focus-icon"><i class="bi bi-tools"></i></div>
                                <div>
                                    <strong>Herramientas</strong>: radar trimestral de pruebas, qui&eacute;n las eval&uacute;a y para qu&eacute;.
                                </div>
                            </li>
                        </ul>
                        <div class="mt-4">
                            <a href="#banco" class="inc-cta">CTA: Explorar focos →</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inc-card h-100">
                        <div class="d-flex flex-column gap-3">
                            <div>
                                <h5 class="text-uppercase text-muted mb-2">2. Banco de Recursos</h5>
                                <p class="mb-1">Gu&iacute;as r&aacute;pidas, tutoriales propios, enlaces curados.</p>
                                <a href="#banco" class="inc-cta">CTA: Abrir gu&iacute;as →</a>
                            </div>
                            <div class="inc-divider"></div>
                            <div id="galeria">
                                <h5 class="text-uppercase text-muted mb-2">3. Galer&iacute;a S2S</h5>
                                <p class="mb-1">Evidencias con r&uacute;brica y plantilla duplicable entre centros.</p>
                                <a href="#galeria" class="inc-cta">CTA: Ver ejemplos →</a>
                            </div>
                            <div class="inc-divider"></div>
                            <div id="propon">
                                <h5 class="text-uppercase text-muted mb-2">4. Prop&oacute;n tu Idea</h5>
                                <p class="mb-1">Formulario simple + revisi&oacute;n previa a publicaci&oacute;n.</p>
                                <a href="#formulario" class="inc-cta">CTA: Lanzar mi idea al Lab →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5" id="enteros">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="inc-section-title mb-2">Incubadora de matemáticas</h2>
            <p class="mb-5" style="font-size: 1.2rem; color: #666;">Repaso con números enteros</p>

            <!-- ESTRATEGIA 1 -->
            <div class="inc-card mb-5">
                <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
                    <div class="d-flex align-items-center gap-3">
                        <span class="badge bg-primary fs-6">Estrategia 1</span>
                        <h3 class="mb-0 h4">Clínica de errores “caza el bug”</h3>
                    </div>
                    <div class="btn-group" role="group">
                        <input type="radio" class="btn-check" name="strat1Options" id="optionA" autocomplete="off" checked onchange="toggleStrategy1()">
                        <label class="btn btn-outline-primary" for="optionA">Opción A</label>

                        <input type="radio" class="btn-check" name="strat1Options" id="optionB" autocomplete="off" onchange="toggleStrategy1()">
                        <label class="btn btn-outline-primary" for="optionB">Opción B</label>
                    </div>
                </div>

                <!-- OPCIÓN A -->
                <div id="strat1-optA">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <h5 class="text-primary mb-3">Objetivo y Dinámica</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i><strong>Objetivo:</strong> dejar de fallar en suma/resta con signos distintos y en “restar un negativo”.</li>
                                <li class="mb-2"><i class="bi bi-box-seam text-primary me-2"></i><strong>Producto final:</strong> “mi bug dominante” + antídoto en 3 reglas.</li>
                            </ul>
                            <div class="bg-light p-3 rounded mb-3">
                                <strong>Dinámica (clase 1):</strong>
                                <ul class="mb-0 mt-2">
                                    <li>En papel: 12 operaciones mezcladas.</li>
                                    <li>Predicción: marcar negativas/positivas antes de calcular.</li>
                                    <li>Con IA (modo detective): enseñar a la IA dónde se rompe la lógica.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h5 class="text-primary mb-3">Prompt (IA socrática)</h5>
                            <div class="p-3 bg-white border rounded">
                                <p class="mb-2 fst-italic text-muted">“Eres mi aprendiz de matemáticas. No sabes resolver todavía.
                                    Te voy a enseñar cómo lo hago en papel y tú debes ayudarme a encontrar mi primer error.
                                    Reglas: no me des el resultado final. Solo hazme una pregunta cada vez.
                                    Aquí está mi procedimiento: [pego mi paso a paso].
                                    Pregúntame hasta que yo detecte el error y lo corrija.”</p>
                            </div>
                            <div class="mt-3">
                                <strong>Cierre (Bug tag):</strong> signos distintos / doble negativo / confundo suma y resta...
                            </div>
                        </div>
                    </div>
                </div>

                <!-- OPCIÓN B -->
                <div id="strat1-optB" style="display: none;">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <h5 class="text-primary mb-3">Sesión 1: El "Bug" de los Signos</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-check-circle text-success me-2"></i><strong>Objetivo:</strong> Diferenciar suma de valores absolutos vs resta.</li>
                            </ul>
                            <div class="bg-light p-3 rounded mb-3">
                                <strong>La Dinámica:</strong>
                                <p class="mb-0 small">Los alumnos entrenan a una IA programada para fallar. Piden resolver 5 operaciones y la IA falla a propósito. El alumno explica el error usando metáforas (dinero/recta).</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h5 class="text-primary mb-3">Prompt sugerido</h5>
                            <div class="p-3 bg-white border rounded">
                                <p class="mb-2 fst-italic text-muted">"Actúa como un estudiante de 1º de ESO que se confunde siempre con los signos. Resuelve −8+5 diciendo que es +13 porque 8+5 son 13 y el signo es el del primero. Yo seré tu profesor y te explicaré paso a paso por qué te has equivocado usando el ejemplo de dinero en el banco."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ESTRATEGIA 2 -->
            <div class="inc-card mb-5">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <span class="badge bg-primary fs-6">Estrategia 2</span>
                    <h3 class="mb-0 h4">Dojo de signos + “pista única”</h3>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <p><strong>Objetivo:</strong> automatizar decisiones rápidas (mismo signo sumo, distinto resto...).</p>
                        <p><strong>Producto final:</strong> “cinturón” (nivel) + lista personal de trampas.</p>
                        <div class="bg-light p-3 rounded">
                            <strong>Dinámica (clase 2):</strong> 5 rondas de 2 min (tipo videojuego). La IA solo recibe resultados, valida <strong>Correcto / Incorrecto</strong> y da UNA pista si fallas.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="text-primary mb-2">Prompt</h5>
                        <div class="p-3 bg-white border rounded">
                            <p class="mb-0 fst-italic text-muted line-clamp-3">“Modo dojo de enteros. Dame 6 operaciones con signos distintos. Yo respondo solo resultados. Tú respondes <strong>Correcto / Incorrecto</strong>. Si fallo, dame una sola pista y ponme un gemelo casi igual.”</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ESTRATEGIA 3 -->
            <div class="inc-card mb-5">
                <div class="d-flex align-items-center gap-3 mb-3">
                    <span class="badge bg-primary fs-6">Estrategia 3</span>
                    <h3 class="mb-0 h4">Taller de problemas “traductor”</h3>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <p><strong>Objetivo:</strong> que no se bloqueen con enunciados (palabras ↔ enteros).</p>
                        <ul class="list-unstyled small">
                            <li><strong>Plantilla fija:</strong> Datos / Traducción / Operación / Resultado + frase.</li>
                            <li><strong>Dinámica:</strong> La IA hace de “alumno”. Solo pregunta para traducir, no resuelve.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="text-primary mb-2">Prompt</h5>
                        <div class="p-3 bg-white border rounded">
                            <p class="mb-0 fst-italic text-muted">“Eres un alumno que se pierde con problemas... Te voy a enseñar a traducir... No resuelvas. Solo hazme preguntas...”</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- EVALUACIÓN -->
            <!-- RESUMEN -->
            <div class="col-12 mt-5">
                <div class="p-4 rounded border bg-white">
                    <h4 class="mb-3 text-primary">Resumen de la Estrategia para el Aula</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Sesión</th>
                                    <th>Foco del Error</th>
                                    <th>Rol del Alumno</th>
                                    <th>Herramienta Conceptual</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>1. Sumas/Restas</strong></td>
                                    <td>Confundir sumar con restar</td>
                                    <td>Tutor de IA</td>
                                    <td>Recta numérica / Deudas</td>
                                </tr>
                                <tr>
                                    <td><strong>2. Mult/Div</strong></td>
                                    <td>Aplicar mal la "Regla de Signos"</td>
                                    <td>Auditor de errores</td>
                                    <td>Tabla comparativa de reglas</td>
                                </tr>
                                <tr>
                                    <td><strong>3. Problemas</strong></td>
                                    <td>Falta de comprensión lectora</td>
                                    <td>Arquitecto de contextos</td>
                                    <td>Traducción Lenguaje-Matemáticas</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="alert alert-warning d-flex align-items-center mb-0 mt-3" role="alert">
                         <i class="bi bi-exclamation-triangle-fill me-2 fs-4"></i>
                         <div>
                            <strong>Nota para el docente:</strong>
                            <ul class="mb-0 mt-1 small">
                                <li><strong>Validación:</strong> Pide a los alumnos que hagan una captura de pantalla de la explicación más clara que le hayan dado a la IA.</li>
                                <li><strong>Meta-reflexión:</strong> Al final de cada clase, pregunta: "¿Qué ha sido lo más difícil de explicarle a la IA?". Eso te dará la clave de lo que aún no comprenden ellos.</li>
                            </ul>
                         </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- SECCIÓN ECUACIONES -->
    <div class="container-xxl py-5" style="background-color: #fafbfc;" id="ecuaciones">
        <div class="container wow fadeInUp" data-wow-delay="0.1s">
            <h2 class="inc-section-title mb-2">Incubadora de matemáticas</h2>
            <p class="mb-5" style="font-size: 1.2rem; color: #666;">Repaso con ecuaciones de primer grado</p>

            <div class="row g-5">
                <!-- SESIÓN 1 -->
                <div class="col-lg-12">
                     <div class="inc-card mb-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="badge bg-primary fs-6">Estrategia 1</span>
                            <h3 class="mb-0 h4">El detector de errores (foco en el procedimiento)</h3>
                        </div>
                        <p class="mb-4">El objetivo es que el alumno entienda que una ecuación es una <strong>balanza</strong> y que cada movimiento debe estar justificado. Evitaremos que "pasen cosas al otro lado" de forma mágica.</p>
                        
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="bg-light p-3 rounded h-100">
                                    <h5 class="text-primary mb-2"><i class="bi bi-play-circle me-2"></i>Dinámica</h5>
                                    <p class="mb-3">El alumno resuelve en papel y usa la IA para validar el "hilo lógico". La IA tiene prohibido dar la solución final; solo puede actuar como un sensor de errores.</p>
                                    <div class="alert alert-info border-0 mb-0">
                                        <strong><i class="bi bi-trophy me-2"></i>El reto:</strong> Conseguir el distintivo de <strong>"Código limpio"</strong> en 5 ecuaciones de dificultad ascendente.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 border rounded h-100 bg-white">
                                    <h5 class="text-secondary mb-2"><i class="bi bi-chat-quote me-2"></i>Prompt sugerido</h5>
                                    <p class="fst-italic text-muted small mb-0">"Actúa como un profesor que solo sabe decir 'sí' o 'no'. Voy a resolver la ecuación X. Te voy a escribir mi primer paso. Si es correcto, dime 'Lógica impecable, sigue'. Si he cometido un error (especialmente con los signos o la propiedad distributiva), dime 'Hay un fallo en este paso' y hazme una pregunta para que yo mismo encuentre el error. No me des la respuesta."</p>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>

                <!-- SESIÓN 2 -->
                <div class="col-lg-12">
                     <div class="inc-card mb-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                             <span class="badge bg-primary fs-6">Estrategia 2</span>
                            <h3 class="mb-0 h4">Las ecuaciones gemelas (foco en las trampas visuales)</h3>
                        </div>
                        <p class="mb-4">Aquí atacamos la impulsividad. Los alumnos suelen operar lo primero que ven sin mirar la estructura.</p>
                        
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="bg-light p-3 rounded h-100">
                                    <h5 class="text-primary mb-2"><i class="bi bi-play-circle me-2"></i>Dinámica</h5>
                                    <p class="mb-3">La IA genera dos ecuaciones que parecen casi iguales pero se resuelven de forma distinta. El alumno debe explicar la diferencia antes de tocar el lápiz.</p>
                                    <div class="table-responsive bg-white rounded border p-2 mb-0">
                                        <table class="table table-sm table-borderless mb-0 small">
                                            <thead>
                                                <tr class="border-bottom">
                                                    <th>Ec. A</th>
                                                    <th>Ec. B</th>
                                                    <th>¿Trampa?</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2(x+5)</td>
                                                    <td>2x+5</td>
                                                    <td class="text-muted">El 2 multiplica...</td>
                                                </tr>
                                                <tr>
                                                    <td>-x+3=5</td>
                                                    <td>x-3=5</td>
                                                    <td class="text-muted">El signo cambia...</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 border rounded h-100 bg-white">
                                    <h5 class="text-secondary mb-2"><i class="bi bi-chat-quote me-2"></i>Prompt sugerido</h5>
                                    <p class="fst-italic text-muted small mb-0">"Genera 3 parejas de 'ecuaciones gemelas' para 1º de ESO. Deben parecerse mucho pero tener una diferencia clave (un paréntesis, un signo negativo delante, o una fracción). No las resuelvas. Pregúntame cuál es la diferencia técnica entre ambas y, cuando te lo explique bien, ayúdame a resolver la que me parezca más difícil."</p>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>

                <!-- SESIÓN 3 -->
                <div class="col-lg-12">
                     <div class="inc-card mb-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                             <span class="badge bg-primary fs-6">Estrategia 3</span>
                            <h3 class="mb-0 h4">El traductor de historias (foco en problemas)</h3>
                        </div>
                         <p class="mb-4">"La IA escéptica". El alumno propone una ecuación para un problema y la IA intenta buscarle las cosquillas a esa traducción.</p>
                        
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="bg-light p-3 rounded h-100">
                                    <h5 class="text-primary mb-2"><i class="bi bi-play-circle me-2"></i>Dinámica</h5>
                                    <p class="mb-2"><strong>Fase de papel:</strong> Se les dan 3 problemas clásicos (edades, huchas, perímetros).</p>
                                    <p class="mb-0">El alumno usa la IA como crítico, no para resolver. La IA preguntará "¿Qué representa la X?" o "¿Tu ecuación refleja ese paréntesis?".</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 border rounded h-100 bg-white">
                                    <h5 class="text-secondary mb-2"><i class="bi bi-chat-quote me-2"></i>Prompt sugerido</h5>
                                    <p class="fst-italic text-muted small mb-0">"Soy un traductor de problemas a matemáticas. Para este problema: [Pegar enunciado], mi propuesta de ecuación es: [Pegar ecuación]. Tu trabajo es actuar como un crítico. No me digas si el resultado es correcto. Dime: 1. ¿Qué representa la X? 2. ¿Mi ecuación refleja los datos? 3. Inventa un final alternativo."</p>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>

                <!-- RESUMEN -->
                <div class="col-12">
                    <div class="p-4 rounded border bg-white">
                        <h4 class="mb-3 text-primary">Resumen de la estrategia de repaso</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="table-light">
                                    <tr>
                                        <th>Clase</th>
                                        <th>Actividad</th>
                                        <th>Fallo que corrige</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>1</strong></td>
                                        <td>El detector de errores</td>
                                        <td>Saltarse pasos y errores de cálculo básico.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>2</strong></td>
                                        <td>Las ecuaciones gemelas</td>
                                        <td>Errores de lectura y propiedad distributiva.</td>
                                    </tr>
                                    <tr>
                                        <td><strong>3</strong></td>
                                        <td>El traductor de historias</td>
                                        <td>Bloqueo ante el lenguaje algebraico.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="alert alert-warning d-flex align-items-center mb-0 mt-3" role="alert">
                             <i class="bi bi-exclamation-triangle-fill me-2 fs-4"></i>
                             <div>
                                <strong>Nota para el docente:</strong> Es vital que en la Clase 1 insistas en que si la IA les da la solución directamente, han "perdido la partida". El juego consiste en que ellos enseñen a la IA que son capaces de encontrar sus propios fallos.
                             </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        function toggleStrategy1() {
            const optA = document.getElementById('strat1-optA');
            const optB = document.getElementById('strat1-optB');
            const radioA = document.getElementById('optionA');

            if (radioA.checked) {
                optA.style.display = 'block';
                optB.style.display = 'none';
            } else {
                optA.style.display = 'none';
                optB.style.display = 'block';
            }
        }
    </script>


    <!-- Footer común -->
    <?php
        $img = "../../..";
        $pages = "../..";
        $index = "../../..";
        include "../../../footer.php";
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
