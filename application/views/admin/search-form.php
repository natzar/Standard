 <h1 class="page-header"><?= ucfirst($table_label)?> <small>Buscar</small></h1>
<form class='form' id="form21" name="form21" action="admin/searchResults" method="POST" enctype="multipart/form-data">
<div class="row-fluid">


   <a href='javascript: history.back(-1);' class='btn btn-primary'><i class="glyphicon glyphicon-arrow-left"></i> <?= GOBACK?></a>
	<button class='btn btn-success' onclick="check_form_values(this.form);" type="button"><i class="glyphicon glyphicon-search"></i> <?= SEARCH ?></button>

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
	<hr>
   <a href='javascript: history.back(-1);' class='btn btn-primary'><i class="glyphicon glyphicon-arrow-left"></i> <?= GOBACK?></a>
	<button class='btn btn-success' onclick="check_form_values(this.form);" type="button"><i class="glyphicon glyphicon-search"></i> <?= SEARCH ?></button>
	
		</fieldset>
</form>
</div>