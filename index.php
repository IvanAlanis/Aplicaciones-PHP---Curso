<?php

#EL INDEX: En el mostraremos la salida de las vistas al usuario y tambien a traves de el enviaremos
#las distintas acciones que el usuario envie al controlador.

require_once "controllers/controller.php";

$mvc = new mvcController();
$mvc -> plantilla();


?>