<?php

class Default_model extends MY_Model {

	public $id;
	public $name;
	public $deleted;
	public $order;
	public $inserted_by;
	public $date_last_update;
	public $date_insertion;
	public $active;

	public $table_default = 'default';
	public $table_default_prefix = '';
	public $list_relationship = array(array('left_table_field' 	=> 'id',
											'right_table_field' => 'id_relationship',
											'table' 			=> 'table_relationship',
											'title_field' 		=> 'name_field',
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