<!DOCTYPE html>
<html lang="<?= $_SESSION['lang']?>">
<head>
    <title><?= $SEO_TITLE ?> &raquo; <?= $base_title ?></title>
	<!-- Metas -->
    <meta name="title" content="<?= $SEO_TITLE ?> &raquo; <?= $base_title ?>">
    <meta name="description" content='<?= ($SEO_DESCRIPTION )?>'>
    <meta name="author" content="96 Levels">
    <meta name="keywords" content="<?= $SEO_KEYWORDS ?>">
	<meta name="Language" content="<?= $_SESSION['lang']?>">
	<meta name="Revisit" content="2 days">
	<meta name="Distribution" content="Global">
	<meta name="Robots" content="All">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="content-language" content="<?= $_SESSION['lang']?>" />
    <meta name="robots" content="index,follow" />
    <base href="<?= $base_url ?>">

	<!-- Favicon -->    
	<link rel="icon" type="image/png" href="favicon.png" />
	<link rel="shortcut icon" href="favicon.ipng">
	<link rel="icon" type="image/png" href="favicon.png" />     

	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

	<!-- CSS -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="public/views/assets/css/webfonts/stylesheet.css">	
	<link rel="stylesheet" href="public/views/assets/css/normalize.css">	
	<link rel="stylesheet" href="public/views/assets/css/gridism.css">	
	<link rel="stylesheet" href="public/views/assets/css/forms.css" media="screen" >	
	<link rel="stylesheet" href="public/views/assets/slider/responsiveslides.css">
	<link href="public/views/assets/css/jquery.bxslider.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="all" href="public/views/assets/css/style.css" />

	<script src="public/views/assets/js/clickcount.js"></script>
	<!-- Work hard, and be nice  -->
	<meta property="og:url" content="<?= $base_url ?>" />
	<meta property="og:site_name" content="<?= $base_title ?>" />
  </head>
  <body class="<?= $PARAMS['a'] ?>">

  <? include "top-content.php"; ?>