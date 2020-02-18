<?php

class db {

	//host
	private $host = 'localhost';

	//usuario
	private $usuario = "root";

	//senha
	private $senha = '';

	//banco de dados
	private $database = 'twitter_clone';

	public function conecta_mysql(){

		//criar conexão (localização do bd, usuario de acesso, senha, banco de dados )
		$con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

		//ajustar charset de comunicação entre app e bd (conexão, charset)
		mysqli_set_charset($con, 'utf8');

		//verificar se houve erro de conexão

		if(mysqli_connect_errno()){
			echo "Houve um erro ao tentar se conectar com o banco de dados MySQL:" .mysqli_connect_error();
		}

		return $con;

	}

}

?>