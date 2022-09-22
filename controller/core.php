<?php

class Core_Controlador
{
    static public function ingreso_controlador()
    {
        if (isset($_POST["ing_email"]) && isset($_POST["ing_contrasena"])) {
        $datos = array("email" => htmlspecialchars(strtolower($_POST["ing_email"])), "contrasena"); 
        if(isset($_POST["ingreso"]) && $_POST["ingreso"] == "email")     
            $respuesta = Core_modelo::ingreso_modelo("email", $datos);
            /* if ($respuesta[$datos] == $_POST["ing_email"] && $respuesta["contrasena"]) {
                echo "email"; */
                print $respuesta;
                if ($respuesta != false && $_POST["ing_email"]) {                                      
                    $_SESSION["email"]  = $respuesta["email"];
                    $_SESSION["contrasena"]  = $respuesta["contresena"];
                    $_SESSION["validar_sesion"] = "ok";
                    setcookie ("email", $respuesta["email"]);
                    setcookie ("raiz", $GLOBALS["raiz"]);
                    echo '<script type="text/javascript">
                    var pagina = "inicio";
                    var segundos = 0;
                    function redireccion() {
                        document.location.href=pagina;
                    }
                    setTimeout("redireccion()",segundos);
                    </script>';
                } else {
                    echo '<div class="alert alert-danger text-center">Error al ingresar, verifique sus datos.</div>';
                }
            }
        }
    }

