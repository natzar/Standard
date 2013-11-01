<div id="content-header">
			<h1><?= ucfirst($table_label)?></h1>
		</div> <!-- #content-header -->	


		<div id="content-container">
		
<? if (isset($HOOK_TOP)) echo $HOOK_TOP; ?>
<? if (isset($_GET['i']) and $_GET['i'] == 'success'): ?>
	<div class="alert alert-success">
		<a class="close" data-dismiss='alert'>&times;</a>
		<strong>OK</strong> <?= $notification ?>
	</div>	
<? endif; ?>




<a class="btn btn-success" style="float:left;clear:both;"  href="form/build/<?= $table ?>"><i class="icon-plus"></i> <?=ADDNEW?></a><input class="" placeholder="<?= SEARCH ?>" style="float:left;margin-left:14px" type="text" class="search_pagination" value="">





									
<? if (count($items) > 0): ?>
<div class="table-responsive">


							<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper"  role="grid">
    <table class="table table-striped table-bordered table-hover table-highlight table-checkable " data-provide="datatable" data-display-rows="10" data-info="true" data-search="true" data-length-change="true" data-paginate="true" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" data-table="<?= $table ?>" >
        <thead>
            <tr>
<th class="checkbox-column">
												<input type="checkbox" class="icheck-input">
											</th>
         	<?	foreach ($items_head as $item): ?>
            	<th data-filterable="true" data-sortable="true" data-direction="desc" ><?= ucfirst($item) ?>	</th>		 
            <? endforeach; ?>
            <th class="nover" nowrap=nowrap width="60"><?=ACTIONS ?></th></tr>
        </thead>
        <tbody>
      
									<tbody>
										<tr>
											
											
											
            <? $itemsTotal =count($items);
                for($i=0;$i<$itemsTotal;$i++):   ?>
                   <tr id="recordsArray_<?= $items[$i][$table.'Id']?>">
                   
<td class="checkbox-column">
												<input type="checkbox" class="icheck-input">
											</td>
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
    
</div>		
<? else: ?>

    <div style="clear:both;"></div><div class="alert alert-info"> <?= $table_label.' '.NODATA?></div>
    
<? endif; ?>

<? if(!empty($HOOK_FOOTER)) echo $HOOK_FOOTER; ?>
