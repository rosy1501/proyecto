<?php include('../header/header.php'); ?>
<center><h4>Listado de Carreras</h4></center>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th> ID Carrera</th>
                <th> Nombre Carrera</th>
                <th> Descripcion de Carrera</th>
                <th> Campus</th>
                <th> Fecha de Registro</th>
            </tr>
        </thead>
            <?php
                include ('database.php');
                $carreras = new Database();
                $listadocarreras = $carreras->listadocarreras();
            ?>
        <tbody>
        <?php 
            while($row = mysqli_fetch_object($listadocarreras)){
                $eCodCarrera           =$row->eCodCarrera;
                $tNombreCarrera        =$row->tNombreCarrera;
                $tDescripcionCarrera   =$row->tDescripcionCarrera;
                $tCampus               =$row->tCampus;
                $fFechaRegistro        =$row->fFechaRegistro;
            
            
        ?>
            <tr>
                <td><?php echo $eCodCarrera; ?></td>
                <td><?php echo $tNombreCarrera; ?></td>
                <td><?php echo $tDescripcionCarrera;?></td>
                <td><?php echo $tCampus;?></td>
                <td><?php echo $fFechaRegistro; ?></td>
        <td>
            <a href="editar_carreras.php?id=<?php echo $eCodMensaje; ?>" class="edit btn btn-warning" title="Editar" data-toogle="tooltip"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            <a href="borrar_carreras.php?id=<?php echo $eCodCarrera; ?>" class="delet btn btn-danger" title="Eliminar" data-toogle="tooltip"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
           
        </tr>
        <?php
        }
        ?>
    </table>
</div>
<?php include('../footer/footer.php'); ?>