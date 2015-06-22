<html>
	<head>
		<title><?= $base_title ?> | Backoffice</title>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
	<!-- Twitter Bootstrap Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?= $base_url ?>/public/vendor/bootstrap-3.3.2-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= $base_url ?>/public/vendor/bootstrap-3.3.2-dist/css/bootstrap-theme.min.css">
	    <base href="<?= $base_url ?>"></base>
<script language="javascript" type="text/javascript" src="<?= $base_url ?>/public/vendor/jquery-1.11.2/jquery-1.11.2.min.js"></script>
		<script language="javascript" type="text/javascript" src="<?= $base_url ?>/public/vendor/background-resize.js"></script>

<style>*{color:white} </style>

		
	</head>
	<body style="text-align:center;"> 
<div id="background"></div>
	<div class="container">
	<BR><BR><br><br>
	<center>
<div style="width:320px;">
	<div style="text-align:left;">
		<center><h3><?= $base_title ?></h3>
	<form class="" style="padding:40px;border:2px solid white" action="<?= $base_url ?>admin/do_login" method="post">

			
			<? if (isset($_SESSION['error']) and !empty($_SESSION['error'])) {?>
					<div class="alert alert-error">

							<strong>Oops...</Strong> <?=$_SESSION['error'] ?>

					</div>
					<? } ?>
				
			

	<input class="input span2 form-control" style="height:auto;" type="text" placeholder="Usuario" name="email">
<br>
	<input type="password" placeholder="Contraseña" class="input span2 form-control" name="pass"><BR>
		<input type="hidden" name="token" class="" value="">
	<input type="submit" class="btn btn-success" value="Entrar">


	</form>
	</center>
	Version: <?= $config->get('version') ?> (Update: <?= $config->get('updated') ?>)
			</div>
			

	</div>
	</center>
	</div>

		
<script type="text/javascript"> 
			$(document).ready(function(){
				$('#background').smartBackgroundResize({
					image: '<?= $base_url ?>/public/admin/img/background.jpg' // relative or absolute path to background image file				
				});
			});
		</script>		
	</body>
</html>
