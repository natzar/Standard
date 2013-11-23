<!DOCTYPE html>
<html>
	<head>
		<title><?= $base_title ?> | BackOffice </title>
		<meta name="title" content="BackOffice">
	    <meta name="author" content="Php Ninja">
		<meta name="description" content="BackOffice">

		<meta charset="utf-8">
		<base href="<?= $base_url ?>admin/" content="<?= $base_url ?>admin/">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	   	<link href="views/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	   	<link href="views/vendor/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	 
	   	<link href="views/css/main.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="views/vendor/jQuery-ui-1.8.16/themes/base/jquery.ui.all.css">
	 	<script src="views/js/jquery.js"></script>	

		<script src="views/vendor/jQuery-ui-1.8.16/minified/jquery.ui.core.min.js"></script>
		<script src="views/vendor/jQuery-ui-1.8.16/minified/jquery.ui.widget.min.js"></script>
		<script src="views/vendor/jQuery-ui-1.8.16/minified/jquery.ui.mouse.min.js"></script>
		<script src="views/vendor/jQuery-ui-1.8.16/minified/jquery.ui.datepicker.min.js"></script>
		<script src="views/vendor/jQuery-ui-1.8.16/minified/jquery.ui.sortable.min.js"></script>
		<script src="views/vendor/jQuery-ui-1.8.16/i18n/jquery.ui.datepicker-es.js"></script>
		<script src="views/vendor/jQuery-ui-1.8.16/jquery.timepicker.js"></script>
		
	<script type="text/javascript" src="views/vendor/tiny_mce2/tiny_mce_src.js"></script>

		<script>
		var BASE_URL = '<?= $base_url ?>admin/';
		</SCRIPT>
		<script type="text/javascript" src="views/js/functions.js"></script>
		<script src="views/js/pagination3.js"></script>
		
	</head>
	<?php flush(); ?>
	<body>
	<div id="overlay" style="display:none;">Please wait ...</div>
  <div class="navbar  navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><?= $base_title ?></a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
             <i class="icon-user"></i> admin 
            </p>
            <ul class="nav">

              <li><a href="<?= $base_url ?>../">Ir a la página</a></li>
            <li><a href="login/logout">Cerrar Sesión</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	<div class="container-fluid">
		
   


	<div class="row-fluid">
    <div class="span2">
          <div class="well-small sidebar-nav" style="padding:1px">
            <ul class="nav nav-list">

	<li class="nav-header">BLOG</li>
<li><a href="show/table/blogcategorys">Categorias</a></li>
<li><a href="show/table/blog">Artículos</a></li>


<li class="nav-header">CONTENIDOS</li>

<li><a href="show/table/contenidossubcategorys">Subcategorias</a></li>	
<li><a href="show/table/contenidos">Contenidos</a></li>
<li><a href="show/table/personajes">Personajes</a></li>




						 
		

			
         

          </ul>
         

          </div><!--/.well -->
        </div><!--/span-->
	
		<div  id="main" class="span10" >
