<?php
class showController extends ControllerBase
{

    public function table(){
    	$config = Config::singleton();
	    require 'models/showModel.php';
		$items = new showModel();
     	$table = get_param('a') != -1 ? get_param('a') : $config->get('tabla_default');
		$_SESSION['return_url'] =  $_SERVER['REQUEST_URI'] ;
		$data = Array(/* "table_label" => $table_label, */
		          "title" => "BackOffice | $table",
		          "items_head" => $items->getItemsHead($table),
		          "items" => $items->getAll($table),
		          "HOOK_JS" => $items->js($table),
                  "table" => $table,
					"table_label" =>$items->getTableAttribute($table,'table_label'),
					"notification" => get_param('i') != -1 ? 'Se ha guardado correctamente' : ''
		      		          
		          );
		
		 $this->view->show("show.php", $data);	
    }
    
       	public function search(){
	
		$params = gett();
        include "models/showModel.php";
        $items = new showModel();
		$table = $params['table'];		
		$config = Config::singleton();
	    
     //	$_SESSION['return_url'] =  $_SERVER['REQUEST_URI'] ;
		
		$data = Array(/* "table_label" => $table_label, */
		          "title" => "BackOffice | $table",
		          "items_head" => $items->getItemsHead($table),
		          "items" => 		$items->search($params),
		          "HOOK_JS" => $items->js($table),
                  "table" => $table,
					"table_label" =>$items->getTableAttribute($table,'table_label'),
					"notification" => get_param('i') != -1 ? 'Se ha guardado correctamente' : ''
		      		          
		          );
		          
		
				 $this->view->show("show.php", $data);
	}
	 public function detail(){
    	$config = Config::singleton();
	    require 'models/showModel.php';
		$items = new showModel();
     	$table = get_param('a');
     	$tableForeignId=get_param('i');		
		$_SESSION['return_url'] =  $_SERVER['REQUEST_URI'] ;
		$data = Array(/* "table_label" => $table_label, */
		          "title" => "BackOffice | $table",
		          "items_head" => $items->getItemsHead($table),
		          "items" => $items->getAllByField($table,'coursestypesId',$coursestypesId),
		          "HOOK_JS" => $items->js($table),
                  "table" => $table, 
					"table_label" => "Courses: ". $titles[$coursestypesId], //$items->getTableAttribute($table,'table_label'),
					"notification" => get_param('i') != -1 ? 'Se ha guardado correctamente' : ''
		      		          
		          );

		
		$this->view->show("show-detail.php", $data);
		
		
    }
    
    
     public function coursesdetail(){
      $config = Config::singleton();
      require 'models/showModel.php';
		$items = new showModel();
     	$table = 'courses';
     	$coursesId=get_param('a');
$_SESSION['coursesId'] =  $coursesId ;
$_SESSION['return_url'] =  $_SERVER['REQUEST_URI'] ;
    	require 'models/formModel.php'; 	

		$form = new formModel();



        $raw =  $form->getFormValues($table,$coursesId);
        
        	$_SESSION['course_label'] =   $raw['title'] ;
        
				$data = Array(/* "table_label" => $table_label, */
		          "title" => "BackOffice | $table",
		          "coursesId" => $coursesId,
		          "details" => $raw,
		          "table_fases" => $items->getAllByField('fases','coursesId',$coursesId),
		          "table_pages" =>  $items->getAllByField('courses_pages','coursesId',$coursesId),
		          "table_pages_m" =>  $items->getAllByField('apartados_programas','coursesId',$coursesId),
		          "table_challengers" => $items->getAllByField('challengers','coursesId',$coursesId),
		          		          "table_files" => $items->getAllByField('coursefiles','coursesId',$coursesId),
"items_head_fases" => $items->getItemsHead('fases'),
"items_head_pages_m" => $items->getItemsHead('apartados_programas'),
"items_head_pages" => $items->getItemsHead('courses_pages'),
"items_head_challengers" =>$items->getItemsHead('challengers'),
"items_head_files" =>$items->getItemsHead('coursefiles'),
		          "HOOK_JS" => $items->js($table),
		          "table" => $table,
                  "table_label" => $raw['title'], 

					"notification" => get_param('i') != -1 ? 'Saved successfully' : ''
		      		          
		          );
		$this->view->show("detail-course.php", $data);
		
		
    }
    
}
?>
