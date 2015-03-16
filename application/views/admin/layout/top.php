<!DOCTYPE html>
<html>
	<head>
		<title><?= $base_title ?> | BackOffice </title>
		<meta name="title" content="BackOffice">
	    <meta name="author" content="Php Ninja">
		<meta name="description" content="BackOffice">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta charset='utf-8'>	 
		<base href="<?= $base_url ?>" content="<?= $base_url ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	   	<link href="public/vendor/bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	   	<link href="public/vendor/bootstrap-3.3.2-dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
	 
	   	<link href="public/admin/admin.css" rel="stylesheet" type="text/css" />
	<!-- 	<link rel="stylesheet" href="public/vendor/jQuery-ui-1.8.16/themes/base/jquery.ui.all.css"> -->

		<!-- PLUGINS -->
	   	<link href="public/vendor/bootstrap-datepicker/css/datepicker.css"></script>   	

		<script>
		var BASE_URL = '<?= $base_url ?>';
		</SCRIPT>

		
	</head>
	<?php flush(); ?>
	<body>
	<div id="overlay" style="display:none;">Por favor espera ...</div>
	
	 <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-paperclip"></i> <?= $base_title ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">

            <li><a href="<?= $base_url ?>../"><i class="glyphicon glyphicon-eye-open"></i> Ir a la página</a></li>
            <li><a href="admin/login/logout"><i class="glyphicon glyphicon-lamp"></i> Cerrar Sesión</a></li>

          </ul>

            
             
        </div>
      </div>
    </nav>
    
    
      
	<div class="container-fluid">
		
   


	<div class="row">
  <div class="col-sm-3 col-md-2 sidebar">
          <ul class="list-group nav nav-sidebar">

        		<? include "menu.php"; ?>          
          </ul>
          </div>

        </div><!--/span-->
	
	<div  class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

          
	
