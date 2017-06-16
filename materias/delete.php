<?php 
  require_once('functions.php'); 
  if (isset($_GET['MateriaID'])){
    delete($_GET['MateriaID']);
  } else {
    die("ERRO: ID não definido.");
  }
?>