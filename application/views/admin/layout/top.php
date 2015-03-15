
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title><?= $base_title ?> | Admin </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="title" content="BackOffice">
<meta name="author" content="96Levels">
<meta name="description" content=" <?= $base_title ?>  BackOffice">

<base href="<?= $base_url ?>" content="<?= $base_url ?>"></base>

<!-- BEGIN PLUGIN CSS -->
<link href="public/admin/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="public/admin/assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
<link href="public/admin/assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- END PLUGIN CSS -->
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="public/admin/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="public/admin/assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="public/admin/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="public/admin/assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="public/admin/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href="public/admin/assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="public/admin/assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="public/admin/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->

 <link href="public/admin/admin.css" rel="stylesheet" type="text/css" />
   			<script>
		var BASE_URL = '<?= $base_url ?>';
		</SCRIPT>
</head>



		
	
	
<!-- 		<link rel="stylesheet" href="public/vendor/jQuery-ui-1.8.16/themes/base/jquery.ui.all.css"> -->
	   <!-- 	<link href="http://code.jquery.com/ui/1.8.16/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" /> -->
<!--
	 	<script src="public/js/jquery.js"></script>	
		<script src="public/js/dataTable.js"></script>		
		<script src="http://code.jquery.com/ui/1.8.16/jquery-ui.min.js"></script>
-->
<!--
		<script src="public/vendor/jQuery-ui-1.8.16/minified/jquery.ui.core.min.js"></script>
		<script src="public/vendor/jQuery-ui-1.8.16/minified/jquery.ui.widget.min.js"></script>
		<script src="public/vendor/jQuery-ui-1.8.16/minified/jquery.ui.mouse.min.js"></script>
		<script src="public/vendor/jQuery-ui-1.8.16/minified/jquery.ui.datepicker.min.js"></script>
		<script src="public/vendor/jQuery-ui-1.8.16/minified/jquery.ui.sortable.min.js"></script>
-->
<!--		<script src="public/vendor/jQuery-ui-1.8.16/i18n/jquery.ui.datepicker-es.js"></script>
 		<script src="public/vendor/jQuery-ui-1.8.16/jquery.timepicker.js"></script> -->
		
<!-- 		<script src="public/vendor/tinymce/tinymce.min.js"></script>  -->
		



<!-- 		<script src="public/js/pagination3.js"></script> -->


	<?php flush(); ?>
	<body>
	<div id="overlay" style="display:none;">Espera ...</div>

 
    

 
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse ">
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
    <div class="header-seperation">
      <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">
        <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" >
          <div class="iconset top-menu-toggle-white"></div>
          </a> </li>
      </ul>
      <!-- BEGIN LOGO -->
<h3 style="margin-left:20px"><a href="admin"><strong style="color:white"><?= $base_title ?></strong> </a></h3>
      <!-- END LOGO -->
 <!--
     <ul class="nav pull-right notifcation-center">
        <li class="dropdown" id="header_task_bar"> <a href="index.html" class="dropdown-toggle active" data-toggle="">
          caca <div class="iconset top-home"></div>
          </a> </li>
        <li class="dropdown" id="header_inbox_bar" > <a href="email.html" class="dropdown-toggle" >
          <div class="iconset top-messages"></div>
          <span class="badge" id="msgs-badge">2</span> </a></li>
        <li class="dropdown" id="portrait-chat-toggler" style="display:none"> <a href="#sidr" class="chat-menu-toggle">
          <div class="iconset top-chat-white "></div>
          </a> </li>
      </ul>
-->
    </div>
    <!-- END RESPONSIVE MENU TOGGLER -->
    <div class="header-quick-nav" >
      <!-- BEGIN TOP NAVIGATION MENU -->
      <div class="pull-left">
        <!--
<ul class="nav quick-section">
          <li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle" >
            <div class="iconset top-menu-toggle-dark"></div>
            </a> </li>
        </ul>
-->
        <ul class="nav quick-section">
         <!--
 <li class="quicklinks"> <a href="#" class="" >
            <div class="iconset top-reload"></div>
            </a> </li>
          <li class="quicklinks"> <span class="h-seperate"></span></li>
          <li class="quicklinks"> <a href="#" class="" >
            <div class="iconset top-tiles"></div>
            </a> </li>
          <li class="m-r-10 input-prepend inside search-form no-boarder"> <span class="add-on"> <span class="iconset top-search"></span></span>
            <input name="" type="text"  class="no-boarder " placeholder="Search Dashboard" style="width:250px;">
            
          </li>
-->
          <li class="quicklinks"><a href="<?= $base_url ?>" target="_blank">Ir a la página</a></li>
        </ul>
      </div>
      <!-- END TOP NAVIGATION MENU -->
     
        <ul class="nav quick-section ">
          <li class="quicklinks"> <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
              <div class="username"> <span class="badge badge-important" style="color:white !important"><i class="fa fa-user fa-user-sign" style="color:white !important"></i></span> Usuario <span class="bold">Administrador</span> </div>
            </a>
            <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
             <!--
 <li><a href="user-profile.html"> My Account</a> </li>
              <li><a href="calender.html">My Calendar</a> </li>
              <li><a href="email.html"> My Inbox&nbsp;&nbsp;<span class="badge badge-important animated bounceIn">2</span></a> </li>
              <li class="divider"></li>
-->
              <li><a href="admin/logout"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>    
               <section class="top-bar-section">
          </li>


        </ul>
      </div>
      <!-- END CHAT TOGGLER -->
    </div>
    <!-- END TOP NAVIGATION MENU -->
  </div>
  <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu">
    <!-- BEGIN MINI-PROFILE -->
    <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
     <!--
 <div class="user-info-wrapper">
        <div class="profile-wrapper"> <img src="assets/img/profiles/avatar.jpg"  alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" /> </div>
        <div class="user-info">
          <div class="greeting">Welcome</div>
          <div class="username">John <span class="semi-bold">Smith</span></div>
          <div class="status">Status<a href="#">
            <div class="status-icon green"></div>
            Online</a></div>
        </div>
      </div>
-->
      <!-- END MINI-PROFILE -->
      <!-- BEGIN SIDEBAR MENU -->
      <p class="menu-title">ADMIN <!-- <span class="pull-right"><a href="C1E5A8A7-5BD0-4C4E-9AD8-32BD94BCEE89.html"><i class="fa fa-refresh"></i></a></span> --></p>
    		    
		    
		<? include "menu.php"; ?>	    
      <!--
       
        <li class=""> <a href="C1E5A8A7-5BD0-4C4E-9AD8-32BD94BCEE89.html"> <i class="icon-custom-ui"></i> <span class="title">UI Elements</span> <span class="arrow "></span> </a>
          <ul class="sub-menu">
            <li > <a href="typography.html"> Typography </a> </li>
            <li > <a href="messages_notifications.html"> Messages & Notifications </a> </li>
            <li > <a href="notifications.html"> Notifications </a> </li>
            <li > <a href="icons.html">Icons</a> </li>
            <li > <a href="buttons.html">Buttons</a> </li>
            <li > <a href="tabs_accordian.html"> Tabs & Accordions </a> </li>
            <li > <a href="sliders.html">Sliders</a> </li>
            <li > <a href="group_list.html">Group list </a> </li>
          </ul>
        </li>
        <li class=""> <a href="C1E5A8A7-5BD0-4C4E-9AD8-32BD94BCEE89.html"> <i class="icon-custom-form"></i> <span class="title">Forms</span> <span class="arrow"></span> </a>
          <ul class="sub-menu">
            <li > <a href="form_elements.html">Form Elements </a> </li>
            <li > <a href="form_validations.html">Form Validations</a> </li>
          </ul>
        </li>
        -->

       <!--
 <li class="active open"> <a href="C1E5A8A7-5BD0-4C4E-9AD8-32BD94BCEE89.html"> <i class="icon-custom-thumb"></i> <span class="title">Tables</span> <span class="arrow open"></span> </a>
          <ul class="sub-menu">
            <li > <a href="tables.html"> Basic Tables </a> </li>
            <li class="active"> <a href="datatables.html"> Data Tables </a> </li>
          </ul>
        </li>
-->
    <!--
    <li class=""> <a href="C1E5A8A7-5BD0-4C4E-9AD8-32BD94BCEE89.html"> <i class="icon-custom-map"></i> <span class="title">Maps</span> <span class="arrow "></span> </a>
          <ul class="sub-menu">
            <li > <a href="google_map.html"> Google Maps </a> </li>
            <li > <a href="vector_map.html"> Vector Maps </a> </li>
          </ul>
        </li>
        <li class=""> <a href="charts.html"> <i class="icon-custom-chart"></i> <span class="title">Charts</span> </a> </li>
        <li class=""> <a href="C1E5A8A7-5BD0-4C4E-9AD8-32BD94BCEE89.html"> <i class="icon-custom-extra"></i> <span class="title">Extra</span> <span class="arrow "></span> </a>
          <ul class="sub-menu">
            <li > <a href="user-profile.html"> User Profile </a> </li>
            <li > <a href="time_line.html"> Time line </a> </li>
            <li > <a href="support_ticket.html"> Support Ticket </a> </li>
            <li > <a href="gallery.html"> Gallery</a> </li>
            <li class=""><a href="calender.html"> Calendar</a> </li>
            <li > <a href="search_results.html"> Search Results </a> </li>
            <li > <a href="invoice.html"> Invoice </a> </li>
            <li > <a href="404.html"> 404 Page </a> </li>
            <li > <a href="500.html"> 500 Page </a> </li>
            <li > <a href="blank_template.html"> Blank Page </a> </li>
            <li > <a href="login.html"> Login </a> </li>
            <li > <a href="login_v2.html">Login v2</a> </li>
            <li > <a href="lockscreen.html"> Lockscreen </a> </li>
          </ul>
        </li>
        <li class=""> <a href="C1E5A8A7-5BD0-4C4E-9AD8-32BD94BCEE89.html"> <i class="fa fa-folder-open"></i> <span class="title">Menu Levels</span> <span class="arrow "></span> </a>
          <ul class="sub-menu">
            <li > <a href="C1E5A8A7-5BD0-4C4E-9AD8-32BD94BCEE89.html"> Level 1 </a> </li>
            <li > <a href="C1E5A8A7-5BD0-4C4E-9AD8-32BD94BCEE89.html"> <span class="title">Level 2</span> <span class="arrow "></span> </a>
              <ul class="sub-menu">
                <li > <a href="C1E5A8A7-5BD0-4C4E-9AD8-32BD94BCEE89.html"> Sub Menu </a> </li>
                <li > <a href="C1E5A8A7-5BD0-4C4E-9AD8-32BD94BCEE89.html"> Sub Menu </a> </li>
              </ul>
            </li>
          </ul>
        </li>
-->
        <!--
                <li class="hidden-lg hidden-md hidden-xs" id="more-widgets" > <a href="C1E5A8A7-5BD0-4C4E-9AD8-32BD94BCEE89.html"> <i class="fa fa-plus"></i></a>

  <ul class="sub-menu">
            <li class="side-bar-widgets">
              <p class="menu-title">FOLDER <span class="pull-right"><a href="#" class="create-folder"><i class="icon-plus"></i></a></span></p>
              <ul class="folders" >
                <li><a href="#">
                  <div class="status-icon green"></div>
                  My quick tasks </a> </li>
                <li><a href="#">
                  <div class="status-icon red"></div>
                  To do list </a> </li>
                <li><a href="#">
                  <div class="status-icon blue"></div>
                  Projects </a> </li>
                <li class="folder-input" style="display:none">
                  <input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" id="folder-name">
                </li>
              </ul>
  <p class="menu-title">PROJECTS </p>
              <div class="status-widget">
                <div class="status-widget-wrapper">
                  <div class="title">Freelancer<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
                  <p>Redesign home page</p>
                </div>
              </div>
              <div class="status-widget">
                <div class="status-widget-wrapper">
                  <div class="title">envato<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
                  <p>Statistical report</p>
                </div>
              </div>

            </li>
          </ul>
        </li>
      </ul>-->
<!--  <div class="side-bar-widgets">
        <p class="menu-title">FOLDER <span class="pull-right"><a href="#" class="create-folder"> <i class="fa fa-plus"></i></a></span></p>
        <ul class="folders" >
          <li><a href="#">
            <div class="status-icon green"></div>
            My quick tasks </a> </li>
          <li><a href="#">
            <div class="status-icon red"></div>
            To do list </a> </li>
          <li><a href="#">
            <div class="status-icon blue"></div>
            Projects </a> </li>
          <li class="folder-input" style="display:none">
            <input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" >
          </li>
        </ul>
        <p class="menu-title">PROJECTS </p>
        <div class="status-widget">
          <div class="status-widget-wrapper">
            <div class="title">Freelancer<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
            <p>Redesign home page</p>
          </div>
        </div>
        <div class="status-widget">
          <div class="status-widget-wrapper">
            <div class="title">envato<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
            <p>Statistical report</p>
          </div>
        </div>
      </div> -->
      <div class="clearfix"></div>
      <!-- END SIDEBAR MENU -->
    </div>
  </div>
  <!--
<a href="#" class="scrollup">Scroll</a>
  <div class="footer-widget">
    <div class="progress transparent progress-small no-radius no-margin">
      <div data-percentage="79%" class="progress-bar animate-progress-bar progress-bar-success " ></div>
    </div>
    <div class="pull-right">
      <div class="details-status"> <span data-animation-duration="560" data-value="86" class="animate-number"></span>% </div>
      <a href="lockscreen.html"><i class="fa fa-power-off"></i></a></div>
  </div>
-->
  <!-- END SIDEBAR -->
  <!-- BEGIN PAGE CONTAINER-->
<div class="page-content">
