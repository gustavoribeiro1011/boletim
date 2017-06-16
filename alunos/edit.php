<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Editar Aluno</h2>

<form action="edit.php?AlunoID=<?php echo $aluno['AlunoID']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="aluno['AlunoNome']" value="<?php echo $aluno['AlunoNome']; ?>">
    </div>
	</div>
	<div class="row">
    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="aluno['created']" disabled value="<?php echo $aluno['created']; ?>">
    </div>
  </div>
 
 <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="javascript:history.back()" class="btn btn-default">Cancelar</a>
   </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>