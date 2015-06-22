<?


class apiController extends ControllerBase
{

	public function divecenters(){
			require "application/models/divecentersModel.php"; 	
			$divecenters = new divecentersModel();
			$items = array();
			if (!isset($_GET['filter'])){
				$items = $divecenters->getAll();
			}else{
				$items = $divecenters->search($_GET['filter']);
			}

			$data = Array(
				  "divecenters" => $items,
		          );         
			echo json_encode($data);
		}
		
		
   		
}