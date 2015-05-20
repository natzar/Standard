<? include "layout/menu.php" ?>


<div class="container">
<div class="row ">
	<div class="col-lg-12"><h1 class="post-title">Contacto</h1>
	<small>&nbsp;</small>
	</div>
</div>
<div class="row ">
<div class="col-lg-4 col-md-4">
<p>
<strong>Horario (GMT +1)</strong><br>
De 9:00h - 14:00h<br>
de 15:00h - 17:00h<br>
<br>

<strong>BARCELONA</strong><br> Padilla 174, at 1. <br>08017 Barcelona, Spain. <br><br>

<br>
</p>



<br>


</div>
<div class="col-lg-8 col-md-8">

<? if (!isset($_POST['submit'])): ?>

<div class="alert alert-error">
<strong>Ha ocurrido un error</strong><br>
Por favor, vuelve a intentarlo. <a href="/<?= $_SESSION['lang']?>/contact">Click aquí</a>
</div>

<? else: ?>

<div class="alert alert-success">
<h4><?= ucfirst($_POST['nombre'])?>, gracias por contactarnos </h4>
<strong>Hemos recibido tu Mensaje</strong><br>
No tardaremos mucho en responderte.
</div>

<? 
	$msg = '';
	
	foreach($_POST as $a => $v)
		$msg .= $a.": ".$v."<br>";
		include "lib/vendor/class.phpmailer.php";
			$mail = new PHPMailer();
			//$mail->isSMTP();
			$mail->SetFrom('web@96levels.com');
		//	$mail->AddReplyTo('noreply@96levels.com');
			$mail->IsHTML(true);
			$mail->CharSet = "UTF-8";
//			$mail->AddAddress('work@96levels.com');
			$mail->AddAddress('hello@96levels.com');
			//$mail->AddBCC("hello@iguana.io");
			$mail->Subject = 'CONTACTO WEB';
			$mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
			$mail->MsgHTML("<body>".$msg."</body>");	
			$mail->Send();


	


endif; ?>

</div>

</div>
</div>



