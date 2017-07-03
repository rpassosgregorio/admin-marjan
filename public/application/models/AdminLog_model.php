<?php

class AdminLog_model extends MY_Model {

	public $id;
	public $id_admin;
	public $action;
	public $table;
	public $json;
	public $deleted;
	public $order;
	public $date_last_update;
	public $date_insertion;
	public $active;

	public $table_default = 'admin_log';
	public $table_default_prefix = '';
	public $list_relationship = array(array('left_table_field' 	=> 'id_admin',
	                                        'right_table_field' => 'id',
	                                        'table'				=> 'admin_user',
	                                        'title_field' 		=> 'responsible',
	                                        'hasMany' 			=> FALSE,
	                                        'where' 			=> array('deleted' => 0))
									);

	public function __construct(){

    	parent::__construct();
    	$this->table_default_prefix = $this->db->dbprefix.$this->table_default;

	}


}

?>