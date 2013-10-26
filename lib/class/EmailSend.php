<?php
class EmailSend
{
	public function sendEmail($name, $vars = array(), $subject, $destinatarios) {
		$config = Config::singleton();

		$path = $config->get('viewsFolder')."emails/".$name;
		
		if (file_exists($path) == false){
			trigger_error ('Template `' . $path . '` does not exist.', E_USER_NOTICE);
			return false;
		}
	
    	$vars['page'] = $name;
		$vars['base_url'] = $config->get('base_url');
  		$htmlmsg = "";
		ob_start();
		if (is_array($vars))
			foreach ($vars as $key => $value)
        		$$key = $value;

        include $config->get('viewsFolder')."emails/top.php";
		include $path;
		include	$config->get('viewsFolder')."emails/footer.php";
		$htmlmsg =ob_get_contents() ;
		ob_end_clean();

		require("lib/class/class.phpmailer.php");

		foreach ($destinatarios as $email) {
		

			$mail = new PHPMailer();
			$mail->SetFrom('hello@iguana.io');
			$mail->AddReplyTo('hello@iguana.io');
			$mail->IsHTML(true);
			$mail->Helo = "www.iguana.io";
			$mail->CharSet = "UTF-8";
			$mail->AddAddress($email,'beto');
			$mail->AddBCC("hello@iguana.io");
			$mail->Subject = utf8_decode($subject);
			$mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
			$mail->MsgHTML("<body>".$htmlmsg."</body>");	
			$mail->Send();
			

		}
	}
}

