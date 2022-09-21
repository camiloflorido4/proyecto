<?php

require_once "model/conexion.php";

class Core_modelo{
   public static function ingreso_modelo($tabla, $item, $valor){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY UserId DESC");
            $stmt->bindParam(":" .$item,$valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY UserId DESC");
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }

    /* public static function ingreso_modelo($tabla,$datos){
        $consulta = Conexion::conectar()->prepare("SELECT UserId FROM $tabla WHERE email = :email AND contrasena = :contrasena");
        $consulta->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $consulta->bindParam(":contrasena", $datos["contrasena"], PDO::PARAM_STR);
        $consulta->execute();
        return $consulta-> fetch();
        $consulta = null;
    } */
}

?>
