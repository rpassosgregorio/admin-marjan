<?php

class HealthWellness_model extends MY_Model {

	public $table_default = 'health_wellness';
	public $table_default_prefix = '';
	public $list_relationship = array();

	public function __construct(){

    	parent::__construct();
    	$this->table_default_prefix = $this->db->dbprefix.$this->table_default;

	}


}

?>