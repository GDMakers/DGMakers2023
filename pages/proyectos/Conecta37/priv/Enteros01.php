<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Enteros 1 · Conecta 37</title>
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
                        <span class="hero-chip">1º ESO</span>
                        <span class="hero-chip hero-chip-alt">Operaciones con enteros</span>
                        <span class="hero-chip">IA + entrenador</span>
                    </div>
                    <h1 class="display-3 text-white animated slideInDown mb-2">Enteros 1</h1>
                    <p class="fs-4 text-white-50 mb-4">Diagnóstico por evidencia · Kit anti-bug (signos)</p>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start hero-highlights gap-4">
                        <div><i class="bi bi-bullseye"></i>Diagnóstico por ejercicios (no por opinión)</div>
                        <div><i class="bi bi-lightning-charge"></i>Micro-plan automático (60–90 s)</div>
                        <div><i class="bi bi-joystick"></i>Training guiado y mini-examen</div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mt-4 gap-3">
                        <a class="btn btn-light btn-lg px-4" href="#diagnostico">Empieza</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="https://chatgpt.com/g/g-694c4053ac308191b4abc5d60fee753d-c37-tutor-de-enteros" target="_blank" rel="noopener">C37 · Tutor de enteros</a>
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
                        <small>Diagnóstico rápido</small>
                        <h3>Tu bug real (por evidencia) + plan inmediato</h3>
                        <p class="text-muted mb-0">
                            Resuelve ejercicios generados automáticamente y pega tus pasos. La IA detecta el patrón de error y genera prompts listos para copiar.
                        </p>

                        <!-- NUEVO: selector de modo -->
                        <div class="row g-3 mt-3">
                            <div class="col-md-6">
                                <div id="modeQuickCard" class="mode-card active" onclick="setMode('quick')">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="mode-title">Opción 1 · test rápido</div>
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
                                            <div class="mode-title">Opción 2 · test detallado</div>
                                            <p class="mode-sub">10 ejercicios (2×5) · prompt completo</p>
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
                        <p class="text-muted mb-4">No me digas “me lío”. Muéstrame tu proceso y detectamos el bug real.</p>

                        <form id="bugForm">

                            <!-- Preferencia visual -->
                            <div class="mb-3">
                                <label class="form-label">0. ¿Cómo quieres que te expliquen?</label>
                                <select class="form-select" id="pref_style">
                                    <option value="number_line">Recta numérica / ascensor</option>
                                    <option value="money">Dinero y deudas</option>
                                    <option value="plain">Sin metáforas (pasos limpios)</option>
                                </select>
                            </div>

                            <!-- =========================
                                 MODO 1: RÁPIDO (2)
                                 ========================= -->
                            <div id="quickModeBlock">

                                <!-- Ejercicio 1 -->
                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title">Ejercicio 1 (signos seguidos)</div>
                                        <span class="hint-chip"><i class="bi bi-bug-fill"></i>−a − (−b)</span>
                                    </div>
                                    <div class="math-big mb-2" id="ex1_text">—</div>

                                    <label class="form-label mb-1">Tu resultado</label>
                                    <input class="form-control mb-2" id="ex1_answer" placeholder="Escribe el resultado (ej. 1)" />

                                    <label class="form-label mb-1">Pega tus pasos (1–6 líneas)</label>
                                    <textarea class="form-control" id="ex1_steps" rows="4" placeholder="Ejemplo:
−3 − (−4)
= −3 + 4
= 1"></textarea>
                                </div>

                                <!-- Ejercicio 2 -->
                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title">Ejercicio 2 (prioridad + paréntesis)</div>
                                        <span class="hint-chip"><i class="bi bi-bug-fill"></i>a − b(−c + d)</span>
                                    </div>
                                    <div class="math-big mb-2" id="ex2_text">—</div>

                                    <label class="form-label mb-1">Tu resultado</label>
                                    <input class="form-control mb-2" id="ex2_answer" placeholder="Escribe el resultado (ej. 3)" />

                                    <label class="form-label mb-1">Pega tus pasos (1–8 líneas)</label>
                                    <textarea class="form-control" id="ex2_steps" rows="4" placeholder="Ejemplo:
5 − 2·(−3 + 4)
= 5 − 2·(1)
= 5 − 2
= 3"></textarea>
                                </div>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-outline-secondary" onclick="regenExercises()">
                                        <i class="bi bi-arrow-repeat me-1"></i> Cambiar ejercicios
                                    </button>
                                    <div class="small text-muted align-self-center">
                                        Genera nuevos números (mismo estilo).
                                    </div>
                                </div>

                            </div>

                            <!-- =========================
                                 MODO 2: DETALLADO (10, de 2 en 2)
                                 ========================= -->
                            <div id="detailModeBlock" class="d-none">

                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="progress-chip" id="detailProgressChip"><i class="bi bi-layers"></i> Tanda 1/5 · 2/10</span>
                                    <button type="button" class="btn btn-outline-secondary btn-sm" onclick="resetDetailedTest()">
                                        <i class="bi bi-arrow-repeat me-1"></i> Reiniciar test
                                    </button>
                                </div>
                                <div class="small-muted mb-3">
                                    Progresivo: suma/resta → restar negativos → producto → prioridad/paréntesis → problema.
                                </div>

                                <!-- Ejercicio A -->
                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title" id="d_exA_title">Ejercicio —</div>
                                        <span class="hint-chip" id="d_exA_hint"><i class="bi bi-bug-fill"></i>—</span>
                                    </div>
                                    <div class="math-big mb-2" id="d_exA_text">—</div>

                                    <div id="d_exA_expr_wrap" class="mb-2 d-none">
                                        <label class="form-label mb-1">Tu expresión (obligatorio en problemas)</label>
                                        <input class="form-control" id="d_exA_expr" placeholder="Ej: −5 − 3 + 4" />
                                    </div>

                                    <label class="form-label mb-1">Tu resultado</label>
                                    <input class="form-control mb-2" id="d_exA_answer" placeholder="Escribe el resultado" />

                                    <label class="form-label mb-1">Pega tus pasos (mín. 2–6 líneas)</label>
                                    <textarea class="form-control" id="d_exA_steps" rows="4" placeholder="Ejemplo:
−3 − 5
= −8"></textarea>
                                </div>

                                <!-- Ejercicio B -->
                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title" id="d_exB_title">Ejercicio —</div>
                                        <span class="hint-chip" id="d_exB_hint"><i class="bi bi-bug-fill"></i>—</span>
                                    </div>
                                    <div class="math-big mb-2" id="d_exB_text">—</div>

                                    <div id="d_exB_expr_wrap" class="mb-2 d-none">
                                        <label class="form-label mb-1">Tu expresión (obligatorio en problemas)</label>
                                        <input class="form-control" id="d_exB_expr" placeholder="Ej: −5 − 3 + 4" />
                                    </div>

                                    <label class="form-label mb-1">Tu resultado</label>
                                    <input class="form-control mb-2" id="d_exB_answer" placeholder="Escribe el resultado" />

                                    <label class="form-label mb-1">Pega tus pasos (mín. 2–8 líneas)</label>
                                    <textarea class="form-control" id="d_exB_steps" rows="4" placeholder="Ejemplo:
5 − 2·(−3 + 4)
= 5 − 2·1
= 3"></textarea>
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
                                    Consejo: un cambio por línea. Si cambias un signo, escríbelo.
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

            // UI cards
            document.getElementById("modeQuickCard").classList.toggle("active", mode === "quick");
            document.getElementById("modeDetailCard").classList.toggle("active", mode === "detail");

            // blocks
            document.getElementById("quickModeBlock").classList.toggle("d-none", mode !== "quick");
            document.getElementById("detailModeBlock").classList.toggle("d-none", mode !== "detail");

            // reset outputs
            document.getElementById("resultArea").style.display = "none";
            document.getElementById("placeholderArea").style.display = "block";

            if(mode === "quick"){
                regenExercises();
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

        function rint(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
        function normalizeMinus(s) {
            return (s || "")
                .replaceAll("−", "-")
                .replaceAll("·", "*")
                .replaceAll("×", "*")
                .replaceAll(":", "/")
                .trim();
        }
        function parseIntSafe(s) {
            const n = parseInt(normalizeMinus(s), 10);
            return Number.isFinite(n) ? n : null;
        }

        // ------------------------------------------------------------
        // BUG MAP (ENTEROS)
        // ------------------------------------------------------------
        const bugMap = {
          "bugs": [
            {
              "id": "double_sign",
              "name": "El lector de dobles signos",
              "weakness": "Interpretar +−, −−, −+ y convertirlo en una operación clara",
              "focus": "Reescribir: restar (−b) = sumar (+b). Un cambio por línea.",
              "exercise_pack": "double_sign_drills",
              "traps": ["leer −− como −", "perder el signo del segundo número", "mezclar ‘restar’ con ‘negativo’"],
              "default_mantra": "STOP: dos signos → decide la operación"
            },
            {
              "id": "subtract_neg",
              "name": "El restador de negativos",
              "weakness": "Restar un negativo sin cambiar el sentido correctamente",
              "focus": "Protocolo: a − (−b) → a + b (en una línea aparte)",
              "exercise_pack": "subtract_negative_drills",
              "traps": ["hacer −(−b)=−b", "convertirlo en producto", "reescritura incompleta"],
              "default_mantra": "STOP: restar (−) = sumar (+)"
            },
            {
              "id": "add_sub_core",
              "name": "El mezclador de suma y resta",
              "weakness": "Suma/resta con enteros sin una regla estable",
              "focus": "Reescribir TODO como suma de enteros y operar con magnitudes",
              "exercise_pack": "add_sub_integers",
              "traps": ["sumar magnitudes y elegir signo al azar", "cambiar signos sin motivo", "confundir el signo del número con la operación"],
              "default_mantra": "STOP: reescribe como suma"
            },
            {
              "id": "product_sign",
              "name": "El despistado del producto",
              "weakness": "Regla de signos en multiplicación y división",
              "focus": "Signo primero (±), magnitud después. Tabla mínima: (−)(−)=+; (−)(+)=−",
              "exercise_pack": "mult_div_signs",
              "traps": ["−·−=−", "olvidar paréntesis", "mezclar regla con suma/resta"],
              "default_mantra": "STOP: signo primero, números después"
            },
            {
              "id": "priority",
              "name": "El saltador de prioridad",
              "weakness": "Orden de operaciones en combinadas (paréntesis, ×/÷, +/−)",
              "focus": "Checklist fijo: ( ) → ×/÷ → +/− (marca con subrayado)",
              "exercise_pack": "mixed_ops_priority",
              "traps": ["hacer + antes que ×", "abrir paréntesis mal", "operar siempre de izquierda a derecha"],
              "default_mantra": "STOP: ( ) → ×/÷ → +/−"
            },
            {
              "id": "context_translator",
              "name": "El traductor de contexto",
              "weakness": "Pasar de historia (deudas/temperaturas/puntos) a expresión con enteros",
              "focus": "Cada dato con signo → construye expresión → luego calculas",
              "exercise_pack": "integer_word_problems",
              "traps": ["signos al revés", "sumar cuando toca restar", "perder el ‘cambio’ (sube/baja)"],
              "default_mantra": "STOP: cada dato con signo"
            },
            {
              "id": "step_skipper",
              "name": "El mentalista",
              "weakness": "No escribir pasos y perder control (errores invisibles)",
              "focus": "Un cambio por línea. Si cambias algo, lo escribes.",
              "exercise_pack": "show_steps_integers",
              "traps": ["saltos mentales", "cambiar dos cosas a la vez", "tachones que cambian el signo"],
              "default_mantra": "STOP: un cambio por línea"
            },
            {
              "id": "verifier_zero",
              "name": "El verificador cero",
              "weakness": "No comprobar y caer en errores finales",
              "focus": "Chequeo rápido: ¿signo tiene sentido? ¿puedo estimar?",
              "exercise_pack": "check_fast",
              "traps": ["resultado imposible (signo contrario)", "error final tonto", "simplificar mal al final"],
              "default_mantra": "STOP: revisa signos críticos"
            }
          ]
        };

        document.getElementById('jsonDisplay').textContent = JSON.stringify(bugMap, null, 2);

        function getBugById(id) {
          return bugMap.bugs.find(b => b.id === id);
        }

        const tieBreak = ["priority", "subtract_neg", "double_sign", "product_sign", "add_sub_core", "context_translator", "step_skipper", "verifier_zero"];

        function prefLabel(pref) {
          if (pref === "number_line") return "Recta numérica / ascensor";
          if (pref === "money") return "Dinero y deudas";
          return "Sin metáforas (pasos limpios)";
        }

        // ------------------------------------------------------------
        // MODO 1 (RÁPIDO): generador actual (2 ejercicios)
        // ex1: −a − (−b)
        // ex2: a − b(−c + d)
        // ------------------------------------------------------------
        let exDataQuick = {
            ex1: { a: 3, b: 4, text: "", expected: 1 },
            ex2: { a: 5, b: 2, c: 3, d: 4, text: "", expected: 3 }
        };

        function generateExercisesQuick() {
            const a1 = rint(1, 9);
            let b1 = rint(1, 9);
            if (b1 === a1) b1 = (b1 % 9) + 1;

            const a2 = rint(4, 20);
            const b2 = rint(2, 6);
            const c2 = rint(1, 9);
            let d2 = rint(1, 9);
            if (d2 === c2) d2 = (d2 % 9) + 1;

            const ex1Text = `${UMINUS}${a1} ${UMINUS} (${UMINUS}${b1})`;
            const ex2Text = `${a2} ${UMINUS} ${b2}·(${UMINUS}${c2} + ${d2})`;

            const ex1Expected = (-a1) - (-b1);
            const ex2Expected = a2 - b2 * ((-c2) + d2);

            exDataQuick = {
                ex1: { a: a1, b: b1, text: ex1Text, expected: ex1Expected },
                ex2: { a: a2, b: b2, c: c2, d: d2, text: ex2Text, expected: ex2Expected }
            };

            document.getElementById("ex1_text").innerText = exDataQuick.ex1.text;
            document.getElementById("ex2_text").innerText = exDataQuick.ex2.text;
        }

        function regenExercises() {
            generateExercisesQuick();
            document.getElementById("ex1_answer").value = "";
            document.getElementById("ex2_answer").value = "";
            document.getElementById("ex1_steps").value = "";
            document.getElementById("ex2_steps").value = "";
            document.getElementById("resultArea").style.display = "none";
            document.getElementById("placeholderArea").style.display = "block";
        }

        function scoreFromEvidenceQuick(ex1Ans, ex2Ans, ex1Steps, ex2Steps) {
          let scores = {};
          bugMap.bugs.forEach(b => scores[b.id] = 0);

          const s1 = normalizeMinus(ex1Steps).toLowerCase();
          const s2 = normalizeMinus(ex2Steps).toLowerCase();
          const combined = (s1 + "\n" + s2);

          const stepsLen = (s1 + s2).replace(/\s+/g, "").length;
          if (stepsLen < 18) scores["step_skipper"] += 4;

          if (/(--|\+\-|\-\+|\+\s*\-|\-\s*\+)/.test(combined)) scores["double_sign"] += 3;
          if (/\-\s*\(\s*\-\s*\d+/.test(combined) || /-\(-\d+/.test(combined)) scores["subtract_neg"] += 2;
          if (/(prioridad|par[eé]ntesis|primero|\(\s*\))/i.test(combined)) scores["priority"] += 1;
          if (/(recta|ascensor|sube|baja)/i.test(combined)) scores["add_sub_core"] += 1;
          if (/(deuda|dinero|debo|gano|pierdo)/i.test(combined)) scores["add_sub_core"] += 1;

          const a1 = parseIntSafe(ex1Ans);
          const a2 = parseIntSafe(ex2Ans);

          const exp1 = exDataQuick.ex1.expected;
          const exp2 = exDataQuick.ex2.expected;

          const wrong1_ex1 = -(exDataQuick.ex1.a + exDataQuick.ex1.b);
          const wrong2_ex1 = (exDataQuick.ex1.a + exDataQuick.ex1.b);
          const wrong3_ex1 = (exDataQuick.ex1.a - exDataQuick.ex1.b);

          if (a1 !== null && a1 !== exp1) {
            if (a1 === wrong1_ex1) { scores["subtract_neg"] += 5; scores["double_sign"] += 2; }
            else if (a1 === wrong2_ex1) { scores["double_sign"] += 4; scores["add_sub_core"] += 2; }
            else if (a1 === wrong3_ex1) { scores["double_sign"] += 3; scores["add_sub_core"] += 1; }
            else { scores["double_sign"] += 2; scores["add_sub_core"] += 2; }
          } else if (a1 === exp1) {
            scores["subtract_neg"] += 1;
          }

          const a = exDataQuick.ex2.a, b = exDataQuick.ex2.b, c = exDataQuick.ex2.c, d = exDataQuick.ex2.d;
          const wrong_no_paren = a - b*(-c) + d;
          const wrong_inside = a + b*(c + d);
          const wrong_plus = a + b*((-c) + d);

          if (a2 !== null && a2 !== exp2) {
            if (a2 === wrong_no_paren) { scores["priority"] += 5; scores["product_sign"] += 1; }
            else if (a2 === wrong_inside) { scores["priority"] += 4; scores["double_sign"] += 1; }
            else if (a2 === wrong_plus) { scores["product_sign"] += 4; scores["priority"] += 1; }
            else { scores["priority"] += 3; scores["product_sign"] += 2; }
          } else if (a2 === exp2) {
            scores["priority"] += 1;
          }

          if (/(no compruebo|no verifico|no reviso)/i.test(combined)) scores["verifier_zero"] += 4;

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
        // MODO 2 (DETALLADO): 10 ejercicios progresivos, de 2 en 2
        // ------------------------------------------------------------
        let detailedSet = [];        // [{id, title, hint, text, expected, type, extra}]
        let detailedEvidence = [];   // [{answer, steps, expr?}]
        let currentPair = 0;         // 0..4

        function genProblem(){
            const scenarios = ["temp", "money", "elevator", "points"];
            const sc = scenarios[rint(0, scenarios.length - 1)];

            if(sc === "temp"){
                const t0 = (Math.random() < 0.6) ? -rint(1, 8) : rint(0, 8);
                const down = rint(2, 9);
                const up = rint(1, 9);
                const text = `Temperatura: empieza en ${t0}°C. Baja ${down}°C y sube ${up}°C. ¿Final?`;
                const expected = t0 - down + up;
                const exprHint = `Expresión: ${t0} ${UMINUS} ${down} + ${up}`;
                return { text, expected, exprHint };
            }

            if(sc === "money"){
                const debt = rint(5, 25);
                const pay = rint(2, 20);
                const borrow = rint(2, 20);
                const text = `Deuda: debes ${debt}€. Pagas ${pay}€ y luego pides ${borrow}€ más. ¿Deuda final?`;
                const expected = (-debt) + pay - borrow; // deuda (negativo), pagar suma, pedir resta
                const exprHint = `Expresión: ${UMINUS}${debt} + ${pay} ${UMINUS} ${borrow}`;
                return { text, expected, exprHint };
            }

            if(sc === "elevator"){
                const f0 = (Math.random() < 0.5) ? -rint(1, 3) : rint(0, 6);
                const down = rint(1, 8);
                const up = rint(1, 10);
                const text = `Ascensor: estás en planta ${f0}. Bajas ${down} y subes ${up}. ¿Planta final?`;
                const expected = f0 - down + up;
                const exprHint = `Expresión: ${f0} ${UMINUS} ${down} + ${up}`;
                return { text, expected, exprHint };
            }

            // points
            const s0 = rint(0, 20);
            const lose = rint(2, 15);
            const win = rint(1, 15);
            const text = `Puntos: empiezas con ${s0}. Pierdes ${lose} y ganas ${win}. ¿Puntos finales?`;
            const expected = s0 - lose + win;
            const exprHint = `Expresión: ${s0} ${UMINUS} ${lose} + ${win}`;
            return { text, expected, exprHint };
        }

        function generateDetailedSet(){
            const a1 = rint(1, 9), b1 = rint(1, 9);
            const ex1 = { // −a − b
                id:"E1", type:"addsub_basic", hint:"−a − b",
                title:"Ejercicio 1 (suma/resta)",
                text:`${UMINUS}${a1} ${UMINUS} ${b1}`,
                expected:(-a1) - b1
            };

            const a2 = rint(1, 9), b2 = rint(1, 9);
            const ex2 = { // −a + b
                id:"E2", type:"addsub_basic", hint:"−a + b",
                title:"Ejercicio 2 (suma/resta)",
                text:`${UMINUS}${a2} + ${b2}`,
                expected:(-a2) + b2
            };

            const a3 = rint(1, 12), b3 = rint(1, 12);
            const ex3 = { // a − (−b)
                id:"E3", type:"subtract_neg", hint:"a − (−b)",
                title:"Ejercicio 3 (restar negativos)",
                text:`${a3} ${UMINUS} (${UMINUS}${b3})`,
                expected: a3 - (-b3)
            };

            const a4 = rint(1, 12), b4 = rint(1, 12);
            const ex4 = { // −a − (−b)
                id:"E4", type:"subtract_neg", hint:"−a − (−b)",
                title:"Ejercicio 4 (restar negativos)",
                text:`${UMINUS}${a4} ${UMINUS} (${UMINUS}${b4})`,
                expected: (-a4) - (-b4)
            };

            const a5 = rint(2, 12), b5 = rint(2, 12);
            const ex5 = { // (−a)·b
                id:"E5", type:"product", hint:"(−a)·b",
                title:"Ejercicio 5 (producto)",
                text:`(${UMINUS}${a5})·${b5}`,
                expected:(-a5) * b5
            };

            const a6 = rint(2, 12), b6 = rint(2, 12);
            const ex6 = { // (−a)·(−b)
                id:"E6", type:"product", hint:"(−a)·(−b)",
                title:"Ejercicio 6 (producto)",
                text:`(${UMINUS}${a6})·(${UMINUS}${b6})`,
                expected:(-a6) * (-b6)
            };

            const a7 = rint(4, 25), b7 = rint(2, 7), c7 = rint(2, 9);
            const ex7 = { // a − b·c
                id:"E7", type:"priority", hint:"a − b·c",
                title:"Ejercicio 7 (prioridad)",
                text:`${a7} ${UMINUS} ${b7}·${c7}`,
                expected: a7 - (b7*c7)
            };

            const a8 = rint(6, 30), b8 = rint(2, 7), c8 = rint(1, 9), d8 = rint(1, 9);
            const ex8 = { // a − b(−c + d)
                id:"E8", type:"priority_paren", hint:"a − b(−c + d)",
                title:"Ejercicio 8 (paréntesis)",
                text:`${a8} ${UMINUS} ${b8}·(${UMINUS}${c8} + ${d8})`,
                expected: a8 - b8*((-c8)+d8)
            };

            const a9 = rint(1, 12), b9 = rint(1, 12), c9 = rint(2, 9), d9 = rint(2, 9);
            const ex9 = { // −(a + b) + c·d
                id:"E9", type:"mixed", hint:"−(a + b) + c·d",
                title:"Ejercicio 9 (combinada)",
                text:`${UMINUS}(${a9} + ${b9}) + ${c9}·${d9}`,
                expected: -(a9+b9) + (c9*d9)
            };

            const prob = genProblem();
            const ex10 = {
                id:"E10", type:"problem", hint:"problema",
                title:"Ejercicio 10 (problema)",
                text: prob.text,
                expected: prob.expected,
                extra: { exprHint: prob.exprHint }
            };

            detailedSet = [ex1,ex2,ex3,ex4,ex5,ex6,ex7,ex8,ex9,ex10];
            detailedEvidence = new Array(10).fill(null).map(()=>({answer:"",steps:"",expr:""}));
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
            document.getElementById("d_exA_text").innerText = A.text;

            document.getElementById("d_exB_title").innerText = `${B.id} · ${B.title}`;
            document.getElementById("d_exB_hint").innerHTML = `<i class="bi bi-bug-fill"></i>${B.hint}`;
            document.getElementById("d_exB_text").innerText = B.text;

            // Mostrar inputs extra si es problema
            const wrapA = document.getElementById("d_exA_expr_wrap");
            const wrapB = document.getElementById("d_exB_expr_wrap");
            wrapA.classList.toggle("d-none", A.type !== "problem");
            wrapB.classList.toggle("d-none", B.type !== "problem");

            // placeholder con hint de expresión en problema
            const exprA = document.getElementById("d_exA_expr");
            const exprB = document.getElementById("d_exB_expr");
            if(A.type === "problem"){
                exprA.placeholder = (A.extra && A.extra.exprHint) ? A.extra.exprHint.replace("Expresión: ","Ej: ") : "Ej: −5 − 3 + 4";
            }
            if(B.type === "problem"){
                exprB.placeholder = (B.extra && B.extra.exprHint) ? B.extra.exprHint.replace("Expresión: ","Ej: ") : "Ej: −5 − 3 + 4";
            }

            // cargar evidencia si existe
            document.getElementById("d_exA_answer").value = detailedEvidence[idxA].answer || "";
            document.getElementById("d_exA_steps").value  = detailedEvidence[idxA].steps  || "";
            document.getElementById("d_exA_expr").value   = detailedEvidence[idxA].expr   || "";

            document.getElementById("d_exB_answer").value = detailedEvidence[idxB].answer || "";
            document.getElementById("d_exB_steps").value  = detailedEvidence[idxB].steps  || "";
            document.getElementById("d_exB_expr").value   = detailedEvidence[idxB].expr   || "";
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
                // terminado: dejamos al usuario generar prompt
                alert("Test detallado completado. Pulsa “Generar prompts”.");
            }
        }

        function savePair(enforceRequired){
            const idxA = currentPair*2;
            const idxB = idxA + 1;
            const A = detailedSet[idxA];
            const B = detailedSet[idxB];

            const aAns = document.getElementById("d_exA_answer").value.trim();
            const aSteps= document.getElementById("d_exA_steps").value.trim();
            const aExpr = document.getElementById("d_exA_expr").value.trim();

            const bAns = document.getElementById("d_exB_answer").value.trim();
            const bSteps= document.getElementById("d_exB_steps").value.trim();
            const bExpr = document.getElementById("d_exB_expr").value.trim();

            if(enforceRequired){
                if(!aAns || !aSteps || !bAns || !bSteps){
                    alert("Completa resultados y pasos en los 2 ejercicios de esta tanda.");
                    return false;
                }
                if(A.type === "problem" && !aExpr){
                    alert("En el problema, escribe también tu expresión (Ej: −5 − 3 + 4).");
                    return false;
                }
                if(B.type === "problem" && !bExpr){
                    alert("En el problema, escribe también tu expresión (Ej: −5 − 3 + 4).");
                    return false;
                }
            }

            detailedEvidence[idxA] = { answer:aAns, steps:aSteps, expr:aExpr };
            detailedEvidence[idxB] = { answer:bAns, steps:bSteps, expr:bExpr };
            return true;
        }

        function scoreFromDetailed(){
            let scores = {};
            bugMap.bugs.forEach(b => scores[b.id] = 0);

            for(let i=0;i<detailedSet.length;i++){
                const ex = detailedSet[i];
                const ev = detailedEvidence[i];
                const ans = parseIntSafe(ev.answer);
                const exp = ex.expected;

                const stepText = normalizeMinus(ev.steps).toLowerCase();
                const len = stepText.replace(/\s+/g,"").length;
                if(len < 14) scores["step_skipper"] += 1;

                if(ans === null) continue;

                if(ans !== exp){
                    // peso por tipo
                    if(ex.type === "addsub_basic"){ scores["add_sub_core"] += 4; }
                    if(ex.type === "subtract_neg"){ scores["subtract_neg"] += 4; scores["double_sign"] += 1; }
                    if(ex.type === "product"){ scores["product_sign"] += 4; }
                    if(ex.type === "priority"){ scores["priority"] += 4; }
                    if(ex.type === "priority_paren"){ scores["priority"] += 4; scores["product_sign"] += 1; }
                    if(ex.type === "mixed"){ scores["priority"] += 3; scores["add_sub_core"] += 2; }
                    if(ex.type === "problem"){ scores["context_translator"] += 4; scores["add_sub_core"] += 2; }
                } else {
                    // acierto con pasos pobres -> posible falso positivo de control
                    if(len < 10) scores["step_skipper"] += 2;
                }

                // señales en pasos
                if (/(--|\+\-|\-\+|\+\s*\-|\-\s*\+)/.test(stepText)) scores["double_sign"] += 1;
                if (/-\(-\d+/.test(stepText) || /\-\s*\(\s*\-\s*\d+/.test(stepText)) scores["subtract_neg"] += 1;
                if (/(primero|prioridad|par[eé]ntesis)/i.test(stepText)) scores["priority"] += 1;
                if (/(deuda|dinero|temperatura|ascensor|planta|puntos)/i.test(stepText)) scores["context_translator"] += 1;
            }

            return scores;
        }

        // ------------------------------------------------------------
        // PROMPTS (modo rápido y modo detallado)
        // ------------------------------------------------------------
        function generatePromptsQuick(){
          const pref = document.getElementById('pref_style').value;

          const ex1Text = document.getElementById('ex1_text').innerText;
          const ex2Text = document.getElementById('ex2_text').innerText;

          const ex1Ans = document.getElementById('ex1_answer').value;
          const ex2Ans = document.getElementById('ex2_answer').value;

          const ex1Steps = document.getElementById('ex1_steps').value.trim();
          const ex2Steps = document.getElementById('ex2_steps').value.trim();

          if (!ex1Ans || !ex2Ans || !ex1Steps || !ex2Steps) {
            alert("Completa resultados y pega tus pasos en los 2 ejercicios.");
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
`EVIDENCIA (NO INVENTES NADA, USA ESTO):
Ejercicio 1: ${normalizeMinus(ex1Text)}
Mi resultado: ${normalizeMinus(ex1Ans)}
Mis pasos:
${ex1Steps}

Ejercicio 2: ${normalizeMinus(ex2Text)}
Mi resultado: ${normalizeMinus(ex2Ans)}
Mis pasos:
${ex2Steps}`;

          const p1 =
`Actúa como ENTRENADOR de matemáticas de 1º ESO especializado en operaciones con números enteros.

REGLAS:
- NO me des la solución completa de los ejercicios.
- Corrige MI PROCESO, no solo el resultado.
- Cita la LÍNEA exacta donde aparece el bug (copiándola).
- Haz 1 pregunta cada vez.

PREFERENCIA:
- Usa: ${prefLabel(pref)} (si ayuda)

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
`Actúa como coach de estudio para 1º ESO. Quiero un plan que funcione ya mismo.

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
D) Verificación exprés (2 checks).
E) Ejemplo mini (NO resuelvas): uno parecido y dime solo el primer paso correcto.

DESPUÉS, PREGÚNTAME:
¿Plan largo? (10 min / 2×45’ / training / mini-examen).`;

          const p3 =
`Actúa como mi ENTRENADOR JIT de enteros (1º ESO).

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
Genera 3 ejercicios del pack y empieza con EJERCICIO 1 (solo enunciado).`;

          const p4 =
`Genera un MINI-EXAMEN de recuperación (1º ESO, enteros).

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

=== PROMPT 2 (Micro-plan + plan opcional) ===
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
            // asegurar que el usuario guardó la tanda actual
            savePair(false);

            // validar que haya evidencia en las 10
            for(let i=0;i<10;i++){
                const ev = detailedEvidence[i];
                const ex = detailedSet[i];
                if(!ev.answer || !ev.steps){
                    alert("Te falta completar alguna tanda del test detallado. Ve pasando por todas (10 ejercicios).");
                    return;
                }
                if(ex.type === "problem" && !ev.expr){
                    alert("En el problema (E10) falta tu expresión.");
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

            // construir evidencia 10
            let evidenceBlock = `EVIDENCIA REAL (10 ejercicios):\n`;
            for(let i=0;i<10;i++){
                const ex = detailedSet[i];
                const ev = detailedEvidence[i];
                evidenceBlock += `\n${ex.id}: ${normalizeMinus(ex.text)}\n`;
                if(ex.type === "problem"){
                    evidenceBlock += `Mi expresión: ${normalizeMinus(ev.expr)}\n`;
                }
                evidenceBlock += `Resultado: ${normalizeMinus(ev.answer)}\nPasos:\n${ev.steps}\n`;
            }

            // PROMPT DETALLADO (minimalista, con informe+5 actividades+modelo)
            const p1 =
`Actúa como ENTRENADOR de matemáticas (operaciones con enteros, 1º ESO).
Objetivo: detectar dificultades por evidencia y preparar el próximo examen.

REGLAS (minimalista):
- Informe: máx. 12 líneas.
- Luego 5 actividades personalizadas (solo enunciados).
- Luego 1 actividad modelo resuelta en 4–6 líneas.
- Cita 2–3 evidencias copiando UNA LÍNEA exacta del alumno.
- Termina con 1 pregunta.

PREFERENCIA:
- ${prefLabel(pref)}

DIAGNÓSTICO PREVIO (web):
- Bug principal sugerido: "${primaryBug.name}"
- Bug secundario sugerido: "${secondaryBug.name}"

LISTA DE BUGS (elige y confirma):
- Doble signo / Restar un negativo
- Suma/resta sin regla estable
- Signos en producto/división
- Prioridad de operaciones
- Paréntesis (cambio de signos)
- Traductor de contexto (problemas)
- Saltador de pasos
- Verificador cero

PROGRESIÓN USADA:
T1 suma/resta → T2 restar negativos → T3 producto → T4 prioridad/paréntesis → T5 combinada + problema

${evidenceBlock}

TAREAS:
1) Detecta BUG PRINCIPAL + SECUNDARIO por mis pasos (si el previo está mal, corrígelo).
2) INFORME (máx. 12 líneas): dónde fallo, por qué, 2–3 evidencias (cita la línea), regla motor, checklist.
3) 5 ACTIVIDADES para el próximo examen (solo enunciados), progresivas:
   - 2 del bug principal
   - 2 combinadas (prioridad/paréntesis/producto)
   - 1 problema con enteros (números nuevos)
4) Elige 1 y haz ACTIVIDAD MODELO resuelta (4–6 líneas), centrada en mi bug.
5) Pregunta final (1): ¿repetimos 5 más o subimos dificultad?`;

            // En modo detallado, dejamos p2/p3/p4 como extra (útiles), pero el “p1” ya es el completo
            const p2 =
`Actúa como coach: crea un micro-plan (1 minuto) para mi bug principal "${primaryBug.name}".
Formato: 6 líneas máximo.
Incluye: regla motor + checklist (3) + verificación (2).`;

            const p3 =
`Actúa como ENTRENADOR JIT (enteros). Genera 3 ejercicios centrados en "${primaryBug.name}".
Reglas: un ejercicio cada vez; espera mis pasos; cita la línea exacta del bug. Empieza por EJERCICIO 1.`;

            const p4 =
`Genera un mini-examen (2 ejercicios) centrado en "${primaryBug.name}".
Solo enunciados; dificultad 1º ESO; 1 problema con contexto.`;

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

            // abrir tab 1 (por si el usuario estaba en otra)
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
            generateExercisesQuick();
            // modo por defecto: rápido
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
