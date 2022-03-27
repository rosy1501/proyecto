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
  <div class="col-md-7">
    <label class="form-label">Nombre del Producto</label>
    <input type="text"  name="tNombreProducto" id="tNombreProducto" class="form-control">
  </div>
  <div class="col-md-5">
    <label class="form-label">Cantidad de Producto</label>
    <input type="number" name="tCantidadProducto" id="tNombreProducto" class="form-control">
  </div>

  <br>
  <div class="col-md-6">
    <label class="form-label">Categoria del Producto</label>
    <select class="form-select" id="tCategoriaProducto" name="tCategoriaProducto">
      <option selected>Categorias...</option>
    </select>

  </div>
  <div class="col-md-6">
    <label class="form-label">Subcategorias</label>
    <select id="tSubcategoria" name="tSubcategoria"class="form-select">
      <option selected>Subcategorias...</option>
    </select>

  </div>
  
  <br>
  <div class="col-6">
    <label class="form-label">Precio de Compra</label>
    <input type="number" class="form-control" id="tPrecioCompra" name="tPrecioCompra" placeholder="$00.00">
  </div>
  
  <div class="col-6">
    <label class="form-label">Precio de venta al Publico</label>
    <input type="number" class="form-control" id="tPrecioVenta" name="tPrecioVenta" placeholder="$00.00">
  </div>
  <br>
        <div class="col-md-12">
            <label >Imagen del producto</label>
            <input type="file" name="tDescripcionProducto" id="tDescripcionProducto" class="form-control">
        </div>
  <br>
    <div class="col-md-12">
        <label >Descripcion del producto</label>
        <textarea name="tDescripcionProducto" id="tDescripcionProducto" class="form-control" placeholder="Descripcion..."></textarea>
    </div>

  <div class="text-center">
    <div class="col-12">
        <button type="submit" class="btn-dark "><i class="fa fa-floppy-o" aria-hidden="true">&nbsp;Guardar Producto</i></button>
    </div>
</div>
</form>

<?php include ('footer.php'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#categorias').val(1);
		recargarLista();

		$('#categorias').change(function(){
			recargarLista();
		});
	})
</script>
<script type="text/javascript">
	function recargarLista(){
		$.ajax({
			type:"POST",
			url:"conexion1.php",
			data:"categoria=" + $('#categorias').val(),
			success:function(r){
				$('#select-subcategorias').html(r);
			}
		});
        
	}
</script>