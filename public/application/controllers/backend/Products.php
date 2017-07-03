<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MY_Controller_CMS {

	public $folder_view = 'products';
	public $title_module = 'Produtos';
	public $controller_module = 'products';

	public $field_order = array();
	public $field_search = '';

	public $table_module = '';

	public $order_session_time = 600;

	public function __construct(){

		parent::__construct();

		$this->load->model('Products_model', '', TRUE);
		$this->load->model('ProductsCategory_model', '', TRUE);
		$this->load->model('ProductsSpecialty_model', '', TRUE);
		$this->load->model('ProductsPresentation_model', '', TRUE);
		$this->load->model('ProductsActivePrinciple_model', '', TRUE);
		$this->load->model('ProductsRelatedSpecialty_model', '', TRUE);
		$this->load->model('ProductsRelatedPresentation_model', '', TRUE);
		$this->load->model('ProductsRelatedActivePrinciple_model', '', TRUE);

		$this->table_module = $this->Products_model->table_default;

		if(empty($this->menu_allowed_admin)){
			$this->redirect_login();
		}

		$this->id_subomdule = AdminSubmodule_model::products;

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
		$this->view_data['list_objects'] = $this->Products_model->find(array(), array('deleted = ' => 0), $field_search, array('id'), $order_field, $this->page_list, $this->count_pages_list);
		$this->view_data['total_record'] = $this->Products_model->count(array(), array('deleted = ' => 0), $field_search, array('id'));
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

			$check = $this->Products_model->find_unique(array(), array('slug = ' => $slug, 'deleted = ' => 0));

			if(empty($check) && !empty($slug)){
				$result = 'true';
			}

		}

		echo json_encode(array('result' => $result, 'msg' => $msg));

	}

	public function insert($page = 1, $field_search = ''){

		$this->action_insert();

		$this->view_data['object'] = $this->Products_model;
		$this->view_data['categories'] = $this->ProductsCategory_model->find(array(), array('deleted = ' => 0, 'active = ' => 1), '', array(), array('title' => 'ASC'));
		$this->view_data['specialties'] = $this->ProductsSpecialty_model->find(array(), array('deleted = ' => 0, 'active = ' => 1), '', array(), array('title' => 'ASC'));
		$this->view_data['presentations'] = $this->ProductsPresentation_model->find(array(), array('deleted = ' => 0, 'active = ' => 1), '', array(), array('title' => 'ASC'));
		$this->view_data['active_principles'] = $this->ProductsActivePrinciple_model->find(array(), array('deleted = ' => 0, 'active = ' => 1), '', array(), array('title' => 'ASC'));

		$this->view_data['page'] = $page;
		$this->view_data['field_search'] = $field_search;

		$this->lang->load('texts_edit_cms', $this->lang_selected);

		$this->load_template($this->folder_view.'/insert', $this->view_data);

	}

	public function edit($page = 1, $id, $field_search = ''){

		$this->action_edit($id);

		$related_specialties = array();
		$related_presentations = array();
		$related_active_principles = array();

		$this->view_data['page'] = $page;
		$this->view_data['field_search'] = $field_search;
		$this->view_data['object'] = $this->Products_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));
		$this->view_data['categories'] = $this->ProductsCategory_model->find(array(), array('deleted = ' => 0, 'active = ' => 1), '', array(), array('title' => 'ASC'));
		$this->view_data['specialties'] = $this->ProductsSpecialty_model->find(array(), array('deleted = ' => 0, 'active = ' => 1), '', array(), array('title' => 'ASC'));
		$this->view_data['presentations'] = $this->ProductsPresentation_model->find(array(), array('deleted = ' => 0, 'active = ' => 1), '', array(), array('title' => 'ASC'));
		$this->view_data['active_principles'] = $this->ProductsActivePrinciple_model->find(array(), array('deleted = ' => 0, 'active = ' => 1), '', array(), array('title' => 'ASC'));

		foreach ($this->view_data['specialties'] as $specialty) {

			foreach ($this->view_data['object']->specialties as $related_specialty) {

				if ($related_specialty->id_specialty == $specialty->id) {
					$related_specialties[] = $specialty->id;
				}


			}


		}

		foreach ($this->view_data['presentations'] as $presentation) {

			foreach ($this->view_data['object']->presentations as $related_presentation) {

				if ($related_presentation->id_presentation == $presentation->id) {
					$related_presentations[] = $presentation->id;
				}


			}


		}

		foreach ($this->view_data['active_principles'] as $active_principle) {

			foreach ($this->view_data['object']->active_principles as $related_specialty) {

				if ($related_specialty->id_active_principle == $active_principle->id) {
					$related_active_principles[] = $active_principle->id;
				}


			}


		}

		$this->view_data['related_specialties'] = $related_specialties;
		$this->view_data['related_presentations'] = $related_presentations;
		$this->view_data['related_active_principles'] = $related_active_principles;


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

					$old_object = $this->Products_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));
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

						$this->Products_model->update(array($file_field 		  => $new_name_file,
													   	   'extension' 		  => $extension,
												       	   'date_last_update' => date('Y-m-d H:i:s')),
								 			     	 array('id' => $id));

						$new_object = $this->Products_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));
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

	public function download($filename, $extension){

		$folder = 'products/documents';

		if(file_exists(APPPATH.'uploads/'.$folder.'/'.$filename.'.'.$extension)){

			$data = file_get_contents(APPPATH.'uploads/'.$folder.'/'.$filename.'.'.$extension);
			force_download($filename.'.'.$extension, $data);

		}

	}

	public function delete_item(){

		$result = FALSE;
		$feedback_success_message = '';
		$feedback_error_message = '';

		$object = $this->Products_model->find_unique(array(), array('id = ' => $this->input->post('id'), 'deleted = ' => 0));


		if(file_exists(APPPATH.'uploads/art/'.$object->file.'.'.$object->extension)){

			$this->generate_products_json();
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
					$old_object = $this->Products_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));

					if($active == 1){
						$active = 0;
					}else{
						$active = 1;
					}

					$this->Products_model->update(array('active' => $active,
												       'date_last_update' => date('Y-m-d H:i:s')),

												 array('id' => $id));

					$this->generate_products_json();

					$new_object = $this->Products_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));
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

					$old_object = $this->Products_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));
					$this->admin_action_log($this->table_module, "delete", $old_object);

					$this->Products_model->update(array('deleted' => 1,
												       'date_last_update' => date('Y-m-d H:i:s')),

												 array('id' => $id));

					$this->generate_products_json();


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

		echo json_encode(array("result" => $result, "msg" => $result == 'true' ? $feedback_success_message : $feedback_error_message, "total" => $this->Products_model->count(array(), array('deleted = ' => 0), array(), array('id'))));

	}

	private function action_insert(){

		if($this->is_post()){

			try{

				$feedback_error_message = '';
				$feedback_success_message = '';

				$this->validation_rules_insert();

				if($this->form_validation->run() == TRUE){

					$product_image = sha1($this->generate_code(10).uniqid()).'_1';
					$return_upload = $this->upload('product_image', $product_image, 'products');

					if(!$return_upload['result']){
						$feedback_error_message = $return_upload['error'];
					}else{

						$product_image_mobile = sha1($this->generate_code(10).uniqid()).'_1';
						$return_upload = $this->upload('product_image_mobile', $product_image_mobile, 'products');

						if(!$return_upload['result']){
							$feedback_error_message = $return_upload['error'];
						}else{

							$product_image_tablet = sha1($this->generate_code(10).uniqid()).'_1';
							$return_upload = $this->upload('product_image_tablet', $product_image_tablet, 'products');

							if(!$return_upload['result']){
								$feedback_error_message = $return_upload['error'];
							}else{

								$product_release_image = sha1($this->generate_code(10).uniqid()).'_1';
								$return_upload = $this->upload('product_release_image', $product_release_image, 'products');

								if(!$return_upload['result']){
									$feedback_error_message = $return_upload['error'];
								}else{

									$drug_leaflet_patient_pdf = sha1($this->generate_code(10).uniqid()).'_1';
									$return_upload = $this->upload('drug_leaflet_patient_pdf', $drug_leaflet_patient_pdf, 'products/documents');

									if(!$return_upload['result']){
										$feedback_error_message = $return_upload['error'];
									}else{

										$drug_leaflet_healthcare_professional_pdf = sha1($this->generate_code(10).uniqid()).'_1';
										$return_upload = $this->upload('drug_leaflet_healthcare_professional_pdf', $drug_leaflet_healthcare_professional_pdf, 'products/documents');

										if(!$return_upload['result']){
											$feedback_error_message = $return_upload['error'];
										}else{

											$nutritional_info = sha1($this->generate_code(10).uniqid()).'_1';
											$return_upload = $this->upload('nutritional_info', $nutritional_info, 'products');

											if(!$return_upload['result']){
												$feedback_error_message = $return_upload['error'];
											}else{

												$is_under_prescription = $this->input->post('is_under_prescription');
												$is_under_prescription = isset($is_under_prescription) && !empty($is_under_prescription) ? 1 : 0;

												$last_id = $this->Products_model->insert(array('slug' 										=> $this->security->xss_clean($this->input->post('slug')),
												                                               'id_category' 								=> $this->security->xss_clean($this->input->post('id_category')),
												                                               'name' 										=> $this->security->xss_clean($this->input->post('name')),
												                                               'cientific_name' 							=> $this->security->xss_clean($this->input->post('cientific_name')),
												                                               'how_to_use' 								=> $this->security->xss_clean($this->input->post('how_to_use')),
												                                               'indication' 								=> $this->security->xss_clean($this->input->post('indication')),
												                                               'therapeutic_class' 							=> $this->security->xss_clean($this->input->post('therapeutic_class')),
												                                               'ingredients' 								=> $this->security->xss_clean($this->input->post('ingredients')),
												                                               'product_info' 								=> $this->security->xss_clean($this->input->post('product_info')),
												                                               'product_keywords' 							=> $this->security->xss_clean($this->input->post('product_keywords')),
												                                               'nutritional_info' 							=> $nutritional_info,
												                                               'nutritional_info_obs' 						=> $this->security->xss_clean($this->input->post('nutritional_info_obs')),
												                                               'is_under_prescription' 						=> $is_under_prescription,
												                                               'product_image' 								=> $product_image,
												                                               'product_image_mobile' 						=> $product_image_mobile,
												                                               'product_image_tablet' 						=> $product_image_tablet,
												                                               'product_image_horizontal_align' 			=> $this->security->xss_clean($this->input->post('product_image_horizontal_align')),
												                                               'product_image_vertical_align' 				=> $this->security->xss_clean($this->input->post('product_image_vertical_align')),
												                                               'product_release_image'						=> $product_release_image,
												                                               'drug_leaflet_patient_pdf' 					=> $drug_leaflet_patient_pdf,
												                                               'drug_leaflet_healthcare_professional_pdf' 	=> $drug_leaflet_healthcare_professional_pdf,
																							   'inserted_by' 								=> $this->admin_logged->id));


												$this->insert_related_specialties($last_id);
												$this->insert_related_presentations($last_id);
												$this->insert_active_principles($last_id);

												$this->generate_products_json();

												$new_object = $this->Products_model->find_unique(array(), array('id = ' => $last_id, 'deleted = ' => 0));
												$this->admin_action_log($this->table_module, "insert", NULL, $new_object);

												$feedback_success_message = 'Record inserted!';

											}

										}

									}

								}

							}

						}

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


	private function insert_related_specialties($id_product){

		$this->ProductsRelatedSpecialty_model->delete(array('id_product' => $id_product));

		if(!empty($_POST['specialties'])){

			for ($i=0; $i < count($_POST['specialties']); $i++) {

				$specialty = $_POST['specialties'][$i];

				if(!empty($specialty)){

					$last_id = $this->ProductsRelatedSpecialty_model->insert(array('id_product'			=> $id_product,
						                                             	 		   'id_specialty'		=> $specialty,
									                                               'active'				=> 1,
									                                               'inserted_by'		=> $this->admin_logged->id));

				}


			}


		}


	}

	private function insert_related_presentations($id_product){


		$this->ProductsRelatedPresentation_model->delete(array('id_product' => $id_product));

		if(!empty($_POST['presentations'])){

			for ($i=0; $i < count($_POST['presentations']); $i++) {

				$presentation = $_POST['presentations'][$i];

				if(!empty($presentation)){

					$last_id = $this->ProductsRelatedPresentation_model->insert(array('id_product'			=> $id_product,
							                                             	 		  'id_presentation'		=> $presentation,
										                                              'active'				=> 1,
										                                              'inserted_by'			=> $this->admin_logged->id));

				}


			}


		}


	}

	private function insert_active_principles($id_product){

		$this->ProductsRelatedActivePrinciple_model->delete(array('id_product' => $id_product));

		if(!empty($_POST['active_principles'])){

			for ($i=0; $i < count($_POST['active_principles']); $i++) {

				$active_principle = $_POST['active_principles'][$i];

				if(!empty($active_principle)){

					$last_id = $this->ProductsRelatedActivePrinciple_model->insert(array('id_product'			=> $id_product,
								                                             	 		 'id_active_principle'	=> $active_principle,
											                                             'active'				=> 1,
											                                             'inserted_by'			=> $this->admin_logged->id));

				}


			}


		}


	}

	private function validation_rules_insert(){

		$this->form_validation->set_rules('name',
									      'Nome',
									      'required',

										  array('required' => 'Favor preencher o campo nome'));

	}

	private function action_edit($id){

		if($this->is_post()){

			try{

				$feedback_error_message = '';
				$feedback_success_message = '';

				$old_object = $this->Products_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));

				$this->validation_rules_edit($old_object);

				if($this->form_validation->run() == TRUE){

					if(!empty($_FILES['nutritional_info']['name'])){
						$old_object->nutritional_info = increment_string($old_object->nutritional_info);
					}

					$return_upload = $this->upload('nutritional_info', $old_object->nutritional_info, 'products');

					if(!$return_upload['result']){
						$feedback_error_message = $return_upload['error'];
					}else{

						if(!empty($_FILES['product_image']['name'])){
							$old_object->product_image = increment_string($old_object->product_image);
						}

						$return_upload = $this->upload('product_image', $old_object->product_image, 'products');

						if(!$return_upload['result']){
							$feedback_error_message = $return_upload['error'];
						}else{

							if(!empty($_FILES['product_image_mobile']['name'])){
								$old_object->product_image_mobile = increment_string($old_object->product_image_mobile);
							}

							$return_upload = $this->upload('product_image_mobile', $old_object->product_image_mobile, 'products');

							if(!$return_upload['result']){
								$feedback_error_message = $return_upload['error'];
							}else{

								if(!empty($_FILES['product_image_tablet']['name'])){
									$old_object->product_image_tablet = increment_string($old_object->product_image_tablet);
								}

								$return_upload = $this->upload('product_image_tablet', $old_object->product_image_tablet, 'products');

								if(!$return_upload['result']){
									$feedback_error_message = $return_upload['error'];
								}else{

									if(!empty($_FILES['product_release_image']['name'])){
										$old_object->product_release_image = increment_string($old_object->product_release_image);
									}

									$return_upload = $this->upload('product_release_image', $old_object->product_release_image, 'products');

									if(!$return_upload['result']){
										$feedback_error_message = $return_upload['error'];
									}else{

										if(!empty($_FILES['drug_leaflet_patient_pdf']['name'])){
											$old_object->drug_leaflet_patient_pdf = increment_string($old_object->drug_leaflet_patient_pdf);
										}

										$return_upload = $this->upload('drug_leaflet_patient_pdf', $old_object->drug_leaflet_patient_pdf, 'products');

										if(!$return_upload['result']){
											$feedback_error_message = $return_upload['error'];
										}else{

											if(!empty($_FILES['drug_leaflet_healthcare_professional_pdf']['name'])){
												$old_object->drug_leaflet_healthcare_professional_pdf = increment_string($old_object->drug_leaflet_healthcare_professional_pdf);
											}

											$return_upload = $this->upload('drug_leaflet_healthcare_professional_pdf', $old_object->drug_leaflet_healthcare_professional_pdf, 'products');

											if(!$return_upload['result']){
												$feedback_error_message = $return_upload['error'];
											}else{

												$is_under_prescription = $this->input->post('is_under_prescription');
												$is_under_prescription = isset($is_under_prescription) && !empty($is_under_prescription) ? 1 : 0;

												$this->Products_model->update(array('slug' 										=> $this->security->xss_clean($this->input->post('slug')),
									                                               'id_category' 								=> $this->security->xss_clean($this->input->post('id_category')),
									                                               'name' 										=> $this->security->xss_clean($this->input->post('name')),
									                                               'cientific_name' 							=> $this->security->xss_clean($this->input->post('cientific_name')),
									                                               'how_to_use' 								=> $this->security->xss_clean($this->input->post('how_to_use')),
									                                               'indication' 								=> $this->security->xss_clean($this->input->post('indication')),
									                                               'therapeutic_class' 							=> $this->security->xss_clean($this->input->post('therapeutic_class')),
									                                               'ingredients' 								=> $this->security->xss_clean($this->input->post('ingredients')),
									                                               'product_info' 								=> $this->security->xss_clean($this->input->post('product_info')),
												                                   'product_keywords' 							=> $this->security->xss_clean($this->input->post('product_keywords')),
									                                               'nutritional_info' 							=> $old_object->nutritional_info,
									                                               'nutritional_info_obs' 						=> $this->security->xss_clean($this->input->post('nutritional_info_obs')),
									                                               'is_under_prescription' 						=> $is_under_prescription,
									                                               'product_image' 								=> $old_object->product_image,
									                                               'product_image_mobile' 						=> $old_object->product_image_mobile,
									                                               'product_image_tablet' 						=> $old_object->product_image_tablet,
									                                               'product_image_horizontal_align' 			=> $this->security->xss_clean($this->input->post('product_image_horizontal_align')),
									                                               'product_image_vertical_align' 				=> $this->security->xss_clean($this->input->post('product_image_vertical_align')),
									                                               'product_release_image'						=> $old_object->product_release_image,
									                                               'drug_leaflet_patient_pdf' 					=> $old_object->drug_leaflet_patient_pdf,
									                                               'drug_leaflet_healthcare_professional_pdf' 	=> $old_object->drug_leaflet_healthcare_professional_pdf,
																			       'date_last_update' => date('Y-m-d H:i:s')),

																		     array('id' => $id));

												$new_object = $this->Products_model->find_unique(array(), array('id = ' => $id, 'deleted = ' => 0));
												$this->admin_action_log($this->table_module, "edit", $old_object, $new_object);

												$this->insert_related_specialties($id);
												$this->insert_related_presentations($id);
												$this->insert_active_principles($id);

												$this->generate_products_json();

												$feedback_success_message = 'Record updated!';

											}

										}

									}

								}

							}

						}

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

		$this->form_validation->set_rules('name',
									      'Nome',
									      'required',

										  array('required' => 'Favor preencher o campo nome'));

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

				$this->Products_model->update(array('order' => $order),
										       array('id' => $id));

				$order++;

			}

		}

		$this->generate_products_json();

	}

	public function generate_products_json(){

		$result_filter = array();
		$result_products = array();

		$filename_all_products = APPPATH.'uploads/json/products.json';
		$filename_filter_products = APPPATH.'uploads/json/products_filter.json';

		$list = $this->Products_model->find(array(), array('deleted = ' => 0, 'active' => 1), '', array(), array('name' => 'ASC'));

		foreach ($list as $item) {

			$active_principles = array();
			$specialties = array();
			$presentations = array();
			$is_food_supplement = FALSE;

			if ($item->category->is_food) {
				$is_food_supplement = TRUE;
			}

			foreach ($item->specialties as $specialty) {

				$object_specialty = $this->ProductsSpecialty_model->find_unique(array(), array('id = ' => $specialty->id_specialty));

				if ($object_specialty) {
					$specialties[] = $object_specialty->title;
				}

			}

			foreach ($item->active_principles as $active_principle) {

				$object_active_preinciple = $this->ProductsActivePrinciple_model->find_unique(array(), array('id = ' => $active_principle->id_active_principle));

				if ($object_active_preinciple) {
					$active_principles[] = $object_active_preinciple->title.' ('.$object_active_preinciple->milligram_value.' '.$object_active_preinciple->unit.')';
				}

			}

			foreach ($item->presentations as $presentation) {

				$object_presentation = $this->ProductsPresentation_model->find_unique(array(), array('id = ' => $presentation->id_presentation));

				if ($object_presentation) {
					$presentations[] = $object_presentation->title;
				}

			}

			$result_filter[] = array('id' 					=> $item->id,
					                 'slug' 				=> $item->slug,
					                 'name' 				=> $item->name,
					                 'cientific_name' 		=> $item->cientific_name,
					                 'active_principles' 	=> $active_principles,
					                 'category_id'			=> $item->category->id,
					                 'category_name' 		=> $item->category->title,
					                 'is_food_supplement' 	=> $is_food_supplement,
					                 'isUnderPrescription' 	=> $item->is_under_prescription ? TRUE : FALSE,
					                 'specialties'			=> $specialties);


			$result_products[] = array('id' 										=> $item->id,
					                   'slug' 										=> $item->slug,
					                   'name' 										=> $item->name,
					                   'cientific_name' 							=> $item->cientific_name,
					                   'active_principles' 							=> $active_principles,
					                   'active_principles_divisor'					=> ',',
					                   'category_id'								=> $item->category->id,
					                   'category_name' 								=> $item->category->title,
					                   'drug_leaflet_patient_pdf'					=> site_url($this->base_cms.'/'.$this->controller_module.'/download/'.$item->drug_leaflet_patient_pdf.'/pdf'),
					                   'drug_leaflet_healthcare_professional_pdf'	=> site_url($this->base_cms.'/'.$this->controller_module.'/download/'.$item->drug_leaflet_healthcare_professional_pdf.'/pdf'),
					                   'how_to_use'									=> $item->how_to_use,
					                   'indication'									=> $item->indication,
					                   'therapeutic_class'							=> $item->therapeutic_class,
					                   'ingredients'								=> $item->ingredients,
					                   'nutritional_info'							=> My_Controller_CMS::get_path_file('products', $item->nutritional_info),
					                   'nutritional_info_obs'						=> $item->nutritional_info_obs,
					                   'is_food_supplement' 						=> $is_food_supplement,
					                   'isUnderPrescription' 						=> $item->is_under_prescription ? TRUE : FALSE,
					                   'presentation'								=> $presentations,
					                   'product_image'								=> My_Controller_CMS::get_path_file('products', $item->product_image),
					                   'product_image_horizontal_align'				=> $item->product_image_horizontal_align,
					                   'product_image_vertical_align'				=> $item->product_image_vertical_align,
					                   'product_release_image'						=> My_Controller_CMS::get_path_file('products', $item->product_release_image),
					                   'specialties'								=> $specialties,
					                   'specialties_separator'						=> ',');

		}


		$json_filter = json_encode($result_filter);

		 if ($handle = fopen($filename_filter_products, 'w')) {

		 	if (fwrite($handle, $json_filter) === TRUE) {
			    fclose($handle);
			}

		 }

		 $json_products = json_encode($result_products);

		 if ($handle = fopen($filename_all_products, 'w')) {

		 	if (fwrite($handle, $json_products) === TRUE) {
			    fclose($handle);
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
