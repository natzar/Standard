<div class="row"><ul class="breadcrumbs">
  <li><a href="table/<?= $table ?>"><?= ucfirst($table_label)?></a></li>
  <li class="current"><a href="#"><? if ($rid != -1) echo EDIT; else echo ADDNEW; ?></a></li>
<!--
  <li class="unavailable"><a href="#">Gene Splicing</a></li>
  <li class="current"><a href="#">Cloning</a></li>
-->
</ul>
</div>
<form class='form' id="form21" name="form21" action="admin/update" method="POST" enctype="multipart/form-data">
<div class="row-fluid">


	    <a href='javascript: history.back(-1);' class='button'><i class='icon-arrow-left'></i> <?= GOBACK?></a>
    	&nbsp;&nbsp;
	<input class='button button-success' onclick="check_form_values(this.form);" type="button" value="<?= SAVEANDBACK?>">

	</div>
<div class="row-fluid">



			
		<?= $form ?>


	<input type="hidden" name="table" value="<?= $table ?>">
	<input type="hidden" name="op" value='<?=$op?>'>
	<input type="hidden" name="rid" value="<?= $rid ?>">
	<div class='control-group'><label>&nbsp;</label><div class='controls'>
	    <a href='javascript: history.back(-1);' class='button'><i class='icon-arrow-left'></i> <?= GOBACK?></a>

    	&nbsp;&nbsp;
	<input class='button button-success' onclick="check_form_values(this.form);" type="button" value="<?= SAVEANDBACK?>">
	</div>

</form>
</div>