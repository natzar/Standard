          <h1 class="page-header"><?= ucfirst($table_label)?> <small><? if ($rid != -1) echo 'Editar'; else echo 'Añadir'; ?></small></h1>
          

<form class='form' id="form21" name="form21" action="form/update" method="POST" enctype="multipart/form-data">
<div class="row-fluid">


	    <a href='javascript: history.back(-1);' class='btn btn-primary'><i class="glyphicon glyphicon-arrow-left"></i> <?= GOBACK?></a>
    	&nbsp;&nbsp;
	<button class='btn btn-success' onclick="check_form_values(this.form);" type="button"><i class="glyphicon glyphicon-ok"></i> <?= SAVEANDBACK?></button>
<br><br>
	</div>
<div class="row-fluid">
	   <fieldset>	


			
		<?= $form ?>


	<input type="hidden" name="table" value="<?= $table ?>">
	<input type="hidden" name="op" value='<?=$op?>'>
	<input type="hidden" name="rid" value="<?= $rid ?>">
<hr>
   <a href='javascript: history.back(-1);' class='btn btn-primary'><i class="glyphicon glyphicon-arrow-left"></i> <?= GOBACK?></a>
    	&nbsp;&nbsp;
	<button class='btn btn-success' onclick="check_form_values(this.form);" type="button"><i class="glyphicon glyphicon-ok"></i> <?= SAVEANDBACK?></button>
		</fieldset>
</form>
</div>