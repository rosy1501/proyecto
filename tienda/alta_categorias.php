<?php

include('conexion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tNombrecategoria = $mysqli->real_escape_string(htmlentities($_POST['tNombrecategoria']));
    $tDescripcioncategoria = $mysqli->real_escape_string(htmlentities($_POST['tDescripcioncategoria']));;
    $ins = $mysqli->query("INSERT INTO alta_categorias(tNombrecategoria,tDescripcioncategoria) VALUES ('$tNombrecategoria','$tDescripcioncategoria')");

    if ($ins) {
        echo 'success';
    }
    else
    {
      echo "Falla en la Inserción";
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
    <label class="form-label">Nombre de Categoria</label>
    <input type="text" name="tNombrecategoria" id="tNombrecategoria" class="form-control">
  </div>
  
    <div class="col-md-12">
        <label >Descripcion de Categoria</label>
        <textarea name="tDescripcioncategoria" id="tDescripcioncategoria" class="form-control" placeholder="Descripcion..."></textarea>
    </div>

  <div class="text-center">
    <div class="col-12">
        <button type="submit" class="btn-dark "><i class="fa fa-floppy-o" aria-hidden="true">&nbsp;Guardar Producto</i></button>
    </div>
</div>
</form>

<?php include('footer.php') ?>