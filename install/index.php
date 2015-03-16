<?php
/**
 * PHP OpenWizard (Setup wizard) by Jorge Rivera
 */
require 'includes/configuration.php';
$step = isset($_GET['step']) ? $_GET['step'] : 1;
$step = intval($step);
$ctrlrPath = $step > 1 ? 'includes/'.$conf['steps'][$step - 1]['controller']:null;
if($ctrlrPath && file_exists($ctrlrPath)){
	require $ctrlrPath;
	$error = controller($_POST);
}
$error = isset($error) ? $error : false;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?=$conf['steps'][$step]['title']?></title>

<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css">
<link rel="stylesheet" href="views/media/style.css">
    
<!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
<![endif]-->

</head>
<body>
<?php 
// Sanity check
if(false):
?>
<div class="error pure-g-r">
	<div class="pure-u-1">
		<h2>Error: PHP interpreter is not running</h2>
		<p>This installer requires that your web server is running PHP. Your server does not have PHP installed, or PHP is turned off.</p>
	</div>
</div>
<?php
endif;
if($error):
	throw $error;
endif;
?>

	<div id="layout" class="pure-g-r">
		<div id="content" class="pure-u">
			<div class="header">
				<h1 class="title"><?=$conf['steps'][$step]['title']?></h1>
				<p><?=$conf['steps'][$step]['description']?></p>
			</div>
				<form action="index.php?step=<?=$step+1?>" method="post" class="pure-form pure-form-aligned">
						<?php
							include 'views/'.$conf['steps'][$step]['view'];
						?>
					<div class="controls">
						<em>Step <?=$step?>/<?=count($conf['steps'])?> - <?=$conf['steps'][$step]['title']?></em>
						<button type="submit" class="pure-button pure-button-primary right"><?=$conf['steps'][$step]['btnTxt']?></button>
						<button type="" class="pure-button pure-button-disabled right">Back</button>
					</div>
				</form>
		</div>
		<div id="sidebar" class="pure-u">
			<img src="views/media/logo.png" alt="<?=$conf['app']['name']?>" >
			<ul>
			<?php
			foreach ($conf['steps'] as $key => $stage) {
				$status = $key < $step ? 'class = "done"' : '';
				$status = $key === $step ? 'class = "current"': $status;
				echo '<li '.$status.' >'.$stage['title'].'</li>';
			}
			?>
			</ul>
			<div class="footer">
				Powered by: <a href="#" target="_blank">PHP Simple Installer</a>
			</div>
		</div>
	</div>

</body>
</html>
