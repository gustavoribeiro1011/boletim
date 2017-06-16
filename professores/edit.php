<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Editar Professor</h2>

<form action="edit.php?ProfessorID=<?php echo $professor['ProfessorID']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="professor['ProfessorNome']" value="<?php echo $professor['ProfessorNome']; ?>">
    </div> 
	<div class="form-group col-md-7">
      <label for="name">E-mail</label>
      <input type="email" class="form-control" name="professor['ProfessorEmail']" value="<?php echo $professor['ProfessorEmail']; ?>">
    </div>	
	<div class="form-group col-md-7">
      <label for="name">Senha</label>
      <input type="text" class="form-control" name="professor['ProfessorSenha']" value="<?php echo $professor['ProfessorSenha']; ?>">
    </div>
	</div>
	<div class="row">
    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="professor['created']" disabled value="<?php echo $professor['created']; ?>">
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