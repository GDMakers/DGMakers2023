<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Sistemas 1 · Conecta 37</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="../../../../img/favicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script id="MathJax-script" src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js" defer></script>

    <!-- Template Stylesheet -->
    <link href="../../../../css/style.css" rel="stylesheet">

    <style>
        .inc-card {
            background: #ffffff;
            border: 1px solid rgba(1, 81, 131, 0.1);
            border-radius: 1.25rem;
            padding: 1.75rem;
            box-shadow: 0 1.5rem 2.4rem rgba(1, 81, 131, 0.08);
        }
        .inc-card h4 { font-weight: 700; color: #0F172A; }
        .form-label {
            font-weight: 600;
            color: #015183;
            font-family: 'Open Sans', sans-serif;
        }
        .form-select, .form-control, .form-select option {
            font-family: 'Open Sans', sans-serif;
        }
        .result-box {
            background: #f8f9fa;
            border: 1px dashed rgba(1, 81, 131, 0.25);
            border-radius: 0.5rem;
            padding: 1.5rem;
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            white-space: pre-wrap;
        }
        .hero-header {
            background: linear-gradient(135deg, var(--primary) 0%, #0E82C7 100%);
            color: #ffffff;
            position: relative;
            overflow: hidden;
        }
        .hero-header::before,
        .hero-header::after {
            content: "";
            position: absolute;
            width: 420px;
            height: 420px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.06);
        }
        .hero-header::before { top: -140px; left: -60px; }
        .hero-header::after { bottom: -180px; right: -120px; }
        .hero-content { position: relative; z-index: 1; }
        .hero-chip {
            display: inline-block;
            padding: 0.35rem 0.9rem;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.18);
            color: #ffffff;
            font-weight: 700;
            letter-spacing: 0.01em;
        }
        .hero-chip-alt { background: rgba(255, 255, 255, 0.26); }
        .hero-highlights { color: #e8f4ff; font-weight: 600; }
        .hero-highlights i { color: #ffdd57; margin-right: 0.35rem; }
        .section-title small {
            letter-spacing: 0.08em;
            text-transform: uppercase;
            font-weight: 800;
            color: var(--primary);
        }
        .section-title h3 { font-weight: 800; margin-bottom: 0.35rem; }
        .mini-step {
            padding: 0.75rem 1rem;
            border-radius: 0.85rem;
            background: #f1f5f9;
            font-weight: 600;
            color: #0F172A;
            border: 1px solid rgba(1, 81, 131, 0.08);
        }
        .mini-step span { color: var(--primary); font-weight: 800; margin-right: 0.35rem; }
        #placeholderArea {
            background: #f8fafc;
            border: 1px dashed rgba(1, 81, 131, 0.2);
            border-radius: 1rem;
        }
        .tab-content .btn.btn-sm { border-radius: 999px; }

        .exercise-box{
            background:#f8fafc;
            border:1px solid rgba(1,81,131,0.10);
            border-radius:0.9rem;
            padding:1rem;
        }
        .exercise-title{
            font-weight:800;
            color:#0F172A;
        }
        .math-big{
            font-size:1.15rem;
            font-weight:800;
            letter-spacing:0.01em;
            color:#0F172A;
        }
        .hint-chip{
            display:inline-flex;
            align-items:center;
            gap:.35rem;
            padding:.25rem .65rem;
            border-radius:999px;
            background:rgba(1,81,131,.08);
            color:#015183;
            font-weight:700;
            font-size:.85rem;
        }

        /* NUEVO: selector de modo (igual que Enteros) */
        .mode-card{
            background:#ffffff;
            border:1px solid rgba(1,81,131,0.12);
            border-radius:1rem;
            padding:1rem;
            cursor:pointer;
            transition:transform .08s ease, box-shadow .08s ease;
        }
        .mode-card:hover{
            transform: translateY(-1px);
            box-shadow: 0 .75rem 1.25rem rgba(1,81,131,0.10);
        }
        .mode-card.active{
            border-color: rgba(1,81,131,0.35);
            box-shadow: 0 .75rem 1.25rem rgba(1,81,131,0.14);
        }
        .mode-title{
            font-weight:800;
            color:#0F172A;
            margin-bottom:.15rem;
        }
        .mode-sub{
            color:#64748b;
            margin:0;
            font-size:.95rem;
        }
        .progress-chip{
            display:inline-flex;
            align-items:center;
            gap:.4rem;
            padding:.25rem .65rem;
            border-radius:999px;
            background:#f1f5f9;
            border:1px solid rgba(1,81,131,0.10);
            font-weight:800;
            color:#0F172A;
        }
        .small-muted{
            color:#64748b;
            font-size:.9rem;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php
        $img = "../../../..";
        $pages = "../../..";
        $index = "../../../..";
        include "../../../../menu.php";
    ?>

    <!-- Hero -->
    <div class="container-fluid hero-header mb-5">
        <div class="container py-5 hero-content">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10 text-center text-lg-start">
                    <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-lg-start mb-3">
                        <span class="hero-chip">3º-4º ESO</span>
                        <span class="hero-chip hero-chip-alt">Sistemas de ecuaciones</span>
                        <span class="hero-chip">IA + entrenador</span>
                    </div>
                    <h1 class="display-3 text-white animated slideInDown mb-2">Sistemas 1</h1>
                    <p class="fs-4 text-white-50 mb-4">Diagnóstico / Test · Minitest (2) o Test (10, 2 a 2) + prompt automático</p>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start hero-highlights gap-4">
                        <div><i class="bi bi-bullseye"></i>Elige modo, resuelve y pega pasos</div>
                        <div><i class="bi bi-lightning-charge"></i>Prompt listo para copiar y corregir tu proceso</div>
                        <div><i class="bi bi-joystick"></i>Training guiado y mini-examen</div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mt-4 gap-3">
                        <a class="btn btn-light btn-lg px-4" href="#diagnostico">Empieza</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="https://chatgpt.com/g/g-694eea87201081918336c32beee1309f-c37-tutor-de-sistemas" target="_blank" rel="noopener">C37 · Tutor de sistemas</a>
                        <span class="hero-chip hero-chip-alt">Listo en menos de 2 minutos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido -->
    <div class="container-xxl py-5" id="diagnostico">
        <div class="container">

            <div class="row g-4 align-items-center mb-4">
                <div class="col-12">
                    <div class="section-title">
                        <small>Diagnóstico / test</small>
                        <h3>Minitest (2) o test (10, 2 a 2) + prompt automático</h3>
                        <p class="text-muted mb-0">
                            Elige modo, resuelve y pega pasos. Se genera un prompt listo para copiar y corregir tu proceso.
                        </p>

                        <!-- Selector de modo -->
                        <div class="row g-3 mt-3">
                            <div class="col-md-6">
                                <div id="modeQuickCard" class="mode-card active" onclick="setMode('quick')">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="mode-title">Minitest</div>
                                            <p class="mode-sub">2 sistemas · prompt directo</p>
                                        </div>
                                        <span class="hint-chip"><i class="bi bi-lightning-charge"></i>2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="modeDetailCard" class="mode-card" onclick="setMode('detail')">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="mode-title">Test</div>
                                            <p class="mode-sub">10 ejercicios (2×5) · incluye problema final</p>
                                        </div>
                                        <span class="hint-chip"><i class="bi bi-layers"></i>10</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12">
                    <div class="d-flex flex-column flex-md-row align-items-stretch gap-3 mt-1">
                        <div class="mini-step flex-fill"><span>1</span>Haz ejercicios</div>
                        <div class="mini-step flex-fill"><span>2</span>Pega tus pasos</div>
                        <div class="mini-step flex-fill"><span>3</span>Recibe prompts + plan</div>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <!-- Columna Izquierda -->
                <div class="col-lg-5">
                    <div class="inc-card">
                        <h4 class="mb-3">Mini-diagnóstico por evidencia</h4>
                        <p class="text-muted mb-4">No me digas “me lío”. Muéstrame tu proceso y detectamos el bug real.</p>

                        <form id="bugForm">
                            <!-- Preferencia de explicación -->
                            <div class="mb-3">
                                <label class="form-label">0. ¿Cómo quieres que te expliquen?</label>
                                <select class="form-select" id="pref_style">
                                    <option value="substitution">Paso a paso con sustitución</option>
                                    <option value="elimination">Paso a paso con eliminación</option>
                                    <option value="minimal">Directo y corto (pero sin saltos)</option>
                                    <option value="visual">Visual (idea rápida + comprobación)</option>
                                </select>
                            </div>

                            <!-- =========================
                                 MODO 1: MINITEST (2)
                                 ========================= -->
                            <div id="quickModeBlock">
                                <!-- Sistema 1 fijo -->
                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title">Ejercicio 1 (muy básico)</div>
                                        <span class="hint-chip"><i class="bi bi-bug-fill"></i>leer ecuación simple</span>
                                    </div>
                                    <div class="math-big mb-2" id="ex1_text">—</div>

                                    <label class="form-label mb-1">Tu resultado (x, y)</label>
                                    <input class="form-control mb-2" id="ex1_answer" placeholder="Ejemplo: x=2, y=−1" />

                                    <label class="form-label mb-1">Pega tus pasos (2–8 líneas)</label>
                                    <textarea class="form-control" id="ex1_steps" rows="4" placeholder="Ejemplo:
De −y=7 saco y=−7
Sustituyo en x+y=3
Resuelvo x
Compruebo"></textarea>
                                </div>

                                <!-- Sistema 2 complejo variables a ambos lados -->
                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title">Ejercicio 2 (variables a ambos lados)</div>
                                        <span class="hint-chip"><i class="bi bi-bug-fill"></i>pasar términos / simplificar</span>
                                    </div>
                                    <div class="math-big mb-2" id="ex2_text">—</div>

                                    <label class="form-label mb-1">Tu resultado (x, y)</label>
                                    <input class="form-control mb-2" id="ex2_answer" placeholder="Ejemplo: x=1, y=3" />

                                    <label class="form-label mb-1">Pega tus pasos (3–12 líneas)</label>
                                    <textarea class="form-control" id="ex2_steps" rows="4" placeholder="Ejemplo:
Paso cx al lado izquierdo
Reduzco términos
Elimino una variable
Sustituyo y compruebo"></textarea>
                                </div>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-outline-secondary" onclick="regenExercisesQuick()">
                                        <i class="bi bi-arrow-repeat me-1"></i> Cambiar ejercicio 2
                                    </button>
                                    <div class="small text-muted align-self-center">El ejercicio 1 es fijo. El 2 cambia (mismo estilo).</div>
                                </div>
                            </div>

                            <!-- =========================
                                 MODO 2: TEST (10, de 2 en 2)
                                 ========================= -->
                            <div id="detailModeBlock" class="d-none">

                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="progress-chip" id="detailProgressChip"><i class="bi bi-layers"></i> Tanda 1/5 · 2/10</span>
                                    <button type="button" class="btn btn-outline-secondary btn-sm" onclick="resetDetailedTest()">
                                        <i class="bi bi-arrow-repeat me-1"></i> Reiniciar test
                                    </button>
                                </div>

                                <div class="small-muted mb-3">
                                    Progresivo: básico → sustitución → eliminación → signos/escala → variables a ambos lados → problema final.
                                </div>

                                <!-- Ejercicio A -->
                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title" id="d_exA_title">Ejercicio —</div>
                                        <span class="hint-chip" id="d_exA_hint"><i class="bi bi-bug-fill"></i>—</span>
                                    </div>
                                    <div class="math-big mb-2" id="d_exA_text">—</div>

                                    <div id="d_exA_setup_wrap" class="mb-2 d-none">
                                        <label class="form-label mb-1">Tu planteamiento (sistema) — obligatorio en problema</label>
                                        <textarea class="form-control" id="d_exA_setup" rows="3" placeholder="Escribe el sistema que planteas (2 ecuaciones)."></textarea>
                                    </div>

                                    <label class="form-label mb-1">Tu resultado (x, y)</label>
                                    <input class="form-control mb-2" id="d_exA_answer" placeholder="Ej: x=..., y=..." />

                                    <label class="form-label mb-1">Pega tus pasos (mín. 3 líneas)</label>
                                    <textarea class="form-control" id="d_exA_steps" rows="4" placeholder="Un cambio por línea. Si cambias un signo, escríbelo."></textarea>
                                </div>

                                <!-- Ejercicio B -->
                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title" id="d_exB_title">Ejercicio —</div>
                                        <span class="hint-chip" id="d_exB_hint"><i class="bi bi-bug-fill"></i>—</span>
                                    </div>
                                    <div class="math-big mb-2" id="d_exB_text">—</div>

                                    <div id="d_exB_setup_wrap" class="mb-2 d-none">
                                        <label class="form-label mb-1">Tu planteamiento (sistema) — obligatorio en problema</label>
                                        <textarea class="form-control" id="d_exB_setup" rows="3" placeholder="Escribe el sistema que planteas (2 ecuaciones)."></textarea>
                                    </div>

                                    <label class="form-label mb-1">Tu resultado (x, y)</label>
                                    <input class="form-control mb-2" id="d_exB_answer" placeholder="Ej: x=..., y=..." />

                                    <label class="form-label mb-1">Pega tus pasos (mín. 3 líneas)</label>
                                    <textarea class="form-control" id="d_exB_steps" rows="4" placeholder="Un cambio por línea. Si cambias un signo, escríbelo."></textarea>
                                </div>

                                <div class="d-flex gap-2">
                                    <button type="button" class="btn btn-outline-secondary" onclick="prevPair()" id="btnPrevPair" disabled>
                                        <i class="bi bi-arrow-left me-1"></i> Anterior
                                    </button>
                                    <button type="button" class="btn btn-primary" onclick="savePairAndNext()" id="btnNextPair">
                                        Guardar y siguiente <i class="bi bi-arrow-right ms-1"></i>
                                    </button>
                                </div>

                                <div class="small text-muted mt-2">
                                    Consejo: al final, comprueba sustituyendo (x,y) en las dos ecuaciones.
                                </div>
                            </div>

                            <!-- Plan opcional -->
                            <div class="mb-3 mt-4">
                                <label class="form-label">Extra (opcional): ¿quieres que también te proponga un plan largo?</label>
                                <select class="form-select" id="plan_choice">
                                    <option value="ask">Pregúntame después (recomendado)</option>
                                    <option value="10min">Sí, plan rápido 10 minutos</option>
                                    <option value="2x45">Sí, plan 2 días (2×45’)</option>
                                    <option value="training">Sí, training guiado (3 rondas)</option>
                                    <option value="exam">Sí, mini-examen (6 min)</option>
                                </select>
                            </div>

                            <div class="d-grid mt-3">
                                <button type="button" class="btn btn-primary btn-lg" onclick="handleGenerate()">
                                    <i class="bi bi-magic me-2"></i> Generar prompts
                                </button>
                            </div>

                            <div class="small text-muted mt-3">
                                <i class="bi bi-shield-check me-1"></i>
                                Esto NO te da la solución: genera un prompt para que tu tutor/IA corrija tu proceso paso a paso.
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Columna Derecha -->
                <div class="col-lg-7">
                    <div id="resultArea" class="inc-card h-100" style="display:none;">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="mb-0 text-primary">Tu kit anti-bug</h4>
                            <small class="text-muted">Listo para copiar</small>
                        </div>

                        <div class="mb-4">
                            <span class="badge bg-danger fs-6 me-2" id="badgePrimary"></span>
                            <span class="badge bg-warning text-dark fs-6" id="badgeSecondary"></span>
                        </div>

                        <ul class="nav nav-tabs mb-3" id="promptTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="p1-tab" data-bs-toggle="tab" data-bs-target="#p1" type="button" role="tab">1. Diagnóstico</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="p2-tab" data-bs-toggle="tab" data-bs-target="#p2" type="button" role="tab">2. Micro-plan</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="p3-tab" data-bs-toggle="tab" data-bs-target="#p3" type="button" role="tab">3. Training</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="p4-tab" data-bs-toggle="tab" data-bs-target="#p4" type="button" role="tab">4. Examen</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link bg-light" id="pall-tab" data-bs-toggle="tab" data-bs-target="#pall" type="button" role="tab"><strong>Pack completo</strong></button>
                            </li>
                        </ul>

                        <div class="tab-content" id="promptTabsContent">
                            <div class="tab-pane fade show active" id="p1" role="tabpanel">
                                <div class="position-relative">
                                    <button class="btn btn-sm btn-outline-secondary position-absolute top-0 end-0 m-2" onclick="copyToClipboard('txtP1')">Copiar</button>
                                    <div class="result-box" id="txtP1"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="p2" role="tabpanel">
                                <div class="position-relative">
                                    <button class="btn btn-sm btn-outline-secondary position-absolute top-0 end-0 m-2" onclick="copyToClipboard('txtP2')">Copiar</button>
                                    <div class="result-box" id="txtP2"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="p3" role="tabpanel">
                                <div class="position-relative">
                                    <button class="btn btn-sm btn-outline-secondary position-absolute top-0 end-0 m-2" onclick="copyToClipboard('txtP3')">Copiar</button>
                                    <div class="result-box" id="txtP3"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="p4" role="tabpanel">
                                <div class="position-relative">
                                    <button class="btn btn-sm btn-outline-secondary position-absolute top-0 end-0 m-2" onclick="copyToClipboard('txtP4')">Copiar</button>
                                    <div class="result-box" id="txtP4"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pall" role="tabpanel">
                                <div class="position-relative">
                                    <button class="btn btn-sm btn-outline-primary position-absolute top-0 end-0 m-2" onclick="copyToClipboard('txtPAll')">Copiar todo</button>
                                    <div class="result-box" id="txtPAll"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="placeholderArea" class="text-center py-5 text-muted">
                        <i class="bi bi-arrow-left-circle display-4 mb-3 d-block"></i>
                        Elige modo, resuelve y pega tus pasos para desbloquear tu kit.
                    </div>

                    <!-- Mapa de Bugs -->
                    <div class="mt-4">
                        <p class="d-inline-flex gap-1">
                            <a class="btn btn-outline-secondary btn-sm" data-bs-toggle="collapse" href="#collapseMap" role="button" aria-expanded="false" aria-controls="collapseMap">
                                Ver mapa de bugs (JSON)
                            </a>
                        </p>
                        <div class="collapse" id="collapseMap">
                            <div class="card card-body bg-light small font-monospace">
                                <pre id="jsonDisplay"></pre>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- Footer -->
    <?php
        $img = "../../..";
        $pages = "../..";
        $index = "../../..";
        include "../../../../footer.php";
    ?>

    <script>
        // ------------------------------------------------------------
        // Estado de modo
        // ------------------------------------------------------------
        let currentMode = "quick"; // quick | detail

        function setMode(mode){
            currentMode = mode;

            document.getElementById("modeQuickCard").classList.toggle("active", mode === "quick");
            document.getElementById("modeDetailCard").classList.toggle("active", mode === "detail");

            document.getElementById("quickModeBlock").classList.toggle("d-none", mode !== "quick");
            document.getElementById("detailModeBlock").classList.toggle("d-none", mode !== "detail");

            // reset outputs
            document.getElementById("resultArea").style.display = "none";
            document.getElementById("placeholderArea").style.display = "block";

            if(mode === "quick"){
                initQuick();
            } else {
                resetDetailedTest();
            }
        }

        function handleGenerate(){
            if(currentMode === "quick"){
                generatePromptsQuick();
            } else {
                generatePromptsDetailed();
            }
        }

        // ------------------------------------------------------------
        // Utils
        // ------------------------------------------------------------
        const UMINUS = "−";
        function rint(min, max) { return Math.floor(Math.random() * (max - min + 1)) + min; }

        function normalizeMinus(s) {
            return (s || "")
                .replaceAll("−", "-")
                .replaceAll("·", "*")
                .replaceAll("×", "*")
                .replaceAll(":", "/")
                .trim();
        }

        function renderMath(id, latex) {
            const el = document.getElementById(id);
            if (!el) return;
            el.textContent = latex;
            if (window.MathJax && MathJax.typesetPromise) {
                MathJax.typesetPromise([el]).catch(() => {});
            }
        }

        function prefLabel(pref) {
            if (pref === "visual") return "Visual (idea rápida + comprobación)";
            if (pref === "elimination") return "Paso a paso con eliminación";
            if (pref === "minimal") return "Directo y corto (pero sin saltos)";
            return "Paso a paso con sustitución";
        }

        // parsea respuestas tipo:
        // "x=2, y=-1" | "2,-1" | "(2,-1)" | "x:2 y:-1"
        function parseXY(s){
            const t = normalizeMinus(s).toLowerCase();
            if(!t) return null;

            // caso explícito x= y=
            const mx = t.match(/x\s*[:=]\s*([+-]?\d+(?:\.\d+)?)/);
            const my = t.match(/y\s*[:=]\s*([+-]?\d+(?:\.\d+)?)/);
            if(mx && my){
                return { x: Number(mx[1]), y: Number(my[1]) };
            }

            // caso par "a,b" o "a b"
            const nums = t.replace(/[()]/g," ").match(/[+-]?\d+(?:\.\d+)?/g);
            if(nums && nums.length >= 2){
                return { x: Number(nums[0]), y: Number(nums[1]) };
            }

            return null;
        }

        function approxEqual(a,b,eps=1e-9){ return Math.abs(a-b) < eps; }

        // ------------------------------------------------------------
        // BUG MAP (sistemas) + extras
        // ------------------------------------------------------------
        const bugMap = {
          "bugs": [
            { "id": "copier", "name": "El Copiador", "weakness": "Copia mal términos o signos al pasar de línea", "focus": "Re-escritura exacta", "exercise_pack": "copy_terms", "traps": ["cambia signo", "pierde término"], "default_mantra": "STOP: copia antes de operar" },
            { "id": "eliminator", "name": "El Eliminador", "weakness": "Intenta eliminar sin igualar coeficientes", "focus": "Escalar y sumar/restar", "exercise_pack": "elimination_basic", "traps": ["variable equivocada", "coeficientes no iguales"], "default_mantra": "STOP: iguala coef y elimina" },
            { "id": "sign_switcher", "name": "El Cambia-signos", "weakness": "Signos al sumar/restar ecuaciones", "focus": "Signos de cada término", "exercise_pack": "signs_systems", "traps": ["signos invertidos", "resta mal"], "default_mantra": "STOP: copia signos antes de sumar" },
            { "id": "substitutor", "name": "El Sustituidor", "weakness": "Despeja mal o sustituye en ecuación incorrecta", "focus": "Despejar limpio + sustituir", "exercise_pack": "substitution_steps", "traps": ["despeje errado", "sustituye en mal ecuación"], "default_mantra": "STOP: despeja bien, luego sustituye" },
            { "id": "distributor", "name": "El Distribuidor", "weakness": "Falla la distributiva al multiplicar una ecuación", "focus": "Multiplicar cada término", "exercise_pack": "distribute_system", "traps": ["olvida término", "signo mal"], "default_mantra": "STOP: multiplica TODO" },
            { "id": "rearranger", "name": "El Reordenador", "weakness": "Se pierde al pasar términos a un lado y reducir", "focus": "Mover términos sin cambiar signos + reducir ordenado", "exercise_pack": "both_sides_systems", "traps": ["pasa con signo mal", "reduce mal"], "default_mantra": "STOP: mueve con signo, reduce después" },
            { "id": "context_translator", "name": "El Traductor de contexto", "weakness": "Plantea mal el sistema desde un problema", "focus": "Definir variables + 2 frases → 2 ecuaciones", "exercise_pack": "word_problem_systems", "traps": ["variable mal definida", "ecuación mal construida"], "default_mantra": "STOP: define x,y y traduce frase a ecuación" },
            { "id": "verifier_zero", "name": "El Verificador cero", "weakness": "No sustituye para comprobar (x,y)", "focus": "Check en ambas ecuaciones", "exercise_pack": "verify_system", "traps": ["no comprueba", "acepta valores incoherentes"], "default_mantra": "STOP: sustituye y comprueba" },
            { "id": "step_skipper", "name": "El Saltador de pasos", "weakness": "1–2 líneas sin proceso", "focus": "Un cambio por línea", "exercise_pack": "show_steps_system", "traps": ["salto mental", "mezcla operaciones"], "default_mantra": "STOP: escribe el paso" }
          ]
        };
        document.getElementById('jsonDisplay').textContent = JSON.stringify(bugMap, null, 2);
        function getBugById(id) { return bugMap.bugs.find(b => b.id === id); }
        const tieBreak = ["rearranger","substitutor","eliminator","sign_switcher","distributor","context_translator","copier","step_skipper","verifier_zero"];

        // ------------------------------------------------------------
        // MODO 1 (MINITEST): ejercicio 1 fijo + ejercicio 2 generado
        // ------------------------------------------------------------
        let exDataQuick = {
            ex1: { text:"", expected:{x:10, y:-7} },
            ex2: { text:"", expected:{x:0, y:0} }
        };

        function latexSystem(eq1, eq2){
            return `\\begin{cases} ${eq1} \\\\ ${eq2} \\end{cases}`;
        }

        function initQuick(){
            // Ejercicio 1 fijo
            exDataQuick.ex1 = {
                text: latexSystem("x + y = 3", "-y = 7"),
                expected: { x: 10, y: -7 }
            };
            renderMath("ex1_text", exDataQuick.ex1.text);

            // Ejercicio 2 generado
            generateQuickComplex();
            // limpiar inputs
            document.getElementById("ex1_answer").value = "";
            document.getElementById("ex2_answer").value = "";
            document.getElementById("ex1_steps").value = "";
            document.getElementById("ex2_steps").value = "";
        }

        function generateQuickComplex(){
            // Queremos solución entera controlada
            const x = rint(-4, 6);
            const y = rint(-4, 6);

            // Eq1: ax + by = cx + d  => (a-c)x + b y = d
            let a = rint(1,6);
            let c = rint(0,6);
            while(a === c) c = rint(0,6);
            let b = rint(1,6);
            const d = (a - c)*x + b*y;

            // Eq2: ex - fy = -hy + x + j => ex - fy = x - hy + j
            let e = rint(1,7);
            let f = rint(1,7);
            let h = rint(0,7);
            // evita degeneraciones tontas
            if(e === 1 && (h - f) === 0) e = 2;
            const j = (e - 1)*x + (h - f)*y;

            const eq1 = `${a}x + ${b}y = ${c}x + ${d}`;
            const eq2 = `${e}x ${UMINUS} ${f}y = ${UMINUS}${h}y + x + ${j}`;

            exDataQuick.ex2 = {
                text: latexSystem(eq1, eq2),
                expected: { x, y }
            };

            renderMath("ex2_text", exDataQuick.ex2.text);
        }

        function regenExercisesQuick(){
            generateQuickComplex();
            document.getElementById("ex2_answer").value = "";
            document.getElementById("ex2_steps").value = "";
            document.getElementById("resultArea").style.display = "none";
            document.getElementById("placeholderArea").style.display = "block";
        }

        // ------------------------------------------------------------
        // MODO 2 (TEST 10): 10 ejercicios, de 2 en 2
        // ------------------------------------------------------------
        let detailedSet = [];        // [{id,title,hint,text,expected,type,extra}]
        let detailedEvidence = [];   // [{answer,steps,setup}]
        let currentPair = 0;         // 0..4

        function genBothSidesSystem(x,y){
            let a = rint(1,6), b = rint(1,6), c = rint(0,6);
            while(a===c) c = rint(0,6);
            const d = (a-c)*x + b*y;

            let e = rint(1,7), f = rint(1,7), h = rint(0,7);
            if(e === 1 && (h - f) === 0) e = 2;
            const j = (e-1)*x + (h-f)*y;

            const eq1 = `${a}x + ${b}y = ${c}x + ${d}`;
            const eq2 = `${e}x ${UMINUS} ${f}y = ${UMINUS}${h}y + x + ${j}`;
            return { latex: latexSystem(eq1,eq2), expected:{x,y} };
        }

        function genElimSystem(x,y){
            // ax + by = c ; dx + ey = f con determinante != 0
            while(true){
                const a = rint(1,6), b = rint(1,6);
                const d = rint(1,6), e = rint(1,6);
                if(Math.abs(a*e - d*b) === 0) continue;
                const c = a*x + b*y;
                const f = d*x + e*y;
                const eq1 = `${a}x + ${b}y = ${c}`;
                const eq2 = `${d}x + ${e}y = ${f}`;
                return { latex: latexSystem(eq1,eq2), expected:{x,y} };
            }
        }

        function genSubSystem(x,y){
            // x + ky = n ; y = m (o x = m)
            const k = rint(1,6);
            const n = x + k*y;
            const eq1 = `x + ${k}y = ${n}`;
            const eq2 = `y = ${y}`;
            return { latex: latexSystem(eq1,eq2), expected:{x,y} };
        }

        function genProblem(){
            // problema simple de entradas + precios
            const x = rint(1,9);
            const y = rint(1,9);
            const totalEntradas = rint(20, 60);
            // que tenga solución entera: ajustamos totales con x,y reales
            const a = rint(1,4); // precio adulto
            const b = rint(1,4) + a; // precio joven >= adulto+1 para no liar demasiado
            const adults = rint(5, totalEntradas-5);
            const teens = totalEntradas - adults;
            const totalEuros = a*adults + b*teens;

            const text = `En un evento se vendieron ${totalEntradas} entradas. Las de tipo A cuestan ${a}€ y las de tipo B cuestan ${b}€. En total se recaudaron ${totalEuros}€. ¿Cuántas entradas A y cuántas B se vendieron?`;
            // x = A, y = B
            const expected = { x: adults, y: teens };
            const setupHint = `Sistema esperado (idea): x + y = ${totalEntradas} y ${a}x + ${b}y = ${totalEuros}`;
            return { text, expected, setupHint };
        }

        function generateDetailedSet(){
            detailedSet = [];

            // E1 fijo
            detailedSet.push({
                id:"E1",
                title:"muy básico",
                hint:"leer ecuación simple",
                type:"basic",
                text: latexSystem("x + y = 3", "-y = 7"),
                expected:{ x:10, y:-7 }
            });

            // E2 sustitución muy simple (y despejada)
            { const x=rint(-3,6), y=rint(-3,6);
              detailedSet.push({
                id:"E2", title:"sustitución (y despejada)", hint:"sustituir y",
                type:"substitution",
                text: genSubSystem(x,y).latex, expected:{x,y}
              });
            }

            // E3 sustitución (x despejada)
            { const x=rint(-4,7), y=rint(-4,7);
              const n = x + y;
              detailedSet.push({
                id:"E3", title:"sustitución (x despejada)", hint:"sustituir x",
                type:"substitution",
                text: latexSystem(`x = ${x}`, `x + y = ${n}`),
                expected:{x,y}
              });
            }

            // E4 eliminación fácil (coeficientes pequeños)
            { const x=rint(-4,6), y=rint(-4,6);
              detailedSet.push({
                id:"E4", title:"eliminación (simple)", hint:"eliminar sumando/restando",
                type:"elimination",
                text: genElimSystem(x,y).latex, expected:{x,y}
              });
            }

            // E5 eliminación con signos (negativos en solución)
            { const x=rint(-6,3), y=rint(-6,3);
              detailedSet.push({
                id:"E5", title:"eliminación (signos)", hint:"cuidado con signos",
                type:"signs",
                text: genElimSystem(x,y).latex, expected:{x,y}
              });
            }

            // E6 eliminación que suele requerir escalar (aumentamos probabilidad)
            { const x=rint(-5,7), y=rint(-5,7);
              // construimos a propósito con coeficientes distintos
              const a=2, b=3, d=3, e=1;
              const c=a*x + b*y;
              const f=d*x + e*y;
              detailedSet.push({
                id:"E6", title:"eliminación (escala)", hint:"multiplicar una ecuación",
                type:"scale",
                text: latexSystem(`${a}x + ${b}y = ${c}`, `${d}x + ${e}y = ${f}`),
                expected:{x,y}
              });
            }

            // E7 variables a ambos lados (simple)
            { const x=rint(-4,6), y=rint(-4,6);
              const a=rint(1,5), b=rint(1,5), c=rint(0,5);
              if(a===c) { /* nada */ }
              const d=(a-c)*x + b*y;
              const eq1 = `${a}x + ${b}y = ${c}x + ${d}`;
              const eq2 = `y = ${y}`;
              detailedSet.push({
                id:"E7", title:"variables a ambos lados (1)", hint:"pasar términos",
                type:"both_sides",
                text: latexSystem(eq1, eq2),
                expected:{x,y}
              });
            }

            // E8 variables a ambos lados (tipo pedido)
            { const x=rint(-4,6), y=rint(-4,6);
              const S = genBothSidesSystem(x,y);
              detailedSet.push({
                id:"E8", title:"variables a ambos lados (2)", hint:"ax+by=cx+d y ex−fy=−hy+x+j",
                type:"both_sides",
                text: S.latex,
                expected:{x,y}
              });
            }

            // E9 mixto más largo (pero entero)
            { const x=rint(-6,6), y=rint(-6,6);
              const eq1 = genElimSystem(x,y).latex;
              detailedSet.push({
                id:"E9", title:"mixto (comprobar)", hint:"resuelve y comprueba",
                type:"verify",
                text:eq1,
                expected:{x,y}
              });
            }

            // E10 problema final
            {
              const P = genProblem();
              detailedSet.push({
                id:"E10", title:"problema final", hint:"planteamiento → sistema",
                type:"problem",
                text:P.text,
                expected:P.expected,
                extra:{ setupHint:P.setupHint }
              });
            }

            detailedEvidence = new Array(10).fill(null).map(()=>({answer:"",steps:"",setup:""}));
        }

        function updateDetailProgress(){
            const done = currentPair * 2;
            const chip = document.getElementById("detailProgressChip");
            chip.innerHTML = `<i class="bi bi-layers"></i> Tanda ${currentPair+1}/5 · ${done+2}/10`;
            document.getElementById("btnPrevPair").disabled = (currentPair === 0);
            document.getElementById("btnNextPair").innerHTML = (currentPair === 4)
                ? `Guardar y terminar <i class="bi bi-check2 ms-1"></i>`
                : `Guardar y siguiente <i class="bi bi-arrow-right ms-1"></i>`;
        }

        function renderPair(){
            updateDetailProgress();

            const idxA = currentPair*2;
            const idxB = idxA + 1;

            const A = detailedSet[idxA];
            const B = detailedSet[idxB];

            document.getElementById("d_exA_title").innerText = `${A.id} · ${A.title}`;
            document.getElementById("d_exA_hint").innerHTML = `<i class="bi bi-bug-fill"></i>${A.hint}`;
            document.getElementById("d_exB_title").innerText = `${B.id} · ${B.title}`;
            document.getElementById("d_exB_hint").innerHTML = `<i class="bi bi-bug-fill"></i>${B.hint}`;

            // render texto: latex para sistemas, texto plano para problema
            if(A.type === "problem"){
                document.getElementById("d_exA_text").innerText = A.text;
            } else {
                renderMath("d_exA_text", A.text);
            }
            if(B.type === "problem"){
                document.getElementById("d_exB_text").innerText = B.text;
            } else {
                renderMath("d_exB_text", B.text);
            }

            // mostrar setup solo en problema
            document.getElementById("d_exA_setup_wrap").classList.toggle("d-none", A.type !== "problem");
            document.getElementById("d_exB_setup_wrap").classList.toggle("d-none", B.type !== "problem");

            if(A.type === "problem"){
                document.getElementById("d_exA_setup").placeholder = (A.extra && A.extra.setupHint) ? A.extra.setupHint : "Escribe el sistema que planteas (2 ecuaciones).";
            }
            if(B.type === "problem"){
                document.getElementById("d_exB_setup").placeholder = (B.extra && B.extra.setupHint) ? B.extra.setupHint : "Escribe el sistema que planteas (2 ecuaciones).";
            }

            // cargar evidencia guardada
            document.getElementById("d_exA_answer").value = detailedEvidence[idxA].answer || "";
            document.getElementById("d_exA_steps").value  = detailedEvidence[idxA].steps  || "";
            document.getElementById("d_exA_setup").value  = detailedEvidence[idxA].setup || "";

            document.getElementById("d_exB_answer").value = detailedEvidence[idxB].answer || "";
            document.getElementById("d_exB_steps").value  = detailedEvidence[idxB].steps  || "";
            document.getElementById("d_exB_setup").value  = detailedEvidence[idxB].setup || "";
        }

        function resetDetailedTest(){
            generateDetailedSet();
            currentPair = 0;
            renderPair();
            document.getElementById("resultArea").style.display = "none";
            document.getElementById("placeholderArea").style.display = "block";
        }

        function prevPair(){
            savePair(false);
            currentPair = Math.max(0, currentPair-1);
            renderPair();
        }

        function savePairAndNext(){
            const ok = savePair(true);
            if(!ok) return;

            if(currentPair < 4){
                currentPair++;
                renderPair();
            } else {
                alert("Test completado. Pulsa “Generar prompts”.");
            }
        }

        function savePair(enforceRequired){
            const idxA = currentPair*2;
            const idxB = idxA + 1;
            const A = detailedSet[idxA];
            const B = detailedSet[idxB];

            const aAns = document.getElementById("d_exA_answer").value.trim();
            const aSteps= document.getElementById("d_exA_steps").value.trim();
            const aSetup= document.getElementById("d_exA_setup").value.trim();

            const bAns = document.getElementById("d_exB_answer").value.trim();
            const bSteps= document.getElementById("d_exB_steps").value.trim();
            const bSetup= document.getElementById("d_exB_setup").value.trim();

            if(enforceRequired){
                if(!aAns || !aSteps || !bAns || !bSteps){
                    alert("Completa resultados y pasos en los 2 ejercicios de esta tanda.");
                    return false;
                }
                if(A.type === "problem" && !aSetup){
                    alert("En el problema, escribe también tu planteamiento (sistema).");
                    return false;
                }
                if(B.type === "problem" && !bSetup){
                    alert("En el problema, escribe también tu planteamiento (sistema).");
                    return false;
                }
            }

            detailedEvidence[idxA] = { answer:aAns, steps:aSteps, setup:aSetup };
            detailedEvidence[idxB] = { answer:bAns, steps:bSteps, setup:bSetup };
            return true;
        }

        // ------------------------------------------------------------
        // Scoring (simple y estable)
        // ------------------------------------------------------------
        function scoreFromQuick(ex1Ans, ex2Ans, ex1Steps, ex2Steps){
            let scores = {};
            bugMap.bugs.forEach(b => scores[b.id] = 0);

            const s1 = normalizeMinus(ex1Steps).toLowerCase();
            const s2 = normalizeMinus(ex2Steps).toLowerCase();
            const combined = s1 + "\n" + s2;

            const len = (s1+s2).replace(/\s+/g,"").length;
            if(len < 35) scores["step_skipper"] += 4;

            if(!/(compruebo|verifico|sustituyo en)/i.test(combined)) scores["verifier_zero"] += 2;

            const a1 = parseXY(ex1Ans);
            const a2 = parseXY(ex2Ans);

            if(!a1) scores["copier"] += 2;
            if(!a2) scores["copier"] += 2;

            if(a1){
                const exp = exDataQuick.ex1.expected;
                if(!approxEqual(a1.x, exp.x) || !approxEqual(a1.y, exp.y)){
                    scores["substitutor"] += 4;
                    scores["sign_switcher"] += 1;
                }
            }

            if(a2){
                const exp = exDataQuick.ex2.expected;
                if(!approxEqual(a2.x, exp.x) || !approxEqual(a2.y, exp.y)){
                    scores["rearranger"] += 5;
                    scores["eliminator"] += 2;
                }
            }

            // señales en pasos
            if(/paso.*al otro lado|cambio de signo|reduzco/i.test(combined)) scores["rearranger"] += 1;
            if(/elimino|sumo ecuaciones|resto ecuaciones/i.test(combined)) scores["eliminator"] += 1;
            if(/despejo|sustituyo/i.test(combined)) scores["substitutor"] += 1;
            if(/multiplico.*ecuaci[oó]n|distribu/i.test(combined)) scores["distributor"] += 1;
            if(/signo|negativo/i.test(combined)) scores["sign_switcher"] += 1;

            return scores;
        }

        function scoreFromDetailed(){
            let scores = {};
            bugMap.bugs.forEach(b => scores[b.id] = 0);

            for(let i=0;i<10;i++){
                const ex = detailedSet[i];
                const ev = detailedEvidence[i];
                const ans = parseXY(ev.answer);
                const stepText = normalizeMinus(ev.steps).toLowerCase();
                const clen = stepText.replace(/\s+/g,"").length;

                if(clen < 25) scores["step_skipper"] += 1;

                if(ex.type === "problem" && !ev.setup) scores["context_translator"] += 4;

                if(!/(compruebo|verifico|sustituyo para comprobar)/i.test(stepText)) scores["verifier_zero"] += 0.4;

                if(!ans) { scores["copier"] += 1; continue; }

                const exp = ex.expected;
                const ok = approxEqual(ans.x, exp.x) && approxEqual(ans.y, exp.y);
                if(!ok){
                    if(ex.type === "basic" || ex.type === "substitution") scores["substitutor"] += 3;
                    if(ex.type === "elimination" || ex.type === "scale") scores["eliminator"] += 3;
                    if(ex.type === "signs") scores["sign_switcher"] += 3;
                    if(ex.type === "both_sides") scores["rearranger"] += 4;
                    if(ex.type === "problem") scores["context_translator"] += 4;
                    scores["verifier_zero"] += 1;
                }
            }

            // clamp
            for (const k in scores) { if (scores[k] < 0) scores[k] = 0; }
            return scores;
        }

        function pickPrimarySecondary(scores) {
            let sorted = Object.entries(scores).sort((a, b) => {
                if (b[1] !== a[1]) return b[1] - a[1];
                return tieBreak.indexOf(a[0]) - tieBreak.indexOf(b[0]);
            });
            return { primary: sorted[0][0], secondary: sorted[1][0], sorted };
        }

        // ------------------------------------------------------------
        // PROMPTS
        // ------------------------------------------------------------
        function generatePromptsQuick(){
            const pref = document.getElementById('pref_style').value;

            const ex1Text = document.getElementById('ex1_text').textContent;
            const ex2Text = document.getElementById('ex2_text').textContent;

            const ex1Ans = document.getElementById('ex1_answer').value;
            const ex2Ans = document.getElementById('ex2_answer').value;

            const ex1Steps = document.getElementById('ex1_steps').value.trim();
            const ex2Steps = document.getElementById('ex2_steps').value.trim();

            if (!ex1Ans || !ex2Ans || !ex1Steps || !ex2Steps) {
                alert("Completa resultados y pega tus pasos en los 2 ejercicios.");
                return;
            }

            const planChoice = document.getElementById('plan_choice').value;

            const scores = scoreFromQuick(ex1Ans, ex2Ans, ex1Steps, ex2Steps);
            const picked = pickPrimarySecondary(scores);

            const primaryBug = getBugById(picked.primary);
            const secondaryBug = getBugById(picked.secondary);

            document.getElementById('placeholderArea').style.display = 'none';
            document.getElementById('resultArea').style.display = 'block';

            document.getElementById('badgePrimary').innerText = "Bug principal: " + primaryBug.name;
            document.getElementById('badgeSecondary').innerText = "Secundario: " + secondaryBug.name;

            const evidenceBlock =
`EVIDENCIA (USA SOLO ESTO):
Ejercicio 1:
${ex1Text}
Mi resultado: ${normalizeMinus(ex1Ans)}
Mis pasos:
${ex1Steps}

Ejercicio 2:
${ex2Text}
Mi resultado: ${normalizeMinus(ex2Ans)}
Mis pasos:
${ex2Steps}`;

            const p1 =
`Actúa como ENTRENADOR de matemáticas (sistemas, 3º-4º ESO).

REGLAS:
- NO me des la solución completa del sistema.
- Corrige MI PROCESO, no solo el resultado.
- Cita la LÍNEA exacta donde aparece el bug (copiándola).
- Haz 1 pregunta cada vez.

PREFERENCIA:
- ${prefLabel(pref)}

DIAGNÓSTICO PREVIO (web):
- Bug principal: "${primaryBug.name}"
- Bug secundario: "${secondaryBug.name}"
- Debilidad: ${primaryBug.weakness}
- Foco: ${primaryBug.focus}
- Trampas: ${primaryBug.traps.join(", ")}

${evidenceBlock}

TAREAS:
1) Detecta mi bug REAL mirando mis pasos (si el bug previo está mal, corrígelo).
2) Dime en 2 frases por qué caigo ahí.
3) Señala el paso exacto donde me equivoqué (cita la línea).
4) Dame UNA pista para rehacer el ejercicio 1 sin resolverlo entero.
5) Hazme 1 pregunta de control.`;

            const p2 =
`Actúa como coach de estudio (sistemas, 3º-4º ESO). Quiero un micro-plan que funcione ya.

MI BUG:
- "${primaryBug.name}"
- Debilidad: ${primaryBug.weakness}
- Foco: ${primaryBug.focus}
- Mantra STOP: ${primaryBug.default_mantra}

PREFERENCIA:
- ${prefLabel(pref)}

MICRO-PLAN (60–90 s):
A) Regla-motor (1 frase).
B) Checklist (3 checks).
C) Ritual durante (3 pasos, un cambio por línea).
D) Verificación exprés (2 checks) sustituyendo (x,y).
E) Ejemplo mini (NO resuelvas): uno parecido y dime solo el primer paso correcto.

DESPUÉS, PREGÚNTAME:
¿Plan largo? (10 min / 2×45’ / training / mini-examen).`;

            const p3 =
`Actúa como mi ENTRENADOR JIT de sistemas (3º-4º ESO).

REGLAS:
- Dame SOLO el EJERCICIO 1.
- Yo pego mi proceso.
- Tú: línea del bug + microfeedback + 1 pista.
- NO des soluciones completas.

Mi bug: "${primaryBug.name}"
Pack: ${primaryBug.exercise_pack}
Trampas: ${primaryBug.traps.join(", ")}
Preferencia: ${prefLabel(pref)}

MISIÓN:
Genera 3 sistemas del pack y empieza con EJERCICIO 1 (solo enunciado).`;

            const p4 =
`Genera un MINI-EXAMEN de recuperación (sistemas, 3º-4º ESO).

REGLAS:
- Solo enunciados. NO resuelvas.
- 2 ejercicios, 5 puntos cada uno.
- Atacan mi bug.

Mi bug: "${primaryBug.name}"
Trampas: ${primaryBug.traps.join(", ")}
Preferencia: ${prefLabel(pref)}

EJERCICIO 1:
...

EJERCICIO 2:
...`;

            const pAll =
`=== PROMPT 1 (Diagnóstico por evidencia) ===
${p1}

=== PROMPT 2 (Micro-plan) ===
${p2}

=== PROMPT 3 (Training guiado) ===
${p3}

=== PROMPT 4 (Mini-examen) ===
${p4}

NOTA:
Si marqué en la web: “${planChoice}”, respétalo si procede.`;

            document.getElementById('txtP1').innerText = p1;
            document.getElementById('txtP2').innerText = p2;
            document.getElementById('txtP3').innerText = p3;
            document.getElementById('txtP4').innerText = p4;
            document.getElementById('txtPAll').innerText = pAll;
        }

        function generatePromptsDetailed(){
            savePair(false);

            // validar evidencia 10/10
            for(let i=0;i<10;i++){
                const ev = detailedEvidence[i];
                const ex = detailedSet[i];
                if(!ev.answer || !ev.steps){
                    alert("Te falta completar alguna tanda del test. Ve pasando por todas (10 ejercicios).");
                    return;
                }
                if(ex.type === "problem" && !ev.setup){
                    alert("En el problema final falta tu planteamiento (sistema).");
                    return;
                }
            }

            const pref = document.getElementById('pref_style').value;
            const planChoice = document.getElementById('plan_choice').value;

            const scores = scoreFromDetailed();
            const picked = pickPrimarySecondary(scores);
            const primaryBug = getBugById(picked.primary);
            const secondaryBug = getBugById(picked.secondary);

            document.getElementById('placeholderArea').style.display = 'none';
            document.getElementById('resultArea').style.display = 'block';

            document.getElementById('badgePrimary').innerText = "Bug principal: " + primaryBug.name;
            document.getElementById('badgeSecondary').innerText = "Secundario: " + secondaryBug.name;

            // evidencia completa
            let evidenceBlock = `EVIDENCIA REAL (10 ejercicios):\n`;
            for(let i=0;i<10;i++){
                const ex = detailedSet[i];
                const ev = detailedEvidence[i];

                evidenceBlock += `\n${ex.id} · ${ex.title}\n`;
                evidenceBlock += `Enunciado:\n${(ex.type === "problem") ? ex.text : ex.text}\n`;
                if(ex.type === "problem"){
                    evidenceBlock += `Mi planteamiento (sistema):\n${ev.setup}\n`;
                }
                evidenceBlock += `Mi resultado: ${normalizeMinus(ev.answer)}\nMis pasos:\n${ev.steps}\n`;
            }

            const p1 =
`Actúa como ENTRENADOR de matemáticas (sistemas, 3º-4º ESO).
Objetivo: detectar dificultades por evidencia y preparar el próximo examen.

REGLAS (minimalista):
- Informe: máx. 12 líneas.
- Luego 5 actividades personalizadas (solo enunciados).
- Luego 1 actividad modelo resuelta en 5–7 líneas.
- Cita 2–3 evidencias copiando UNA LÍNEA exacta del alumno.
- Termina con 1 pregunta.

PREFERENCIA:
- ${prefLabel(pref)}

DIAGNÓSTICO PREVIO (web):
- Bug principal sugerido: "${primaryBug.name}"
- Bug secundario sugerido: "${secondaryBug.name}"

LISTA DE BUGS (elige y confirma):
- Copiar términos/signos
- Eliminación (igualar coeficientes)
- Signos al sumar/restar ecuaciones
- Sustitución (despejar/sustituir)
- Distributiva al multiplicar una ecuación
- Reordenar (pasar términos a un lado y reducir)
- Traducir problema a sistema
- Saltar pasos
- Verificar sustituyendo

PROGRESIÓN USADA:
T1 básico → T2 sustitución → T3 eliminación → T4 signos/escala → T5 variables a ambos lados → problema

${evidenceBlock}

TAREAS:
1) Detecta BUG PRINCIPAL + SECUNDARIO por mis pasos (si el previo está mal, corrígelo).
2) INFORME (máx. 12 líneas): dónde fallo, por qué, 2–3 evidencias (cita la línea), regla motor, checklist.
3) 5 ACTIVIDADES para el próximo examen (solo enunciados), progresivas:
   - 2 del bug principal
   - 2 mixtas (incluye “variables a ambos lados”)
   - 1 problema final (planteamiento de sistema)
4) Elige 1 y haz ACTIVIDAD MODELO resuelta (5–7 líneas), centrada en mi bug.
5) Pregunta final (1): ¿repetimos 5 más o subimos dificultad?`;

            const p2 =
`Actúa como coach: crea un micro-plan (1 minuto) para mi bug principal "${primaryBug.name}".
Formato: 6 líneas máximo.
Incluye: regla motor + checklist (3) + verificación (2).`;

            const p3 =
`Actúa como ENTRENADOR JIT (sistemas). Genera 3 sistemas centrados en "${primaryBug.name}".
Reglas: un ejercicio cada vez; espera mis pasos; cita la línea exacta del bug. Empieza por EJERCICIO 1.`;

            const p4 =
`Genera un mini-examen (2 ejercicios) centrado en "${primaryBug.name}".
Solo enunciados; dificultad 3º-4º ESO; 1 problema con planteamiento.`;

            const pAll =
`=== PROMPT (DETALLADO) ===
${p1}

=== EXTRA (micro-plan) ===
${p2}

=== EXTRA (training) ===
${p3}

=== EXTRA (mini-examen) ===
${p4}

NOTA:
Si marqué en la web: “${planChoice}”, respétalo si procede.`;

            document.getElementById('txtP1').innerText = p1;
            document.getElementById('txtP2').innerText = p2;
            document.getElementById('txtP3').innerText = p3;
            document.getElementById('txtP4').innerText = p4;
            document.getElementById('txtPAll').innerText = pAll;

            const firstTab = document.getElementById("p1-tab");
            if(firstTab) firstTab.click();
        }

        function copyToClipboard(elementId) {
            const text = document.getElementById(elementId).innerText;
            navigator.clipboard.writeText(text).then(() => {
                alert("¡Copiado al portapapeles!");
            });
        }

        // Init
        document.addEventListener("DOMContentLoaded", () => {
            initQuick();
            setMode("quick");
        });
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../../lib/wow/wow.min.js"></script>
    <script src="../../../../lib/easing/easing.min.js"></script>
    <script src="../../../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../../../lib/counterup/counterup.min.js"></script>
    <script src="../../../../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../../../lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../../../js/main.js"></script>
</body>

</html>
