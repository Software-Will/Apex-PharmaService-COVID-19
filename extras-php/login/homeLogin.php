
<!-- CONTENIDO DE PESTAÑAS -->
<head>
    <title>Home | SysAdmin</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link href="../../css/home.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="../../icons-imgs/logo_pestaña.png" /> <!-- Logo de pestaña -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="../../css/mdb.min.css" />
    <!-- Custom styles -->
    <link href="../../css/extras-css/button-top.css" rel="stylesheet" type="text/css"/>
    <!<!-- Scrollreveal -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="../../js/extra-js/cerrarSesion.js" type="text/javascript"></script>
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
            <a href="homeLogin.php"
               title="Página de administradores">
                <img src="../../icons-imgs/logo_pestaña.png" style=" width: 120px;
                     height: auto;padding: 1rem; padding-left: " alt="Página de Administradores"/>
            </a>
            <a href="homeLogin.php" title="Página de administradores"><h3 style="padding-right: 700px;color: #00c9b1;">SystemAdmins <div style="color: white;">ApexPharmaService</div></h3>
                <input type="checkbox" id="menu-bar"></a>
            <label class="icon icon-list2" for="menu-bar"></label>
            <!-- MENU DE NAVEGACION -->
            <nav class="menu">
                <ul>
                    <li><a href="homeLogin.php" title="HomeAdmin">HomeAdmin</a> </li>
                    <li><a href="diseñoDB.php" title="Diseños de la base de datos">Diseño (MER)</a> </li>
                    <li><a href="CRUD.php" title="CRUD">CRUD</a> </li>
                    <li><a href="cerrarSesion.php" title="Cerrar Sesión">Cerrar Sesión</a> </li>

                </ul>
            </nav>
        </div>
    </header>

    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <div style="padding-left: 350px;"><h1 style="font-size: 45px;">BIENVENIDO(A)</h1><br/>
        <p style="text-align: justify; font-size: 18px;">Esta sección es unicamente para usuarios autorizados, podras actualizar tablas y administrar
            los datos generados en la empresa,<br/> asimismo tienes la responsabilidad de 
        mantener la integridad de los datos y su seguridad.</p>

    </div>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <!-- FIN DE CONTENIDO DE LA PAG -->


    <!-- PIE DE PAGINA -->
    <!-- Info de contacto -->
    <footer>
        <!-- Pie de pagina -->
        <div class="contenedor-footer-all">
            <div class="contenedor-body">

                <div class="colum1">
                    <a href="homeLogin.php">
                        <img class="logs" src="../../icons-imgs/logo_pestaña.png" 
                             title="Página de Administradores"  style=" width: 160px;
                             height: auto;padding: 1rem; " /></a>
                    <a href="homeLogin.php" title="Página de Administradores">
                        <h3 style="padding-right: 200px; text-align: center; color: #00c9b1;">SystemAdmins <div style="color: white;">ApexPharmaService</div></h3></a><br/>
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
                        <img class="logminsa" src="../../icons-imgs/logo_bicentenario.png" /></a>
                    <a href="https://www.minsa.gob.pe/" target="-blank">
                        <img class="logminsa" src="../../icons-imgs/logo_minsa.png"
                             title="Página principal del Ministerio de Salud (PE)" /></a>
                </div>

            </div>


        </div>

        <div class="contenedor-footer">
            <div class="copyrigth">
                <h4 align="center">Developer with <img src="../../icons-imgs/icon_footer.png" style="width: 18px"; /> in our
                    homes<br /><br /></h4>
                <h4 style="text-align: center;">Apex PharmaService&reg; 2021</h4>
            </div>
        </div>

    </footer>
    <!--FIN DE PIE DE PAGINA-->
    <!-- MDB -->
    <script type="text/javascript" src="../../js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script src="../../js/extra-js/button-top.js" type="text/javascript"></script>
    <!-- Custom Scrollreveal -->
    <script src="../../js/scrollreveal.js" type="text/javascript"></script>
</body>



