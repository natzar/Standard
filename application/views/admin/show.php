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

<br><br>


<div style="clear:both;">
<? if (count($items) > 0): ?>
    <table class='table table-bordered table-hover table-striped tablaMain' data-table="<?= $table ?>" id='tabla_0'  border="0" >
        <thead>
            <tr>

         	<?	foreach ($items_head as $item): ?>
            	<th nowrap><?= ucfirst($item) ?>	</th>		 
            <? endforeach; ?>
            <th class="nover" nowrap=nowrap width="60"><?=ACTIONS ?></th></tr>
        </thead>
        <tbody>
            <? $itemsTotal =count($items);
                for($i=0;$i<$itemsTotal;$i++):   ?>
                   <tr id="recordsArray_<?= $items[$i][$table.'Id']?>">

                <?    $row = $items[$i]; 
                $j = 0;
                		foreach ($row as  $cell): 
                		if ($j > 0):?>

                        <td>  <?= $cell;?></td>

                    <? 
                    endif;
                    $j++;
                    endforeach; ?>
                    <td class="actions" align="center" nowrap>
				<a alt='edit' title='edit' href='admin/form/<?= $table ?>/<?= $items[$i][$table.'Id']?>'><img src='public/admin/img/pen_12x12.png'></a> &nbsp;&nbsp;
				<? if ($table != 'home_modules'): ?>
				<a alt='delete' title='delete' href="javascript: DeleteRegistro('recordsArray_<?= $items[$i][$table.'Id']?>','<?= $items[$i][$table.'Id']?>','','<?= $table ?>');"><img src='public/admin/img/x_11x11.png'></a><? endif; ?></td>
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
