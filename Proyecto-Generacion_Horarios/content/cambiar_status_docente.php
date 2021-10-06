<?php
    if (isset($_GET['id'])){
        include ('database.php');
        $docente = new Database();
        $id = intval($_GET['id']);

        $res = $docente->cambiarestatusdocente($id);
        if ($res){
            header('location: listado_docente.php');
        }
        else{
            echo "error al cambiar estatus del registro...!";
        }
    }


?>