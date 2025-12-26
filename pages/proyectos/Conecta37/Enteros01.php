<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Enteros 1 · Conecta 37</title>
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
                        <p class="text-muted mb-0">Resuelve 2 mini-ejercicios generados automáticamente y pega tus pasos. La IA detecta el patrón de error y genera prompts listos para copiar.</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column flex-md-row align-items-stretch gap-3 mt-1">
                        <div class="mini-step flex-fill"><span>1</span>Haz 2 ejercicios</div>
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
                        Haz los 2 ejercicios y pega tus pasos para desbloquear tu kit.
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

        function rint(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
        function fmtInt(n) {
            if (n < 0) return UMINUS + String(Math.abs(n));
            return String(n);
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
        // Exercise generator (AUTO)
        // ex1: −a − (−b)   with a,b natural
        // ex2: a − b(−c + d) with a,b,c,d natural
        // ------------------------------------------------------------
        let exData = {
            ex1: { a: 3, b: 4, text: "", expected: 1 },
            ex2: { a: 5, b: 2, c: 3, d: 4, text: "", expected: 3 }
        };

        function generateExercises() {
            // Ej1: keep small & non-trivial
            const a1 = rint(1, 9);
            let b1 = rint(1, 9);
            // avoid b==a too often (boring 0)
            if (b1 === a1) b1 = (b1 % 9) + 1;

            // Ej2: keep moderate numbers
            const a2 = rint(4, 20);
            const b2 = rint(2, 6);
            const c2 = rint(1, 9);
            let d2 = rint(1, 9);
            if (d2 === c2) d2 = (d2 % 9) + 1; // avoid 0 inside

            // text (use unicode minus and dot)
            const ex1Text = `${UMINUS}${a1} ${UMINUS} (${UMINUS}${b1})`;
            const ex2Text = `${a2} ${UMINUS} ${b2}·(${UMINUS}${c2} + ${d2})`;

            // expected (compute with JS, deterministic)
            const ex1Expected = (-a1) - (-b1); // b1 - a1
            const ex2Expected = a2 - b2 * ((-c2) + d2); // a2 - b2*(d2 - c2)

            exData = {
                ex1: { a: a1, b: b1, text: ex1Text, expected: ex1Expected },
                ex2: { a: a2, b: b2, c: c2, d: d2, text: ex2Text, expected: ex2Expected }
            };

            // paint
            document.getElementById("ex1_text").innerText = exData.ex1.text;
            document.getElementById("ex2_text").innerText = exData.ex2.text;
        }

        function regenExercises() {
            generateExercises();
            // Clear inputs to prevent mismatch
            document.getElementById("ex1_answer").value = "";
            document.getElementById("ex2_answer").value = "";
            document.getElementById("ex1_steps").value = "";
            document.getElementById("ex2_steps").value = "";
            // Hide result area if it was open
            document.getElementById("resultArea").style.display = "none";
            document.getElementById("placeholderArea").style.display = "block";
        }

        // ------------------------------------------------------------
        // BUG MAP (ENTEROS) — usado para construir prompts
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
        // DETECCIÓN DETERMINISTA (por evidencia, con ejercicios dinámicos)
        // ------------------------------------------------------------
        function scoreFromEvidence(ex1Ans, ex2Ans, ex1Steps, ex2Steps) {
          let scores = {};
          bugMap.bugs.forEach(b => scores[b.id] = 0);

          const s1 = normalizeMinus(ex1Steps).toLowerCase();
          const s2 = normalizeMinus(ex2Steps).toLowerCase();
          const combined = (s1 + "\n" + s2);

          // Pocas explicaciones => step_skipper
          const stepsLen = (s1 + s2).replace(/\s+/g, "").length;
          if (stepsLen < 18) scores["step_skipper"] += 4;

          // Regex pistas
          if (/(--|\+\-|\-\+|\+\s*\-|\-\s*\+)/.test(combined)) scores["double_sign"] += 3;
          if (/\-\s*\(\s*\-\s*\d+/.test(combined) || /-\(-\d+/.test(combined)) scores["subtract_neg"] += 2;
          if (/(prioridad|par[eé]ntesis|primero|\(\s*\))/i.test(combined)) scores["priority"] += 1;
          if (/(recta|ascensor|sube|baja)/i.test(combined)) scores["add_sub_core"] += 1;
          if (/(deuda|dinero|debo|gano|pierdo)/i.test(combined)) scores["add_sub_core"] += 1;

          const a1 = parseIntSafe(ex1Ans);
          const a2 = parseIntSafe(ex2Ans);

          // Expected answers (dynamic)
          const exp1 = exData.ex1.expected;
          const exp2 = exData.ex2.expected;

          // ---- Exercise 1 wrong patterns for −a − (−b)
          // common wrong: −a − b  => −(a+b)
          const wrong1_ex1 = -(exData.ex1.a + exData.ex1.b);
          // common wrong: a + b (ignores first minus)
          const wrong2_ex1 = (exData.ex1.a + exData.ex1.b);
          // common wrong: a − b (drops both negatives)
          const wrong3_ex1 = (exData.ex1.a - exData.ex1.b);

          if (a1 !== null && a1 !== exp1) {
            if (a1 === wrong1_ex1) { scores["subtract_neg"] += 5; scores["double_sign"] += 2; }
            else if (a1 === wrong2_ex1) { scores["double_sign"] += 4; scores["add_sub_core"] += 2; }
            else if (a1 === wrong3_ex1) { scores["double_sign"] += 3; scores["add_sub_core"] += 1; }
            else { scores["double_sign"] += 2; scores["add_sub_core"] += 2; }
          } else if (a1 === exp1) {
            scores["subtract_neg"] += 1;
          }

          // ---- Exercise 2 wrong patterns for a − b(−c + d)
          // correct: a − b*((-c)+d)  = a − b*(d−c)
          const a = exData.ex2.a, b = exData.ex2.b, c = exData.ex2.c, d = exData.ex2.d;

          // ignore parentheses: a − b*(−c) + d  => a + b*c + d
          const wrong_no_paren = a - b*(-c) + d; // a + b*c + d
          // wrong inside: (−c + d) treated as −(c+d) => a − b*(−(c+d)) = a + b*(c+d)
          const wrong_inside = a + b*(c + d);
          // wrong sign of product/outer minus: a + b*(d−c)
          const wrong_plus = a + b*((-c) + d); // a + b*(d-c)

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
        // PROMPTS
        // ------------------------------------------------------------
        function generatePrompts() {
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

          const scores = scoreFromEvidence(ex1Ans, ex2Ans, ex1Steps, ex2Steps);
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
1) Detecta mi bug REAL mirando mis pasos (si el bug previo está mal, corrígelo).
2) Dime en 2 frases por qué caigo ahí.
3) Señala el paso exacto donde me equivoqué (cita la línea).
4) Dame UNA pista para rehacer el ejercicio 1 sin resolverlo entero.
5) Hazme 1 pregunta para comprobar si lo entendí.`;

          const p2 =
`Actúa como coach de estudio para 1º ESO. Quiero un plan que funcione ya mismo.

MI BUG PRINCIPAL:
- "${primaryBug.name}"
- Debilidad: ${primaryBug.weakness}
- Foco: ${primaryBug.focus}
- Mantra STOP: ${primaryBug.default_mantra}

PREFERENCIA:
- Explicación con: ${prefLabel(pref)}

MICRO-PLAN AUTOMÁTICO (obligatorio, 60–90 segundos):
A) Regla-motor (1 sola regla que aplico siempre) — en 1 frase.
B) Checklist pre-operación (3 checks).
C) Ritual durante (3 pasos, “un cambio por línea”).
D) Verificación exprés (2 preguntas de 5 segundos).
E) Ejemplo mini (NO lo resuelvas): un ejemplo parecido al mío y dime solo el PRIMER paso correcto.

DESPUÉS, PREGÚNTAME:
¿Quieres plan largo? Elige una opción:
- 10 minutos
- 2 días (2×45’)
- Training guiado
- Mini-examen

Si yo elijo uno, lo ejecutas adaptado a mi bug y a mi preferencia.`;

          const p3 =
`Actúa como mi ENTRENADOR JIT de enteros (1º ESO).

REGLAS INNEGOCIABLES:
- Dame SOLO el EJERCICIO 1 primero (enunciado).
- Yo pego mi proceso.
- Tú: (a) señalas la línea exacta del bug, (b) das microfeedback (1–2 frases), (c) das una pista, (d) pasas al siguiente.
- NO des soluciones completas.

Mi bug: "${primaryBug.name}"
Pack de ejercicios: ${primaryBug.exercise_pack}
Trampas típicas: ${primaryBug.traps.join(", ")}
Preferencia: ${prefLabel(pref)}

MISIÓN:
Genera 3 ejercicios del pack indicado, cada uno con una trampa típica (no digas cuál).
Empieza con EJERCICIO 1 (solo enunciado).`;

          const p4 =
`Genera un MINI-EXAMEN de recuperación para 1º ESO (enteros).

REGLAS:
- Dame SOLO los enunciados. NO resuelvas.
- 2 ejercicios, 5 puntos cada uno.
- Deben atacar mi bug.

Mi bug: "${primaryBug.name}"
Trampas típicas: ${primaryBug.traps.join(", ")}
Preferencia de explicación posterior: ${prefLabel(pref)}

EJERCICIO 1 (5 puntos):
- Operación combinada con enteros (paréntesis y/o ×/÷ si procede)
- Con trampa típica de mi bug

EJERCICIO 2 (5 puntos):
- Problema con contexto real (temperaturas, deudas, ascensor, puntos)
- Obliga a escribir una expresión con enteros antes de calcular

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

        // Init: generate exercises on load
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
