<?php 

include ('../../../db/conexionbd.php'); 

if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];
    $eliminarAdmin = "delete from sysadmin where ID= $ID ";
    $result = mysqli_query($conexion, $eliminarAdmin);
    if(!$result){
        die("Falló la consulta");
    }
    header("location:../../CRUD.php");
}



