<?php  
	// PROTEÇÃO DE LOGIN
	if(!function_exists("protect")) {
		//SE NÃO EXISTIR A FUNÇÃO PROTECT, CRIAR A FUNÇÃO
		function protect(){

			if(!isset($_SESSION)) // VERIFICA SE EXISTE A SESSÃO
				session_start(); //INICIA SEÇÃO SE NÃO EXISTIR

			if(!isset($_SESSION['usuario']) || !is_numeric($_SESSION['usuario'])) // VERIFICAR SE EXISTE INDICADOR DE LOGIN E SE A VARIAVÉL É NUMÉRICA
				header("Location: login.php");
		}

}

?>