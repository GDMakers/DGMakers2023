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
        .form-label {
            font-weight: 600;
            color: #015183;
        }
        .result-box {
            background: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 0.5rem;
            padding: 1.5rem;
            font-family: monospace;
            white-space: pre-wrap;
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
    <div class="container-fluid bg-primary hero-header mb-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Ecuaciones 1</h1>
                    <p class="fs-4 text-white mb-4 pb-2">Generador de Prompts Blindados · Mapa de Bugs</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenido -->
    <div class="container-xxl py-5">
        <div class="container">
            
            <div class="row g-5">
                <!-- Columna Izquierda: Formulario -->
                <div class="col-lg-5">
                    <div class="inc-card">
                        <h4 class="mb-4">Diagnóstico del Alumno</h4>
                        <form id="bugForm">
                            
                            <!-- Q1 -->
                            <div class="mb-3">
                                <label class="form-label">1. ¿Dónde fallas más?</label>
                                <select class="form-select" id="q1_area" onchange="toggleConditionals()">
                                    <option value="">Selecciona...</option>
                                    <option value="translate">Traducir enunciado a x</option>
                                    <option value="parentheses">Paréntesis y signos</option>
                                    <option value="isolate">Mover términos (x a un lado)</option>
                                    <option value="fractions">Fracciones / Denominadores</option>
                                    <option value="final_wrong">Resultado final incorrecto</option>
                                </select>
                            </div>

                            <!-- QA (Condicional Translate) -->
                            <div class="mb-3 d-none" id="group_qA">
                                <label class="form-label ps-3 border-start border-3 border-primary">⚠️ En traducción, ¿qué cuesta más?</label>
                                <select class="form-select" id="qA_translate_fail">
                                    <option value="unknown">No sé cual es la incógnita</option>
                                    <option value="data">Uso mal los números</option>
                                    <option value="relation">Relacionar datos ("doble de", etc)</option>
                                    <option value="letter">Me lío con la letra</option>
                                </select>
                            </div>

                            <!-- QB (Condicional Isolate/Fractions) -->
                            <div class="mb-3 d-none" id="group_qB">
                                <label class="form-label ps-3 border-start border-3 border-primary">⚠️ Al despejar, ¿dónde está el error?</label>
                                <select class="form-select" id="qB_isolate_fail">
                                    <option value="add_sub">Sumar/restar al pasar</option>
                                    <option value="mult_div">Multiplicar/dividir</option>
                                    <option value="fractions">Lío con fracciones</option>
                                    <option value="order">Orden de pasos</option>
                                </select>
                            </div>

                            <!-- Q2 -->
                            <div class="mb-3">
                                <label class="form-label">2. ¿Cuándo ocurre el fallo?</label>
                                <select class="form-select" id="q2_moment">
                                    <option value="">Selecciona...</option>
                                    <option value="start">Al empezar (bloqueo)</option>
                                    <option value="middle">A mitad (me pierdo)</option>
                                    <option value="end">Al final (cálculo/signo)</option>
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
                                    <option value="sign_transfer">Cambio de signo al mover</option>
                                    <option value="distribute_negatives">Signo delante de paréntesis</option>
                                    <option value="divide_bothsides">Dividir todo (no solo una parte)</option>
                                    <option value="equals_confusion">Confundo el significado del =</option>
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
                                    <i class="bi bi-magic me-2"></i> Generar Prompts
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

                <!-- Columna Derecha: Resultado -->
                <div class="col-lg-7">
                    <div id="resultArea" style="display:none;">
                        <h4 class="mb-3 text-primary">Resultados del Diagnóstico</h4>
                        
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
                                <button class="nav-link" id="p2-tab" data-bs-toggle="tab" data-bs-target="#p2" type="button" role="tab">2. Kit Anti-Bug</button>
                            </li>
                             <li class="nav-item" role="presentation">
                                <button class="nav-link" id="p3-tab" data-bs-toggle="tab" data-bs-target="#p3" type="button" role="tab">3. Training</button>
                            </li>
                             <li class="nav-item" role="presentation">
                                <button class="nav-link" id="p4-tab" data-bs-toggle="tab" data-bs-target="#p4" type="button" role="tab">4. Examen</button>
                            </li>
                             <li class="nav-item" role="presentation">
                                <button class="nav-link bg-light" id="pall-tab" data-bs-toggle="tab" data-bs-target="#pall" type="button" role="tab"><strong>PACK COMPLETO</strong></button>
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
                                    <button class="btn btn-sm btn-outline-primary position-absolute top-0 end-0 m-2" onclick="copyToClipboard('txtPAll')">Copiar TODO</button>
                                    <div class="result-box" id="txtPAll"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <!-- Placeholder Inicial -->
                    <div id="placeholderArea" class="text-center py-5 text-muted">
                        <i class="bi bi-arrow-left-circle display-4 mb-3 d-block"></i>
                        Contesta el formulario para generar tu estrategia personalizada.
                    </div>
                    
                </div>
            </div>

            <!-- Mapa de Bugs Collapsible -->
            <div class="mt-5">
                 <p class="d-inline-flex gap-1">
                  <a class="btn btn-outline-secondary btn-sm" data-bs-toggle="collapse" href="#collapseMap" role="button" aria-expanded="false" aria-controls="collapseMap">
                    Ver Mapa de Bugs (JSON)
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
        // 1. DATA: BUG MAP
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
              "traps": ["- fuera del paréntesis", "doble negativo", "distribuir solo el primero"],
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

        // 2. DATA: SCORING RULES
        const scoringRules = {
          "weights": {
            "q1_area": {
              "translate": {"translator": 4},
              "parentheses": {"distributor": 4},
              "isolate": {"isolator": 3, "sign_mover": 2},
              "fractions": {"fractioner": 4},
              "final_wrong": {"verifier_zero": 3}
            },
            "q2_moment": {
              "start": {"translator": 2},
              "middle": {"isolator": 2, "sign_mover": 2, "step_skipper": 1},
              "end": {"verifier_zero": 2}
            },
            "q3_style": {
              "few_steps": {"step_skipper": 4},
              "messy": {"step_skipper": 3, "isolator": 1},
              "ordered_but_wrong": {"verifier_zero": 2, "sign_mover": 1}
            },
            "q4_redpoint": {
              "sign_transfer": {"sign_mover": 5},
              "distribute_negatives": {"distributor": 5},
              "divide_bothsides": {"fractioner": 4, "isolator": 1},
              "equals_confusion": {"translator": 2, "sign_mover": 1}
            },
            "q5_verify": {
              "always": {},
              "sometimes": {"verifier_zero": 1},
              "never": {"verifier_zero": 4}
            },
            "qA_translate_fail": {
              "unknown": {"translator": 2},
              "data": {"translator": 2},
              "relation": {"translator": 3},
              "letter": {"translator": 1}
            },
            "qB_isolate_fail": {
              "add_sub": {"sign_mover": 2, "isolator": 1},
              "mult_div": {"fractioner": 2, "isolator": 1},
              "fractions": {"fractioner": 3},
              "order": {"isolator": 3}
            }
          },
          "tie_break": ["sign_mover", "distributor", "fractioner", "isolator", "translator", "step_skipper", "verifier_zero"]
        };

        // Display JSON
        document.getElementById('jsonDisplay').textContent = JSON.stringify(bugMap, null, 2);

        function toggleConditionals() {
            const q1 = document.getElementById('q1_area').value;
            const grpA = document.getElementById('group_qA');
            const grpB = document.getElementById('group_qB');
            
            grpA.classList.add('d-none');
            grpB.classList.add('d-none');
            
            if (q1 === 'translate') {
                grpA.classList.remove('d-none');
            } else if (q1 === 'isolate' || q1 === 'fractions') {
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
            // Init scores
            bugMap.bugs.forEach(b => scores[b.id] = 0);

            // Helper to add scores
            const addScores = (questionKey, answerValue) => {
                if (!answerValue) return;
                const weightMap = scoringRules.weights[questionKey];
                if (weightMap && weightMap[answerValue]) {
                    for (const [bugId, points] of Object.entries(weightMap[answerValue])) {
                        if (scores[bugId] !== undefined) {
                            scores[bugId] += points;
                        }
                    }
                }
            };

            addScores('q1_area', inputs.q1_area);
            addScores('q2_moment', inputs.q2_moment);
            addScores('q3_style', inputs.q3_style);
            addScores('q4_redpoint', inputs.q4_redpoint);
            addScores('q5_verify', inputs.q5_verify);
            
            if(inputs.q1_area === 'translate') addScores('qA_translate_fail', inputs.qA_translate_fail);
            if(inputs.q1_area === 'isolate' || inputs.q1_area === 'fractions') addScores('qB_isolate_fail', inputs.qB_isolate_fail);

            // 3. Determine Winner (Primary & Secondary)
            let sortedBugs = Object.entries(scores).sort((a, b) => {
                if (b[1] !== a[1]) return b[1] - a[1]; // Sort by score desc
                // Tie break
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
                qA_translate_fail_text: (inputs.q1_area === 'translate') ? getText('qA_translate_fail') : "",
                qB_isolate_fail_text: (inputs.q1_area === 'isolate' || inputs.q1_area === 'fractions') ? getText('qB_isolate_fail') : "",
                
                primary_bug_name: primaryBug.name,
                secondary_bug_name: secondaryBug.name,
                primary_bug_weakness: primaryBug.weakness,
                primary_bug_focus: primaryBug.focus,
                primary_bug_traps: primaryBug.traps.join(", "),
                primary_bug_exercise_pack: primaryBug.exercise_pack,
                primary_bug_status: sortedBugs[0][1] // score
            };

            // Update UI
            document.getElementById('placeholderArea').style.display = 'none';
            document.getElementById('resultArea').style.display = 'block';
            
            document.getElementById('badgePrimary').innerText = "Bug Principal: " + primaryBug.name;
            document.getElementById('badgeSecondary').innerText = "Secundario: " + secondaryBug.name;
            
            // 5. Generate Prompts Text
            // P1
            const p1 = `Actúa como ENTRENADOR de matemáticas de 3º ESO especializado en ecuaciones lineales.

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
${tokens.qA_translate_fail_text ? `- En traducción fallo en: ${tokens.qA_translate_fail_text}` : ''}
${tokens.qB_isolate_fail_text ? `- En despeje fallo en: ${tokens.qB_isolate_fail_text}` : ''}

DIAGNÓSTICO:
- Bug principal: "${tokens.primary_bug_name}"
- Bug secundario: "${tokens.secondary_bug_name}"
- Debilidad: ${tokens.primary_bug_weakness}
- Foco de entrenamiento: ${tokens.primary_bug_focus}

Ahora:
1) Explícame por qué tengo este bug (2 frases, directo).
2) Pon 1 ejemplo típico de examen donde caigo (sin resolverlo).
3) Dime 3 hábitos concretos que debo entrenar esta semana (muy accionables).`;

            // P2
            const p2 = `Actúa como diseñador de hábitos de estudio para 3º ESO.

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
5) Señal de alarma: “Si veo ___, me detengo y ___”

Todo debe estar adaptado a "${tokens.primary_bug_name}".`;

            // P3
            const p3 = `Actúa como mi entrenador personal de ecuaciones (3º ESO).

REGLAS:
- NO des soluciones.
- Dame SOLO el EJERCICIO 1 primero.
- Espera a que yo pegue mi proceso.
- Evalúa si evitó mi bug o caí en él, citando la línea exacta.
- Luego dame un micro-consejo y pasa al siguiente.

Mi bug: "${tokens.primary_bug_name}"
Debilidad: ${tokens.primary_bug_weakness}
Pack de ejercicios: ${tokens.primary_bug_exercise_pack}
Trampas típicas: ${tokens.primary_bug_traps}

MISIÓN:
Genera 3 ejercicios del pack indicado, cada uno con una trampa oculta típica (no digas cuál es).
Nivel: 3º ESO.

Empieza con EJERCICIO 1 (solo enunciado).`;

            // P4
            const p4 = `Genera un MINI-EXAMEN de recuperación para 3º ESO.

REGLAS:
- Dame SOLO los enunciados. NO resuelvas nada.
- 2 ejercicios, 5 puntos cada uno.
- Deben atacar mi bug.

Mi bug: "${tokens.primary_bug_name}"
Trampas típicas: ${tokens.primary_bug_traps}

EJERCICIO 1 (5 puntos):
- Ecuación lineal (puede incluir paréntesis/fracciones según mi bug)
- Con trampa típica de mi bug

EJERCICIO 2 (5 puntos):
- Problema con contexto real que obligue a plantear UNA ecuación de 1er grado
- Enunciado claro, pero exige traducir a ecuación

Formato:
EJERCICIO 1:
...

EJERCICIO 2:
...`;

            document.getElementById('txtP1').innerText = p1;
            document.getElementById('txtP2').innerText = p2;
            document.getElementById('txtP3').innerText = p3;
            document.getElementById('txtP4').innerText = p4;
            document.getElementById('txtPAll').innerText = `=== PROMPT 1 (Diagnóstico) ===\n${p1}\n\n=== PROMPT 2 (Ritual) ===\n${p2}\n\n=== PROMPT 3 (Training Round) ===\n${p3}\n\n=== PROMPT 4 (Mini-examen) ===\n${p4}`;

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
