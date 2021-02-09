<?php

require_once "usuario/controle.php";

$controleUsuario = new controleUsuario();

$controleUsuario->login($_POST["login"], $_POST["senha"]);

require_once 'index.php';

?>
