<?
/*
	96 Mico Framework
 Side data Commom data used throught wide app */

class sidedataModel extends ModelBase
{

	function tableList(){			
        $config = Config::singleton();
        
        $dbname = $config->get('dbname');
   
        $consulta = $this->db->prepare('SHOW TABLES FROM '.$dbname);
        $consulta->execute();
        
        $tableList = Array();
        while ($row = $consulta->fetch(PDO::FETCH_NUM)) {
        	$tabla_no_prefix = substr($row[0],strlen($config->get('db_prefix')));
        	$tableList[] = array($tabla_no_prefix,$row[0]);        	
        }
        return $tableList;
	}
	function load(){
		
		$sidedata = array(
			
		);
		
		return $sidedata;
	}

}
