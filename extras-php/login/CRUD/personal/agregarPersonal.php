<?php

include '../../../db/conexionbd.php';
/** @var type $lote */
$ID = htmlentities($_POST['ID']);
$regiones = htmlentities($_POST['regiones']);
$cantidad = htmlentities($_POST['cantidad']);
$activos = htmlentities($_POST['activos']);
$inactivos = htmlentities($_POST['inactivos']);

if (isset($_POST['agregarPersonal']) && $ID != null || 
    $regiones != null || $cantidad != null || 
    $activos != null || $inactivos != null) {
    
    $insertarPersonal = "insert into personal(ID,regiones,cantidad,activos,inactivos) values('" . $ID . "','" . $regiones . "','" . $cantidad . "','" . $activos . "','" . $inactivos . "')";
    $result = mysqli_query($conexion, $insertarPersonal);
    if (!$result) {
        die("Falló la consulta");
    }
    header("location:../CRUDpersonal.php");
}
?>
