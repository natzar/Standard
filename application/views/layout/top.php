<!DOCTYPE html>
<html lang="<?= $_SESSION['lang']?>">
	<head>	
	  <!-- 	  
		STANDART - top.php > html headers
		@Version 2.0
		@Author Beto López Ayesa
		@Email	betolopezayesa@gmail.com
		@Date	10/Mar/2015	
		
	  -->	  
	    <title><?= $SEO_TITLE ?> &raquo; <?= $base_title ?></title>
		
		<!-- Basic Metas -->
	    <meta name="title" content="<?= $SEO_TITLE ?> &raquo; <?= $base_title ?>">
	    <meta name="description" content='<?= ($SEO_DESCRIPTION )?>'>
	    <meta name="author" content="<?= $base_title ?>">
   		<meta name="generator" content="Standart">
   			    
   		<!-- Content type & charset -->	    
	    <meta charset="utf-8">
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  		<meta http-equiv="content-language" content="<?= $_SESSION['lang']?>" />

		<!-- Robots - SEO -->
		<meta name="ROBOTS" content="All,INDEX,FOLLOW">		<!-- No effect, Robots = All is default -->
	    <meta name="keywords" content="<?= $SEO_KEYWORDS ?>">
		<meta name="Language" content="<?= $_SESSION['lang']?>">
		<meta name="Revisit" content="2 days">
		<meta name="Distribution" content="Global">
		
		<!-- Mobile -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	    <meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	

		<!-- Base Path for all relative src declared files -->
	    <base href="<?= $base_url ?>"></base>
	    		
		<!-- Canonical URL -->	    		
		<link rel="canonical" href="//<?= $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"] ?>"/>

		<!-- Favicon -->    
		<link rel="icon" type="image/png" href="/public/favicon.png" />
		<link rel="shortcut icon" href="/public/favicon.ipng">
		<link rel="icon" type="image/png" href="/public/favicon.png" />     
		
		<!-- Feed RSS for the actual URL/Model -->
		<link rel="alternate" type="application/rss+xml" title="<?= $base_title ?> &raquo; Feed" href="<?= $base_url ?>/rss" />
		
		<!-- Google Plus Author Account -->
		<link rel="author" href="<?= $config->get('googlePlus') ?>" />
	
		<!-- Facebook -->
		<meta property="og:locale" content="<?= $_SESSION['lang'] ?>" />
		<meta property="og:type" content="article" />
		<meta property="article:section" content="Uncategorized" />
		<meta property="og:title" content="<?= $base_title ?>" />
		<meta property="og:description" content="<?= $SEO_DESCRIPTION ?>" />
		<meta property="og:url" content="<?= $base_url ?>" />
		<meta property="og:site_name" content="<?= $base_title ?>" />
		<meta property="og:image" content="<?= $SEO_IMAGE ?>" />

	    <!-- Fonts -->
	    <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,400italic' rel='stylesheet' type='text/css'> -->	
		
		<!-- Bootstrap 3.3.2 from CDN -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css"> -->

		<!-- Bootsrap LOCAL files -->
        <link rel="stylesheet" href="public/vendor/bootstrap-3.3.2-dist/css/bootstrap.min.css">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="public/vendor/bootstrap-3.3.2-dist/css/bootstrap-theme.min.css">		
        
    
        <!-- Le custom Css, en française c'est milleur -->
	    <link rel="stylesheet" type="text/css" media="all" href="public/application.css" />

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
    		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
    </head>    
  	<body class="<?= get_param('p') ?>">
		<?php flush(); ?>
  		<!-- Work hard, and be nice to people  -->
		<? include "top-content.php"; ?>