<?
// DIVE TRADERS
// mail Controller
// 06-2015
// Beto Ayesa @ 96levels 
// www.96levels.com / hello@96levels.com


class mailController extends ControllerBase
{
		public function index(){
			include_once "application/models/mailModel.php"; 	
			$mail = new mailModel();			
			$data = Array(
				  "items" => $mail->getAll()
		          );         
			$this->view->show("mail/inbox.php", $data);
		}
		
		public function detail(){
			require "application/models/mailModel.php"; 	
			$mail = new mailModel();	
			$params = gett();
			$id = $params["a"];		
			$data = Array(
				  "items" => $mail->getByMailId($id)
		          );         
			$this->view->show("mail/email.php", $data);
		}
		


		public function fromUsers(){
			$params = gett();
			require "application/models/mailModel.php"; 	
			$mail = new mailModel();
			$data = Array(
				  "items" => $mail->getByFromUsersId($params["a"])
			      );	          
			$this->view->show("related-table.php", $data);
		}		


		public function toUsers(){
			$params = gett();
			require "application/models/mailModel.php"; 	
			$mail = new mailModel();
			$data = Array(
				  "items" => $mail->getByToUsersId($params["a"])
			      );	          
			$this->view->show("related-table.php", $data);
		}		

		
		public function sendMessage(){
			include_once "application/models/mailModel.php";          
			$mail = new mailModel();
			$params = gett();
			$params['fromUsersId'] = $_SESSION['usersId'];
			$mail->sendMessage($params);
			$this->index();

		}
		
		public function edit(){
			require "application/models/mailModel.php";          
			$mail = new mailModel();
			$params = gett();
			$params = gett();
			$params['table'] = "mail";
			if ($mail->PUT($params)) echo 1;
			else echo 0;
		}
		
		public function delete(){
			require "application/models/mailModel.php";          
			$mail = new mailModel();
			$params = gett();
			if ($mail->delete($params)) echo 1;
			else echo 0;
		}
		
		public function search(){
			$params = gett();
			require "application/models/mailModel.php"; 	
			$mail = new mailModel();
	
			$json = new Services_JSON();	
			$data = Array( "items" =>  $mail->search($params)	);         
			$this->view->show("search.php", $data);
		}


}