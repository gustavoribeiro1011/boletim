<?php
	session_start();
	
	unset(
		$_SESSION['professorId'],
		$_SESSION['professorNome'],
		$_SESSION['professorNiveisAcessoId'],
		$_SESSION['professorEmail'],
		$_SESSION['professorSenha']
	);
	
	$_SESSION['logindeslogado'] = "Deslogado com sucesso";
	//redirecionar o usuario para a página de login
	header("Location: index.php");
?>