<?php

class AdminModule_model extends MY_Model {

	public $id;
	public $title;
	public $icon;
	public $deleted;
	public $order;
	public $date_insertion;
	public $active;

	public $table_default = 'admin_modules';
	public $table_default_prefix = '';
	public $list_relationship = array(array('left_table_field' 	=> 'id',
	                                        'right_table_field' => 'id_module',
	                                        'table' 			=> 'admin_submodules',
	                                        'title_field' 		=> 'submodules',
	                                        'hasMany' 			=> TRUE,
	                                        'where' 			=> array('active' 	=> 1,
	                                                            		 'deleted' 	=> 0))
									);

	public function __construct(){

    	parent::__construct();
    	$this->table_default_prefix = $this->db->dbprefix.$this->table_default;

	}


}

?>