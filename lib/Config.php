<?php
class Config
{
    private $vars;
    private static $instance;
 
    private function __construct()
    {
        $this->vars = array();
    }
 
    //Con set vamos guardando nuestras variables.
    public function set($name, $value)
    {
        if(!isset($this->vars[$name]))
        {
            $this->vars[$name] = $value;
        }
    }
 
    //Con get('nombre_de_la_variable') recuperamos un valor.
    public function get($name)
    {
        if(isset($this->vars[$name]))
        {
            return $this->vars[$name];
        }
    }
 
    public static function singleton()
    {
        if (!isset(self::$instance)) {
            $c = __CLASS__;
            self::$instance = new $c;
        }
 
        return self::$instance;
    }
    public function print_vars(){
        return $this->vars;
    }
}
/*
 Uso:
 
 $config = Config::singleton();
 $config->set('nombre', 'Federico');
 echo $config->get('nombre');
 
 $config2 = Config::singleton();
 echo $config2->get('nombre');
 
*/
?>