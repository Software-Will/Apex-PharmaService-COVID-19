<script>alert("Registro exitoso");</script>
<head>
    <title>Mensaje de confirmación | ApexPharmaService</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS --> 
    <link href="../css/home.css" rel="stylesheet" type="text/css" /> <!-- Le da el diseño -->
    <link href="../css/generarTurno.css" rel="stylesheet" type="text/css"/>
    <link href="../css/registros.css" rel="stylesheet" type="text/css" />
    <link href="../css/extras-css/animacion-carga.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="../icons-imgs/logo_pestaña.png" /> <!-- Logo de pestaña -->
    <script src="../js/extra-js/cerrarSesion.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload="cerrarSesion();">
    <!-- ENCABEZADO DE PAGINA -->
    <header class="header">
        <div class="contenedor logo-nav-container">
            <a href="../home.php"
               title="Página principal de Apex PharmaService">
                <img src="../icons-imgs/logo_prinicipal.png" style=" width: 250px;
                     height: auto;padding: 1rem;" alt="Página principal de Apex PharmaService"/></a>
            <input type="checkbox" id="menu-bar">
            <label class="icon icon-list2" for="menu-bar"></label>
            <!-- MENU DE NAVEGACION -->
            <nav class="menu">
                <ul>
                    <li><a href="../home.php" title="Home">Home</a> </li>
                    <!--<li><a href="../registros.html" title="Registro de Vacunación (COVID-19)">Registro de Vacunación (COVID-19)</a></li>-->
                    <li><a href="../noticias.php" title="Noticias y Avances">Noticias y Avances</a></li>
                    <li><a href="../normas.php" title="Normas y Recomendaciones">Normas y Recomendaciones</a></li>
                    <li><a href="../contacto.php" title="Contacto y Redes Sociales">Contacto y Redes Sociales</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <br/><br/><br/><br/><br/><br/><br/>
    <div style="padding-left: 260px;">
        <img src="../icons-imgs/logo_registro.png" alt="Logo de vacunación" id="imagen" style="width: 220px;" /><br/><br/>
        <h1 style="font-size: 50px;">CONFIRMACIÓN DE REGISTRO -  Vacunación contra la COVID-19</h1><br/>
        <p style="font-size: 20px; line-height: 1.5;">Ya se encuentra registrado dentro del patrón de vacunación. <br/>Se le envio un correo a <strong><?= $_GET['emailTurnoAux'] ?></strong>, con todos los datos generados, revise su bandeja de entrada o spam.</p>
        <h2 style="font-size: 25px; line-height: 1.5;">Indicaciones</h2><br/>
        <div style="font-size: 18px; line-height: 1.2;">
            <li>Procura ir el día de tu cita, no antes.</li>
            <li>Acércate en la fecha indicada a tus dos dosis con tu DNI (físico).</li>
            <li>Los adultos mayores pueden ir acompañados <strong>con una sola persona.</strong></li>
            <li>En el caso de tener complicaciones o presentar síntomas adversos posteriormente a la aplicación de alguna dosis te recomendamos acudir al centro de salud más cercano.</li>
            <li>En caso de problemas físicos o mentales, llamar al 113.</li>
            <li>No te automediques.</li>
        </div><br/>
        <div>
            <h2 style="font-size: 25px; line-height: 1.5;">Importante</h2>
            <p style="font-size: 18px; line-height: 1.5;">Protege la vida de nuestros hermanos con factores de riesgo: niños, adultos<br/>mayores, pacientes con enfermedades crónicas, cáncer o inmunosupresión. 
                <br/><a href="https://twitter.com/search?q=%23NoBajemosLaGuardia&src=typed_query&f=live"title="#NoBajemosLaGuardia" style="color: black;" target="-blank"><strong>#NoBajemosLaGuardia.</strong></a></p>
            <a href="../home.php" title="Página principal de ApexPharmaService" style="font-size: 18px; line-height: 1.5; color: #117A65;"><strong><u>Ir a la página principal ></u></strong></a>
        </div>
    </div>

    <br/><br/>

    <!-- PIE DE PAGINA -->
    <!-- Info de contacto -->
    <footer>
        <!-- Pie de pagina -->
        <div class="contenedor-footer-all">
            <div class="contenedor-body">

                <div class="colum1">
                    <a href="../home.php">
                        <img class="logs" src="../icons-imgs/logo_prinicipal.png"
                             title="Página principal de Apex PharmaService" /></a>
                </div>
                <div class="colum2">
                    <p> <strong>Sede Central</strong><br/>
                        Av. Javier Prado Este 759<br/>
                        Lince 15046, Lima Metropolitana, Lima - Perú<br/><br/>
                        <strong>Central Telefónica</strong><br/>
                        (01) 315-4356<br/><br/>
                        <strong>Correo de contacto</strong><br/>
                        <a style=" color: white;"
                           href="mailto:apex_pharmaservice@yopmail.com?Subject=Solicito%20de%20sus%20servicios"
                           title="Correo de contacto">apex_pharmaservice@yopmail.com</a>
                    </p><br/>
                </div>
                <div class="colum3">
                    <a href="https://bicentenario.gob.pe/" target="-blank"
                       title="Página principal de Bicentenario Perú 2021">
                        <img class="logminsa" src="../icons-imgs/logo_bicentenario.png" /></a>
                    <a href="https://www.minsa.gob.pe/" target="-blank">
                        <img class="logminsa" src="../icons-imgs/logo_minsa.png"
                             title="Página principal del Ministerio de Salud (PE)" /></a>
                </div>
            </div>
        </div>
        <div class="contenedor-footer">
            <div class="copyrigth">
                <h4 align = "center">Developer with <img src="../icons-imgs/icon_footer.png" style="width: 18px";/> in our homes<br/><br/></h4>
                <h4 style="text-align: center;">Apex PharmaService&reg; 2021</h4>
            </div>
        </div>
    </footer>

</body>











