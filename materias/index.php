<?php
    require_once('functions.php');
    index();
	
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Matérias</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Cadastrar Matéria</a>
	    	<a class="btn btn-default" href="<?php echo BASEURL; ?>materias"><i class="fa fa-refresh"></i> Atualizar</a>
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

<table id="employee_data" class="table table-striped table-bordered">
<thead>
	<tr>
		<th WIDTH="5%">ID</th>
		<th WIDTH="35%">MATERIA</th>
		<th WIDTH="37%">ATUALIZADO EM</th>
		<th WIDTH="23%">OPÇÕES</th>
	</tr>         
</thead>
<tbody>
<?php if ($materias) : ?>
<?php foreach ($materias as $materia) : ?>
	<tr>
		<td><?php echo $materia['MateriaID']; ?></td>
		<td><?php echo $materia['MateriaNome']; ?></td>
	   <td><?php echo date("d/m/Y - H:i:s", strtotime($materia['modified'])); ?></td>
		<td class="actions text-right">
			<a href="view.php?MateriaID=<?php echo $materia['MateriaID']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?MateriaID=<?php echo $materia['MateriaID']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-materia="<?php echo $materia['MateriaID']; ?>">
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

<?php include(FOOTER_TEMPLATE_MATERIAS); ?>