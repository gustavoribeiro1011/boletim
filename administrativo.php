<?php
	session_start();
	echo "Usuario: ". $_SESSION['alunoNome'];	
?>
<br>
<a href="sair.php">Sair</a>