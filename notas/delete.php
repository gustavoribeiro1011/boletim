<?php 
  require_once('functions.php'); 
  if (isset($_GET['NotaID'])){
    delete($_GET['NotaID']);
  } else {
    die("ERRO: ID não definido.");
  }
?>