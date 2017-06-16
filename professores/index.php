<?php
    require_once('functions.php');
    index_professor();
	
?>

<?php include(HEADER_TEMPLATE); ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Professores</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="<?php echo BASEURL; ?>professores/add.php"><i class="fa fa-plus"></i> Cadastrar Professor</a>
	    	<a class="btn btn-default" href="<?php echo BASEURL; ?>professores"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>
<hr>

<table id="employee_data" class="table table-striped table-bordered">
<thead>
	<tr>
		<th width="5%">ID</th>
		<th width="35%">PROFESSOR</th>
		<th width="37%">ATUALIZADO EM</th>
		<th width="23$">OPÇÕES</th>
	</tr>
</thead>
<tbody>
<?php if ($professores) : ?>
<?php foreach ($professores as $professor) : ?>
	<tr>
		<td><?php echo $professor['ProfessorID']; ?></td>
		<td><?php echo $professor['ProfessorNome']; ?></td>
	   <td><?php echo date("d/m/Y - H:i:s", strtotime($professor['modified'])); ?></td>
		<td class="actions text-right">
			<a href="view.php?ProfessorID=<?php echo $professor['ProfessorID']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?ProfessorID=<?php echo $professor['ProfessorID']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-professor="<?php echo $professor['ProfessorID']; ?>">
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

<?php include(FOOTER_TEMPLATE_PROFESSORES); ?>