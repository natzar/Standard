<?
include_once("../lib/Config.php");
include_once("../config.php");
include_once("../lib/SPDO.php");
include_once("../lib/functions.php");
include_once("../lib/ModelBase.php");

class contenidos extends ModelBase{

		function index(){
			
			$q = $this->db->prepare("SELECT * FROM contenidos");
			$q->execute();
			$c = $q->fetchAll();
			
			foreach ($c as $o):
				$slug = generate_seo_link($o['title']);
				$id = $o['contenidosId'];
				$q2 = $this->db->prepare("UPDATE contenidos set slug='".$slug."' where contenidosId='".$id."'");

				if (				$q2->execute()) echo 'ok-';
				else echo 'error-';
				echo $id.' '.$slug.' - '.$o['title'].'<br>';			
			endforeach;
		   		

	    	
		}

		
	

}


$aux = new contenidos();
$aux->index();



        
        