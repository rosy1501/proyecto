<?php

include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $tNombre = $mysqli->real_escape_string(htmlentities($_POST['tNombre']));
  $tApellido = $mysqli->real_escape_string(htmlentities($_POST['tApellido']));
  $eTelefono = $mysqli->real_escape_string(htmlentities($_POST['eTelefono']));
  $tDomicilio = $mysqli->real_escape_string(htmlentities($_POST['tDomicilio']));
  $tCorreoElectronico = $mysqli->real_escape_string(htmlentities($_POST['tCorreoElectronico']));
  $eCodigopostal = $mysqli->real_escape_string(htmlentities($_POST['eCodigopostal']));;
  $usuario = $mysqli->real_escape_string(htmlentities($_POST['usuario']));
  $password = $mysqli->real_escape_string(htmlentities($_POST['password']));

    

    $passcifred = sha1($password);

    $ins = $mysqli->query("INSERT INTO usuario(id_usuario,password,tNombre,usuario,tipo_usuario,tApellido,tDomicilio,tCorreoElectronico,eTelefono,eCodigopostal) VALUES (NULL,'$password','$tNombre','$usuario',2,'$tApellido','$tDomicilio','$tCorreoElectronico','$eTelefono','$eCodigopostal')");

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
  <div class="col-md-6">
  <label class="form-label">Nombre</label>
    <input type="text"  name="tNombre" id="tNombre" class="form-control">
  </div>
  <div class="col-md-6">
  <label class="form-label">Apellido</label>
    <input type="text"  name="tApellido" id="tApellido" class="form-control">
  </div>
  <div class="col-md-4">
    <label class="form-label">Telefono</label>
    <input type="number" name="eTelefono" id="eTelefono" class="form-control">
  </div>
  <div class="col-md-8">
    <label class="form-label">Domicilio</label>
    <input type="text" name="tDomicilio" id="tDomicilio" class="form-control">
  </div>
  <div class="col-md-7">
    <label class="form-label">Correo Electronico</label>
    <input type="text" name="tCorreoElectronico" id="tCorreoElectronico" class="form-control">
  </div>
  <div class="col-md-5">
    <label class="form-label">Codigo postal</label>
    <input type="text" name="eCodigopostal" id="eCodigopostal" class="form-control">
  </div>
  
  <div class="col-md-6">
    <label class="form-label">Usuario </label>
    <input type="text" name="usuario" id="usuario" class="form-control">
  </div>
  <div class="col-md-6">
    <label class="form-label">Contraseña </label>
    <input type="password" name="password" id="password" class="form-control">
  </div>

  <div class="text-center">
    <div class="col-12">
        <button type="submit" class=" btn-dark "><i class="fa fa-floppy-o" aria-hidden="true">&nbsp;Crear cuenta</i></button>
    </div>
</div>
</form>

<?php include ('footer.php'); ?>