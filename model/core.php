<?php

require "conexion.php";

class Core_modelo{
   public static function ingreso_modelo($tabla, $item, $valor){
        if($item != null){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :email AND contrasena = :contrasena");
            $stmt-> bindParam(":email",$_GET["email"], PDO::PARAM_STR);
            $stmt-> bindParam(":contrasena",$_GET["contrasena"], PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
            $stmt = null;
        }else{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY userId DESC");
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt = null;
        }
    }
}

?>
