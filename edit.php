	<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>
<br>
<h4><b>Atualizar Anuência</b></h4>

<form action="edit.php?id=<?php echo $anuencia['id']; ?>" method="post">
  <hr />
  <div class="row">
  
    
    <div class="form-group col-md-2">
      <label for="name">Numero da Pasta</label>
      <input type="text" class="form-control" name="anuencia['cod_pasta']" value="<?php echo $anuencia['cod_pasta']; ?>">
    </div>
	<div class="form-group col-md-2">
      <label for="name">Codigo do Cliente</label>
      <input type="text" class="form-control" name="anuencia['cod_cliente']" value="<?php echo $anuencia['cod_cliente']; ?>">
    </div>
	<div class="form-group col-md-6">
      <label for="name">Cliente</label>
      <input type="text" class="form-control" name="anuencia['nome_cliente']" value="<?php echo $anuencia['nome_cliente']; ?>">
    </div>
	</div>
	<div class="row">	
	
	
	<div class="form-group col-md-4">
      <label for="name">Título</label>
      <input type="text" class="form-control" name="anuencia['titulo']" value="<?php echo $anuencia['titulo']; ?>">
    </div>
	<div class="form-group col-md-4">
      <label for="name">Valor do Título</label>
      <input type="text" class="form-control" name="anuencia['valor']" value="<?php echo $anuencia['valor']; ?>" onkeydown="FormataValor(this,28,event,2,'.',',');" />
    </div>
	<div class="form-group col-md-2">
      <label for="name">Data da Solicitação</label>
      <input type="date" class="form-control" name="anuencia['solicitacao']" value="<?php echo $anuencia['solicitacao']; ?>">
    </div>
    
	<div class="form-group col-md-10">
      <label for="name">Destinatário</label>
      <input type="text" class="form-control" name="anuencia['destinatario']" value="<?php echo $anuencia['destinatario']; ?>">
    </div>
	
	<div class="form-group col-md-10">
      <label for="campo1">Observações</label>
      <textarea class="form-control" name="anuencia['observacoes']"><?php echo $anuencia['observacoes']; ?></textarea>
	</div>
	</div>
	<div class="row">
	<div class="form-group col-md-2">
      <label for="name">Data de Envio</label>
      <input type="date" class="form-control" name="anuencia['data_envio']" value="<?php echo $anuencia['data_envio']; ?>">
    </div>	
	<div class="form-group col-md-2">
      <label for="name">Status</label>
      <select  class="form-control" name="anuencia['status']">
      <option value="<?php echo $anuencia['status']; ?>"><?php echo $anuencia['status']; ?></option> 
	  <option value="ASSINATURA">ASSINATURA</option>
      <option value="CARTORIO">CARTORIO</option>
	   <option value="CONCLUIDO">CONCLUIDO</option>
	  </select> 
    </div>
	<div class="form-group col-md-2">
      <label for="campo3">Emissão da carta</label>
      <input type="text" class="form-control" name="anuencia['created']" disabled>
    </div>
  </div> 
   
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>