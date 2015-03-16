<?          

require $config->get('path')."/tools/installModel.php";	
require $config->get('path')."/tools/generatorModel.php";	
$install = new installModel();
$ACTION = $TABLE ='';

if (isset($_GET['action'])):
	
	echo '<div class="alert alert-info info" id="statusAlert">';
	$ACTION = $_GET['action'];
	if (isset($_GET['table'])):
	$TABLE = $_GET['table'];
	endif;
	switch($ACTION):
		case 'makesetups':
		$install->makesetups($TABLE);
		break;
		case 'filldb':
		$install->filldb(30);
		break;
		case 'makemodels':
		$gem = new generatorModel();
		$gem->generateModels('');
		break;
	endswitch;
	echo '</div>';
	
endif;

?>


     



<div class="jumbotron">
        <h1><?= $config->get('seo_title') ?></h1>
        <p class="lead"><?= $config->get('seo_description') ?></p>
        <p><?= WELCOME ?></p>
<!--         <p><a class="btn btn-lg btn-success" href="#" role="button">Download</a></p> -->
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
        
        
         <h4>Installation</h4>
          <p>All starts with your Mysql Tables. <strong>When your tables are done, continue with installation. </strong>You'll be able to change/update any tables at any time</p>
          <ol>
          <li>Setup config.php, set project settings, admin passwords, mysql data ...</li>
          <li>Chmod 777 /setup/ </li>         
          <li>Use Auto generators to map MySql Tables & Fields</li>
			</ol>
			
			
			<h4>Auto generators</h4>
			<p>These are required to write the /setup/ files and map Mysql Tables and fields.
			Setup files are created automatically from admin. You can generate also controllers and models</p>



          
          
             <h4>Completing Installation</h4>
<ul>
          <li>Revise all new files created at /setup/ folder</li>
          <li>chmod 744 /setup/</li>
          <li>Delete /tools</li>
          <li>chmod 744 /application/ {controllers, models}</li>
		

</ul>
          <h4>Admin Application</h4>
          <p>         You will be able to view your db data, add, edit or delete fields. Go to <a href="admin">/Admin</a> to check the CRUD application. If you haven't configured MySql yet, probably you get an error.           You can login usign user/password defined in config.php. </p>
          
      
    

        </div>
        


        <div class="col-lg-6">
            <h4>Road Map</h4>
          <ol>
          	<li>Manage exceptions and informative fatal errors</li>
          	<li>MySQL errors. Allow init without mysql setup</li>
          	<li>Documentation</li>
          	<li>Easy installation Script.</li>
          	<li>Easy way to manage more ORM/fields</li>
          	<li>Sitemap Auto generator</li>
          	<li>RSS for each table</li>
          </ol>
          
<h4>Customization</h4>
<p>Please contact beto at betolopezayesa@gmail.com if you want to integrate Standart with your project, HTML or design.</p>

          <h4>Config</h4>
          <p>Update config.php file with your mysql data, user/password for admin and other variables</p>

 <h4>MySql Tables</h4>
          <p>
          Just take in mind: Every table must have a PRIMARY, auto increment FIELD named `tableId`. That is the table name in lowercase sufixed with `Id`, note 'I' uppercase. Example, table 'users' must have usersId as a unique, primary, auto increment field.
          </p>

          
          <h4>Setups Files</h4>
          <p>/setup/ folder contains one php file for each Mysql Table. Here you will find the way that is used to map the mysql fields to custom (and more human) field TYPES.</p>
          
          
                   <h4>Foreign Keys</h4>
          <p>Just use the same as before. `tablenameId`, and all will be fine.</p>
          
          <h4>ORM or fields mapping</h4>
          <p>at /lib/orm you will find one php file for any field type. From url.php to youtube.php or file_img. Duplicate one file to create your custom fields.</p>
                
          <h4>Drag and Drop Rows Sorting</h4>
          <p>If you want to use drag and drop rows sorting, in admin panel, just create a field called "orden" on any table you want that feature.</p>
          





                            </div>

            </div>
      
      