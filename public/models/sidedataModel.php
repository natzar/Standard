<?
/*
	96 Mico Framework
 Side data Commom data used throught wide app */

class sidedataModel extends ModelBase
{

	function load(){
		
		include "categorysModel.php";
		include "juegoscategorysModel.php";
		$cats =  new categorysModel();
		$jcats = new juegoscategorysModel();
		$sidedata = array("cats" => $cats->getAll(),
			"jcats" => $jcats->getAll());

		
		
		return $sidedata;
	}

}
