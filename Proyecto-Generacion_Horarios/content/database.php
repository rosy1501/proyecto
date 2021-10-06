<?php
class Database{
    private $con;
    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "bd_generacionhorarios";


    function __construct(){
        $this->connect_db();
    }

    public function connect_db(){
        $this->con=mysqli_connect($this->dbhost,$this->dbuser,$this->dbpass,$this->dbname);
            if (mysqli_connect_error()){
                die("conexion a la base de datos fallo: ".mysqli_connect_error().mysqli_connect_errno());    
            }
}
    
    public function sanitize($var){
        $return = mysqli_real_escape_string($this->con,$var);
        return $return;
    }

    public function altadocente($tGradoAcademico,$tNombreDocente,$tApellidoPaterno,$tApellidoMaterno,$tCorreoElectronico,$eTelefono){
            $sql = "INSERT INTO `cat_docentes` (tGradoAcademico,tNombreDocente,tApellidoPaterno,tApellidoMaterno,tCorreoElectronico,eTelefono) VALUES ('$tGradoAcademico','$tNombreDocente','$tApellidoPaterno','$tApellidoMaterno','$tCorreoElectronico','$eTelefono') ";
        $res = mysqli_query($this->con,$sql);
        if ($res){
            return true;
        }
            else{
                return false;
            }
    }
    public function listadodocente(){
        $sql = "SELECT * FROM cat_docentes";
        $res = mysqli_query($this->con,$sql);
        return $res;
    }
    public function borrardocente($eCodDocente){
        $sql ="DELETE from cat_docentes where eCodDocente = $eCodDocente";
        $res =mysqli_query($this->con,$sql);
        if ($res){
            return true;
        }
        else{
            return false; 
        }
    }
    public function cambiarestatusdocente($eCodDocente){
        $sql = "UPDATE `cat_docentes` SET `bEstatus` = IF (bEstatus ='1','0','1') where eCodDocente ='$eCodDocente'";
        $res = mysqli_query($this->con,$sql);
        if ($res){
            return true;

        }
        else{
            return false;
        }
    }
    public function editardocente($tGradoAcademico,$tNombreDocente,$ApellidoPaterno,$tApellidoMaterno,$tCorreoElectronico,$eTelefono){
        $sql ="UPDATE cat_docentes SET tGradoAcademico = '$tGradoAcademico', tNombreDocente = '$tNombreDocente', tApellidoPaterno = '$tApellidoPaterno', tApellidoMaterno = '$tApellidomaterno', tCorreoElectronico = '$tCorreoElectronico', eTelefono = '$eTelefono' where eCodDocente = $eCodDocente";
        $res = mysqli_query($this->con, $sql);
        if ($res){
            return true;

        }
        else{
            return false;
        }

    }
    public function altacarreras($tNombreCarrera,$tDescripcionCarrera,$tCampus){
        $sql = "INSERT INTO `cat_carreras` (tNombreCarrera,tDescripcionCarrera,tCampus) VALUES ('$tNombreCarrera','$tDescripcionCarrera','$tCampus') ";
    $res = mysqli_query($this->con,$sql);
        if ($res){
            return true;
        }
        else{
            return false;
        }
    }
    public function leercarrera($eCodCarrera){
        $sql = "SELECT * FROM cat_carreras where eCodCarrera='$eCodCarrera'";
        $res = mysqli_query($this->con,$sql);
        if ($res){
            return true;
        }
        else{
            return false;
        }
    }
    public function listadocarreras(){
        $sql = "SELECT * FROM cat_carreras";
        $res = mysqli_query($this->con,$sql);
        return $res;
    }
    public function borrarcarrera($eCodCarrera){
        $sql ="DELETE from cat_carreras where eCodCarrera = $eCodCarrera";
        $res =mysqli_query($this->con,$sql);
        if ($res){
            return true;
        }
        else{
            return false; 
        }
    }
    public function editarcarrera($tNombreCarrera,$tDescripcionCarrera,$tCampus){
        $sql ="UPDATE cat_carreras SET tNombreCarrera = '$tNombreCarrera', tDescripcionCarrera = '$tDescripcionCarrera', tCampus = '$tCampus' where eCodCarrera = $eCodCarrera";
        $res = mysqli_query($this->con, $sql);
        if ($res){
            return true;

        }
        else{
            return false;
        }

    }
    
}
?>