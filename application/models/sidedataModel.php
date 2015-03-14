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
        	$tableList[] = $row[0];        	
        }
        return $tableList;
	}
	function load(){
		
		$sidedata = array(
			"tables" => $this->tableList()		
		);
		
		return $sidedata;
	}

}
