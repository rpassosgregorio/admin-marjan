<?php

class TopNews_model extends MY_Model {

	public $table_default = 'top_news';
	public $table_default_prefix = '';
	public $list_relationship = array(array('left_table_field' 	=> 'id_news',
											'right_table_field' => 'id',
											'table' 			=> 'news',
											'title_field' 		=> 'news',
											'hasMany' 			=> FALSE,
											'where' 			=> array('active' 	=> 1,
											                    		 'deleted' 	=> 0))
									);

	public function __construct(){

    	parent::__construct();
    	$this->table_default_prefix = $this->db->dbprefix.$this->table_default;

	}


}

?>