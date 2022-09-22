<?php

require "conexion.php";

class Core_modelo{
   public static function ingreso_modelo($datos){
            $stmt = Conexion::conectar()->prepare("SELECT * FROM users WHERE email = :email AND contrasena = :contrasena");
            $stmt-> bindParam(":email" ,$datos["email"], PDO::PARAM_STR);
            $stmt-> bindParam(":contrasena" ,$datos["contrasena"], PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
            $stmt = null;
        }
    }


?>
