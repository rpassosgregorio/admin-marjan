<?php

class MY_Model extends CI_Model {

	public $list_relationship = array();

	public function __construct(){

    	parent::__construct();

	}

	public function query($query, $return = TRUE){

		$query = $this->db->query($query);

		if($return){
        	return $query->result();
		}

	}

	public function find($select_fields = array(), $field_where = array(), $field_search = '', $group_by = array(), $order_by = array(), $page = '', $limit = '', $joins = array(), $relationship = array()){

    	if(!is_array($joins)) $joins = array($joins);
    	if(!is_array($field_where)) $field_where = array($field_where);
    	if(!is_array($group_by)) $group_by = array($group_by);
    	if(!is_array($order_by)) $order_by = array($order_by);
    	if(!empty($relationship)) $this->list_relationship = $relationship;

    	if(!empty($select_fields) && is_array($select_fields)){

    		$select = array();
    		foreach($select_fields as $item_select){
    			$select[] = $this->table_default.'.'.$item_select;
    		}

    		$this->db->select(implode(", ", $select));

    	}else{
    		$this->db->select($this->table_default.'.*');
    	}

    	if(!empty($joins) && is_array($joins)){

    		foreach ($joins as $table => $relationship_join) {
    			$this->db->join($table, $relationship_join);
    		}

    	}

    	foreach ($field_where as $field => $value) {
    		$this->db->where($this->table_default.'.'.''.$field.'', $value);
    	}

		if(!empty($field_search)){

			$columns = $this->db->list_fields($this->table_default);

			$where_search = '';

			foreach($columns as $key => $column){

				if($key == 0){
					$where_search .= "(".$this->table_default.".id LIKE '%".$field_search."%' ";
				}else{

					$where_search .= "OR ";
					$where_search .= "".$this->table_default.'.'.$column." LIKE '%".$field_search."%' ";

				}

				if($key == count($columns)-1){
					$where_search .= ")  ";
				}

			}

			$this->db->where($where_search);

		}

    	if(!empty($group_by)){

			$group_by_aux = array();
    		foreach($group_by as $item_group_by){
    			$group_by_aux[] = $this->table_default.'.'.$item_group_by;
    		}

    		$this->db->group_by($group_by_aux);
    	}

    	if(!empty($order_by)){

    		foreach($order_by as $field_order => $order_type){
	    		$this->db->order_by($this->table_default.'.'.$field_order, $order_type);
    		}

    	}

		if(empty($page) && !empty($limit)){
			$this->db->limit($limit);
		}else if(!empty($page) && !empty($limit)){

			$x = $limit;
  			$y = ($page - 1) * $limit;

  			$this->db->limit($x, $y);

		}

		$query = $this->db->get($this->table_default);

		$first_result = $query->result();

		if(empty($this->list_relationship)){
			return $first_result;
		}else{

			$new_itens = array();

			foreach($first_result as $item){

				foreach($this->list_relationship as $relation){

					$this->db->where(''.$relation['right_table_field'].' = ', $item->$relation['left_table_field']);

					if(isset($relation['where']) && !empty($relation['where'])){

						foreach ($relation['where'] as $key => $value) {
							$this->db->where($relation['table'].'.'.$key.' = ', $value);
						}

					}

					$query = $this->db->get($relation['table']);

					$final_result = $query->result();

					if($final_result){

						if($relation['hasMany'] == FALSE){
							$item->$relation['title_field'] = $final_result[0];
						}else{
							$item->$relation['title_field'] = $final_result;
						}

					}else{
						$item->$relation['title_field'] = array();
					}

				}

				$new_itens[] = $item;

			}

			return $new_itens;

		}

	}

	public function find_unique($select_fields = array(), $field_where = array(), $field_search = '', $group_by = array(), $order_by = array(), $page = '', $limit = '', $joins = array(), $relationship = array()){

    	if(!is_array($joins)) $joins = array($joins);
    	if(!is_array($field_where)) $field_where = array($field_where);
    	if(!is_array($group_by)) $group_by = array($group_by);
    	if(!is_array($order_by)) $order_by = array($order_by);
    	if(!is_array($relationship)) $order_by = array($relationship);

    	if(!empty($select_fields) && is_array($select_fields)){

    		$select = array();
    		foreach($select_fields as $item_select){
    			$select[] = $this->table_default.'.'.$item_select;
    		}

    		$this->db->select(implode(", ", $select));

    	}else{
    		$this->db->select($this->table_default.'.*');
    	}

    	if(!empty($joins) && is_array($joins)){

    		foreach ($joins as $table => $relationship_join) {
    			$this->db->join($table, $relationship_join);
    		}

    	}

    	foreach ($field_where as $field => $value) {
    		$this->db->where($this->table_default.'.'.''.$field.'', $value);
    	}

		if(!empty($field_search)){

			$columns = $this->db->list_fields($this->table_default);

			$where_search = '';

			foreach($columns as $key => $column){

				if($key == 0){
					$where_search .= "(".$this->table_default.".id LIKE '%".$field_search."%' ";
				}else{

					$where_search .= "OR ";
					$where_search .= "".$this->table_default.'.'.$column." LIKE '%".$field_search."%' ";

				}

				if($key == count($columns)-1){
					$where_search .= ")  ";
				}

			}

			$this->db->where($where_search);

		}

    	if(!empty($group_by)){

			$group_by_aux = array();
    		foreach($group_by as $item_group_by){
    			$group_by_aux[] = $this->table_default.'.'.$item_group_by;
    		}

    		$this->db->group_by($group_by_aux);
    	}

    	if(!empty($order_by)){

    		foreach($order_by as $field_order => $order_type){
	    		$this->db->order_by($this->table_default.'.'.$field_order, $order_type);
    		}

    	}

		if(empty($page) && !empty($limit)){
			$this->db->limit($limit);
		}else if(!empty($page) && !empty($limit)){

			$x = $limit;
  			$y = ($page - 1) * $limit;

  			$this->db->limit($x, $y);

		}

		$query = $this->db->get($this->table_default);
		$first_result = $query->result();

		if(empty($this->list_relationship)){

			if(!empty($first_result)){
				return $first_result[0];
			}else{
				return $first_result;
			}

		}else{

			$new_itens = array();

			foreach($first_result as $item){

				foreach($this->list_relationship as $relation){

					$this->db->where(''.$relation['right_table_field'].' = ', $item->$relation['left_table_field']);

					if(isset($relation['where']) && !empty($relation['where'])){

						foreach ($relation['where'] as $key => $value) {
							$this->db->where($relation['table'].'.'.$key.' = ', $value);
						}

					}


					$query = $this->db->get($relation['table']);

					$final_result = $query->result();

					if($final_result){

						if($relation['hasMany'] == FALSE){
							$item->$relation['title_field'] = $final_result[0];
						}else{
							$item->$relation['title_field'] = $final_result;
						}

					}else{
						$item->$relation['title_field'] = array();
					}

				}

				$new_itens[] = $item;

			}

			return isset($new_itens[0]) ? $new_itens[0] : array();

		}

	}

	public function count($select_fields = array(), $field_where = array(), $field_search = '', $group_by = array(), $joins = array()){

    	if(!is_array($joins)) $joins = array($joins);
    	if(!is_array($field_where)) $field_where = array($field_where);
    	if(!is_array($group_by)) $group_by = array($group_by);

    	if(!empty($select_fields) && is_array($select_fields)){

    		$select = array();
    		foreach($select_fields as $item_select){
    			$select[] = $this->table_default.'.'.$item_select;
    		}

    		$this->db->select(implode(", ", $select));

    	}else{
    		$this->db->select($this->table_default.'.*');
    	}

    	if(!empty($joins) && is_array($joins)){

    		foreach ($joins as $table => $relationship_join) {
    			$this->db->join($table, $relationship_join);
    		}

    	}

    	foreach ($field_where as $field => $value) {
    		$this->db->where($this->table_default.'.'.''.$field.'', $value);
    	}

		if(!empty($field_search)){

			$columns = $this->db->list_fields($this->table_default);

			$where_search = '';

			foreach($columns as $key => $column){

				if($key == 0){
					$where_search .= "(".$this->table_default.".id LIKE '%".$field_search."%' ";
				}else{

					$where_search .= "OR ";
					$where_search .= "".$this->table_default.'.'.$column." LIKE '%".$field_search."%' ";

				}

				if($key == count($columns)-1){
					$where_search .= ")  ";
				}

			}

			$this->db->where($where_search);

		}

    	if(!empty($group_by)){

			$group_by_aux = array();
    		foreach($group_by as $item_group_by){
    			$group_by_aux[] = $this->table_default.'.'.$item_group_by;
    		}

    		$this->db->group_by($group_by_aux);
    	}

		return $this->db->count_all_results($this->table_default);

	}

	public function insert($data = array()){

    	$this->db->insert($this->table_default, $data);
    	return $this->db->insert_id();

	}

	public function update($data = array(), $where = array()){

    	if(!is_array($data)){
    		$data = array($data);
    	}

    	if(!is_array($where)){
    		$where = array($where);
    	}


    	if(!empty($data)){

    		foreach($data as $field_data => $value_data){
	    		$this->db->set($field_data, $value_data);
    		}

    	}

    	if(!empty($where)){

    		foreach($where as $field_where => $value_where){
	    		$this->db->where($field_where, $value_where);
    		}

    	}

    	$this->db->update($this->table_default);

	}

	public function delete($where = array()){

    	if(!is_array($where)){
    		$where = array($where);
    	}

    	if(!empty($where)){

    		foreach($where as $field_where => $value_where){
	    		$this->db->where($field_where, $value_where);
    		}

    	}

    	$this->db->delete($this->table_default);

	}

	public function debug_last_query(){
		echo "<pre>"; var_dump($this->db->last_query()); die();
	}


}

?>