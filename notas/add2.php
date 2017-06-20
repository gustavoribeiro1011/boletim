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
      $select_nota_turma= "SELECT a.alunonome AS aluno,
       m.materianome AS disciplina,
       GROUP_CONCAT(CASE n.notabimestre
                      WHEN 1 THEN notaid
                    END) AS notaidbim1,
       AVG(CASE n.notabimestre
             WHEN 1 THEN n.nota
             ELSE null
           END) AS bim1,
       GROUP_CONCAT(CASE n.notabimestre
                      WHEN 2 THEN notaid
                    END) AS notaidbim2,
       AVG(CASE n.notabimestre
             WHEN 2 THEN n.nota
             ELSE null
           END) AS bim2,
       GROUP_CONCAT(CASE n.notabimestre
                      WHEN 3 THEN notaid
                    END) AS notaidbim3,
       AVG(CASE n.notabimestre
             WHEN 3 THEN n.nota
             ELSE null
           END) AS bim3,
       GROUP_CONCAT(CASE n.notabimestre
                      WHEN 4 THEN notaid
                    END) AS notaidbim4,
       AVG(CASE n.notabimestre
             WHEN 4 THEN n.nota
             ELSE null
           END) AS bim4
  FROM notas n
 INNER JOIN materias m ON m.materiaid = n.materiaid
 INNER JOIN alunos a ON a.alunoid = n.alunoid
 GROUP BY n.materiaid, n.alunoid, a.alunonome, m.materianome"; 
   
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
<table class="table table-striped table-bordered" align="center">
  <tr>
    <td width="30%"><b>DISCIPLINA</b></td>	
    <td width="30%"><b>ALUNO</b></td>
	<td width="10%" colspan="2"><b>1B</b></td>
    <td width="10%" colspan="2"><b>2B</b></td>
    <td width="10%" colspan="2"><b>3B</b></td>
    <td width="10%" colspan="2"><b>4B</b></td>

  </tr>
  
  <?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total_nota > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
  <tr>
    <td><?php echo $linha_nota['disciplina'];?></td>  
	

	<td><?php echo strtoupper($linha_nota['aluno']);?></td>
	

	<td><?php echo $linha_nota['bim1'];?></a></td>
	    <td><a href="edit2.php?NotaID=<?php echo $linha_nota['notaidbim1']; ?>"><i class="fa fa-pencil"></i></a></td>	
	

	<td><?php echo $linha_nota['bim2'];?></td>
	<td><a href="edit2.php?NotaID=<?php echo $linha_nota['notaidbim2']; ?>"><i class="fa fa-pencil"></i></a></td>	
	
	
    <td><?php echo $linha_nota['bim3'];?></td>
    <td><a href="edit2.php?NotaID=<?php echo $linha_nota['notaidbim3']; ?>"><i class="fa fa-pencil"></i></a></td>	
		
    <td><?php echo $linha_nota['bim4'];?></td>
    <td><a href="edit2.php?NotaID=<?php echo $linha_nota['notaidbim4']; ?>"><i class="fa fa-pencil"></i></a></td>
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