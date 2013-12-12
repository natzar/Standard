<?php
/*
Basic Router
example:  'ID_PAGINA' => ['friendly_url','page title','controlador','metodo'],

@-> router returns array[controlador,metodo]
@-> get returns Friendly URL for a [controlador,metodo] pair

*/

class urlHelper {
	protected $db;
	
	public function translate($p,$m){
		
		$this->db = SPDO::singleton();
		$this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
		$c=$this->db->prepare("SELECT ".$p."Id FROM ".$p." where slug='".$m."' limit 1");

		$c->execute();
		$aux = $c->fetch();
		if (!empty($aux[$p.'Id'])) return $aux[$p.'Id'];
		else return -1;
	}	
	
	
	public function router($p,$m = -1){
		if (is_int(intval($m)) and intval($m) > 0) {
			if (isset($_POST['i']) and $_POST['i'] != -1 and $_POST['i']!='') $p = $_POST['i'];
			if (isset($_GET['i']) and $_GET['i'] != -1 and $_GET['i']!='') $p = $_GET['i'];
			
			$_POST['a'] = $m;
			$_GET['a'] = $m;
		}
	
		if ($m != -1 and intval($m) < 1) return array($p.'Controller',$m);
		
		$config = Config::singleton();
		$URLS = $config->get('URLS');
		$array_return = array();
		foreach($URLS as $url){
			if ($p == $url[0])
			return array($url[2],$url[3]);
		}
			
		return array($p.'Controller',$m);
	}

	
	public function get($page_id){
			$config = Config::singleton();
			$URLS = $config->get('URLS');
			if (isset($URLS[$page_id][0]))
				return $config->get('base_url').$URLS[$page_id][0];		
			else return "Page ID not found";
		
	}
	

}


	
	

?>