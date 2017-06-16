<?php 
	require_once('functions.php'); 
	view($_GET['AlunoID']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Aluno <?php echo $aluno['AlunoID']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome</dt>
	<dd><?php echo $aluno['AlunoNome']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Data de Cadastro:</dt>
	<dd><?php echo date("d/m/Y - H:i:s", strtotime($aluno['created']));  ?></dd>
    <dt>Data de Modificação:</dt>
	<dd><?php echo date("d/m/Y - H:i:s", strtotime($aluno['modified'])); ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?AlunoID=<?php echo $aluno['AlunoID']; ?>" class="btn btn-primary">Editar</a>
	  <a href="javascript:history.back()" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>