<?php
	session_start();
	
	unset(
		$_SESSION['adminId'],
		$_SESSION['adminNome'],
		$_SESSION['adminNiveisAcessoId'],
		$_SESSION['adminEmail'],
		$_SESSION['adminSenha']
	);
	
	$_SESSION['logindeslogado'] = "Deslogado com sucesso";
	//redirecionar o usuario para a página de login
	header("Location: index.php");
?>