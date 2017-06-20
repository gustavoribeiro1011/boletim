<?php 
  require_once('functions.php'); 
  edit_nota_coletivo();
  index();
  index2();
  index3();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Nota</h2>

<form action="<?php echo BASEURL; ?>notas/edit2.php?NotaID=<?php echo $nota['NotaID']; ?>" method="post">
  <hr />
  <div class="row">  
      <div class="form-group col-md-4">
      <label for="name">Aluno</label>	  
      <?php
      require_once('../db/conexao.php');
      $select_aluno = "SELECT Notas.NotaID, Alunos.AlunoNome FROM Notas INNER JOIN Alunos ON Notas.AlunoID = Alunos.AlunoID WHERE NotaID = ".$nota['NotaID'];      
      // executa a query
      $dados_aluno = mysql_query($select_aluno, $conecta) or die(mysql_error());      
      // transforma os dados em um array
      $linha_aluno = mysql_fetch_assoc($dados_aluno);      
      // calcula quantos dados retornaram
      $total_aluno = mysql_num_rows($dados_aluno);      
   	?>	
	  <select class="form-control" name="nota['AlunoID']">
	  <option value="<?php echo $nota['AlunoID']; ?>"><?php echo $_SESSION["select-aluno"]=strtoupper($linha_aluno['AlunoNome']);?></option>
      <?php if ($alunos) : ?>
      <?php foreach ($alunos as $aluno) : ?>
	  <option value="<?php echo $aluno['AlunoID'];?>"><?php echo strtoupper($aluno['AlunoNome']);?></option>
	  <?php endforeach; ?>
      <?php else : ?>
	  <option>SEM RESULTADOS</option>	 
	  <?php endif; ?>
	  </select>
    </div>
	</div>
	
  <div class="row">	
	  <div class="form-group col-md-4">
      <label for="name">Matéria</label>	  
      <?php
      require_once('../db/conexao.php');
      $select_materia = "SELECT Notas.NotaID, Materias.MateriaNome FROM Notas INNER JOIN Materias ON Notas.MateriaID = Materias.MateriaID where NotaID = ".$nota['NotaID'];      
      // executa a query
      $dados_materia = mysql_query($select_materia, $conecta) or die(mysql_error());      
      // transforma os dados em um array
      $linha_materia = mysql_fetch_assoc($dados_materia);      
      // calcula quantos dados retornaram
      $total_materia = mysql_num_rows($dados_materia);      
   	?>	
	  <select class="form-control" name="nota['MateriaID']">
	  <option value="<?php echo $nota['MateriaID']; ?>"><?php echo $_SESSION["select-materia"]=$linha_materia['MateriaNome'];?></option>
      <?php if ($materias) : ?>
      <?php foreach ($materias as $materia) : ?>
	  <option value="<?php echo $materia['MateriaID'];?>"><?php echo $materia['MateriaNome'];?></option>
	  <?php endforeach; ?>
      <?php else : ?>
	  <option>SEM RESULTADOS</option>	 
	  <?php endif; ?>
	  </select>
    </div>
  </div>
  <div class="row">  
    <div class="form-group col-md-1">
      <label for="name">Nota</label>
      <input type="text" class="form-control" name="nota['Nota']" value="<?php echo $nota['Nota']; ?>">
    </div>
  </div>
	  <div class="row">  
    <div class="form-group col-md-1">
      <label for="name">Bimestre</label>
	  <select class="form-control" name="nota['NotaBimestre']">
	  <option value="<?php echo $nota['NotaBimestre']; ?>"><?php echo $nota['NotaBimestre'];?></option>
	  <option value="1">1</option>	  
	  <option value="2">2</option>
	  <option value="3">3</option>	  
	  <option value="4">4</option>
     </select>
    </div>
  </div>
	
 
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="<?php echo BASEURL; ?>notas/add2.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE_NOTAS); ?>