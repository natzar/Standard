  <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    <div class="content">
      <ul class="breadcrumb">
        <li>
          <p>ADMIN</p>
        </li>
        <li><a href="table/<?= $table ?>"><strong><?= ucfirst($table_label)?></a></strong></li>
      </ul>
      <div class="page-title"> <i class="icon-custom-left"></i>
        <h3><?= $table_label ?> - <span class="semi-bold"><? if ($rid != -1) echo EDIT; else echo ADDNEW; ?></span></h3>
      </div>
	  <!-- BEGIN BASIC FORM ELEMENTS-->
        <div class="row">
            <div class="col-md-12">
              <div class="grid simple">
                <div class="grid-title no-border">


                   
            <!--       <div class="tools"> <a href="C1E5A8A7-5BD0-4C4E-9AD8-32BD94BCEE89.html" class="collapse"></a> <a href="#grid-config" data-toggle="modal" class="config"></a> <a href="C1E5A8A7-5BD0-4C4E-9AD8-32BD94BCEE89.html" class="reload"></a> <a href="C1E5A8A7-5BD0-4C4E-9AD8-32BD94BCEE89.html" class="remove"></a> </div> -->
                </div>
                <div class="grid-body no-border"> 
                	<form class='form' id="form21" name="form21" action="admin/update" method="POST" enctype="multipart/form-data">
					<button type="button" class='btn btn-success btn-cons'  onclick="history.back(-1);" ><i class="fa fa-arrow-left fa-icon-arrow-left"></i>&nbsp; <?= GOBACK?></button>
					<button type="button" class='btn btn-primary btn-cons'  onclick="check_form_values(this.form);" ><i class="fa fa-check"></i>&nbsp; <?= SAVEANDBACK?></button>
						<hr>                
	                  <div class="row">
    	                <div class="col-md-8 col-sm-8 col-xs-8">                      			
							<?= $form ?>


	<input type="hidden" name="table" value="<?= $table ?>">
	<input type="hidden" name="op" value='<?=$op?>'>
	<input type="hidden" name="rid" value="<?= $rid ?>">
	<div class='control-group'><label>&nbsp;</label><div class='controls'>
					<button type="button" class='btn btn-success btn-cons'  onclick="history.back(-1);" ><i class="fa fa-arrow-left fa-icon-arrow-left"></i>&nbsp; <?= GOBACK?></button>
					<button type="button" class='btn btn-primary btn-cons'  onclick="check_form_values(this.form);" ><i class="fa fa-check"></i>&nbsp; <?= SAVEANDBACK?></button>

	</div>

</form>


                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
	<!-- END BASIC FORM ELEMENTS-->	 
	
	
        </div>
      </div>
      
      

