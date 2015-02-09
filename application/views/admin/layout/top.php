<!DOCTYPE html>
<html>
	<head>
		<title><?= $base_title ?> | Admin </title>
		<meta name="title" content="BackOffice">
	    <meta name="author" content="96Levels">
		<meta name="description" content=" <?= $base_title ?>  BackOffice">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta charset='utf-8'>
		<base href="<?= $base_url ?>" content="<?= $base_url ?>">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--
	   	<link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	   	<link href="public/vendor/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
-->
	  <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" media="screen" rel="stylesheet" />

 <link rel="stylesheet" href="public/vendor/foundation-5.4.5/css/foundation.css" />
    <script src="public/vendor/foundation-5.4.5/js/vendor/modernizr.js"></script>
	   	<link href="public/css/admin/admin.css" rel="stylesheet" type="text/css" />
<!-- 		<link rel="stylesheet" href="public/vendor/jQuery-ui-1.8.16/themes/base/jquery.ui.all.css"> -->
	   <!-- 	<link href="http://code.jquery.com/ui/1.8.16/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" /> -->
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

    
    <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="admin"><strong style="color:white"><?= $base_title ?></strong> ADMIN </a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
    <li>    <a href="<?= $base_url ?>" target="_blank">Ir a la página</a></li>
       <li><a href="admin/logout">Cerrar Sesión</a></li>
      <!-- <li class="active"><a href="#">Right Button Active</a></li> -->

     <!--
 <li class="has-dropdown">
        <a href="#">Right Button Dropdown</a>
        <ul class="dropdown">
          <li><a href="#">First link in dropdown</a></li>
          <li class="active"><a href="#">Active link in dropdown</a></li>
        </ul>
      </li>
-->
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
     <li class="has-dropdown">
		<a href="">Ventas</a>
		<ul class="dropdown">
			<li><a href="admin/table/ninja_emails">Tickets</a></li>	
			<li><a href="admin/table/ninja_emailtemplates">Templates</a></li>
			<li class="list-group"><a href="admin/table/ninja_productos">Listado precios</a></li>	
			<li class="divider"></li>				
			<li class="list-group"><a href="admin/table/ninja_clientespotenciales">Ofertas de trabajo</a></li>	
			<li class="list-group"><a href="admin/table/ninja_automatic_links">Emails Automáticos</a></li>	
		</ul>
    <li>
    
    
     <li class="has-dropdown">
        <a href="#">Administración</a>
        <ul class="dropdown">
		<li class="list-group"><a href="admin/table/ninja_clientes">Clientes</a></li>	
				<li class="divider"></li>
		<li class="list-group"><a href="admin/table/ninja_presupuestos">Presupuestos</a></li>	
		<li class="list-group"><a href="admin/table/ninja_facturas">Facturas</a></li>	
		<li class="list-group"><a href="admin/table/ninja_trimestre">Trimestre</a></li>	
		<li class="divider"></li>
		<li><a href="admin/table/ninja_gastos">Gastos</a></li>
	     </ul>
      </li>
     <li class="has-dropdown">
        <a href="#">Docs</a>
        <ul class="dropdown">
		<li class="list-group"><a href="admin/table/ninja_manualoperaciones">Manual Operaciones</a></li>	
<li class="list-group"><a href="admin/table/ninja_faq">Faq</a></li>	


	     </ul>
      </li>
       <li class="has-dropdown">
        <a href="#">Web</a>
        <ul class="dropdown">
		<li class="list-group"><a href="admin/table/ninja_proyectos">Proyectos</a></li>	        
		<li class="list-group"><a href="admin/table/ninja_blog">Blog</a></li>	        
       </ul>
      </li>
    </ul>
  </section>

</nav>


	<div class="row">
   
	
		<div  id="main" class="large-12 medium-12 columns" >
