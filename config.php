<?

$config = Config::singleton();
	$config->set('version',1);
	
	$config->set('lang','esp');
	$config->set('available_langs',array('esp'));
	$config->set('base_title','L.U.I.S.');
	$config->set('base_url','//localhost/alphas/96MicroFramework/');
	$config->set('base_url_data','//localhost/alphas/96MicroFramework/data/');
	$config->set('db_prefix','');
	
	$config->set('tabla_default','clientes');
    
    $config->set('validUser','test');
    $config->set('validPass','test');

	/* Toggles */
	$config->set('developer_mode',1);
	$config->set('combo_add',0);
	$config->set('delete_permission',1);



	$config->set('big_h',0);// 0 for no resize
	$config->set('big_w',0); // 0 for no resize
	$config->set('img_content_w',503);
	$config->set('img_content_h',0);
	$config->set('thumb_h',180);
	$config->set('thumb_w',260);
	



    $PATH = dirname(__FILE__);

	$config->set('path',$PATH); 
	
	$config->set('setup_dir',$PATH.'/setup/');
	$config->set('data_dir',$PATH.'/data/');

	$config->set('controllersFolder', 'controllers/');
	$config->set('modelsFolder', 'models/');
	$config->set('viewsFolder', 'views/');
  	$config->set('setupFolder', $PATH.'/setup/');
  	$config->set('languagesFolder', $PATH.'/language/');
  		 
	$config->set('dbhost', 'localhost');
	$config->set('dbname', 'luis');
	$config->set('dbuser', 'root');
	$config->set('dbpass', 'tryagain');

