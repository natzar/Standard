
<? if (isset($HOOK_TOP)) echo $HOOK_TOP; ?>
<? if (isset($_GET['i']) and $_GET['i'] == 'success'): ?>
	<div class="alert alert-success">
		<a class="close" data-dismiss='alert'>&times;</a>
		<strong>OK</strong> <?= $notification ?>
	</div>	
<? endif; ?>


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
        <li><a href="#" class="active"><?= $table_label ?></a> </li>
      </ul>
   <div class="page-title"> <i class="icon-custom-left"></i>
        <h3><?= $table_label ?> </h3>
      </div>
      <div class="row-fluid">
        <div class="span12">
          <div class="grid simple ">
            <div class="grid-title">
            
    
<!--

<a class="btn btn-warning" style="display:inline-block;"  href="form/import/<?= $table ?>"><i class="icon-search"></i> Importar</a>


-->

          <a class="btn btn-cons btn-primary" href="admin/form/<?= $table ?>"><i class="fa fa-cloud-upload"></i> <?=ADDNEW?></a>
                                       
            </div>
            <div class="grid-body ">
            
            <? if (count($items) > 0): ?>
              <table  data-table="<?= $table ?>" class="table table-hover table-condensed" id="example">
                <thead>
                
                  <tr>
                  
           

<!--

 <th style="width:1%"><div class="checkbox check-default" style="margin-right:auto;margin-left:auto;">
                        <input type="checkbox" value="1" id="checkbox1">
                        <label for="checkbox1"></label>
                      </div></th>
-->


                  <?	foreach ($items_head as $item): ?>
            	<th nowrap><?= ucfirst(strip_tags(preg_replace("/<h2>(.*)<\/h2>/","",$item))) ?>	</th>		 
            <? endforeach; ?>
            <th class="nover" nowrap=nowrap width="60"><?=ACTIONS ?></th></tr>
            
                                    </tr>
                </thead>
                <tbody>
                
                    <? $itemsTotal =count($items);
                for($i=0;$i<$itemsTotal;$i++):   ?>
                   <tr id="recordsArray_<?= $items[$i][$table.'Id']?>">
<!-- <td><input type="checkbox"></td> -->
                <!--
    <td class="v-align-middle"><div class="checkbox check-default">
                        <input type="checkbox" value="3" id="checkbox<?=$i?>">
                        <label for="checkbox<?=$i?>"></label>
                      </div></td>
-->

                <?    $row = $items[$i]; 
                $j = 0;
                		foreach ($row as  $cell): 
                		if ($j > 0):?>

                        <td class="v-align-middle">  <?= $cell;?></td>

                    <? 
                    endif;
                    $j++;
                    endforeach; ?>
                    <td class="actions" align="center" nowrap>
				<a alt='edit' title='edit' href='admin/form/<?= $table ?>/<?= $items[$i][$table.'Id']?>'><img src='public/img/admin/pen_12x12.png'></a> &nbsp;&nbsp;
				<? if ($table != 'home_modules'): ?>
				<a alt='delete' title='delete' href="javascript: DeleteRegistro('recordsArray_<?= $items[$i][$table.'Id']?>','<?= $items[$i][$table.'Id']?>','','<?= $table ?>');"><img src='public/img/admin/x_11x11.png'></a><? endif; ?></td>
                    </tr>
            
            <? endfor; ?>
                             </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
     
     
     
                 </div>
          </div>
        </div>
      </div>
    </div>
   
     
   

<? else: ?>

    <div style="clear:both;"></div><div class="alert alert-info"> <?= $table_label.' '.NODATA?></div>
    
<? endif; ?>

<? if(!empty($HOOK_FOOTER)) echo $HOOK_FOOTER; ?>

