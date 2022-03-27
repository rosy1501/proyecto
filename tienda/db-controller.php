<?php
class DBController{
        private $con;
        private $hostname = "localhost";
        private $username = "root";
        private $password = "";
        private $db = "tiendaonline";

        function __construct(){
            $this->connect_db();
        }

        public function connect_db(){
            $this->conn = mysqli_connect($this->hostname,$this->username,$this->password,$this->db);

            if (mysqli_connect_error()){
                die("conexion a la base de datos fallo".mysqli_connect_errno().mysqli_connect_errno());
            }
        }
        public function altausuario($usuario,$password,$nombre,$tipo_usuario){
            $sql = "INSERT INTO `usuarios` (usuario,password,nombre,tipo_usuario) VALUES ('$usuario','$password','$nombre','$tipo_usuario') ";
        $res = mysqli_query($this->con,$sql);
        if ($res){
            return true;
        }
            else{
                return false;
            }
    }
    }

?>