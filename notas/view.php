<?php 
	require_once('functions.php'); 
	view_nota($_GET['NotaID']);
	index_notas();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Nota <?php echo $nota['NotaID']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Aluno</dt>
	<dd>
	<?php
      require_once('../db/conexao.php');
      $select_aluno = "SELECT Notas.NotaID, Alunos.AlunoNome FROM Notas INNER JOIN Alunos ON Notas.AlunoID = Alunos.AlunoID WHERE NotaID = ".$nota['NotaID'];      
      // executa a query
      $dados_aluno = mysql_query($select_aluno, $conecta) or die(mysql_error());      
      // transforma os dados em um array
      $linha_aluno = mysql_fetch_assoc($dados_aluno);      
      // calcula quantos dados retornaram
      $total_aluno = mysql_num_rows($dados_aluno);      
   	?>	
	<?php echo $_SESSION["select-aluno"]=$linha_aluno['AlunoNome'];?>
	</dd>

	<dt>Matéria</dt>
	<dd> 
	<?php
      require_once('../db/conexao.php');
      $select_materia = "SELECT Notas.NotaID, Materias.MateriaNome FROM Notas INNER JOIN Materias ON Notas.MateriaID = Materias.MateriaID where NotaID = ".$nota['NotaID'];      
      // executa a query
      $dados_materia = mysql_query($select_materia, $conecta) or die(mysql_error());      
      // transforma os dados em um array
      $linha_materia = mysql_fetch_assoc($dados_materia);      
      // calcula quantos dados retornaram
      $total_materia = mysql_num_rows($dados_materia);      
   	?>	
	<?php echo $_SESSION["select-materia"]=$linha_materia['MateriaNome'];?>
	</dd>

	<dt>Nota:</dt>
	<dd><?php echo $nota['Nota']; ?></dd>
	
	<dl class="dl-horizontal">
	<dt>Data de Cadastro</dt>
	<dd><?php echo date("d/m/Y - H:i:s", strtotime($nota['created']));  ?></dd>	
	
	<dt>Data de Modificação</dt>
	<dd><?php echo date("d/m/Y - H:i:s", strtotime($nota['modified']));  ?></dd>
</dl>
</dl>



<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $customer['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="javascript:history.back()" class="btn btn-primary">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>