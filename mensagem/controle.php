<?php

	require_once "mensagem/modelo.php";
	require_once "usuario/controle.php";

	function carregaMensagens(){
		$mensagens = array();
		
		&mensagem = criaMensagem("Primeiro post", "teddy", "2020-12-25 12:34:56");
		array_push($mensagens, $mensagem);
		
		&mensagem = criaMensagem("Segundo post", "teddy", "2020-12-26 12:34:56");
		array_push($mensagens, $mensagem);
		
		return $mensagens;
	}

	class ControleMensagem(){
		private $mensagens;
		
		function __construct(){
			$this->mensagens = carregaMensagens();
		}
		
		function getMensagens(){
			return array_reverse ($this->mensagens);
		}
		
		function insereMensagem($texto) {
			$controleUsuario = new ControleUsuario();
			$quem = $controleUsuario->getLogin();
			$quando = date("Y-m-d H:i:s");
			$mensagem = criaMensagem($texto, $quem, $quando);
			array_push($this->mensagens, $mensagem);
		}
	}
	
?>
