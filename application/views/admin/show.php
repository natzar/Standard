
<? if (isset($HOOK_TOP)) echo $HOOK_TOP; ?>
<? if (isset($_GET['i']) and $_GET['i'] == 'success'): ?>
	<div class="alert alert-success">
		<a class="close" data-dismiss='alert'>&times;</a>
		<strong>OK</strong> <?= $notification ?>
	</div>	
<? endif; ?>


<h2><?= ucfirst($table_label)?></h2>

<a class="btn btn-success" style="float:left;clear:both;"  href="admin/form/<?= $table ?>"><i class="icon-plus"></i> <?=ADDNEW?></a>
<input type="search" class="light-table-filter" data-table="order-table"  placeholder="<?= SEARCH ?>" style="float:left;margin-left:14px"  id="search_pagination" value="">

<a class="btn btn-primary" style="display:inline-block;"  href="admin/search/<?= $table ?>"><i class="icon-search"></i> <?=SEARCH?></a>
<!--

<a class="btn btn-warning" style="display:inline-block;"  href="form/import/<?= $table ?>"><i class="icon-search"></i> Importar</a>
-->




<div style="clear:both;">
<? if (count($items) > 0): ?>
    <table class='table table-striped tablaMain order-table' data-table="<?= $table ?>" id='tabla_0'  border="0" >
        <thead>
            <tr>
<!-- <th><input type="checkbox"></th> -->
         	<?	foreach ($items_head as $item): ?>
            	<th nowrap><?= ucfirst(strip_tags(preg_replace("/<h2>(.*)<\/h2>/","",$item))) ?>	</th>		 
            <? endforeach; ?>
            <th class="nover" nowrap=nowrap width="60"><?=ACTIONS ?></th></tr>
        </thead>
        <tbody>
            <? $itemsTotal =count($items);
                for($i=0;$i<$itemsTotal;$i++):   ?>
                   <tr id="recordsArray_<?= $items[$i][$table.'Id']?>">
<!-- <td><input type="checkbox"></td> -->
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
				<a alt='edit' title='edit' href='admin/form/<?= $table ?>/<?= $items[$i][$table.'Id']?>'><img src='public/img/admin/pen_12x12.png'></a> &nbsp;&nbsp;
				<? if ($table != 'home_modules'): ?>
				<a alt='delete' title='delete' href="javascript: DeleteRegistro('recordsArray_<?= $items[$i][$table.'Id']?>','<?= $items[$i][$table.'Id']?>','','<?= $table ?>');"><img src='public/img/admin/x_11x11.png'></a><? endif; ?></td>
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

<script>
(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
</script>
