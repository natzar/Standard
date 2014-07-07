<?php
class menuModel extends ModelBase
{
	
   	public function menu()
	{   
    	$config = Config::singleton();
        
        $consulta = $this->db->prepare("SHOW TABLES FROM ".$config->get('dbname'));
        $consulta->execute();
        
        $menu = array();
        $db_prefix = $config->get('db_prefix');
        while ($row = $consulta->fetch()) {
          if ($db_prefix == '' or strstr($row['Tables_in_'.$config->get('dbname')],$db_prefix) )
			if (file_exists("setup/".$row['Tables_in_'.$config->get('dbname')].".php")){
			    include "setup/".$row['Tables_in_'.$config->get('dbname')].".php";
    	    	$menu[] = array($row['Tables_in_'.$config->get('dbname')],$table_label);
    	    }
    	}
       return $menu;
    }
}
?>
