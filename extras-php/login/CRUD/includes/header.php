<!DOCTYPE html>
<html>
    <!-- CONTENIDO DE PESTAÑAS -->
    <head>
        <title>CRUD Vacunas | SysAdmin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <link href="../../../css/home.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="../../../icons-imgs/logo_pestaña.png" /> <!-- Logo de pestaña -->
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
        <!-- Google Fonts Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
        <!-- MDB -->
        <link rel="stylesheet" href="../../../css/mdb.min.css" />
        <!-- Custom styles -->
        <link href="../../../css/extras-css/button-top.css" rel="stylesheet" type="text/css"/>
        <!-- Scrollreveal -->
        <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
        <script src="../../../js/extra-js/cerrarSesion.js" type="text/javascript"></script>
        <!-- Boostrap 4 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="jq/jquery-3.6.0.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <!-- CONTENIDO DE PAGINA -->
    <body>
        <!-- BOTON HACIA ARRIBA-->
        <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
            <i class="fas fa-arrow-up"></i>
        </button>

        <!-- ENCABEZADO DE PAGINA -->
        <!-- Logo del minsa -->
        <header class="header">
            <div class="contenedor logo-nav-container">
                <a href="../homeLogin.php"
                   title="Página de administradores">
                    <img src="../../../icons-imgs/logo_pestaña.png" style=" width: 120px;
                         height: auto;padding: 1rem; padding-left: " alt="Página de Administradores"/>
                </a>
                <a href="../homeLogin.php" title="Página de administradores"><h3 style="padding-right: 700px;color: #00c9b1;">SystemAdmins <div style="color: white;">ApexPharmaService</div></h3>
                    <input type="checkbox" id="menu-bar"></a>
                <label class="icon icon-list2" for="menu-bar"></label>
                <!-- MENU DE NAVEGACION -->
                <nav class="menu">
                    <ul>
                        <li><a href="../../login/homeLogin.php" title="Home Admin">Home Admin</a></li>
                        <li><a href="../../CRUD.php" title="CRUD">Home CRUD</a> </li>
                        <li><a href="CRUDvacunas.php" title="CRUD de la tabla vacunas">CRUD vacunas</a></li>
                        <li><a href="CRUDpersonal.php" title="CRUD de la tabla personal">CRUD personal</a></li>
                        <li><a href="padronVacunacion.php" title="Registrados en el patrón de vacunación">Padrón de vacunación</a></li>
                        <li><a href="../cerrarSesion.php" title="Cerrar Sesión">Cerrar Sesión</a> </li>

                    </ul>
                </nav>
            </div>
        </header>

