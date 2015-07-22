<? if (isset($HOOK_TOP)) echo $HOOK_TOP; ?>
<? if (isset($_GET['i']) and $_GET['i'] == 'success'): ?>
	<div class="alert alert-success">
		<a class="close" data-dismiss='alert'>&times;</a>
		<strong>OK</strong> <?= $notification ?>
	</div>	
<? endif; ?>

          <h1 class="page-header"><?= ucfirst($table_label)?></h1>
<? if (isset($_SESSION['errors']) and !empty($_SESSION['errors'])): ?>
<div id="errors" class="alert alert-success">    <?= $_SESSION['errors'] ?>     </div>
<? 
unset($_SESSION['errors']);
endif; ?>
         
<a class="btn btn-success" style="display:inline-block"  href="admin/form/<?= $table ?>"><i class="glyphicon glyphicon-floppy-open"></i> <?=ADDNEW?></a>

<a class="btn btn-primary" style="display:inline-block;"  href="admin/search/<?= $table ?>"><i class="glyphicon glyphicon-search"></i> <?=SEARCH?></a>

<a class="" style="display:inline-block;"  href="javascript: deleteRegistros();"><i class="glyphicon glyphicon-remove"></i> Delete Selected</a>
<br><br>


<div style="clear:both;">
<? if (count($items) > 0): ?>
    <table class='table  table-hover table-striped tablaMain' data-table="<?= $table ?>" id='tabla_0'  border="0" >
        <thead>
            <tr>
            <th></th>
         	<?	foreach ($items_head as $item): ?>
            	<th nowrap><?= ucfirst($item) ?>	</th>		 
            <? endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <? $itemsTotal =count($items);
            $table_no_prefix = str_replace($config->get('db_prefix'),"",$table);
                for($i=0;$i<$itemsTotal;$i++):   ?>
                   <tr id="recordsArray_<?= $items[$i][$table_no_prefix.'Id']?>">
<td width="10"><input type="checkbox" name="selected_rows[]" value="recordsArray_<?= $items[$i][str_replace($config->get('db_prefix'),"",$table).'Id']?>"></td>


                <?    $row = $items[$i]; 
                $j = 0;
                		foreach ($row as  $cell): 
                		if ($j > 0):
                                if ($j == 1):?>
                                <td><a href="admin/form/<?= $table ?>/<?= $items[$i][str_replace($config->get('db_prefix'),"",$table).'Id']?>"><?= $cell ?></a> </td>
                                <? else: ?>
                        <td>  <?= $cell;?></td>
                        <? endif; ?>
                    <? 
                    endif;
                    $j++;
                    endforeach; ?>

                    </tr>
            
            <? endfor; ?>
	   </tbody>
    </table>
    
     <hr>
    <?
    if ($OFFSET > 0): ?>
    	<a  href="?<?= $_SERVER['QUERY_STRING'] ?>&offset=<?= $OFFSET - $PERPAGE ?>"><< Página Anterior</a> |
    <? endif; ?>
    <? if (count($items) == 18 ): ?>
    	<a  href="?<?= $_SERVER['QUERY_STRING'] ?>&offset=<?= $OFFSET + $PERPAGE ?>">Página Siguiente >></a>
    	<? endif; ?>
<br><br>

</div>		
<? else: ?>

    <div style="clear:both;"></div><div class="alert alert-info"> <?= $table_label.' '.NODATA?></div>
    
<? endif; ?>

<? if(!empty($HOOK_FOOTER)) echo $HOOK_FOOTER; ?>
