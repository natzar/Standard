<?php

class newsletterController extends ControllerBase
{

    public function index(){
		    
		$this->view->show('newsletter.php',array("HOOK_JS" => ""));

	}
	
	public function sendNewsletter(){
		$ret = '';
		if(isset($_POST['emailSubject']) && isset($_POST['emailBody']) && strlen($_POST['emailSubject'])>1 && strlen($_POST['emailBody'])>1 ){
				include "models/newsletterModel.php";
				$newsletter = new newsletterModel();
				$ret = $newsletter->send();		
		}
				$this->view->show('newsletter_ok.php',array("HOOK_JS" => "","content" => $ret));
	
	}
    
   }
?>

