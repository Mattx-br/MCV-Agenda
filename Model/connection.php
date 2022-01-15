<?php
	/*
		Conexao com o banco
	*/
	
	$con = new mysqli("localhost", "root", "", "agenda");
					//servidor, login, senha(se for xampp usar outra), banco
	
	if(mysqli_connect_errno()){
		/*A função trigger_error() cria uma mensagem de erro no nível do usuário.*/
		trigger_error(mysqli_connect_error());
	}
?>