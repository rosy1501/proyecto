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
    <label class="form-label">Nombre completo</label>
    <input type="text"  name="tNombreProducto" id="tNombreProducto" class="form-control">
  </div>
  <div class="col-md-6">
    <label class="form-label">Telefono</label>
    <input type="number" name="tCantidadProducto" id="tNombreProducto" class="form-control">
  </div>
  <div class="col-6">
    <label class="form-label">Codigo Postal</label>
    <input type="number" class="form-control" id="tPrecioVenta" name="tPrecioVenta" placeholder="">
  </div>
  <br>
  <div class="col-12">
    <label class="form-label">Domicilio</label>
    <textarea name="tDescripcionProducto" id="tDescripcionProducto" class="form-control" placeholder="Descripcion..."></textarea>
  </div>
  <div class="text-center">
    <div class="col-12">
        <button type="submit" class="btn-dark "><i class="fa fa-floppy-o" aria-hidden="true">&nbsp;Guardar Producto</i></button>
    </div>
</div>
</form>

<?php include('footer.php') ?>
