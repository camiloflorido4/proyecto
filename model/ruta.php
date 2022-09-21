<?php
class Ruta_modelo
{

    static public function raiz_modelo()
    {
        return  "http://localhost/proyecto/";
    }

    static public function ruta_actual_modelo($enlace)
    {
        if (
            $enlace == "inicio" ||
            $enlace == "productos" ||
            $enlace == "perfil-usuario" ||
            $enlace == "salir") {
            $modulo = "view/modulos/core/" . $enlace . ".php";
        }else if ($enlace == "usuario" ||
            $enlace == "cambio-contrasena" ) {
            $modulo = "view/modulos/usuarios/".$enlace.".php";
        }
         else {
            $modulo = "view/modulos/core/login.php";
        }
        return $modulo;
    }
}
