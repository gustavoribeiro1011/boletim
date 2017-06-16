<?php
    //inclui o arquivo config para utilizar dentro do conexão_login na hora de passar o user/host/password do BD
    require_once('config.php');
	session_start();	
	//Incluindo a conexão com banco de dados
	include_once("db/conexao_login.php");	
	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['AlunoEmail'])) && (isset($_POST['AlunoSenha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['AlunoEmail']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($conn, $_POST['AlunoSenha']);
		$senha = md5($senha);
			
		//Buscar na tabela "alunos" o aluno que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM alunos WHERE AlunoEmail = '$usuario' && AlunoSenha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		//Encontrado um "aluno" na tabela "aluno" com os mesmos dados digitado no formulário
		if(isset($resultado)){
			$_SESSION['alunoId'] = $resultado['AlunoID'];
			$_SESSION['alunoNome'] = $resultado['AlunoNome'];
			$_SESSION['alunoNiveisAcessoId'] = $resultado['niveis_acesso_id'];
			$_SESSION['alunoEmail'] = $resultado['AlunoEmail'];
			if($_SESSION['alunoNiveisAcessoId'] == "1"){
				header("Location: boletim");
			}elseif($_SESSION['alunoNiveisAcessoId'] == "2"){
				header("Location: professor");
			}else{
				header("Location: cliente.php");
			}
		//Não foi encontrado um "aluno" na tabela "aluno" com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: login_aluno.php");
		}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: login_aluno.php");
	}
?>