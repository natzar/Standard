<!-- 

	Standart
	
	@It makes a navbar from the tables in database
	
	!!TODO: Auto generated Menu (when menu.php is not created)


 -->

   <li> <a href="admin/dashboard"> <i class="glyphicon glyphicon-home"></i> Dashboard</span> </a> 
	<? foreach($SIDEDATA['tables'] as $table_aux): ?>
		<li> <a href="admin/table/<?= $table_aux ?>"><i class="glyphicon glyphicon-book"></i> <?= ucfirst($table_aux) ?></a>  </li>          	
   	<? endforeach; ?>



