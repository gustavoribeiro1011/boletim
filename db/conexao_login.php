<?php	
	$servidor = DB_HOST;
	$usuario = DB_USER;
	$senha = DB_PASSWORD;
	$dbname = DB_NAME;
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>