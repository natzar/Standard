<?php
class deleteController extends ControllerBase
{

    public function deleteFile(){
        require 'models/deleteModel.php';
    	$deleteModel = new deleteModel();
   	   $table = $_GET['table'];
        $field = $_GET['f'];
        $id = $_GET['rid'];
        
    	$deleteModel->deleteImage($table,$field,$id);
		echo '1';
    }
	 
	public function deleteRow()
	{
            	
        require 'models/deleteModel.php';
    	$deleteModel = new deleteModel();
	    $table = $_GET['table'];
    	$id = gett('rid');
    	$deleteModel->deleteRow($table,$id);
		echo '1';		
	}
 
}
?>





