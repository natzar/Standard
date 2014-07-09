<!DOCTYPE html>
<html lang="<?= $_SESSION['lang']?>">
<head>
  <!-- 
  
  Sabes que podrías cobrar por estar toqueteando código?
  Trabaja con nosotros www.96levels.com
  
   -->
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
    <base href="<?= $base_url ?>" content="<?= $base_url ?>">

	<!-- Favicon -->    
	<link rel="icon" type="image/png" href="favicon.png" />
	<link rel="shortcut icon" href="favicon.ipng">
	<link rel="icon" type="image/png" href="favicon.png" />     

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Noto+Serif:400,700,400italic|Open+Sans:700,400" />
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,400italic' rel='stylesheet' type='text/css'>

	<!-- Twitter Bootstrap Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- CSS -->
    <link rel="stylesheet" type="text/css" media="all" href="public/css/style.css" />
	
	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

	<!-- Work hard, and be nice  -->
	<!-- Facebook -->
	<meta property="og:url" content="<?= $base_url ?>" />
	<meta property="og:site_name" content="<?= $base_title ?>" />
	<meta property="og:image" content="<?= $seo_image ?>" />
  </head>
  <body class="">

  <? include "top-content.php"; ?>