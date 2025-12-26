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

        .inc-card h4 {
            font-weight: 700;
            color: #0F172A;
        }

        .form-label {
            font-weight: 600;
            color: #015183;
            font-family: 'Open Sans', sans-serif;
        }

        .form-select,
        .form-select option {
            font-family: 'Open Sans', sans-serif;
        }

        .result-box {
            background: #f8f9fa;
            border: 1px dashed rgba(1, 81, 131, 0.25);
            border-radius: 0.5rem;
            padding: 1.5rem;
            font-family: monospace;
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

        .hero-header::before {
            top: -140px;
            left: -60px;
        }

        .hero-header::after {
            bottom: -180px;
            right: -120px;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero-chip {
            display: inline-block;
            padding: 0.35rem 0.9rem;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.18);
            color: #ffffff;
            font-weight: 700;
            letter-spacing: 0.01em;
        }

        .hero-chip-alt {
            background: rgba(255, 255, 255, 0.26);
        }

        .hero-highlights {
            color: #e8f4ff;
            font-weight: 600;
        }

        .hero-highlights i {
            color: #ffdd57;
            margin-right: 0.35rem;
        }

        .section-title small {
            letter-spacing: 0.08em;
            text-transform: uppercase;
            font-weight: 800;
            color: var(--primary);
        }

        .section-title h3 {
            font-weight: 800;
            margin-bottom: 0.35rem;
        }

        .mini-step {
            padding: 0.75rem 1rem;
            border-radius: 0.85rem;
            background: #f1f5f9;
            font-weight: 600;
            color: #0F172A;
            border: 1px solid rgba(1, 81, 131, 0.08);
        }

        .mini-step span {
            color: var(--primary);
            font-weight: 800;
            margin-right: 0.35rem;
        }

        #placeholderArea {
            background: #f8fafc;
            border: 1px dashed rgba(1, 81, 131, 0.2);
            border-radius: 1rem;
        }

        .tab-content .btn.btn-sm {
            border-radius: 999px;
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
                    <h1 class="display-3 text-white animated slideInDown mb-2">Enteros 1.1</h1>
                    <p class="fs-4 text-white-50 mb-4">Generador de prompts blindados · Mapa de bugs (signos)</p>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start hero-highlights gap-4">
                        <div><i class="bi bi-bullseye"></i>Detecta tu bug de signos</div>
                        <div><i class="bi bi-lightning-charge"></i>Plan corto y accionable</div>
                        <div><i class="bi bi-joystick"></i>Modo práctica guiada</div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-center justify-content-lg-start mt-4 gap-3">
                        <a class="btn btn-light btn-lg px-4" href="#diagnostico">Empieza diagnóstico</a>
                        <span class="hero-chip hero-chip-alt">Lista en menos de 2 minutos</span>
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
                        <h3>Detecta tu bug y recibe un plan inmediato</h3>
                        <p class="text-muted mb-0">5 respuestas, un mapa de bugs y prompts listos para copiar en tu IA o profe-tutor.</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="d-flex flex-column flex-md-row align-items-stretch gap-3 mt-1">
                        <div class="mini-step flex-fill"><span>1</span>Responde las preguntas</div>
                        <div class="mini-step flex-fill"><span>2</span>Genera tu kit anti-bug</div>
                        <div class="mini-step flex-fill"><span>3</span>Practica en modo guiado</div>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <!-- Columna Izquierda: Formulario -->
                <div class="col-lg-5">
                    <div class="inc-card">
                        <h4 class="mb-3">Tu diagnóstico</h4>
                        <p class="text-muted mb-4">Marca lo que más te pasa en examen para desbloquear tu kit personalizado.</p>
                        <form id="bugForm">

                            <!-- Q1 -->
                            <div class="mb-3">
                                <label class="form-label">1. ¿Dónde fallas más?</label>
                                <select class="form-select" id="q1_area" onchange="toggleConditionals()">
                                    <option value="">Selecciona...</option>
                                    <option value="add_sub">Sumas y restas con negativos</option>
                                    <option value="subtract_neg">Restar un negativo (−(−) / − −)</option>
                                    <option value="mult_div">Productos y divisiones (signo del resultado)</option>
                                    <option value="mixed_ops">Operaciones combinadas (paréntesis y prioridad)</option>
                                    <option value="word_problems">Problemas con contexto (temperaturas, deudas, puntos…)</option>
                                    <option value="final_wrong">Resultado final incorrecto</option>
                                </select>
                            </div>

                            <!-- QA (Condicional: suma/resta/restar negativo) -->
                            <div class="mb-3 d-none" id="group_qA">
                                <label class="form-label ps-3 border-start border-3 border-primary">⚠️ En definitiva, ¿qué cuesta más?</label>
                                <select class="form-select" id="qA_translate_fail">
                                    <option value="two_signs">Dos signos seguidos (+−, −−, −+)</option>
                                    <option value="minus_front">Un “−” delante del número (−3, −12…)</option>
                                    <option value="subtract_vs_negative">Confundo “restar” con “ser negativo”</option>
                                    <option value="number_line">No lo visualizo en la recta numérica</option>
                                </select>
                            </div>

                            <!-- QB (Condicional: mult/div o combinadas) -->
                            <div class="mb-3 d-none" id="group_qB">
                                <label class="form-label ps-3 border-start border-3 border-primary">⚠️ En el paso crítico, ¿dónde está el error?</label>
                                <select class="form-select" id="qB_isolate_fail">
                                    <option value="sign_rule">Regla de signos (−·−, −:−, etc.)</option>
                                    <option value="negative_parentheses">Un negativo delante del paréntesis</option>
                                    <option value="priority">Orden de operaciones (prioridad)</option>
                                    <option value="zero_trap">Ceros / simplificar mal al final</option>
                                </select>
                            </div>

                            <!-- Q2 -->
                            <div class="mb-3">
                                <label class="form-label">2. ¿Cuándo ocurre el fallo?</label>
                                <select class="form-select" id="q2_moment">
                                    <option value="">Selecciona...</option>
                                    <option value="start">Al empezar (me bloqueo)</option>
                                    <option value="middle">A mitad (me lío en los pasos)</option>
                                    <option value="end">Al final (signo/cálculo)</option>
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
                                    <option value="double_sign">Me confunden dos signos seguidos</option>
                                    <option value="subtract_negative">Me lío con “menos un negativo”</option>
                                    <option value="product_sign">Fallo el signo en producto/división</option>
                                    <option value="priority_parentheses">Me salto paréntesis o prioridad</option>
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

                            <div class="d-grid mt-4">
                                <button type="button" class="btn btn-primary btn-lg" onclick="generatePrompts()">
                                    <i class="bi bi-magic me-2"></i> Generar prompts
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

                <!-- Columna Derecha: Resultado -->
                <div class="col-lg-7">
                    <div id="resultArea" class="inc-card h-100" style="display:none;">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="mb-0 text-primary">Tu kit anti-bug</h4>
                            <small class="text-muted">Lista para copiar</small>
                        </div>

                        <!-- Bugs Badge -->
                        <div class="mb-4">
                            <span class="badge bg-danger fs-6 me-2" id="badgePrimary"></span>
                            <span class="badge bg-warning text-dark fs-6" id="badgeSecondary"></span>
                        </div>

                        <!-- Prompts Tabs -->
                        <ul class="nav nav-tabs mb-3" id="promptTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="p1-tab" data-bs-toggle="tab" data-bs-target="#p1" type="button" role="tab">1. Diagnóstico</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="p2-tab" data-bs-toggle="tab" data-bs-target="#p2" type="button" role="tab">2. Kit anti-bug</button>
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

                    <!-- Placeholder Inicial -->
                    <div id="placeholderArea" class="text-center py-5 text-muted">
                        <i class="bi bi-arrow-left-circle display-4 mb-3 d-block"></i>
                        Responde y desbloquea tu kit anti-bug en segundos.
                    </div>

                </div>
            </div>

            <!-- Mapa de Bugs Collapsible -->
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


    <!-- Logic Scripts -->
    <script>
        // 1. DATA: BUG MAP (ENTEROS)
        const bugMap = {
          "bugs": [
            {
              "id": "double_sign",
              "name": "El lector de dobles signos",
              "weakness": "Interpretar +−, −−, −+ y convertirlo en una operación clara",
              "focus": "Traducir “dos signos” a una sola acción (sumar / restar)",
              "exercise_pack": "double_sign_drills",
              "traps": ["confundir −− con −", "leer +− como +", "cambiar el signo del segundo número"],
              "default_mantra": "STOP: dos signos → decide la operación"
            },
            {
              "id": "subtract_neg",
              "name": "El restador de negativos",
              "weakness": "Restar un negativo sin cambiar el sentido correctamente",
              "focus": "Restar un negativo = sumar su opuesto (con pasos claros)",
              "exercise_pack": "subtract_negative_drills",
              "traps": ["hacer −(−b)=−b", "convertirlo en producto", "perder el signo del segundo"],
              "default_mantra": "STOP: restar (−) = sumar (+)"
            },
            {
              "id": "add_sub_core",
              "name": "El mezclador de suma y resta",
              "weakness": "Suma/resta con enteros sin una regla estable",
              "focus": "Recta numérica + regla de ganar/perder (deudas/temperatura)",
              "exercise_pack": "add_sub_integers",
              "traps": ["sumar magnitudes y elegir signo al azar", "confundir restar con negativo", "cambiar signos sin motivo"],
              "default_mantra": "STOP: reescribe como suma"
            },
            {
              "id": "product_sign",
              "name": "El despistado del producto",
              "weakness": "Regla de signos en multiplicación y división",
              "focus": "Signo primero, magnitud después (tabla mínima)",
              "exercise_pack": "mult_div_signs",
              "traps": ["−·−=−", "olvidar paréntesis", "mezclar regla con suma/resta"],
              "default_mantra": "STOP: signo primero, números después"
            },
            {
              "id": "priority",
              "name": "El saltador de prioridad",
              "weakness": "Orden de operaciones en combinadas (paréntesis, ×/÷, +/−)",
              "focus": "Checklist fijo: ( ) → ×/÷ → +/−",
              "exercise_pack": "mixed_ops_priority",
              "traps": ["hacer + antes que ×", "abrir paréntesis mal", "operar siempre de izquierda a derecha"],
              "default_mantra": "STOP: ( ) → ×/÷ → +/−"
            },
            {
              "id": "context_translator",
              "name": "El traductor de contexto",
              "weakness": "Pasar de una historia (deudas/temperaturas/puntos) a una expresión con enteros",
              "focus": "Asignar signo a cada dato y construir la expresión antes de calcular",
              "exercise_pack": "integer_word_problems",
              "traps": ["poner signos al revés", "sumar cuando toca restar", "olvidar el cambio (sube/baja, gana/pierde)"],
              "default_mantra": "STOP: cada dato con signo, luego opero"
            },
            {
              "id": "step_skipper",
              "name": "El mentalista",
              "weakness": "No escribir pasos y perder control (errores invisibles)",
              "focus": "Un cambio por línea y reescritura limpia",
              "exercise_pack": "show_steps_integers",
              "traps": ["saltos mentales", "cambiar dos cosas a la vez", "tachones que cambian el signo"],
              "default_mantra": "STOP: un cambio por línea"
            },
            {
              "id": "verifier_zero",
              "name": "El verificador cero",
              "weakness": "No comprobar y caer en errores finales de signo o cálculo",
              "focus": "Chequeo rápido: estimar + revisar signos críticos",
              "exercise_pack": "check_fast",
              "traps": ["resultado imposible (signo contrario)", "error tonto final", "simplificar mal al final"],
              "default_mantra": "STOP: revisa signos críticos"
            }
          ]
        };

        // 2. DATA: SCORING RULES (ENTEROS)
        // Reutilizo claves qA_translate_fail y qB_isolate_fail para no reescribir tu JS.
        const scoringRules = {
          "weights": {
            "q1_area": {
              "add_sub": {"add_sub_core": 4, "double_sign": 2},
              "subtract_neg": {"subtract_neg": 4, "double_sign": 2},
              "mult_div": {"product_sign": 4},
              "mixed_ops": {"priority": 4, "product_sign": 1},
              "word_problems": {"context_translator": 4},
              "final_wrong": {"verifier_zero": 3}
            },
            "q2_moment": {
              "start": {"add_sub_core": 1, "context_translator": 2},
              "middle": {"priority": 2, "product_sign": 1, "step_skipper": 1},
              "end": {"verifier_zero": 2}
            },
            "q3_style": {
              "few_steps": {"step_skipper": 4},
              "messy": {"step_skipper": 3},
              "ordered_but_wrong": {"verifier_zero": 2, "double_sign": 1}
            },
            "q4_redpoint": {
              "double_sign": {"double_sign": 5},
              "subtract_negative": {"subtract_neg": 5},
              "product_sign": {"product_sign": 5},
              "priority_parentheses": {"priority": 5}
            },
            "q5_verify": {
              "always": {},
              "sometimes": {"verifier_zero": 1},
              "never": {"verifier_zero": 4}
            },
            "qA_translate_fail": {
              "two_signs": {"double_sign": 4},
              "minus_front": {"add_sub_core": 2, "double_sign": 1},
              "subtract_vs_negative": {"subtract_neg": 3, "add_sub_core": 2},
              "number_line": {"add_sub_core": 2}
            },
            "qB_isolate_fail": {
              "sign_rule": {"product_sign": 4},
              "negative_parentheses": {"priority": 2, "double_sign": 1},
              "priority": {"priority": 4},
              "zero_trap": {"verifier_zero": 2}
            }
          },
          "tie_break": ["priority", "subtract_neg", "double_sign", "product_sign", "add_sub_core", "context_translator", "step_skipper", "verifier_zero"]
        };

        // Display JSON
        document.getElementById('jsonDisplay').textContent = JSON.stringify(bugMap, null, 2);

        function toggleConditionals() {
            const q1 = document.getElementById('q1_area').value;
            const grpA = document.getElementById('group_qA');
            const grpB = document.getElementById('group_qB');

            grpA.classList.add('d-none');
            grpB.classList.add('d-none');

            // A: suma/resta y restar negativos
            if (q1 === 'add_sub' || q1 === 'subtract_neg') {
                grpA.classList.remove('d-none');
            }
            // B: mult/div y combinadas
            else if (q1 === 'mult_div' || q1 === 'mixed_ops') {
                grpB.classList.remove('d-none');
            }
        }

        function getBugById(id) {
            return bugMap.bugs.find(b => b.id === id);
        }

        function generatePrompts() {
            // 1. Gather inputs
            const inputs = {
                q1_area: document.getElementById('q1_area').value,
                q2_moment: document.getElementById('q2_moment').value,
                q3_style: document.getElementById('q3_style').value,
                q4_redpoint: document.getElementById('q4_redpoint').value,
                q5_verify: document.getElementById('q5_verify').value,
                // ids reutilizados:
                qA_translate_fail: document.getElementById('qA_translate_fail').value,
                qB_isolate_fail: document.getElementById('qB_isolate_fail').value
            };

            // Basic validation
            if(!inputs.q1_area || !inputs.q2_moment || !inputs.q3_style || !inputs.q4_redpoint || !inputs.q5_verify) {
                alert("Por favor, responde todas las preguntas principales.");
                return;
            }

            // 2. Compute Scores
            let scores = {};
            bugMap.bugs.forEach(b => scores[b.id] = 0);

            const addScores = (questionKey, answerValue) => {
                if (!answerValue) return;
                const weightMap = scoringRules.weights[questionKey];
                if (weightMap && weightMap[answerValue]) {
                    for (const [bugId, points] of Object.entries(weightMap[answerValue])) {
                        if (scores[bugId] !== undefined) scores[bugId] += points;
                    }
                }
            };

            addScores('q1_area', inputs.q1_area);
            addScores('q2_moment', inputs.q2_moment);
            addScores('q3_style', inputs.q3_style);
            addScores('q4_redpoint', inputs.q4_redpoint);
            addScores('q5_verify', inputs.q5_verify);

            // Condicionales
            if(inputs.q1_area === 'add_sub' || inputs.q1_area === 'subtract_neg') addScores('qA_translate_fail', inputs.qA_translate_fail);
            if(inputs.q1_area === 'mult_div' || inputs.q1_area === 'mixed_ops') addScores('qB_isolate_fail', inputs.qB_isolate_fail);

            // 3. Determine Winner (Primary & Secondary)
            let sortedBugs = Object.entries(scores).sort((a, b) => {
                if (b[1] !== a[1]) return b[1] - a[1];
                const idxA = scoringRules.tie_break.indexOf(a[0]);
                const idxB = scoringRules.tie_break.indexOf(b[0]);
                return idxA - idxB;
            });

            const primaryBugId = sortedBugs[0][0];
            const secondaryBugId = sortedBugs[1][0];

            const primaryBug = getBugById(primaryBugId);
            const secondaryBug = getBugById(secondaryBugId);

            // 4. Prepare Tokens for Templates
            const getText = (id) => {
                const el = document.getElementById(id);
                if (el && el.selectedIndex >= 0) return el.options[el.selectedIndex].text;
                return "";
            };

            const tokens = {
                q1_area_text: getText('q1_area'),
                q2_moment_text: getText('q2_moment'),
                q3_style_text: getText('q3_style'),
                q4_redpoint_text: getText('q4_redpoint'),
                q5_verify_text: getText('q5_verify'),

                qA_translate_fail_text: (inputs.q1_area === 'add_sub' || inputs.q1_area === 'subtract_neg') ? getText('qA_translate_fail') : "",
                qB_isolate_fail_text: (inputs.q1_area === 'mult_div' || inputs.q1_area === 'mixed_ops') ? getText('qB_isolate_fail') : "",

                primary_bug_name: primaryBug.name,
                secondary_bug_name: secondaryBug.name,
                primary_bug_weakness: primaryBug.weakness,
                primary_bug_focus: primaryBug.focus,
                primary_bug_traps: primaryBug.traps.join(", "),
                primary_bug_exercise_pack: primaryBug.exercise_pack,
                primary_bug_status: sortedBugs[0][1]
            };

            // Update UI
            document.getElementById('placeholderArea').style.display = 'none';
            document.getElementById('resultArea').style.display = 'block';

            document.getElementById('badgePrimary').innerText = "Bug principal: " + primaryBug.name;
            document.getElementById('badgeSecondary').innerText = "Secundario: " + secondaryBug.name;

            // 5. Generate Prompts Text
            const p1 = `Actúa como ENTRENADOR de matemáticas de 1º ESO especializado en operaciones con números enteros.

REGLAS:
- NO me des la solución final de ningún ejercicio.
- Haz 1 pregunta cada vez (estilo entrenador).
- Corrige MI PROCESO, no solo el resultado.
- Si detectas mi bug, dime el PASO EXACTO donde aparece y por qué.

PERFIL DEL ESTUDIANTE:
- Área donde fallo: ${tokens.q1_area_text}
- Momento del fallo: ${tokens.q2_moment_text}
- Mi estilo: ${tokens.q3_style_text}
- Punto rojo: ${tokens.q4_redpoint_text}
- Verificación: ${tokens.q5_verify_text}
${tokens.qA_translate_fail_text ? `- En detalle fallo en: ${tokens.qA_translate_fail_text}` : ''}
${tokens.qB_isolate_fail_text ? `- En el paso crítico fallo en: ${tokens.qB_isolate_fail_text}` : ''}

DIAGNÓSTICO:
- Bug principal: "${tokens.primary_bug_name}"
- Bug secundario: "${tokens.secondary_bug_name}"
- Debilidad: ${tokens.primary_bug_weakness}
- Foco de entrenamiento: ${tokens.primary_bug_focus}

Ahora:
1) Explícame por qué tengo este bug (2 frases, directo).
2) Pon 1 ejemplo típico de examen donde caigo (sin resolverlo).
3) Dime 3 hábitos concretos que debo entrenar esta semana.`;

            const p2 = `Actúa como diseñador de hábitos de estudio para 1º ESO.

REGLAS:
- Nada de teoría larga: solo cosas aplicables en examen.
- Debe ser MEMORABLE y específico para mi bug.

Mi bug principal: "${tokens.primary_bug_name}"
Debilidad: ${tokens.primary_bug_weakness}
Foco: ${tokens.primary_bug_focus}
Trampas típicas: ${tokens.primary_bug_traps}

Diseña mi KIT ANTI-BUG:

1) MANTRA STOP (máx. 8 palabras)
2) CHECKLIST PRE-EJERCICIO (3 checks)
3) RITUAL DURANTE (3 pasos numerados, 1 cambio por línea)
4) VERIFICACIÓN FINAL (2 preguntas obligatorias)
5) Señal de alarma: “Si veo ___, me detengo y ___”`;

            const p3 = `Actúa como mi entrenador personal de números enteros (1º ESO).

REGLAS:
- NO des soluciones.
- Dame SOLO el EJERCICIO 1 primero.
- Espera a que yo pegue mi proceso.
- Evalúa si evité mi bug o caí en él, citando la línea exacta.
- Luego dame un micro-consejo y pasa al siguiente.

Mi bug: "${tokens.primary_bug_name}"
Debilidad: ${tokens.primary_bug_weakness}
Pack de ejercicios: ${tokens.primary_bug_exercise_pack}
Trampas típicas: ${tokens.primary_bug_traps}

MISIÓN:
Genera 3 ejercicios del pack indicado, cada uno con una trampa oculta típica (no digas cuál es).
Nivel: 1º ESO.

Empieza con EJERCICIO 1 (solo enunciado).`;

            const p4 = `Genera un MINI-EXAMEN de recuperación para 1º ESO (números enteros).

REGLAS:
- Dame SOLO los enunciados. NO resuelvas nada.
- 2 ejercicios, 5 puntos cada uno.
- Deben atacar mi bug.

Mi bug: "${tokens.primary_bug_name}"
Trampas típicas: ${tokens.primary_bug_traps}

EJERCICIO 1 (5 puntos):
- Operación combinada con enteros (paréntesis y/o ×/÷ según mi bug)
- Con trampa típica de mi bug

EJERCICIO 2 (5 puntos):
- Problema con contexto real (temperaturas, deudas, puntos, ascensor)
- Debe obligar a escribir una expresión con enteros antes de calcular

Formato:
EJERCICIO 1:
...

EJERCICIO 2:
...`;

            document.getElementById('txtP1').innerText = p1;
            document.getElementById('txtP2').innerText = p2;
            document.getElementById('txtP3').innerText = p3;
            document.getElementById('txtP4').innerText = p4;
            document.getElementById('txtPAll').innerText =
`=== PROMPT 1 (Diagnóstico) ===
${p1}

=== PROMPT 2 (Kit anti-bug) ===
${p2}

=== PROMPT 3 (Training round) ===
${p3}

=== PROMPT 4 (Mini-examen) ===
${p4}`;
        }

        function copyToClipboard(elementId) {
            const text = document.getElementById(elementId).innerText;
            navigator.clipboard.writeText(text).then(() => {
                alert("¡Copiado al portapapeles!");
            });
        }
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