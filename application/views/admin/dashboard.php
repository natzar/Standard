

      
                <h1 class="page-header">Dashboard</h1>

  
<div class="panel panel-info">
<div class="panel-heading">
<i class="glyphicon glyphicon-time"></i> <?= Date("H:i\h d/m/Y") ?>
</div>

<div class="panel-body">

    <div class="alert alert-success" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Success:</span>
	All systems are ready
</div>

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


  
<div class="panel panel-info">
<div class="panel-heading">
Información del sistema
</div>

<div class="panel-body">

	Version:<br>
	POST_MAX:<br>
	Memory Limit<br>
	Mysql Version:
	<hr>
	Permisos de escritura
<h2>Herramientas</h2>
		<a href="index.php?action=makesetups&table=all" class="btn btn-primary">MakeSetups</a>

 <a href="index.php?action=filldb" class="btn btn-info">Fill db with fake data</a>

 
	<a href="index.php?action=makemodels" class="btn btn-success">Make Models, Controllers, Forms and Views</a>
		
</div>
</div>