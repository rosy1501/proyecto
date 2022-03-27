<?php

include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tNombreProducto = $mysqli->real_escape_string(htmlentities($_POST['tNombreProducto']));
    $tCantidadproducto = $mysqli->real_escape_string(htmlentities($_POST['tCantidadproducto']));
    $tCategoriaproducto = $mysqli->real_escape_string(htmlentities($_POST['tCategoriaproducto']));
    $tSubcategorias = $mysqli->real_escape_string(htmlentities($_POST['tSubcategorias']));
    $tPreciocompra = $mysqli->real_escape_string(htmlentities($_POST['tPreciocompra']));
    $tPrecioventa = $mysqli->real_escape_string(htmlentities($_POST['tPrecioventa']));
    $tDescripcionproducto = $mysqli->real_escape_string(htmlentities($_POST['tDescripcionproducto']));
    $ins = $mysqli->query("INSERT INTO alta_productos(tNombreProducto,tCantidadproducto,tCategoriaproducto,tSubcategorias,tPreciocompra,tPrecioventa,tDescripcionproducto) VALUES ($tNombreProducto,$tCantidadproducto,$tCategoriaproducto,$tSubcategorias,$tPreciocompra,$tPrecioventa,$tDescripcionproducto)");

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
    <label class="form-label">Nombre de Categoria</label>
    <input type="text"  name="tNombreProducto" id="tNombreProducto" class="form-control">
  </div>
  <div class="col-md-6">
    <label class="form-label">Subcategorias</label>
    <select id="tSubcategoria" name="tSubcategoria"class="form-select">
      <option selected>Subcategorias...</option>
    </select>

  </div>
    <div class="col-md-12">
        <label >Descripcion de Categoria</label>
        <textarea name="tDescripcionProducto" id="tDescripcionProducto" class="form-control" placeholder="Descripcion..."></textarea>
    </div>

  <div class="text-center">
    <div class="col-12">
        <button type="submit" class="btn-dark "><i class="fa fa-floppy-o" aria-hidden="true">&nbsp;Guardar Producto</i></button>
    </div>
</div>
</form>

<?php include('footer.php') ?>