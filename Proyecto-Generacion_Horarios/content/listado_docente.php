<?php include('../header/header.php'); ?>
<center><h4>Listado de Docentes</h4></center>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th> ID DOCENTE</th>
                <th> Grado Academico</th>
                <th> Nombre de Docente </th>
                <th> Correo Electronico</th>
                <th> Telefono </th>
                <th> Fecha de Registro</th>
                <th> Estatus</th>
                <th> Acciones</th>
            </tr>
        </thead>
            <?php
                include ('database.php');
                $docente = new Database();
                $listadodocente = $docente->listadodocente();
            ?>
        <tbody>
        <?php 
            while($row = mysqli_fetch_object($listadodocente)){
                $eCodDocente           =$row->eCodDocente;
                $tGradoAcademico       =$row->tGradoAcademico;
                $tNombreDocente        =$row->tNombreDocente;
                $tApellidoPaterno      =$row->tApellidoPaterno;
                $tApellidoMaterno      =$row->tApellidoMaterno;
                $tCorreoElectronico    =$row->tCorreoElectronico;
                $eTelefono             =$row->eTelefono;
                $fFechaRegistroDocente =$row->fFechaRegistro;
                $bEstatus              =$row->bEstatus; 
            
            
        ?>
            <tr>
                <td><?php echo $eCodDocente; ?></td>
                <td><?php echo $tGradoAcademico; ?></td>
                <td><?php echo $tNombreDocente." ".$tApellidoPaterno." ".$tApellidoMaterno;?></td>
                <td><?php echo $tCorreoElectronico; ?></td>
                <td><?php echo $eTelefono; ?></td>
                <td><?php echo $fFechaRegistroDocente; ?></td>
                <td><?php echo $bEstatus; ?></td>
            <td>
                <a href="editar_docente.php?id=<?php echo $eCodMensaje; ?>" class="edit btn btn-warning" title="Editar" data-toogle="tooltip"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                <a href="borrar_docente.php?id=<?php echo $eCodDocente; ?>" class="delet btn btn-danger" title="Eliminar" data-toogle="tooltip"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                <a href="cambiar_status_docente.php?id=<?php echo $eCodDocente; ?>" class="show btn btn-primary" title="Cambiar status docente" data-toogle="tooltip"><i class="fa fa-eye" aria-hidden="true"></i></a>
                
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>
<?php include('../footer/footer.php'); ?>
