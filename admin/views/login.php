<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<title><?= $base_title ?> | Backoffice</title>
		

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">
	<meta name="author" content="" />

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,800italic,400,600,800" type="text/css">
	<link rel="stylesheet" href="views/css/font-awesome.min.css" type="text/css" />		
	<link rel="stylesheet" href="views/css/bootstrap.min.css" type="text/css" />	
	<link rel="stylesheet" href="views/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.css" type="text/css" />	
	
	<link rel="stylesheet" href="views/css/App.css" type="text/css" />
	<link rel="stylesheet" href="views/css/Login.css" type="text/css" />

	<link rel="stylesheet" href="views/css/custom.css" type="text/css" />
	
</head>

<body>

<div id="login-container">

	<div id="logo">
		<a href="views/login.html">
			<img src="views/img/logos/logo-login.png" alt="Logo" />
		</a>
	</div>

	<div id="login">

		<h3>Bienvenido a <?= $base_title ?> Backoffice</h3>

		<h5>Por favor introduce tus datos para entrar</h5>

		<form id="login-form" action="login/login" class="form" method="post">

			<div class="form-group">
				<label for="login-username">Username</label>
				<input type="text" class="form-control" name="user" id="login-username" placeholder="Username">
			</div>

			<div class="form-group">
				<label for="login-password">Password</label>
				<input type="password" class="form-control" name="pass" id="login-password" placeholder="Password">
			</div>

			<div class="form-group">

				<button type="submit" id="login-btn" class="btn btn-primary btn-block">Signin &nbsp; <i class="fa fa-play-circle"></i></button>

			</div>
		</form>
	<? if (get_param('c') == 1) {?>
					<div class="alert alert-error">

							<strong>Oops...</Strong> Usuario / Password incorrectos

					</div>
					<? } ?>
				
				<? if (get_param('c') == 2) {?>
					<div class="alert alert-error">

							<strong>Oops...</Strong> Demasiados intentos. Prueba más tarde

					</div>
					<? } ?>

<br><a href="../">volver a la página</a>


	</div> <!-- /#login -->




</div> <!-- /#login-container -->

<script src="views/js/libs/jquery-1.9.1.min.js"></script>
<script src="views/js/libs/jquery-ui-1.9.2.custom.min.js"></script>
<script src="views/js/libs/bootstrap.min.js"></script>

<script src="views/js/App.js"></script>

<script src="views/js/Login.js"></script>

</body>
</html>