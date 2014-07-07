
<? if (isset($HOOK_TOP)) echo $HOOK_TOP; ?>
<? if (isset($_GET['i']) and $_GET['i'] == 'success'): ?>
	<div class="alert alert-success">
		<a class="close" data-dismiss='alert'>&times;</a>
		<strong>OK</strong> <?= $notification ?>
	</div>	
<? endif; ?>


<h2><?= ucfirst($table_label)?> <small><?= $_SESSION['course_label'] ?></small></h2>



<div style="clear:both;"></div>

 <ul class="nav nav-tabs">
      <li class="active"><a href="#a" data-toggle="tab">Course details</a></li>
  <li><a href="#b" data-toggle="tab">Contents  (<?= count($table_pages) ?>)</a></li>
  <li><a href="#z" data-toggle="tab">Contents Modules  (<?= count($table_pages_m) ?>)</a></li>
  <li><a href="#c" data-toggle="tab">Fases  (<?= count($table_fases) ?>)</a></li>
  <li><a href="#d" data-toggle="tab">Challengers  (<?= count($table_challengers) ?>)</a></li>
  <li><a href="#f" data-toggle="tab">Fellows  (<?= count($table_fellows) ?>)</a></li>
  <li><a href="#e" data-toggle="tab">Files  (<?= count($table_files) ?>)</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">

        


  <div class="tab-pane active in" id="a">
 
 
<? if (count($details) > 0): ?>
<div class="well">
<a class="btn btn-success" style="clear:both;"  href="form/build/courses/<?= $coursesId ?>"><i class="icon-plus"></i> Edit</a>
<div style="clear:both"></div>
<!-- <div style="float:left;margin-bottom:200px;margin-right:30px"><img width="300" src="../data/img/<?= $details['img'] ?>"></div> -->
<br><br><?= $details['title'] ?><br><br>
<?= $details['description'] ?><br><br>
<b>Profile:</b> <?= $details['profile'] ?><br>
<b>Duration:</b> <?= $details['duration'] ?><br>
<b>Date:</b> <?= $details['date_ini'] ?><br>
<b>Price:</b> <?= $details['price'] ?><br>

<br>

</div>		
<? else: ?>

    <div style="clear:both;"></div><div class="alert alert-info"> <?= $table_label.' '.NODATA?></div>
    
<? endif; ?>


</div>
  <div class="tab-pane" id="b"> 
 


<a class="btn btn-success" style="float:left;clear:both;"  href="form/build/courses_pages"><i class="icon-plus"></i> <?=ADDNEW?></a><input placeholder="<?= SEARCH ?>" style="float:left;margin-left:14px" type="text" class="search_pagination" value="">
    
        <? if(count($table_pages)> 0): ?>
    <table class='table table-striped table-bordered tablaMain' data-table="courses_pages"  data-filter="coursesId" data-filter-id="<?= $coursesId?>" data-filterborder="0" >
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
                   <tr id="recordsArray_<?= $table_pages[$i]['id']?>">
                <?    $row = $table_pages[$i]; 
                $j = 0;
                		
                		
                		foreach ($row as  $k => $cell):  if ($j > 0):?>

                        <td>  <?= $cell;?></td>

<? endif;
$j++;
                    endforeach; ?>
                    <td class="actions" align="center" nowrap>
				<a alt='edit' title='edit' href='form/build/courses_pages/<?= $table_pages[$i]['id']?>'><img src='views/img/pen_12x12.png'></a> &nbsp;&nbsp;
				<a alt='delete' title='delete' href="javascript: DeleteRegistro('recordsArray_<?= $table_pages[$i]['id']?>','<?= $table_pages[$i]['id']?>','','courses_pages');"><img src='views/img/x_11x11.png'></a></td>
                    </tr>
            
            <? endfor; ?>
	   </tbody>
    </table>
    
    <? else: ?>

    <div style="clear:both;"></div><div class="alert alert-info"> <?= $table_label.' '.NODATA?></div>
    
<? endif; ?>

</div>

  <div class="tab-pane" id="z"> 
 


<a class="btn btn-success" style="float:left;clear:both;"  href="form/build/apartados_programas"><i class="icon-plus"></i> <?=ADDNEW?></a><input placeholder="<?= SEARCH ?>" style="float:left;margin-left:14px" type="text" class="search_pagination" value="">
    
        <? if(count($table_pages_m)> 0): ?>
    <table class='table table-striped table-bordered tablaMain' data-table="apartados_programas" data-filter="coursesId" data-filter-id="<?= $coursesId ?>"   border="0" >
        <thead>
            <tr>
			
         	<?	foreach ($items_head_pages_m as $item):
          ?>
            	<th nowrap><?= formatear_primera_may($item) ?>	</th>		 
            <? 
           		
            endforeach; ?>
            <th class="nover" nowrap=nowrap width="60"><?=ACTIONS ?></th></tr>
        </thead>
        <tbody>
            <? $itemsTotal =count($table_pages_m);
                for($i=0;$i<$itemsTotal;$i++):   ?>
                   <tr id="recordsArray_<?= $table_pages_m[$i]['id']?>">
                <?    $row = $table_pages_m[$i]; 
                
						$j = 0;
                		foreach ($row as  $k => $cell):                  if ($j > 0):?>

                        <td>  <?= $cell;?></td>

<?
                  endif; $j++;  endforeach; ?>
                    <td class="actions" align="center" nowrap>
				<a alt='edit' title='edit' href='form/build/apartados_programas/<?= $table_pages_m[$i]['id']?>'><img src='views/img/pen_12x12.png'></a> &nbsp;&nbsp;
				<a alt='delete' title='delete' href="javascript: DeleteRegistro('recordsArray_<?= $table_pages_m[$i]['id']?>','<?= $table_pages_m[$i]['id']?>','','apartados_programas');"><img src='views/img/x_11x11.png'></a></td>
                    </tr>
            
            <? endfor; ?>
	   </tbody>
    </table>
    
    <? else: ?>

    <div style="clear:both;"></div><div class="alert alert-info"> <?= $table_label.' '.NODATA?></div>
    
<? endif; ?>

</div>
  <div class="tab-pane" id="c">

    <h3>Fases (<?= count($table_fases) ?>)</h3>
    
    <a class="btn btn-success" style="float:left;clear:both;"  href="form/build/fases"><i class="icon-plus"></i> <?=ADDNEW?></a><input placeholder="<?= SEARCH ?>" style="float:left;margin-left:14px" type="text" class="search_pagination" value="">
    <? if(count($table_fases)> 0): ?>
        <table class='table table-striped table-bordered tablaMain ' data-table="fases" data-filter="coursesId" data-filter-id="<?= $coursesId?>"  border="0" >
        <thead>
            <tr>
			
         	<?	foreach ($items_head_fases as $item): ?>
            	<th nowrap><?= formatear_primera_may($item) ?>	</th>		 
            <? endforeach; ?>
            <th class="nover" nowrap=nowrap width="60"><?=ACTIONS ?></th></tr>
        </thead>
        <tbody>
            <? $itemsTotal =count($table_fases);
                for($i=0;$i<$itemsTotal;$i++):   ?>
                   <tr id="recordsArray_<?= $table_fases[$i]['id']?>">
                <?    $row = $table_fases[$i]; 
                $j =0 ;
                		foreach ($row as  $cell):                 if ($j > 0): ?>

                        <td>  <?= $cell;?></td>

                    <? 
                    endif;
                    $j++;
                    endforeach; ?>
                    <td class="actions" align="center" nowrap>
				<a alt='edit' title='edit' href='form/build/fases/<?= $table_fases[$i]['id']?>'><img src='views/img/pen_12x12.png'></a> &nbsp;&nbsp;
				<a alt='delete' title='delete' href="javascript: DeleteRegistro('recordsArray_<?= $table_fases[$i]['id']?>','<?= $table_fases[$i]['id']?>','','fases');"><img src='views/img/x_11x11.png'></a></td>
                    </tr>
            
            <? endfor; ?>
	   </tbody>
    </table>
    <? else: ?>

    <div style="clear:both;"></div><div class="alert alert-info"> <?= $table_label.' '.NODATA?></div>
    
<? endif; ?>
</div>
  <div class="tab-pane" id="d">

<h3>Challengers</h3>

 <a class="btn btn-success" style="float:left;clear:both;"  href="form/build/challengers"><i class="icon-plus"></i> <?=ADDNEW?></a><input placeholder="<?= SEARCH ?>" style="float:left;margin-left:14px" type="text" class="search_pagination" value="">
    <? if(count($table_challengers)> 0): ?>
        <table class='table table-striped table-bordered tablaMain' data-table="challengers" data-filter="coursesId" data-filter-id="<?= $coursesId?>"  border="0" >
        <thead>
            <tr>
			
         	<?	foreach ($items_head_challengers as $item): ?>
            	<th nowrap><?= formatear_primera_may($item) ?>	</th>		 
            <? endforeach; ?>
            <th class="nover" nowrap=nowrap width="60"><?=ACTIONS ?></th></tr>
        </thead>
        <tbody>
            <? $itemsTotal =count($table_challengers);
                for($i=0;$i<$itemsTotal;$i++):   ?>
                   <tr id="recordsArray_<?= $table_challengers[$i]['id']?>">
                <?    $row = $table_challengers[$i]; 
                		$j = 0;
                		
                		foreach ($row as  $cell):                  if ($j > 0):?>

                        <td>  <?= $cell;?></td>

                    <? 
                    endif;
                    $j++;
                    endforeach; ?>
                    <td class="actions" align="center" nowrap>
				<a alt='edit' title='edit' href='form/build/challengers/<?= $table_challengers[$i]['id']?>'><img src='views/img/pen_12x12.png'></a> &nbsp;&nbsp;
				<a alt='delete' title='delete' href="javascript: DeleteRegistro('recordsArray_<?= $table_challengers[$i]['id']?>','<?= $table_challengers[$i]['id']?>','','challengers');"><img src='views/img/x_11x11.png'></a></td>
                    </tr>
            
            <? endfor; ?>
	   </tbody>
    </table>
    <? else: ?>

    <div style="clear:both;"></div><div class="alert alert-info"> <?= $table_label.' '.NODATA?></div>
    
<? endif; ?>



    </div>
    
      <div class="tab-pane" id="f">

<h3>Fellows</h3>

 <a class="btn btn-success" style="float:left;clear:both;"  href="form/build/fellows"><i class="icon-plus"></i> <?=ADDNEW?></a><input placeholder="<?= SEARCH ?>" style="float:left;margin-left:14px" type="text" class="search_pagination" value="">
    <? if(count($table_fellows)> 0): ?>
        <table class='table table-striped table-bordered tablaMain' data-table="fellows" data-filter="coursesId" data-filter-id="<?= $coursesId?>"  border="0" >
        <thead>
            <tr>
			
         	<?	foreach ($items_head_fellows as $item): ?>
            	<th nowrap><?= formatear_primera_may($item) ?>	</th>		 
            <? endforeach; ?>
            <th class="nover" nowrap=nowrap width="60"><?=ACTIONS ?></th></tr>
        </thead>
        <tbody>
            <? $itemsTotal =count($table_fellows);
                for($i=0;$i<$itemsTotal;$i++):   ?>
                   <tr id="recordsArray_f_<?= $table_fellows[$i]['id']?>">
                <?    $row = $table_fellows[$i]; 
                		$j = 0;
                		
                		foreach ($row as  $cell):                  if ($j > 0):?>

                        <td>  <?= $cell;?></td>

                    <? 
                    endif;
                    $j++;
                    endforeach; ?>
                    <td class="actions" align="center" nowrap>
				<a alt='edit' title='edit' href='form/build/fellows/<?= $table_challengers[$i]['id']?>'><img src='views/img/pen_12x12.png'></a> &nbsp;&nbsp;
				<a alt='delete' title='delete' href="javascript: DeleteRegistro('recordsArray_f_<?= $table_fellows[$i]['id']?>','<?= $table_fellows[$i]['id']?>','','fellows');"><img src='views/img/x_11x11.png'></a></td>
                    </tr>
            
            <? endfor; ?>
	   </tbody>
    </table>
    <? else: ?>

    <div style="clear:both;"></div><div class="alert alert-info"> <?= $table_label.' '.NODATA?></div>
    
<? endif; ?>



    </div>


    <div class="tab-pane" id="e">

<h3>Files</h3>

 <a class="btn btn-success" style="float:left;clear:both;"  href="form/build/coursefiles"><i class="icon-plus"></i> <?=ADDNEW?></a><input placeholder="<?= SEARCH ?>" style="float:left;margin-left:14px" type="text" class="search_pagination" value="">
    <? if(count($table_files)> 0): ?>
        <table class='table table-striped table-bordered tablaMain' data-table="coursefiles" data-filter="coursesId" data-filter-id="<?= $coursesId?>" border="0" >
        <thead>
            <tr>
			
         	<?	foreach ($items_head_files as $item): ?>
            	<th nowrap><?= formatear_primera_may($item) ?>	</th>		 
            <? endforeach; ?>
            <th class="nover" nowrap=nowrap width="60"><?=ACTIONS ?></th></tr>
        </thead>
        <tbody>
            <? $itemsTotal =count($table_files);
                for($i=0;$i<$itemsTotal;$i++):   ?>
                   <tr id="recordsArray_<?= $table_files[$i]['id']?>">
                <?    $row = $table_files[$i]; 
                $j = 0;
                		foreach ($row as  $cell):                  if ($j > 0):?>

                        <td>  <?= $cell;?></td>

                    <? 
                    endif;
                    $j++;
                    endforeach; ?>
                    <td class="actions" align="center" nowrap>
				<a alt='edit' title='edit' href='form/build/coursefiles/<?= $table_files[$i]['id']?>'><img src='views/img/pen_12x12.png'></a> &nbsp;&nbsp;
				<a alt='delete' title='delete' href="javascript: DeleteRegistro('recordsArray_<?= $table_files[$i]['id']?>','<?= $table_files[$i]['id']?>','','coursefiles');"><img src='views/img/x_11x11.png'></a></td>
                    </tr>
            
            <? endfor; ?>
	   </tbody>
    </table>
    <? else: ?>

    <div style="clear:both;"></div><div class="alert alert-info"> <?= $table_label.' '.NODATA?></div>
    
<? endif; ?>



    </div>

</div>
    <? if(!empty($HOOK_FOOTER)) echo $HOOK_FOOTER; ?>
    <script>
   $('.nav-tabs li a').click(function (e) {
  e.preventDefault();

})
    </script>