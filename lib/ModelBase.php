<?php

   
abstract class ModelBase
{
	protected $db;
	protected $cache;
 	protected $config;
	public function __construct()
	{
		$this->db = SPDO::singleton();
		$this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		$this->config = Config::singleton();
		$this->cache ='';

	}
    
    public function query($query){        
        $q = $this->db->prepare($query);
        $q->execute();
        if ($q->rowCount() > 1){
            return $q->fetchAll();
        }else if ($q->rowCount() > 0){
            return $q->fetch();
        }
        
        return false;
    }


}
?>