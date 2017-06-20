<?php
require_once('../config.php');
require_once(DBAPI);
$notas = null;
$nota = null;
$alunos = null;
$aluno = null;
$materias = null;
$materia = null;
/**
 *  Listagem de Notas
 */
function index() {
	global $notas;
	$notas = find_all('notas');
}
function index_notas() {
	global $notas;
	$notas = find_all_notas('notas');
}
/**
 *  Listagem de Alunos
 */
function index2() {
	global $alunos;
	$alunos = find_all('alunos');
}

/**
 *  Listagem de Materias
 */
function index3() {
	global $materias;
	$materias = find_all('materias');
}

/**
 *  Cadastro de Notas
 */
function add() {
	//se os dados do input nota for diferente de vazio faça
  if (!empty($_POST['nota'])) {
    //aqui estou criando data e hora do cadastro 
    $today = 
      date_create('now', new DateTimeZone('America/Sao_Paulo'));
    $nota = $_POST['nota'];
	$nota['modified'] = $nota['created'] = $today->format("Y-m-d H:i:s");
    save('notas', $nota);
    header('location: notas.php');
  }
}

/**
 *	Atualizacao/Edicao de Nota
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['NotaID'])) {
    $id = $_GET['NotaID'];
    if (isset($_POST['nota'])) {
      $nota = $_POST['nota'];
      $nota['modified'] = $now->format("Y-m-d H:i:s");
      update('notas', $id, $nota);
      header('location: index.php');
    } else {
      global $nota;
      $nota = find6('notas', $id);
    } 
  } else {
    header('location: index.php');
  }
}

/**
 *	Atualizacao/Edicao de Nota
 */
function edit_nota_coletivo() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['NotaID'])) {
    $id = $_GET['NotaID'];
    if (isset($_POST['nota'])) {
      $nota = $_POST['nota'];
      $nota['modified'] = $now->format("Y-m-d H:i:s");
      update_nota('notas', $id, $nota);
      header('location: add2.php');
    } else {
      global $nota;
      $nota = find6('notas', $id);
    } 
  } else {
    header('location: add2.php');
  }
}
/**
 *	Atualizacao/Edicao de Nota
 */
function edit_nota() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
  if (isset($_GET['NotaID'])) {
    $id = $_GET['NotaID'];
    if (isset($_POST['nota'])) {
      $nota = $_POST['nota'];
      $nota['modified'] = $now->format("Y-m-d H:i:s");
      update_nota('notas', $id, $nota);
      header('location: notas.php');
    } else {
      global $nota;
      $nota = find6('notas', $id);
    } 
  } else {
    header('location: notas.php');
  }
}

/**
 *  Visualização de um Nota
 */
function view($id = null) {
  global $nota;
  $nota = find('notas', $id);
}
/**
 *  Visualização de um Nota pelo NotaID
 */
function view_nota($id = null) {
  global $nota;
  $nota = find6('notas', $id);
}

/**
 *  Exclusão de um Nota
 */
function delete($id = null) {
  global $nota;
  $nota = remove_nota('notas', $id);
  header('location: notas.php');
}

/**
 *  Definir Data e Hora America/Sao_Paulo
 */
date_default_timezone_set('America/Sao_Paulo');


