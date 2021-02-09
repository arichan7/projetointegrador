<?php

require_once "usuario/controle.php";

$controleUsuario = new controleUsuario();

$controleUsuario->logout();

require_once 'index.php';

?>
