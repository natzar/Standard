<?
/*
	96 Mico Framework
 Side data Commom data used throught wide app */

class sidedataModel extends ModelBase
{

	function load(){
		
		include_once "blogcategorysModel.php";
		include_once "contenidossubcategorysModel.php";

		$cats =  new blogcategorysModel();
		$jcats = new contenidossubcategorysModel();
		$sidedata = array("cats" => $cats->getAll()
			/*
"juegoscats" => $jcats->getByContenidoscategorysId(2),
			"actividadescats" => $jcats->getByContenidoscategorysId(1)
*/
			);

		
		
		return $sidedata;
	}

}
