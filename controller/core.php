<?php

class Core_Controlador
{
    static public function ingreso_controlador()
    {
        if (isset($_POST["ingreso_correo"]) && isset($_POST["ingreso_contrasena"])) {
            //$encriptar = crypt(htmlspecialchars($_POST["ingreso_contrasena"]), '$2a$07$GSVs6pSNqiKLkHE6dOtZPejPtcf/bRSl2n2WvmNE2yIZAEW7t9J.a');
            $item = array("email" => htmlspecialchars(strtolower($_POST["ingreso_correo"])), "contrasena" /* => $encriptar */ );

            $tabla = "users";
            $item = "email";
            $valor = $_POST["ingreso_correo"];

            $respuesta = Core_modelo::ingreso_modelo($tabla, $item, $valor);

            if ($respuesta["email"] == $_POST["ingreso_correo"] && $respuesta["contrasena"]/*  == $encriptar  */) {
                echo "ingreso_correo";
                if (true) {
                    $_SESSION["validar_sesion"] = "ok";                    
                    $_SESSION["id_user"]  = $respuesta["userId"];
                    $_SESSION["nombre"]  = $respuesta["nombre"];
                    $_SESSION["seg_nombre"]  = $respuesta["seg_nombre"];
                    $_SESSION["apellido"]  = $respuesta["apellido"];
                    $_SESSION["seg_apellido"]  = $respuesta["seg_apellido"];
                    $_SESSION["email"]  = $respuesta["email"];
                    $_SESSION["contrasena"]  = $respuesta["contresena"];

                    echo '<script>
                        window.location = "inicio";
                    </script>';
                } else {
                    echo '<div class="alert alert-danger text-center">Error al ingresar, verifique sus datos.</div>';
                }
            }
        }
    }
}
