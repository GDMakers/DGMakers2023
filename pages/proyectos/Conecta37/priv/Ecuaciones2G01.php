<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Ecuaciones 2º grado · Conecta 37</title>
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

        /* selector de modo */
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
        .mode-title{ font-weight:800; color:#0F172A; margin-bottom:.15rem; }
        .mode-sub{ color:#64748b; margin:0; font-size:.95rem; }
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
        .small-muted{ color:#64748b; font-size:.9rem; }
        .d-none{ display:none !important; }
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
                        <span class="hero-chip">4º ESO</span>
                        <span class="hero-chip hero-chip-alt">Ecuaciones de 2º grado</span>
                        <span class="hero-chip">IA + entrenador</span>
                    </div>
                    <h1 class="display-3 text-white animated slideInDown mb-2">Ecuaciones de 2º grado</h1>
                    <p class="fs-4 text-white-50 mb-4">Progresivo · desde x² = 9 hasta ax² + bx + c = 0 + problema final</p>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start hero-highlights gap-4">
                        <div><i class="bi bi-bullseye"></i>Diagnóstico por evidencia (no por opinión)</div>
                        <div><i class="bi bi-lightning-charge"></i>Micro-plan automático (60–90 s)</div>
                        <div><i class="bi bi-joystick"></i>Training guiado y mini-examen</div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mt-4 gap-3">
                        <a class="btn btn-light btn-lg px-4" href="#diagnostico">Empieza</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="https://chatgpt.com/" target="_blank" rel="noopener">C37 · Tutor (usar modo ecuaciones)</a>
                        <span class="hero-chip hero-chip-alt">Sin fracciones ni decimales</span>
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
                        <small>Diagnóstico rápido</small>
                        <h3>Tu bug real (por evidencia) + plan inmediato</h3>
                        <p class="text-muted mb-0">Opción 1: 2 ejercicios clave. Opción 2: 10 progresivos (el 10 es un problema final).</p>

                        <!-- selector de modo -->
                        <div class="row g-3 mt-3">
                            <div class="col-md-6">
                                <div id="modeQuickCard" class="mode-card active" onclick="setMode('quick')">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="mode-title">Opción 1 · test rápido</div>
                                            <p class="mode-sub">x² = k + cuadrática factorizable</p>
                                        </div>
                                        <span class="hint-chip"><i class="bi bi-lightning-charge"></i>2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="modeDetailCard" class="mode-card" onclick="setMode('detail')">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="mode-title">Opción 2 · progresivo</div>
                                            <p class="mode-sub">10 ejercicios (incluye problema final)</p>
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
                        <div class="mini-step flex-fill"><span>3</span>Recibe micro-plan + training</div>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <!-- Columna Izquierda -->
                <div class="col-lg-5">
                    <div class="inc-card">
                        <h4 class="mb-3">Mini-diagnóstico por evidencia</h4>
                        <p class="text-muted mb-4">Muéstrame tu proceso: detectamos el bug real (raíces, factorización, signos, etc.).</p>

                        <form id="bugForm">
                            <!-- Preferencia de explicación -->
                            <div class="mb-3">
                                <label class="form-label">0. ¿Cómo quieres que te expliquen?</label>
                                <select class="form-select" id="pref_style">
                                    <option value="factor">Factorización / producto nulo</option>
                                    <option value="formula">Fórmula general (discriminante)</option>
                                    <option value="clean_steps">Pasos limpios (un cambio por línea)</option>
                                </select>
                            </div>

                            <!-- =========================
                                 MODO 1: RÁPIDO (2)
                                 ========================= -->
                            <div id="quickModeBlock">

                                <!-- Eq 1 -->
                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title">Ejercicio 1 (raíces)</div>
                                        <span class="hint-chip"><i class="bi bi-bug-fill"></i>x² = k</span>
                                    </div>
                                    <div class="math-big mb-2" id="ex1_text">—</div>

                                    <label class="form-label mb-1">Soluciones (x = …)</label>
                                    <input class="form-control mb-2" id="ex1_answer" placeholder="Ej: x = 3 y x = −3  (o x = ±3)" />

                                    <label class="form-label mb-1">Pega tus pasos (2–10 líneas)</label>
                                    <textarea class="form-control" id="ex1_steps" rows="4" placeholder="Ejemplo:
x² = 9
x = ±3"></textarea>
                                </div>

                                <!-- Eq 2 -->
                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title">Ejercicio 2 (cuadrática)</div>
                                        <span class="hint-chip"><i class="bi bi-bug-fill"></i>ax² + bx + c</span>
                                    </div>
                                    <div class="math-big mb-2" id="ex2_text">—</div>

                                    <label class="form-label mb-1">Soluciones (x = …)</label>
                                    <input class="form-control mb-2" id="ex2_answer" placeholder="Ej: x = 2 y x = −3" />

                                    <label class="form-label mb-1">Pega tus pasos (2–14 líneas)</label>
                                    <textarea class="form-control" id="ex2_steps" rows="4" placeholder="Ejemplo:
x² + x − 6 = 0
(x + 3)(x − 2) = 0
x = −3 o x = 2"></textarea>
                                </div>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-outline-secondary" onclick="regenExercisesQuick()">
                                        <i class="bi bi-arrow-repeat me-1"></i> Cambiar ejercicios
                                    </button>
                                    <div class="small text-muted align-self-center">Genera nuevos números (mismo estilo).</div>
                                </div>
                            </div>

                            <!-- =========================
                                 MODO 2: PROGRESIVO (10, de 2 en 2)
                                 ========================= -->
                            <div id="detailModeBlock" class="d-none">

                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="progress-chip" id="detailProgressChip"><i class="bi bi-layers"></i> Tanda 1/5 · 2/10</span>
                                    <button type="button" class="btn btn-outline-secondary btn-sm" onclick="resetDetailedTest()">
                                        <i class="bi bi-arrow-repeat me-1"></i> Reiniciar test
                                    </button>
                                </div>
                                <div class="small-muted mb-3">
                                    Progresivo: x² = k → (x − p)² = k → producto nulo → factorización → ax²+bx+c → ecuación “más compleja” → y problema final.
                                </div>

                                <!-- Ejercicio A -->
                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title" id="d_exA_title">Ejercicio —</div>
                                        <span class="hint-chip" id="d_exA_hint"><i class="bi bi-bug-fill"></i>—</span>
                                    </div>
                                    <div class="math-big mb-2" id="d_exA_text">—</div>

                                    <div id="d_exA_equation_wrap" class="mb-2 d-none">
                                        <label class="form-label mb-1">Tu ecuación (solo en el problema final)</label>
                                        <input class="form-control" id="d_exA_equation" placeholder="Ej: x² + x − 30 = 0" />
                                    </div>

                                    <label class="form-label mb-1">Soluciones (x = …)</label>
                                    <input class="form-control mb-2" id="d_exA_answer" placeholder="Ej: x = 5 y x = −6 (o x = ±3)" />

                                    <label class="form-label mb-1">Pega tus pasos (mín. 2–14 líneas)</label>
                                    <textarea class="form-control" id="d_exA_steps" rows="4" placeholder="Un cambio por línea."></textarea>
                                </div>

                                <!-- Ejercicio B -->
                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title" id="d_exB_title">Ejercicio —</div>
                                        <span class="hint-chip" id="d_exB_hint"><i class="bi bi-bug-fill"></i>—</span>
                                    </div>
                                    <div class="math-big mb-2" id="d_exB_text">—</div>

                                    <div id="d_exB_equation_wrap" class="mb-2 d-none">
                                        <label class="form-label mb-1">Tu ecuación (solo en el problema final)</label>
                                        <input class="form-control" id="d_exB_equation" placeholder="Ej: x² + x − 30 = 0" />
                                    </div>

                                    <label class="form-label mb-1">Soluciones (x = …)</label>
                                    <input class="form-control mb-2" id="d_exB_answer" placeholder="Ej: x = 2 y x = −3" />

                                    <label class="form-label mb-1">Pega tus pasos (mín. 2–14 líneas)</label>
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
                                    Consejo: en 2º grado casi siempre hay 2 soluciones. Al final: sustituye y comprueba.
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
                        Elige opción 1 o 2, resuelve y pega tus pasos para desbloquear tu kit.
                    </div>
                </div>
            </div>

            <!-- Mapa de Bugs -->
            <div class="mt-5">
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

            document.getElementById("resultArea").style.display = "none";
            document.getElementById("placeholderArea").style.display = "block";

            if(mode === "quick"){ regenExercisesQuick(); }
            else { resetDetailedTest(); }
        }

        function handleGenerate(){
            if(currentMode === "quick") generatePromptsQuick();
            else generatePromptsDetailed();
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
                .replaceAll("^2", "²")
                .trim();
        }
        function fmtInt(n){ return n < 0 ? (UMINUS + String(Math.abs(n))) : String(n); }

        function uniqueSortedInts(arr){
            const set = new Set(arr.map(Number).filter(Number.isFinite));
            return Array.from(set).sort((a,b)=>a-b);
        }

        function parseSolutionSet(input){
            // Admite: "x=3 y x=-3", "x=±3", "±3", "3,-3", "{-3,3}", "x = 5"
            let t = (input || "").toLowerCase();
            t = t.replaceAll("−","-").replaceAll(" ", "");
            t = t.replaceAll("x","").replaceAll("=","").replaceAll("{","").replaceAll("}","");
            t = t.replaceAll("o",",").replaceAll("y",",").replaceAll(";",",").replaceAll("/",",");
            t = t.replaceAll("±","pm"); // plusminus marker

            // Caso ±n
            if(t.includes("pm")){
                const m = t.match(/pm(-?\d+)/);
                if(m){
                    const n = Number(m[1]);
                    if(Number.isFinite(n)){
                        return uniqueSortedInts([n, -n]);
                    }
                }
                // fallback: extrae enteros
            }

            // Extrae enteros
            const matches = t.match(/-?\d+/g);
            if(!matches) return null;
            const nums = matches.map(Number).filter(Number.isFinite);
            if(nums.length === 0) return null;
            return uniqueSortedInts(nums);
        }

        function sameSolutionSet(a, b){
            if(a === null || b === null) return false;
            if(a.length !== b.length) return false;
            for(let i=0;i<a.length;i++){
                if(a[i] !== b[i]) return false;
            }
            return true;
        }

        // ------------------------------------------------------------
        // BUG MAP (2º grado)
        // ------------------------------------------------------------
        const bugMap = {
          "bugs": [
            {
              "id": "root_pm",
              "name": "El del ± perdido",
              "weakness": "Al hacer raíz cuadrada, olvida que hay dos soluciones (±)",
              "focus": "Si x² = k, entonces x = ±√k (si k>0)",
              "exercise_pack": "square_root_equations",
              "traps": ["dar solo una solución", "confundir √(a²) con a", "signo final"],
              "default_mantra": "STOP: raíz ⇒ dos soluciones (±)"
            },
            {
              "id": "zero_product",
              "name": "El del producto nulo",
              "weakness": "No aplica bien: si AB=0 entonces A=0 o B=0",
              "focus": "Factoriza y separa en dos ecuaciones",
              "exercise_pack": "zero_product_rule",
              "traps": ["dividir por un factor que puede ser 0", "perder una solución", "resolver solo una rama"],
              "default_mantra": "STOP: (A)(B)=0 ⇒ A=0 O B=0"
            },
            {
              "id": "factor_sign",
              "name": "El de la factorización con signos",
              "weakness": "Factoriza mal por signos (sobre todo con c negativa)",
              "focus": "Buscar dos números que multipliquen c y sumen b",
              "exercise_pack": "factor_trinomials",
              "traps": ["sumas mal", "cambia signos en factores", "no comprueba multiplicación"],
              "default_mantra": "STOP: producto=c y suma=b"
            },
            {
              "id": "move_terms",
              "name": "El movedor de términos",
              "weakness": "Pasa términos al otro lado sin control y cambia signos mal",
              "focus": "Orden fijo: llevar todo a 0 antes de factorizar",
              "exercise_pack": "standard_form_to_zero",
              "traps": ["dejar un término en ambos lados", "cambiar signo sin justificar", "mezclar pasos"],
              "default_mantra": "STOP: primero todo a 0"
            },
            {
              "id": "formula",
              "name": "El de la fórmula",
              "weakness": "Errores al usar x = (-b ± √(b²-4ac)) / (2a)",
              "focus": "Sustituir a,b,c con paréntesis y calcular el discriminante",
              "exercise_pack": "quadratic_formula",
              "traps": ["b sin paréntesis", "signo de 4ac", "olvidar 2a", "error en la raíz"],
              "default_mantra": "STOP: D=b²−4ac y paréntesis en b"
            },
            {
              "id": "simplify",
              "name": "El simplificador",
              "weakness": "Simplifica mal (signos / cuadrados / potencias)",
              "focus": "Una operación por línea + control de signos",
              "exercise_pack": "algebra_simplify",
              "traps": ["(−n)² = −n", "restas mal", "errores de cálculo final"],
              "default_mantra": "STOP: una operación por línea"
            },
            {
              "id": "verifier",
              "name": "El verificador",
              "weakness": "No comprueba sustituyendo y se come errores finales",
              "focus": "Sustituir cada solución en la ecuación original",
              "exercise_pack": "check_solutions",
              "traps": ["no comprobar", "comprobar solo una solución", "interpretar mal el contexto del problema"],
              "default_mantra": "STOP: sustituye y comprueba"
            },
            {
              "id": "translator",
              "name": "El traductor",
              "weakness": "Del problema a la ecuación de 2º grado",
              "focus": "Definir x y traducir a ecuación",
              "exercise_pack": "word_problem_quadratic",
              "traps": ["plantear una ecuación que no corresponde", "no definir x", "no elegir solución válida"],
              "default_mantra": "STOP: define x y escribe la ecuación"
            }
          ]
        };
        document.getElementById('jsonDisplay').textContent = JSON.stringify(bugMap, null, 2);
        function getBugById(id) { return bugMap.bugs.find(b => b.id === id); }

        const tieBreak = ["translator","formula","factor_sign","zero_product","root_pm","move_terms","simplify","verifier"];
        function pickPrimarySecondary(scores) {
            let sorted = Object.entries(scores).sort((a, b) => {
                if (b[1] !== a[1]) return b[1] - a[1];
                return tieBreak.indexOf(a[0]) - tieBreak.indexOf(b[0]);
            });
            return { primary: sorted[0][0], secondary: sorted[1][0], sorted };
        }

        function prefLabel(pref) {
            if (pref === "formula") return "Fórmula general (discriminante)";
            if (pref === "clean_steps") return "Pasos limpios (un cambio por línea)";
            return "Factorización / producto nulo";
        }

        // ------------------------------------------------------------
        // Generadores (SIEMPRE raíces enteras)
        // ------------------------------------------------------------
        function buildQuadraticFromRoots(a, r1, r2){
            // a(x-r1)(x-r2) = 0 => ax^2 - a(r1+r2)x + a(r1r2) = 0
            const b = -a*(r1 + r2);
            const c = a*(r1*r2);
            return {a,b,c};
        }

        function polyToText(a,b,c){
            // ax² + bx + c = 0 (sin coeficientes 1 si se quiere, pero aceptable)
            let s = "";
            // ax²
            if(a === 1) s += "x²";
            else if(a === -1) s += UMINUS + "x²";
            else s += (a < 0 ? (UMINUS + Math.abs(a)) : a) + "x²";

            // bx
            if(b !== 0){
                s += " " + (b > 0 ? "+ " : (UMINUS + " "));
                const ab = Math.abs(b);
                if(ab === 1) s += "x";
                else s += ab + "x";
            }

            // c
            if(c !== 0){
                s += " " + (c > 0 ? "+ " : (UMINUS + " "));
                s += Math.abs(c);
            }

            return s + " = 0";
        }

        // ------------------------------------------------------------
        // MODO 1: RÁPIDO
        // ------------------------------------------------------------
        let exDataQuick = {
            ex1: { text:"", expected:[-3,3] },
            ex2: { text:"", expected:[-3,2] }
        };

        function generateExercisesQuick(){
            // Ej1: x² = k (k perfecto cuadrado)
            const r = rint(2, 9);
            const k = r*r;
            exDataQuick.ex1 = { text: `x² = ${k}`, expected: uniqueSortedInts([-r, r]) };

            // Ej2: cuadrática factorizable (raíces enteras)
            let r1 = rint(-9, 9), r2 = rint(-9, 9);
            while(r1 === 0) r1 = rint(-9, 9);
            while(r2 === 0 || r2 === r1) r2 = rint(-9, 9);
            const a = rint(1, 4);
            const {a:aa,b,c} = buildQuadraticFromRoots(a, r1, r2);
            exDataQuick.ex2 = { text: polyToText(aa,b,c), expected: uniqueSortedInts([r1,r2]) };

            document.getElementById("ex1_text").innerText = exDataQuick.ex1.text;
            document.getElementById("ex2_text").innerText = exDataQuick.ex2.text;
        }

        function regenExercisesQuick(){
            generateExercisesQuick();
            document.getElementById("ex1_answer").value = "";
            document.getElementById("ex2_answer").value = "";
            document.getElementById("ex1_steps").value = "";
            document.getElementById("ex2_steps").value = "";
            document.getElementById("resultArea").style.display = "none";
            document.getElementById("placeholderArea").style.display = "block";
        }

        function scoreFromEvidenceQuick(ex1Ans, ex2Ans, ex1Steps, ex2Steps){
            let scores = {};
            bugMap.bugs.forEach(b => scores[b.id] = 0);

            const s1 = normalizeMinus(ex1Steps).toLowerCase();
            const s2 = normalizeMinus(ex2Steps).toLowerCase();
            const combined = (s1 + "\n" + s2);

            // Pocos pasos => simplify/verifier
            const stepsLen = (s1 + s2).replace(/\s+/g,"").length;
            if(stepsLen < 25) scores["simplify"] += 2;

            if(/(±|pm|masmenos|\+\-)/i.test(ex1Ans) || /(±|pm)/i.test(combined)) scores["root_pm"] += 1;
            if(/(producto|nulo|\)\(=0|\)\s*\(\s*=0)/i.test(combined)) scores["zero_product"] += 1;
            if(/(f[oó]rmula|discriminante|b\^2|b²|4ac|2a)/i.test(combined)) scores["formula"] += 1;
            if(/(compruebo|sustituyo|verifico)/i.test(combined)) scores["verifier"] -= 1;
            if(/(paso|llevo|a0|a 0|igualo a 0)/i.test(combined)) scores["move_terms"] += 1;

            const a1 = parseSolutionSet(ex1Ans);
            const a2 = parseSolutionSet(ex2Ans);

            if(a1 === null || !sameSolutionSet(a1, exDataQuick.ex1.expected)){
                // típico: dar solo una raíz
                if(a1 && a1.length === 1) scores["root_pm"] += 6;
                else scores["root_pm"] += 3;
                scores["simplify"] += 1;
            } else {
                scores["root_pm"] += 1;
            }

            if(a2 === null || !sameSolutionSet(a2, exDataQuick.ex2.expected)){
                // si escribió algo tipo solo una rama -> producto nulo
                if(a2 && a2.length === 1) scores["zero_product"] += 4;
                scores["factor_sign"] += 3;
                scores["move_terms"] += 2;
            } else {
                scores["factor_sign"] += 1;
            }

            // clamp
            for(const k in scores){ if(scores[k] < 0) scores[k] = 0; }
            return scores;
        }

        // ------------------------------------------------------------
        // MODO 2: PROGRESIVO (10)
        // ------------------------------------------------------------
        let detailedSet = [];        // [{id, kind, hint, text, expected, equationExpected?}]
        let detailedEvidence = [];   // [{answer, steps, equation}]
        let currentPair = 0;         // 0..4

        function genX2Eq(){
            const r = rint(2, 10);
            return { text:`x² = ${r*r}`, expected: uniqueSortedInts([-r,r]), hint:"x² = k", kind:"roots" };
        }

        function genShiftSquare(){
            const p = rint(-8, 8);
            const r = rint(1, 9);
            const k = r*r;
            const inside = p >= 0 ? `(x ${UMINUS} ${p})` : `(x + ${Math.abs(p)})`;
            return {
                text: `${inside}² = ${k}`,
                expected: uniqueSortedInts([p - r, p + r]),
                hint:"(x−p)² = k",
                kind:"roots"
            };
        }

        function genZeroProduct(){
            const r1 = rint(-9, 9);
            let r2 = rint(-9, 9);
            if(r2 === r1) r2 = r1 + 1;
            // (x-r1)(x-r2)=0 => x=r1 o x=r2
            const f1 = r1 >= 0 ? `(x ${UMINUS} ${r1})` : `(x + ${Math.abs(r1)})`;
            const f2 = r2 >= 0 ? `(x ${UMINUS} ${r2})` : `(x + ${Math.abs(r2)})`;
            return { text: `${f1}${f2} = 0`, expected: uniqueSortedInts([r1,r2]), hint:"producto nulo", kind:"zero" };
        }

        function genMonicFactorable(){
            let r1 = rint(-9, 9), r2 = rint(-9, 9);
            while(r1 === r2) r2 = rint(-9, 9);
            const {a,b,c} = buildQuadraticFromRoots(1, r1, r2);
            return { text: polyToText(a,b,c), expected: uniqueSortedInts([r1,r2]), hint:"factoriza", kind:"factor" };
        }

        function genNonMonicFactorable(){
            let r1 = rint(-6, 6), r2 = rint(-6, 6);
            while(r1 === 0) r1 = rint(-6, 6);
            while(r2 === 0 || r2 === r1) r2 = rint(-6, 6);
            const a = rint(2, 4);
            const {a:aa,b,c} = buildQuadraticFromRoots(a, r1, r2);
            return { text: polyToText(aa,b,c), expected: uniqueSortedInts([r1,r2]), hint:"ax²+bx+c", kind:"factor" };
        }

        function genComplexButFactorable(){
            // ax² + bx + c = 0 con raíces enteras “menos obvias”
            let r1 = rint(-10, 10), r2 = rint(-10, 10);
            while(r1 === r2 || r1 === 0) r1 = rint(-10, 10);
            while(r2 === 0 || r2 === r1) r2 = rint(-10, 10);
            const a = rint(1, 4);
            const {a:aa,b,c} = buildQuadraticFromRoots(a, r1, r2);
            return { text: polyToText(aa,b,c), expected: uniqueSortedInts([r1,r2]), hint:"más compleja", kind:"factor" };
        }

        function genWordProblem(){
            // "Un número más su cuadrado es N" => x² + x - N = 0 con raíces enteras (r1,r2)
            // elegimos raíces enteras r1,r2 y construimos N = -c = -(r1*r2) y b = (r1+r2)=1 para monica? Mejor:
            // Usamos plantilla: x² + x + c = 0, con r1+r2=-1. Elige r1 y r2 enteras que sumen -1.
            const r1 = rint(-12, 12);
            const r2 = -1 - r1;
            // evitar trivial
            if(r2 === r1) return genWordProblem();
            const c = r1*r2; // porque (x-r1)(x-r2)=x²-(r1+r2)x+r1r2 = x² + x + c
            const N = -c;     // x² + x = N
            const text = `Problema final: “Un número entero x cumple que su cuadrado más él mismo vale ${N}”.\n1) Plantea la ecuación.\n2) Resuelve y escribe todas las soluciones.\n3) Si el contexto exigiera “número natural”, elige la válida.`;
            const eq = `x² + x ${N >= 0 ? "= " + N : "= " + (UMINUS + Math.abs(N))}`;
            return {
                text,
                expected: uniqueSortedInts([r1,r2]),
                equationExpected: `x² + x ${N >= 0 ? "= " + N : "= " + (UMINUS + Math.abs(N))}`,
                hint:"problema → ecuación",
                kind:"problem"
            };
        }

        function generateDetailedSet(){
            const E1 = { id:"E1", ...genX2Eq() };
            const E2 = { id:"E2", ...genX2Eq() };
            const E3 = { id:"E3", ...genShiftSquare() };
            const E4 = { id:"E4", ...genZeroProduct() };
            const E5 = { id:"E5", ...genMonicFactorable() };
            const E6 = { id:"E6", ...genMonicFactorable() };
            const E7 = { id:"E7", ...genNonMonicFactorable() };
            const E8 = { id:"E8", ...genNonMonicFactorable() };
            const E9 = { id:"E9", ...genComplexButFactorable() };
            const E10= { id:"E10",...genWordProblem() };

            detailedSet = [E1,E2,E3,E4,E5,E6,E7,E8,E9,E10].map(x=>({ ...x }));
            detailedEvidence = new Array(10).fill(null).map(()=>({answer:"",steps:"",equation:""}));
        }

        function updateDetailProgress(){
            const done = currentPair*2;
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
            const idxB = idxA+1;
            const A = detailedSet[idxA];
            const B = detailedSet[idxB];

            document.getElementById("d_exA_title").innerText = `${A.id} · ${A.kind === "problem" ? "problema" : "ecuación"}`;
            document.getElementById("d_exA_hint").innerHTML = `<i class="bi bi-bug-fill"></i>${A.hint}`;
            document.getElementById("d_exA_text").innerText = A.text;

            document.getElementById("d_exB_title").innerText = `${B.id} · ${B.kind === "problem" ? "problema" : "ecuación"}`;
            document.getElementById("d_exB_hint").innerHTML = `<i class="bi bi-bug-fill"></i>${B.hint}`;
            document.getElementById("d_exB_text").innerText = B.text;

            // ecuación SOLO en problema final (E10) => puede caer en A o B según tanda
            document.getElementById("d_exA_equation_wrap").classList.toggle("d-none", A.kind !== "problem");
            document.getElementById("d_exB_equation_wrap").classList.toggle("d-none", B.kind !== "problem");

            // load saved
            document.getElementById("d_exA_answer").value = detailedEvidence[idxA].answer || "";
            document.getElementById("d_exA_steps").value  = detailedEvidence[idxA].steps || "";
            document.getElementById("d_exA_equation").value = detailedEvidence[idxA].equation || "";

            document.getElementById("d_exB_answer").value = detailedEvidence[idxB].answer || "";
            document.getElementById("d_exB_steps").value  = detailedEvidence[idxB].steps || "";
            document.getElementById("d_exB_equation").value = detailedEvidence[idxB].equation || "";
        }

        function resetDetailedTest(){
            generateDetailedSet();
            currentPair = 0;
            renderPair();
            document.getElementById("resultArea").style.display = "none";
            document.getElementById("placeholderArea").style.display = "block";
        }

        function savePair(enforceRequired){
            const idxA = currentPair*2;
            const idxB = idxA+1;

            const A = detailedSet[idxA];
            const B = detailedSet[idxB];

            const aAns = document.getElementById("d_exA_answer").value.trim();
            const aSteps= document.getElementById("d_exA_steps").value.trim();
            const aEq  = document.getElementById("d_exA_equation").value.trim();

            const bAns = document.getElementById("d_exB_answer").value.trim();
            const bSteps= document.getElementById("d_exB_steps").value.trim();
            const bEq  = document.getElementById("d_exB_equation").value.trim();

            if(enforceRequired){
                if(!aAns || !aSteps || !bAns || !bSteps){
                    alert("Completa soluciones y pasos en los 2 ejercicios de esta tanda.");
                    return false;
                }
                if(A.kind === "problem" && !aEq){
                    alert("En el problema final, escribe también la ecuación que planteas.");
                    return false;
                }
                if(B.kind === "problem" && !bEq){
                    alert("En el problema final, escribe también la ecuación que planteas.");
                    return false;
                }
            }

            detailedEvidence[idxA] = { answer:aAns, steps:aSteps, equation:aEq };
            detailedEvidence[idxB] = { answer:bAns, steps:bSteps, equation:bEq };
            return true;
        }

        function savePairAndNext(){
            const ok = savePair(true);
            if(!ok) return;

            if(currentPair < 4){
                currentPair++;
                renderPair();
            } else {
                alert("Test progresivo completado. Pulsa “Generar prompts”.");
            }
        }

        function prevPair(){
            savePair(false);
            currentPair = Math.max(0, currentPair-1);
            renderPair();
        }

        function scoreFromDetailed(){
            let scores = {};
            bugMap.bugs.forEach(b => scores[b.id] = 0);

            let hasFormulaSignals = false;

            for(let i=0;i<10;i++){
                const ex = detailedSet[i];
                const ev = detailedEvidence[i];

                const steps = normalizeMinus(ev.steps).toLowerCase();
                const len = steps.replace(/\s+/g,"").length;
                if(len < 20) scores["simplify"] += 1;

                if(/(f[oó]rmula|discriminante|b²|b\^2|4ac|2a)/i.test(steps)){
                    scores["formula"] += 2;
                    hasFormulaSignals = true;
                }
                if(/(producto|nulo|\)\(=0)/i.test(steps)) scores["zero_product"] += 1;
                if(/(igualo.*0|llevo.*0|a 0|a0)/i.test(steps)) scores["move_terms"] += 1;
                if(/(compruebo|sustituyo|verifico)/i.test(steps)) scores["verifier"] -= 1;

                if(ex.kind === "problem"){
                    scores["translator"] += 2;
                    if(!ev.equation) scores["translator"] += 3;
                }

                const userSet = parseSolutionSet(ev.answer);
                if(userSet === null){
                    scores["simplify"] += 1;
                    continue;
                }

                if(!sameSolutionSet(userSet, ex.expected)){
                    if(ex.text.includes("x² =") || ex.text.includes(")²")){
                        if(userSet.length === 1) scores["root_pm"] += 4;
                        else scores["root_pm"] += 2;
                    }
                    if(ex.kind === "zero"){
                        if(userSet.length === 1) scores["zero_product"] += 4;
                        else scores["zero_product"] += 2;
                    }
                    if(ex.kind === "factor"){
                        scores["factor_sign"] += 3;
                        scores["move_terms"] += 1;
                    }
                    if(ex.kind === "problem"){
                        scores["translator"] += 4;
                    }
                    scores["verifier"] += 1;
                } else {
                    // aciertos: baja un poco el ruido
                    scores["verifier"] += 0;
                }
            }

            // Si no hay señales de fórmula pero hay muchos fallos en ax²+bx+c, sugiere bug en factorización o fórmula
            if(!hasFormulaSignals){
                scores["factor_sign"] += 1;
            }

            for(const k in scores){ if(scores[k] < 0) scores[k] = 0; }
            return scores;
        }

        // ------------------------------------------------------------
        // PROMPTS
        // ------------------------------------------------------------
        function generatePromptsQuick(){
            const pref = document.getElementById('pref_style').value;

            const ex1Text = document.getElementById('ex1_text').innerText;
            const ex2Text = document.getElementById('ex2_text').innerText;

            const ex1Ans = document.getElementById('ex1_answer').value;
            const ex2Ans = document.getElementById('ex2_answer').value;

            const ex1Steps = document.getElementById('ex1_steps').value.trim();
            const ex2Steps = document.getElementById('ex2_steps').value.trim();

            if(!ex1Ans || !ex2Ans || !ex1Steps || !ex2Steps){
                alert("Completa soluciones y pega tus pasos en los 2 ejercicios.");
                return;
            }

            const planChoice = document.getElementById('plan_choice').value;

            const scores = scoreFromEvidenceQuick(ex1Ans, ex2Ans, ex1Steps, ex2Steps);
            const picked = pickPrimarySecondary(scores);
            const primaryBug = getBugById(picked.primary);
            const secondaryBug = getBugById(picked.secondary);

            document.getElementById('placeholderArea').style.display = 'none';
            document.getElementById('resultArea').style.display = 'block';
            document.getElementById('badgePrimary').innerText = "Bug principal: " + primaryBug.name;
            document.getElementById('badgeSecondary').innerText = "Secundario: " + secondaryBug.name;

            const evidenceBlock =
`EVIDENCIA (USA ESTO):
Ejercicio 1: ${normalizeMinus(ex1Text)}
Mis soluciones: ${normalizeMinus(ex1Ans)}
Mis pasos:
${ex1Steps}

Ejercicio 2: ${normalizeMinus(ex2Text)}
Mis soluciones: ${normalizeMinus(ex2Ans)}
Mis pasos:
${ex2Steps}`;

            const p1 =
`Actúa como ENTRENADOR de matemáticas (4º ESO) especializado en ecuaciones de 2º grado.

REGLAS:
- NO me des la solución completa.
- Corrige MI PROCESO (paso a paso).
- Cita la LÍNEA exacta donde aparece el bug (cópiala).
- Haz 1 pregunta cada vez.

Preferencia: ${prefLabel(pref)}

Diagnóstico previo (web):
- Bug principal: "${primaryBug.name}"
- Bug secundario: "${secondaryBug.name}"
- Debilidad: ${primaryBug.weakness}
- Foco: ${primaryBug.focus}
- Trampas: ${primaryBug.traps.join(", ")}

${evidenceBlock}

Tareas:
1) Confirma o corrige el bug mirando MIS pasos.
2) Señala la línea exacta del fallo (cítala).
3) Dame 1 pista para rehacer el ejercicio 2 (sin terminarlo).
4) Pregunta de control (1).`;

            const p2 =
`Micro-plan (60–90 s) para "${primaryBug.name}".
Formato:
A) Regla motor (1 frase).
B) Checklist (3 checks).
C) Ritual “un cambio por línea” (3 pasos).
D) Verificación (sustituye cada solución).
E) Ejemplo mini (solo el primer paso correcto, sin resolver).`;

            const p3 =
`Training JIT (2º grado) centrado en "${primaryBug.name}".
Reglas: uno a uno; yo pego mis pasos; tú citas mi línea del bug y das 1 pista.
Genera 3 ejercicios del pack: ${primaryBug.exercise_pack}. Empieza con el 1º.`;

            const p4 =
`Mini-examen (2 ejercicios, solo enunciados) centrado en "${primaryBug.name}":
1) ecuación de 2º grado factorizable o con (x−p)²
2) un problema final que obligue a plantear una ecuación de 2º grado.
No resuelvas.`;

            const pAll =
`=== PROMPT 1 (Diagnóstico por evidencia) ===
${p1}

=== PROMPT 2 (Micro-plan) ===
${p2}

=== PROMPT 3 (Training) ===
${p3}

=== PROMPT 4 (Mini-examen) ===
${p4}

Nota: si marqué plan (“${planChoice}”), respétalo si procede.`;

            document.getElementById('txtP1').innerText = p1;
            document.getElementById('txtP2').innerText = p2;
            document.getElementById('txtP3').innerText = p3;
            document.getElementById('txtP4').innerText = p4;
            document.getElementById('txtPAll').innerText = pAll;

            const firstTab = document.getElementById("p1-tab");
            if(firstTab) firstTab.click();
        }

        function generatePromptsDetailed(){
            savePair(false);

            // validar 10
            for(let i=0;i<10;i++){
                const ex = detailedSet[i];
                const ev = detailedEvidence[i];
                if(!ev.answer || !ev.steps){
                    alert("Te falta completar alguna tanda del test progresivo (10).");
                    return;
                }
                if(ex.kind === "problem" && !ev.equation){
                    alert("En el problema final (E10) falta la ecuación que planteas.");
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

            let evidenceBlock = `EVIDENCIA REAL (10 ejercicios):\n`;
            for(let i=0;i<10;i++){
                const ex = detailedSet[i];
                const ev = detailedEvidence[i];
                evidenceBlock += `\n${ex.id}: ${normalizeMinus(ex.text)}\n`;
                if(ex.kind === "problem"){
                    evidenceBlock += `Mi ecuación: ${normalizeMinus(ev.equation)}\n`;
                }
                evidenceBlock += `Mis soluciones: ${normalizeMinus(ev.answer)}\nPasos:\n${ev.steps}\n`;
            }

            const p1 =
`Actúa como ENTRENADOR de matemáticas (4º ESO). Objetivo: detectar fallos por evidencia y entrenar para examen de ecuaciones de 2º grado.

REGLAS:
- No resuelvas TODOS mis ejercicios.
- Corrige mi proceso.
- Cita 2 evidencias (líneas exactas de mis pasos).
- Entrega:
  (1) informe breve (máx. 12 líneas)
  (2) 6 ejercicios nuevos (solo enunciados, sin fracciones/decimales)
  (3) 1 ejercicio modelo resuelto en 6–9 líneas (centrado en mi bug)

Preferencia: ${prefLabel(pref)}

Diagnóstico previo sugerido:
- Bug principal: "${primaryBug.name}"
- Bug secundario: "${secondaryBug.name}"

${evidenceBlock}

Tareas:
1) Confirma/corrige bug principal y secundario.
2) Informe (máx. 12 líneas): regla motor, checklist, y 2 evidencias citadas.
3) 6 ejercicios nuevos progresivos (solo enunciados):
   - 2 tipo x² = k (con ±)
   - 2 factorizables (uno con a≠1)
   - 1 con (x−p)² = k o producto nulo
   - 1 problema final con números nuevos (plantear ecuación)
4) Resuelve SOLO el ejercicio modelo (6–9 líneas) y al final sustituye para comprobar.
5) Termina con 1 pregunta (control).

Nota: si marqué plan (“${planChoice}”), respétalo si procede.`;

            const p2 =
`Micro-plan (60–90 s) para "${primaryBug.name}".
Incluye:
- regla motor
- checklist
- verificación sustituyendo TODAS las soluciones
Máx. 9 líneas.`;

            const p3 =
`Training JIT: 3 ejercicios centrados en "${primaryBug.name}".
Uno a uno; yo pego mis pasos; tú citas mi línea del bug y das 1 pista. Empieza ya.`;

            const p4 =
`Mini-examen (2 ejercicios, solo enunciados) centrado en "${primaryBug.name}":
1) cuadrática (factorizable o con a≠1)
2) problema final (plantear ecuación de 2º grado)
No resuelvas.`;

            const pAll =
`=== PROMPT (DETALLADO) ===
${p1}

=== EXTRA (micro-plan) ===
${p2}

=== EXTRA (training) ===
${p3}

=== EXTRA (mini-examen) ===
${p4}`;

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

        // ------------------------------------------------------------
        // Init
        // ------------------------------------------------------------
        document.addEventListener("DOMContentLoaded", () => {
            generateExercisesQuick();
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
