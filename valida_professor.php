<?php
    //inclui o arquivo config para utilizar dentro do conexão_login na hora de passar o user/host/password do BD
    require_once('config.php');
	session_start();	
	//Incluindo a conexão com banco de dados
	include_once("db/conexao_login.php");	
	//O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['ProfessorEmail'])) && (isset($_POST['ProfessorSenha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['ProfessorEmail']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($conn, $_POST['ProfessorSenha']);
		$senha = md5($senha);
			
		//Buscar na tabela "professores" o professor que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM professores WHERE ProfessorEmail = '$usuario' && ProfessorSenha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		//Encontrado um "professor" na tabela "professore" com os mesmos dados digitado no formulário
		if(isset($resultado)){
			$_SESSION['professorId'] = $resultado['ProfessorID'];
			$_SESSION['professorNome'] = $resultado['ProfessorNome'];
			$_SESSION['professorNiveisAcessoId'] = $resultado['niveis_acesso_id'];
			$_SESSION['professorEmail'] = $resultado['ProfessorEmail'];
			if($_SESSION['professorNiveisAcessoId'] == "1"){
				header("Location: boletim");
			}elseif($_SESSION['professorNiveisAcessoId'] == "2"){
				header("Location: notas");
			}else{
				header("Location: cliente.php");
			}
		//Não foi encontrado um "professor" na tabela "professor" com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: login_professor.php");
		}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		header("Location: login_professor.php");
	}
?>