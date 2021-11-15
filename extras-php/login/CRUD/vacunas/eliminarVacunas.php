<?php

include '../../../db/conexionbd.php';

/** @var type $lote */
if (isset($_GET['lote'])) {
    $lote = $_GET['lote'];
    $eliminarVacunas = "delete from vacunas where lote= $lote ";
    $result = mysqli_query($conexion, $eliminarVacunas);
    if(!$result){
        die("Falló la consulta");
    }
    $_SESSION['message'] = 'Datos eliminados satisfactoriamente';
    $_SESSION['message_type'] = 'danger';
    header("location:../CRUDvacunas.php");
}
