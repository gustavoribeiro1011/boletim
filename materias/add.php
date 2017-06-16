<?php 
  require_once('functions.php'); 
  add();
  ?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cadastrar Matéria</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    
	
	<div class="form-group col-md-5">
      <label for="name">Matéria</label>
      <input type="text" class="form-control" name="materia['MateriaNome']">
    </div>

  </div>
  
  
  <!--<div class="row">
     <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="nota['created']" disabled>
    </div>
  </div>-->
    
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
      <a href="javascript:history.back()" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>