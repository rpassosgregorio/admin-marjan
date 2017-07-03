<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller_CMS {

	public $folder_view = 'news';
	public $title_module = 'Notícias';
	public $controller_module = 'news';

	public $field_order = array();
	public $field_search = '';

	public $table_module = '';

	public $order_session_time = 600;

	public function __construct(){

		parent::__construct();

		$this->load->model('News_model', '', TRUE);
		$this->table_module = $this->News_model->table_default;

		if(empty($this->menu_allowed_admin)){
			$this->redirect_login();
		}

		$this->id_subomdule = AdminSubmodule_model::news;

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
		$this->view_data['list_objects'] = $this->News_model->find(array(), array('deleted = ' => 0), $field_search, array('id'), $order_field, $this->page_list, $this->count_pages_list);
		$this->view_data['total_record'] = $this->News_model->count(array(), array('deleted = ' => 0), $field_search, array('id'));
		$this->view_data['count_pages'] = ceil($this->view_data['total_record'] / $this->count_pages_list);
		$this->view_data['count_pages_list'] = $this->count_pages_list;

		$this->lang->load('texts_index_cms', $this->lang_selected);

		if($page == '1'){
			$this->load_template($this->folder_view.'/index', $this->view_data);
		}else if($this->is_ajax()){
			$this->load_template($this->folder_view.'/pagination', $this->view_data, FALSE);
		}

	}

	public function slug(){

		$msg = 'success';
		$result = 'false';

		if($this->is_post()){

			$slug = $this->security->xss_clean($this->input->post('input'));

			$check = $this->News_model->find_unique(array(), array('slug = ' => $slug, 'deleted = ' => 0));

			if(empty($check) && !empty($slug)){
				$result = 'true';
			}

		}

		echo json_encode(array('result' => $result, 'msg' => $msg));

	}

	public function insert($page = 1, $field_search = ''){

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
		$this->view_data['object'] = $this->News_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));

		if(empty($this->view_data['object'])){
			redirect(base_url($this->base_cms));
		}

		$this->lang->load('texts_edit_cms', $this->lang_selected);

		$this->load_template($this->folder_view.'/edit', $this->view_data);

	}

	public function upload_file($folder, $id = ''){

		try{

			$feedback_error_message = '';
			$feedback_success_message = '';

			if(!isset($_FILES) || empty($_FILES)){
				$feedback_error_message = 'The file is empty';
			}else{

				$file_field = key($_FILES);

				if(!empty($id)){

					$old_object = $this->News_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));
					$array_item = get_object_vars($old_object);

					$contador = 1;
					if(strstr($array_item[$file_field], '-')){

						$explode = explode("-", $array_item[$file_field]);
						$contador = (int)$explode[count($explode)-1] + 1;

					}else{

						$new_name_file = uniqid().'-1';

						$explode = explode("-", $new_name_file);
						$contador = (int)$explode[count($explode)-1] + 1;

					}

					$new_name_file = '';
					for($i = 0; $i < count($explode) -1; $i++){

						if($i == count($explode)){
							$new_name_file .= $contador;
						}else{
							$new_name_file .= $explode[$i].'-';
						}
					}

					$new_name_file .= $contador;

					$return_upload = $this->upload($file_field, $new_name_file, $folder);

					if($return_upload['result'] == FALSE){
						$feedback_error_message = $return_upload['error'];
					}else{

						$extension = str_replace('.', '', $return_upload['upload_data']['file_ext']);

						$this->News_model->update(array($file_field 		  => $new_name_file,
													   	   'extension' 		  => $extension,
												       	   'date_last_update' => date('Y-m-d H:i:s')),
								 			     	 array('id' => $id));

						$new_object = $this->News_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));
						$this->admin_action_log($this->table_module, "edit", $old_object, $new_object);

						$feedback_success_message = 'Upload completed!';

					}

				}else{

					$fileinfo = pathinfo($_FILES[$file_field]['name']);

					$new_name_file = $this->generate_code(5).'-'.url_title($fileinfo['filename']).'-1';
					$extension = $fileinfo['extension'];
					$full_path_file = $new_name_file.'.'.$fileinfo['extension'];

					$return_upload = $this->upload($file_field, $new_name_file, $folder);

					if($return_upload['result'] == FALSE){
						$feedback_error_message = $return_upload['error'];
					}else{

						$this->session->set_tempdata($file_field, $full_path_file, 60 * 30);

						$feedback_success_message = 'Upload completed!';

					}


				}

			}

		}catch(Exception $e){
			$feedback_error_message = $e->getMessage();
		}

		$this->set_feedback('success', $feedback_success_message);
		$this->set_feedback('error', $feedback_error_message);

		if(!empty($feedback_success_message)){
			$this->_echo_json(array('result' => 'true', 'fileIsImg' => 'false', 'idFile' => $new_name_file.'.'.$extension, 'msg' => $feedback_success_message));
		}else if(!empty($feedback_error_message)){
			$this->_echo_json(array('result' => "FALSE", 'fileIsImg' => 'false', 'idFile' => $new_name_file.'.'.$extension, 'msg' => $feedback_error_message));
		}


	}

	public function download($folder, $filename, $extension){

		if(file_exists(APPPATH.'uploads/'.$folder.'/'.$filename.'.'.$extension)){

			$data = file_get_contents(APPPATH.'uploads/'.$folder.'/'.$filename.'.'.$extension);
			force_download($filename.'.'.$extension, $data);

		}

	}

	public function delete_item(){

		$result = FALSE;
		$feedback_success_message = '';
		$feedback_error_message = '';

		$object = $this->News_model->find_unique(array(), array('id = ' => $this->input->post('id'), 'deleted = ' => 0));

		if(file_exists(APPPATH.'uploads/art/'.$object->file.'.'.$object->extension)){

			unlink(APPPATH.'uploads/art/'.$object->file.'.'.$object->extension);

			$result = TRUE;
			$feedback_success_message = 'success';

		}else{
			$feedback_error_message = 'directory invalid';
		}

		echo json_encode(array("result" => $result, "msg" => !empty($feedback_success_message) ? $feedback_success_message : $feedback_error_message));

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
					$old_object = $this->News_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));

					if($active == 1){
						$active = 0;
					}else{
						$active = 1;
					}

					$this->News_model->update(array('active' => $active,
												       'date_last_update' => date('Y-m-d H:i:s')),

												 array('id' => $id));

					$new_object = $this->News_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));
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

					$old_object = $this->News_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));
					$this->admin_action_log($this->table_module, "delete", $old_object);

					$this->News_model->update(array('deleted' => 1,
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

		echo json_encode(array("result" => $result, "msg" => $result == 'true' ? $feedback_success_message : $feedback_error_message, "total" => $this->News_model->count(array(), array('deleted = ' => 0), array(), array('id'))));

	}

	private function action_insert(){

		if($this->is_post()){

			try{

				$feedback_error_message = '';
				$feedback_success_message = '';

				$this->validation_rules_insert();

				if($this->form_validation->run() == TRUE){

					$image = sha1($this->generate_code(10).uniqid()).'_1';
					$return_upload = $this->upload('image', $image, 'news');

					if(!$return_upload['result']){
						$feedback_error_message = $return_upload['error'];
					}else{

						$last_id = $this->News_model->insert(array('slug' 				=> $this->security->xss_clean($this->input->post('slug')),
						                                           'title' 				=> $this->security->xss_clean($this->input->post('title')),
						                                           'subtitle' 			=> $this->security->xss_clean($this->input->post('subtitle')),
						                                           'call_text' 			=> $this->security->xss_clean($this->input->post('call_text')),
						                                           'image' 				=> $image,
						                                           'content' 			=> $this->security->xss_clean($this->input->post('content')),
						                                           'date' 				=> $this->security->xss_clean($this->input->post('date')),
						                                           'hour' 				=> $this->security->xss_clean($this->input->post('hour')),
																   'inserted_by' => $this->admin_logged->id));


						$new_object = $this->News_model->find_unique(array(), array('id = ' => $last_id, 'deleted = ' => 0));
						$this->admin_action_log($this->table_module, "insert", NULL, $new_object);

						$feedback_success_message = 'Record inserted!';

					}

				}else{

					$this->view_data['object'] = (object)array('name' => $this->input->post('name'));
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

		$this->form_validation->set_rules('title',
									      'Título',
									      'required',

										  array('required' => 'Favor preencher o campo título'));


	}

	private function action_edit($id){

		if($this->is_post()){

			try{

				$feedback_error_message = '';
				$feedback_success_message = '';

				$old_object = $this->News_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));

				$this->validation_rules_edit($old_object);

				if($this->form_validation->run() == TRUE){

					if(!empty($_FILES['image']['name'])){
						$old_object->image = increment_string($old_object->image);
					}

					$return_upload = $this->upload('image', $old_object->image, 'news');

					if(!$return_upload['result']){
						$feedback_error_message = $return_upload['error'];
					}else{

						$this->News_model->update(array('slug' 				=> $this->security->xss_clean($this->input->post('slug')),
			                                            'title' 			=> $this->security->xss_clean($this->input->post('title')),
			                                            'subtitle' 			=> $this->security->xss_clean($this->input->post('subtitle')),
			                                            'call_text' 		=> $this->security->xss_clean($this->input->post('call_text')),
			                                            'image' 			=> $old_object->image,
			                                            'content' 			=> $this->security->xss_clean($this->input->post('content')),
			                                            'date' 				=> $this->security->xss_clean($this->input->post('date')),
			                                            'hour' 				=> $this->security->xss_clean($this->input->post('hour')),
													    'date_last_update' 	=> date('Y-m-d H:i:s'),
						                                'active' 			=> $this->security->xss_clean($this->input->post('active'))),

												  array('id' 				=> $id));

						$new_object = $this->News_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));
						$this->admin_action_log($this->table_module, "edit", $old_object, $new_object);

						$feedback_success_message = 'Record updated!';

					}

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

		$this->form_validation->set_rules('title',
									      'Título',
									      'required',

										  array('required' => 'Favor preencher o campo título'));


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

				$this->News_model->update(array('order' => $order),
										       array('id' => $id));

				$order++;

			}

		}

	}

	public static function img_resize($path_img, $config = array()){

		$result = TRUE;
		$msg = 'success';

		$this->set_manipulations_images_options($path_img, $config);

		if(!$this->image_lib->resize()){

			$result = FALSE;
			$msg = $this->image_lib->display_errors();

		}

		return array("result" => $result, "msg" => $msg);

	}

	public static function img_crop($path_img, $config = array()){

		$result = TRUE;
		$msg = 'success';

		$this->set_manipulations_images_options($path_img, $config);

		if(!$this->image_lib->crop()){

			$result = FALSE;
			$msg = $this->image_lib->display_errors();

		}

		return array("result" => $result, "msg" => $msg);

	}

	public static function img_rotate($path_img, $config = array()){

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
