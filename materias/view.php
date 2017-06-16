<?php 
	require_once('functions.php'); 
	view($_GET['MateriaID']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Matéria <?php echo $materia['MateriaID']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Matéria</dt>
	<dd><?php echo $materia['MateriaNome']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Data de Cadastro</dt>
	<dd><?php echo date("d/m/Y - H:i:s", strtotime($materia['created']));  ?></dd>	
	
	<dt>Data de Modificação</dt>
	<dd><?php echo date("d/m/Y - H:i:s", strtotime($materia['modified']));  ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?MateriaID=<?php echo $materia['MateriaID']; ?>" class="btn btn-primary">Editar</a>
	  <a href="javascript:history.back()" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>