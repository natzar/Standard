<center>
<img src="logo.gif"><br>
1.0
<hr>
<?

include "../lib/Config.php";
include "../config.php";
require '../lib/SPDO.php';
include dirname(__FILE__)."/../lib/ModelBase.php";

require "installModel.php";	
include "generatorModel.php";	
$install = new installModel();
$ACTION = $TABLE ='';

if (isset($_GET['action'])):
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
	else:
	
?>
		
		<a href="?action=makesetups">1. MakeSetups</a><br>
	<a href="?action=makemodels" class="btn">2. Make Models, Controllers, Forms and Views</a><br>
		<a href="?action=filldb">3. MakeSetups</a><br>
<?		
	
endif;

?>
</center>