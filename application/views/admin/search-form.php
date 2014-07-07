<form class='form' id="form21" name="form21" action="show/search" method="POST" enctype="multipart/form-data">
<div class="row-fluid">
<h2><?= ucfirst($table_label)?> <small>Buscar</small></h2>

	    <a href='javascript: history.back(-1);' class='btn'><i class='icon-arrow-left'></i> <?= GOBACK?></a>
    	&nbsp;&nbsp;
	<input class='btn btn-success' onclick="check_form_values(this.form);" type="button" value="<?= SEARCH ?>">
<br><br>
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
	    <a href='javascript: history.back(-1);' class='btn'><i class='icon-arrow-left'></i> <?= GOBACK?></a>

    	&nbsp;&nbsp;
	<input class='btn btn-success' onclick="check_form_values(this.form);" type="submit" value="<?= SEARCH?>">
	</div>
	</fieldset>
</form>
</div>