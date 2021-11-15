<?php

include '../../../db/conexionbd.php';
/** @var type $lote */
$lote = htmlentities($_POST['lote']);
$marca = htmlentities($_POST['marca']);
$cantidad = htmlentities($_POST['cantidad']);
$fechaEntrada = htmlentities($_POST['fechaEntrada']);
$fechaTermino = htmlentities($_POST['fechaTermino']);

if (isset($_POST['agregarVacunas']) && $lote != null || 
    $marca != null || $cantidad != null || 
    $fechaEntrada != null || $fechaTermino != null) {
    
    $insertarVacunas = "insert into vacunas(lote,marca,cantidad,fechaEntrada,fechaTermino) values('" . $lote . "','" . $marca . "','" . $cantidad . "','" . $fechaEntrada . "','" . $fechaTermino . "')";
    $result = mysqli_query($conexion, $insertarVacunas);
    if (!$result) {
        die("Falló la consulta");
    }
    $_SESSION['message'] = 'Datos agregados correctamente';
    $_SESSION['message_type'] = 'success';
    header("location:../CRUDvacunas.php");
}
?>