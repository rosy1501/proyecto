<?php include ('../header/header.php'); ?>

<?
    if(isset($_GET['id'])){
        $id = intval($_GET['id']);
    }
?>

<?php
    include ('database.php');
    $informacioncarrera = new Database();
    if (isset($_POST) && !empty($_POST)){

        $tNombreCarrera = $carreras->sanitize($_POST['tNombreCarrera']);
        $tDescripcionCarrera = $carreras->sanitize($_POST['tDescripcionCarrera']);
        $tCampus = $carreras->sanitize($_POST['tCampus']);
        
        $res = $informacioncarrera->actualizarcarrera($tNombreCarrera,$tDescripcionCarrera,$tCampus);
        if ($res){
            $message = "Datos actualizados con exito";
            $class = "alert alert-success";
        }
        else{ 
            $message = "No se pudieron actualizar los datos";
            $class = "alert alert-danger";
        }
        ?>
        <div class="<?php echo $class?>">
            <?php echo $message ?>
        </div>
        <?php
    }
    $datos_carrera = $informacioncarrera->leercarrera($id);
?>
<form method="post">
<div class="container">
            <div class="row">
                <div class="col-md-3">
                    <label>Nombre de Carrera</label>
                    <input type="text" name="tNombreCarrera" id="tNombreCarrera" class='form-control' required >
                </div>
                <div class="col-md-3">
                    <label>Descripcion de Carrera</label>
                    <input type="text" name="tDescripcionCarrera" id="tDescripcionCarrera" class='form-control' required >
                </div>
                    <div class="col-md-2">
                        <label>Campus</label>
                        <select class="form-control" name="tCampus" id="tCampus" required>
                            <option value = 0 disable>selecciona el campus</option>
                            <option value = "Manzanillo"> Manzanillo </option>
                            <option value = "Colima"> Colima </option>
                            <option value = "Naranjo"> Naranjo </option>
                        </select>
                    </div> 
        </div>
        </div>
<div class="col-md-12 pull-right">
    <br /> 
    <center>
        <button type="submit" class="btn btn-succes"><i class="fa fa-floppy-o" aria-hidden="true">&nbsp;Guardar Carrera
    <center>
    </div>
    </div>
</form>
<?php include('../footer/footer.php');?>