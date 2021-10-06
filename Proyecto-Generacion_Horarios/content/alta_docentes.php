<?php include ('../header/header.php'); ?>
<center><h4> REGISTRO DE DOCENTES </h4></center>
<?php include ("database.php");
$docente = new Database();
if (isset($_POST) && !empty($_POST)){
    $tGradoAcademico = $docente->sanitize($_POST['tGradoAcademico']);
    $tNombreDocente = $docente->sanitize($_POST['tNombreDocente']);
    $tApellidoPaterno = $docente->sanitize($_POST['tApellidoPaterno']);
    $tApellidoMaterno = $docente->sanitize($_POST['tApellidoMaterno']);
    $tCorreoElectronico = $docente->sanitize($_POST['tCorreoElectronico']);
    $eTelefono = $docente->sanitize($_POST['eTelefono']);

    $res = $docente->altadocente($tGradoAcademico,$tNombreDocente,$tApellidoPaterno,$tApellidoMaterno,$tCorreoElectronico,$eTelefono);
    if ($res){
        $message = "Datos insertados con exito";
        $class = "alert alert-success";
    }
    else{ 
        $message = "No se pudieron insertar los datos";
        $class = "alert alert-danger";  
    }
    ?>
    <div class="<?php echo $class?>">
        <?php echo $message ?>
    </div>
    <?php
}
?>

<form method="post">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <label>Grado Academico</label>
                <select class="form-control" name="tGradoAcademico" id="tGradoAcademico" required>
                    <option value = 0 disabled>Selecciona el grado academico</option>
                    <option value = "Dr."> Dr. </option>
                    <option value = "Mtro."> Mtro. </option>
                    <option value = "Lic."> Lic. </option>
                    <option value = "Ing".> Ing. </option>
                </select>
            </div>
            <div class="col-md-4">
                <label>Nombre(s)</label>
                <input type="text" name="tNombreDocente" id="tNombreDocente" class='form-control' required>
            </div>
            <div class="col-md-3">
                <label>Apellido Paterno</label>
                <input type="text" name="tApellidoPaterno" id="tApellidoPaterno" class='form-control' required>
            </div>
            <div class="col-md-3">
                <label>Apellido Materno</label>
                <input type="text" name="tApellidoMaterno" id="tApellidoPaterno" class='form-control' required>
            </div>

        </div>
        <div class="row">
            <div class="col-md-5">
                <label>Correo Electronico</label>
                <input type="email" class="form-control" id="tCorreoElectronico" name="tCorreoElectronico" required>
            </div>
            <div class="col-md-3">
                <label>Telefono</label>
                <input type="number" class="form-control" id="eTelefono" name="eTelefono" required>
            </div>
    </div>
    <div class="col-md-12 pull-right">
        <br />
        <center>
            <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true">&nbsp;Guardar Docente</i></button>
        </center>
    </div>             
</form>
<?php include('../footer/footer.php'); ?>
