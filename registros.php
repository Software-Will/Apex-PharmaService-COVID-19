<!-- CONTENIDO DE PESTAÑAS -->

<head>
    <title>Registro de Vacunación (COVID-19) | Apex PharmaService COVID-19</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link href="css/registros.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="icons-imgs/logo_pestaña.png" /> <!-- Logo de pestaña -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link href="css/extras-css/button-top.css" rel="stylesheet" type="text/css" />
    <!-- Scrollreveal-->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</head>

<!-- CONTENIDO DE PAGINA -->

<body>
    <!-- BOTON HACIA ARRIBA-->
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>
    <!-- ENCABEZADO DE PAGINA -->
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
                    <li><a href="registros.php" title="Registro de Vacunación (COVID-19)">Registro de Vacunación
                            (COVID-19)</a></li>
                    <li><a href="noticias.php" title="Noticias y Avances">Noticias y Avances</a></li>
                    <li><a href="normas.php" title="Normas y Recomendaciones">Normas y Recomendaciones</a></li>
                    <li><a href="contacto.php" title="Contacto y Redes Sociales">Contacto y Redes Sociales</a></li>
                    <div style="text-align: right;">
                        <li><a href="intranet.php" title="Intranet"><i class="fas fa-user"></i></a></li>
                    </div> <!-- ingreso de admins -->
                </ul>
            </nav>
        </div>
    </header>
    <br /><br /><br><br><br><br><br>
    <!-- FIN DE ENCABEZADO DE PAGINA -->
    <div class="contenedor-registro-all">
        <div class="contenedor-medio">
            <div class="contenedor-registro">
                <div class="presentacion-registro">
                    <img src="icons-imgs/logo_registro.png" alt="Logo de vacunación" id="imagen" style="width: 220px;" />
                    <h2>Registro de vacunación contra la COVID-19</h2><br />
                    <p>Ingresa tus datos para sacar un turno de vacunación:</p>
                </div>
                <div class="contenedor-registro-dentro">
                    <form class="formulario-registro" action="extras-php/generarTurno.php" method="POST">
                        <fieldset style="border: 0px;">
                            <h3 align="center">FORMULARIO DE REGISTRO</h3><br />
                            <h4>Datos Personales</h4><br />
                            <input type="text" id="DNI" placeholder="DNI / C. Extranjería" required="" class="controles" name="DNI" minlength="8" maxlength="8"><br />
                            <br />
                            <input type="text" id="nombres" placeholder="Nombres" required="" class="controles" name="nombres"><br />
                            <br />
                            <input type="text" id="apellidos" placeholder="Apellidos" required="" class="controles" name="apellidos"><br />
                            <br />
                            <input type="number" id="edad" placeholder="Edad" min="18" max="120" required="" class="controles" name="edad"><br />
                            <br />
                            <h4>Contacto</h4><br />
                            <input type="text" id="numeroCelular" placeholder="Telefóno / Celular" required="" class="controles" name="numCel" minlength="9" maxlength="9"><br />
                            <br />
                            <input type="email" id="emailTurno" placeholder="Email" required="" class="controles" name="emailTurno"><br />
                            <br />
                            <input type="text" id="direccion" placeholder="Dirección" required="" class="controles" name="direccion"><br />
                            <br />
                            <h4>Estado</h4><br />
                            <select class="controles" id="estadoPaciente" name="estadoPaciente">
                                <option>Selecciona el estado del paciente</option>
                                <option value=1>Convecional</option>
                                <option value=2>Riesgo</option>
                                <option value=3>Discapacidad</option>
                            </select>
                            <br />
                            <h4>Región</h4><br />
                            <select class="controles" id="region" name="region">
                                <option>Selecciona la región</option>
                                <option value=1>Amazonas</option>
                                <option value=2>Ancash</option>
                                <option value=3>Apurimac</option>
                                <option value=4>Arequipa</option>
                                <option value=5>Ayacucho</option>
                                <option value=6>Cajamarca</option>
                                <option value=7>Callao</option>
                                <option value=8>Cusco</option>
                                <option value=9>Huancavelica</option>
                                <option value=10>Huanuco</option>
                                <option value=11>Ica</option>
                                <option value=12>Junín</option>
                                <option value=13>La Libertad</option>
                                <option value=14>Lambayeque</option>
                                <option value=15>Lima Metropolitana</option>
                                <option value=16>Lima Provincias</option>
                                <option value=17>Loreto</option>
                                <option value=18>Madre de Dios</option>
                                <option value=19>Moquegua</option>
                                <option value=20>Pasco</option>
                                <option value=21>Piura</option>
                                <option value=22>Puno</option>
                                <option value=23>San Martín</option>
                                <option value=24>Tacna</option>
                                <option value=25>Tumbes</option>
                                <option value=26>Ucayali</option>
                            </select><br />
                            <button type="submit" title="¡Registrate!" class="boton">
                                <h4>Registrar turno</h4>
                            </button><br /> <!-- ESCRIBA DATOS Y REVISE LA CONSOLA, AHI SE ENCUENTRAN LOS RESULTADOS  -->
                        </fieldset>
                    </form>
                </div><br />
                <div class="cierre-registro">
                    <p>Consulta las <a href="normas.php" target="-blank" style="color: black;" title="Normas y Recomendaciones | Apex PharmaService COVID-19">
                            normas y recomendaciones</a> o llama a la Línea 113 Salud del Minsa o a la Línea 107
                        de EsSalud o a la Central Telefoníca (01) 315-4356 de Apex PharmaService </p>
                </div>
            </div>
        </div>
    </div>
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
                    <p> <strong>Sede Central</strong><br />
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