<?php
class installController extends ControllerBase
{

    public function makeSetups(){
        require 'models/installModel.php';
    	$installModel = new installModel();
    	$params = gett('a');
        $installModel->makeSetups($params);
        
    }
	     public function fillDb(){
        require 'models/installModel.php';
    	$installModel = new installModel();
		$ENTRYS_TABLE = 5;
        $installModel->fillDb($ENTRYS_TABLE);
        
    }
		public function getmodels(){
		include "models/generatorModel.php";
		$gem = new generatorModel();
		$gem->generateModels();
	
	}
 
}
?>





