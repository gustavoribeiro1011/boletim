<?php
require_once('../config.php');
require_once(DBAPI);
$alunos = null;
$aluno = null;
/**
 *  Listagem de Clientes
 */
function index() {
	global $alunos;
	$alunos = find_all('alunos');
}

/**
 *  Cadastro de Clientes
 */
function add() {
  if (!empty($_POST['aluno'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $aluno = $_POST['aluno'];
    $aluno['modified'] = $aluno['created'] = $today->format("Y-m-d H:i:s");
    
    save('alunos', $aluno);
    header('location: index.php');
  }
}

/**
 *	Atualizacao/Edicao de Cliente
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['AlunoID'])) {
    $id = $_GET['AlunoID'];
    if (isset($_POST['aluno'])) {
      $aluno = $_POST['aluno'];
      $aluno['modified'] = $now->format("Y-m-d H:i:s");
      update_aluno('alunos', $id, $aluno);
      header('location: index.php');
    } else {
      global $aluno;
      $aluno = find4('alunos', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um Cliente
 */
function view($id = null) {
  global $aluno;
  $aluno = find4('alunos', $id);
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null) {
  global $aluno;
  $aluno = remove_aluno('alunos', $id);
  header('location: index.php');
}

/**
 *  Definir Data e Hora America/Sao_Paulo
 */
date_default_timezone_set('America/Sao_Paulo');


