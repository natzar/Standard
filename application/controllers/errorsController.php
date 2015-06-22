<?

class errorsController extends ControllerBase{

	function e404(){
		$this->view->show('errors/404.php',array());
		
	}
	function e0(){
		$this->view->show('errors/100.php',array());
		
	}
	function mysql(){
        echo '<h1>Welcome to Standart</h1>';
        echo '<h2>Installation Step 1</h2>';
        echo '<h3>Setup Mysql</h3>';
        
		echo ' Please edit config.php to match your database details'.'<br>';

		echo '<pre>';
        echo 'Database host: '.$this->config->get('dbhost').'<br>';
        echo 'Database Username: '.$this->config->get('dbuser').'<br>';;
        echo 'Database name: '.$this->config->get('dbname').'<br>';;
        echo 'Database Password: *****';
		echo '</pre>';		
		echo '<strong>It seems this information is not complete</strong><br><br>';
		echo 'After updating config.php file, click here <a href="'.$this->config->get('base_url').'">Try again</a>';
	}
}
		