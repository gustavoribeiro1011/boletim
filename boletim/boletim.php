<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>


<!-- <h3>DESCRIÇÃO DA PÁGINA</h3> -->
<hr>

<?php if ($db) : ?>

<!-- GERANDO BOLETIM -->
      <?php

      require_once('../db/conexao.php');
	  $id = $_SESSION['alunoId'];
      $select_boletim= "Select 
Notas.NotaID, Materias.MateriaNome,

       max(case when NotaBimestre = 1 then Nota else null end) as 1bim,
       max(case when NotaBimestre = 2 then Nota else null end) as 2bim,
       max(case when NotaBimestre = 3 then Nota else null end) as 3bim,
       max(case when NotaBimestre = 4 then Nota else null end) as 4bim
         
From notas 

INNER JOIN Materias ON Notas.MateriaID = Materias.MateriaID  WHERE AlunoID = ".$id." group by MateriaNome"; 
   
      // executa a query
      $dados_boletim = mysql_query($select_boletim, $conecta) or die(mysql_error());      
      // transforma os dados em um array
      $linha_boletim = mysql_fetch_assoc($dados_boletim);      
      // calcula quantos dados retornaram
      $total_boletim = mysql_num_rows($dados_boletim); 

   	?>	
</table>

<div class="container-fluid">                
<div class="table-responsive"> 
<table class="table-bordered fluid-container" width="35%" align="center">
  <tr>
    <td><b>DISCIPLINA</b></td>
    <td><b>1BIM</B></td>
    <td><b>2BIM</B></td>
    <td><b>3BIM</B></td>
    <td><b>4BIM</B></td>
  </tr>
  
  <?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total_boletim > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
  <tr>
    <td><?php echo $linha_boletim['MateriaNome'];?></td>
    <td><?php echo $linha_boletim['1bim'];?></td>
    <td><?php echo $linha_boletim['2bim'];?></td>
    <td><?php echo $linha_boletim['3bim'];?></td>
    <td><?php echo $linha_boletim['4bim'];?></td>
  </tr>
  <?php
		// finaliza o loop que vai mostrar os dados
		}while($linha_boletim = mysql_fetch_assoc($dados_boletim));
	// fim do if 
	}
?>
</table>
</div>
</div>




<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include(FOOTER_TEMPLATE); ?>