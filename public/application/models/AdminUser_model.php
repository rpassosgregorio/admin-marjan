<?php

class AdminUser_model extends MY_Model {
	
	public $id;
	public $code;
	public $name;
	public $email;
	public $password;
	public $deleted;
	public $order;
	public $date_last_login;
	public $inserted_by;
	public $date_last_update;
	public $date_insertion;
	public $active;
	
	public $table_default = 'admin_user';
	public $table_default_prefix = '';
	public $relationship = array();

	public function __construct(){
		
    	parent::__construct();
    	$this->table_default_prefix = $this->db->dbprefix.$this->table_default;
    	
	}
	
}

?>