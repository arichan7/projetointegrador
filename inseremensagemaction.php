<?php

require_once "mensagem/controle.php";

$controleMensagem = new controleMensagem();

$controleMensagem->insereMensagem($_POST['texto']);

require_once 'index.php';

?>
