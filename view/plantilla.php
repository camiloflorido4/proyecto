<?php
    $GLOBALS["raiz"] = Ruta_Controlador::raiz_controlador();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor-E</title>
    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- Icons from Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" />
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!-- Google  Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu" rel="stylesheet" />
    <!-- CSS properties-->
    <link rel="stylesheet" type="text/css" href="view/css/style-login.css" th:href="@{/css/index.css}" />
    <link rel="stylesheet" type="text/css" href="view/css/style.css" />


</head>

<body>
    <?php
    session_start();
    if ((isset($_SESSION["userId"]) || isset($_SESSION["id_user"])) && $_SESSION["validar_sesion"] === "ok") {

        echo '<div>';
        //encabezado
        include "view/modulos/core/header.php";
        //inicio
        include "view/modulos/core/inicio.php";
            $modulos = new Ruta_Controlador();
            $modulos -> ruta_actual_controlador();
        //footer
        include "view/modulos/core/footer.php";

        echo '</div>';

    } else if ((isset($_SESSION["userId"]) || isset($_SESSION["id_user"])) && $_SESSION["validar_sesion"] === "pendiente"){
        include "view/modulos/core/login.php";
    } else {
        $modulos = new Ruta_Controlador();
        $modulos -> ruta_actual_controlador();
    }


    ?>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../../assets/js/JQuery/jquery-3.6.0.min.js"></script>
    <script src="../../assets/js/Popper/popper.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>