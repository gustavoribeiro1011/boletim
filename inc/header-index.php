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
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
		<a href="<?php BASEURL; ?>" class='navbar-brand'><img alt='Boletim' src="<?php BASEURL; ?>img/boletim.png" width='30px'></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="login_aluno.php">Aluno On-line</a></li>
            <li><a href="login_professor.php">Docente On-Line</a></li>
           </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <main class="container-fluid">