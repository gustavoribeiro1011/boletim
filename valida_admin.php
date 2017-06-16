<?php
    //inclui o arquivo config para utilizar dentro do conexão_login na hora de passar o user/host/password do BD
    require_once('config.php');
	session_start();	
	//Incluindo a conexão com banco de dados
	include_once("db/conexao_login.php");	
	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['AdministradorEmail'])) && (isset($_POST['AdministradorSenha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['AdministradorEmail']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($conn, $_POST['AdministradorSenha']);
		$senha = md5($senha);
			
		$result_usuario = "SELECT * FROM administradores WHERE AdministradorEmail = '$usuario' && AdministradorSenha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);

		if(isset($resultado)){
			$_SESSION['adminId'] = $resultado['AdministradorID'];
			$_SESSION['adminNome'] = $resultado['AdministradorNome'];
			$_SESSION['adminNiveisAcessoId'] = $resultado['niveis_acesso_id'];
			$_SESSION['adminEmail'] = $resultado['AdministradorEmail'];
			if($_SESSION['adminNiveisAcessoId'] == "1"){
				header("Location: boletim");
			}elseif($_SESSION['adminNiveisAcessoId'] == "2"){
				header("Location: notas");
			}else if($_SESSION['adminNiveisAcessoId'] == "3"){
				header("Location: admin");
			}else {
				header("Location: index.php");
			}
		//Não foi encontrado um "professor" na tabela "professor" com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: admin.php");
		}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: admin.php");
	}
?>