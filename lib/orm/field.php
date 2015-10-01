<?



abstract class field{
	
	abstract protected function view();
	abstract protected function bake_field();
	abstract protected function exec_add();
	abstract protected function exec_edit();
		
	public $fieldname;
	public $type;
	public $value;

	public $label;
	public $rid;
	public $table;
	
   protected $db;
   
   public final function __construct($fieldname,$label,$type,$value,$table = -1,$rid = -1){
        $this->db = SPDO::singleton();
		$this->config = Config::singleton();
		$this->label = $label;
		$this->fieldname = $fieldname;
		$this->type = $type;
		$this->value = $value;
		$this->table = $table;
		$this->rid = $rid;
   
   }
	
	
}

/* Include field types */
require_once "color.php";
require_once "combo.php";
require_once "combo_child.php";
require_once "dias_semana.php";
require_once "disabled.php";
require_once "horario.php";
require_once "email.php";
require_once "featured.php";
require_once "fecha.php";
require_once "fechahora.php";
require_once "file_file.php";
require_once "file_img.php";
require_once "file_img_multi.php";
require_once "file_swf.php";
require_once "flash.php";
require_once "float.php";
require_once "hora.php";
require_once "literal.php";
require_once "mp3.php";
require_once "multiselect.php";
require_once "number.php";
require_once "password.php";
require_once "percent.php";
require_once "slug.php";
require_once "tags.php";
require_once "text.php";
require_once "tinymce.php";
require_once "truefalse.php";
require_once "url.php";
require_once "video_id.php";
require_once "visible.php";
require_once "youtube-real.php";
require_once "youtube.php";
require_once "profesores.php";
require_once "pedido.php";