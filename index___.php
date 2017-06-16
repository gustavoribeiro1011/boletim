<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE_INDEX); ?>
<?php $db = open_database(); ?>

<!-- <h3>DESCRIÇÃO DA PÁGINA</h3> -->
<hr />

<?php if ($db) : ?>


<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>