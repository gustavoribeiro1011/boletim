<?php 
  require_once('functions.php'); 
  if (isset($_GET['AlunoID'])){
    delete($_GET['AlunoID']);
  } else {
    die("ERRO: ID não definido.");
  }
?>