<!-- 

	Standart
	
	Auto generated Menu
	
	Modify at your own

 -->
   <ul>
        <li class="start"> <a href="admin/dashboard"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span> <span class="arrow"></span> </a> 
  		   <!--
 <ul class="sub-menu">
              <li > <a href="dashboard_v1.html"> Dashboard v1 </a> </li>
              <li class="active"> <a href="index.html "> Dashboard v2 <span class=" label label-info pull-right m-r-30">NEW</span></a></li>
            </ul>
-->
		    </li>

 
         <li class=""> <a href="C1E5A8A7-5BD0-4C4E-9AD8-32BD94BCEE89.html"> <i class="icon-custom-portlets"></i> <span class="title">Tablas</span> <span class="arrow"></span> </a>
          <ul class="sub-menu">
          	<? foreach($SIDEDATA['tables'] as $table): ?>
	            <li> <a href="admin/table/<?= $table ?>"><?= ucfirst($table) ?></a> </li>          	
          	<? endforeach; ?>
          </ul>
        </li>

</ul>