<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Fracciones 1 · Conecta 37</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="../../../img/favicon.png" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="../../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

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
            max-height: 400px;
            overflow-y: auto;
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
            font-size:1.35rem; /* Más grande para MathJax */
            font-weight:800;
            letter-spacing:0.01em;
            color:#0F172A;
            padding: 0.5rem 0;
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
        /* Bug cards */
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
        $img = "../../..";
        $pages = "../..";
        $index = "../../..";
        include "../../../menu.php";
    ?>

    <div class="container-fluid hero-header mb-5">
        <div class="container py-5 hero-content">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10 text-center text-lg-start">
                    <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-lg-start mb-3">
                        <span class="hero-chip">1º-2º ESO</span>
                        <span class="hero-chip hero-chip-alt">Fracciones y signos</span>
                        <span class="hero-chip">IA + entrenador</span>
                    </div>
                    <h1 class="display-3 text-white animated slideInDown mb-2">Fracciones 1</h1>
                    <p class="fs-4 text-white-50 mb-4">Diagnóstico por evidencia · Kit anti-bug (mcm, signos, simplificar)</p>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start hero-highlights gap-4">
                        <div><i class="bi bi-bullseye"></i>Detecta tu bug real con 2 ejercicios</div>
                        <div><i class="bi bi-lightning-charge"></i>Plan exprés (60–90 s) anti-errores</div>
                        <div><i class="bi bi-joystick"></i>Training guiado y mini-examen</div>
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

    <div class="container-xxl py-5" id="diagnostico">
        <div class="container">
            <div class="row g-4 align-items-center mb-4">
                <div class="col-12">
                    <div class="section-title">
                        <small>Diagnóstico rápido</small>
                        <h3>Tu bug real (por evidencia) + plan inmediato</h3>
                        <p class="text-muted mb-0">Resuelve 2 operaciones con fracciones y pega tus pasos. La IA detecta el patrón de error y genera prompts listos para copiar.</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column flex-md-row align-items-stretch gap-3 mt-1">
                        <div class="mini-step flex-fill"><span>1</span>Haz 2 ejercicios de fracciones</div>
                        <div class="mini-step flex-fill"><span>2</span>Pega tus pasos (Obligatorio)</div>
                        <div class="mini-step flex-fill"><span>3</span>Contesta las preguntas (Opcional)</div>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="inc-card">
                        <h4 class="mb-3">Mini-diagnóstico por evidencia</h4>
                        <p class="text-muted mb-4">No me digas “me lío”. Muéstrame tu proceso y detectamos el bug real.</p>

                        <form id="bugForm">
                            <div class="mb-3">
                                <label class="form-label">0. ¿Cómo quieres que te expliquen?</label>
                                <select class="form-select" id="pref_style">
                                    <option value="visual">Visual (recta numérica / pizza)</option>
                                    <option value="mcm_first">Paso a paso con mcm</option>
                                    <option value="minimal">Directo y corto (pero sin saltos)</option>
                                </select>
                            </div>

                            <div class="exercise-box mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div class="exercise-title">Ejercicio 1 (suma/resta distinto denominador)</div>
                                    <span class="hint-chip"><i class="bi bi-bug-fill"></i>mcm + signos</span>
                                </div>
                                <div class="math-big mb-2" id="ex1_text"></div>

                                <label class="form-label mb-1">Tu resultado <span class="text-danger">*</span></label>
                                <input class="form-control mb-2" id="ex1_answer" placeholder="Ejemplo: 5/6" />

                                <label class="form-label mb-1">Pega tus pasos (2–10 líneas) <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="ex1_steps" rows="4" placeholder="1/2 + 1/3
= ..."></textarea>
                                <div class="form-text text-muted small mt-1"><i class="bi bi-info-circle me-1"></i>Puedes usar "/" para fracciones o escribir "un medio".</div>
                            </div>

                            <div class="exercise-box mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div class="exercise-title">Ejercicio 2 (multiplicar / dividir fracciones)</div>
                                    <span class="hint-chip"><i class="bi bi-bug-fill"></i>simplificar</span>
                                </div>
                                <div class="math-big mb-2" id="ex2_text"></div>

                                <label class="form-label mb-1">Tu resultado <span class="text-danger">*</span></label>
                                <input class="form-control mb-2" id="ex2_answer" placeholder="Ejemplo: 1/2" />

                                <label class="form-label mb-1">Pega tus pasos (2–12 líneas) <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="ex2_steps" rows="4" placeholder="(2/3) * (3/4)
= ..."></textarea>
                                <div class="form-text text-muted small mt-1"><i class="bi bi-info-circle me-1"></i>Importante: No borres tus pasos si te equivocas, pégalos igual.</div>
                            </div>

                            <div class="p-3 bg-light rounded mb-3 border">
                                <h6 class="text-primary mb-3"><i class="bi bi-sliders me-2"></i>Afinar diagnóstico (Opcional)</h6>
                                
                                <div class="mb-3">
                                    <label class="form-label small">1. ¿Dónde fallas más?</label>
                                    <select class="form-select form-select-sm" id="q1_area" onchange="toggleConditionals()">
                                        <option value="">(No lo tengo claro)</option>
                                        <option value="common_den">Suma/resta con distinto denominador</option>
                                        <option value="signs">Signos en sumas/restas</option>
                                        <option value="mult_div">Multiplicar / Dividir fracciones</option>
                                        <option value="simplify">Simplificar / irreducible</option>
                                        <option value="final_wrong">Resultado final incorrecto</option>
                                    </select>
                                </div>

                                <div class="mb-3 d-none" id="group_qA">
                                    <label class="form-label small ps-2 border-start border-3 border-primary">⚠️ En mcm/denominadores, ¿qué cuesta más?</label>
                                    <select class="form-select form-select-sm" id="qA_translate_fail">
                                        <option value="">Selecciona...</option>
                                        <option value="mcm">Elegir mcm</option>
                                        <option value="expand">Expandir numeradores</option>
                                        <option value="signs_den">Signos al pasar al mcm</option>
                                    </select>
                                </div>

                                <div class="mb-3 d-none" id="group_qB">
                                    <label class="form-label small ps-2 border-start border-3 border-primary">⚠️ En multiplicar/dividir, ¿qué falla?</label>
                                    <select class="form-select form-select-sm" id="qB_isolate_fail">
                                        <option value="">Selecciona...</option>
                                        <option value="invert">Olvido invertir al dividir</option>
                                        <option value="simplify_wrong">Simplifico mal</option>
                                        <option value="sign_mix">Signos en el resultado</option>
                                        <option value="order">Orden / pasos caóticos</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label small">2. ¿Cuándo ocurre el fallo?</label>
                                    <select class="form-select form-select-sm" id="q2_moment">
                                        <option value="">(Sin especificar)</option>
                                        <option value="start">Al empezar (mcm, invertir)</option>
                                        <option value="middle">A mitad (simplificar / signos)</option>
                                        <option value="end">Al final (resultado / irreducible)</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label small">3. Tu estilo al escribir</label>
                                    <select class="form-select form-select-sm" id="q3_style">
                                        <option value="">(Sin especificar)</option>
                                        <option value="few_steps">Pocos pasos (mental)</option>
                                        <option value="messy">Desordenado / Tachones</option>
                                        <option value="ordered_but_wrong">Ordenado pero fallo igual</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label small">4. El punto rojo crítico</label>
                                    <select class="form-select form-select-sm" id="q4_redpoint">
                                        <option value="">(Sin especificar)</option>
                                        <option value="mcm_wrong">mcm mal elegido</option>
                                        <option value="cancel_wrong">Simplifico/cancelo mal</option>
                                        <option value="invert_miss">Olvido invertir al dividir</option>
                                        <option value="signs_confuse">Signos en suma/resta</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label small">5. ¿Verificas?</label>
                                    <select class="form-select form-select-sm" id="q5_verify">
                                        <option value="">(A veces)</option>
                                        <option value="always">Siempre</option>
                                        <option value="sometimes">A veces</option>
                                        <option value="never">Nunca / No sé cómo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-2">
                                <button type="button" class="btn btn-outline-secondary" onclick="regenExercises()">
                                    <i class="bi bi-arrow-repeat me-1"></i> Cambiar números
                                </button>
                                <div class="small text-muted align-self-center">Genera otros ejercicios del mismo tipo.</div>
                            </div>

                            <div class="mb-3 mt-3">
                                <label class="form-label">Extra (opcional): ¿quieres plan largo?</label>
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
                                Esto genera un "Prompt Maestro" para que tu IA (ChatGPT/Gemini) actúe como tu tutor privado.
                            </div>
                        </form>
                    </div>
                </div>

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
                                    <button class="btn btn-sm btn-outline-secondary position-absolute top-0 end-0 m-2" onclick="copyToClipboard('txtP1', this)">Copiar</button>
                                    <div class="result-box" id="txtP1"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="p2" role="tabpanel">
                                <div class="position-relative">
                                    <button class="btn btn-sm btn-outline-secondary position-absolute top-0 end-0 m-2" onclick="copyToClipboard('txtP2', this)">Copiar</button>
                                    <div class="result-box" id="txtP2"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="p3" role="tabpanel">
                                <div class="position-relative">
                                    <button class="btn btn-sm btn-outline-secondary position-absolute top-0 end-0 m-2" onclick="copyToClipboard('txtP3', this)">Copiar</button>
                                    <div class="result-box" id="txtP3"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="p4" role="tabpanel">
                                <div class="position-relative">
                                    <button class="btn btn-sm btn-outline-secondary position-absolute top-0 end-0 m-2" onclick="copyToClipboard('txtP4', this)">Copiar</button>
                                    <div class="result-box" id="txtP4"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pall" role="tabpanel">
                                <div class="position-relative">
                                    <button class="btn btn-sm btn-outline-primary position-absolute top-0 end-0 m-2" onclick="copyToClipboard('txtPAll', this)">Copiar todo</button>
                                    <div class="result-box" id="txtPAll"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="placeholderArea" class="text-center py-5 text-muted">
                        <i class="bi bi-arrow-left-circle display-4 mb-3 d-block"></i>
                        Resuelve las 2 fracciones y pega tus pasos para desbloquear tu kit.
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <p class="d-inline-flex gap-1">
                    <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMap" aria-expanded="false" aria-controls="collapseMap">
                        <i class="bi bi-map me-1"></i> Ver mapa de todos los bugs posibles
                    </button>
                </p>
                <div class="collapse" id="collapseMap">
                    <div class="row g-3" id="bugCardsContainer">
                        </div>
                </div>
            </div>

        </div>
    </div>

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

        function approxEqual(a, b, eps = 1e-9) {
            return Math.abs(a - b) < eps;
        }

        // ------------------------------------------------------------
        // Exercise generator with MathJax (LaTeX)
        // ------------------------------------------------------------
        let exData = {
            ex1: { text: "", rawText: "", expected: 0, op: "add" },
            ex2: { text: "", rawText: "", expected: 0, op: "mul" }
        };

        function buildFracText(a, b, c, d, op) {
            const sign = op === "add" ? "+" : "-";
            const latex = `$$ \\frac{${a}}{${b}} ${sign} \\frac{${c}}{${d}} $$`;
            const raw = `${a}/${b} ${sign} ${c}/${d}`; // Backup for prompt text
            return { latex, raw };
        }

        function buildMulDivText(a, b, c, d, op) {
            const sign = op === "mul" ? "\\cdot" : ":";
            const rawSign = op === "mul" ? "*" : ":";
            const latex = `$$ \\frac{${a}}{${b}} ${sign} \\frac{${c}}{${d}} $$`;
            const raw = `${a}/${b} ${rawSign} ${c}/${d}`;
            return { latex, raw };
        }

        function fracValue(a, b) { return a / b; }

        function generateExercises() {
            // ex1 add/sub (Tratamos de forzar denominadores interesantes)
            const a = rint(1, 8);
            const b = rint(2, 6); 
            const c = rint(1, 8);
            const d = rint(2, 6) * (Math.random() > 0.5 ? 2 : 1); // A veces multiplo, a veces random
            const op1 = Math.random() > 0.3 ? "add" : "sub";
            
            const obj1 = buildFracText(a, b, c, d, op1);
            const val1 = op1 === "add" ? fracValue(a, b) + fracValue(c, d) : fracValue(a, b) - fracValue(c, d);
            exData.ex1 = { text: obj1.latex, rawText: obj1.raw, expected: val1, op: op1 };

            // ex2 mul/div
            const e = rint(1, 9);
            const f = rint(2, 9);
            const g = rint(1, 9);
            const h = rint(2, 9);
            const op2 = Math.random() > 0.5 ? "mul" : "div";
            
            const obj2 = buildMulDivText(e, f, g, h, op2);
            const val2 = op2 === "mul" ? fracValue(e, f) * fracValue(g, h) : fracValue(e, f) / fracValue(g, h);
            exData.ex2 = { text: obj2.latex, rawText: obj2.raw, expected: val2, op: op2 };

            // Renderizar
            const el1 = document.getElementById("ex1_text");
            const el2 = document.getElementById("ex2_text");
            el1.innerHTML = exData.ex1.text;
            el2.innerHTML = exData.ex2.text;

            // Trigger MathJax typeset
            if (window.MathJax) {
                MathJax.typesetPromise([el1, el2]);
            }
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
        // BUG MAP
        // ------------------------------------------------------------
        const bugMap = {
          "bugs": [
            { "id": "den_magic", "name": "El Denominador mágico", "weakness": "Suma/resta usando (b+d)", "focus": "MCM y equivalentes", "exercise_pack": "add_sub_diff_den", "traps": ["b+d", "mismos denominadores mal"], "default_mantra": "STOP: mcm primero, luego suma" },
            { "id": "hunter_mcm", "name": "El Cazador de mcm", "weakness": "MCM mal elegido o incompleto", "focus": "Lista de múltiplos + elección mínima", "exercise_pack": "mcm_small", "traps": ["mcm gigante", "olvida factor"], "default_mantra": "STOP: mcm más pequeño que sirva" },
            { "id": "wild_simplifier", "name": "El Simplificador salvaje", "weakness": "Cancela donde no toca", "focus": "Simplificar solo en producto", "exercise_pack": "simplify_product", "traps": ["cancela en suma/resta", "cancela cruz mal"], "default_mantra": "STOP: simplifica SOLO en × o ÷" },
            { "id": "nervous_inverter", "name": "El Inversor nervioso", "weakness": "Divide sin invertir", "focus": "Multiplicar por la inversa", "exercise_pack": "divide_invert", "traps": ["no invierte", "invierte ambos"], "default_mantra": "STOP: dividir = × inverso" },
            { "id": "sign_switcher", "name": "El Cambia-signos", "weakness": "Pierde signos en resta / negativos", "focus": "Signos de numerador y resultado", "exercise_pack": "signs_add_sub", "traps": ["resta al revés", "doble negativo mal"], "default_mantra": "STOP: copia signos antes de operar" },
            { "id": "step_skipper", "name": "El Saltador de pasos", "weakness": "1–2 líneas sin proceso", "focus": "Un cambio por línea", "exercise_pack": "show_steps_fracs", "traps": ["salto mental", "mezcla operaciones"], "default_mantra": "STOP: escribe el paso" },
            { "id": "verifier_zero", "name": "El Verificador cero", "weakness": "No simplifica ni comprueba", "focus": "Irreducible + sentido", "exercise_pack": "verify_fraction", "traps": ["resultado no simplificado", "signo ilógico"], "default_mantra": "STOP: simplifica y estima" }
          ]
        };

        function getBugById(id) { return bugMap.bugs.find(b => b.id === id); }

        // Render Bug Cards
        const cardContainer = document.getElementById('bugCardsContainer');
        bugMap.bugs.forEach(bug => {
            const cardCol = document.createElement('div');
            cardCol.className = 'col-md-6 col-lg-4';
            cardCol.innerHTML = `
                <div class="bug-card">
                    <h6 class="text-primary fw-bold mb-2"><i class="bi bi-bug me-2"></i>${bug.name}</h6>
                    <div class="small text-muted mb-2">${bug.weakness}</div>
                    <div class="badge bg-light text-dark border fw-normal text-wrap text-start w-100">${bug.default_mantra}</div>
                </div>
            `;
            cardContainer.appendChild(cardCol);
        });

        // ------------------------------------------------------------
        // SCORING LOGIC
        // ------------------------------------------------------------
        const tieBreak = ["hunter_mcm", "den_magic", "sign_switcher", "wild_simplifier", "nervous_inverter", "step_skipper", "verifier_zero"];

        function scoreFromEvidence(ex1Ans, ex2Ans, ex1Steps, ex2Steps) {
            let scores = {};
            bugMap.bugs.forEach(b => scores[b.id] = 0);

            const s1 = normalizeMinus(ex1Steps).toLowerCase();
            const s2 = normalizeMinus(ex2Steps).toLowerCase();
            const combined = (s1 + "\n" + s2);

            // Analysis
            const stepsLen = (s1 + s2).replace(/\s+/g, "").length;
            if (stepsLen < 30) scores["step_skipper"] += 4;

            if (/(paso|pasar|al otro lado)/i.test(combined)) scores["sign_mover"] += 2;
            if (/(compruebo|sustituyo|verifico)/i.test(combined)) scores["verifier_zero"] -= 1;

            const a1 = parseRational(ex1Ans);
            const a2 = parseRational(ex2Ans);
            const exp1 = exData.ex1.expected;
            const exp2 = exData.ex2.expected;

            // ex1 correctness
            if (a1 === null || !approxEqual(a1, exp1)) {
                scores["hunter_mcm"] += 4;
                scores["den_magic"] += 3;
                scores["sign_switcher"] += 2;
            } else {
                scores["verifier_zero"] += 1;
            }

            // ex2 correctness
            if (a2 === null || !approxEqual(a2, exp2)) {
                if (exData.ex2.op === "mul") {
                    scores["wild_simplifier"] += 4;
                } else {
                    scores["nervous_inverter"] += 5;
                    scores["wild_simplifier"] += 2;
                }
                scores["sign_switcher"] += 1;
            } else {
                scores["verifier_zero"] += 1;
            }

            // If mostly wrong and short steps
            if ((a1 === null || !approxEqual(a1, exp1)) && (a2 === null || !approxEqual(a2, exp2))) {
                scores["verifier_zero"] += 2;
            }

            return scores;
        }

        function pickPrimarySecondary(scores) {
            let sorted = Object.entries(scores).sort((a, b) => {
                if (b[1] !== a[1]) return b[1] - a[1];
                return tieBreak.indexOf(a[0]) - tieBreak.indexOf(b[0]);
            });
            return { primary: sorted[0][0], secondary: sorted[1][0] };
        }

        function prefLabel(pref) {
            if (pref === "visual") return "Visual (recta / pizza)";
            if (pref === "mcm_first") return "Paso a paso con mcm";
            if (pref === "minimal") return "Directo y corto (pero sin saltos)";
            return "Paso a paso con mcm";
        }

        // ------------------------------------------------------------
        // PROMPTS GENERATION
        // ------------------------------------------------------------
        function toggleConditionals() {
            const q1 = document.getElementById('q1_area').value;
            document.getElementById('group_qA').classList.add('d-none');
            document.getElementById('group_qB').classList.add('d-none');
            
            if (q1 === "common_den") document.getElementById('group_qA').classList.remove('d-none');
            if (q1 === "mult_div" || q1 === "signs") document.getElementById('group_qB').classList.remove('d-none');
        }

        function generatePrompts() {
            const ex1Ans = document.getElementById('ex1_answer').value;
            const ex2Ans = document.getElementById('ex2_answer').value;
            const ex1Steps = document.getElementById('ex1_steps').value.trim();
            const ex2Steps = document.getElementById('ex2_steps').value.trim();

            // Solo obligatorio los ejercicios
            if (!ex1Ans || !ex2Ans || !ex1Steps || !ex2Steps) {
                alert("Por favor, completa los resultados y pega tus pasos en los dos ejercicios.");
                return;
            }

            const pref = document.getElementById('pref_style').value;
            const scores = scoreFromEvidence(ex1Ans, ex2Ans, ex1Steps, ex2Steps);
            const planChoice = document.getElementById('plan_choice').value;

            // Recogida de inputs (pueden estar vacíos)
            const q1 = document.getElementById('q1_area').value;
            const q2 = document.getElementById('q2_moment').value;
            const q3 = document.getElementById('q3_style').value;
            const q4 = document.getElementById('q4_redpoint').value;
            const q5 = document.getElementById('q5_verify').value;
            const qA = document.getElementById('qA_translate_fail').value;
            const qB = document.getElementById('qB_isolate_fail').value;

            // Helper para sumar score si el valor existe
            const bump = (id, v) => { if (scores[id] !== undefined) scores[id] += v; };

            // Solo aplica lógica si el usuario seleccionó algo
            if (q1 === "common_den") { bump("hunter_mcm", 3); bump("den_magic", 2); }
            if (q1 === "signs") { bump("sign_switcher", 3); }
            if (q1 === "mult_div") { bump("nervous_inverter", 3); bump("wild_simplifier", 2); }
            if (q1 === "simplify") { bump("wild_simplifier", 3); }
            if (q1 === "final_wrong") { bump("verifier_zero", 2); }

            if (qA === "mcm") bump("hunter_mcm", 2);
            if (qA === "expand") bump("den_magic", 2);
            if (qA === "signs_den") bump("sign_switcher", 2);

            if (qB === "invert") bump("nervous_inverter", 3);
            if (qB === "simplify_wrong") bump("wild_simplifier", 2);
            if (qB === "sign_mix") bump("sign_switcher", 2);
            if (qB === "order") bump("step_skipper", 1);

            if (q2 === "start") bump("hunter_mcm", 1);
            if (q2 === "middle") bump("wild_simplifier", 1);
            if (q2 === "end") bump("verifier_zero", 1);

            if (q3 === "few_steps") bump("step_skipper", 3);
            if (q3 === "messy") bump("sign_switcher", 1);
            
            if (q4 === "mcm_wrong") bump("hunter_mcm", 4);
            if (q4 === "cancel_wrong") bump("wild_simplifier", 3);
            if (q4 === "invert_miss") bump("nervous_inverter", 4);
            
            if (q5 === "never") bump("verifier_zero", 3);

            const picked = pickPrimarySecondary(scores);
            const primaryBug = getBugById(picked.primary);
            const secondaryBug = getBugById(picked.secondary);

            // Mostrar resultados
            document.getElementById('placeholderArea').style.display = 'none';
            document.getElementById('resultArea').style.display = 'block';
            document.getElementById('badgePrimary').innerText = "Bug principal: " + primaryBug.name;
            document.getElementById('badgeSecondary').innerText = "Secundario: " + secondaryBug.name;

            // Construcción del Prompt
            const evidenceBlock =
`EVIDENCIA REAL DEL ALUMNO:
Ejercicio 1: ${exData.ex1.rawText}
Mi solución: ${normalizeMinus(ex1Ans)}
Mis pasos:
${ex1Steps}

Ejercicio 2: ${exData.ex2.rawText}
Mi solución: ${normalizeMinus(ex2Ans)}
Mis pasos:
${ex2Steps}`;

            const p1 =
`Actúa como ENTRENADOR de matemáticas (fracciones, 1º-2º ESO).

REGLAS DE FORMATO (IMPORTANTE):
- Usa formato LaTeX para TODAS las fracciones (ej: $\\frac{1}{2}$).
- NO me des la solución completa de golpe.
- Corrige MI PROCESO, no solo el resultado.
- Cita la LÍNEA exacta donde aparece el bug (copiándola).

DIAGNÓSTICO PREVIO:
- Bug principal: "${primaryBug.name}"
- Bug secundario: "${secondaryBug.name}"
- Debilidad: ${primaryBug.weakness}
- Trampas típicas: ${primaryBug.traps.join(", ")}

${evidenceBlock}

TAREAS:
1) Analiza mis pasos y detecta el error real.
2) Explícame en 2 frases por qué he fallado (usa analogía si puedes).
3) Pídeme que repita solo el paso erróneo.`;

            const p2 =
`Actúa como coach de estudio. Dame un PLAN ANTI-BUG para fracciones.

MI PERFIL:
- Fallo en: "${primaryBug.name}"
- Mantra STOP sugerido: ${primaryBug.default_mantra}

Crea un MICRO-PLAN (lista):
A) Regla de Oro (1 frase).
B) Checklist de 3 pasos antes de operar.
C) El "Semáforo": ¿Cuándo debo detenerme?
D) Ejemplo práctico (solo planteado) similar al que fallé.`;

            const p3 =
`Actúa como mi ENTRENADOR JIT de fracciones (1º-2º ESO).

REGLAS INNEGOCIABLES:
- Dame SOLO el EJERCICIO 1 primero (enunciado con LaTeX).
- Yo pego mi proceso.
- Tú evalúas línea a línea.
- Si detectas que fallo 2 veces seguidas en el mismo concepto (ej: mcm), ACTIVA "MODO RESCATE": Para y ponme un ejercicio aislado solo de esa habilidad.

Mi bug a trabajar: "${primaryBug.name}"
Pack: ${primaryBug.exercise_pack}

MISIÓN:
Genera 3 ejercicios. Empieza con el EJERCICIO 1.`;

            const p4 =
`Genera un MINI-EXAMEN de recuperación (fracciones).

REGLAS:
- Solo enunciados (LaTeX).
- 2 ejercicios, 5 puntos cada uno.

EJERCICIO 1 (5 puntos):
- Operación combinada (suma/resta) que ataque mi bug "${primaryBug.name}".

EJERCICIO 2 (5 puntos):
- Problema o multiplicación/división que requiera simplificar al final.

Formato:
EJERCICIO 1: ...
EJERCICIO 2: ...`;

            const pAll =
`=== PROMPT 1 (Diagnóstico) ===
${p1}

=== PROMPT 2 (Plan) ===
${p2}

=== PROMPT 3 (Training) ===
${p3}

=== PROMPT 4 (Examen) ===
${p4}`;

            document.getElementById('txtP1').innerText = p1;
            document.getElementById('txtP2').innerText = p2;
            document.getElementById('txtP3').innerText = p3;
            document.getElementById('txtP4').innerText = p4;
            document.getElementById('txtPAll').innerText = pAll;
        }

        function copyToClipboard(elementId, btnElement) {
            const text = document.getElementById(elementId).innerText;
            navigator.clipboard.writeText(text).then(() => {
                const originalText = btnElement.innerText;
                const originalClass = btnElement.className;
                
                btnElement.innerText = "¡Copiado! ✅";
                btnElement.className = "btn btn-sm btn-success position-absolute top-0 end-0 m-2";
                
                setTimeout(() => {
                    btnElement.innerText = originalText;
                    btnElement.className = originalClass;
                }, 2000);
            });
        }

        // Init
        document.addEventListener("DOMContentLoaded", () => {
            generateExercises();
        });
    </script>

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