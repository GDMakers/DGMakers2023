<?php /* Conecta 37 - index.php (actualizado 2025-11-11) */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Conecta 37 – Innovación y colaboración educativa</title>
  <meta name="description" content="Conecta 37: un proyecto para unir centros y crear soluciones tecnológicas con impacto social. Aprende para enseñar, con evidencia y resultados medibles en Lengua y Matemáticas." />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
  <style>
    :root{
      --bg:#0b3d66; /* azul hero */
      --bg-2:#0c4a6e; /* azul oscuro */
      --txt:#0f172a; /* slate-900 */
      --muted:#475569; /* slate-600 */
      --light:#f8fafc; /* slate-50 */
      --accent:#fd4305; /* naranja Conecta 37 */
      --accent-2:#0ea5e9; /* azul claro */
      --card:#ffffff;
      --border:#e2e8f0;
    }
    *{box-sizing:border-box}
    html,body{margin:0;padding:0;font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,Helvetica,Arial,"Apple Color Emoji","Segoe UI Emoji";color:var(--txt);background:var(--light);line-height:1.65;}
    a{color:inherit}
    p{margin:0 0 1.1rem}
    ul{margin:0 0 1.1rem;padding-left:1.25rem}
    .container{max-width:1200px;margin:0 auto;padding:0 1.75rem}
    main{padding-bottom:4rem}
    .skip a{position:absolute;left:-999px;top:auto;width:1px;height:1px;overflow:hidden}
    .skip a:focus{left:1rem;top:1rem;width:auto;height:auto;background:#fff;color:#000;padding:.5rem .75rem;border-radius:.375rem;box-shadow:0 2px 10px rgba(0,0,0,.15)}

    /* Nav */
    header{background:#fff;border-bottom:1px solid var(--border);position:sticky;top:0;z-index:50}
    .nav{display:flex;align-items:center;justify-content:space-between;padding:.75rem 0}
    .brand{display:flex;gap:.5rem;align-items:center;font-weight:700;color:var(--bg-2)}
    .brand .dot{width:10px;height:10px;border-radius:50%;background:var(--accent)}
    .menu{display:flex;gap:1rem}
    .menu a{padding:.5rem .25rem;color:#0f172a;text-decoration:none;font-weight:600}
    .menu a[aria-current="page"]{color:var(--bg-2)}
    .cta{background:var(--accent);color:#fff;padding:.55rem .9rem;border-radius:.5rem;text-decoration:none;font-weight:700}

    /* Hero */
    .hero{background:linear-gradient(135deg,var(--bg),var(--bg-2));color:#fff;padding:4rem 0}
    .hero .wrap{display:grid;grid-template-columns:1.3fr .7fr;gap:2.75rem;align-items:center;padding:0}
    .hero h1{font-size:clamp(1.8rem,3.5vw,3rem);margin:.25rem 0 .75rem}
    .hero p{font-size:1.1rem;line-height:1.7;opacity:.95}
    .hero .btns{margin-top:1.5rem;display:flex;gap:1rem;flex-wrap:wrap}
    .btn-primary{background:var(--accent);color:#fff;border:0;padding:.85rem 1.1rem;border-radius:.6rem;font-weight:700;text-decoration:none}
    .btn-secondary{background:#0ea5e91a;color:#dbeafe;border:1px solid #38bdf8;padding:.85rem 1.1rem;border-radius:.6rem;font-weight:700;text-decoration:none}
    .hero-card{background:#ffffff12;border:1px solid #ffffff30;border-radius:1rem;padding:1.25rem}
    .kpis{display:grid;grid-template-columns:repeat(3,1fr);gap:1rem;margin-top:1rem}
    .kpi{background:#ffffff10;border:1px solid #ffffff25;border-radius:.75rem;padding:.75rem}
    .kpi b{display:block;font-size:1.4rem}

    /* Sections */
    section{padding:4rem 0}
    .section-title{font-size:1.6rem;margin:0 0 1.25rem}

    /* Objetivos */
    .grid-4{display:grid;grid-template-columns:repeat(4,1fr);gap:1.5rem}
    .card{background:var(--card);border:1px solid var(--border);border-radius:.9rem;padding:1.5rem;display:flex;flex-direction:column;gap:.5rem}
    .card h3{margin:.5rem 0 .25rem;font-size:1.1rem}
    .muted{color:var(--muted)}
    .icon{width:36px;height:36px;color:var(--bg-2)}

    /* Pasos */
    .steps{display:grid;grid-template-columns:repeat(4,1fr);gap:1.25rem}
    .step{background:#fff;border:1px dashed var(--border);border-radius:.9rem;padding:1.25rem;text-align:center}
    .step h4{margin:.5rem 0 .25rem}

    /* Proyectos */
    .projects{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}
    .proj{background:#fff;border:1px solid var(--border);border-radius:.9rem;overflow:hidden}
    .proj .thumb{height:140px;background:linear-gradient(135deg,#e2f8ff,#d1fae5)}
    .proj .body{padding:1.5rem}

    /* Dos columnas */
    .cols{display:grid;grid-template-columns:1fr 1fr;gap:2rem}

    /* Footer */
    footer{background:#0b1220;color:#cbd5e1}
    footer .container{display:grid;grid-template-columns:1fr auto;gap:1rem;padding:2.5rem 1.75rem}
    footer a{color:#93c5fd;text-decoration:none}

    /* Responsive */
    @media (max-width: 960px){
      .hero .wrap{grid-template-columns:1fr}
      .kpis{grid-template-columns:repeat(3,1fr)}
      .grid-4{grid-template-columns:repeat(2,1fr)}
      .steps{grid-template-columns:repeat(2,1fr)}
      .projects{grid-template-columns:1fr}
      .cols{grid-template-columns:1fr}
    }
    @media (max-width: 640px){
      .menu{display:none}
      .menu.open{display:flex;flex-direction:column;gap:.25rem;padding:.5rem 0}
      .nav button{display:inline-flex}
      .kpis{grid-template-columns:1fr 1fr}
      .grid-4{grid-template-columns:1fr}
      .steps{grid-template-columns:1fr}
    }
    .nav button{display:none;background:transparent;border:1px solid var(--border);padding:.35rem .5rem;border-radius:.5rem}
  </style>
</head>
<body>
  <div class="skip"><a href="#contenido">Saltar al contenido</a></div>

  <header role="banner">
    <div class="container nav" aria-label="Barra de navegación">
      <a class="brand" href="../../../index.php">
        <span class="dot" aria-hidden="true"></span>
        Conecta 37
      </a>
      <nav>
        <button aria-controls="menu" aria-expanded="false" aria-label="Abrir menú" onclick="var m=document.getElementById('menu'); var open=m.classList.toggle('open'); this.setAttribute('aria-expanded', open);">☰</button>
        <div id="menu" class="menu" role="navigation">
          <a href="index.php" aria-current="page">Visión general</a>
          <a href="Encuentro37.php">Jornadas 26</a>
          <a href="Livehub37.php">Live Hub</a>
          <a href="Recursos37.php">Showcase de proyectos</a>
          <a href="Roadmap.php">Roadmap</a>
          <a href="Centros.php">Centros</a>
          <a class="cta" href="#participa">Participa</a>
        </div>
      </nav>
    </div>
  </header>

  <main id="contenido" tabindex="-1">
    <!-- HERO -->
    <section class="hero" aria-labelledby="hero-title">
      <div class="container wrap">
        <div>
          <h1 id="hero-title">Conecta 37: innovación y colaboración educativa</h1>
          <p>Un proyecto para unir centros y crear soluciones tecnológicas con impacto social. Aprendizaje eficaz con evidencia: menos tareas mecánicas, más pensamiento y creación en <strong>Lengua</strong> y <strong>Matemáticas</strong>.</p>
          <div class="btns">
            <a class="btn-primary" href="#participa">Participa</a>
            <a class="btn-secondary" href="Dashboard.php">Ver dashboard</a>
          </div>
          <div class="kpis" aria-label="Indicadores">
            <div class="kpi" aria-label="Áreas clave"><b>4</b><small>Áreas clave</small></div>
            <div class="kpi" aria-label="Fases del proyecto"><b>4</b><small>Fases</small></div>
            <div class="kpi" aria-label="Centros en red"><b>+6</b><small>Centros</small></div>
          </div>
        </div>
        <div class="hero-card" aria-label="Resumen">
          <h2 style="margin-top:0">¿Qué es Conecta 37?</h2>
          <p>Transformación digital para mejorar resultados académicos con evidencias. Centros de Primaria y Secundaria colaboran para que el alumnado <em>aprenda creando</em> y comparta productos públicos (vídeos, podcasts, infografías, exposiciones).</p>
          <ul>
            <li>Foco en Lengua y Matemáticas, integrando otras áreas.</li>
            <li>Modelos replicables que dejan capacidad instalada en los centros.</li>
            <li>Evaluación antes/después y rúbricas de producto.</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- OBJETIVOS -->
    <section class="container" aria-labelledby="obj-title">
      <h2 id="obj-title" class="section-title">Objetivos del proyecto</h2>
      <div class="grid-4">
        <article class="card" aria-labelledby="o1"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg><h3 id="o1">Conexión</h3><p class="muted">Red de centros que comparten retos, evidencia y recursos.</p></article>
        <article class="card" aria-labelledby="o2"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2v4M2 12h4M18 12h4M12 18v4M5 5l3 3M16 16l3 3M5 19l3-3M16 8l3-3"/></svg><h3 id="o2">Innovación</h3><p class="muted">Tecnología para crear y comunicar, no solo consumir.</p></article>
        <article class="card" aria-labelledby="o3"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 20l-6-6a6 6 0 1112 0l-6 6z"/></svg><h3 id="o3">Inclusión</h3><p class="muted">Productos públicos accesibles para toda la comunidad.</p></article>
        <article class="card" aria-labelledby="o4"><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="14" rx="2"/><path d="M8 8h8M8 12h5"/></svg><h3 id="o4">Tecnología</h3><p class="muted">Herramientas simples para evidenciar el aprendizaje.</p></article>
      </div>
    </section>

    <!-- COMO PARTICIPAR -->
    <section class="container" id="participa" aria-labelledby="steps-title">
      <h2 id="steps-title" class="section-title">Cómo participar</h2>
      <div class="steps" role="list">
        <div class="step" role="listitem"><h4>Inscripción</h4><p class="muted">Registra tu centro y equipo docente.</p></div>
        <div class="step" role="listitem"><h4>Formación</h4><p class="muted">Píldoras sobre metodología y herramientas.</p></div>
        <div class="step" role="listitem"><h4>Desarrollo</h4><p class="muted">Aplicación en aula con asesoramiento.</p></div>
        <div class="step" role="listitem"><h4>Presentación</h4><p class="muted">Galería y jornadas para compartir resultados.</p></div>
      </div>
      <p style="margin-top:1rem">
        <a class="btn-primary" href="Recursos37.php">Ver recursos</a>
        <a href="Roadmap.php">Roadmap del proyecto</a>
      </p>
    </section>

    <!-- METODOLOGÍA + MEDICIÓN -->
    <section class="container cols" aria-label="Metodología y evidencia">
      <div class="card">
        <h2 style="margin-top:0">Metodología Conecta‑37</h2>
        <h3>Aprender creando</h3>
        <p>El alumnado aprende haciendo: investiga, diseña y comunica. Cada reto acaba en un <strong>producto público</strong> (vídeo, podcast, infografía o presentación).</p>
        <h3>Matemáticas que se expresan</h3>
        <ul>
          <li>Redacción del proceso de resolución de problemas reales.</li>
          <li>Explicaciones en vídeo o audio del razonamiento seguido.</li>
          <li>Exposición oral de conclusiones.</li>
        </ul>
        <h3>Palabras en acción</h3>
        <ul>
          <li>Periódico o radio escolar digital.</li>
          <li>Guiones y podcasts de temas de interés.</li>
          <li>Campañas y exposiciones para la comunidad.</li>
        </ul>
        <p>Lengua y Matemáticas son obligatorias y se integran con Ciencias, Historia, Inglés…</p>
        <p><a href="Metodologia37.php">Explorar la metodología</a></p>
      </div>
      <div class="card">
        <h2 style="margin-top:0">¿Cómo medimos el éxito?</h2>
        <ul>
          <li><strong>Evaluación antes y después</strong>: pruebas de nivel al inicio y final del curso para medir progreso.</li>
          <li><strong>Productos del alumnado</strong>: rúbricas claras para evaluar calidad y comunicación.</li>
          <li><strong>Motivación</strong>: encuestas breves de implicación.</li>
        </ul>
        <p class="muted">Transparencia: los datos agregados se comparten en el <a href="Dashboard.php">Dashboard</a>.</p>
      </div>
    </section>

    <!-- PROYECTOS -->
    <section class="container" aria-labelledby="proj-title">
      <h2 id="proj-title" class="section-title">Proyectos realizados</h2>
      <div class="projects">
        <article class="proj"><div class="thumb" role="img" aria-label="Proyecto 1"></div><div class="body"><h3>Nombre del proyecto</h3><p class="muted">Descripción breve del proyecto.</p></div></article>
        <article class="proj"><div class="thumb" role="img" aria-label="Proyecto 2"></div><div class="body"><h3>Nombre del proyecto</h3><p class="muted">Descripción breve del proyecto.</p></div></article>
        <article class="proj"><div class="thumb" role="img" aria-label="Proyecto 3"></div><div class="body"><h3>Nombre del proyecto</h3><p class="muted">Descripción breve del proyecto.</p></div></article>
      </div>
      <p style="margin-top:1rem"><a class="btn-secondary" href="Recursos37.php">Ver showcase</a></p>
    </section>

    <!-- CENTROS PARTICIPANTES -->
    <section class="container" aria-labelledby="centros-title">
      <h2 id="centros-title" class="section-title">Centros participantes</h2>
      <div class="card">
        <ul>
          <li>CEIPS Santo Domingo (Madrid)</li>
          <li>Colegio Litterator (Madrid)</li>
          <li>IES Alcántara (Murcia)</li>
          <li>IES Cañada de las Eras (Murcia)</li>
          <li>IES Floridablanca (Murcia)</li>
          <li>IES Sangonera la Verde (Murcia)</li>
        </ul>
        <p><a href="Centros.php">Conocer los centros</a></p>
      </div>
    </section>

  </main>

  <footer role="contentinfo">
    <div class="container">
      <div>
        <strong>Conecta 37</strong><br>
        <small>Aprende para enseñar · IES Alcántara</small>
      </div>
      <div>
        <a href="mailto:info@ies.es">Contacto</a>
      </div>
    </div>
  </footer>

  <script>
    // Mejora accesible: cerrar menú al perder foco en mobile si se navega con teclado
    document.addEventListener('keydown', function(e){
      if(e.key==='Escape'){
        var m=document.getElementById('menu');
        if(m && m.classList.contains('open')){
          m.classList.remove('open');
          document.querySelector('header button')?.setAttribute('aria-expanded','false');
        }
      }
    });
  </script>
</body>
</html>
