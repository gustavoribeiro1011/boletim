<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<h2>Area do Professor</h2>
<img alt="Brand" src="<?php echo BASEURL; ?>img/boletim.png" width="80px">
<?php
    echo "Bem Vindo, ". $_SESSION['professorNome']." !";	
?>

(<a href="<?php echo BASEURL;?>sair_professor.php">Sair</a>)
<!-- <h3>DESCRIÇÃO DA PÁGINA</h3> -->
<hr />

<?php if ($db) : ?>
<li><a href="<?php echo BASEURL;?>/notas">Home</a></li>
<li><a href="<?php echo BASEURL;?>/notas/add.php">Cadastrar nota</a></li>
<li><a href="<?php echo BASEURL;?>/notas/notas.php">Verificar notas cadastradas</a></li>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE_NOTAS); ?>