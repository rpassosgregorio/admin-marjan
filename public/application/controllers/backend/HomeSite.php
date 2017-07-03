<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeSite extends MY_Controller_CMS {

	public $folder_view = 'home';
	public $title_module = 'Home';
	public $controller_module = 'homeSite';

	public $field_order = array();
	public $field_search = '';

	public $table_module = '';

	public $order_session_time = 600;

	public function __construct(){

		parent::__construct();

		$this->load->model('Home_model', '', TRUE);
		$this->table_module = $this->Home_model->table_default;

		if(empty($this->menu_allowed_admin)){
			$this->redirect_login();
		}

		$this->id_subomdule = AdminSubmodule_model::homeSite;

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

	public function index(){

		$this->view_data['object'] = $this->Home_model->find_unique(array(), array(), '', array(), array(), 1, 1);
		$this->lang->load('texts_index_cms', $this->lang_selected);

		$this->load_template($this->folder_view.'/index', $this->view_data);

	}

	public function save(){

		if($this->is_post()){

			$object = $this->Home_model->find_unique(array(), array(), '', array(), array(), 1, 1);

			if (!$object) {

				$last_id = $this->Home_model->insert(array('deleted' 		=> 0,
				                                           'order' 			=> 0,
				                                           'inserted_by' 	=> $this->admin_logged->id,
				                                           'date_insertion' => date('Y-m-d H:i:s')));

				$object = $this->Home_model->find_unique(array(), array('id = ' => $last_id, 'deleted = ' => 0));

			}

			$this->upload_file('home', $object->id);

			$post = $this->input->post();

			foreach ($post as $key => $value) {

				if(!empty($key) && !empty($value)){
					$this->Home_model->update(array($key => nl2br($this->security->xss_clean($value))), array('id' => $object->id));
				}

			}

			$this->set_feedback('success', 'Registro atualizado!');

			$this->view_data['feedback_success'] = $this->get_feedback('success');
			$this->view_data['feedback_error'] = $this->get_feedback('error');

			redirect(base_url($this->base_cms.'/'.$this->controller_module));

		}

	}

	public function upload_file($folder = 'home', $id = ''){

		if($folder != 'home') {
			$folder = 'home/'.$folder;
		}

		if (empty($id)) {

			$item = $this->Home_model->find_unique(array('id'), array(), '', array(), array(), 1, 1);

			if (!$item) {
				$id = $this->Home_model->insert(array('deleted' 		=> 0,
				                                      'order' 			=> 0,
				                                      'inserted_by' 	=> $this->admin_logged->id,
				                                      'date_insertion' 	=> date('Y-m-d H:i:s')));
			}else{
				$id = $item->id;
			}

		}

		$uploads = array();

		if(isset($_FILES) && !empty($_FILES)){

			$keys = array_keys($_FILES);

			for ($i=0; $i < count($keys); $i++) {

				$file_field = $keys[$i];

				if(isset($_FILES[$file_field]['name']) && !empty($_FILES[$file_field]['name'])){

					$fileinfo = pathinfo($_FILES[$file_field]['name']);
					$name_file = url_title($fileinfo['filename'], '-', TRUE).'-'.$this->generate_code(10);

					$return_upload = $this->upload($file_field, $name_file, $folder);

					if($return_upload['result'] == FALSE){

						$this->set_feedback('error', $return_upload['error']);
						redirect(base_url($this->base_cms.'/'.$this->controller_module));

					}

					if(!empty($file_field) && !empty($name_file)){
						$uploads[] = array($file_field => $name_file);
					}

				}

			}

			foreach ($uploads as $upload) {

				$file_field = key($upload);
				$name_file = $upload[$file_field];

				$this->Home_model->update(array($file_field => $name_file), array('id' => $id));

			}

		}

	}


}
