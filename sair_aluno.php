<?php
	session_start();
	
	unset(
		$_SESSION['alunoId'],
		$_SESSION['alunoNome'],
		$_SESSION['alunoNiveisAcessoId'],
		$_SESSION['alunoEmail'],
		$_SESSION['alunoSenha']
	);
	
	$_SESSION['logindeslogado'] = "Deslogado com sucesso";
	//redirecionar o usuario para a página de login
	header("Location: index.php");
?>