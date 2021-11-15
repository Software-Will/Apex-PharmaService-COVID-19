<?php include ('../db/conexionbd.php'); ?>
<!DOCTYPE html>
<html>
    <!-- CONTENIDO DE PESTAÑAS -->
    <head>
        <title>CRUD | SysAdmin</title>
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
                        <li><a href="homeLogin.php" title="Home Admin">Home Admin</a></li>
                        <li><a href="CRUD.php" title="CRUD">Home CRUD</a> </li>
                        <li><a href="CRUD/CRUDvacunas.php" title="CRUD de la tabla vacunas">CRUD vacunas</a></li>
                        <li><a href="CRUD/CRUDpersonal.php" title="CRUD de la tabla personal">CRUD personal</a></li>
                        <li><a href="CRUD/padronVacunacion.php" title="Registrados en el patrón de vacunación">Padrón de vacunación</a></li>
                        <li><a href="cerrarSesion.php" title="Cerrar Sesión">Cerrar Sesión</a> </li>

                    </ul>
                </nav>
            </div>
        </header>

        <br/><br/><br/><br/><br/><br/><br/>
        <div><h1 style="text-align: center; font-size: 55px;">CRUD</h1></div>
        <p style="text-align: center; font-size: 25px;">En este apartado podra agregar, visualizar, actualizar y eliminar elementos de las tablas de la base de datos de la empresa ApexPharmaService. </p>

        <br/>

        <!--FORMULARIO DE ADMINISTRADORES-->
        <div class="container p-4">
            <div class="row">
                <div class="col-md-4">
                    <!-- Formulario para añadir -->
                    <div class="card card-body">
                        <form action="CRUD/sysadmin/agregarAdmin.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="ID" class="form-control" placeholder="ID" autofocus required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="usuario" class="form-control" placeholder="Nombre de Usuario" required="">
                            </div>
                            <div class="form-group">
                                <input type="password" name="contraseña" class="form-control" placeholder="Contraseña" required="">
                            </div>
                            <div class="form-group">
                                <input type="email" name="correo" class="form-control" placeholder="Correo" required="">
                            </div>
                            <input type="submit" name="agregarVacunas" class="btn btn-success btn-block" value="Agregar Datos">
                        </form>
                    </div>
                </div>

                <div class="col-md-8">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Usuario</th>
                                <th>Contraseña</th>
                                <th>Correo</th>
                                <th><strong>Acciones</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $queryAdmin = "SELECT * FROM sysadmin";
                            $resultadoAdmin = mysqli_query($conexion, $queryAdmin);

                            while ($filasAdmin = mysqli_fetch_assoc($resultadoAdmin)) {
                                ?>
                                <tr>
                                    <td><?= $filasAdmin['ID'] ?></td>
                                    <td><?= $filasAdmin['usuario'] ?></td>
                                    <td><?= $filasAdmin['contraseña'] ?></td>
                                    <td><?= $filasAdmin['correo'] ?></td>
                                    <td>
                                        <a href="CRUD/sysadmin/editarAdmin.php?ID=<?php echo $filasAdmin['ID'] ?>" class="btn btn-secondary">
                                            <i class="fas fa-marker"></i>
                                        </a>
                                        <a href="CRUD/sysadmin/eliminarAdmin.php?ID=<?php echo $filasAdmin['ID'] ?>" class="btn btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
<?php } ?>
                        </tbody>
                    </table>
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
</html>


