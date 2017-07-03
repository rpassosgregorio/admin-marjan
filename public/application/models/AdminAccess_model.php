<?php

class AdminAccess_model extends MY_Model {
	
	public $id;
	public $id_admin;
	public $id_submodule;
	public $deleted;
	public $order;
	public $active;
	
	public $table_default = 'admin_access';
	public $table_default_prefix = '';
	public $relationship = array();

	public function __construct(){
		
    	parent::__construct();
    	$this->table_default_prefix = $this->db->dbprefix.$this->table_default;
    	
	}
	
	
}

?>