<?php
    if (isset($_GET['id'])){
        include ('database.php');
        $docente = new Database();
        $id = intval($_GET['id']);

        $res = $docente->borrarcarrera($id);
        if ($res){
            header('location: listado_carreras.php');
        }
        else{
            echo "error al eliminar al carreras...!";
        }
    }


?>