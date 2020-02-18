<?php

	require_once('db.class.php');

	$usuario = $_POST['usuario'];
	
	$email = $_POST['email'];
	
	$senha = md5($_POST['senha']);

	$objDB = new db();
	$link = $objDB->conecta_mysql();

	$sql = "insert into usuarios(usuario, email, senha) values('$usuario', '$email', '$senha')";

	//executar query

	if(mysqli_query($link, $sql)){
		echo 'Registro efetuado com succeso, seja bem-vindo \ (•◡•) / !!';
	}else {
		echo "Erro ao registrar o usuário, tente novamente mais tarde ಠ~ಠ";
	}

?>