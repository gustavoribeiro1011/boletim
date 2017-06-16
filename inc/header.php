 <?php 
  /* 
  * Desabilitando os erros de Warning.
  */
  error_reporting(0);
  ini_set(“display_errors”, 0 );
  ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Sistema de Boletim</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
	<link rel="shortcut icon" href="<?php echo BASEURL; ?>img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
	
	<!-- Importando Data Table - Inicio-->
    <script src="<?php echo BASEURL; ?>js/jquery.min.js"></script>      
    <script src="<?php echo BASEURL; ?>js/jquery.dataTables.min.js"></script>  
    <script src="<?php echo BASEURL; ?>js/dataTables.bootstrap.min.js"></script>            
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/dataTables.bootstrap.min.css" /> 
    <!-- Importando Data Table - Fim-->
	</script>
    <!-- Máscara de Moeda -->
    <script src="<?php echo BASEURL; ?>js/jquery.maskMoney.js" type="text/javascript"></script>
    <!-- Letras maiúsculas - Inciio-->
    <style type="text/css">
    input.maiuscula {
    text-transform: uppercase;
    }
    </style>
    <!-- Letras maiúsculas - Fim-->
	
</head>
<body>
 <?php 
session_start();
if ($_SESSION['alunoNiveisAcessoId'] == "1"){     
    echo "<nav class='navbar navbar-default navbar-fixed-top' role='navigation'>";
    echo "<div class='container-fluid'>";
    echo "<div class='navbar-header'>";
         echo "<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>";
         echo "<span class='sr-only'>Toggle navigation</span>";
         echo "<span class='icon-bar'></span>";
         echo "<span class='icon-bar'></span>";
         echo "<span class='icon-bar'></span>";
         echo "</button>";
		 echo "<a href='".BASEURL."boletim' class='navbar-brand'><img alt='Brand' src='".BASEURL."img/boletim.png' width='30px'></a>";
         echo "</div>";
         echo "<div id='navbar' class='navbar-collapse collapse'>";
         echo "<ul class='nav navbar-nav'>";     
		 
			  echo "<li class='dropdown'>";
              echo "<a href='".BASEURL."boletim'>";
              echo "Página Inicial";
              echo "</a>";
              echo "</li>"; 

			  echo "<li class='dropdown'>";
              echo "<a href='".BASEURL."boletim/boletim.php'>";
              echo "Boletim";
              echo "</a>";
              echo "</li>";  
			  
			  }else if ($_SESSION['professorNiveisAcessoId'] == "2"){
    echo "<nav class='navbar navbar-default navbar-fixed-top' role='navigation'>";
    echo "<div class='container-fluid'>";
    echo "<div class='navbar-header'>";
         echo "<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>";
         echo "<span class='sr-only'>Toggle navigation</span>";
         echo "<span class='icon-bar'></span>";
         echo "<span class='icon-bar'></span>";
         echo "<span class='icon-bar'></span>";
         echo "</button>";
		 echo "<a href='".BASEURL."notas' class='navbar-brand'><img alt='Brand' src='".BASEURL."img/boletim.png' width='30px'></a>";
         echo "</div>";
         echo "<div id='navbar' class='navbar-collapse collapse'>";
         echo "<ul class='nav navbar-nav'>";     
		 
			  echo "<li class='dropdown'>";
              echo "<a href='".BASEURL."notas'>";
              echo "Página Inicial";
              echo "</a>";
              echo "</li>"; 

			  echo "<li class='dropdown'>";
              echo "<a href='".BASEURL."sair_professor.php'>";
              echo "Sair";
              echo "</a>";
              echo "</li>"; 	
			} else if ($_SESSION['adminNiveisAcessoId'] == "3"){
    echo "<nav class='navbar navbar-default navbar-fixed-top' role='navigation'>";
    echo "<div class='container-fluid'>";
    echo "<div class='navbar-header'>";
         echo "<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>";
         echo "<span class='sr-only'>Toggle navigation</span>";
         echo "<span class='icon-bar'></span>";
         echo "<span class='icon-bar'></span>";
         echo "<span class='icon-bar'></span>";
         echo "</button>";
		 echo "<a href='".BASEURL."admin' class='navbar-brand'><img alt='Brand' src='".BASEURL."img/boletim.png' width='30px'></a>";
         echo "</div>";
         echo "<div id='navbar' class='navbar-collapse collapse'>";
         echo "<ul class='nav navbar-nav'>";    
 
         echo "<li><a href='".BASEURL."alunos'>Alunos</a></li>";
		 echo "<li><a href='".BASEURL."professores'>Professores</a></li>";
		 echo "<li><a href='".BASEURL."materias'>Materias</a></li>";
		 echo "<li><a href='".BASEURL."notas/notas.php'>Notas</a></li>";	 

			} else 
				echo "sem resultados para nav bar";
		
			  ?> 		  
           <!-- <li class="dropdown">
                <a href="<?php echo BASEURL; ?>professor">
                    Area do Professor
                </a>
            </li>            
          
			<li class="dropdown">
                <a href="<?php echo BASEURL; ?>materias">
                    Materias
                </a>
            </li>
		    <li class="dropdown">
                <a href="<?php echo BASEURL; ?>alunos">
                    Alunos
                </a>
            </li>-->

          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <main class="container">