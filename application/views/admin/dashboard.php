<h1 class="page-header">Dashboard</h1>
<? $nothing_to_show = true; ?>
<? if (isset($_SESSION['errors']) and !empty($_SESSION['errors'])): ?>
<div id="errors" class="alert alert-success">    <?= $_SESSION['errors'] ?>     </div>
<? 
unset($_SESSION['errors']);
endif; ?>



<?	if (!is_writable($config->get('path')."/application/views/admin/layout") and !is_file($config->get('path')."/application/views/admin/layout/menu.php")): 	$nothing_to_show = false;?>

 <div class="alert alert-info" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
       No se puede crear archivo menu.php para admin automáticamente. Permisos 777 en carpeta /application/views/admin/layout. 
    </div>
<? elseif (is_writable($config->get('path')."/application/views/admin/layout") and is_file($config->get('path')."/application/views/admin/layout/menu.php")): ?>

     <div class="alert alert-danger alert-error" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
      Sacar permisos de escritura en la carpeta /application/views/admin/layout. El archivo menu.php ya existe.
    </div>
<? endif; ?>

<?	if (!$config->get('developer_mode') and is_dir($config->get('path')."/tools")): 	$nothing_to_show = false;?>

  <div class="alert alert-info" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Atención:</span>
Mejor eliminar la carpeta /tools si ya has terminado instalacion
</div>

 <? endif; ?>

<?	if (!is_writable($config->get('path')."/data")): 	$nothing_to_show = false;?>
  <div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  /data/ debe teener permisos 777 
	</div>	
<? endif; ?>

<?	if (!is_writable($config->get('path')."/data/img")): 	$nothing_to_show = false;?>
  <div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  /data/img debe teener permisos 777 
	</div>	
<? endif; ?>

<?	if (!is_writable($config->get('path')."/data/img/thumbs")): 	$nothing_to_show = false;?>
  <div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  /data/img/thumbs debe teener permisos 777 
	</div>	
<? endif; ?>

<?	if (!is_writable($config->get('path')."/data/img/raw")): 	$nothing_to_show = false;?>
  <div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  /data/img/raw debe teener permisos 777 
	</div>	
<? endif; ?>

<?	if (!is_writable($config->get('path')."/data/img/mids")): 	$nothing_to_show = false;?>
  <div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  /data/img/mids debe teener permisos 777 
	</div>	
<? endif; ?>

	
	

<? if ($config->get('developer_mode')): 
	$nothing_to_show = false;
?>
  
  <div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Atención:</span>
Developer mode está activado en config.php
</div>

<div class="panel panel-info">
<div class="panel-heading">
Developer Mode. A sus pies Sr. Programador
</div>

<div class="panel-body">
<div class="alert alert-info" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Atención:</span>
Developer mode está activado en config.php
</div>




<div class="row">
<div class="col-lg-6">
	Standart Version: <?= $config->get('version') ?> @ <?= $config->get('updated'); ?><br>
	Php Version: <?= phpversion() ?><br>
	POST_MAX: <?= ini_get('post_max_size')  ?><br>
	Memory Limit: <?= ini_get('memory_limit')  ?><br>
</div>
<div class="col-lg-6">
<strong>Herramientas</strong><br>
Make Setups se hace automático<br>
	 <a href="admin/tools/filldb" class="btn btn-info">Fill db with fake data</a>
	<a href="admin/tools/makemodels" class="btn btn-success">Make Models, Controllers, Forms and Views</a>
		
</div>
	</div>

	
<? if (!is_writable($config->get('path')."/setup")): ?>	  
  <div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  /setup/ debe teener permisos 777 para que funcione Make Setups
	</div>
  <? endif; ?>
  
	
	
	

</div>
</div>
<? endif; ?>

  <? if ($config->get('validUser') == 'test' and $config->get('validPass') == 'test'): 
  $nothing_to_show = false;
  ?>
  
  <div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  Por favor, cambia el password en config.php
	</div>
  <? endif; ?>
  <? if ($nothing_to_show): ?>
    <div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">¡Genial!:</span>
	Todo al día, bien configurado y funcionando
</div>
<? endif; ?>



