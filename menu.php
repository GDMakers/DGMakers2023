<?php
// MENÚ COMÚN
// Las dos comillas exteriores de la orden ECHO tienen que ser dobles '
// TODAS Las comillas interiores de la orden ECHO tienen que ser sencillas '
// Incluir delante de cada ruta la variable correspondiente: $img, $index o $$pages
echo "<nav class='navbar navbar-expand-lg navbar-dark py-2 sticky-top'>
        <div class='container-fluid'>
            <a class='navbar-brand' href='$index/index.php' style='padding-right: 2rem'><i class='fa fa-home'></i></a>
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse' id='navbarNav'>
                <ul class='navbar-nav'>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>Proyectos</a>
                        <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                            <li><a class='dropdown-item' href='https://gdmuseos.iesalcantara.es' target='_blank'>GDMuseos</a></li>
                            
                            <li class='dropdown-submenu'>
                                <a class='dropdown-item dropdown-toggle' href='#'>Conecta 37</a>
                                <ul class='dropdown-menu'>
                                    <li><a class='dropdown-item' href='$pages/proyectos/Conecta37/index.php'>Proyecto</a></li>
                                    <li><a class='dropdown-item' href='$pages/proyectos/Conecta37/Encuentro37.php'>Jornadas 2026</a></li>
                                    <li><a class='dropdown-item' href='$pages/proyectos/Conecta37/Roadmap.php'>Roadmap</a></li> 
                                    <li><a class='dropdown-item' href='$pages/proyectos/Conecta37/Talleres37.php?project=Conecta37'>Live Hub</a></li>
                                    <li><a class='dropdown-item' href='$pages/proyectos/Conecta37/Recursos37.php'>Recursos</a></li>
                                    <li><a class='dropdown-item' href='$pages/proyectos/Conecta37/Ia37.php'>Uso de la IA</a></li>
                                    <li><a class='dropdown-item' href='$pages/proyectos/Conecta37/Metodologia37.php'>Cómo lo hacemos</a></li>
                                    <li class='dropdown-submenu'>
                                        <a class='dropdown-item dropdown-toggle' href='#'>Start Lab</a>
                                        <ul class='dropdown-menu'>
                                            <li><a class='dropdown-item' href='$pages/proyectos/Conecta37/Incubadora37.php'>Incubadora</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/Conecta37/StartLab01.php'>Start Lab</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/Conecta37/StartLabCentro01.php'>Start Lab Centro</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/Conecta37/DocentesIA.php'>Start Lab IA</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            
                            <li class='dropdown-submenu'>
                                <a class='dropdown-item dropdown-toggle' href='#'>DGMakers</a>
                                <ul class='dropdown-menu'>
                                    <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/DGMakers.php'>DGMakers</a></li>
                                    <li class='dropdown-submenu'>
                                        <a class='dropdown-item dropdown-toggle' href='#'>DGMakers Tools</a>
                                        <ul class='dropdown-menu'>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/DGMakersTools 3D.php'>3D</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/DGMakersTools Robotica.php'>Robótica</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/DGMakersTools Code.php'>Code</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/DGMakersTools StartUp.php'>StartUp</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/DGMakersTools IA.php'>IA</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/DGMakersTools Aulas hospitalarias.php'>Aulas Hospitalarias</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/DGMakersTools Utilidades.php'>Utilidades</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/DGMakersTools PlantillasNormas.php'>Plantillas y normas</a></li>
                                        </ul>
                                    </li>
                                    <li class='dropdown-submenu'>
                                        <a class='dropdown-item dropdown-toggle' href='#'>Tecnología Emocional</a>
                                        <ul class='dropdown-menu'>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/Tecnologia emocional.php'>Tecnología Emocional</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/Nuestras tradiciones.php'>Nuestras Tradiciones</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/Nuestros abuelos.php'>Nuestros Abuelos</a></li>
                                        </ul>
                                    </li>
                                    <li class='dropdown-submenu'>
                                        <a class='dropdown-item dropdown-toggle' href='#'>DGMakers 4Inclusion</a>
                                        <ul class='dropdown-menu'>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/4Inclusion.php'>DGMakers 4Inclusion</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/iTEA.php'>iTEA</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/Aulas hospitalarias.php'>Aulas Hospitalarias</a></li>
                                        </ul>
                                    </li>
                                    <li class='dropdown-submenu'>
                                        <a class='dropdown-item dropdown-toggle' href='#'>DGContenidos</a>
                                        <ul class='dropdown-menu'>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/DGContenidos.php'>DGContenidos</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/DGMaths.php'>DGMaths</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/DGLengua.php'>Lengua</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/DGPlastica.php'>Plástica</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/DGGyH.php'>Geografía e Historia</a></li>
                                        </ul>
                                    </li>
                                    <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/DGMakersDocentes.php'>DGMakers Docentes</a></li>
                                    <li class='dropdown-submenu'>
                                        <a class='dropdown-item dropdown-toggle' href='#'>DGMakers Kids</a>
                                        <ul class='dropdown-menu'>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/DGMakersKids.php'>DGMakers Kids</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/Nuestras tradiciones.php'>Nuestras Tradiciones</a></li>
                                            <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/Nuestros abuelos.php'>Nuestros Abuelos</a></li>
                                        </ul>
                                    </li>
                                    <li><a class='dropdown-item' href='$pages/proyectos/DGMakers/IA.php'>DGIA</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>Programas educativos</a>
                        <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                            <li class='dropdown-submenu'>
                                <a class='dropdown-item dropdown-toggle' href='#'>GDPatrimonio</a>
                                <ul class='dropdown-menu'>
                                    <li><a class='dropdown-item' href='$pages/programas/GDPatrimonio/GDPatrimonio.php'>GDPatrimonio 25 - 26</a></li>
                                    <li><a class='dropdown-item' href='$pages/programas/GDPatrimonio/JornadasGDP26.php'>Jornadas GDPatrimonio 2026</a></li>
                                    <li><a class='dropdown-item' href='$pages/programas/GDPatrimonio/FormacionGDP26.php'>Formación GDP</a></li>
                                </ul>
                            </li>
                            <li class='dropdown-submenu'>
                                <a class='dropdown-item dropdown-toggle' href='#'>4Inclusion</a>
                                <ul class='dropdown-menu'>
                                    <li><a class='dropdown-item' href='$pages/programas/4Inclusion.php'>DGMakers 4Inclusion</a></li>
                                    <li><a class='dropdown-item' href='$pages/programas/Jornadas4Inclusion.php'>Jonadas 4Inclusion</a></li>
                                    <li><a class='dropdown-item' href='$pages/programas/desarrollar4inclusion.php'>Fase desarrollar</a></li>
                                    <li><a class='dropdown-item' href='$pages/programas/live-hub.php'>Live-Hub</a></li>
                                    <li><a class='dropdown-item' href='$pages/programas/dgmakers4i.php'>Arranque DGMakers</a></li>
                                    <li><a class='dropdown-item' href='$pages/programas/StartPack.php'>Start Pack</a></li>
                                    <li><a class='dropdown-item' href='$pages/programas/4InclusionIA.php'>Uso de la IA en 4Inclusion</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>Eventos</a>
                        <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                            <li><a class='dropdown-item' href='$pages/eventos/emotion.php'>eMotion</a></li>
                        </ul>
                    </li>

                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>Jornadas</a>
                        <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                            <li><a class='dropdown-item' href='$pages/jornadas/eXPeriencia60.php'>eXperiencia6.0</a></li>
                            <!--li><a class='dropdown-item' href='#'>GDPatrimonio</a></li-->
                            <li><a class='dropdown-item' href='$pages/jornadas/4Inclusion.php'>4Inclusion</a></li>
                        </ul>
                    </li>

                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>Talleres</a>
                        <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                            <li><a class='dropdown-item' href='$pages/talleres/eXPeriencia60.php'>eXperiencia6.0</a></li>
                            <li><a class='dropdown-item' href='$pages/talleres/emotion.php'>eMotion</a></li>                            
                            <!--li><a class='dropdown-item' href='#'>GDPatrimonio</a></li-->                            
                            <li><a class='dropdown-item' href='$pages/talleres/Aulas hospitalarias.php'>Aulas Hospitalarias</a></li>                            
                            <li class='dropdown-submenu'>
                                <a class='dropdown-item dropdown-toggle' href='#'>4Inclusion</a>
                                <ul class='dropdown-menu'>
                                    <li><a class='dropdown-item' href='$pages/talleres/4Inclusion/4Inclusion.php'>4Inclusion</a></li>
                                    <li><a class='dropdown-item' href='$pages/talleres/4Inclusion/3D.php'>Diseño 3D</a></li>
                                    <li><a class='dropdown-item' href='$pages/talleres/4Inclusion/Podcast.php'>Podcast</a></li>
                                    <li><a class='dropdown-item' href='$pages/talleres/4Inclusion/RealidadAumentada.php'>Realidad Aumentada</a></li>
                                    <li><a class='dropdown-item' href='$pages/talleres/4Inclusion/Minecraft.php'>Minecraft</a></li>
                                    <li><a class='dropdown-item' href='$pages/talleres/4Inclusion/emisionDirecto.php'>Emisión en Directo</a></li>
                                    <li><a class='dropdown-item' href='$pages/talleres/4Inclusion/creaEditaVideos.php'>Crea y Edita Vídeos</a></li>
                                    <li><a class='dropdown-item' href='$pages/talleres/4Inclusion/cajasTeacch.php'>Aprende a crear Cajas Teacch</a></li>
                                    <li><a class='dropdown-item' href='$pages/talleres/4Inclusion/crearAplicacionesMoviles.php'>Crear Aplicaciones para móviles</a></li>
                                    <li><a class='dropdown-item' href='$pages/talleres/4Inclusion/CPEEEusebioMartinez.php'>Eusebio Martínez</a></li>
                                    <li><a class='dropdown-item' href='$pages/talleres/4Inclusion/IESAlcantara.php'>IES Alcántara</a></li>
                                </ul>
                            </li>
                            <li class='dropdown-submenu'>
                                <a class='dropdown-item dropdown-toggle' href='#'>DGMakers</a>
                                <ul class='dropdown-menu'>
                                    <li><a class='dropdown-item' href='$pages/talleres/DGMakers/IA Bookcreator.php'>IA + Bookcreator</a></li>
                                    <li><a class='dropdown-item' href='$pages/talleres/DGMakers/ActualizacionTec.php'>Actualización de Tecnología</a></li>
                                    <li><a class='dropdown-item' href='$pages/talleres/DGMakers/impresion3Dv2.php'>Impresión 3D v2.0</a></li>
                                    <li><a class='dropdown-item' href='$pages/talleres/DGMakers/Fotogrametria.php'>Fotogrametría</a></li>
                                    <li><a class='dropdown-item' href='$pages/talleres/DGMakers/aprendizajeCHATGPT.php'>Aprendizaje Efectivo con ChatGPT</a></li>
                                    <li><a class='dropdown-item' href='$pages/talleres/DGMakers/crearWebsGoogleSites.php'>Crea Páginas web con Google Sites</a></li>
                                    <li><a class='dropdown-item' href='$pages/talleres/DGMakers/crearMaterialesDigitales.php'>Crea Materiales Curriculares Digitales</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class='nav-item'>
                        <a class='nav-link' href='$pages/logos.php'>Logos</a>
                    </li>
                    <li class='nav-item'>
                        <a class='nav-link' href='$pages/contacto.php'>Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>";
?>
