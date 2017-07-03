<?php

class Products_model extends MY_Model {

	public $table_default = 'products';
	public $table_default_prefix = '';
	public $list_relationship = array(array('left_table_field' 	=> 'id_category',
											'right_table_field' => 'id',
											'table' 			=> 'products_category',
											'title_field' 		=> 'category',
											'hasMany' 			=> FALSE,
											'where' 			=> array('active' 	=> 1,
											                    		 'deleted' 	=> 0)),
									 array('left_table_field' 	=> 'id',
											'right_table_field' => 'id_product',
											'table' 			=> 'products_related_specialty',
											'title_field' 		=> 'specialties',
											'hasMany' 			=> TRUE,
											'where' 			=> array('active' 	=> 1,
											                    		 'deleted' 	=> 0)),

									 array('left_table_field' 	=> 'id',
											'right_table_field' => 'id_product',
											'table' 			=> 'products_related_presentation',
											'title_field' 		=> 'presentations',
											'hasMany' 			=> TRUE,
											'where' 			=> array('active' 	=> 1,
											                    		 'deleted' 	=> 0)),

									 array('left_table_field' 	=> 'id',
											'right_table_field' => 'id_product',
											'table' 			=> 'products_related_active_principle',
											'title_field' 		=> 'active_principles',
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