<?php

class ProductsActivePrinciple_model extends MY_Model {


	public $table_default = 'products_active_principle';
	public $table_default_prefix = '';
	public $list_relationship = array();

	public function __construct(){

    	parent::__construct();
    	$this->table_default_prefix = $this->db->dbprefix.$this->table_default;

	}


}

?>