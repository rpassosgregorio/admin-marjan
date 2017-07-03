<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends MY_Controller_CMS {

	public $folder_view = 'admin_log';
	public $title_module = 'Logs do Sistema';
	public $controller_module = 'log';

	public $field_order = array();
	public $count_pages_list = 10;
	public $field_search = '';

	public $table_module = '';

	public $order_session_time = 600;

	public function __construct(){

		parent::__construct();

		$this->load->model('AdminLog_model', '', TRUE);
		$this->table_module = $this->AdminLog_model->table_default;

		if(empty($this->menu_allowed_admin)){
			$this->redirect_login();
		}

		$this->id_subomdule = AdminSubmodule_model::admin_log;

		if(!in_array($this->id_subomdule, $this->id_sumodules_allowed_admin)){
			$this->redirect_login();
		}

		if($this->session->has_userdata('order_fields_controller_'.$this->id_subomdule)){
			$this->field_order = $this->session->tempdata('order_fields_controller_'.$this->id_subomdule);
		}

		$this->count_pages_list = $this->count_pages_list;

		if($this->session->has_userdata('count_pages_list_'.$this->id_subomdule)){
			$this->count_pages_list = $this->session->tempdata('count_pages_list_'.$this->id_subomdule);
		}


	}

	public function index($page = 1, $field_search = ''){

		$this->page_list = $page;

		if(empty($this->field_order)){

			$this->field_order['field'] = "id";
			$this->field_order['order'] = "DESC";

		}

		$order_field = array("id" => "DESC");

		if(!empty($this->field_order)){
			$order_field = array($this->field_order['field'] => strtolower($this->field_order['order']));
		}

		$this->view_data['page_cur'] = $page;
		$this->view_data['order_field'] = $this->field_order;
		$this->view_data['field_search'] = $field_search;
		$this->view_data['search_field_format'] = $this->search_field_format($field_search);

		$this->view_data['list_objects'] = $this->AdminLog_model->find(array(), array('deleted = ' => 0), $field_search, array('id'), $order_field, $this->page_list, $this->count_pages_list);
		$this->view_data['total_record'] = $this->AdminLog_model->count(array(), array('deleted = ' => 0), $field_search, array('id'));
		$this->view_data['count_pages'] = ceil($this->view_data['total_record'] / $this->count_pages_list);
		$this->view_data['count_pages_list'] = $this->count_pages_list;

		if($page == '1'){
			$this->load_template($this->folder_view.'/index', $this->view_data);
		}else if($this->is_ajax()){
			$this->load_template($this->folder_view.'/pagination', $this->view_data, FALSE);
		}

	}

	public function edit($page = 1, $id, $field_search = ''){


		$this->load->model('AdminUser_model', '', TRUE);

		$this->view_data['page'] = $page;
		$this->view_data['field_search'] = $field_search;
		$this->view_data['object'] = $this->AdminLog_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));
		$this->view_data['access_modules'] = $this->AdminAccess_model->find(array(), array('id_admin = ' => $id, 'deleted = ' => 0));

		if(empty($this->view_data['object'])){
			redirect(base_url($this->base_cms));
		}

		$this->load_template($this->folder_view.'/edit', $this->view_data);

	}

	public function update_status(){

		if($this->is_post()){

			try{

				$result = FALSE;
				$feedback_error_message = 'Requer Post';
				$feedback_success_message = '';

				if($this->is_post()){

					$id = $this->input->post('id');
					$active = $this->input->post('active');
					$old_object = $this->AdminLog_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));

					if($active == 1){
						$active = 0;
					}else{
						$active = 1;
					}

					$this->AdminLog_model->update(array('active' => $active,
												         'date_last_update' => date('Y-m-d H:i:s')),
												   array('id' => $id));


					$result = TRUE;

					$feedback_success_message = 'Records Updated!';

				}

			}catch(Exception $e){
				$feedback_error_message = $e->getMessage();
			}

			echo $active;

		}

	}

	public function delete(){

		try{

			$feedback_error_message = '';
			$feedback_success_message = '';

			$result = 'false';

			if(!empty($this->input->post('ids'))){

				$ids = $this->input->post('ids');

				foreach($ids as $id){

					$old_object = $this->AdminLog_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));
					$this->admin_action_log($this->table_module, "delete", $old_object);

					$this->AdminLog_model->update(array('deleted' => 1,
												         'date_last_update' => date('Y-m-d H:i:s')),
												   array('id' => $id));


				}
				$result = 'true';
				$feedback_success_message = 'Records deleted';

			}else{
				$feedback_error_message = 'No records selected';
			}

		}catch(Exception $e){
			$feedback_error_message = $e->getMessage();
		}

		$this->set_feedback('success', $feedback_success_message);
		$this->set_feedback('error', $feedback_error_message);

		echo json_encode(array("result" => $result, "msg" => $result == 'true' ? $feedback_success_message : $feedback_error_message, "total" => $this->AdminLog_model->count(array(), array('deleted = ' => 0), array(), array('id'))));

	}

	public function order_field_grid($page = 1, $field, $order){

		$ordenation = array('field' => $field, 'order' => $order);
		$this->session->set_tempdata('order_fields_controller_'.$this->id_subomdule, $ordenation, $this->order_session_time);

		redirect(base_url($this->base_cms.'/'.$this->controller_module));

	}

	public function total_itens_per_page($total){

		$this->session->set_tempdata('count_pages_list_'.$this->id_subomdule, $total, $this->order_session_time);

		redirect(base_url($this->base_cms.'/'.$this->controller_module));

	}


}
