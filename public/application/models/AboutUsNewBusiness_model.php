<?php

class AboutUsNewBusiness_model extends MY_Model {

	public $table_default = 'about_us_new_business';
	public $table_default_prefix = '';
	public $list_relationship = array();

	public function __construct(){

    	parent::__construct();
    	$this->table_default_prefix = $this->db->dbprefix.$this->table_default;

	}


}

?>