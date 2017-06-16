<?php 
  require_once('functions.php'); 
  add();
  ?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cadastrar Professor</h2>

<form action="<?php echo BASEURL; ?>professores/add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
  <div class="form-group col-md-5">
      <label for="name">Professor</label>
      <input type="text" class="form-control" name="professor['ProfessorNome']">
    </div>	
  </div>
  <div class="row">
	<div class="form-group col-md-5">
      <label for="name">E-mail</label>
      <input type="email" class="form-control" name="professor['ProfessorEmail']">
    </div>	
  </div>
  <div class="row">
	<div class="form-group col-md-5">
      <label for="name">Senha</label>
      <input type="text" class="form-control" name="professor['ProfessorSenha']">
    </div>
  </div>
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
      <a href="javascript:history.back()" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>