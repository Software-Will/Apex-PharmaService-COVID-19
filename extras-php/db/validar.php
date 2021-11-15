<?php

//CAPTURA DE VALORES
$usuarioAdmin = htmlentities($_POST['usuarioAdmin']);
$passwordAdmin = htmlentities($_POST['passwordAdmin']);

//INICIO DE SESION
session_start();
$_SESSION['usuarioAdmin'] = $usuarioAdmin;

include('conexionbd.php'); //SE CONECTA A LA BD

$consulta = "SELECT * FROM sysadmin WHERE usuario = '$usuarioAdmin' and contraseña = '$passwordAdmin'"; //CONSULTA
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

//VALIDA SI SE ENCUENTRA LOS DATOS
if ($filas) {
    header("location:../login/homeLogin.php");
} else {
    header("Location:../../intranet.php");
}
mysqli_free_result($resultado);
//mysqli_close($conexion); //CIERRE DE CONEXION


