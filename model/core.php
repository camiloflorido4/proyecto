<?php

require_once "model/conexion.php";

class Core_modelo{
    public static function ingreso_modelo($tabla,$datos){
        $consulta = Conexion::conectar()->prepare("SELECT UserId FROM $tabla WHERE email = :email AND contrasena = :contrasena");
        $consulta->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $consulta->bindParam(":contrasena", $datos["contrasena"], PDO::PARAM_STR);
        $consulta->execute();
        return $consulta-> fetch();
        $consulta = null;
    }
}

?>
