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
include "models/generatorModel.php";	
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
		$install->filldb();
		break;
		case 'makemodels':
		$gem = new generatorModel();
		$gem->generateModels();
		break;
	
	}
 

		case 'models':
		$install->generateModels();
		break;	
		endswitch;
	else:
	
?>
		
		<a href="?action=makesetups">1. MakeSetups</a><br>
<?		
	
endif;

?>
</center>