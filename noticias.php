<!-- CONTENIDO DE PESTAÑAS -->
<head>
    <title>Noticias y Avances | Apex PharmaService COVID-19</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link href="css/noticias.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="icons-imgs/logo_pestaña.png" /> <!-- Logo de pestaña -->
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
        id="btn-back-to-top">
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
    <br/><br/><br/><br/><br/><br/><br/><br/>
    <!-- FIN DE ENCABEZADO DE PAGINA -->
    <div class = "contenido-global-noticias">
        <!-- ACA COLOCAMOS EL CONTENIDO DE PAG -->
        <h1 align = "center" class="news-title">NOTICIAS Y AVANCES</h1><br/>
        <section class="banner1"> <!-- Banner 1 -->
            <div class="contenido">
                <h2>Llega al Perú un nuevo lote de 200,000 vacunas Pfizer contra el covid-19</h2> <!-- Noticia 1 -->
                <p>Un nuevo lote de 200,000 dosis de vacunas contra el covid-19 de 
                    la farmacéutica Pfizer llegó esta noche al país –a bordo de un 
                    avión de KLM procedente de Amsterdam– y fue recibido por la 
                    ministra de Comercio Exterior y Turismo, Claudia Cornejo.</p>
                <a title = "Leer más" href="https://andina.pe/agencia/noticia-llega-al-peru-un-nuevo-lote-200000-vacunas-pfizer-contra-covid19-843201.aspx" target="-blank" class="btn">Leer más <i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </section>

        <!-- Grid de noticias -->
        <div class="news-cards">
            <div> <!-- Noticia 2 -->
                <img src="icons-imgs/noticias/noticia2.jpg" title="En mayo llegarían al Perú cerca de 3 millones de vacunas de Pfizer contra el COVID-19"/>
                <h3>En mayo llegarían al Perú cerca de 3 millones de vacunas de Pfizer 
                    contra el COVID-19</h3>
                <p>El ministro de Salud, Óscar Ugarte, detalló que durante mayo y 
                    junio se recibirán 700 mil dosis semanales y que serán, en total,
                    cerca de 3 millones de dosis de Pfizer cada mes.
                </p><br/>
                <a title = "Leer más" href="https://gestion.pe/peru/francisco-sagasti-anuncia-que-en-mayo-llegaran-al-peru-3-millones-de-vacunas-de-pfizer-contra-el-covid-19-coronavirus-nndc-noticia/?ref=gesr" target="-blank">Leer más<i class="fas fa-angle-double-right"></i></a>
            </div>

            <div> <!-- Noticia 3 -->
                <img src="icons-imgs/noticias/noticia3.jpg" title="Ya tenemos las dosis suficientes para vacunar a todos los residentes en el Perú a lo largo del año" />
                <h3>Ya tenemos las dosis suficientes para vacunar a todos los residentes en el Perú a lo largo del año</h3>
                <p>Violeta Bermúdez señaló que dejarán una "metodología de vacunación" para que el próximo Gobierno "llegue y 
                    continúe y no se pare un solo día en inmunizar a nuestra población".
                </p><br/>
                <a title = "Leer más" href="https://caretas.pe/nacional/ya-tenemos-las-dosis-suficientes-para-vacunar-a-todos-los-residentes-en-el-peru-a-lo-largo-del-ano-sostiene-la-premier/" target="-blank">Leer más <i class="fas fa-angle-double-right"></i></a>
            </div>

            <div> <!-- Noticia 4 -->
                <img src="icons-imgs/noticias/noticia4.jpg" title="Vacunación a mayores de 70 años: padrón, registro, fecha, lugar y cómo consultar qué vacuna me toca" />
                <h3>Vacunación a mayores de 70 años: padrón, registro, fecha, lugar y cómo consultar qué vacuna me toca</h3>
                <p>Después de haber cerrado con éxito la inmunización de los ancianos de 80 años, llega el turno de la 
                    vacunación, con Pfizer, para los adultos mayores de 70.
                </p><br/>
                <a title = "Leer más" href="https://peru.as.com/peru/2021/04/29/actualidad/1619701040_906302.html" target="-blank">Leer más <i class="fas fa-angle-double-right"></i></a>
            </div>

            <div> <!-- Noticia 5 -->
                <img src="icons-imgs/noticias/noticia5.jpg" title="Promedio de fallecidos por toda causa sigue en descenso" />
                <h3>Promedio de fallecidos por toda causa sigue en descenso</h3>
                <p>La curva diaria de fallecidos según datos del Sistema Informático Nacional de Defunciones (Sinadef), 
                    un medidor clave para saber el número real de personas que han perdido la vida por el COVID-19, sigue 
                    disminuyendo desde el 13 de abril.
                </p>
                <a title = "Leer más" href="https://gestion.pe/peru/promedio-de-fallecidos-por-toda-causa-sigue-en-descenso-noticia/" target="-blank">Leer más <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>

        <section class="banner2"> <!-- Banner 2 -->
            <div class="contenido">
                <h2>Revolucionaria vacuna de Moderna</h2> <!-- Noticia 6 -->
                <p>La farmacéutica realiza ensayos con dos nuevas versiones de su remedio: 
                    una que contiene la cepa sudafricana y otra con la combinación de una secuencia 
                    del virus mutado y el original.</p>
                <a title = "Leer más" href="https://as.com/diarioas/2021/05/01/actualidad/1619850282_505074.html" target="-blank" class="btn">Leer más<i class="fas fa-chevron-right"></i>
                </a>
            </div>
        </section>

        <!-- Grid de noticias -->
        <div class="news-cards">
            <div> <!-- Noticia 7 -->
                <img src="icons-imgs/noticias/noticia7.jpg" title="Ecuador recibe el mayor cargamento de vacunas de China contra la COVID-19"/>
                <h4>Ecuador</h4>
                <h3>Ecuador recibe el mayor cargamento de vacunas de China contra la COVID-19</h3>
                <p>Ecuador recibió este sábado un lote de 700 000 vacunas de la farmacéutica china Sinovac, 
                    el mayor cargamento de dosis contra la COVID-19 que ha llegado al país para su programa 
                    de inmunización masiva, que comenzó en enero pasado.
                </p>
                <a title = "Leer más" href="https://rpp.pe/mundo/latinoamerica/coronavirus-ecuador-recibe-el-mayor-cargamento-de-vacunas-de-china-contra-la-covid-19-noticia-1330815" target="-blank">Leer más<i class="fas fa-angle-double-right"></i></a>
            </div>

            <div> <!-- Noticia 8 -->
                <img src="icons-imgs/noticias/noticia8.jpg" title="Argentina recibe las primeras vacunas COVID-19 a través del Mecanismo COVAX" />
                <h4>Argentina</h4>
                <h3>Argentina recibe las primeras vacunas COVID-19 a través del Mecanismo COVAX</h3>
                <p>El arribo de este primer lote marca el inicio de la distribución a
                    Argentina de las vacunas obtenidas a través de COVAX, pocos días 
                    después de cumplirse un año del inicio de las medidas de 
                    distanciamiento y prevención en el país por la COVID-19.
                </p>
                <a title = "Leer más" href="https://www.paho.org/es/noticias/28-3-2021-argentina-recibe-primeras-vacunas-covid-19-traves-mecanismo-covax" target="-blank">Leer más <i class="fas fa-angle-double-right"></i></a>
            </div>

            <div> <!-- Noticia 9 -->
                <img src="icons-imgs/noticias/noticia9.jpg" title="En cuatro meses, México roza apenas el 5% de su población vacunada" />
                <h4>México</h4>
                <h3>En cuatro meses, México roza apenas el 5% de su población vacunada</h3>
                <p>Aunque el gobierno federal asegura que se cumplió con el objetivo de vacunar a los 
                    mayores de 60 años, al menos con una dosis, en realidad se inmunizó a 4 millones 
                    menos de los esperados.
                </p><br/>
                <a title = "Leer más" href="https://politica.expansion.mx/mexico/2021/04/28/voces-en-cuatro-meses-mexico-roza-apenas-el-5-de-su-poblacion-vacunada" target="-blank">Leer más <i class="fas fa-angle-double-right"></i></a>
            </div>

            <div> <!-- Noticia 10 -->
                <img src="icons-imgs/noticias/noticia10.jpg" title="Brasil defiende su decisión de vetar la importación de la vacuna rusa Sputnik V" />
                <h4>Brasil</h4>
                <h3>Brasil defiende su decisión de vetar la importación de la vacuna rusa Sputnik V</h3>
                <p>Los fabricantes rusos anunciaron que demandarán por difamación a la agencia reguladora 
                    sanitaria de Brasil. "Hizo declaraciones incorrectas y engañosas sin haber probado la 
                    vacuna Sputnik V", subrayaron.
                </p><br/>
                <a title = "Leer más" href="https://rpp.pe/mundo/actualidad/coronavirus-brasil-defiende-su-decision-de-vetar-la-importacion-de-la-vacuna-rusa-sputnik-v-noticia-1334278?ref=rpp" target="-blank">Leer más <i class="fas fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
    <!-- FIN DE CONTENIDO DE LA PAG -->
    <br/><br/>

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
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script src="js/extra-js/button-top.js" type="text/javascript"></script>
    <!-- Custom Scrollreveal -->
    <script src="js/scrollreveal.js" type="text/javascript"></script>
</body>

