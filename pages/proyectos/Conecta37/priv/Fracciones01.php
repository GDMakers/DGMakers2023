<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Fracciones 2 · Conecta 37</title>
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

    <!-- MathJax -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

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
            padding:.35rem 0;
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
        .bug-card {
            height: 100%;
            border: 1px solid #e2e8f0;
            border-radius: 0.75rem;
            padding: 1rem;
            background: white;
            transition: transform 0.2s;
        }
        .bug-card:hover { transform: translateY(-2px); border-color: var(--primary); }
    </style>
</head>

<body>
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
                        <span class="hero-chip">1º-2º ESO</span>
                        <span class="hero-chip hero-chip-alt">Fracciones + paréntesis</span>
                        <span class="hero-chip">IA + entrenador</span>
                    </div>
                    <h1 class="display-3 text-white animated slideInDown mb-2">Fracciones 2</h1>
                    <p class="fs-4 text-white-50 mb-4">Minitest o test · Prompt automático por evidencia</p>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start hero-highlights gap-4">
                        <div><i class="bi bi-bullseye"></i>Diagnóstico por evidencia (pasos)</div>
                        <div><i class="bi bi-lightning-charge"></i>Micro-plan automático</div>
                        <div><i class="bi bi-joystick"></i>Training + mini-examen</div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mt-4 gap-3">
                        <a class="btn btn-light btn-lg px-4" href="#diagnostico">Empieza</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="https://chatgpt.com/g/g-694ee517f4f881918066890d635519b5-c37-tutor-de-fracciones" target="_blank" rel="noopener">C37 · Tutor de fracciones</a>
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

                        <!-- Selector de modo (2 “botones” debajo del texto) -->
                        <div class="row g-3 mt-3">
                            <div class="col-md-6">
                                <div id="modeQuickCard" class="mode-card active" onclick="setMode('quick')">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="mode-title">Opción 1 · minitest</div>
                                            <p class="mode-sub">2 ejercicios · prompt directo</p>
                                        </div>
                                        <span class="hint-chip"><i class="bi bi-lightning-charge"></i>2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="modeDetailCard" class="mode-card" onclick="setMode('detail')">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="mode-title">Opción 2 · test</div>
                                            <p class="mode-sub">10 actividades (2×5) · prompt completo</p>
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
                        <div class="mini-step flex-fill"><span>1</span>Haz actividades</div>
                        <div class="mini-step flex-fill"><span>2</span>Pega tus pasos</div>
                        <div class="mini-step flex-fill"><span>3</span>Genera prompt</div>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <!-- Columna Izquierda: ACTIVIDADES -->
                <div class="col-lg-5">
                    <div class="inc-card">
                        <h4 class="mb-3">Actividades (por evidencia)</h4>
                        <p class="text-muted mb-4">No me digas “me lío”. Pega tu proceso y detectamos el bug real.</p>

                        <form id="bugForm">

                            <!-- Preferencia -->
                            <div class="mb-3">
                                <label class="form-label">0. ¿Cómo quieres que te expliquen?</label>
                                <select class="form-select" id="pref_style">
                                    <option value="visual">Visual (recta / pizza)</option>
                                    <option value="mcm_first">Paso a paso con mcm</option>
                                    <option value="clean_steps">Pasos limpios (un cambio por línea)</option>
                                    <option value="minimal">Directo (pero sin saltos)</option>
                                </select>
                            </div>

                            <!-- =========================
                                 MODO 1: MINITEST (2)
                                 ========================= -->
                            <div id="quickModeBlock">

                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title">Ejercicio 1 (fracción + entero)</div>
                                        <span class="hint-chip"><i class="bi bi-bug-fill"></i>entero = n/1</span>
                                    </div>
                                    <div class="math-big mb-2" id="q_ex1_text">—</div>

                                    <label class="form-label mb-1">Tu resultado</label>
                                    <input class="form-control mb-2" id="q_ex1_answer" placeholder="Ej: 7/2 o 3/2 o 2" />

                                    <label class="form-label mb-1">Pega tus pasos (1–10 líneas)</label>
                                    <textarea class="form-control" id="q_ex1_steps" rows="4" placeholder="Ejemplo:
1/2 + 3
= 1/2 + 3/1
= ..."></textarea>
                                </div>

                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title">Ejercicio 2 (paréntesis)</div>
                                        <span class="hint-chip"><i class="bi bi-bug-fill"></i>orden + simplificar</span>
                                    </div>
                                    <div class="math-big mb-2" id="q_ex2_text">—</div>

                                    <label class="form-label mb-1">Tu resultado</label>
                                    <input class="form-control mb-2" id="q_ex2_answer" placeholder="Ej: -5/12" />

                                    <label class="form-label mb-1">Pega tus pasos (2–14 líneas)</label>
                                    <textarea class="form-control" id="q_ex2_steps" rows="4" placeholder="Ejemplo:
a/b - (c/d)(e/f - g/h)
= ..."></textarea>
                                </div>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-outline-secondary" onclick="regenQuick()">
                                        <i class="bi bi-arrow-repeat me-1"></i> Cambiar ejercicios
                                    </button>
                                    <div class="small text-muted align-self-center">Mismo estilo, números nuevos.</div>
                                </div>

                            </div>

                            <!-- =========================
                                 MODO 2: TEST (10, 2 a 2)
                                 ========================= -->
                            <div id="detailModeBlock" class="d-none">

                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="progress-chip" id="detailProgressChip"><i class="bi bi-layers"></i> Tanda 1/5 · 2/10</span>
                                    <button type="button" class="btn btn-outline-secondary btn-sm" onclick="resetDetailedTest()">
                                        <i class="bi bi-arrow-repeat me-1"></i> Reiniciar test
                                    </button>
                                </div>
                                <div class="small-muted mb-3">
                                    Progresivo: entero→fracción · suma/resta · ×/÷ · paréntesis · problema final.
                                </div>

                                <!-- Actividad A -->
                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title" id="d_exA_title">Actividad —</div>
                                        <span class="hint-chip" id="d_exA_hint"><i class="bi bi-bug-fill"></i>—</span>
                                    </div>
                                    <div class="math-big mb-2" id="d_exA_text">—</div>

                                    <div id="d_exA_expr_wrap" class="mb-2 d-none">
                                        <label class="form-label mb-1">Tu operación (obligatorio en el problema)</label>
                                        <input class="form-control" id="d_exA_expr" placeholder="Ej: 4 - 1/2 - (2/3)(1/2 + 1/3)" />
                                    </div>

                                    <label class="form-label mb-1">Tu resultado</label>
                                    <input class="form-control mb-2" id="d_exA_answer" placeholder="Ej: -5/12" />

                                    <label class="form-label mb-1">Pega tus pasos</label>
                                    <textarea class="form-control" id="d_exA_steps" rows="4" placeholder="Un cambio por línea."></textarea>
                                </div>

                                <!-- Actividad B -->
                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title" id="d_exB_title">Actividad —</div>
                                        <span class="hint-chip" id="d_exB_hint"><i class="bi bi-bug-fill"></i>—</span>
                                    </div>
                                    <div class="math-big mb-2" id="d_exB_text">—</div>

                                    <div id="d_exB_expr_wrap" class="mb-2 d-none">
                                        <label class="form-label mb-1">Tu operación (obligatorio en el problema)</label>
                                        <input class="form-control" id="d_exB_expr" placeholder="Ej: 4 - 1/2 - (2/3)(1/2 + 1/3)" />
                                    </div>

                                    <label class="form-label mb-1">Tu resultado</label>
                                    <input class="form-control mb-2" id="d_exB_answer" placeholder="Ej: 7/6" />

                                    <label class="form-label mb-1">Pega tus pasos</label>
                                    <textarea class="form-control" id="d_exB_steps" rows="4" placeholder="Un cambio por línea."></textarea>
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
                                    Consejo: ( ) primero → ×/÷ → +/− → simplifica al final.
                                </div>

                            </div>

                            <!-- Plan opcional -->
                            <div class="mb-3 mt-4">
                                <label class="form-label">Extra (opcional): ¿quieres plan largo?</label>
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

                <!-- Columna Derecha: PROMPT -->
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
                        Elige opción 1 o 2, resuelve y pega tus pasos para desbloquear tu kit.
                    </div>

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

            document.getElementById("resultArea").style.display = "none";
            document.getElementById("placeholderArea").style.display = "block";

            if(mode === "quick"){
                regenQuick();
            } else {
                resetDetailedTest();
            }
        }

        function handleGenerate(){
            if(currentMode === "quick") generatePromptsQuick();
            else generatePromptsDetailed();
        }

        // ------------------------------------------------------------
        // Racionales exactos (sin decimales)
        // ------------------------------------------------------------
        function gcd(a,b){
            a = Math.abs(a); b = Math.abs(b);
            while(b){ const t=a%b; a=b; b=t; }
            return a || 1;
        }
        class Rat{
            constructor(n,d){
                if(d===0) throw new Error("den=0");
                if(d<0){ n=-n; d=-d; }
                const g=gcd(n,d);
                this.n=n/g; this.d=d/g;
            }
            static fromInt(k){ return new Rat(k,1); }
            add(o){ return new Rat(this.n*o.d + o.n*this.d, this.d*o.d); }
            sub(o){ return new Rat(this.n*o.d - o.n*this.d, this.d*o.d); }
            mul(o){ return new Rat(this.n*o.n, this.d*o.d); }
            div(o){ return new Rat(this.n*o.d, this.d*o.n); }
            eq(o){ return this.n===o.n && this.d===o.d; }
            toString(){ return (this.d===1) ? String(this.n) : `${this.n}/${this.d}`; }
        }

        function normalizeMinus(s){
            return (s||"")
                .replaceAll("−","-")
                .replaceAll("·","*")
                .replaceAll("×","*")
                .replaceAll(":","/")
                .trim();
        }

        function parseRatLoose(s){
            let t = normalizeMinus(s).toLowerCase().replaceAll(" ","");
            if(!t) return null;

            // mixto: 3+1/2 o 3-1/2
            const mix = t.match(/^(-?\d+)([+-])(\d+)\/(\d+)$/);
            if(mix){
                const A=Number(mix[1]), sign=mix[2], num=Number(mix[3]), den=Number(mix[4]);
                if(!Number.isFinite(A)||!Number.isFinite(num)||!Number.isFinite(den)||den===0) return null;
                const base = Rat.fromInt(A);
                const frac = new Rat(num,den);
                return (sign==="+") ? base.add(frac) : base.sub(frac);
            }

            if(t.includes("/")){
                const p=t.split("/");
                if(p.length!==2) return null;
                const num=Number(p[0]), den=Number(p[1]);
                if(!Number.isFinite(num)||!Number.isFinite(den)||den===0) return null;
                return new Rat(num,den);
            }

            const n=Number(t);
            if(!Number.isFinite(n)) return null;
            return Rat.fromInt(n);
        }

        function rint(min,max){ return Math.floor(Math.random()*(max-min+1))+min; }
        function latexFrac(a,b){ return `\\frac{${a}}{${b}}`; }
        function typesetIds(ids){
            if(!window.MathJax) return;
            const els = ids.map(id=>document.getElementById(id)).filter(Boolean);
            MathJax.typesetPromise(els);
        }

        // ------------------------------------------------------------
        // BUG MAP (Fracciones)
        // ------------------------------------------------------------
        const bugMap = {
          "bugs": [
            { "id":"int_to_frac", "name":"El entero invisible", "weakness":"No convierte el entero a n/1", "focus":"Entero como fracción", "exercise_pack":"frac_plus_int", "traps":["no usa n/1","se salta el denominador 1"], "default_mantra":"STOP: entero = n/1" },
            { "id":"den_magic", "name":"El denominador mágico", "weakness":"Suma/resta usando (b+d)", "focus":"MCM y equivalentes", "exercise_pack":"add_sub_diff_den", "traps":["b+d","denominador incorrecto"], "default_mantra":"STOP: mcm primero, luego suma" },
            { "id":"hunter_mcm", "name":"El cazador de mcm", "weakness":"MCM mal elegido/incompleto", "focus":"MCM mínimo correcto", "exercise_pack":"mcm_small", "traps":["mcm gigante","olvida factor"], "default_mantra":"STOP: mcm más pequeño que sirva" },
            { "id":"nervous_inverter", "name":"El inversor nervioso", "weakness":"Divide sin invertir", "focus":"Dividir = multiplicar por la inversa", "exercise_pack":"divide_invert", "traps":["no invierte","invierte ambos"], "default_mantra":"STOP: ÷ = × inverso" },
            { "id":"wild_simplifier", "name":"El simplificador salvaje", "weakness":"Cancela donde no toca", "focus":"Simplificar solo en × o ÷", "exercise_pack":"simplify_product", "traps":["cancela en suma","cancela cruz mal"], "default_mantra":"STOP: simplifica SOLO en × o ÷" },
            { "id":"paren_skip", "name":"El saltador de paréntesis", "weakness":"No respeta el orden (paréntesis primero)", "focus":"Jerarquía: () → ×/÷ → +/−", "exercise_pack":"order_parentheses", "traps":["opera fuera antes","mezcla pasos"], "default_mantra":"STOP: primero paréntesis" },
            { "id":"sign_switcher", "name":"El cambia-signos", "weakness":"Pierde signos / resta mal", "focus":"Control de signos", "exercise_pack":"signs_add_sub", "traps":["resta al revés","doble negativo"], "default_mantra":"STOP: copia signos antes de operar" },
            { "id":"translator", "name":"El traductor", "weakness":"Del problema al cálculo", "focus":"Plantear operación correcta", "exercise_pack":"word_problem_fracs", "traps":["plantea mal","signo contrario"], "default_mantra":"STOP: escribe la operación antes de calcular" },
            { "id":"step_skipper", "name":"El saltador de pasos", "weakness":"Pocos pasos; error invisible", "focus":"Un cambio por línea", "exercise_pack":"show_steps_fracs", "traps":["salto mental","mezcla operaciones"], "default_mantra":"STOP: un cambio por línea" },
            { "id":"verifier_zero", "name":"El verificador cero", "weakness":"No simplifica ni comprueba", "focus":"Irreducible + sentido", "exercise_pack":"verify_fraction", "traps":["no simplifica","resultado sin sentido"], "default_mantra":"STOP: simplifica y estima" }
          ]
        };
        document.getElementById('jsonDisplay').textContent = JSON.stringify(bugMap, null, 2);
        function getBugById(id){ return bugMap.bugs.find(b=>b.id===id); }
        const tieBreak = ["translator","paren_skip","int_to_frac","hunter_mcm","den_magic","nervous_inverter","wild_simplifier","sign_switcher","step_skipper","verifier_zero"];

        function pickPrimarySecondary(scores){
            const sorted = Object.entries(scores).sort((a,b)=>{
                if(b[1]!==a[1]) return b[1]-a[1];
                return tieBreak.indexOf(a[0]) - tieBreak.indexOf(b[0]);
            });
            return { primary: sorted[0][0], secondary: sorted[1][0], sorted };
        }
        function prefLabel(pref){
            if(pref==="visual") return "Visual (recta / pizza)";
            if(pref==="mcm_first") return "Paso a paso con mcm";
            if(pref==="clean_steps") return "Pasos limpios (un cambio por línea)";
            if(pref==="minimal") return "Directo (pero sin saltos)";
            return "Paso a paso con mcm";
        }

        // ------------------------------------------------------------
        // MODO QUICK (2)
        // ------------------------------------------------------------
        let qData = {
            ex1: { latex:"", raw:"", expected: Rat.fromInt(0) },
            ex2: { latex:"", raw:"", expected: Rat.fromInt(0) }
        };

        function buildQuickEx1(){
            // a/b ± c (entero)
            const a=rint(1,9), b=rint(2,10);
            const c=rint(1,6);
            const op = (Math.random()<0.5) ? "+" : "-";
            const latex = `$$ ${latexFrac(a,b)} ${op} ${c} $$`;
            const raw = `${a}/${b} ${op} ${c}`;
            const expected = (op==="+") ? new Rat(a,b).add(Rat.fromInt(c)) : new Rat(a,b).sub(Rat.fromInt(c));
            return { latex, raw, expected };
        }
        function buildQuickEx2(){
            // a/b - (c/d)(e/f ± g/h)
            const a=rint(1,9), b=rint(2,10);
            const c=rint(1,6), d=rint(2,9);
            const e=rint(1,9), f=rint(2,10);
            const g=rint(1,9), h=rint(2,10);
            const innerOp = (Math.random()<0.5) ? "+" : "-";
            const latex = `$$ ${latexFrac(a,b)} - ${latexFrac(c,d)}\\left(${latexFrac(e,f)} ${innerOp} ${latexFrac(g,h)}\\right) $$`;
            const raw = `${a}/${b} - (${c}/${d})(${e}/${f} ${innerOp} ${g}/${h})`;
            const A=new Rat(a,b), CD=new Rat(c,d);
            const inner = (innerOp==="+") ? new Rat(e,f).add(new Rat(g,h)) : new Rat(e,f).sub(new Rat(g,h));
            const expected = A.sub(CD.mul(inner));
            return { latex, raw, expected };
        }

        function generateQuick(){
            qData.ex1 = buildQuickEx1();
            qData.ex2 = buildQuickEx2();

            document.getElementById("q_ex1_text").innerHTML = qData.ex1.latex;
            document.getElementById("q_ex2_text").innerHTML = qData.ex2.latex;

            typesetIds(["q_ex1_text","q_ex2_text"]);
        }

        function regenQuick(){
            generateQuick();
            document.getElementById("q_ex1_answer").value = "";
            document.getElementById("q_ex2_answer").value = "";
            document.getElementById("q_ex1_steps").value = "";
            document.getElementById("q_ex2_steps").value = "";
            document.getElementById("resultArea").style.display = "none";
            document.getElementById("placeholderArea").style.display = "block";
        }

        function scoreFromQuick(ex1Ans, ex2Ans, ex1Steps, ex2Steps){
            let scores={}; bugMap.bugs.forEach(b=>scores[b.id]=0);
            const s = (normalizeMinus(ex1Steps)+"\n"+normalizeMinus(ex2Steps)).toLowerCase();
            const len = s.replace(/\s+/g,"").length;
            if(len < 80) scores["step_skipper"] += 4;

            if(/mcm|minimo|denominad/.test(s)) scores["hunter_mcm"] += 2;
            if(/b\+d/.test(s)) scores["den_magic"] += 4;
            if(/simplif|irreduc/.test(s)) scores["verifier_zero"] -= 1;
            if(/cancelo|tacho/.test(s)) scores["wild_simplifier"] += 1;
            if(/par[eé]nt|primero|dentro/.test(s)) scores["paren_skip"] -= 1;

            const a1=parseRatLoose(ex1Ans), a2=parseRatLoose(ex2Ans);
            if(!a1 || !a1.eq(qData.ex1.expected)){
                scores["int_to_frac"] += 4;
                scores["hunter_mcm"] += 2;
                scores["den_magic"] += 1;
            } else scores["verifier_zero"] += 1;

            if(!a2 || !a2.eq(qData.ex2.expected)){
                scores["paren_skip"] += 5;
                scores["wild_simplifier"] += 2;
                scores["sign_switcher"] += 1;
            } else scores["verifier_zero"] += 1;

            // clamp
            for(const k in scores){ if(scores[k]<0) scores[k]=0; }
            return scores;
        }

        // ------------------------------------------------------------
        // MODO DETAIL (10, 2 a 2)
        // ------------------------------------------------------------
        let detailedSet = [];      // [{id,title,hint,latex,raw,expected,type,extra}]
        let detailedEvidence = []; // [{answer,steps,expr}]
        let currentPair = 0;       // 0..4

        function act_fracInt(){
            const a=rint(1,9), b=rint(2,10), c=rint(1,6);
            const op=(Math.random()<0.5)?"+":"-";
            const latex=`$$ ${latexFrac(a,b)} ${op} ${c} $$`;
            const raw=`${a}/${b} ${op} ${c}`;
            const expected=(op==="+")? new Rat(a,b).add(Rat.fromInt(c)) : new Rat(a,b).sub(Rat.fromInt(c));
            return { latex, raw, expected, type:"frac_int" };
        }
        function act_addSub(){
            const a=rint(1,9), b=rint(2,12), c=rint(1,9), d=rint(2,12);
            const op=(Math.random()<0.5)?"+":"-";
            const latex=`$$ ${latexFrac(a,b)} ${op} ${latexFrac(c,d)} $$`;
            const raw=`${a}/${b} ${op} ${c}/${d}`;
            const expected=(op==="+")? new Rat(a,b).add(new Rat(c,d)) : new Rat(a,b).sub(new Rat(c,d));
            return { latex, raw, expected, type:"add_sub" };
        }
        function act_mulDiv(){
            const a=rint(1,9), b=rint(2,12), c=rint(1,9), d=rint(2,12);
            const op=(Math.random()<0.5)?"mul":"div";
            const latexOp=(op==="mul")?"\\cdot":":";
            const rawOp=(op==="mul")?"*":":";
            const latex=`$$ ${latexFrac(a,b)} ${latexOp} ${latexFrac(c,d)} $$`;
            const raw=`${a}/${b} ${rawOp} ${c}/${d}`;
            const A=new Rat(a,b), C=new Rat(c,d);
            const expected=(op==="mul")? A.mul(C) : A.div(C);
            return { latex, raw, expected, type:op };
        }
        function act_paren(){
            const a=rint(1,9), b=rint(2,10);
            const c=rint(1,6), d=rint(2,9);
            const e=rint(1,9), f=rint(2,10);
            const g=rint(1,9), h=rint(2,10);
            const innerOp=(Math.random()<0.5)?"+":"-";
            const latex=`$$ ${latexFrac(a,b)} - ${latexFrac(c,d)}\\left(${latexFrac(e,f)} ${innerOp} ${latexFrac(g,h)}\\right) $$`;
            const raw=`${a}/${b} - (${c}/${d})(${e}/${f} ${innerOp} ${g}/${h})`;
            const A=new Rat(a,b), CD=new Rat(c,d);
            const inner=(innerOp==="+")? new Rat(e,f).add(new Rat(g,h)) : new Rat(e,f).sub(new Rat(g,h));
            const expected=A.sub(CD.mul(inner));
            return { latex, raw, expected, type:"paren" };
        }
        function act_paren_soft(){
            // a/b + (c/d - e/f)
            const a=rint(1,9), b=rint(2,10);
            const c=rint(1,9), d=rint(2,10);
            const e=rint(1,9), f=rint(2,10);
            const latex=`$$ ${latexFrac(a,b)} + \\left(${latexFrac(c,d)} - ${latexFrac(e,f)}\\right) $$`;
            const raw=`${a}/${b} + (${c}/${d} - ${e}/${f})`;
            const expected=new Rat(a,b).add(new Rat(c,d).sub(new Rat(e,f)));
            return { latex, raw, expected, type:"paren_soft" };
        }
        function act_problem(){
            // Problema con N - a/b - (c/d)(e/f ± g/h)
            const N=rint(2,7);
            const a=rint(1,3), b=rint(2,6);
            const c=rint(1,3), d=rint(2,6);
            const e=rint(1,3), f=rint(2,6);
            const g=rint(1,3), h=rint(2,6);
            const innerOp=(Math.random()<0.5)?"+":"-";
            const raw=`${N} - ${a}/${b} - (${c}/${d})(${e}/${f} ${innerOp} ${g}/${h})`;

            const expected =
                Rat.fromInt(N)
                    .sub(new Rat(a,b))
                    .sub(new Rat(c,d).mul(innerOp==="+" ? new Rat(e,f).add(new Rat(g,h)) : new Rat(e,f).sub(new Rat(g,h))));

            const latex =
`<div class="small text-muted mb-2">Enunciado:</div>
<div class="mb-2">
Tienes <strong>${N}</strong> litros de jarabe. Te bebes <strong>${latexFrac(a,b)}</strong> litros.
Luego preparas una mezcla que consume <strong>${latexFrac(c,d)}</strong> de
(<strong>${latexFrac(e,f)}</strong> ${innerOp==="+" ? "más" : "menos"} <strong>${latexFrac(g,h)}</strong>) litros.
¿Cuánto te queda?
</div>
<div class="small text-muted">Primero escribe la operación exacta.</div>`;

            return { latex, raw, expected, type:"problem", extra:{ placeholder:`Ej: ${raw}` } };
        }

        function generateDetailedSet(){
            const items = [];

            // 1..9 operaciones + 10 problema
            items.push({ id:"A1", title:"Actividad 1 (fracción + entero)", hint:"entero = n/1", ...act_fracInt() });
            items.push({ id:"A2", title:"Actividad 2 (suma/resta)", hint:"mcm", ...act_addSub() });
            items.push({ id:"A3", title:"Actividad 3 (× o ÷)", hint:"simplificar", ...act_mulDiv() });
            items.push({ id:"A4", title:"Actividad 4 (paréntesis suave)", hint:"( ) primero", ...act_paren_soft() });
            items.push({ id:"A5", title:"Actividad 5 (suma/resta)", hint:"mcm + signos", ...act_addSub() });
            items.push({ id:"A6", title:"Actividad 6 (× o ÷)", hint:"invertir si ÷", ...act_mulDiv() });
            items.push({ id:"A7", title:"Actividad 7 (fracción ± entero)", hint:"n/1", ...act_fracInt() });
            items.push({ id:"A8", title:"Actividad 8 (paréntesis)", hint:"orden + ×", ...act_paren() });
            items.push({ id:"A9", title:"Actividad 9 (paréntesis)", hint:"orden + simplificar", ...act_paren() });
            items.push({ id:"A10", title:"Actividad 10 (problema)", hint:"plantea primero", ...act_problem() });

            detailedSet = items;
            detailedEvidence = new Array(10).fill(null).map(()=>({answer:"",steps:"",expr:""}));
        }

        function updateDetailProgress(){
            const done = currentPair*2;
            const chip = document.getElementById("detailProgressChip");
            chip.innerHTML = `<i class="bi bi-layers"></i> Tanda ${currentPair+1}/5 · ${done+2}/10`;
            document.getElementById("btnPrevPair").disabled = (currentPair===0);
            document.getElementById("btnNextPair").innerHTML = (currentPair===4)
                ? `Guardar y terminar <i class="bi bi-check2 ms-1"></i>`
                : `Guardar y siguiente <i class="bi bi-arrow-right ms-1"></i>`;
        }

        function renderPair(){
            updateDetailProgress();

            const idxA=currentPair*2;
            const idxB=idxA+1;

            const A=detailedSet[idxA];
            const B=detailedSet[idxB];

            document.getElementById("d_exA_title").innerText = `${A.id} · ${A.title}`;
            document.getElementById("d_exA_hint").innerHTML = `<i class="bi bi-bug-fill"></i>${A.hint}`;
            document.getElementById("d_exB_title").innerText = `${B.id} · ${B.title}`;
            document.getElementById("d_exB_hint").innerHTML = `<i class="bi bi-bug-fill"></i>${B.hint}`;

            const wrapA=document.getElementById("d_exA_expr_wrap");
            const wrapB=document.getElementById("d_exB_expr_wrap");
            wrapA.classList.toggle("d-none", A.type!=="problem");
            wrapB.classList.toggle("d-none", B.type!=="problem");

            // pintar latex/html
            const elA=document.getElementById("d_exA_text");
            const elB=document.getElementById("d_exB_text");
            elA.innerHTML = A.type==="problem" ? A.latex : A.latex;
            elB.innerHTML = B.type==="problem" ? B.latex : B.latex;

            // placeholders expr en problema
            const exprA=document.getElementById("d_exA_expr");
            const exprB=document.getElementById("d_exB_expr");
            if(A.type==="problem") exprA.placeholder = (A.extra && A.extra.placeholder) ? A.extra.placeholder : "Escribe la operación";
            if(B.type==="problem") exprB.placeholder = (B.extra && B.extra.placeholder) ? B.extra.placeholder : "Escribe la operación";

            // cargar evidencia guardada
            document.getElementById("d_exA_answer").value = detailedEvidence[idxA].answer || "";
            document.getElementById("d_exA_steps").value  = detailedEvidence[idxA].steps  || "";
            document.getElementById("d_exA_expr").value   = detailedEvidence[idxA].expr   || "";

            document.getElementById("d_exB_answer").value = detailedEvidence[idxB].answer || "";
            document.getElementById("d_exB_steps").value  = detailedEvidence[idxB].steps  || "";
            document.getElementById("d_exB_expr").value   = detailedEvidence[idxB].expr   || "";

            // typeset
            if(window.MathJax) MathJax.typesetPromise([elA, elB]);
        }

        function resetDetailedTest(){
            generateDetailedSet();
            currentPair=0;
            renderPair();
            document.getElementById("resultArea").style.display="none";
            document.getElementById("placeholderArea").style.display="block";
        }

        function savePair(enforce){
            const idxA=currentPair*2, idxB=idxA+1;
            const A=detailedSet[idxA], B=detailedSet[idxB];

            const aAns=document.getElementById("d_exA_answer").value.trim();
            const aSteps=document.getElementById("d_exA_steps").value.trim();
            const aExpr=document.getElementById("d_exA_expr").value.trim();

            const bAns=document.getElementById("d_exB_answer").value.trim();
            const bSteps=document.getElementById("d_exB_steps").value.trim();
            const bExpr=document.getElementById("d_exB_expr").value.trim();

            if(enforce){
                if(!aAns||!aSteps||!bAns||!bSteps){
                    alert("Completa resultados y pega tus pasos en las 2 actividades de esta tanda.");
                    return false;
                }
                if(A.type==="problem" && !aExpr){
                    alert("En el problema, escribe también tu operación.");
                    return false;
                }
                if(B.type==="problem" && !bExpr){
                    alert("En el problema, escribe también tu operación.");
                    return false;
                }
            }

            detailedEvidence[idxA]={answer:aAns, steps:aSteps, expr:aExpr};
            detailedEvidence[idxB]={answer:bAns, steps:bSteps, expr:bExpr};
            return true;
        }

        function prevPair(){
            savePair(false);
            currentPair = Math.max(0, currentPair-1);
            renderPair();
        }

        function savePairAndNext(){
            const ok=savePair(true);
            if(!ok) return;

            if(currentPair<4){
                currentPair++;
                renderPair();
            } else {
                alert("Test completado. Pulsa “Generar prompts”.");
            }
        }

        function scoreFromDetailed(){
            let scores={}; bugMap.bugs.forEach(b=>scores[b.id]=0);

            for(let i=0;i<10;i++){
                const ex=detailedSet[i];
                const ev=detailedEvidence[i];
                const step = normalizeMinus(ev.steps).toLowerCase();
                const len = step.replace(/\s+/g,"").length;
                if(len < 40) scores["step_skipper"] += 1;

                if(/mcm|minimo|denominad/.test(step)) scores["hunter_mcm"] += 1;
                if(/b\+d/.test(step)) scores["den_magic"] += 2;
                if(/par[eé]nt|primero|dentro/.test(step)) scores["paren_skip"] = Math.max(0, scores["paren_skip"] - 1);
                if(/cancelo|tacho/.test(step)) scores["wild_simplifier"] += 1;
                if(/simplif|irreduc|compruebo|verifico/.test(step)) scores["verifier_zero"] = Math.max(0, scores["verifier_zero"] - 1);

                const ans = parseRatLoose(ev.answer);
                if(!ans || !ans.eq(ex.expected)){
                    if(ex.type==="frac_int"){ scores["int_to_frac"] += 4; scores["hunter_mcm"] += 1; }
                    if(ex.type==="add_sub"){ scores["hunter_mcm"] += 3; scores["den_magic"] += 2; scores["sign_switcher"] += 1; }
                    if(ex.type==="mul"){ scores["wild_simplifier"] += 3; }
                    if(ex.type==="div"){ scores["nervous_inverter"] += 5; scores["wild_simplifier"] += 1; }
                    if(ex.type==="paren" || ex.type==="paren_soft"){ scores["paren_skip"] += 4; scores["wild_simplifier"] += 1; }
                    if(ex.type==="problem"){
                        scores["translator"] += 6;
                        if(!ev.expr) scores["translator"] += 3;
                    }
                } else {
                    scores["verifier_zero"] += 1;
                }
            }

            for(const k in scores){ if(scores[k]<0) scores[k]=0; }
            return scores;
        }

        // ------------------------------------------------------------
        // PROMPTS (Quick / Detailed)
        // ------------------------------------------------------------
        function generatePromptsQuick(){
            const pref = document.getElementById("pref_style").value;

            const ex1Ans = document.getElementById("q_ex1_answer").value;
            const ex2Ans = document.getElementById("q_ex2_answer").value;
            const ex1Steps = document.getElementById("q_ex1_steps").value.trim();
            const ex2Steps = document.getElementById("q_ex2_steps").value.trim();

            if(!ex1Ans || !ex2Ans || !ex1Steps || !ex2Steps){
                alert("Completa resultados y pega tus pasos en los 2 ejercicios.");
                return;
            }

            const planChoice = document.getElementById("plan_choice").value;

            const scores = scoreFromQuick(ex1Ans, ex2Ans, ex1Steps, ex2Steps);
            const picked = pickPrimarySecondary(scores);
            const primaryBug = getBugById(picked.primary);
            const secondaryBug = getBugById(picked.secondary);

            document.getElementById('placeholderArea').style.display = 'none';
            document.getElementById('resultArea').style.display = 'block';
            document.getElementById('badgePrimary').innerText = "Bug principal: " + primaryBug.name;
            document.getElementById('badgeSecondary').innerText = "Secundario: " + secondaryBug.name;

            const evidenceBlock =
`EVIDENCIA REAL DEL ALUMNO:
Ejercicio 1: ${qData.ex1.raw}
Mi resultado: ${normalizeMinus(ex1Ans)}
Mis pasos:
${ex1Steps}

Ejercicio 2: ${qData.ex2.raw}
Mi resultado: ${normalizeMinus(ex2Ans)}
Mis pasos:
${ex2Steps}`;

            const p1 =
`Actúa como ENTRENADOR de matemáticas (fracciones, 1º-2º ESO).

REGLAS:
- NO me des la solución completa de golpe.
- Corrige MI PROCESO, no solo el resultado.
- Cita la LÍNEA exacta donde aparece el bug (copiándola).
- Haz 1 pregunta cada vez.

PREFERENCIA:
- Usa: ${prefLabel(pref)}

DIAGNÓSTICO PREVIO (web):
- Bug principal: "${primaryBug.name}"
- Bug secundario: "${secondaryBug.name}"
- Debilidad: ${primaryBug.weakness}
- Trampas típicas: ${primaryBug.traps.join(", ")}
- Mantra STOP: ${primaryBug.default_mantra}

${evidenceBlock}

TAREAS:
1) Detecta el error real en MIS pasos.
2) Dime en 2 frases por qué caigo ahí.
3) Señala la línea exacta del primer error importante.
4) Hazme rehacer solo ese paso (sin resolver todo).`;

            const p2 =
`Actúa como coach. Dame un MICRO-PLAN ANTI-BUG para fracciones.

MI BUG:
- "${primaryBug.name}"
- Mantra STOP: ${primaryBug.default_mantra}

Micro-plan (60–90 s):
A) Regla de oro (1 frase)
B) Checklist (3 pasos)
C) Orden fijo: ( ) → ×/÷ → +/− → simplificar
D) Verificación exprés (2 checks)
E) Ejemplo mini (solo planteado) similar al que fallé.`;

            const p3 =
`Actúa como ENTRENADOR JIT de fracciones (1º-2º ESO).

REGLAS:
- Yo pego mi proceso.
- Tú evalúas línea a línea.
- Si fallo 2 veces seguidas en el mismo concepto, activa "MODO RESCATE": paras y me pones 1 ejercicio aislado SOLO de esa habilidad.

Mi bug: "${primaryBug.name}"
Pack: ${primaryBug.exercise_pack}

MISIÓN:
Genera 3 ejercicios (uno cada vez). Empieza por EJERCICIO 1 (solo enunciado).`;

            const p4 =
`Genera un MINI-EXAMEN de recuperación (fracciones).

REGLAS:
- Solo enunciados (LaTeX si puedes).
- 2 ejercicios, 5 puntos cada uno.
- Deben atacar mi bug "${primaryBug.name}".

EJERCICIO 1:
...
EJERCICIO 2:
...`;

            const pAll =
`=== PROMPT 1 (Diagnóstico) ===
${p1}

=== PROMPT 2 (Micro-plan) ===
${p2}

=== PROMPT 3 (Training) ===
${p3}

=== PROMPT 4 (Examen) ===
${p4}

NOTA:
Si marqué “${planChoice}”, respétalo si procede.`;

            document.getElementById('txtP1').innerText = p1;
            document.getElementById('txtP2').innerText = p2;
            document.getElementById('txtP3').innerText = p3;
            document.getElementById('txtP4').innerText = p4;
            document.getElementById('txtPAll').innerText = pAll;
        }

        function generatePromptsDetailed(){
            savePair(false);

            for(let i=0;i<10;i++){
                const ev = detailedEvidence[i];
                const ex = detailedSet[i];
                if(!ev.answer || !ev.steps){
                    alert("Te falta completar alguna tanda del test. Pasa por las 5 tandas (10 actividades).");
                    return;
                }
                if(ex.type==="problem" && !ev.expr){
                    alert("En el problema final falta tu operación.");
                    return;
                }
            }

            const pref = document.getElementById("pref_style").value;
            const planChoice = document.getElementById("plan_choice").value;

            const scores = scoreFromDetailed();
            const picked = pickPrimarySecondary(scores);
            const primaryBug = getBugById(picked.primary);
            const secondaryBug = getBugById(picked.secondary);

            document.getElementById('placeholderArea').style.display = 'none';
            document.getElementById('resultArea').style.display = 'block';
            document.getElementById('badgePrimary').innerText = "Bug principal: " + primaryBug.name;
            document.getElementById('badgeSecondary').innerText = "Secundario: " + secondaryBug.name;

            let evidenceBlock = `EVIDENCIA REAL (10 actividades):\n`;
            for(let i=0;i<10;i++){
                const ex = detailedSet[i];
                const ev = detailedEvidence[i];
                evidenceBlock += `\n${ex.id}: ${ex.raw}\n`;
                if(ex.type==="problem"){
                    evidenceBlock += `Mi operación: ${normalizeMinus(ev.expr)}\n`;
                }
                evidenceBlock += `Mi resultado: ${normalizeMinus(ev.answer)}\nMis pasos:\n${ev.steps}\n`;
            }

            const p1 =
`Actúa como ENTRENADOR de matemáticas (fracciones, 1º-2º ESO).

REGLAS:
- Informe máximo 12 líneas.
- Luego 6 ejercicios personalizados (solo enunciados).
- Luego 1 ejercicio modelo resuelto en 5–7 líneas.
- Cita 2 evidencias copiando UNA LÍNEA exacta del alumno.
- Termina con 1 pregunta.

PREFERENCIA:
- ${prefLabel(pref)}

DIAGNÓSTICO PREVIO (web):
- Bug principal sugerido: "${primaryBug.name}"
- Bug secundario sugerido: "${secondaryBug.name}"

${evidenceBlock}

TAREAS:
1) Confirma o corrige bug principal y secundario mirando MIS pasos.
2) INFORME (≤12 líneas): dónde fallo, por qué, 2 evidencias (líneas copiadas), regla motor, checklist.
3) 6 ejercicios (solo enunciados):
   - 3 del bug principal
   - 2 combinados con paréntesis
   - 1 problema final similar (números nuevos)
4) 1 ejercicio modelo resuelto (5–7 líneas) centrado en mi bug.
5) Pregunta final: ¿repetimos 6 más o subimos dificultad?`;

            const p2 =
`Actúa como coach. Dame un micro-plan de 10 minutos para "${primaryBug.name}".
Incluye: regla motor, checklist, 4 ejercicios (solo enunciados) y cómo corregirme (línea del bug).`;

            const p3 =
`Actúa como ENTRENADOR JIT de fracciones. Genera 3 ejercicios centrados en "${primaryBug.name}".
Reglas: uno cada vez; espero a que pegue mis pasos; citas la línea exacta del bug. Empieza por el 1.`;

            const p4 =
`Genera un mini-examen (2 ejercicios) centrado en "${primaryBug.name}".
Solo enunciados; 1 operación con paréntesis y 1 problema con fracciones.`;

            const pAll =
`=== PROMPT (DETALLADO) ===
${p1}

=== EXTRA (10 min) ===
${p2}

=== EXTRA (Training) ===
${p3}

=== EXTRA (Examen) ===
${p4}

NOTA:
Si marqué “${planChoice}”, respétalo si procede.`;

            document.getElementById('txtP1').innerText = p1;
            document.getElementById('txtP2').innerText = p2;
            document.getElementById('txtP3').innerText = p3;
            document.getElementById('txtP4').innerText = p4;
            document.getElementById('txtPAll').innerText = pAll;

            const firstTab = document.getElementById("p1-tab");
            if(firstTab) firstTab.click();
        }

        function copyToClipboard(elementId){
            const text = document.getElementById(elementId).innerText;
            navigator.clipboard.writeText(text).then(()=> alert("¡Copiado al portapapeles!"));
        }

        // Init
        document.addEventListener("DOMContentLoaded", () => {
            generateQuick();
            setMode("quick");
        });
    </script>

    <!-- JS Libraries -->
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
