<?php
    require_once('functions.php');
    index_notas();
	
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Notas</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Cadastrar Nota</a>
	    	<a class="btn btn-default" href="<?php echo BASEURL; ?>professor/notas.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table  id="employee_data" class="table table-striped table-bordered"">
<thead>
	<tr>
		<th width="5%">ID</th>
		<th width="25%">ALUNO</th>
		<th width="33%">MATERIA</th>
		<th width="14%">NOTA</th>
		<th width="23%">OPÇÕES</th>
	</tr>
</thead>
<tbody>
<?php if ($notas) : ?>
<?php foreach ($notas as $nota) : ?>
	<tr>
		<td><?php echo $nota['NotaID']; ?></td>		
		<td><?php echo $nota['AlunoNome']; ?></td>
		<td><?php echo $nota['MateriaNome']; ?></td>
		<td><?php echo $nota['Nota']; ?></td>
		<td class="actions text-right">
			<a href="view.php?NotaID=<?php echo $nota['NotaID']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?NotaID=<?php echo $nota['NotaID']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-nota="<?php echo $nota['NotaID']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
		</td>
	</tr>
<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>

<?php include('modal.php'); ?>

<?php include(FOOTER_TEMPLATE_NOTAS); ?>