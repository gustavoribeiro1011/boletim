<?php
require_once('../config.php');
require_once(DBAPI);
$materias = null;
$materia = null;
/**
 *  Listagem de Materias
 */
function index() {
	global $materias;
	$materias = find_all('materias');
}

/**
 *  Cadastro de Materias
 */
function add() {
  if (!empty($_POST['materia'])) {
    
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $materia = $_POST['materia'];
    $materia['modified'] = $materia['created'] = $today->format("Y-m-d H:i:s");
    
    save('materias', $materia);
    header('location: index.php');
  }
}

/**
 *	Atualizacao/Edicao de Materia
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['MateriaID'])) {
    $id = $_GET['MateriaID'];
    if (isset($_POST['materia'])) {
      $materia = $_POST['materia'];
      $materia['modified'] = $now->format("Y-m-d H:i:s");
      update_materia('materias', $id, $materia);
      header('location: index.php');
    } else {
      global $materia;
      $materia = find5('materias', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *  Visualização de um Materia
 */
function view($id = null) {
  global $materia;
  $materia = find5('materias', $id);
}

/**
 *  Exclusão de um Materia
 */
function delete($id = null) {
  global $materia;
  $materia = remove_materia('materias', $id);
  header('location: index.php');
}

/**
 *  Definir Data e Hora America/Sao_Paulo
 */
date_default_timezone_set('America/Sao_Paulo');


