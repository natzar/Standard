<?


class contactoController extends ControllerBase
{
		public function index(){
		  $title = "";
		  
		  if ($_SESSION['lang'] == 'es'):
		  $title = 'Contacto';
		  elseif ($_SESSION['lang'] == 'ca'):
		  $title = 'Contacte';
		  else:
		  $title = 'Contact';
		  endif;
		  
		  
			$this->view->show('contact/contact.php',array("SEO_TITLE" => $title));				  
		}
		  
		 public function sendEmail(){		
			$msg = '';
			include "lib/vendor/class.phpmailer.php";
			foreach($_POST as $a => $v):
				$msg .= "<strong>".$a."</strong>: ".$v."<br>";		
			endforeach;		 				
				$mail = new PHPMailer();
				$mail->SetFrom($this->config->get('base_email'));
				$mail->IsHTML(true);
				$mail->CharSet = "UTF-8";
				$mail->AddAddress($this->config->get('base_email'));
				$mail->Subject = 'Contacto Formulario Web';
				$mail->AltBody = "To view the message, please use an HTML compatible email viewer!";
				$mail->MsgHTML("<body>".$msg."</body>");	
				$mail->Send();
	
			$this->view->show('contact/contact-ok.php',array("msg" => $msg));				  
		 }
 }