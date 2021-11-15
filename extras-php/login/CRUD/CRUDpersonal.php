<?php include ('../../db/conexionbd.php'); ?>
<?php require_once './includes/header.php'; ?>

<br/><br/><br/><br/><br/><br/><br/>
<div><h2 style="text-align: center; font-size: 55px;">CRUD</h2></div>

<br/>
<h2 style="text-align: center;">Tabla: Personal</h2><br/>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <!-- Formulario para añadir -->
            <div class="card card-body">
                <form action="personal/agregarPersonal.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="ID" class="form-control" placeholder="ID" autofocus required="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="regiones" class="form-control" placeholder="Regiones" required="">
                    </div>
                    <div class="form-group">
                        <input type="number" name="cantidad" class="form-control" placeholder="Cantidad" required="">
                    </div>
                    <div class="form-group">
                        <input type="number" name="activos" class="form-control" placeholder="Activos" required="">
                    </div>
                    <div class="form-group">
                        <input type="number" name="inactivos" class="form-control" placeholder="Inactivos" required="">
                    </div>
                    <input type="submit" name="agregarPersonal" class="btn btn-success btn-block" value="Agregar Datos">
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Regiones</th>
                        <th>Cantidad</th>
                        <th>Activos</th>
                        <th>Inactivos</th>
                        <th><strong>Acciones</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $consultaPersonal = "SELECT * FROM personal";
                    $resultadoPersonal = mysqli_query($conexion, $consultaPersonal);

                    while ($filasPersonal = mysqli_fetch_assoc($resultadoPersonal)) {
                        ?>
                        <tr>
                            <td><?= $filasPersonal['ID'] ?></td>
                            <td><?= $filasPersonal['regiones'] ?></td>
                            <td><?= $filasPersonal['cantidad'] ?></td>
                            <td><?= $filasPersonal['activos'] ?></td>
                            <td><?= $filasPersonal['inactivos'] ?></td>
                            <td>
                                <a href="personal/editarPersonal.php?ID=<?php echo $filasPersonal['ID'] ?>" class="btn btn-secondary">
                                    <i class="fas fa-marker"></i>
                                </a>
                                <a href="personal/eliminarPersonal.php?ID=<?php echo $filasPersonal['ID'] ?>" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
<?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<br/><br/><br/><br/><br/><br/><br/><br/>
<!-- FIN DE CONTENIDO DE LA PAG -->

<?php require_once './includes/footer.php'; ?>