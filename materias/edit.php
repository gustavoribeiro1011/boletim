<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Matéria</h2>

<form action="edit.php?MateriaID=<?php echo $materia['MateriaID']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Matéria</label>
      <input type="text" class="form-control" name="materia['MateriaNome']" value="<?php echo $materia['MateriaNome']; ?>">
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