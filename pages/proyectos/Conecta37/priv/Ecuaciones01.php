<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Ecuaciones 1 · Conecta 37</title>
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

        /* NUEVO: selector de modo */
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
                        <span class="hero-chip">3º ESO</span>
                        <span class="hero-chip hero-chip-alt">Ecuaciones lineales</span>
                        <span class="hero-chip">IA + entrenador</span>
                    </div>
                    <h1 class="display-3 text-white animated slideInDown mb-2">Ecuaciones 1</h1>
                    <p class="fs-4 text-white-50 mb-4">Diagnóstico por evidencia · progresivo (de simple a paréntesis + problema)</p>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start hero-highlights gap-4">
                        <div><i class="bi bi-bullseye"></i>Diagnóstico por ejercicios (no por opinión)</div>
                        <div><i class="bi bi-lightning-charge"></i>Micro-plan automático (60–90 s)</div>
                        <div><i class="bi bi-joystick"></i>Training guiado y mini-examen</div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mt-4 gap-3">
                        <a class="btn btn-light btn-lg px-4" href="#diagnostico">Empieza</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="https://chatgpt.com/g/g-694ccc4ef6c08191b06e686ddc9a21a5-c37-tutor-de-ecuaciones" target="_blank" rel="noopener">C37 · Tutor de ecuaciones</a>
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
                        <p class="text-muted mb-0">Opción 1 (rápida): 2 ecuaciones. Opción 2 (detallada): 10 ejercicios progresivos (incluye problema).</p>

                        <!-- NUEVO: selector de modo -->
                        <div class="row g-3 mt-3">
                            <div class="col-md-6">
                                <div id="modeQuickCard" class="mode-card active" onclick="setMode('quick')">
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="mode-title">Opción 1 · test rápido</div>
                                            <p class="mode-sub">2 ecuaciones (paréntesis + fracciones)</p>
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
                                            <p class="mode-sub">10 ejercicios (8 ecuaciones + 2 problemas)</p>
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
                            <!-- Preferencia de explicación -->
                            <div class="mb-3">
                                <label class="form-label">0. ¿Cómo quieres que te expliquen?</label>
                                <select class="form-select" id="pref_style">
                                    <option value="balance">Método balanza (misma operación en ambos lados)</option>
                                    <option value="clean_steps">Pasos limpios (un cambio por línea)</option>
                                    <option value="minimal">Directo y corto (pero sin saltos)</option>
                                </select>
                            </div>

                            <!-- =========================
                                 MODO 1: RÁPIDO (2)
                                 ========================= -->
                            <div id="quickModeBlock">

                                <!-- Eq 1 -->
                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title">Ecuación 1 (paréntesis y signos)</div>
                                        <span class="hint-chip"><i class="bi bi-bug-fill"></i>distributiva</span>
                                    </div>
                                    <div class="math-big mb-2" id="ex1_text">—</div>

                                    <label class="form-label mb-1">Tu solución (x = …)</label>
                                    <input class="form-control mb-2" id="ex1_answer" placeholder="Ejemplo: x = 3" />

                                    <label class="form-label mb-1">Pega tus pasos (2–10 líneas)</label>
                                    <textarea class="form-control" id="ex1_steps" rows="4" placeholder="Ejemplo:
3(x − 2) = 2x + 5
3x − 6 = 2x + 5
x − 6 = 5
x = 11"></textarea>
                                </div>

                                <!-- Eq 2 -->
                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title">Ecuación 2 (fracciones)</div>
                                        <span class="hint-chip"><i class="bi bi-bug-fill"></i>denominadores</span>
                                    </div>
                                    <div class="math-big mb-2" id="ex2_text">—</div>

                                    <label class="form-label mb-1">Tu solución (x = …)</label>
                                    <input class="form-control mb-2" id="ex2_answer" placeholder="Ejemplo: x = -4" />

                                    <label class="form-label mb-1">Pega tus pasos (2–12 líneas)</label>
                                    <textarea class="form-control" id="ex2_steps" rows="4" placeholder="Ejemplo:
(x − 7)/3 = −2
x − 7 = −6
x = 1"></textarea>
                                </div>

                                <div class="d-flex flex-wrap gap-2">
                                    <button type="button" class="btn btn-outline-secondary" onclick="regenExercisesQuick()">
                                        <i class="bi bi-arrow-repeat me-1"></i> Cambiar ecuaciones
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
                                    Progresivo: x + b = c → ax + b = c → x en ambos lados → paréntesis → fracciones → problema (números nuevos).
                                </div>

                                <!-- Ejercicio A -->
                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title" id="d_exA_title">Ejercicio —</div>
                                        <span class="hint-chip" id="d_exA_hint"><i class="bi bi-bug-fill"></i>—</span>
                                    </div>
                                    <div class="math-big mb-2" id="d_exA_text">—</div>

                                    <div id="d_exA_eq_wrap" class="mb-2">
                                        <label class="form-label mb-1">Tu solución (x = …)</label>
                                        <input class="form-control" id="d_exA_answer" placeholder="Ej: x = 3" />
                                    </div>

                                    <div id="d_exA_equation_wrap" class="mb-2 d-none">
                                        <label class="form-label mb-1">Tu ecuación (solo en problemas)</label>
                                        <input class="form-control" id="d_exA_equation" placeholder="Ej: 3x + 2 = 17" />
                                    </div>

                                    <label class="form-label mb-1">Pega tus pasos (mín. 2–10 líneas)</label>
                                    <textarea class="form-control" id="d_exA_steps" rows="4" placeholder="Un cambio por línea."></textarea>
                                </div>

                                <!-- Ejercicio B -->
                                <div class="exercise-box mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div class="exercise-title" id="d_exB_title">Ejercicio —</div>
                                        <span class="hint-chip" id="d_exB_hint"><i class="bi bi-bug-fill"></i>—</span>
                                    </div>
                                    <div class="math-big mb-2" id="d_exB_text">—</div>

                                    <div id="d_exB_eq_wrap" class="mb-2">
                                        <label class="form-label mb-1">Tu solución (x = …)</label>
                                        <input class="form-control" id="d_exB_answer" placeholder="Ej: x = 3" />
                                    </div>

                                    <div id="d_exB_equation_wrap" class="mb-2 d-none">
                                        <label class="form-label mb-1">Tu ecuación (solo en problemas)</label>
                                        <input class="form-control" id="d_exB_equation" placeholder="Ej: 3x + 2 = 17" />
                                    </div>

                                    <label class="form-label mb-1">Pega tus pasos (mín. 2–12 líneas)</label>
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
                                    Consejo: “balanza” = misma operación en ambos lados. Y al final: sustituye y comprueba.
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
                .replaceAll(":", "/")
                .trim();
        }
        function fmtSigned(n) { return n < 0 ? (UMINUS + String(Math.abs(n))) : String(n); }

        function parseRational(s) {
            let t = normalizeMinus(s).toLowerCase();
            t = t.replaceAll(" ", "")
                 .replaceAll("x", "")
                 .replaceAll("=", "")
                 .replaceAll(":", "");
            if (!t) return null;

            if (t.includes("/")) {
                const parts = t.split("/");
                if (parts.length !== 2) return null;
                const num = Number(parts[0]);
                const den = Number(parts[1]);
                if (!Number.isFinite(num) || !Number.isFinite(den) || den === 0) return null;
                return num / den;
            }

            const n = Number(t);
            if (!Number.isFinite(n)) return null;
            return n;
        }
        function approxEqual(a, b, eps = 1e-9) { return Math.abs(a - b) < eps; }

        // ------------------------------------------------------------
        // BUG MAP (ecuaciones)
        // ------------------------------------------------------------
        const bugMap = {
          "bugs": [
            {
              "id": "translator",
              "name": "El traductor",
              "weakness": "Convertir texto a ecuación (incógnita + relación)",
              "focus": "Pasar de historia → ecuación (definir x)",
              "exercise_pack": "word_to_equation",
              "traps": ["confundir 'más que'/'menos que'", "no definir la incógnita", "usar dato incorrecto"],
              "default_mantra": "STOP: define x y traduce frases"
            },
            {
              "id": "distributor",
              "name": "El distribuidor",
              "weakness": "Paréntesis y distributiva (sobre todo con negativos)",
              "focus": "Expandir sin perder signos",
              "exercise_pack": "parentheses_distribute",
              "traps": ["− fuera del paréntesis", "doble negativo", "distribuir solo el primero"],
              "default_mantra": "STOP: distribuye a TODOS los términos"
            },
            {
              "id": "sign_mover",
              "name": "El movedor de signos",
              "weakness": "“Pasar al otro lado” como magia → errores de signo",
              "focus": "Equivalencia: misma operación en ambos lados",
              "exercise_pack": "balance_method",
              "traps": ["cambiar signo sin justificar", "sumar y restar en la misma línea", "perder un término"],
              "default_mantra": "STOP: misma operación en ambos lados"
            },
            {
              "id": "isolator",
              "name": "El despejador",
              "weakness": "Aislar x en pasos ordenados",
              "focus": "Secuencia fija: simplifica → agrupa x → despeja → verifica",
              "exercise_pack": "isolate_x_steps",
              "traps": ["hacer dos cosas a la vez", "no simplificar antes", "orden incorrecto"],
              "default_mantra": "STOP: un cambio por línea"
            },
            {
              "id": "fractioner",
              "name": "El fraccionador",
              "weakness": "Ecuaciones con fracciones y denominadores",
              "focus": "Eliminar denominadores primero",
              "exercise_pack": "fractions_linear",
              "traps": ["multiplicar solo un lado", "MCM mal", "simplificar mal"],
              "default_mantra": "STOP: elimina denominadores primero"
            },
            {
              "id": "step_skipper",
              "name": "El saltador de pasos",
              "weakness": "No escribe pasos → errores invisibles",
              "focus": "Cada línea equivalente + orden",
              "exercise_pack": "show_your_work",
              "traps": ["saltos mentales", "operaciones mezcladas", "resultado sin control"],
              "default_mantra": "STOP: cada línea debe ser equivalente"
            },
            {
              "id": "verifier_zero",
              "name": "El verificador cero",
              "weakness": "No comprueba con sustitución",
              "focus": "Sustituir y comprobar el '='",
              "exercise_pack": "check_by_substitution",
              "traps": ["error final", "signo final", "simplificación final"],
              "default_mantra": "STOP: sustituye y comprueba"
            }
          ]
        };

        document.getElementById('jsonDisplay').textContent = JSON.stringify(bugMap, null, 2);
        function getBugById(id) { return bugMap.bugs.find(b => b.id === id); }

        const tieBreak = ["fractioner", "distributor", "sign_mover", "isolator", "step_skipper", "verifier_zero", "translator"];

        function pickPrimarySecondary(scores) {
            let sorted = Object.entries(scores).sort((a, b) => {
                if (b[1] !== a[1]) return b[1] - a[1];
                return tieBreak.indexOf(a[0]) - tieBreak.indexOf(b[0]);
            });
            return { primary: sorted[0][0], secondary: sorted[1][0], sorted };
        }

        function prefLabel(pref) {
            if (pref === "balance") return "Método balanza (misma operación en ambos lados)";
            if (pref === "minimal") return "Directo y corto (pero sin saltos)";
            return "Pasos limpios (un cambio por línea)";
        }

        // ------------------------------------------------------------
        // MODO 1: RÁPIDO (2 ecuaciones: paréntesis + fracciones)
        // ------------------------------------------------------------
        let exDataQuick = {
            ex1: { text:"", expected: 0 },
            ex2: { text:"", expected: 0 }
        };

        function buildEqParen(a, b, c, d) {
            // a(x − b) = cx + d
            const left = `${a}(x ${UMINUS} ${b})`;
            const right = `${c === 1 ? "x" : (c + "x")} ${d >= 0 ? "+" : UMINUS} ${Math.abs(d)}`;
            return `${left} = ${right}`;
        }

        function buildEqFrac(p, q, r) {
            // (x − p)/q = r  => x = p + q*r (entero)
            const num = p >= 0 ? `(x ${UMINUS} ${p})` : `(x + ${Math.abs(p)})`;
            return `${num}/${q} = ${r < 0 ? (UMINUS + Math.abs(r)) : r}`;
        }

        function generateExercisesQuick() {
            // Eq1 with integer solution x0
            while (true) {
                const a = rint(2, 6);
                const c = rint(1, 6);
                const b = rint(1, 9);
                const x0 = rint(-9, 12);
                const d = a * (x0 - b) - c * x0;
                if (Math.abs(d) > 30) continue;
                if (a === c && d === -a*b) continue;
                exDataQuick.ex1 = { text: buildEqParen(a,b,c,d), expected: x0 };
                break;
            }

            // Eq2 (fraction) with integer x0
            while (true) {
                const q = rint(2, 9);
                const r = rint(-4, 4);
                const p = rint(0, 12);
                const x0 = p + q * r;
                if (x0 < -15 || x0 > 20) continue;
                exDataQuick.ex2 = { text: buildEqFrac(p,q,r), expected: x0 };
                break;
            }

            document.getElementById("ex1_text").innerText = exDataQuick.ex1.text;
            document.getElementById("ex2_text").innerText = exDataQuick.ex2.text;
        }

        function regenExercisesQuick() {
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
            if (stepsLen < 30) scores["step_skipper"] += 4;

            if (/(paso|pasar|al otro lado)/i.test(combined)) scores["sign_mover"] += 2;
            if (/(compruebo|sustituyo|verifico)/i.test(combined)) scores["verifier_zero"] -= 1;

            const a1 = parseRational(ex1Ans);
            const a2 = parseRational(ex2Ans);

            const exp1 = exDataQuick.ex1.expected;
            const exp2 = exDataQuick.ex2.expected;

            if (a1 === null || !approxEqual(a1, exp1)) {
                scores["distributor"] += 4;
                scores["isolator"] += 2;
                scores["sign_mover"] += 1;
            } else {
                scores["distributor"] += 1;
            }

            if (a2 === null || !approxEqual(a2, exp2)) {
                scores["fractioner"] += 6;
                scores["isolator"] += 2;
                scores["sign_mover"] += 1;

                if (/(multiplico|mcm|denominador)/i.test(s2) && !/(ambos lados|en los dos lados)/i.test(s2)) {
                    scores["fractioner"] += 2;
                    scores["sign_mover"] += 1;
                }
            } else {
                scores["fractioner"] += 1;
            }

            if ((a1 === null || !approxEqual(a1, exp1)) && (a2 === null || !approxEqual(a2, exp2)) && !/(compruebo|sustituyo|verifico)/i.test(combined)) {
                scores["verifier_zero"] += 2;
            }

            for (const k in scores) { if (scores[k] < 0) scores[k] = 0; }
            return scores;
        }

        // ------------------------------------------------------------
        // MODO 2: PROGRESIVO (10) — 8 ecuaciones + 2 problemas
        // (de x + b = c → paréntesis → fracciones → problema)
        // ------------------------------------------------------------
        let detailedSet = [];        // [{id, kind, hint, text, expected, equationExpected?}]
        let detailedEvidence = [];   // [{answer, steps, equation}]
        let currentPair = 0;         // 0..4

        function buildSimpleEq1(x0){
            // x + b = c
            const b = rint(1, 12);
            const c = x0 + b;
            return { text: `x + ${b} = ${c}`, expected: x0, hint:"x + b = c", kind:"simple" };
        }

        function buildSimpleEq2(x0){
            // x − b = c
            const b = rint(1, 12);
            const c = x0 - b;
            return { text: `x ${UMINUS} ${b} = ${c}`, expected: x0, hint:"x − b = c", kind:"simple" };
        }

        function buildAxPlusB(x0){
            // ax + b = c
            const a = rint(2, 6);
            const b = rint(-12, 12);
            const c = a*x0 + b;
            const left = `${a}x ${b >= 0 ? "+" : UMINUS} ${Math.abs(b)}`;
            return { text:`${left} = ${c}`, expected:x0, hint:"ax + b = c", kind:"ax" };
        }

        function buildXBothSides(x0){
            // ax + b = cx + d
            while(true){
                const a = rint(2, 7);
                const c = rint(1, 6);
                if(a === c) continue;
                const b = rint(-12, 12);
                const d = (a - c)*x0 + b;
                if(Math.abs(d) > 25) continue;
                const left = `${a}x ${b >= 0 ? "+" : UMINUS} ${Math.abs(b)}`;
                const right= `${c}x ${d >= 0 ? "+" : UMINUS} ${Math.abs(d)}`;
                return { text:`${left} = ${right}`, expected:x0, hint:"x en ambos lados", kind:"both" };
            }
        }

        function buildParenEq(x0){
            // a(x + m) = cx + d  (m can be negative)
            while(true){
                const a = rint(2, 6);
                const c = rint(1, 6);
                const m = rint(-6, 6);
                const d = a*(x0 + m) - c*x0;
                if(Math.abs(d) > 30) continue;
                const inside = m >= 0 ? `x + ${m}` : `x ${UMINUS} ${Math.abs(m)}`;
                const left = `${a}(${inside})`;
                const right = `${c === 1 ? "x" : (c+"x")} ${d >= 0 ? "+" : UMINUS} ${Math.abs(d)}`;
                return { text:`${left} = ${right}`, expected:x0, hint:"paréntesis", kind:"paren" };
            }
        }

        function buildFracEq(x0){
            // (x + p)/q = r  with integer x0
            while(true){
                const q = rint(2, 9);
                const r = rint(-4, 4);
                const p = x0 - q*r; // so that x0 = q*r + p
                if(p < -12 || p > 12) continue;
                const num = p >= 0 ? `(x + ${p})` : `(x ${UMINUS} ${Math.abs(p)})`;
                return { text:`${num}/${q} = ${r < 0 ? (UMINUS+Math.abs(r)) : r}`, expected:x0, hint:"fracciones", kind:"frac" };
            }
        }

        function genWordProblem(){
            // Problema que obliga a plantear ecuación (sin "resolver" aquí).
            // Se genera con solución entera y números pequeños.
            const types = ["tickets","edades","equipos","rectangulo"];
            const t = types[rint(0, types.length-1)];

            if(t === "tickets"){
                // x entradas adulto + 2 entradas niño = total (x es precio adulto)
                const child = rint(4, 10);
                const diff  = rint(3, 9);
                const adult = child + diff; // solución
                const kidsCount = rint(2, 5);
                const adultsCount= rint(1, 4);
                const total = adultsCount*adult + kidsCount*child;
                const text = `Entradas: una de adulto cuesta x € y una infantil cuesta ${child} €. Se compran ${adultsCount} de adulto y ${kidsCount} infantiles por ${total} €. ¿Cuánto vale x?`;
                const eq = `${adultsCount}x + ${kidsCount}·${child} = ${total}`;
                return { text, expected: adult, equationExpected:eq, hint:"problema → ecuación", kind:"problem" };
            }

            if(t === "edades"){
                // x = edad de Ana; dentro de k años ...
                const x0 = rint(10, 18);
                const diff = rint(2, 9);
                const other = x0 + diff;
                const k = rint(2, 6);
                const sumFuture = (x0+k) + (other+k);
                const text = `Edades: Ana tiene x años. Bruno tiene ${diff} años más que Ana. Dentro de ${k} años, la suma de sus edades será ${sumFuture}. ¿Cuánto vale x?`;
                const eq = `(x + ${k}) + (x + ${diff} + ${k}) = ${sumFuture}`;
                return { text, expected: x0, equationExpected:eq, hint:"problema → ecuación", kind:"problem" };
            }

            if(t === "equipos"){
                // x alumnos por equipo, total alumnos  (x divisor)
                const x0 = rint(3, 6);
                const teams = rint(4, 8);
                const total = x0*teams;
                const text = `Equipos: hay ${total} alumnos y se reparten en ${teams} equipos iguales. Si en cada equipo hay x alumnos, ¿cuánto vale x?`;
                const eq = `${teams}x = ${total}`;
                return { text, expected: x0, equationExpected:eq, hint:"problema → ecuación", kind:"problem" };
            }

            // rectángulo
            const x0 = rint(4, 12); // ancho
            const add = rint(2, 8); // largo = x + add
            const per = 2*(x0 + (x0+add));
            const text = `Rectángulo: el ancho mide x cm y el largo mide x + ${add} cm. El perímetro es ${per} cm. ¿Cuánto vale x?`;
            const eq = `2x + 2(x + ${add}) = ${per}`;
            return { text, expected: x0, equationExpected:eq, hint:"problema → ecuación", kind:"problem" };
        }

        function generateDetailedSet(){
            // 8 ecuaciones: 2 simples, 2 ax+b, 2 con x en ambos lados/paréntesis, 1 fracciones, 1 paréntesis extra
            // + 2 problemas (traductor)
            const xA = rint(-8, 12);
            const xB = rint(-8, 12);
            const xC = rint(-8, 12);
            const xD = rint(-8, 12);

            const E1 = { id:"E1", ...buildSimpleEq1(rint(-8,12)) };
            const E2 = { id:"E2", ...buildSimpleEq2(rint(-8,12)) };
            const E3 = { id:"E3", ...buildAxPlusB(rint(-8,12)) };
            const E4 = { id:"E4", ...buildAxPlusB(rint(-8,12)) };
            const E5 = { id:"E5", ...buildXBothSides(rint(-8,12)) };
            const E6 = { id:"E6", ...buildParenEq(rint(-8,12)) };
            const E7 = { id:"E7", ...buildFracEq(rint(-8,12)) };
            const E8 = { id:"E8", ...buildParenEq(rint(-8,12)) };
            const P9 = { id:"E9", ...genWordProblem() };
            const P10= { id:"E10",...genWordProblem() };

            detailedSet = [E1,E2,E3,E4,E5,E6,E7,E8,P9,P10].map(x=>({ ...x }));
            detailedEvidence = new Array(10).fill(null).map(()=>({answer:"",steps:"",equation:""}));
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

            document.getElementById("d_exA_title").innerText = `${A.id} · ${A.kind === "problem" ? "problema" : "ecuación"}`;
            document.getElementById("d_exA_hint").innerHTML = `<i class="bi bi-bug-fill"></i>${A.hint}`;
            document.getElementById("d_exA_text").innerText = A.text;

            document.getElementById("d_exB_title").innerText = `${B.id} · ${B.kind === "problem" ? "problema" : "ecuación"}`;
            document.getElementById("d_exB_hint").innerHTML = `<i class="bi bi-bug-fill"></i>${B.hint}`;
            document.getElementById("d_exB_text").innerText = B.text;

            // show equation field only for problems
            document.getElementById("d_exA_equation_wrap").classList.toggle("d-none", A.kind !== "problem");
            document.getElementById("d_exB_equation_wrap").classList.toggle("d-none", B.kind !== "problem");

            // load saved values
            document.getElementById("d_exA_answer").value = detailedEvidence[idxA].answer || "";
            document.getElementById("d_exA_steps").value  = detailedEvidence[idxA].steps  || "";
            document.getElementById("d_exA_equation").value = detailedEvidence[idxA].equation || "";

            document.getElementById("d_exB_answer").value = detailedEvidence[idxB].answer || "";
            document.getElementById("d_exB_steps").value  = detailedEvidence[idxB].steps  || "";
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
            const idxB = idxA + 1;

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
                    alert("Completa solución y pasos en los 2 ejercicios de esta tanda.");
                    return false;
                }
                if(A.kind === "problem" && !aEq){
                    alert("En el problema, escribe también la ecuación que planteas.");
                    return false;
                }
                if(B.kind === "problem" && !bEq){
                    alert("En el problema, escribe también la ecuación que planteas.");
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

            for(let i=0;i<10;i++){
                const ex = detailedSet[i];
                const ev = detailedEvidence[i];

                const steps = normalizeMinus(ev.steps).toLowerCase();
                const len = steps.replace(/\s+/g,"").length;
                if(len < 20) scores["step_skipper"] += 1;

                // translator: problems
                if(ex.kind === "problem"){
                    scores["translator"] += 1;
                    if(!ev.equation) scores["translator"] += 2;
                }

                const a = parseRational(ev.answer);
                if(a === null) continue;

                if(!approxEqual(a, ex.expected)){
                    // weight by kind/type
                    if(ex.kind === "simple" || ex.kind === "ax" || ex.kind === "both") { scores["isolator"] += 3; scores["sign_mover"] += 1; }
                    if(ex.kind === "paren") { scores["distributor"] += 4; scores["isolator"] += 2; }
                    if(ex.kind === "frac") { scores["fractioner"] += 5; scores["isolator"] += 2; }
                    if(ex.kind === "problem"){ scores["translator"] += 4; scores["isolator"] += 1; }
                }

                if (/(paso|pasar|al otro lado)/i.test(steps)) scores["sign_mover"] += 1;
                if (/(compruebo|sustituyo|verifico)/i.test(steps)) scores["verifier_zero"] -= 1;
            }

            for (const k in scores) { if (scores[k] < 0) scores[k] = 0; }
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

            if (!ex1Ans || !ex2Ans || !ex1Steps || !ex2Steps) {
                alert("Completa soluciones y pega tus pasos en las 2 ecuaciones.");
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
Ecuación 1: ${normalizeMinus(ex1Text)}
Mi solución: ${normalizeMinus(ex1Ans)}
Mis pasos:
${ex1Steps}

Ecuación 2: ${normalizeMinus(ex2Text)}
Mi solución: ${normalizeMinus(ex2Ans)}
Mis pasos:
${ex2Steps}`;

            const p1 =
`Actúa como ENTRENADOR de matemáticas (3º ESO) especializado en ecuaciones de 1er grado.

REGLAS:
- NO me des la solución completa.
- Corrige MI PROCESO (paso a paso).
- Cita la línea exacta donde aparece el bug.
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
3) Dame una pista para rehacer la ecuación 1 (sin terminarla).
4) Pregunta de control (1).`;

            const p2 =
`Actúa como coach de estudio. Quiero un micro-plan (60–90 s) para "${primaryBug.name}".

Formato:
A) Regla motor (1 frase).
B) Checklist (3).
C) Ritual “balanza” (3 pasos).
D) Verificación (sustitución + 2 checks).
E) Ejemplo mini (solo el primer paso correcto).`;

            const p3 =
`Actúa como entrenador JIT. Genera 3 ejercicios del pack: ${primaryBug.exercise_pack}
Reglas: uno cada vez, yo pego mis pasos, tú citas mi línea del bug y das 1 pista. Empieza con el 1º.`;

            const p4 =
`Mini-examen (2 ejercicios, solo enunciados) centrado en "${primaryBug.name}":
- 1 ecuación con paréntesis o fracciones
- 1 problema que obligue a plantear ecuación.`;

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
        }

        function generatePromptsDetailed(){
            savePair(false);

            // validar que haya evidencia en las 10
            for(let i=0;i<10;i++){
                const ex = detailedSet[i];
                const ev = detailedEvidence[i];
                if(!ev.answer || !ev.steps){
                    alert("Te falta completar alguna tanda del test progresivo (10).");
                    return;
                }
                if(ex.kind === "problem" && !ev.equation){
                    alert("En los problemas (E9/E10), falta la ecuación que planteas.");
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

            // evidencia 10
            let evidenceBlock = `EVIDENCIA REAL (10 ejercicios):\n`;
            for(let i=0;i<10;i++){
                const ex = detailedSet[i];
                const ev = detailedEvidence[i];
                evidenceBlock += `\n${ex.id}: ${normalizeMinus(ex.text)}\n`;
                if(ex.kind === "problem"){
                    evidenceBlock += `Mi ecuación: ${normalizeMinus(ev.equation)}\n`;
                }
                evidenceBlock += `Mi solución: ${normalizeMinus(ev.answer)}\nPasos:\n${ev.steps}\n`;
            }

            const p1 =
`Actúa como ENTRENADOR de matemáticas (3º ESO). Objetivo: detectar fallos por evidencia y entrenar para examen.

REGLAS:
- No resuelvas TODOS mis ejercicios.
- Corrige mi proceso.
- Cita 2 evidencias (líneas exactas de mis pasos).
- Entrega: (1) informe breve (máx. 12 líneas) + (2) 6 ejercicios nuevos (solo enunciados) + (3) 1 ejercicio modelo resuelto en 5–7 líneas.

Preferencia: ${prefLabel(pref)}

Diagnóstico previo:
- Bug principal sugerido: "${primaryBug.name}"
- Bug secundario sugerido: "${secondaryBug.name}"

${evidenceBlock}

Tareas:
1) Confirma/corrige bug principal y secundario.
2) Informe (máx. 12 líneas): regla motor, checklist y 2 evidencias citadas.
3) 6 ejercicios nuevos progresivos (enunciados):
   - 2 muy simples (tipo x + 2 = 5)
   - 2 con x en ambos lados / ax + b
   - 1 con paréntesis (distributiva)
   - 1 problema con números nuevos (plantear ecuación)
4) Resuelve SOLO el ejercicio modelo (5–7 líneas) centrado en mi bug.
5) Termina con 1 pregunta.

Nota: si marqué plan (“${planChoice}”), respétalo si procede.`;

            const p2 =
`Micro-plan (60 s) para "${primaryBug.name}" con enfoque balanza:
- Regla motor (1)
- Checklist (3)
- Verificación (sustitución)
Máx. 8 líneas.`;

            const p3 =
`Training JIT: 3 ejercicios centrados en "${primaryBug.name}".
Uno cada vez; yo pego mis pasos; tú citas mi línea del bug y das 1 pista. Empieza ya.`;

            const p4 =
`Mini-examen (2 ejercicios, solo enunciados) centrado en "${primaryBug.name}":
1) ecuación con paréntesis/fracciones
2) problema con números nuevos (plantear ecuación).`;

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
