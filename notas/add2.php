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
	  //$id = $_SESSION['alunoId'];
      $select_nota_turma= "Select 

Notas.NotaID,
Materias.MateriaNome, 
Alunos.AlunoNome,
Alunos.AlunoID,


       max(case when NotaBimestre = 1 then Nota else null end) as 1bim,
       max(case when NotaBimestre = 2 then Nota else null end) as 2bim,
       max(case when NotaBimestre = 3 then Nota else null end) as 3bim,
       max(case when NotaBimestre = 4 then Nota else null end) as 4bim
         
From ((notas 

INNER JOIN Materias 
       ON Notas.MateriaID = Materias.MateriaID) 
INNER JOIN Alunos
       ON Notas.AlunoID = Alunos.AlunoID)	   

group by (NotaID)"; 
   
      // executa a query
      $dados_nota = mysql_query($select_nota_turma, $conecta) or die(mysql_error());      
      // transforma os dados em um array
      $linha_nota = mysql_fetch_assoc($dados_nota);      
      // calcula quantos dados retornaram
      $total_nota= mysql_num_rows($dados_nota); 

   	?>	
</table>

<div class="container-fluid">                
<div class="table-responsive"> 
<table class="table-bordered fluid-container" width="80%" align="center">
  <tr>
  	<td><b>NOTA ID</b></td>
    <td><b>ALUNO</b></td>	
    <td><b>MATÉRIA</b></td>
    <td><b>1BIM</B></td>
    <td><b>2BIM</B></td>
    <td><b>3BIM</B></td>
    <td><b>4BIM</B></td>
  </tr>
  
  <?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total_nota > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
  <tr>
    <td><?php echo $linha_nota['NotaID'];?></td>    
	<td><?php echo strtoupper($linha_nota['AlunoNome']);?></td>
    <td><?php echo $linha_nota['MateriaNome'];?></td>
    <td><?php echo $linha_nota['1bim'];?></td>
    <td><?php echo $linha_nota['2bim'];?></td>
    <td><?php echo $linha_nota['3bim'];?></td>
    <td><?php echo $linha_nota['4bim'];?></td>
  </tr>
  <?php
		// finaliza o loop que vai mostrar os dados
		}while($linha_nota = mysql_fetch_assoc($dados_nota));
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