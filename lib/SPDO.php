<?php
class SPDO extends PDO
{
	private static $instance = null;
 
	public function __construct()
	{
		$config = Config::singleton();
		parent::__construct('mysql:host=' . $config->get('dbhost') . ';dbname=' . $config->get('dbname'),
$config->get('dbuser'), $config->get('dbpass'));
parent::exec("SET NAMES utf8");
try  
            {  
                $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            } 
            catch (PDOException $e)  
            { 
                die($e->getMessage()); 
            } 
	}
 
	public static function singleton()
	{
		if( self::$instance == null )
		{
			self::$instance = new self();
		}
		return self::$instance;
	}

     public function get_error()  
        { 
            $this->errorInfo(); 
        } 
}
?>