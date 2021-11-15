<!-- CONTENIDO DE PESTAÑAS -->

<head>
    <title>Home | Apex PharmaService COVID-19</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link href="css/home.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="icons-imgs/logo_pestaña.png" /> <!-- Logo de pestaña -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link href="css/extras-css/button-top.css" rel="stylesheet" type="text/css" />
    <script src="js/extra-js/cerrarSesion.js" type="text/javascript"></script>
    <!<!-- Scrollreveal -->
        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</head>


<!-- CONTENIDO DE PAGINA -->

<body onload="cerrarSesion();">
    <!-- BOTON HACIA ARRIBA-->
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- ENCABEZADO DE PAGINA -->
    <!-- Logo del minsa -->
    <header class="header">
        <div class="contenedor logo-nav-container">
            <a href="home.php" title="Página principal de Apex PharmaService">
                <img src="icons-imgs/logo_prinicipal.png" style=" width: 250px;
                     height: auto;padding: 1rem;" alt="Página principal de Apex PharmaService" /></a>
            <input type="checkbox" id="menu-bar">
            <label class="icon icon-list2" for="menu-bar"></label>
            <!-- MENU DE NAVEGACION -->
            <nav class="menu">
                <ul>
                    <li><a href="home.php" title="Home">Home</a> </li>
                    <li><a href="registros.php" title="Registro de Vacunación (COVID-19)">Registro de Vacunación (COVID-19)</a></li>
                    <li><a href="noticias.php" title="Noticias y Avances">Noticias y Avances</a></li>
                    <li><a href="normas.php" title="Normas y Recomendaciones">Normas y Recomendaciones</a></li>
                    <li><a href="contacto.php" title="Contacto y Redes Sociales">Contacto y Redes Sociales</a></li><br />
                    <div style="text-align: right;">
                        <li><a href="intranet.php" title="Intranet"><i class="fas fa-user"></i></a></li>
                    </div> <!-- ingreso de admins -->
                </ul>
            </nav>
        </div>
    </header>
    <!-- FIN DE ENCABEZADO DE PAGINA -->


    <!-- ACA COLOCAMOS EL CONTENIDO DE PAG -->
    <div class="contenido-global-home">
        <!-- IMAGEN DE SAGASTI -->
        <div class="contendor-medio">
            <div class="bienvenidos">
                <!-- CONTENEDOR DE PRESENTACION -->
                <div class="presentacion">
                    <h1 style="font-size: 40px; font-weight: bold;">BIENVENIDOS</h1><br />
                    <p class="margen-text-bienvenido">
                        Apex PharmaService es un empresa con consciencia social desarrollada en funciones de
                        logística en salud pública - privada con sede en Lima Metropolitana, contamos con arduos
                        profesionales de la salud, asimismos
                        nos especialisamos en el implemento de tecnologias para la innovacion de atención al paciente.
                        Actualmente somos distribuidores oficiales de la vacuna contra la COVID-19 del
                        <a href="https://www.minsa.gob.pe/" target="-blamk" title="Página princial del Ministerio de Salud (PE)" style="color: black; font-weight: 600;">Ministerio de Salud (PE).</a><br />
                        Operamos las 24 hrs del dia, los 365 dias del año. El reto planteado es vacunarte lo
                        antes posible, contamos contigo.
                    </p><br />
                    <a href="documents/Certificado_Vacunacion.pdf" target="-blank" title="Certificado de Vacunación (Pfizer)" style="color: black; font-weight: 600;">Certificado
                        de
                        Vacunación</a>
                </div>
                <div class="img-sagasti">
                    <!--LADO DEL LOGO -->
                    <a href="https://www.youtube.com/watch?v=vBfoKrtIBCI&ab_channel=PresidenciadelaRep%C3%BAblicadelPer%C3%BA" target="-blank" title="Vacunación de Francisco Sagasti - Presidente de la República">
                        <img src="icons-imgs/imagen_presentacion.jpg" height="350" width="500" alt="Vacunación de Francisco Sagasti - Presidente de la República" />
                    </a>
                </div>
            </div>
            <!-- VIDEO PROMOCIONAL -->
            <div class="video">
                <h2 align="center" style="font-size: 35px; font-weight: bold;">VIDEO PROMOCIONAL</h2><br /><br />
                <iframe align="center" width="600" height="338" src="https://www.youtube.com/embed/-OeEiWxPFGM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> <!-- height="338" width="600" -->
            </div>

            <!-- INFO DE LA EMPRESA -->
            <div class="info-empresa">
                <!-- DERECHA -->
                <div class="info-empresa-iz">
                    <h2 style=" font-weight: bold;">SOBRE NOSOTROS</h2><br />
                    <h3>Nuestra Misión</h3>
                    <p>Lograr la satisfacción y confianza de nuestros pacientes y colaboradores.</p>
                    <h3>Nuestra Visión</h3>
                    <p>Mantenernos como la red logística de salud más grande del país, con personal
                        altamente capacitado, motivado y apoyado en tecnología de punta.</p>
                    <h3>Nuestros Valores</h3>
                    <li>Honestidad y Lealtad</li>
                    <li>Trabajo en equipo</li>
                    <li>Comunicación</li>
                    <li>Liderazgo</li>
                    <li>Excelencia enfocada al paciente</li>
                </div>
                <!-- IZQUIERDA -->
                <div class="info-empresa-de">
                    <h2 style=" font-weight: bold;">HASHTAGS</h2>
                    <ul>
                        <a href="https://twitter.com/search?q=%23ApexPharmaService&src=typed_query&f=live" target="-blank" title="#ApexPharmaService" style="color: black; font-weight: 600;">#ApexPharmaService</a><br />
                        <a href="https://twitter.com/search?q=%23PongoElHombro&src=hashtag_click" target="-blank" title="#PongoElHombro" style="color: black; font-weight: 600;">#PongoElHombro</a><br />
                        <a href="https://twitter.com/search?q=%23NoBajemosLaGuardia&src=hashtag_click" target="-blank" title="#NoBajemosLaGuardia" style="color: black; font-weight: 600;">#NoBajemosLaGuardia</a><br />
                        <a href="https://twitter.com/search?q=%23vacunateperu&src=typed_query&f=live" target="-blank" title="#VacúnatePerú" style="color: black; font-weight: 600;">#VacúnatePerú</a><br />
                        <a href="https://twitter.com/search?q=%23pfizer&src=typed_query&f=live" target="-blank" title="#Pfizer" style="color: black; font-weight: 600;">#Pfizer</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- FIN DE CONTENIDO DE LA PAG -->


    <!-- PIE DE PAGINA -->
    <!-- Info de contacto -->
    <footer>
        <!-- Pie de pagina -->
        <div class="contenedor-footer-all">
            <div class="contenedor-body">

                <div class="colum1">
                    <a href="home.php">
                        <img class="logs" src="icons-imgs/logo_prinicipal.png" title="Página principal de Apex PharmaService" /></a>
                </div>
                <div class="colum2">
                    <p> <strong>Cede Central</strong><br />
                        Av. Javier Prado Este 759<br />
                        Lince 15046, Lima Metropolitana, Lima - Perú<br /><br />
                        <strong>Central Telefónica</strong><br />
                        (01) 315-4356<br /><br />
                        <strong>Correo de contacto</strong><br />
                        <a style=" color: white;" href="mailto:apex_pharmaservice@yopmail.com?Subject=Solicito%20de%20sus%20servicios" title="Correo de contacto">apex_pharmaservice@yopmail.com</a><br />

                    </p>
                </div>
                <div class="colum3">
                    <a href="https://bicentenario.gob.pe/" target="-blank" title="Página principal de Bicentenario Perú 2021">
                        <img class="logminsa" src="icons-imgs/logo_bicentenario.png" /></a>
                    <a href="https://www.minsa.gob.pe/" target="-blank">
                        <img class="logminsa" src="icons-imgs/logo_minsa.png" title="Página principal del Ministerio de Salud (PE)" /></a>
                </div>

            </div>


        </div>

        <div class="contenedor-footer">
            <div class="copyrigth">
                <h4 align="center">Developer with <img src="icons-imgs/icon_footer.png" style="width: 18px" ; /> in our
                    homes<br /><br /></h4>
                <h4 style="text-align: center;">Apex PharmaService&reg; 2021</h4>
            </div>
        </div>

    </footer>
    <!--FIN DE PIE DE PAGINA-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script src="js/extra-js/button-top.js" type="text/javascript"></script>
    <!-- Custom Scrollreveal -->
    <script src="js/scrollreveal.js" type="text/javascript"></script>
</body>