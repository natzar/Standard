<?
include_once("../lib/Config.php");
include_once("../config.php");
include_once("../lib/SPDO.php");
include_once("../lib/ModelBase.php");

class contenidos extends ModelBase{

		function index(){
			foreach (scandir(dirname(__FILE__).'/../data/files/') as $filename) {
		   	 $path = dirname(__FILE__) .'/../data/files/' . $filename;
	    		if (is_file($path) and strstr($filename,".swf")) {
	      		//echo substr($filename,0,-4).'<br>';
		   	//	$c =  $this->db->prepare("INSERT INTO contenidos (title,file_contenido_swf) VALUES ('".substr($filename,0,-4)."','".$filename."')" );
		   	//	$c->execute();
		   		
		   		
		   		 echo 'including '.$path.'<br>';
	    	} 
		}

		
	}

}


$aux = new contenidos();
$aux->index();



        
        