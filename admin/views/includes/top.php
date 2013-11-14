	<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<title><?= $base_title ?> | BackOffice </title>
		<meta name="title" content="BackOffice">
	    <meta name="author" content="Php Ninja">
		<meta name="description" content="BackOffice">

		<meta charset="utf-8">
		<base href="<?= $base_url ?>admin/" content="<?= $base_url ?>admin/">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 




<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,800italic,400,600,800" type="text/css">

	<link rel="stylesheet" href="views/css/font-awesome.min.css" type="text/css" />		
	<link rel="stylesheet" href="views/css/bootstrap.min.css" type="text/css" />	
	<link rel="stylesheet" href="views/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.css" type="text/css" />
		
	<link rel="stylesheet" href="views/js/plugins/icheck/skins/minimal/blue.css" type="text/css" />
	<link rel="stylesheet" href="views/js/plugins/select2/select2.css" type="text/css" />
	<link rel="stylesheet" href="views/js/plugins/fullcalendar/fullcalendar.css" type="text/css" />
	
	<link rel="stylesheet" href="views/css/App.css" type="text/css" />






		<script>
		var BASE_URL = '<?= $base_url ?>admin/';
		</SCRIPT>
		
		
		
	</head>
	<?php flush(); ?>
	<body>
	
	


<div id="wrapper">

	<header id="header">

		<h1 id="site-logo">
			<a href="<?= $base_url ?>admin/">
				<?= $base_title?>
			</a>
		</h1>	

		<a href="B2CC3C9B-0546-4654-AFAD-7ADE0CD74DAB.html" data-toggle="collapse" data-target=".top-bar-collapse" id="top-bar-toggle" class="navbar-toggle collapsed">
			<i class="fa fa-cog"></i>
		</a>

		<a href="B2CC3C9B-0546-4654-AFAD-7ADE0CD74DAB.html" data-toggle="collapse" data-target=".sidebar-collapse" id="sidebar-toggle" class="navbar-toggle collapsed">
			<i class="fa fa-reorder"></i>
		</a>

	</header> <!-- header -->


	<nav id="top-bar" class="collapse top-bar-collapse">

		<ul class="nav navbar-nav pull-left">
			<li class="">
				<a href="views/index.html">
					<i class="fa fa-home"></i> 
					Home
				</a>
			</li>



              <li><a href="<?= $base_url ?>">Ir a la página</a></li>
            <li><a href="login/logout">Cerrar Sesión</a></li>



			<li class="dropdown">
		    	<a class="dropdown-toggle" data-toggle="dropdown" href="B2CC3C9B-0546-4654-AFAD-7ADE0CD74DAB.html">
		        	Dropdown <span class="caret"></span>
		    	</a>

		    	<ul class="dropdown-menu" role="menu">
			        <li><a href="B2CC3C9B-0546-4654-AFAD-7ADE0CD74DAB.html"><i class="fa fa-user"></i>&nbsp;&nbsp;Example #1</a></li>
			        <li><a href="B2CC3C9B-0546-4654-AFAD-7ADE0CD74DAB.html"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Example #2</a></li>
			        <li class="divider"></li>
			        <li><a href="B2CC3C9B-0546-4654-AFAD-7ADE0CD74DAB.html"><i class="fa fa-tasks"></i>&nbsp;&nbsp;Example #3</a></li>
		    	</ul>
		    </li>
		    
		</ul>

		<ul class="nav navbar-nav pull-right">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="B2CC3C9B-0546-4654-AFAD-7ADE0CD74DAB.html">
					<i class="fa fa-user"></i>
		        	Rod Howard 
		        	<span class="caret"></span>
		    	</a>

		    	<ul class="dropdown-menu" role="menu">
			        <li>
			        	<a href="views/page-profile.html">
			        		<i class="fa fa-user"></i> 
			        		&nbsp;&nbsp;My Profile
			        	</a>
			        </li>
			        <li>
			        	<a href="views/page-calendar.html">
			        		<i class="fa fa-calendar"></i> 
			        		&nbsp;&nbsp;My Calendar
			        	</a>
			        </li>
			        <li>
			        	<a href="views/page-settings.html">
			        		<i class="fa fa-cogs"></i> 
			        		&nbsp;&nbsp;Settings
			        	</a>
			        </li>
			        <li class="divider"></li>
			        <li>
			        	<a href="views/page-login.html">
			        		<i class="fa fa-sign-out"></i> 
			        		&nbsp;&nbsp;Logout
			        	</a>
			        </li>
		    	</ul>
		    </li>
		</ul>

	</nav> <!-- /#top-bar -->


	<div id="sidebar-wrapper" class="collapse sidebar-collapse">
	
		<div id="search">
			<form>
				<input class="form-control input-sm" type="text" name="search" placeholder="Search..." />

				<button type="submit" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
			</form>		
		</div> <!-- #search -->
	
		<nav id="sidebar">		
			
			<ul id="main-nav" class="open-active">			
                          
<? include "menu.php"; ?>

				<li class="active">				
					<a href="views/index.html">
						<i class="fa fa-dashboard"></i>
						Dashboard
					</a>				
				</li>
							
				<li class="dropdown">
					<a href="B2CC3C9B-0546-4654-AFAD-7ADE0CD74DAB.html">
						<i class="fa fa-file-text"></i>
						Example Pages
						<span class="caret"></span>
					</a>				
					
					<ul class="sub-nav">
						<li>
							<a href="views/page-profile.html">
								<i class="fa fa-user"></i> 
								Profile
							</a>
						</li>
						<li>
							<a href="views/page-invoice.html">
								<i class="fa fa-money"></i> 
								Invoice
							</a>
						</li>
						<li>
							<a href="views/page-pricing.html">
								<i class="fa fa-dollar"></i> 
								Pricing Plans
							</a>
						</li>
						<li>
							<a href="views/page-support.html">
								<i class="fa fa-question"></i> 
								Support Page
							</a>
						</li>
						<li>
							<a href="views/page-gallery.html">
								<i class="fa fa-picture-o"></i> 
								Gallery
							</a>
						</li>
						<li>
							<a href="views/page-settings.html">
								<i class="fa fa-cogs"></i> 
								Settings
							</a>
						</li>
						<li>
							<a href="views/page-calendar.html">
								<i class="fa fa-calendar"></i> 
								Calendar
							</a>
						</li>
					</ul>						
					
				</li>	
				
				<li class="dropdown">
					<a href="B2CC3C9B-0546-4654-AFAD-7ADE0CD74DAB.html">
						<i class="fa fa-tasks"></i>
						Form Elements
						<span class="caret"></span>
					</a>
					
					<ul class="sub-nav">
						<li>
							<a href="views/form-regular.html">
								<i class="fa fa-location-arrow"></i>
								Regular Elements
							</a>
						</li>
						<li>
							<a href="views/form-extended.html">
								<i class="fa fa-magic"></i>
								Extended Elements
							</a>
						</li>	
						<li>
							<a href="views/form-validation.html">
								<i class="fa fa-check"></i>
								Validation
							</a>
						</li>			
					</ul>	
									
				</li>
				
				<li class="dropdown">
					<a href="B2CC3C9B-0546-4654-AFAD-7ADE0CD74DAB.html">
						<i class="fa fa-desktop"></i>
						UI Features
						<span class="caret"></span>
					</a>	

					<ul class="sub-nav">
						<li>
							<a href="views/ui-buttons.html">
								<i class="fa fa-hand-o-up"></i>
								Buttons
							</a>
						</li>
						<li>
							<a href="views/ui-tabs.html">
								<i class="fa fa-reorder"></i>
								Tabs & Accordions
							</a>
						</li>

						<li>
							<a href="views/ui-popups.html">
								<i class="fa fa-asterisk"></i>
								Popups / Notifications
							</a>
						</li>	

						<li>
							<a href="views/ui-sliders.html">
								<i class="fa fa-tasks"></i>
								Sliders
							</a>
						</li>	
				
						<li class="">
							<a href="views/ui-typography.html">
								<i class="fa fa-font"></i>
								Typography
							</a>
						</li>	
				
						<li class="">
							<a href="views/ui-icons.html">
								<i class="fa fa-star-o"></i>
								Icons
							</a>
						</li>	
					</ul>
				</li>
				
				<li class="dropdown">
					<a href="B2CC3C9B-0546-4654-AFAD-7ADE0CD74DAB.html">
						<i class="fa fa-table"></i>
						Tables
						<span class="caret"></span>
					</a>
					
					<ul class="sub-nav">
						<li>
							<a href="views/table-basic.html">
								<i class="fa fa-table"></i> 
								Basic Tables
							</a>
						</li>		
						<li>
							<a href="views/table-advanced.html">
								<i class="fa fa-table"></i> 
								Advanced Tables
							</a>
						</li>
						<li>
							<a href="views/table-responsive.html">
								<i class="fa fa-table"></i> 
								Responsive Tables
							</a>
						</li>	
					</ul>	
									
				</li>

				<li>
					<a href="views/ui-portlets.html">
						<i class="fa fa-list-alt"></i>
						Portlets
					</a>
				</li>
				
				<li class="dropdown">
					<a href="B2CC3C9B-0546-4654-AFAD-7ADE0CD74DAB.html">
						<i class="fa fa-bar-chart-o"></i>
						Charts & Graphs
						<span class="caret"></span>
					</a>
					
					<ul class="sub-nav">
						<li>
							<a href="views/chart-flot.html">
								<i class="fa fa-bar-chart-o"></i> 
								jQuery Flot
							</a>
						</li>
						<li>
							<a href="views/chart-morris.html">
								<i class="fa fa-bar-chart-o"></i> 
								Morris.js
							</a>
						</li>
					</ul>
				</li>
				
				<li class="dropdown">
					<a href="B2CC3C9B-0546-4654-AFAD-7ADE0CD74DAB.html">
						<i class="fa fa-file-text-o"></i>
						Extra Pages
						<span class="caret"></span>
					</a>
					
					<ul class="sub-nav">
						<li>
							<a href="views/page-login.html">
								<i class="fa fa-unlock"></i> 
								Login Basic
							</a>
						</li>
						<li>
							<a href="views/page-login-social.html">
								<i class="fa fa-unlock"></i> 
								Login Social
							</a>
						</li>
						<li>
							<a href="views/page-404.html">
								<i class="fa fa-ban"></i> 
								404 Error
							</a>
						</li>
						<li>
							<a href="views/page-500.html">
								<i class="fa fa-ban"></i> 
								500 Error
							</a>
						</li>
						<li>
							<a href="views/page-blank.html">
								<i class="fa fa-file-text-o"></i> 
								Blank Page
							</a>
						</li>
					</ul>
				</li>

			</ul>
					
		</nav> <!-- #sidebar -->

	</div> <!-- /#sidebar-wrapper -->

	
	<div id="content">		
		
		
		

