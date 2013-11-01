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

