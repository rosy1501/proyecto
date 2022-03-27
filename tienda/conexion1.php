<?php
    
    $con=mysqli_connect('localhost','root','','tiendaonline');
    $categoria=$_POST['categoria'];

    $sql="SELECT *
        from subcategorias
        where fk_eCodcategoria='$categoria'";
    $result=mysqli_query($con,$sql);

    $cadena="<label class='form-label'>Selecciona la subcategoria</label>
            <select class='form-select'  id='subcategorias' name='subcategorias'>";

    while ($ver=mysqli_fetch_row($result)){
        $cadena=$cadena.'<option value='.$ver[0].'selected>'.utf8_encode($ver[2]).'</option>';
    }

    echo $cadena."</select>";
?>