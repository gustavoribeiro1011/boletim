<?php 
  require_once('functions.php'); 
  if (isset($_GET['ProfessorID'])){
    delete($_GET['ProfessorID']);
  } else {
    die("ERRO: ID não definido.");
  }
?>