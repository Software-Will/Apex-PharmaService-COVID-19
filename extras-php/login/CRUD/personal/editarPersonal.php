<?php
include '../../../db/conexionbd.php';
$ID = $_GET['ID'];
$sqlPersonal = "SELECT * FROM personal where ID='" . $ID . "'";
$resultadoEditar = mysqli_query($conexion, $sqlPersonal);
?> 
<?php while ($filasPersonalAgregar = mysqli_fetch_assoc($resultadoEditar)) {
    ?>
    <div>
        <form action="editarPersonal.php" method="POST">
            
            <input type = hidden name = "ID" value="<?php echo $filasPersonalAgregar['ID'] ?>">
            <label>ID </label>
            <input type = text name = "ID" value="<?php echo $filasPersonalAgregar['ID'] ?>"><br/>
            <label>Region <strong>(No cambiar)</strong></label>
            <input type="text" name = "regiones" required="" value="<?php echo $filasPersonalAgregar['regiones'] ?>"></input><br/>
            <label>Cantidad</label>
            <input type="number" name="cantidad" required="" min="0" value="<?php echo $filasPersonalAgregar['cantidad'] ?>"></input><br/>
            <label>Activos</label>
            <input type="number" name="activos" required="" min="0" value="<?php echo $filasPersonalAgregar['activos'] ?>"></input><br/>
            <label>Inactivos</label>
            <input type="number" required="" name="inactivos" value="<?php echo $filasPersonalAgregar['inactivos'] ?>"></input><br/>
            <input type="submit" name="" value="Actualizar"></input><br/>
            <a href="../CRUDpersonal.php">Regresar ></a>
        </form>
    <?php } ?>
</div>
<?php
/** @var type $lote */
$ID = htmlentities($_POST['ID']);
$regiones = htmlentities($_POST['regiones']);
$cantidad = htmlentities($_POST['cantidad']);
$activos = htmlentities($_POST['activos']);
$inactivos = htmlentities($_POST['inactivos']);

if ($ID!=null ||$regiones != null || $cantidad != null || $activos != null || $inacticos != null) {
    $actualizarPersonal = "update vacunas set ID='".$ID."',regiones='" . $regiones . "',cantidad='" . $cantidad . "',activos='" . $activos . "',inactivos='" . $inactivos . "' where regiones ='" . $regionesAux . "'";
    mysqli_query($conexion, $actualizarPersonal);
    ?>
    <script>alert("Datos actualizados correctamente");</script>
    <?php
    header("location:../CRUDpersonal.php");
}

