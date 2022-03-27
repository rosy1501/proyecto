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
    $ins = $mysqli->query("INSERT INTO usuarios(usuario,domicilio,telefono,correo,password,nombre,tipo_usuario) VALUES ('$usuario','$domicilio','$telefono','$correo_electronico','$passcifred','$nombre',3)");

    if ($ins) {
        echo 'success';

    } else  {
        echo 'fail';
    }
} else {
    echo 'fail';
} 
