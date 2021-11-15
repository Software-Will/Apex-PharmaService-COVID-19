<?php
include '../../../db/conexionbd.php';
$lote = '';
$marca = '';
$cantidad = '';
$fechaEntrada = '';
$fechaTermino = '';

if (isset($GET['lote'])) {
    $lote = $_GET['lote'];
    $sql = "SELECT * FROM vacunas WHERE lote= $lote ";
    $result = mysqli_query($conexion, $sql);

    if (mysql_num_rows($result) == 1) {
        $filasVacunasAgregar = mysqli_fetch_array($result);
        $lote = $filasVacunasAgregar['lote'];
        $marca = $filasVacunasAgregar['marca'];
        $cantidad = $filasVacunasAgregar['cantidad'];
        $fechaEntrada = $filasVacunasAgregar['fechaEntrada'];
        $fechaTermino = $filasVacunasAgregar['fechaTermino'];
}
}

if (isset($POST['actualizarVacunas']) && $lote != null || $marca != null || $cantidad != null || $fechaEntrada != null || $fechaTermino != null) {
    $lote = $_GET['lote'];
    $marca = htmlentities($_POST['marca']);
    $cantidad = htmlentities($_POST['cantidad']);
    $fechaEntrada = htmlentities($_POST['fechaEntrada']);
    $fechaTermino = htmlentities($_POST['fechaTermino']);

    $actualizarVacunas = "update vacunas set lote='" . $lote . "',marca='" . $marca . "',cantidad='" . $cantidad . "',fechaEntrada='" . $fechaEntrada . "',fechaTermino'" . $fechaTermino . "' where lote ='" . $lote . "'";
    mysqli_query($conexion, $actualizarVacunas);
    header("location:../CRUDvacunas.php");
}
?> 

<!-- Header -->
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
                        <li><a href="CRUD.php" title="CRUD">Home CRUD</a> </li>
                        <li><a href="CRUDvacunas.php" title="CRUD de la tabla vacunas">CRUD vacunas</a></li>
                        <li><a href="CRUDpersonal.php" title="CRUD de la tabla personal">CRUD personal</a></li>
                        <li><a href="padronVacunacion.php" title="Registrados en el patrón de vacunación">Padrón de vacunación</a></li>
                        <li><a href="../cerrarSesion.php" title="Cerrar Sesión">Cerrar Sesión</a> </li>

                    </ul>
                </nav>
            </div>
        </header>

        <!--Contenido-->
        <div class="container p-4">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card card-body">
                        <form action="editarVacunas.php?lote=<?php echo $_GET['lote']; ?>" method="POST">
                            <div class="form-group">
                                <input type="text" name="lote" class="form-control" value="<?php echo $lote; ?>" placeholder="Lote" autofocus required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="marca" class="form-control" value="<?php echo $marca; ?>" placeholder="Marca" required>
                            </div>
                            <div class="form-group">
                                <input type="number" name="cantidad" class="form-control" value="<?php echo $cantidad; ?>" placeholder="Cantidad" required>
                            </div>
                            <div class="form-group">
                                <input type="date" name="fechaEntrada" class="form-control" value="<?php echo $fechaEntrada; ?>" placeholder="Fecha de Entrada" required>
                            </div>
                            <div class="form-group">
                                <input type="date" name="fechaTermino" class="form-control" value="<?php echo $fechaTermino; ?>" placeholder="Fecha de Termino" required>
                            </div>
                            <button class="btn-success" name="actualizarVacunas">
                                Actualizar
                            </button>
                        </form>
                    </div>
                </div
            </div>
        </div>

        <!-- PIE DE PAGINA -->
        <!-- Info de contacto -->
        <footer>
            <!-- Pie de pagina -->
            <div class="contenedor-footer-all">
                <div class="contenedor-body">

                    <div class="colum1">
                        <a href="../homeLogin.php">
                            <img class="logs" src="../../../icons-imgs/logo_pestaña.png" 
                                 title="Página de Administradores"  style=" width: 160px;
                                 height: auto;padding: 1rem; " /></a>
                        <a href="../homeLogin.php" title="Página de Administradores">
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
                            <img class="logminsa" src="../../../icons-imgs/logo_bicentenario.png" /></a>
                        <a href="https://www.minsa.gob.pe/" target="-blank">
                            <img class="logminsa" src="../../../icons-imgs/logo_minsa.png"
                                 title="Página principal del Ministerio de Salud (PE)" /></a>
                    </div>

                </div>
            </div>

            <div class="contenedor-footer">
                <div class="copyrigth">
                    <h4 align="center">Developer with <img src="../../../icons-imgs/icon_footer.png" style="width: 18px"; /> in our
                        homes<br /><br /></h4>
                    <h4 style="text-align: center;">Apex PharmaService&reg; 2021</h4>
                </div>
            </div>

        </footer>
        <!--FIN DE PIE DE PAGINA-->
        <!-- MDB -->
        <script type="text/javascript" src="../../../js/mdb.min.js"></script>
        <!-- Custom scripts -->
        <script src="../../../js/extra-js/button-top.js" type="text/javascript"></script>
        <!-- Custom Scrollreveal -->
        <script src="../../../js/scrollreveal.js" type="text/javascript"></script>
    </body>
</html>
