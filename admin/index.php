<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
include "../lib/functions.php";
include "../lib/ControllerBase.php";
include "../lib/ModelBase.php";
include "../lib/orm/field.php";



class AdminController
{
	static function main()
	{
 
        mb_internal_encoding("UTF-8");
		require '../lib/Config.php'; //de configuracion
		require '../lib/SPDO.php'; //PDO con singleton
		require '../lib/ViewAdmin.php'; //Mini motor de plantillas
              
		require '../config.php'; //Archivo con configuraciones.
 
		/* Language */
        require $config->get('languagesFolder').$config->get('lang').'.php';
	    if (!isset($_SERVER['return_url'])) $_SERVER['return_url'] ='';
        $PATH = dirname(__FILE__);

		if(get_param('p') != -1) $controllerName = get_param('p')  . 'Controller';
		else  $controllerName = "showController";
 
		if(get_param('m') != -1) $actionName = get_param('m');
		else $actionName = "table";
                	
		$controllerPath = $config->get('controllersFolder') . $controllerName . '.php';

        $fingerprint = md5($_SERVER['HTTP_USER_AGENT'].$config->get('base_title'));
    	if (!isset($_SESSION['initiated_admin']) or !$_SESSION['initiated_admin'] or !isset($_SESSION['HTTP_USER_AGENT']) or  $_SESSION['HTTP_USER_AGENT'] != $fingerprint ){
			
			require( $config->get('controllersFolder') .'loginController.php');
    		$controller = new loginController();
    		if ($controllerName != 'loginController'){
    		$controller->index();
			} else { 
    		$controller->login();
				
			}
		}else {
         
     
    		if(is_file($controllerPath)) require $controllerPath;
    		else  die('El controlador '.$controllerPath.' no existe - 404 not found');
    		      
    		if (is_callable(array($controllerName, $actionName)) == false){
    			trigger_error ($controllerName . '->' . $actionName . '` no existe', E_USER_NOTICE);
    			return false;
    		}
    
        
        	
    		$controller = new $controllerName();
    		$controller->$actionName();
		}

	}
    
 
   

}

AdminController::main();

?>