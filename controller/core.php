<?php

class Core_Controlador{

/* static public function mostrar_perfil_controlador(){
        if(isset($_SESSION["id_cliente"])){
            $respuesta = Core_Modelo::perfil_cliente_modelo("cliente", $_SESSION["id_cliente"]);
            $enlace_editar_perfil = "detalle-perfil-cliente";
        }else {
            $respuesta = Core_Modelo::perfil_agente_modelo("usuario", $_SESSION["id"]);
            $enlace_editar_perfil = "detalle-perfil-usuario";
        }
        echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="'.$GLOBALS['raiz'].'vista/img/avatar/'.$respuesta["avatar"].'" class="user-image" alt="User Image">
            <span class="hidden-xs">'.$respuesta["nombres"].'</span>
        </a>
        <ul class="dropdown-menu">
            <li class="user-header">
                <img src="'.$GLOBALS['raiz'].'vista/img/avatar/'.$respuesta["avatar"].'" class="img-circle" alt="User Image">
                <p>
                    '.$respuesta["nombres"].'
                    <small>'.$respuesta["rol"].'</small>

            </li>
            <li class="user-footer">
                <div class="pull-left">
                    <a href="'.$enlace_editar_perfil.'" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                    <a href="salir" class="btn btn-default btn-flat">Salir</a>
                </div>
            </li>
        </ul>';
    } */
}
