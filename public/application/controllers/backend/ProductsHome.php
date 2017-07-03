<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductsHome extends MY_Controller_CMS {

	public $folder_view = 'products_home';
	public $title_module = 'Produtos - Home';
	public $controller_module = 'productsHome';

	public $field_order = array();
	public $field_search = '';

	public $table_module = '';

	public $order_session_time = 600;

	public function __construct(){

		parent::__construct();

		$this->load->model('ProductsHome_model', '', TRUE);
		$this->table_module = $this->ProductsHome_model->table_default;

		if(empty($this->menu_allowed_admin)){
			$this->redirect_login();
		}

		$this->id_subomdule = AdminSubmodule_model::productsHome;

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


		$this->view_data['object'] = $this->ProductsHome_model->find_unique(array(), array(), '', array(), array(), 1, 1);

		$this->lang->load('texts_index_cms', $this->lang_selected);

		$this->load_template($this->folder_view.'/index', $this->view_data);

	}

	public function save(){

		if($this->is_post()){

			$post = $this->input->post();

			$object = $this->ProductsHome_model->find_unique(array(), array(), '', array(), array(), 1, 1);

			if (!$object) {

				$last_id = $this->ProductsHome_model->insert(array('active' => 1, 'deleted' => 0, 'order' => 0, 'inserted_by' => $this->admin_logged->id, 'date_insertion' => date('Y-m-d H:i:s')));
				$object = $this->ProductsHome_model->find_unique(array(), array('id = ' => $last_id, 'active = ' => 1, 'deleted = ' => 0));

			}

			foreach ($post as $key => $value) {

				if(!empty($key) && !empty($value)){
					$this->ProductsHome_model->update(array($key => nl2br($this->security->xss_clean($value))), array('id' => $object->id));
				}

			}

			$this->upload_file($object->id);

			$this->set_feedback('success', 'Registro atualizado!');

			$this->view_data['feedback_success'] = $this->get_feedback('success');
			$this->view_data['feedback_error'] = $this->get_feedback('error');


			redirect(base_url($this->base_cms.'/'.$this->controller_module));

		}

	}

	private function upload_file($id){

		$uploads = array();

		if(isset($_FILES) && !empty($_FILES)){

			$keys = array_keys($_FILES);

			for ($i=0; $i < count($keys); $i++) {

				$file_field = $keys[$i];

				if(isset($_FILES[$file_field]['name']) && !empty($_FILES[$file_field]['name'])){

					$fileinfo = pathinfo($_FILES[$file_field]['name']);
					$name_file = url_title($fileinfo['filename'], '-', TRUE).'-'.$this->generate_code(10);

					$return_upload = $this->upload($file_field, $name_file, 'products/home');

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

				$this->ProductsHome_model->update(array($file_field => $name_file), array('id' => $id));

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
