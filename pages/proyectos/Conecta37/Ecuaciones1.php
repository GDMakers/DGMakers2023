<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Ecuaciones 1 · Conecta 37</title>
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
                        <span class="hero-chip">3º ESO</span>
                        <span class="hero-chip hero-chip-alt">Ecuaciones lineales</span>
                        <span class="hero-chip">IA + entrenador</span>
                    </div>
                    <h1 class="display-3 text-white animated slideInDown mb-2">Ecuaciones 1.1</h1>
                    <p class="fs-4 text-white-50 mb-4">Diagnóstico por evidencia · Kit anti-bug (ecuaciones)</p>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start hero-highlights gap-4">
                        <div><i class="bi bi-bullseye"></i>Diagnóstico por ejercicios (no por opinión)</div>
                        <div><i class="bi bi-lightning-charge"></i>Micro-plan automático (60–90 s)</div>
                        <div><i class="bi bi-joystick"></i>Training guiado y mini-examen</div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mt-4 gap-3">
                        <a class="btn btn-light btn-lg px-4" href="#diagnostico">Empieza</a>
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
                        <p class="text-muted mb-0">Resuelve 2 ecuaciones generadas automáticamente y pega tus pasos. La IA detecta el patrón de error y genera prompts listos para copiar.</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column flex-md-row align-items-stretch gap-3 mt-1">
                        <div class="mini-step flex-fill"><span>1</span>Haz 2 ecuaciones</div>
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

                            <!-- Ejercicio 1: paréntesis/distributiva -->
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

                            <!-- Ejercicio 2: fracciones/denominadores -->
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
                                <button type="button" class="btn btn-outline-secondary" onclick="regenExercises()">
                                    <i class="bi bi-arrow-repeat me-1"></i> Cambiar ecuaciones
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
                        Resuelve las 2 ecuaciones y pega tus pasos para desbloquear tu kit.
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
        // Exercise generator (AUTO)
        // Eq1: a(x − b) = c x + d  (tests distributiva + mover términos)
        // Eq2: (x − p)/q = r        (tests fracciones/denominadores)
        // Both generated to have integer solution x0.
        // ------------------------------------------------------------
        let exData = {
            ex1: { a: 3, b: 2, c: 2, d: 5, x0: 11, text: "", expected: 11 },
            ex2: { p: 7, q: 3, r: -2, x0: 1, text: "", expected: 1 }
        };

        function buildEq1Text(a, b, c, d) {
            // a(x − b) = c x + d (d can be negative)
            const left = `${a}(x ${UMINUS} ${b})`;
            const right = `${fmtLinearTerm(c)} ${d >= 0 ? "+" : UMINUS} ${Math.abs(d)}`;
            return `${left} = ${right}`;
        }

        function buildEq2Text(p, q, r) {
            // (x − p)/q = r  OR (x + p)/q = r (we keep x − p for consistency; p can be 0)
            const num = p >= 0 ? `(x ${UMINUS} ${p})` : `(x + ${Math.abs(p)})`;
            return `${num}/${q} = ${r < 0 ? (UMINUS + Math.abs(r)) : r}`;
        }

        function generateExercises() {
            // ---- Eq1: choose a,c,b and integer x0, then compute d to satisfy
            while (true) {
                const a = rint(2, 6);
                const c = rint(1, 6);
                const b = rint(1, 9);
                const x0 = rint(-9, 12);
                // d = a(x0 - b) - c*x0
                const d = a * (x0 - b) - c * x0;
                if (Math.abs(d) > 30) continue; // keep small
                // avoid degenerate cases where both sides already similar
                if (a === c && d === -a*b) continue;
                exData.ex1 = { a, b, c, d, x0, text: buildEq1Text(a,b,c,d), expected: x0 };
                break;
            }

            // ---- Eq2: choose q and r and p so that x0 is integer & small: x0 = p + q*r
            while (true) {
                const q = rint(2, 9);
                const r = rint(-4, 4);
                const p = rint(0, 12);
                const x0 = p + q * r;
                if (x0 < -15 || x0 > 20) continue;
                exData.ex2 = { p, q, r, x0, text: buildEq2Text(p,q,r), expected: x0 };
                break;
            }

            document.getElementById("ex1_text").innerText = exData.ex1.text;
            document.getElementById("ex2_text").innerText = exData.ex2.text;
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
        // BUG MAP (ecuaciones) — se usa para construir prompts
        // ------------------------------------------------------------
        const bugMap = {
          "bugs": [
            {
              "id": "translator",
              "name": "El Traductor",
              "weakness": "Convertir texto a ecuación (incógnita + relación)",
              "focus": "Pasar de historia → tabla → ecuación",
              "exercise_pack": "word_to_equation",
              "traps": ["confundir 'más que'/'menos que'", "no definir la incógnita", "usar dato incorrecto"],
              "default_mantra": "STOP: define x y traduce frases"
            },
            {
              "id": "distributor",
              "name": "El Distribuidor",
              "weakness": "Paréntesis y distributiva (sobre todo con negativos)",
              "focus": "Expandir sin perder signos",
              "exercise_pack": "parentheses_distribute",
              "traps": ["− fuera del paréntesis", "doble negativo", "distribuir solo el primero"],
              "default_mantra": "STOP: distribuye a TODOS los términos"
            },
            {
              "id": "sign_mover",
              "name": "El Movedor de signos",
              "weakness": "“Pasar al otro lado” como magia → errores de signo",
              "focus": "Equivalencia: sumar/restar lo mismo en ambos lados",
              "exercise_pack": "balance_method",
              "traps": ["cambiar signo sin justificar", "sumar y restar en la misma línea", "perder un término"],
              "default_mantra": "STOP: misma operación en ambos lados"
            },
            {
              "id": "isolator",
              "name": "El Despejador",
              "weakness": "Aislar x en pasos ordenados (pierde el hilo)",
              "focus": "Secuencia fija: simplifica → agrupa x → despeja → verifica",
              "exercise_pack": "isolate_x_steps",
              "traps": ["hacer dos cosas a la vez", "no simplificar antes", "orden incorrecto"],
              "default_mantra": "STOP: un cambio por línea"
            },
            {
              "id": "fractioner",
              "name": "El Fraccionador",
              "weakness": "Ecuaciones con fracciones y divisiones",
              "focus": "Eliminar denominadores y dividir con control",
              "exercise_pack": "fractions_linear",
              "traps": ["multiplicar solo un lado", "MCM mal", "simplificar mal"],
              "default_mantra": "STOP: elimina denominadores primero"
            },
            {
              "id": "step_skipper",
              "name": "El Saltador de pasos",
              "weakness": "No escribe pasos → se pierde y comete fallos invisibles",
              "focus": "Formato de líneas equivalentes + orden",
              "exercise_pack": "show_your_work",
              "traps": ["saltos mentales", "operaciones mezcladas", "resultado sin control"],
              "default_mantra": "STOP: cada línea debe ser equivalente"
            },
            {
              "id": "verifier_zero",
              "name": "El Verificador cero",
              "weakness": "No comprueba: resultado incoherente o error final",
              "focus": "Sustitución + test rápido de sentido",
              "exercise_pack": "check_by_substitution",
              "traps": ["error de cálculo final", "signo final", "simplificación final"],
              "default_mantra": "STOP: sustituye y comprueba el '='"
            }
          ]
        };

        document.getElementById('jsonDisplay').textContent = JSON.stringify(bugMap, null, 2);

        function getBugById(id) { return bugMap.bugs.find(b => b.id === id); }

        // ------------------------------------------------------------
        // DETECCIÓN DETERMINISTA (por evidencia)
        // (No es perfecto, pero estable y coherente.)
        // ------------------------------------------------------------
        const tieBreak = ["fractioner", "distributor", "sign_mover", "isolator", "step_skipper", "verifier_zero", "translator"];

        function scoreFromEvidence(ex1Ans, ex2Ans, ex1Steps, ex2Steps) {
            let scores = {};
            bugMap.bugs.forEach(b => scores[b.id] = 0);

            const s1 = normalizeMinus(ex1Steps).toLowerCase();
            const s2 = normalizeMinus(ex2Steps).toLowerCase();
            const combined = (s1 + "\n" + s2);

            // Pocos pasos -> step_skipper
            const stepsLen = (s1 + s2).replace(/\s+/g, "").length;
            if (stepsLen < 30) scores["step_skipper"] += 4;

            // Si aparece "paso al otro lado" / "pasa" -> sign_mover
            if (/(paso|pasar|al otro lado)/i.test(combined)) scores["sign_mover"] += 2;

            // Si menciona comprobar/sustituir -> verifier_zero (en negativo, reduce)
            if (/(compruebo|sustituyo|verifico)/i.test(combined)) scores["verifier_zero"] -= 1;

            // Parse answers
            const a1 = parseRational(ex1Ans);
            const a2 = parseRational(ex2Ans);

            const exp1 = exData.ex1.expected;
            const exp2 = exData.ex2.expected;

            // Correctness signals
            if (a1 === null || !approxEqual(a1, exp1)) {
                scores["distributor"] += 3;
                scores["isolator"] += 2;
                scores["sign_mover"] += 1;

                // Heurística típica: no multiplica el término constante en distributiva:
                // busca patrón "... ax - b" con b sin multiplicar por a
                const a = exData.ex1.a;
                const b = exData.ex1.b;
                // ejemplo error: "3x - 2" en vez de "3x - 6"
                const reWrong = new RegExp(`\\b${a}\\s*x\\s*[-+]\\s*${b}\\b`);
                const reRight = new RegExp(`\\b${a}\\s*x\\s*[-+]\\s*${a*b}\\b`);
                if (reWrong.test(s1) && !reRight.test(s1)) {
                    scores["distributor"] += 5;
                }
            } else {
                scores["distributor"] += 1;
            }

            if (a2 === null || !approxEqual(a2, exp2)) {
                scores["fractioner"] += 5;
                scores["isolator"] += 2;
                scores["sign_mover"] += 1;

                // Si en pasos aparece "multiplico por" pero solo en un lado (muy difícil de detectar)
                // aproximación: si aparece "multiplico por" y NO aparece "en ambos lados" => sube sign_mover/fractioner
                if (/(multiplico|mcm|denominador)/i.test(s2) && !/(ambos lados|en los dos lados)/i.test(s2)) {
                    scores["fractioner"] += 2;
                    scores["sign_mover"] += 1;
                }
            } else {
                scores["fractioner"] += 1;
            }

            // Verifier: si ambos mal y no hay señales de comprobación
            if ((a1 === null || !approxEqual(a1, exp1)) && (a2 === null || !approxEqual(a2, exp2)) && !/(compruebo|sustituyo|verifico)/i.test(combined)) {
                scores["verifier_zero"] += 2;
            }

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
            if (pref === "balance") return "Método balanza (misma operación en ambos lados)";
            if (pref === "minimal") return "Directo y corto (pero sin saltos)";
            return "Pasos limpios (un cambio por línea)";
        }

        // ------------------------------------------------------------
        // PROMPTS (misma filosofía que Enteros 1)
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
                alert("Completa soluciones y pega tus pasos en las 2 ecuaciones.");
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
Ecuación 1: ${normalizeMinus(ex1Text)}
Mi solución: ${normalizeMinus(ex1Ans)}
Mis pasos:
${ex1Steps}

Ecuación 2: ${normalizeMinus(ex2Text)}
Mi solución: ${normalizeMinus(ex2Ans)}
Mis pasos:
${ex2Steps}`;

            const p1 =
`Actúa como ENTRENADOR de matemáticas de 3º ESO especializado en ecuaciones de 1er grado.

REGLAS:
- NO me des la solución completa de las ecuaciones.
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
4) Dame UNA pista para rehacer la ecuación 1 sin resolverla entera.
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
B) Checklist pre-ecuación (3 checks).
C) Ritual durante (3 pasos, “un cambio por línea”).
D) Verificación exprés (2 preguntas de 5 segundos) + sustitución si procede.
E) Ejemplo mini (NO lo resuelvas): un ejemplo parecido al mío y dime solo el PRIMER paso correcto.

DESPUÉS, PREGÚNTAME:
¿Quieres plan largo? Elige una opción:
- 10 minutos
- 2 días (2×45’)
- Training guiado
- Mini-examen

Si yo elijo uno, lo ejecutas adaptado a mi bug y a mi preferencia.`;

            const p3 =
`Actúa como mi ENTRENADOR JIT de ecuaciones (3º ESO).

REGLAS INNEGOCIABLES:
- Dame SOLO la ECUACIÓN 1 primero (enunciado).
- Yo pego mi proceso.
- Tú: (a) señalas la línea exacta del bug, (b) das microfeedback (1–2 frases), (c) das una pista, (d) pasas a la siguiente.
- NO des soluciones completas.

Mi bug: "${primaryBug.name}"
Pack de ejercicios: ${primaryBug.exercise_pack}
Trampas típicas: ${primaryBug.traps.join(", ")}
Preferencia: ${prefLabel(pref)}

MISIÓN:
Genera 3 ecuaciones del pack indicado, cada una con una trampa típica (no digas cuál).
Empieza con ECUACIÓN 1 (solo enunciado).`;

            const p4 =
`Genera un MINI-EXAMEN de recuperación para 3º ESO (ecuaciones lineales).

REGLAS:
- Dame SOLO los enunciados. NO resuelvas.
- 2 ejercicios, 5 puntos cada uno.
- Deben atacar mi bug.

Mi bug: "${primaryBug.name}"
Trampas típicas: ${primaryBug.traps.join(", ")}
Preferencia de explicación posterior: ${prefLabel(pref)}

EJERCICIO 1 (5 puntos):
- Ecuación lineal (paréntesis y/o fracciones si procede)
- Con trampa típica de mi bug

EJERCICIO 2 (5 puntos):
- Problema con contexto real que obligue a plantear UNA ecuación de 1er grado
- Enunciado claro, pero exige traducir a ecuación

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