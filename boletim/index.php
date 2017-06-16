<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<h2>Area do Aluno</h2>
<img alt="Brand" src="<?php echo BASEURL; ?>img/boletim.png" width="80px">
<?php
    echo "Bem Vindo, ". $_SESSION['alunoNome']." !";	
?>

(<a href="<?php echo BASEURL;?>sair_aluno.php">Sair</a>)
<!-- <h3>DESCRIÇÃO DA PÁGINA</h3> -->
<hr />

<?php if ($db) : ?>
<li><a href="<?php echo BASEURL;?>/boletim">Página Inicial</a></li>
<li><a href="<?php echo BASEURL;?>/boletim/boletim.php">Boletim</a></li>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>