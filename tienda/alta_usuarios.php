<?php

include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $mysqli->real_escape_string(htmlentities($_POST['tNombreCompletoUsuario']));
    $domicilio = $mysqli->real_escape_string(htmlentities($_POST['tDomicilio']));
    $telefono = $mysqli->real_escape_string(htmlentities($_POST['eTelefono']));
    $correo_electronico = $mysqli->real_escape_string(htmlentities($_POST['tCorreoElectronico']));
    $usuario = $mysqli->real_escape_string(htmlentities($_POST['tNombreUsuario']));
    $password = $mysqli->real_escape_string(htmlentities($_POST['tPasswordUsuario']));

    $passcifred = sha1($password);

    $ins = $mysqli->query("INSERT INTO usuarios(usuario,domicilio,telefono,correo,password,nombre,tipo_usuario) VALUES ('$usuario','$domicilio','$telefono','$correo_electronico','$passcifred','$nombre',2)");

    if ($ins) {
        echo 'success';
     
        
    }
  }
?>
<script>
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
<?php
    require "conexion.php";

?>
<?php include ('header.php'); ?>
<div class="d-flex justify-content-center"> 
        <div class="card col-sm-5 p-5">
<form method="POST"class="row g-4">
  <div class="col-md-12">
  <label class="form-label">Nombre</label>
    <input type="text"  name="tNombreCompletoUsuario" id="tNombreCompletoUsuario" class="form-control">
  </div>
  <div class="col-md-4">
    <label class="form-label">Telefono</label>
    <input type="number" name="eTelefono" id="eTelefono" class="form-control">
  </div>
  <div class="col-md-8">
    <label class="form-label">Domicilio</label>
    <input type="text" name="tDomicilio" id="tDomicilio" class="form-control">
  </div>
  <div class="col-md-12">
    <label class="form-label">Correo Electronico</label>
    <input type="text" name="tCorreoElectronico" id="tCorreoElectronico" class="form-control">
  </div>
  
  <div class="col-md-6">
    <label class="form-label">Usuario </label>
    <input type="text" name="tNombreUsuario" id="tNombreUsuario" class="form-control">
  </div>
  <div class="col-md-6">
    <label class="form-label">Contraseña </label>
    <input type="password" name="tPasswordUsuario" id="tPasswordUsuario" class="form-control">
  </div>

  <div class="text-center">
    <div class="col-12">
        <button type="submit" class=" btn-dark "><i class="fa fa-floppy-o" aria-hidden="true">&nbsp;Guardar Producto</i></button>
    </div>
</div>
</form>

<?php include ('footer.php'); ?>