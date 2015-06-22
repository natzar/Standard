
<? if (isset($HOOK_TOP)) echo $HOOK_TOP; ?>
<? if (isset($_GET['i']) and $_GET['i'] == 'success'): ?>
	<div class="alert alert-success">
		<a class="close" data-dismiss='alert'>&times;</a>
		<strong>OK</strong> <?= $notification ?>
	</div>	
<? endif; ?>


<h2><?= ucfirst($table_label)?> <small></small></h2>



<div style="clear:both;"></div>
   <a    href='show/abouts/about' class='btn'><i class='icon-arrow-left'></i> <?= GOBACK?></a>
 <a    href='form/build/about/<?=$_SESSION['about_pagesId']?>' class='btn btn-primary'>Edit <?= ucfirst($table_label)?></a>

 
 
<h2>Modules</h2>

<a class="btn btn-success" style="float:left;clear:both;"  href="form/build/about_pages_moduls"><i class="icon-plus"></i> <?=ADDNEW?></a><input  placeholder="<?= SEARCH ?>" style="float:left;margin-left:14px" type="text" class="search_pagination" value="">
    
        <? if(count($table_pages)> 0): ?>
    <table class='table table-striped table-bordered tablaMain'   border="0" >
        <thead>
            <tr>
			
         	<?	foreach ($items_head_pages as $item):
          ?>
            	<th nowrap><?= formatear_primera_may($item) ?>	</th>		 
            <? 
           		
            endforeach; ?>
            <th class="nover" nowrap=nowrap width="60"><?=ACTIONS ?></th></tr>
        </thead>
        <tbody>
            <? $itemsTotal =count($table_pages);

                for($i=0;$i<$itemsTotal;$i++):   ?>
                   <tr id="ip-recordsArray_<?= $table_pages[$i]['id']?>">
                <?    $row = $table_pages[$i]; 
               
$j =0;
                		foreach ($row as  $k => $cell):             if ($j >0):    ?>

                        <td>  <?= $cell;?></td>

<? endif;
$j++;

                    endforeach; ?>
                    <td class="actions" align="center" nowrap>
				<a alt='edit' title='edit' href='form/build/about_pages_moduls/<?= $table_pages[$i]['id']?>'><img src='views/img/pen_12x12.png'></a> &nbsp;&nbsp;
				<a alt='delete' title='delete' href="javascript: DeleteRegistro('ip-recordsArray_<?= $table_pages[$i]['id']?>','<?= $table_pages[$i]['id']?>','','about_pages_moduls');"><img src='views/img/x_11x11.png'></a></td>
                    </tr>
            
            <? endfor; ?>
	   </tbody>
    </table>
    
    <? else: ?>

    <div style="clear:both;"></div><div class="alert alert-info"> <?= $table_label.' '.NODATA?></div>
    
<? endif; ?>
    <? if(!empty($HOOK_FOOTER)) echo $HOOK_FOOTER; ?>



    <script>
   $('.nav-tabs li a').click(function (e) {
  e.preventDefault();

})
    </script>