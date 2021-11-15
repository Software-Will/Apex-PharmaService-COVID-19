<?php require_once './includes/header.php'; ?>

<br/><br/><br/><br/><br/><br/><br/><br/>
<div><h1 style="text-align: center; font-size: 55px;">Padrón de vacunación</h1></div>

<?php
include ('../../db/conexionbd.php');
$consultaTurno = "SELECT * FROM paciente";
$consultaTurnoExtra = "SELECT fecha1raDosis, fecha2daDosis FROM datosVacunacion";
$resultadoTurno = mysqli_query($conexion, $consultaTurno);
$resultadoTurnoExtra = mysqli_query($conexion, $consultaTurnoExtra);
?>

<div class="container´p-4">

    <div class="row">
        <div class="col-md-12" style="padding: 50px">
                <a href="javascript:window.print()" style="color: #a7afb2; font-weight: bold;"><i class="fa fa-print"></i> IMPRIMIR</a>
            <table class="table table-bordered" style="background-color: white; text-align: center">
                <thead>
                    <tr>
                        <th>DNI</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Edad</th>
                        <th>Numero Celular</th>
                        <th>Email</th>
                        <th>Direccion</th>
                        <th>Region/Provincia</th>
                        <th>Tipo</th>
                        <th>Fecha de 1ra dosis</th>
                        <th>Fecha de 2da dosis</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($filasVisualizacion = mysqli_fetch_assoc($resultadoTurno) AND $filasVisualizacionAux = mysqli_fetch_assoc($resultadoTurnoExtra)) {
                        ?>
                        <tr style="text-align: center;">
                            <td><?= $filasVisualizacion['DNI'] ?></td>
                            <td><?= $filasVisualizacion['nombre'] ?></td>
                            <td><?= $filasVisualizacion['apellido'] ?></td>
                            <td><?= $filasVisualizacion['edad'] ?></td>
                            <td><?= $filasVisualizacion['numeroCelular'] ?></td>
                            <td><?= $filasVisualizacion['email'] ?></td>
                            <td><?= $filasVisualizacion['direccion'] ?></td>
                            <td><?= $filasVisualizacion['regionProvincia'] ?></td>
                            <td><?= $filasVisualizacion['tipo'] ?></td>
                            <td><?= $filasVisualizacionAux['fecha1raDosis'] ?></td>
                            <td><?= $filasVisualizacionAux['fecha2daDosis'] ?></td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>


<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<!--FIN DE CONTENIDO DE LA PAG-->

<?php require_once './includes/footer.php'; ?>