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
	<div id="overlay" style="display:none;">Please wait ...</div>
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
    	<div class="accordion" id="accordion2">
				<div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#uno">
                      Configuración
                    </a>
	                  </div>
	                  <div id="uno" class="accordion-body in collapse">
	                    <div class="accordion-inner">
	                      <li><a href="show/table/config_meta"><i class=""></i> Configuración</a></li>
						   <li><a href="show/table/fondos"><i class=""></i> Fondos</a></li>
						   <li><a href="show/table/img_cabecera"><i class=""></i> Imagenes de Cabecera</a></li>
						   <li><a href="show/table/pictos"><i class=""></i> Pictos</a></li>
	                    </div>
	                  </div>
	                </div>
				<div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#dos">
                      Header
                    </a>
	                  </div>
	                  <div id="dos" class="accordion-body collapse">
	                    <div class="accordion-inner">
	                      <li><a href="show/table/logo"><i class=""></i> Logo</a></li>
						   <li><a href="show/table/social_media"><i class=""></i> Social Media</a></li>
						   <li><a href="show/table/menu"><i class=""></i> Menu Cabecera</a></li>
	                    </div>
	                  </div>
	                </div>
				<div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#tres">
                      Home
                    </a>
	                  </div>
	                  <div id="tres" class="accordion-body collapse">
	                    <div class="accordion-inner">
	                      <li><a href="show/table/config_slider"><i class=""></i> Configuración Slider</a></li>
						   <li><a href="show/table/slider"><i class=""></i> Slider</a></li>
						   <li><a href="show/table/destacado"><i class=""></i> Destacado en la Home</a></li>
	                    </div>
	                  </div>
	                </div>
				<div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#cuatro">
                      Productos
                    </a>
	                  </div>
	                  <div id="cuatro" class="accordion-body collapse">
	                    <div class="accordion-inner">
	                      <li><a href="show/table/categoria"><i class=""></i> Categorias Productos</a></li>
							   <li><a href="show/table/productos"><i class=""></i> Productos</a></li>
	                    </div>
	                  </div>
	                </div>
					<div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#cinco">
                      Contenido Páginas
                    </a>
                  </div>
                  <div id="cinco" class="accordion-body collapse">
                    <div class="accordion-inner">
                      	<li><a href="show/table/mundo"><i class=""></i> Mundo Vip Pets</a></li>
						   <li><a href="show/table/news"><i class=""></i> News</a></li>
						   <li><a href="show/table/padres"><i class=""></i> Padres</a></li>
						   <li><a href="show/table/peinados"><i class=""></i> Galeria</a></li>
						   <li><a href="show/table/personajes"><i class=""></i> Personajes</a></li>
						   <li><a href="show/table/tutoriales"><i class=""></i> Tutoriales</a></li>
						   <li><a href="show/table/videos"><i class=""></i> Videos</a></li>
						   <li><a href="show/table/contacto"><i class=""></i> Contacto</a></li>
						   <li><a href="show/table/footer"><i class=""></i> Footer</a></li>
                    </div>
                  </div>
						   
						   
						  
						   
			        <!--  icon-chevron-right -->
</div></div>
        </div><!--/span-->
	
		<div  id="main" class="span10" >
