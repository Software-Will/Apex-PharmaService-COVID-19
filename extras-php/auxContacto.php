<?php
//TRANSFERENCIA DE DATOS
$nombres_apellidos = htmlentities($_POST["NombresApellidosContacto"]);
$numCel = htmlentities($_POST["numCelContacto"]);
$email = htmlentities($_POST["emailContacto"]);
$asunto = htmlentities($_POST["asuntoContacto"]);
$mensaje = htmlentities(($_POST["mensajeContacto"])); //filter_input();
?>
<script>alert ("Mensaje enviado correctamente");</script>
<!-- CONTENIDO DE PESTAÑAS -->
<head>
    <title>Datos enviados | Apex PharmaService COVID-19</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link href="../css/home.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="../icons-imgs/logo_pestaña.png" /> <!-- Logo de pestaña -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="../css/mdb.min.css" />
    <!-- Custom styles -->
    <link href="../css/extras-css/button-top.css" rel="stylesheet" type="text/css"/>
    <script src="../js/extra-js/cerrarSesion.js" type="text/javascript"></script>
    <!-- Scrollreveal -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <style>
        .presentacion{
            background-color: rgba(51, 51, 51, .8); color: white;border-radius: 15px;text-align: center; text-align: center; width: 400px; height: 300px;
            display: flex;flex-direction: column;justify-content: center;align-items: center; 

        }
    </style>
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
            <a href="../home.php"
               title="Página principal de Apex PharmaService">
                <img src="../icons-imgs/logo_prinicipal.png" style=" width: 250px;
                     height: auto;padding: 1rem;" alt="Página principal de Apex PharmaService"/></a>
            <input type="checkbox" id="menu-bar">
            <label class="icon icon-list2" for="menu-bar"></label>
        </div>
    </header>

    <!-- FIN DE ENCABEZADO DE PAGINA -->
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <div class = "presentacion" style="margin-left: 40%;"><br/><h3>DATOS ENVIADOS</h3><br/>
        <p><strong>Nombres y Apellidos:</strong> <?= $nombres_apellidos ?></p>
        <p><strong>Número de Celular: </strong> <?= $numCel ?></p>
        <p><strong>Email: </strong> <?= $email ?> </p>
        <p><strong>Asunto de Contacto: </strong> <?= $asunto ?></p>
        <p><strong>Mensaje: </strong> <?= $mensaje ?></p>
    </div><br/>
    <div style="text-align: center;">
        <a href="../home.php" title="Página principal de ApexPharmaService" style="font-size: 18px; line-height: 1.5; color: #117A65;">
            <strong><u>Ir a la página principal ></u></strong></a>
    </div>
    <br/><br/><br/><br/><br/>   
    <!-- PIE DE PAGINA -->
    <!-- Info de contacto -->
    <footer>
        <!-- Pie de pagina -->
        <div class="contenedor-footer-all">
            <div class="contenedor-body">

                <div class="colum1">
                    <a href="home.php">
                        <img class="logs" src="../icons-imgs/logo_prinicipal.png"
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
                        <img class="logminsa" src="../icons-imgs/logo_bicentenario.png" /></a>
                    <a href="https://www.minsa.gob.pe/" target="-blank">
                        <img class="logminsa" src="../icons-imgs/logo_minsa.png"
                             title="Página principal del Ministerio de Salud (PE)" /></a>
                </div>

            </div>


        </div>

        <div class="contenedor-footer">
            <div class="copyrigth">
                <h4 align="center">Developer with <img src="../icons-imgs/icon_footer.png" style="width: 18px"; /> in our
                    homes<br /><br /></h4>
                <h4 style="text-align: center;">Apex PharmaService&reg; 2021</h4>
            </div>
        </div>

    </footer>
    <!--FIN DE PIE DE PAGINA-->
    <!-- MDB -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script src="../js/extra-js/button-top.js" type="text/javascript"></script>
    <!-- Custom Scrollreveal -->
    <script src="../js/scrollreveal.js" type="text/javascript"></script>
</body>



