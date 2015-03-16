<?php
/**
 * Edit this configuration fail according to your needs
 */
$conf = array(
	'app' => array(
		'name' => 'myApp',
	),
	'steps' => array(
		1 => array(
			'title' => 'Prerequisites' ,
			'description' => 'Before proceeding with the installation, some tests will be done to ensure your server is able to install and run the software',
			'view' => 'checklist.php',
			'controller' => 'checklistCtrl.php',
			'btnTxt' => 'Next',
		),
		2 => array(
			'title' => 'Database settings',
			'description' => 'Now define the connection settings for the database (Currently only MySQL databases are supported)',
			'view' => 'dbsettings.php',
			'controller' => 'dbsettingsCtrl.php',
			'btnTxt' => 'Next',
		),
		3 => array(
			'title' => 'Setup database',
			'description'=> 'We are now ready to proceed with creation of all required tables and populate them with data.',
			'view' => 'setupdb.php',
			'controller' => 'setupdbCtrl.php',
			'btnTxt' => 'Setup',
		),
		4 => array(
			'title' => 'Administation account',
			'description'=> 'Create the main administrator account',
			'view' => 'account.php',
			'controller' => 'accountCtrl.php',
			'btnTxt' => 'Register',
		),
		5 => array(
			'title' => 'Installation completed',
			'description' => 'Congratulations! you have successfuly installed the software.',
			'view' => 'completed.php',
			'controller' => 'completedCtrl.php',
			'btnTxt' => 'Finish',
		),
	),
	'required' => array(
		'version' => 5.3,
	),
	'sqlscripts' => array(
		'tables.sql',
	),
);
?>