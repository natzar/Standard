<h1 class="page-header">Dashboard</h1>
<? $nothing_to_show = true; ?>
<? if (isset($_SESSION['errors']) and !empty($_SESSION['errors'])): ?>
<div id="errors" class="alert alert-success">    <?= $_SESSION['errors'] ?>     </div>
<? 
unset($_SESSION['errors']);
endif; ?>
<? if ($config->get('developer_mode')): 
	$nothing_to_show = false;
?>
  
<div class="panel panel-info">
<div class="panel-heading">
Información del sistema <i class="glyphicon glyphicon-time"></i> <?= Date("H:i\h d/m/Y") ?>
</div>

<div class="panel-body">
<div class="alert alert-info" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Atención:</span>
Developer mode está activado en config.php
</div>




	Php Version: <?= phpversion() ?><br>
	POST_MAX: <?= ini_get('post_max_size')  ?><br>
	Memory Limit: <?= ini_get('memory_limit')  ?><br>
	<hr>
	
	Standart Version: <?= $config->get('version') ?> @ <?= $config->get('updated'); ?>
	
	<hr>
	Permisos de escritura
	
	/setup/: <? if (is_writable($config->get('path')."/setup")) echo "YES";else echo "NO"; ?><br>
	/data/: <? if (is_writable($config->get('path')."/data")) echo "YES";else echo "NO"; ?><br>
	/data/img: <? if (is_writable($config->get('path')."/data/img")) echo "YES";else echo "NO"; ?><br>
	/data/img/thumbs: <? if (is_writable($config->get('path')."/data/img/thumbs")) echo "YES";else echo "NO"; ?><br>
	/application/: <? if (is_writable($config->get('path')."/application/controllers")) echo "YES";else echo "NO"; ?><br>
<?	if (is_dir($config->get('path')."/tools")) echo 'Mejor eliminar la carpeta /tools si ya has terminado instalacion'; ?>
<h2>Herramientas</h2>

	 <a href="admin/tools/filldb" class="btn btn-info">Fill db with fake data</a>
	<a href="admin/tools/makemodels" class="btn btn-success">Make Models, Controllers, Forms and Views</a>
		
</div>
</div>
<? endif; ?>

  
<div class="panel panel-info">
<div class="panel-heading">
<i class="glyphicon glyphicon-time"></i> <?= Date("H:i\h d/m/Y") ?>
</div>

<div class="panel-body">
<? if ($nothing_to_show): ?>
    <div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">¡Genial!:</span>
	Todo al día, bien configurado y funcionando
</div>
<? endif; ?>
 <div class="alert alert-info" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Info:</span>
  Enter a valid email address
</div>


 
<div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  Enter a valid email address
</div>



</div>
</div>

