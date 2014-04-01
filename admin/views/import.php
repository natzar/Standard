<form class='form' id="form21" name="form21" action="form/do_import" method="POST" enctype="multipart/form-data">
<div class="row-fluid">
<h2><?= ucfirst($table_label)?> <small>Importar</small></h2>


	    
	</div>
<div class="row-fluid">
	   <fieldset>	


			
		<?= $form ?>
		<? if ($form ==''): ?>
<h3>Esta tabla no permite búsquedas</h3>		
		<? endif; ?>


	<input type="hidden" name="table" value="<?= $table ?>">
	<input type="hidden" name="op" value='<?=$op?>'>
	<input type="hidden" name="rid" value="<?= $rid ?>">
	<div class='control-group'><label>&nbsp;</label><div class='controls'>
	    <a href='show/table/<?= $table ?>' class='btn'><i class='icon-arrow-left'></i> <?= GOBACK?></a>

    	&nbsp;&nbsp;
	<input class='btn btn-success' onclick="this.form.submit();" type="submit" value="<?= "Importar"?>">
	</div>
	</fieldset>
</form>
</div>