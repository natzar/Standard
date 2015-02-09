
<? if (isset($HOOK_TOP)) echo $HOOK_TOP; ?>
<? if (isset($_GET['i']) and $_GET['i'] == 'success'): ?>
	<div class="alert alert-success">
		<a class="close" data-dismiss='alert'>&times;</a>
		<strong>OK</strong> <?= $notification ?>
	</div>	
<? endif; ?>


<br>

<a class="button btn-success" style="float:left;clear:both;"  href="admin/form/<?= $table ?>"><i class="icon-plus"></i> <?=ADDNEW?></a>
<a class="button button [secondary success alert]" style="display:inline-block;"  href="admin/search/<?= $table ?>"><i class="icon-search"></i> <?=SEARCH?></a>



<!--

<a class="btn btn-warning" style="display:inline-block;"  href="form/import/<?= $table ?>"><i class="icon-search"></i> Importar</a>
-->




<div style="clear:both;">
<? if (count($items) > 0): ?>


<ul class="large-block-grid-5">

  

            <? $itemsTotal =count($items);
                for($i=0;$i<$itemsTotal;$i++):   ?>

				
				  <li id="recordsArray_<?= $items[$i][$table.'Id']?>"><div class="panel callout radius">




                <?    $row = $items[$i];?>
                <?= Date("d/m/Y", strtotime($row[0]) )?> | <?= $row[3] ?>
                <hr> 
				
             	
             	<p><?= $row[1] ?></p>
             	<p>Prioridad: <?= $row[2] ?></p>
				<hr>
				<a alt='edit' title='edit' href='admin/form/<?= $table ?>/<?= $items[$i][$table.'Id']?>'><img src='public/img/admin/pen_12x12.png'></a> &nbsp;&nbsp;
				<? if ($table != 'home_modules'): ?>
				<a alt='delete' title='delete' href="javascript: DeleteRegistro('recordsArray_<?= $items[$i][$table.'Id']?>','<?= $items[$i][$table.'Id']?>','','<?= $table ?>');"><img src='public/img/admin/x_11x11.png'></a><? endif; ?>
</div>
            </li>
            <? endfor; ?>
</ul>

    
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


