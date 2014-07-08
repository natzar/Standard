
<html>
	<head>
		<title><?= $base_title ?> | Backoffice</title>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
	<!-- Twitter Bootstrap Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	</head>
	<body style="text-align:center;background:#fefefe;"> 
	<div class="container">
	<BR><BR><br><br>
	<center>
<div style="width:300px;">
	<div style="text-align:left;">
		<center><h3><?= $base_title ?></h3>
	<form class="well" action="<?= $base_url ?>admin/do_login" method="post">

	<label><strong>Usuario</strong></label>
	<input class="span3" style="height:auto;" type="text" name="user"><BR>

	<label><strong>Contraseña</strong></label>
	<input type="hidden" name="token" value="">
	<input type="password" style="height:auto;" name="pass"><BR>
	<input type="submit" class="btn" value="Entrar">


	</form>
	</center>
			</div>
			<? print_r($_SESSION) ?>
			
			<? if (gett('c') == 1) {?>
					<div class="alert alert-error">

							<strong>Oops...</Strong> Usuario / Password incorrectos

					</div>
					<? } ?>
				
				<? if (gett('c') == 2) {?>
					<div class="alert alert-error">

							<strong>Oops...</Strong> Demasiados intentos. Prueba más tarde

					</div>
					<? } ?>

	</div>
	</center>
	</div>
	</body>
</html>
