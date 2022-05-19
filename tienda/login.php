<?php
    require "conexion.php";
    session_start();
    if($_POST){
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        $sql = "SELECT id_usuario, password, tNombre, tipo_usuario FROM usuario WHERE usuario = '$usuario'";

        $resultado = $mysqli->query($sql);
        $num = $resultado->num_rows;
        if ($num>0){
            $row = $resultado->fetch_assoc();
            $password_bd = $row['password'];
            //$pass_c = sha1($password);
            if($password_bd == $password_bd){
                $_SESSION['id_usuario'] = $row['id_usuario'];
                $_SESSION['tNombre'] = $row['tNombre'];
                $_SESSION['tipo_usuario'] = $row['tipo_usuario'];
                $_SESSION['usuario'] = $row['usuario'];
                header("Location: principal.php");

            }
            else{
                echo "La contraseña no coincide";
            }
            }else{
                echo "Usuario no existe";
            }
        

    }


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Login</title>
        <link href="styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="text-center">
    <body class="bg-light">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <img class="mb-4" src="imagen5.png" alt width="250" height="250">
                                    <div class="card-body">
                                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <div class="form-group">
                                            <input class="form-control" id="inputEmailAddress" name="usuario" type="text" placeholder="Usuario">
                                        </div>  
                                        <div class="form-group">
                                            <input class="form-control" id="inputPassword" name="password" type="password" placeholder="contraseña">
                                        </div> 
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-dark">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>