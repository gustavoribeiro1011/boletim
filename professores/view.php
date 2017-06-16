<?php 
	require_once('functions.php'); 
	view($_GET['ProfessorID']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Professor <?php echo $professor['ProfessorID']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome</dt>
	<dd><?php echo $professor['ProfessorNome']; ?></dd>	
	<dt>E-Mail</dt>
	<dd><?php echo $professor['ProfessorEmail']; ?></dd>
	<dt>Senha</dt>
	<dd><?php echo $professor['ProfessorSenha']; ?></dd>
</dl>

<dl class="dl-horizontal">
	<dt>Data de Cadastro:</dt>
	<dd><?php echo date("d/m/Y - H:i:s", strtotime($professor['created']));  ?></dd>
    <dt>Data de Modificação:</dt>
	<dd><?php echo date("d/m/Y - H:i:s", strtotime($professor['modified'])); ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="<?php echo BASEURL; ?>professores/edit.php?ProfessorID=<?php echo $professor['ProfessorID']; ?>" class="btn btn-primary">Editar</a>
	  <a href="javascript:history.back()" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE_PROFESSORES); ?>