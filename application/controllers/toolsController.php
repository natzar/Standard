<?

class toolsController extends ControllerBase
{
		public function uploadImages(){
	
			include "application/models/toolsModel.php";
			$tools = new toolsModel();
			
			$tools->uploadImages();
		}
		
		
		
					
					

				
					/* resize_image($this->get_extension($filename_new),$this->config->get('data_dir').'img/'.$filename_new,$this->config->get('data_dir').'img/'."thumbs/".$filename_new,$this->config->get('thumb_w,$this->config->get('thumb_h) ; */
			//return $filename_new;	
		
}