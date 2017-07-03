<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller_CMS {

	public $controller_module = 'home';

	public function index(){

		if(!$this->admin_user_is_logged()){
			$this->redirect_login();
		}else{

			$first_submodule = array();
			foreach($this->menu_allowed_admin as $menu){

				if(!empty($menu['submodule'])){

					$first_submodule = $menu['submodule'][0];
					break;

				}

			}

			if(empty($first_submodule)){
				$this->logout();
			}

			if($this->lang_default == $this->lang_selected){
				redirect(base_url($this->base_cms.'/'.$first_submodule->controller));
			}else{
				redirect(base_url($this->base_cms.'/'.$this->lang_selected.'/'.$first_submodule->controller));
			}

		}

		$this->load->view('welcome_message');

	}

	public function login(){

		$this->action_login();
		$this->load_template('login/index', $this->view_data, FALSE);

	}

	public function logout(){

		unset($_SESSION[$this->name_session_login_admin]);
		$this->session->unset_userdata($this->link_start_redirect);

		redirect(base_url($this->base_cms.'/home/login'));

	}

	private function action_login(){

		if($this->is_post() && !empty($this->input->post())){

			$feedback_error_message = '';
			$feedback_success_message = '';

			if($this->session->has_userdata($this->name_session_login_admin)){
				$this->session->unset_userdata($this->name_session_login_admin);
			}

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$object_user = $this->AdminUser_model->find_unique(array(), array('email = ' => $email, 'password = ' => sha1($password), 'deleted = ' => 0, 'active = ' => 1));

			if(empty($object_user)){
				$feedback_error_message = $this->lang->line('login_invalid');
			}else{

				$this->session->set_userdata($this->name_session_login_admin, $object_user);

				$this->AdminUser_model->update(array('date_last_login' => date('Y-m-d H:i:s')),
											   array('id' => $object_user->id));

				if($this->session->has_userdata($this->link_start_redirect)){

					$url = $this->session->userdata($this->link_start_redirect);
					$this->session->unset_userdata($this->link_start_redirect);

					redirect($url);
					exit();

				}else{

					redirect(base_url($this->base_cms."/".$this->lang_selected));
					exit();

				}


			}

			$this->set_feedback('success', $feedback_success_message);
			$this->set_feedback('error', $feedback_error_message);

			$this->view_data['feedback_success'] = $this->get_feedback('success');
			$this->view_data['feedback_error'] = $this->get_feedback('error');

		}

	}

	public function check_mail(){

  		$object = $this->AdminUser_model->find_unique(array(), array('email = ' => $this->input->post('input'), 'deleted = ' => 0));

  		if(!empty($object)){

  			$result = "true";
			$msg = "Sucesso";

  		}else{

  			$result = "false";
			$msg = "Erro: e-mail não encontrado";

  		}

		echo json_encode(array('result' => $result, 'msg' => 'success'));

	}


}
