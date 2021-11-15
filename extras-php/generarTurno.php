<?php
//TRANSFERENCIA DE DATOS
$dni = htmlentities($_POST["DNI"]);
$nombres = htmlentities($_POST["nombres"]);
$apellidos = htmlentities($_POST["apellidos"]);
$edad = htmlentities($_POST["edad"]);
$numCel = htmlentities($_POST["numCel"]);
$emailTurno = htmlentities($_POST["emailTurno"]);
$direccion = htmlentities($_POST["direccion"]);
$auxRegion = htmlentities($_POST["region"]);
$auxEstado = htmlentities($_POST["estadoPaciente"]);

//Funcion para mostrar la region textualmente
function regionMostrar($i) {
    //DECLARAR ARREGLO
    $arrayRegiones = array("Amazonas", "Ancash", "Apurimac", "Arequipa", "Ayacucho", "Cajamarca", "Callao", "Cusco",
        "Huancavelica", "Huanuco", "Ica", "Junín", "La Libertad", "Lambayeque", "Lima Metropolitana",
        "Lima Provincias", "Loreto", "Madre de Dios", "Moquegua", "Pasco", "Piura", "Puno", "San Martín",
        "Tacna", "Tumbes", "Ucayali");
    $region = $arrayRegiones[$i - 1]; //-1 x inicializar en 1, array cuenta desde 0
    return $region;
}

//Funcion para mostrar el estado del paciente
function estadoPaciente($j) {
    $arrayEstados = array("Convencional", "Riesgo", "Discapacitado");
    $estado = $arrayEstados[$j - 1];
    return $estado;
}

//Funcion para generar la Fecha de vacunacion 1
function fecha1() {
    $dia = intval(date("d") + 5); //datos actuales = 6
    if ($dia < 10) { //If para dar formato a la fecha - considerando calculoDia
        return $fechaVacunacion1 = (string) "0" . $dia . "/" . date("m") . "/" . date("Y");
    } else {
        return $fechaVacunacion1 = (string) $dia . "/" . date("m") . "/" . date("Y");
    }
}

//Funcion para generar la Fecha de vacunacion 2
function fecha2() {
    $dia = intval(date("d") + 5 + 21); //21 dias despues de la vacunacion - usara este en caso no se supere los dias del mes
    $mes = intval(date("m")); //Nos da el mes actual, servira para determinar la cantidad de dias
    $arrayDiasMes = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    if ($dia < $arrayDiasMes[$mes]) { //Si la suma de dias es menor que los dias del mes
        $mesActual = $mes;
        return $fechaVacunacion2 = (string) $dia . "/" . "0" . $mesActual . "/" . date("Y");
    } else { //Si la suma de dias es mayor a la suma de dias
        $calculoDia = $dia - $arrayDiasMes[$mes - 1]; //Se salta un mes + y se da la diferencia
        //como dia de vacuncacion 2
        $mesActual = $mes + 1;
        if ($calculoDia < 10) { //If para dar formato a la fecha - considerando calculoDia
            return $fechaVacunacion2 = (string) "0" . $calculoDia . "/" . "0" . $mesActual . "/" . date("Y");
        } else {
            return $fechaVacunacion2 = (string) $calculoDia . "/" . "0" . $mesActual . "/" . date("Y");
        }
    }
}

//Funcion para enviar un correo electronico con todos los datos
//function correoElectronico() {
//    $dni = htmlentities($_POST["DNI"]);
//    $nombres = htmlentities($_POST["nombres"]);
//    $apellidos = htmlentities($_POST["apellidos"]);
//    $edad = htmlentities($_POST["edad"]);
//    $numCel = htmlentities($_POST["numCel"]);
//    $emailTurno = htmlentities($_POST["emailTurno"]);
//    $direccion = htmlentities($_POST["direccion"]);
//    $auxRegion = htmlentities($_POST["region"]);
//    $auxEstado = htmlentities($_POST["estadoPaciente"]);
//    $asunto = "Registro de vacunación contra la COVID-19 | ApexPharmaService";
//    $mensajeCompleto = (string) "Datos del registrado" . "\nDNI: $dni\nNombres: $nombres\nApellidos: $apellidos";
//    mail($emailTurno, $asunto, "Enviado desde ApexPharmaService", $mensajeCompleto);
    ?><script>//alert("Envio del mensaje");</script> <?php
//}
?>

<head>
    <title>Turno de vacunación | ApexPharmaService</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS --> 
    <link href="../css/home.css" rel="stylesheet" type="text/css" /> <!-- Le da el diseño -->
    <link href="../css/generarTurno.css" rel="stylesheet" type="text/css"/>
    <link href="../css/registros.css" rel="stylesheet" type="text/css" />
    <link href="../css/extras-css/animacion-carga.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="../icons-imgs/logo_pestaña.png" /> <!-- Logo de pestaña -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class = "hidden">
    <!-- Animacion carga -->
    <div class = "centrado" id = "onload">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ENCABEZADO DE PAGINA -->
    <header class="header">
        <div class="contenedor logo-nav-container">
            <a href="../home.html"
               title="Página principal de Apex PharmaService">
                <img src="../icons-imgs/logo_prinicipal.png" style=" width: 250px;
                     height: auto;padding: 1rem;" alt="Página principal de Apex PharmaService"/></a>
            <input type="checkbox" id="menu-bar">
            <label class="icon icon-list2" for="menu-bar"></label>
            <!-- MENU DE NAVEGACION -->
            <nav class="menu">
                <ul>
                    <li><a href="../home.php" title="Home">Home</a> </li>
                    <li><a href="../noticias.php" title="Noticias y Avances">Noticias y Avances</a></li>
                    <li><a href="../normas.php" title="Normas y Recomendaciones">Normas y Recomendaciones</a></li>
                    <li><a href="../contacto.php" title="Contacto y Redes Sociales">Contacto y Redes Sociales</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/>

    <!-- CUERPO DEL RESULTADO -->
    <div class="cuerpo-turno">
        <br/>
        <h2 style="text-align: center;">TURNO DE VACUNACIÓN</h2>
        <!-- COLUMNA DERECHA -->
        <div class = "datos-derecha"><br/><br/>
            <p style="font-size: 25px; font-weight: bold; color: #00c9b1;">REGIÓN/PROVINCIA</p> <!-- A FUTURO -->
            <h2><?= regionMostrar($auxRegion); ?></h2><br/><br/> <!-- Funcion para determinar region -->
            <p style="font-size: 20px;">Tipo de paciente:</p>
            <h2><?= estadoPaciente($auxEstado); ?></h2><br/><br/>  <!-- Funcion para determinar estado del paciente -->
            <p style="font-size: 20px;">Centro de vacunación:</p>
            <h2>Hospital del MINSA o ESSALUD de la región <?= regionMostrar($auxRegion); ?> más cercano</h2><br/><br/>
            <a href= "../documents/Lista de hospitales a nivel nacional.pdf" title="Lista de hospitales a nivel nacional" target="-blank" style="color:black; font-weight: bold;">¿CÓMO LLEGAR?</a><br/><br/><br/>
            <p style="font-size: 20px;">Fecha de vacunación - 1ra dosis:</p>
            <h2><?= fecha1(); ?></h2><br/><br/> <!-- Funcion para determinar fecha 1ra dosis -->
            <p style="font-size: 20px;">Fecha de vacunación - 2da dosis:</p>
            <h2><?= fecha2(); ?></h2><br/><br/>
            <p style="font-size: 20px;">Horario de vacunación:</p>
            <h3>Lunes - Viernes: 06:00 a.m. a 6:00 p.m.<br/><br/>
                Sábado - Domingo: 06:00 a.m. a 2:00 p.m.</h3>
        </div>

        <!-- COLUMNA IZQUIERDA -->
        <div class = "datos-izquierda"><br/>
            <h3 align="center" style="font-size: 25px; color: #00c9b1">BIENVENIDO(A)</h3><br/><br/>
            <center> <div style="color: red; width: 250px; border-width: 2px; border-style: solid; border-color: red; text-align: center; border-radius: 8px;">
                    <h3>¡EN HORA BUENA YA TE ENCUENTRAS REGISTRADO(A) EN EL PADRÓN DE VACUNACIÓN!</h3></div></center><br/><br/>
            <p style="font-size: 20px;">DNI:</p>
            <h2><?= $dni ?></h2><br/><br/> 
            <p style="font-size: 20px;">Nombres:</p>
            <h2><?= $nombres ?></h2><br/><br/>
            <p style="font-size: 20px;">Apellidos:</p>
            <h2><?= $apellidos ?></h2><br/><br/>
            <p style="font-size: 20px;">Edad:</p>
            <h2><?= $edad . " años" ?></h2><br/><br/>
            <p style="font-size: 20px;">Número de contacto:</p>
            <h2><?= $numCel ?></h2><br/><br/>
            <p style="font-size: 20px;">Dirección:</p>
            <h2><?= $direccion ?></h2><br/><br/><br/><br/>
            <a href="javascript:window.print()" style="color: #a7afb2; font-weight: bold;"><i class="fa fa-print"></i> IMPRIMIR</a>
        </div>
        <p style="text-align: right;">(*)Sujeto a <a href="https://cdn.www.gob.pe/uploads/document/file/1764206/Pol%C3%ADtica%20de%20privacidad.pdf" style="color: black; font-weight: bold;" target="-blank" title="Términos y condiciones (MINSA).">
                términos y condiciones.</a></p>
    </div>
    <div style="text-align: center;">
        <a href = "javascript: history.go(-1)" title="Editar registro"><button class="boton" style="width: 200px; border-color: #00c9b1;"><h4>Editar registro</h4></button></a> <!-- BOTON PARA EDITAR DATOS -->
        <a href="confirmarRegistro.php?emailTurnoAux=<?= $emailTurno; ?>"><button type="submit" class="boton" style="width: 200px; border-color: #00c9b1;" title="Confirmar registro"><h4>Confirmar registro</h4></button></a> <!-- BOTON QUE CONFIRMA LOS DATOS Y ENVIA UN CORREO, ASIMISMO ALMACENA LOS DATOS EN LA BD -->
    </div>
    <br/><br/><br/><br/>

    <!-- PIE DE PAGINA -->
    <!-- Info de contacto -->
    <footer>
        <!-- Pie de pagina -->
        <div class="contenedor-footer-all">
            <div class="contenedor-body">

                <div class="colum1">
                    <a href="../home.php">
                        <img class="logs" src="../icons-imgs/logo_prinicipal.png"
                             title="Página principal de Apex PharmaService" /></a>
                </div>
                <div class="colum2">
                    <p> <strong>Sede Central</strong><br/>
                        Av. Javier Prado Este 759<br/>
                        Lince 15046, Lima Metropolitana, Lima - Perú<br/><br/>
                        <strong>Central Telefónica</strong><br/>
                        (01) 315-4356<br/><br/>
                        <strong>Correo de contacto</strong><br/>
                        <a style=" color: white;"
                           href="mailto:apex_pharmaservice@yopmail.com?Subject=Solicito%20de%20sus%20servicios"
                           title="Correo de contacto">apex_pharmaservice@yopmail.com</a>
                    </p><br/>
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
                <h4 align = "center">Developer with <img src="../icons-imgs/icon_footer.png" style="width: 18px";/> in our homes<br/><br/></h4>
                <h4 style="text-align: center;">Apex PharmaService&reg; 2021</h4>
            </div>
        </div>
    </footer>
    <!--FIN DE PIE DE PAGINA--> 
    <script src = "https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Libreria JQuery para la animacion de carga -->
    <script src = "../js/extra-js/animacion-carga.js"></script>
</body>











