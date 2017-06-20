<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>


<br />
<?php if ($db) : ?>

<form action="<?php echo BASEURL; ?>notas/add2.php" method="post">
<div class="row">  
 <div class="form-group col-md-4">
  <label>Curso</label>
   <select class="form-control">
	<option>Selecione o curso</option>
	 </select>
	 </div>
      </div>
	  
<div class="row">  
 <div class="form-group col-md-4">
  <label>Matéria</label>
   <select class="form-control">
	<option>Selecione a matéria</option>
	 </select>
	 </div>
      </div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Ok</button>
      <a href="javascript:history.back()" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>
<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE_NOTAS); ?>