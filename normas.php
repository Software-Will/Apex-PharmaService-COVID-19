
<!-- CONTENIDO DE PESTAÑAS -->

<head>
    <title>Normas y Recomendaciones | Apex PharmaService COVID-19</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link href="css/normas.css" rel="stylesheet" type="text/css" />
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
    <!-- Logo del minsa -->
    <header class="header">
        <div class="contenedor logo-nav-container">
            <a href="home.php"
               title="Página principal de Apex PharmaService">
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
                    <div style="text-align: right;"><li><a href="intranet.php" title="Intranet"><i class="fas fa-user"></i></a></li></div>   <!-- ingreso de admins -->
                </ul>
            </nav>
        </div>
    </header>
    <br /><br /><br /><br /><br /><br />
    <!-- FIN DE ENCABEZADO DE PAGINA -->

    <!-- INICIA NORMAS SEGUN MINSA - LADO IZQUIERDO -->
    <div class="contenedor-normas-all">
        <!-- <h1>Normas vigentes</h1>
            <iframe
                                src="https://www.gob.pe/institucion/minsa/colecciones/749-normatividad-sobre-coronavirus-covid-19"
                                frameborder="0" height="800" width="500">
                            </iframe>
            <object data="https://www.gob.pe/institucion/minsa/colecciones/749-normatividad-sobre-coronavirus-covid-19" height="600" width="600"></object> -->
        <div class="titulo">
            <p class="titulo-normas" >NORMAS Y RECOMENDACIONES</p>
        </div>
        <!--        <h1 class="titulo-normas" align="center">NORMAS Y RECOMENDACIONES</h1>-->
        <nav class="submenu">
            <ul>
                <li><a href="#seccion1">MEDIDAS DE PREVENCIÓN GENERALES</a></li>
                <li><a href="#seccion2">MEDIDAS PREVENTIVAS PARA VIAJEROS</a></li>
                <li><a href="#seccion3">PROCEDIMIENTO FRENTE A UN POSIBLE CASO SOSPECHOSO</a></li>
            </ul>
        </nav>
        <section id="seccion1">
            <div class="s">
                <h2>MEDIDAS DE PREVENCIÓN GENERALES</h2>
                <h3>Lavarse las manos frecuentemente por al menos 30 segundos con agua
                    y jabón o usar alcohol gel.
                    Evitar llevarse las manos a la cara (ojos, nariz, boca).
                    Mantener distancia mínima de 1 metro con cualquier persona que tosa o
                    estornude.<br />

                    En caso de tos o estornudo, hacerlo sobre el antebrazo o en pañuelo
                    desechable, eliminándolo posteriormente en basurero tapado y realizar
                    lavado de manos ya sea con agua y jabón o con alcohol gel.
                    Limpiar superficies, en particular aquellas con alto uso, dado que
                    se desconoce el tiempo de supervivencia del virus en ellas.
                    No existe evidencia clínica que respalde el uso de mascarilla en
                    población sana o asintomática. Utilícela en personas con síntomas o en
                    personas que interactúen con casos confirmados o sospechosos.<br />
                    <br />
                    Algunas empresas podrían adoptar medidas adicionales como:
                    Reemplazar saludo de mano/beso por uno verbal.
                    Considerar el teletrabajo frente a trabajadores con síntomas (fiebre,
                    tos o dificultad respiratoria) o que han estado expuestos a personas
                    confirmadas con COVID-19.<br />
                    <br />

                    Frente a dudas generales recomendamos llamar a la
                    central telefónica (01) 315-4356 Apex PharmaService.
                </h3>

                <p class="abajo-s1">Más informacion en <a
                        href="https://www.who.int/es/emergencies/diseases/novel-coronavirus-2019" target="-blank"
                        title="Información adicional sobre la COVID-19 por la OMS"
                        style="color: black; font-weight: 600;">
                        who.int</a></p>
            </div>
            <img src="icons-imgs/manitas.svg" alt="Lavado de manos" class="manitas">
        </section>
        <section id="seccion2">
            <div class="s">
                <h2>MEDIDAS PREVENTIVAS PARA VIAJEROS</h2>
                <h3>No existe una recomendación de la OMS respecto a evitar viajes para
                    personas asintomáticas, sin embargo, aquellos que sí viajen deberán
                    reforzar las medidas generales, en particular si el destino ya cuenta con
                    casos confirmados.<br />
                    <br />
                    Se recomienda:<br />
                    *Informarse sobre las medidas de control que han tomado los distintos
                    medios de transporte.<br />
                    *Evitar el contacto directo con personas que padezcan síntomas (fiebre,
                    tos y/o dificultad respiratoria).<br />
                    *Lavarse las manos frecuentemente.<br />
                    *Evitar el contacto directo con animales de granja o animales salvajes,
                    vivos o muertos.<br />
                    *En caso de presentar síntomas, durante o posterior al viaje, tomar las
                    medidas de prevención descritas y presentarse lo antes posible a un centro
                    asistencial.
                </h3><br />
            </div>
            <img src="icons-imgs/distanciamiento.svg" alt="Uso de mascarillas" class="mascarilla">
        </section>
        <section id="seccion3">
            <div class="s">
                <h2>PROCEDIMIENTO FRENTE A UN POSIBLE CASO SOSPECHOSO</h2>
                <h3>Si se presenta algún trabajador con síntomas (fiebre, tos o dificultad
                    respiratoria), pero no ha viajado a zonas de contagio ni ha tenido contacto
                    con algún caso confirmado de COVID-19, se recomienda tomar las
                    medidas de prevención generales.<br />
                    <br />
                    Si el trabajador presenta síntomas y sí ha viajado a zonas de contagio o ha
                    tenido contacto con algún caso confirmado de COVID-19, se debe solicitar,
                    en la medida de lo posible, usar una mascarilla y deberá acudir al centro
                    asistencial más cercano, dando aviso previamente de su llegada.<br />
                    <br />
                    Si se confirmara su contagio con COVID-19, el trabajador deberá
                    comunicarlo a su jefatura directa. Se recomienda identificar a los
                    compañeros de trabajo que hayan estado en contacto directo con el
                    contagiado y promover el monitoreo de sus síntomas (principalmente
                    fiebre) por un periodo de 14 días, con expresa indicación de concurrir a un
                    centro asistencial si aparecen síntomas. De manera adicional, la empresa
                    podría promover el teletrabajo para ese grupo de trabajadores
                </h3>
            </div>
            <img src="icons-imgs/medico.svg" alt="Acudir al médico" id="doc" class="medico">
        </section>

    </div>


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

