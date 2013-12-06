<?php
class newsletterModel extends ModelBase
{
	

	public function send()
	{   

			include('../lib/class/class.phpmailer.php');
			
			// Get users info
			$consulta = $this->db->prepare("SELECT title,email FROM clientes");
			$consulta->execute();			
			// Post Variables
			$emailSubject = $_POST['emailSubject'];
			$emailBody = $_POST['emailBody'];
			
			$params = gett();
			$productos = $params['productos'];
			
			$LISTA_PRODUCTOS = '';
			
			$consultax = $this->db->prepare("SELECT * FROM productos where productosId IN (".implode(",",$productos).") order by title ASC");
			
			$consultax->execute();			
			$productos = $consultax->fetchAll();
			$LISTA_PRODUCTOS .= '<hr>';
			foreach($productos as $p):
				$LISTA_PRODUCTOS .= '<br>';
				$LISTA_PRODUCTOS .= $p['title']." ";
			endforeach;
			$LISTA_PRODUCTOS .= '<hr>';			
			$rows = $consulta->fetchAll();
			$r = '';
			$config = Config::singleton();
			foreach($rows as $row) {
				$auxEmailBody = nl2br($emailBody);
				$auxEmailBody = str_replace("[NOMBRE]",$row['title'],$auxEmailBody);
				$auxEmailBody = str_replace("[LISTA DE PRODUCTOS]",$LISTA_PRODUCTOS,$auxEmailBody);
				$emailUser = $row['email'];
				// Define mail object and mail parameters
				$mail = new PHPMailer();
				$mail->SetFrom( 'Luishfigueroa@96levels.com');
				$mail->AddReplyTo( 'Luishfigueroa@yahoo.es');
				$mail->Helo = "96levels.com";
				$mail->CharSet = "UTF-8";
				$mail->AddAddress($emailUser,$row['title']);
				$mail->Subject = utf8_decode($emailSubject);
				$mail->IsHTML(true);
				$mail->MsgHTML("<body>".$auxEmailBody."</body>");	
				$mail->AltBody = "Para ver este mensaje, por favor utilice uno compatible con html";			

				// Send and verify
				if(!$mail->Send()) {
				$r .= '<div class="alert alert-error">No se ha enviado a '. $row['title'].'. Compruebe su email<br>';
				$r .= 'Error es: '. $mail->ErrorInfo.'<br></div>';
				} else {
				$r .= '<div class="alert alert-success">Se ha enviado a '.$emailUser.'</div>';
				//$r .= '<div class="alert">'.$auxEmailBody.'</div>';
				}
				
			}

		return $r;
	}
}
?>
