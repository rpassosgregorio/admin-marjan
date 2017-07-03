<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrators extends MY_Controller_CMS {

	public $folder_view = 'administrators';
	public $title_module = 'Administrators';
	public $controller_module = 'administrators';

	public $field_order = array();
	public $field_search = '';

	public $table_module = '';

	public $order_session_time = 600;

	public function __construct(){

		parent::__construct();

		$this->load->model('AdminUser_model', '', TRUE);
		$this->table_module = $this->AdminUser_model->table_default;

		if(empty($this->menu_allowed_admin)){
			$this->redirect_login();
		}

		$this->id_subomdule = AdminSubmodule_model::administrators;

		if(!in_array($this->id_subomdule, $this->id_sumodules_allowed_admin)){
			$this->redirect_login();
		}

		if($this->lang_default != $this->lang_selected){
			$this->controller_module = $this->lang_selected.'/'.$this->controller_module;
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

			$this->field_order['field'] = "order";
			$this->field_order['order'] = "ASC";

		}

		$order_field = array("order" => "ASC", "id" => "DESC");

		if(!empty($this->field_order)){
			$order_field = array($this->field_order['field'] => strtoupper($this->field_order['order']), "id" => "DESC");
		}

		$this->view_data['page_cur'] = $page;
		$this->view_data['order_field'] = $this->field_order;
		$this->view_data['field_search'] = $field_search;
		$this->view_data['search_field_format'] = $this->search_field_format($field_search);
		$this->view_data['list_objects'] = $this->AdminUser_model->find(array(), array('deleted = ' => 0), $field_search, array('id'), $order_field, $this->page_list, $this->count_pages_list);
		$this->view_data['total_record'] = $this->AdminUser_model->count(array(), array('deleted = ' => 0), $field_search, array('id'));
		$this->view_data['count_pages'] = ceil($this->view_data['total_record'] / $this->count_pages_list);
		$this->view_data['count_pages_list'] = $this->count_pages_list;

		$this->lang->load('texts_index_cms', $this->lang_selected);

		if($page == '1'){
			$this->load_template($this->folder_view.'/index', $this->view_data);
		}else if($this->is_ajax()){
			$this->load_template($this->folder_view.'/pagination', $this->view_data, FALSE);
		}

	}

	public function insert($page = 1, $field_search = ''){

		$this->view_data['object'] = $this->AdminUser_model;

		$this->action_insert();

		$this->view_data['page'] = $page;
		$this->view_data['field_search'] = $field_search;

		$this->lang->load('texts_edit_cms', $this->lang_selected);

		$this->load_template($this->folder_view.'/insert', $this->view_data);

	}

	public function edit($page = 1, $id, $field_search = ''){

		$this->action_edit($id);

		$this->view_data['page'] = $page;
		$this->view_data['field_search'] = $field_search;
		$this->view_data['object'] = $this->AdminUser_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));
		$this->view_data['access_modules'] = $this->AdminAccess_model->find(array(), array('id_admin = ' => $id, 'deleted = ' => 0));

		if(empty($this->view_data['object'])){
			redirect(base_url($this->base_cms));
		}

		$this->lang->load('texts_edit_cms', $this->lang_selected);

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
					$old_object = $this->AdminUser_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));

					if($active == 1){
						$active = 0;
					}else{
						$active = 1;
					}

					$this->AdminUser_model->update(array('active' 			=> $active,
												         'date_last_update' => date('Y-m-d H:i:s')),

												   array('id' 				=> $id));

					$new_object = $this->AdminUser_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));
					$this->admin_action_log($this->table_module, "update_status", $old_object, $new_object);

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

					$old_object = $this->AdminUser_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));
					$this->admin_action_log($this->table_module, "delete", $old_object);

					$this->AdminUser_model->update(array('deleted' 			=> 1,
												         'date_last_update' => date('Y-m-d H:i:s')),

												   array('id' 				=> $id));


				}
				$result = 'true';
				$feedback_success_message = $this->lang->line('record_deleted');

			}else{
				$feedback_error_message = $this->lang->line('no_record_selected');
			}

		}catch(Exception $e){
			$feedback_error_message = $e->getMessage();
		}

		$this->set_feedback('success', $feedback_success_message);
		$this->set_feedback('error', $feedback_error_message);

		echo json_encode(array("result" => $result, "msg" => $result == 'true' ? $feedback_success_message : $feedback_error_message, "total" => $this->AdminUser_model->count(array(), array('deleted = ' => 0), array(), array('id'))));

	}

	private function action_insert(){

		if($this->is_post()){

			try{

				$feedback_error_message = '';
				$feedback_success_message = '';

				$this->validation_rules_insert();

				if($this->form_validation->run() == TRUE){

					$last_id = $this->AdminUser_model->insert(array('code' 			=> sha1($this->generate_code(20)),
																	'name' 			=> $this->input->post('name'),
																    'email' 		=> $this->input->post('email'),
																    'password' 		=> sha1($this->input->post('password')),
																    'inserted_by' 	=> $this->admin_logged->id));


					$this->insert_access($last_id);

					$new_object = $this->AdminUser_model->find_unique(array(), array('id = ' => $last_id, 'deleted = ' => 0));
					$this->admin_action_log($this->table_module, "insert", NULL, $new_object);

					$feedback_success_message = $this->lang->line('record_inserted');

				}else{

					$this->view_data['object'] = (object)array('name' => $this->input->post('name'), 'email' => $this->input->post('email'));
					$feedback_error_message = validation_errors();

				}

			}catch(Exception $e){
				$feedback_error_message = $e->getMessage();
			}

			$this->set_feedback('success', $feedback_success_message);
			$this->set_feedback('error', $feedback_error_message);

			$this->view_data['feedback_success'] = $this->get_feedback('success');
			$this->view_data['feedback_error'] = $this->get_feedback('error');

		}

	}

	private function validation_rules_insert(){

		$this->form_validation->set_rules('name',
									      'Nome',
									      'required',

										  array('required' => 'Favor preencher o campo nome'));

		$this->form_validation->set_rules('email',
									      $this->input->post('email'),
									      'required|valid_email|is_unique[admin_user.email]',

										  array('required' => 'Favor preencher o campo e-email',
										  		'valid_email' => 'Favor preencher o campo e-email corretamente',
										  		'is_unique' => 'O e-email %s já existe em nosso sistema'));

		$this->form_validation->set_rules('password',
									      'Senha',
									      'required',

										  array('required' => 'Favor preencher o campo senha'));

		$this->form_validation->set_rules('conf_password',
									      'Confirmar Senha',
									      'required|matches[password]',

										  array('required' => 'Favor preencher o campo confirmação de senha',
										  		'matches' => 'Favor preencher o campo confirmação de senha corretamente'));

	}

	private function action_edit($id){

		if($this->is_post()){

			try{

				$feedback_error_message = '';
				$feedback_success_message = '';

				$old_object = $this->AdminUser_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));

				$this->validation_rules_edit($old_object);

				if($this->form_validation->run() == TRUE){

					$this->AdminUser_model->update(array('code' 			=> sha1($this->generate_code(20)),
												     	 'name' 			=> $this->input->post('name'),
												     	 'email' 			=> $this->input->post('email'),
												     	 'date_last_update' => date('Y-m-d H:i:s')),

											   	   array('id' 				=> $id));

					if(!empty($this->input->post('password'))){

						$this->AdminUser_model->update(array('password' 	=> sha1($this->input->post('password'))),
	 										           array('id' 			=> $id));

					}

					$this->insert_access($id);

					$new_object = $this->AdminUser_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));
					$this->admin_action_log($this->table_module, "edit", $old_object, $new_object);

					$feedback_success_message = $this->lang->line('record_changed');

				}else{
					$feedback_error_message = validation_errors();
				}

			}catch(Exception $e){
				$feedback_error_message = $e->getMessage();
			}

			$this->set_feedback('success', $feedback_success_message);
			$this->set_feedback('error', $feedback_error_message);

			$this->view_data['feedback_success'] = $this->get_feedback('success');
			$this->view_data['feedback_error'] = $this->get_feedback('error');

		}

	}

	private function validation_rules_edit($old_object){

		$this->form_validation->set_rules('name',
									      'Nome',
									      'required',

										  array('required' => 'Favor preencher o campo nome'));

		$this->form_validation->set_rules('email',
									      'Mail',
									      'required|valid_email',

										  array('required' => 'Favor preencher o campo e-email',
										  		'valid_email' => 'Favor preencher o campo e-email corretamente'));

		if($old_object->email != $this->input->post('email')){
			$this->form_validation->set_rules('email', $this->input->post('email'), 'is_unique[admin_user.email]', array('is_unique' => 'O e-email %s já existe em nosso sistema'));
		}

	}

	private function insert_access($id_admin){

		$id_submodules = $this->input->post('id_submodule');

		if(!empty($id_submodules)){

			$this->AdminAccess_model->delete(array('id_admin' => $id_admin));

			foreach($id_submodules as $id_submodule){
				$this->AdminAccess_model->insert(array('id_admin' => $id_admin, 'id_submodule' => $id_submodule));
			}

		}

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

	public function sort_items_grid(){

		$result = true;
		$msg = 'success';

		if($this->is_post()){

			$order = 0;
			$ids = explode(",", $this->input->post('id'));

			foreach($ids as $id){

				$this->AdminUser_model->update(array('order' => $order),
										       array('id' => $id));

				$order++;

			}

		}

	}

	public function img_resize($path_img, $config = array()){

		$result = TRUE;
		$msg = 'success';

		$this->set_manipulations_images_options($path_img, $config);

		if(!$this->image_lib->resize()){

			$result = FALSE;
			$msg = $this->image_lib->display_errors();

		}

		return array("result" => $result, "msg" => $msg);

	}

	public function img_crop($path_img, $config = array()){

		$result = TRUE;
		$msg = 'success';

		$this->set_manipulations_images_options($path_img, $config);

		if(!$this->image_lib->crop()){

			$result = FALSE;
			$msg = $this->image_lib->display_errors();

		}

		return array("result" => $result, "msg" => $msg);

	}

	public function img_rotate($path_img, $config = array()){

		$result = TRUE;
		$msg = 'success';

		$this->set_manipulations_images_options($path_img, $config);

		if(!$this->image_lib->rotate()){

			$result = FALSE;
			$msg = $this->image_lib->display_errors();

		}

		return array("result" => $result, "msg" => $msg);

	}

}
