<!DOCTYPE html>
<html lang="<?= $_SESSION['lang']?>">
	<head>
	  <!-- 
	  
	  YOU ARE BEING WATCHED by others,
	  YOU ARE BEING DREAMED by YOURSELF,
	  YOU REALLY DONT EXIST,
	  PANTA REI.
	  
	  -->
	    <title><?= $SEO_TITLE ?> &raquo; <?= $base_title ?></title>
		<!-- Metas -->
	    <meta charset="utf-8">
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  		<meta http-equiv="content-language" content="<?= $_SESSION['lang']?>" />
	    <meta name="title" content="<?= $SEO_TITLE ?> &raquo; <?= $base_title ?>">
	    <meta name="description" content='<?= ($SEO_DESCRIPTION )?>'>
	    <meta name="author" content="Beto López Ayesa">
	    <meta name="keywords" content="<?= $SEO_KEYWORDS ?>">
		<meta name="Language" content="<?= $_SESSION['lang']?>">
		<meta name="Revisit" content="2 days">
		<meta name="Distribution" content="Global">
		<meta name="Robots" content="All">
	    <meta name="robots" content="index,follow" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	    <meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	
	    <base href="<?= $base_url ?>" content="<?= $base_url ?>">

		<!-- Favicon -->    
		<link rel="icon" type="image/png" href="favicon.png" />
		<link rel="shortcut icon" href="favicon.ipng">
		<link rel="icon" type="image/png" href="favicon.png" />     
	
		<!-- Work hard, and be nice  -->
		<!-- Facebook -->
		<meta property="og:url" content="<?= $base_url ?>" />
		<meta property="og:site_name" content="<?= $base_title ?>" />
		<meta property="og:image" content="<?= $seo_image ?>" />

	    <!-- Fonts -->
	    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic|Open+Sans:700,400" />
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,400italic' rel='stylesheet' type='text/css'>
			

		
		<!-- If there is an engineer mantaining the project uncomment and use CDN -->
		<!--		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
	
        <link rel="stylesheet" href="/public/vendor/flat-ui/bootstrap/css/bootstrap.css">

        <!-- Flat UI - Default -->
        <link rel="stylesheet" href="/public/vendor/flat-ui/css/flat-ui.css">
		
		<!-- Le custom Css, en française c'est milleur -->
	    <link rel="stylesheet" type="text/css" media="all" href="public/css/style.css" />
    </head>
  <body class="">
	  <? include "top-content.php"; ?>