<?php

require_once "controller/plantilla.php";
require_once "controller/core.php";
require_once "controller/ruta.php";


require_once "model/core.php";
require_once "model/ruta.php";


$plantilla = new Plantilla_Controller();
$plantilla -> plantilla();