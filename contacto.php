
<!-- CONTENIDO DE PESTAÑAS -->
<head>
    <title>Contacto y Redes Sociales | Apex PharmaService COVID-19</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link href="css/contacto.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="icons-imgs/logo_pestaña.png" /> <!-- Logo de pestaña -->
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <link href="css/extras-css/button-top.css" rel="stylesheet" type="text/css"/>
    <!-- Scrollreveal-->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</head>

<!-- CONTENIDO DE PAGINA -->
<body>
    <!-- BOTON HACIA ARRIBA-->
    <button
        type="button"
        class="btn btn-danger btn-floating btn-lg"
        id="btn-back-to-top"
        >
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
            <!-- MENU DE NAVEGACION -->
            <nav class="menu">
                <ul>
                    <li><a href="home.php" title="Home">Home</a> </li>
                    <li><a href="registros.php" title="Registro de Vacunación (COVID-19)">Registro de Vacunación (COVID-19)</a></li>
                    <li><a href="noticias.php" title="Noticias y Avances">Noticias y Avances</a></li>
                    <li><a href="normas.php" title="Normas y Recomendaciones">Normas y Recomendaciones</a></li>
                    <li><a href="contacto.php" title="Contacto y Redes Sociales">Contacto y Redes Sociales</a></li>
                    <div style="text-align: right;"><li><a href="intranet.php" title="Intranet"><i class="fas fa-user"></i></a></li></div>   <!-- ingreso de admins -->
                </ul>
            </nav>
        </div>
    </header>
    <br/><br/><br/>
    <!-- FIN DE ENCABEZADO DE PAGINA -->
    <br/>

    <div id="contenedor-all-contacto">
        <div class="contenedor-contacto-all2">
            <div class="contenedor-contacto">
                <div class="colum1-contacto">
                    <h2 class="contacto">CONTACTO</h2>
                    <p class="contacto"><strong>Información de Contacto</strong><br/><br/>
                        Apex PharmaService<br/><br/>
                        <strong>Av. Javier Prado Este 759, Lince 15046, Lima Metropolitana, Lima - Perú&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><br><br>
                        Horario de Atención de Central Telefónica:<br/><br/>
                        <strong>(01) 315-4356</strong><br/><br/>
                        Todos los días las 24 horas del día<br/><br/>
                        <strong>Consultas personalizadas al Whatsapp: <a href="https://wa.link/ytjvug" target="-blank" title="Número de WhatsApp" style="color: black;">987654321</a></strong>
                    </p><br/>   

                    <!-- Plugins de redes sociales -->
                    <h2 class="contacto">REDES SOCIALES</h2>

                    <!-- Inclusion de redes sociales -->
                    <div class="redes-sociales">
                        <a href="https://www.facebook.com/minsaperu" class="facebook" target="-blank" title="Página de Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/Minsa_Peru" class="twitter" target="-blank" title="Página de Twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/minsa_peru/?hl=es-la" class="instagram"  target="-blank" title="Página de Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/user/minsaperu1" class="youtube"  target="-blank" title="Canal de Youtube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="colum2-contacto">
                    <h2 class="ubicacion">UBICACIÓN</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.3093706741597!2d-77.02753938457491!3d-12.090960546017671!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c864785bb143%3A0x90d2e7d5478d73c2!2sAv.%20Javier%20Prado%20Este%20759%2C%20Lince%2015046!5e0!3m2!1ses-419!2spe!4v1619072749786!5m2!1ses-419!2spe" width="600" height="450" style="border:0;"  align = "center" class="iframe-ubi"></iframe>
                </div>
            </div><br/><br/>
            <div class = "formulario-all">
                <div class = "formularioContacto"><br/><br/>
                    <h1 class = "tituloformularioContacto">FORMULARIO DE CONTACTO</h1><br/><br/>
                    <div class = "grupo-wrapper animated bounceInUp">
                        <div class = "contact-formulario">
                            <h2>Contáctenos</h2>
                            <form action="extras-php/auxContacto.php" method="POST">
                                <p>
                                    <label for = "NombresApellidosContacto">Nombres y Apellidos</label>
                                    <input type="text" name="NombresApellidosContacto" id ="NombresApellidosContacto" required="">
                                </p>
                                <p>
                                    <label for = "emailContacto">Email</label>
                                    <input type="email" name="emailContacto" id ="emailContacto" required="">
                                </p>
                                <p>
                                    <label for = "numCelContacto">Número Celular</label>
                                    <input type="text" name="numCelContacto" id ="numCelContacto" required="" minlength="9" maxlength="9">
                                </p>
                                <p>
                                    <label for = "asuntoContacto">Asunto de contacto</label>
                                    <input type="text" name="asuntoContacto" id ="asuntoContacto" required="">
                                </p>
                                <p class = "block">
                                    <label for = "mensajeContacto">Mensaje</label>
                                    <textarea name="mensajeContacto" id ="mensajeContacto" required="" rows="3" ></textarea>
                                </p>
                                <p class = "block">
                                    <button type = submit title="¡Contactenos!"><h4>ENVIAR</h4></button>
                                </p>
                            </form>
                        </div>
                        <div class = "contact-informacion">
                            <h3>Resumen de Información</h3>
                            <ul>
                                <li><i class = "fas fa-map-marker-alt"><a style=" color: white;" title ="Dirección de la Sede Central"
                                                                          href = "https://www.google.com/maps/dir//-12.0909658,-77.0253507/@-12.090966,-77.025351,16z?hl=es-419">
                                            Av. Javier Prado Este 759</a></i></li>
                                <li><i class = "fas fa-phone"> (01) 315-4356 - 987654321</i></li>
                                <li><i class = "fas fa-envelope"><a style=" color: white;"
                                                                    href="mailto:apex_pharmaservice@yopmail.com?Subject=Solicito%20de%20sus%20servicios"
                                                                    title="Correo de contacto">apex_pharmaservice@yopmail.com</a></i></li>
                            </ul><br/>
                            <p>24 horas de atención los 365 días del año.</p>
                            <p><a href="home.php" style=" color: white;">ApexpharmaService.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <br/><br/>
    <!-- comment -->

    <!-- FIN DE CONTENIDO DE LA PAG -->

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
                    <p> <strong>Sede Central</strong><br />
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
                <h4 align = "center">Developer with <img src="icons-imgs/icon_footer.png" style="width: 18px";/> in our homes<br/><br/></h4>
                <h4 style="text-align: center;">Apex PharmaService&reg; 2021</h4>
            </div>
        </div>

    </footer>
    <!--FIN DE PIE DE PAGINA--> 

    <!-- MDB -->
    <script type="text/javascript" src="mdb.min.js"></script>
    <!-- Custom scripts -->
    <script src="js/extra-js/button-top.js" type="text/javascript"></script>
    <!-- Custom Scrollreveal -->
    <script src="js/scrollreveal.js" type="text/javascript"></script>
</body>


