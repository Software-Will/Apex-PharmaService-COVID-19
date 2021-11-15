<?php include ('../../db/conexionbd.php');?>
<?php require_once './includes/header.php'; ?>

<br/><br/><br/><br/><br/><br/><br/>
<div><h2 style="text-align: center; font-size: 55px;">CRUD</h2></div>

<br/>
<h2 style="text-align: center;">Tabla: Vacunas</h2><br/>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">

            <!-- Formulario para añadir -->
            <div class="card card-body">
                <form action="vacunas/agregarVacunas.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="lote" class="form-control" placeholder="Lote" autofocus required="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="marca" class="form-control" placeholder="Marca" required="">
                    </div>
                    <div class="form-group">
                        <input type="number" name="cantidad" class="form-control" placeholder="Cantidad" required="">
                    </div>
                    <div class="form-group">
                        <input type="date" name="fechaEntrada" class="form-control" placeholder="Fecha de Entrada" required="">
                    </div>
                    <div class="form-group">
                        <input type="date" name="fechaTermino" class="form-control" placeholder="Fecha de Termino" required="">
                    </div>
                    <input type="submit" name="agregarVacunas" class="btn btn-success btn-block" value="Agregar Datos">
                </form>
            </div>
        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Lote</th>
                        <th>Marca</th>
                        <th>Cantidad</th>
                        <th>Fecha de Entrada</th>
                        <th>Fecha de Termino</th>
                        <th><strong>Acciones</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $consultaVacunas = "SELECT * FROM vacunas";
                    $resultadoVacunas = mysqli_query($conexion, $consultaVacunas);
                    
                    while ($filasVacunas = mysqli_fetch_assoc($resultadoVacunas)) {?>
                    <tr>
                    <td><?= $filasVacunas['lote'] ?></td>
                    <td><?= $filasVacunas['marca'] ?></td>
                    <td><?= $filasVacunas['cantidad'] ?></td>
                    <td><?= $filasVacunas['fechaEntrada'] ?></td>
                    <td><?= $filasVacunas['fechaTermino'] ?></td>
                    <td>
                        <a href="vacunas/editarVacunas.php?lote=<?php echo $filasVacunas['lote'] ?>" class="btn btn-secondary">
                            <i class="fas fa-marker"></i>
                        </a>
                        <a href="vacunas/eliminarVacunas.php?lote=<?php echo $filasVacunas['lote'] ?>" class="btn btn-danger">
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


    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <!-- FIN DE CONTENIDO DE LA PAG -->

    <?php require_once './includes/footer.php'; ?>