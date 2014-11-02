<!DOCTYPE html>
<html>
	<head>
		<title><?= $base_title ?> | BackOffice </title>
		<meta name="title" content="BackOffice">
	    <meta name="author" content="96Levels">
		<meta name="description" content=" <?= $base_title ?>  BackOffice">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta charset='utf-8'>
		<base href="<?= $base_url ?>" content="<?= $base_url ?>">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	   	<link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	   	<link href="public/vendor/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	 
	   	<link href="public/css/admin/admin.css" rel="stylesheet" type="text/css" />
<!-- 		<link rel="stylesheet" href="public/vendor/jQuery-ui-1.8.16/themes/base/jquery.ui.all.css"> -->
	   	<link href="http://code.jquery.com/ui/1.8.16/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
	 	<script src="public/js/jquery.js"></script>	
		<script src="public/js/dataTable.js"></script>		
		<script src="http://code.jquery.com/ui/1.8.16/jquery-ui.min.js"></script>
<!--
		<script src="public/vendor/jQuery-ui-1.8.16/minified/jquery.ui.core.min.js"></script>
		<script src="public/vendor/jQuery-ui-1.8.16/minified/jquery.ui.widget.min.js"></script>
		<script src="public/vendor/jQuery-ui-1.8.16/minified/jquery.ui.mouse.min.js"></script>
		<script src="public/vendor/jQuery-ui-1.8.16/minified/jquery.ui.datepicker.min.js"></script>
		<script src="public/vendor/jQuery-ui-1.8.16/minified/jquery.ui.sortable.min.js"></script>
-->
<!--		<script src="public/vendor/jQuery-ui-1.8.16/i18n/jquery.ui.datepicker-es.js"></script>
 		<script src="public/vendor/jQuery-ui-1.8.16/jquery.timepicker.js"></script> -->
		
		<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>

		<script>
		var BASE_URL = '<?= $base_url ?>';
		</SCRIPT>
		<script type="text/javascript" src="public/js/adminFunctions.js"></script>
		<script src="public/js/pagination3.js"></script>
		<style>#accordion2 li{list-style: none;}</style>
	</head>
	<?php flush(); ?>
	<body>
	<div id="overlay" style="display:none;">Espera ...</div>
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="admin"><strong style="color:white"><?= $base_title ?></strong> ADMIN </a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
             <i class="icon-user"></i> admin 
            </p>
            <ul class="nav">

              <li><a href="<?= $base_url ?>">Ir a la página</a></li>
            <li><a href="admin/logout">Cerrar Sesión</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	<div class="container-fluid">
	<div class="row-fluid">
    <div class="span2 new" style="">
    	<? include "menu.php"; ?>
						   
						   
						  
						   
			        <!--  icon-chevron-right -->
</div>
        
	
		<div  id="main" class="span10" >
