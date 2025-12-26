<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Sistemas 1 · Conecta 37</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script id="MathJax-script" src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js" defer></script>

    <!-- Template Stylesheet -->
    <link href="../../../css/style.css" rel="stylesheet">

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

        /* Evidence exercises */
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
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php
        $img = "../../..";
        $pages = "../..";
        $index = "../../..";
        include "../../../menu.php";
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
                    <p class="fs-4 text-white-50 mb-4">Diagnóstico por evidencia · Kit anti-bug (sustitución, eliminación, signos)</p>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start hero-highlights gap-4">
                        <div><i class="bi bi-bullseye"></i>Diagnóstico por pasos (no intuición)</div>
                        <div><i class="bi bi-lightning-charge"></i>Plan exprés (60–90 s) anti-errores</div>
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
                        <small>Diagnóstico rápido</small>
                        <h3>Tu bug real (por evidencia) + plan inmediato</h3>
                        <p class="text-muted mb-0">Resuelve 2 sistemas y pega tus pasos. La IA detecta el patrón de error y genera prompts listos para copiar.</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column flex-md-row align-items-stretch gap-3 mt-1">
                        <div class="mini-step flex-fill"><span>1</span>Resuelve 2 sistemas</div>
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
                                    <option value="visual">Visual (pares ordenados / gráficas)</option>
                                    <option value="substitution">Paso a paso con sustitución</option>
                                    <option value="elimination">Paso a paso con eliminación</option>
                                    <option value="minimal">Directo y corto (pero sin saltos)</option>
                                </select>
                            </div>

                            <!-- Ejercicio 1: sustitución -->
                            <div class="exercise-box mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div class="exercise-title">Ejercicio 1 (sustitución)</div>
                                    <span class="hint-chip"><i class="bi bi-bug-fill"></i>despejar y sustituir</span>
                                </div>
                                <div class="math-big mb-2" id="ex1_text">—</div>

                                <label class="form-label mb-1">Tu resultado (x, y)</label>
                                <input class="form-control mb-2" id="ex1_answer" placeholder="Ejemplo: x=2, y=−1" />

                                <label class="form-label mb-1">Pega tus pasos (2–10 líneas)</label>
                                <textarea class="form-control" id="ex1_steps" rows="4" placeholder="Ejemplo:
Despejo x de la primera
Sustituyo en la segunda
Resuelvo y obtengo y
Sustituyo para x"></textarea>
                            </div>

                            <!-- Ejercicio 2: eliminación -->
                            <div class="exercise-box mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div class="exercise-title">Ejercicio 2 (eliminación)</div>
                                    <span class="hint-chip"><i class="bi bi-bug-fill"></i>sumar/restar con signos</span>
                                </div>
                                <div class="math-big mb-2" id="ex2_text">—</div>

                                <label class="form-label mb-1">Tu resultado (x, y)</label>
                                <input class="form-control mb-2" id="ex2_answer" placeholder="Ejemplo: x=1, y=3" />

                                <label class="form-label mb-1">Pega tus pasos (2–12 líneas)</label>
                                <textarea class="form-control" id="ex2_steps" rows="4" placeholder="Ejemplo:
Multiplico la ecuación 2 por −2
La sumo con la 1
Obtengo x
Sustituyo para y"></textarea>
                            </div>

                            <!-- Q1 -->
                            <div class="mb-3">
                                <label class="form-label">1. ¿Dónde fallas más?</label>
                                <select class="form-select" id="q1_area" onchange="toggleConditionals()">
                                    <option value="">Selecciona...</option>
                                    <option value="copy">Copiar términos/signos</option>
                                    <option value="elimination">Eliminar variables</option>
                                    <option value="substitution">Sustitución / despejar</option>
                                    <option value="signs">Signos al sumar/restar ecuaciones</option>
                                    <option value="distribute">Multiplicar ecuación (distributiva)</option>
                                    <option value="final_wrong">Resultado final incorrecto</option>
                                </select>
                            </div>

                            <!-- QA (Condicional copy/elimination) -->
                            <div class="mb-3 d-none" id="group_qA">
                                <label class="form-label ps-3 border-start border-3 border-primary">⚠️ En copia/eliminación, ¿qué cuesta más?</label>
                                <select class="form-select" id="qA_translate_fail">
                                    <option value="copy_wrong">Copiar términos/signos</option>
                                    <option value="scale_wrong">Escalar para eliminar</option>
                                    <option value="choose_wrong">Elijo mal qué eliminar</option>
                                </select>
                            </div>

                            <!-- QB (Condicional substitution/signs/distribute) -->
                            <div class="mb-3 d-none" id="group_qB">
                                <label class="form-label ps-3 border-start border-3 border-primary">⚠️ En sustitución/distributiva, ¿qué falla?</label>
                                <select class="form-select" id="qB_isolate_fail">
                                    <option value="despeje">Despejar mal</option>
                                    <option value="sustituir_mal">Sustituir en ecuación incorrecta</option>
                                    <option value="sign_mix">Signos al sumar/restar</option>
                                    <option value="distributiva">Distributiva al multiplicar ecuación</option>
                                </select>
                            </div>

                            <!-- Q2 -->
                            <div class="mb-3">
                                <label class="form-label">2. ¿Cuándo ocurre el fallo?</label>
                                <select class="form-select" id="q2_moment">
                                    <option value="">Selecciona...</option>
                                    <option value="start">Al empezar (mcm, invertir)</option>
                                    <option value="middle">A mitad (simplificar / signos)</option>
                                    <option value="end">Al final (resultado / irreducible)</option>
                                </select>
                            </div>

                            <!-- Q3 -->
                            <div class="mb-3">
                                <label class="form-label">3. Tu estilo al escribir</label>
                                <select class="form-select" id="q3_style">
                                    <option value="">Selecciona...</option>
                                    <option value="few_steps">Pocos pasos (mental)</option>
                                    <option value="messy">Desordenado / Tachones</option>
                                    <option value="ordered_but_wrong">Ordenado pero fallo igual</option>
                                </select>
                            </div>

                            <!-- Q4 -->
                            <div class="mb-3">
                                <label class="form-label">4. El punto rojo crítico</label>
                                <select class="form-select" id="q4_redpoint">
                                    <option value="">Selecciona...</option>
                                    <option value="mcm_wrong">mcm mal elegido</option>
                                    <option value="cancel_wrong">Simplifico/cancelo mal</option>
                                    <option value="invert_miss">Olvido invertir al dividir</option>
                                    <option value="signs_confuse">Signos en suma/resta</option>
                                </select>
                            </div>

                            <!-- Q5 -->
                            <div class="mb-3">
                                <label class="form-label">5. ¿Verificas?</label>
                                <select class="form-select" id="q5_verify">
                                    <option value="always">Siempre</option>
                                    <option value="sometimes">A veces</option>
                                    <option value="never">Nunca / No sé cómo</option>
                                </select>
                            </div>

                            <div class="d-flex flex-wrap gap-2">
                                <button type="button" class="btn btn-outline-secondary" onclick="regenExercises()">
                                    <i class="bi bi-arrow-repeat me-1"></i> Cambiar ejercicios
                                </button>
                                <div class="small text-muted align-self-center">Genera nuevos números (mismo estilo).</div>
                            </div>

                            <!-- Plan opcional -->
                            <div class="mb-3 mt-3">
                                <label class="form-label">Extra (opcional): ¿quieres que también te proponga un plan largo?</label>
                                <select class="form-select" id="plan_choice">
                                    <option value="ask">Pregúntame después (recomendado)</option>
                                    <option value="10min">Sí, plan rápido 10 minutos</option>
                                    <option value="2x45">Sí, plan 2 días (2×45’)</option>
                                    <option value="training">Sí, training guiado (3 rondas)</option>
                                    <option value="exam">Sí, mini-examen (6 min)</option>
                                </select>
                            </div>

                            <div class="d-grid mt-4">
                                <button type="button" class="btn btn-primary btn-lg" onclick="generatePrompts()">
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
                        Resuelve los 2 sistemas y pega tus pasos para desbloquear tu kit.
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
        include "../../../footer.php";
    ?>

    <script>
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

        function fmtSigned(n) {
            if (n < 0) return UMINUS + String(Math.abs(n));
            return String(n);
        }

        function fmtLinearTerm(coeff, variable = "x") {
            // coeff positive integer expected here
            if (coeff === 1) return variable;
            return `${coeff}${variable}`;
        }

        function parseRational(s) {
            // accepts: "x=3", "3", "-4", "3/2"
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

        function approxEqual(a, b, eps = 1e-9) {
            return Math.abs(a - b) < eps;
        }

        // ------------------------------------------------------------
        // Exercise generator (AUTO) para sistemas
        // ex1: sustitución
        // ex2: eliminación
        // ------------------------------------------------------------
        let exData = {
            ex1: { text: "", expected: null, op: "substitution" },
            ex2: { text: "", expected: null, op: "elimination" }
        };

        function buildSystemSub(a1, b1, c1, a2, b2, c2) {
            return `\\begin{cases} ${a1}x ${b1>=0?"+":UMINUS} ${Math.abs(b1)}y = ${c1} \\\\ ${a2}x ${b2>=0?"+":UMINUS} ${Math.abs(b2)}y = ${c2} \\end{cases}`;
        }

        function buildSystemElim(a1, b1, c1, a2, b2, c2) {
            return `\\begin{cases} ${a1}x ${b1>=0?"+":UMINUS} ${Math.abs(b1)}y = ${c1} \\\\ ${a2}x ${b2>=0?"+":UMINUS} ${Math.abs(b2)}y = ${c2} \\end{cases}`;
        }

        function renderMath(id, latex) {
            const el = document.getElementById(id);
            if (!el) return;
            el.textContent = latex;
            if (window.MathJax && MathJax.typesetPromise) {
                MathJax.typesetPromise([el]).catch(() => {});
            }
        }

        function generateExercises() {
            // Sistema sencillo para sustitución
            const x = rint(-4, 6);
            const y = rint(-4, 6);
            const a1 = rint(1, 4), b1 = rint(1, 4);
            const a2 = rint(1, 4), b2 = rint(1, 4);
            const c1 = a1 * x + b1 * y;
            const c2 = a2 * x + b2 * y;
            exData.ex1 = { text: buildSystemSub(a1, b1, c1, a2, b2, c2), expected: {x, y}, op: "substitution" };

            // Sistema para eliminación (evita proporcionales)
            while (true) {
                const x2 = rint(-5, 7);
                const y2 = rint(-5, 7);
                const A1 = rint(1, 5), B1 = rint(1, 5);
                const A2 = rint(1, 5), B2 = rint(1, 5);
                if (Math.abs(A1*B2 - A2*B1) < 1) continue;
                const C1 = A1 * x2 + B1 * y2;
                const C2 = A2 * x2 + B2 * y2;
                exData.ex2 = { text: buildSystemElim(A1, B1, C1, A2, B2, C2), expected: {x:x2, y:y2}, op: "elimination" };
                break;
            }

            renderMath("ex1_text", exData.ex1.text);
            renderMath("ex2_text", exData.ex2.text);
        }

        function regenExercises() {
            generateExercises();
            document.getElementById("ex1_answer").value = "";
            document.getElementById("ex2_answer").value = "";
            document.getElementById("ex1_steps").value = "";
            document.getElementById("ex2_steps").value = "";
            document.getElementById("resultArea").style.display = "none";
            document.getElementById("placeholderArea").style.display = "block";
        }

        // ------------------------------------------------------------
        // BUG MAP (sistemas) — se usa para construir prompts
        // ------------------------------------------------------------
        const bugMap = {
          "bugs": [
            { "id": "copier", "name": "El Copiador", "weakness": "Copia mal términos o signos al pasar de línea", "focus": "Re-escritura exacta", "exercise_pack": "copy_terms", "traps": ["cambia signo", "pierde término"], "default_mantra": "STOP: copia antes de operar" },
            { "id": "eliminator", "name": "El Eliminador", "weakness": "Intenta eliminar sin igualar coeficientes", "focus": "Escalar y sumar/restar", "exercise_pack": "elimination_basic", "traps": ["variable equivocada", "coeficientes no iguales"], "default_mantra": "STOP: iguala coef y elimina" },
            { "id": "sign_switcher", "name": "El Cambia-signos", "weakness": "Signos al sumar/restar ecuaciones", "focus": "Signos de cada término", "exercise_pack": "signs_systems", "traps": ["signos invertidos", "resta mal"], "default_mantra": "STOP: copia signos antes de sumar" },
            { "id": "substitutor", "name": "El Sustituidor", "weakness": "Despeja mal o sustituye en ecuación incorrecta", "focus": "Despejar limpio + sustituir", "exercise_pack": "substitution_steps", "traps": ["despeje errado", "sustituye en mal ecuación"], "default_mantra": "STOP: despeja bien, luego sustituye" },
            { "id": "distributor", "name": "El Distribuidor", "weakness": "Falla la distributiva al multiplicar una ecuación", "focus": "Multiplicar cada término", "exercise_pack": "distribute_system", "traps": ["olvida término", "signo mal"], "default_mantra": "STOP: multiplica TODO" },
            { "id": "verifier_zero", "name": "El Verificador cero", "weakness": "No sustituye para comprobar (x,y)", "focus": "Check en ambas ecuaciones", "exercise_pack": "verify_system", "traps": ["no comprueba", "acepta valores incoherentes"], "default_mantra": "STOP: sustituye y comprueba" },
            { "id": "step_skipper", "name": "El Saltador de pasos", "weakness": "1–2 líneas sin proceso", "focus": "Un cambio por línea", "exercise_pack": "show_steps_system", "traps": ["salto mental", "mezcla operaciones"], "default_mantra": "STOP: escribe el paso" }
          ]
        };

        document.getElementById('jsonDisplay').textContent = JSON.stringify(bugMap, null, 2);

        function getBugById(id) { return bugMap.bugs.find(b => b.id === id); }

        // ------------------------------------------------------------
        // DETECCIÓN DETERMINISTA (por evidencia)
        // (No es perfecto, pero estable y coherente.)
        // ------------------------------------------------------------
        const tieBreak = ["copier", "eliminator", "sign_switcher", "substitutor", "distributor", "step_skipper", "verifier_zero"];

        function scoreFromEvidence(ex1Ans, ex2Ans, ex1Steps, ex2Steps) {
            let scores = {};
            bugMap.bugs.forEach(b => scores[b.id] = 0);

            const s1 = normalizeMinus(ex1Steps).toLowerCase();
            const s2 = normalizeMinus(ex2Steps).toLowerCase();
            const combined = (s1 + "\n" + s2);

            // Pocos pasos -> step_skipper
            const stepsLen = (s1 + s2).replace(/\s+/g, "").length;
            if (stepsLen < 30) scores["step_skipper"] += 4;

            // Verificación mencionada reduce riesgo de verificador cero
            if (/(compruebo|verifico|sustituyo)/i.test(combined)) scores["verifier_zero"] -= 1;

            // Heurísticas de texto
            if (/(copio|paso)/i.test(combined)) scores["copier"] += 1;
            if (/(elimino|eliminar|sumo ecuaciones|resto ecuaciones)/i.test(combined)) scores["eliminator"] += 2;
            if (/(sustituyo|sustitución|despejo)/i.test(combined)) scores["substitutor"] += 2;
            if (/(multiplico.*ecuaci[oó]n|distribu)/i.test(combined)) scores["distributor"] += 2;
            if (/(signo|negativo)/i.test(combined)) scores["sign_switcher"] += 1;

            // Sin verificación
            if (!/(compruebo|verifico)/i.test(combined)) scores["verifier_zero"] += 1;

            // Clamp negatives to 0 for sorting sanity
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

        function prefLabel(pref) {
            if (pref === "visual") return "Visual (pares / gráficas rápidas)";
            if (pref === "substitution") return "Paso a paso con sustitución";
            if (pref === "elimination") return "Paso a paso con eliminación";
            if (pref === "minimal") return "Directo y corto (pero sin saltos)";
            return "Paso a paso con sustitución";
        }

        // ------------------------------------------------------------
        // PROMPTS (misma filosofía que Enteros 1)
        // ------------------------------------------------------------
        function generatePrompts() {
            const pref = document.getElementById('pref_style').value;

            const ex1Text = document.getElementById('ex1_text').innerText || document.getElementById('ex1_text').textContent;
            const ex2Text = document.getElementById('ex2_text').innerText || document.getElementById('ex2_text').textContent;

            const ex1Ans = document.getElementById('ex1_answer').value;
            const ex2Ans = document.getElementById('ex2_answer').value;

            const ex1Steps = document.getElementById('ex1_steps').value.trim();
            const ex2Steps = document.getElementById('ex2_steps').value.trim();

            if (!ex1Ans || !ex2Ans || !ex1Steps || !ex2Steps) {
                alert("Completa soluciones y pega tus pasos en los 2 ejercicios.");
                return;
            }

            const planChoice = document.getElementById('plan_choice').value;

            const scores = scoreFromEvidence(ex1Ans, ex2Ans, ex1Steps, ex2Steps);
            const q1 = document.getElementById('q1_area').value;
            const q2 = document.getElementById('q2_moment').value;
            const q3 = document.getElementById('q3_style').value;
            const q4 = document.getElementById('q4_redpoint').value;
            const q5 = document.getElementById('q5_verify').value;
            const qA = document.getElementById('qA_translate_fail').value;
            const qB = document.getElementById('qB_isolate_fail').value;

            const bump = (id, v) => { if (scores[id] !== undefined) scores[id] += v; };

            if (q1 === "copy") bump("copier", 3);
            if (q1 === "elimination") bump("eliminator", 3);
            if (q1 === "substitution") bump("substitutor", 3);
            if (q1 === "signs") bump("sign_switcher", 3);
            if (q1 === "distribute") bump("distributor", 3);
            if (q1 === "final_wrong") bump("verifier_zero", 2);

            if (qA === "copy_wrong") bump("copier", 3);
            if (qA === "scale_wrong") bump("eliminator", 2);
            if (qA === "choose_wrong") bump("eliminator", 2);

            if (qB === "despeje") bump("substitutor", 3);
            if (qB === "sustituir_mal") bump("substitutor", 2);
            if (qB === "sign_mix") bump("sign_switcher", 2);
            if (qB === "distributiva") bump("distributor", 3);

            if (q2 === "start") bump("copier", 1);
            if (q2 === "middle") bump("eliminator", 1);
            if (q2 === "end") bump("verifier_zero", 1);

            if (q3 === "few_steps") bump("step_skipper", 3);
            if (q3 === "messy") bump("copier", 1);
            if (q3 === "ordered_but_wrong") bump("verifier_zero", 1);

            if (q4 === "mcm_wrong") bump("eliminator", 4);
            if (q4 === "cancel_wrong") bump("distributor", 3);
            if (q4 === "invert_miss") bump("substitutor", 3);
            if (q4 === "signs_confuse") bump("sign_switcher", 3);

            if (q5 === "never") bump("verifier_zero", 3);
            if (q5 === "sometimes") bump("verifier_zero", 1);
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
Mi solución: ${normalizeMinus(ex1Ans)}
Mis pasos:
${ex1Steps}

Ejercicio 2: ${normalizeMinus(ex2Text)}
Mi solución: ${normalizeMinus(ex2Ans)}
Mis pasos:
${ex2Steps}`;

            const p1 =
`Actúa como ENTRENADOR de matemáticas (sistemas, 3º-4º ESO).

REGLAS:
- NO me des la solución completa del sistema.
- Corrige MI PROCESO, no solo el resultado.
- Cita la LÍNEA exacta donde aparece el bug (copiándola).
- Haz 1 pregunta cada vez. (Yo respondo y tú sigues)

PREFERENCIA DE EXPLICACIÓN:
- Usa: ${prefLabel(pref)} (si ayuda)

DIAGNÓSTICO PREVIO (generado por la web):
- Bug principal: "${primaryBug.name}"
- Bug secundario: "${secondaryBug.name}"
- Debilidad: ${primaryBug.weakness}
- Foco: ${primaryBug.focus}
- Trampas típicas: ${primaryBug.traps.join(", ")}

${evidenceBlock}

TAREAS:
1) Confirma o corrige el bug mirando MIS pasos (si está mal, cámbialo y explica por qué).
2) Dime en 2 frases por qué caigo ahí.
3) Señala el paso exacto donde me equivoqué (cita la línea).
4) Dame UNA pista para rehacer el ejercicio 1 sin resolverlo entero.
5) Hazme 1 pregunta para comprobar si lo entendí.`;

            const p2 =
`Actúa como coach de estudio para 3º ESO. Quiero un plan que funcione ya mismo.

MI BUG PRINCIPAL:
- "${primaryBug.name}"
- Debilidad: ${primaryBug.weakness}
- Foco: ${primaryBug.focus}
- Mantra STOP: ${primaryBug.default_mantra}

PREFERENCIA:
- Explicación con: ${prefLabel(pref)}

MICRO-PLAN AUTOMÁTICO (obligatorio, 60–90 segundos):
A) Regla-motor (1 sola regla que aplico siempre) — en 1 frase.
B) Checklist pre-fracción (3 checks: mcm/invertir/simplificar).
C) Ritual durante (3 pasos, “un cambio por línea”).
D) Verificación exprés (2 preguntas de 5 segundos) + irreducible.
E) Ejemplo mini (NO lo resuelvas): un ejemplo parecido al mío y dime solo el PRIMER paso correcto.

DESPUÉS, PREGÚNTAME:
¿Quieres plan largo? Elige una opción:
- 10 minutos
- 2 días (2×45’)
- Training guiado
- Mini-examen

Si yo elijo uno, lo ejecutas adaptado a mi bug y a mi preferencia.`;

            const p3 =
`Actúa como mi ENTRENADOR JIT de sistemas (3º-4º ESO).

REGLAS INNEGOCIABLES:
- Dame SOLO el EJERCICIO 1 primero (enunciado).
- Yo pego mi proceso.
- Tú: (a) señalas la línea exacta del bug, (b) das microfeedback (1–2 frases), (c) das una pista, (d) pasas a la siguiente.
- NO des soluciones completas.

Mi bug: "${primaryBug.name}"
Pack de ejercicios: ${primaryBug.exercise_pack}
Trampas típicas: ${primaryBug.traps.join(", ")}
Preferencia: ${prefLabel(pref)}

MISIÓN:
Genera 3 sistemas del pack indicado, cada uno con una trampa típica (no digas cuál).
Empieza con EJERCICIO 1 (solo enunciado).`;

            const p4 =
`Genera un MINI-EXAMEN de recuperación para 3º-4º ESO (sistemas).

REGLAS:
- Dame SOLO los enunciados. NO resuelvas.
- 2 ejercicios, 5 puntos cada uno.
- Deben atacar mi bug.

Mi bug: "${primaryBug.name}"
Trampas típicas: ${primaryBug.traps.join(", ")}
Preferencia de explicación posterior: ${prefLabel(pref)}

EJERCICIO 1 (5 puntos):
- Sistema por eliminación (coeficientes pequeños, signos mixtos)
- Con trampa típica de mi bug

EJERCICIO 2 (5 puntos):
- Sistema por sustitución o igualación (despeje claro)
- Enunciado claro, sin resolver

Formato:
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
Si yo he marcado en la web una preferencia de plan (“${planChoice}”), respétala si tiene sentido; si no, pregúntame cuál quiero.`;

            document.getElementById('txtP1').innerText = p1;
            document.getElementById('txtP2').innerText = p2;
            document.getElementById('txtP3').innerText = p3;
            document.getElementById('txtP4').innerText = p4;
            document.getElementById('txtPAll').innerText = pAll;
        }

        function copyToClipboard(elementId) {
            const text = document.getElementById(elementId).innerText;
            navigator.clipboard.writeText(text).then(() => {
                alert("¡Copiado al portapapeles!");
            });
        }

        // Init
        document.addEventListener("DOMContentLoaded", () => {
            generateExercises();
        });
    </script>

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
