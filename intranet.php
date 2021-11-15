
<!-- CONTENIDO DE PESTAÑAS -->
<head>
    <title>Intranet |Apex PharmaService COVID-19</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link href="css/home.css" rel="stylesheet" type="text/css" />
    <link href="css/registros.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="icons-imgs/logo_pestaña.png" /> <!-- Logo de pestaña -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link href="css/extras-css/button-top.css" rel="stylesheet" type="text/css"/>
    <!<!-- Scrollreveal -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="js/extra-js/cerrarSesion.js" type="text/javascript"></script>
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
            <a href="home.php"
               title="Página principal de Apex PharmaService">
                <img src="icons-imgs/logo_prinicipal.png" style=" width: 250px;
                     height: auto;padding: 1rem;" alt="Página principal de Apex PharmaService"/></a>
            <input type="checkbox" id="menu-bar">
            <label class="icon icon-list2" for="menu-bar"></label>
        </div>
    </header>
    <!-- FIN DE ENCABEZADO DE PAGINA -->
    <br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <div style="padding-left: 420px;"><h1>INTRANET</h1><br/>
        <p style=" line-height: 30px; ">Esta sección es unicamente para administradores y trabajadadores de la empresa.<br/>
            <strong>ADVERTENCIA:</strong> Solo ingreso de personal autorizado.</p></div>
    <div class="contenedor-registro-dentro">
        <form class = "formulario-registro" action="extras-php/db/validar.php" method="POST">
            <fieldset style="border: 0px;">
                <h3 align="center">INICIO DE SESIÓN</h3><br/>
                <h4>Usuario</h4><br/>
                <input type="text" id="usuarioAdmin" placeholder="User" required="" class = "controles" name = "usuarioAdmin"><br/>
                <br/>
                <h4>Contraseña</h4><br/>
                <input type="password" id = "passwordAdmin" placeholder="Password" required="" class = "controles" name ="passwordAdmin"><br/>
                <br/>

                <button type="submit" title="Iniciar Sesión" class = "boton"><h4>Iniciar Sesión</h4></button><br/>  <!-- ESCRIBA DATOS Y REVISE LA CONSOLA, AHI SE ENCUENTRAN LOS RESULTADOS  -->

            </fieldset>
        </form>
    </div><br/>
    <div style="padding-left: 420px;">
        <a href="home.php" title="Página principal de ApexPharmaService" style="font-size: 18px; color: #117A65;">
            <strong><u>Ir a la página principal ></u></strong></a>
    </div>
    <br/><br/><br/>
    <!-- PIE DE PAGINA -->
    <!-- Info de contacto -->
    <footer>
        <!-- Pie de pagina -->
        <div class="contenedor-footer-all">
            <div class="contenedor-body">

                <div class="colum1">
                    <a href="home.php">
                        <img class="logs" src="icons-imgs/logo_prinicipal.png"
                             title="Página principal de Apex PharmaService" /></a>
                </div>
                <div class="colum2">
                    <p> <strong>Cede Central</strong><br />
                        Av. Javier Prado Este 759<br />
                        Lince 15046, Lima Metropolitana, Lima - Perú<br /><br />
                        <strong>Central Telefónica</strong><br />
                        (01) 315-4356<br /><br />
                        <strong>Correo de contacto</strong><br />
                        <a style=" color: white;"
                           href="mailto:apex_pharmaservice@yopmail.com?Subject=Solicito%20de%20sus%20servicios"
                           title="Correo de contacto">apex_pharmaservice@yopmail.com</a><br />

                    </p>
                </div>
                <div class="colum3">
                    <a href="https://bicentenario.gob.pe/" target="-blank"
                       title="Página principal de Bicentenario Perú 2021">
                        <img class="logminsa" src="icons-imgs/logo_bicentenario.png" /></a>
                    <a href="https://www.minsa.gob.pe/" target="-blank">
                        <img class="logminsa" src="icons-imgs/logo_minsa.png"
                             title="Página principal del Ministerio de Salud (PE)" /></a>
                </div>
            </div>
        </div>

        <div class="contenedor-footer">
            <div class="copyrigth">
                <h4 align="center">Developer with <img src="icons-imgs/icon_footer.png" style="width: 18px"; /> in our
                    homes<br/><br /></h4>
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

