<!-- 

	Standart
	
	Auto generated Menu
	
	Modify at your own

 -->

        <li class="start"> <a href="admin/dashboard"> <i class="glyphicon glyphicon-home"></i> <span class="title">Dashboard</span> <span class="selected"></span> <span class="arrow"></span> </a> 


          	<? foreach($SIDEDATA['tables'] as $table_aux): ?>
	            <li> <a href="admin/table/<?= $table_aux ?>"><i class="glyphicon glyphicon-book"></i> <?= ucfirst($table_aux) ?></a>  </li>          	
          	<? endforeach; ?>



