<? if (isset($HOOK_TOP)) echo $HOOK_TOP; ?>
<? if (isset($_GET['i']) and $_GET['i'] == 'success'): ?>
	<div class="alert alert-success">
		<a class="close" data-dismiss='alert'>&times;</a>
		<strong>OK</strong> <?= $notification ?>
	</div>	
<? endif; ?>


<h2><?= ucfirst($table_label)?></h2>

<a class="btn btn-success" style="float:left;clear:both;"  href="form/build/<?= $table ?>"><i class="icon-plus"></i> <?=ADDNEW?></a><input class="" placeholder="<?= SEARCH ?>" style="float:left;margin-left:14px" type="text" class="search_pagination" value="">



<div>
<? if (count($items) > 0): ?>
    <table class='table table-striped tablaMain' data-table="<?= $table ?>" id='tabla_0'  border="0" >
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
				<a alt='edit' title='edit' href='form/build/<?= $table ?>/<?= $items[$i][$table.'Id']?>'><img src='views/img/pen_12x12.png'></a> &nbsp;&nbsp;
				<? if ($table != 'home_modules'): ?>
				<a alt='delete' title='delete' href="javascript: DeleteRegistro('recordsArray_<?= $items[$i][$table.'Id']?>','<?= $items[$i][$table.'Id']?>','','<?= $table ?>');"><img src='views/img/x_11x11.png'></a><? endif; ?></td>
                    </tr>
            
            <? endfor; ?>
	   </tbody>
    </table>
</div>		
<? else: ?>

    <div style="clear:both;"></div><div class="alert alert-info"> <?= $table_label.' '.NODATA?></div>
    
<? endif; ?>

<? if(!empty($HOOK_FOOTER)) echo $HOOK_FOOTER; ?>
