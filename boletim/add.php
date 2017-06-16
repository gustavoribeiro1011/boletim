<?php 
  require_once('functions.php'); 
  add();
  index2();
  index3();
  ?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Cadastrar Nota</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Aluno</label>
	  
	  
	  <select class="form-control" name="nota['AlunoID']">
	  
	  <?php if ($alunos) : ?>
      <?php foreach ($alunos as $aluno) : ?>  

	  
	  <option value="<?php echo $aluno['AlunoID']; ?>"><?php echo $aluno['AlunoNome']; ?></option>
	  
	  <?php endforeach; ?>
      <?php else : ?>
	  
      <option>SEM RESULTADOS</option>
 
	  <?php endif; ?>
	  
	  </select>
	  
      
    </div>
	  <div class="form-group col-md-7">
      <label for="name">Materia</label>
  
  	  <select class="form-control" name="nota['MateriaID']">
	  
	  <?php if ($materias) : ?>
      <?php foreach ($materias as $materia) : ?>  

	  
	  <option value="<?php echo $materia['MateriaID']; ?>"><?php echo $materia['MateriaNome']; ?></option>
	  
	  <?php endforeach; ?>
      <?php else : ?>
	  
      <option>SEM RESULTADOS</option>
 
	  <?php endif; ?>
	  
	  </select>
  
    </div>
	<div class="form-group col-md-7">
      <label for="name">Nota</label>
      <input type="text" class="form-control" name="nota['Nota']">
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