<?php include '../../../db/conexionbd.php';

if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];
    $eliminarPersonal = "delete from personal where ID= $ID ";
    $result = mysqli_query($conexion, $eliminarPersonal);
    if(!$result){
        die("Falló la consulta");
    }
    echo 'Datos eliminados satisfactoriamente';
    header("location:../CRUDpersonal.php");
}
