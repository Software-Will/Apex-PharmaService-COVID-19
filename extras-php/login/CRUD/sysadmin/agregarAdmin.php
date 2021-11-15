<?php 

include ('../../../db/conexionbd.php'); 

$ID = htmlentities($_POST['ID']);
$usuario = htmlentities($_POST['usuario']);
$contraseña = htmlentities($_POST['contraseña']);
$correo = htmlentities($_POST['correo']);

if (isset($_POST['agregarAdmin']) && $ID != null || 
    $usuario != null || $contraseña != null || 
    $correo != null) {
    
    $agregarAdmin = "insert into sysadmin(ID,usuario,contraseña,correo) values('" . $ID . "','" . $usuario . "','" . $contraseña . "','" . $correo . "')";
    $result = mysqli_query($conexion, $agregarAdmin);
    if (!$result) {
        die("Falló la consulta");
    }
    
    header("location: ../../CRUD.php");
}
?>
