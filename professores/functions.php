<?php
require_once('../config.php');
require_once(DBAPI);
$professores = null;
$professor = null;
/**
 *  Listagem de Professores
 */
function index_professor() {
	global $professores;
	$professores = find_all_7('professores');
}

/**
 *  Cadastro de Professores
 */
function add() {
  if (!empty($_POST['professor'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $professor = $_POST['professor'];
    $professor['modified'] = $professor['created'] = $today->format("Y-m-d H:i:s");    
    save('professores', $professor);
    header('location: index.php');
  }
}

/**
 *	Atualizacao/Edicao de Professor
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['ProfessorID'])) {
    $id = $_GET['ProfessorID'];
    if (isset($_POST['professor'])) {
      $professor = $_POST['professor'];
      $professor['modified'] = $now->format("Y-m-d H:i:s");
      update_professor('professores', $id, $professor);
      header('location: index.php');
    } else {
      global $professor;
      $professor = find7('professores', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um Professor
 */
function view($id = null) {
  global $professor;
  $professor = find7('professores', $id);
}

/**
 *  Exclusão de um Professor
 */
function delete($id = null) {
  global $professor;
  $professor = remove_professor('professores', $id);
  header('location: index.php');
}

/**
 *  Definir Data e Hora America/Sao_Paulo
 */
date_default_timezone_set('America/Sao_Paulo');


