<?php
    require "conexion.php";

?>
<?php include ('header.php'); ?>
    <div class="d-flex justify-content-center"> 
        <div class="card col-sm-5 p-5">
<form method="POST"class="row g-4">
  <div class="col-md-7">
    <label class="form-label">Nombre del proveedor</label>
    <input type="text"  name="tNombreProducto" id="tNombreProducto" class="form-control">
  </div>
  <div class="col-md-5">
    <label class="form-label">Razon social</label>
    <input type="number" name="tCantidadProducto" id="tNombreProducto" class="form-control">
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

<?php include('footer.php') ?>