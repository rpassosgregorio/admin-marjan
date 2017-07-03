<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller_CMS extends CI_Controller {

	public $base_cms = '';
	public $base = '';
	public $view_data = array();

	public $id_subomdule = 0;
	public $name_project = '';
	public $admin_logged = null;
	public $name_session_login_admin = 'admin_logged';
	public $name_session_login_user = 'user_logged';
	public $menu = array();
	public $menu_allowed_admin = array();
	public $id_sumodules_allowed_admin = array();
	public $link_start_redirect = '';
	public $lang_default = '';
	public $lang_selected = '';
	public $url_languages_allowed = '';
	public $cms_dir_default = '';
	public $count_pages_list = 10;



	public function __construct(){

		parent::__construct();

		$this->lang_default = $this->config->item('url_language_default');
		$this->url_languages_allowed = $this->config->item('url_languages_allowed');

		$this->base_cms = $this->config->item('base_cms');
		$this->name_project = $this->config->item('name_project');

		$this->load->model('AdminUser_model', '', TRUE);

		$this->name_session_login_admin = $this->name_project.'_'.$this->name_session_login_admin;
		$this->name_session_login_user = $this->name_project.'_'.$this->name_session_login_user;

		if($this->admin_user_is_logged()){

			$this->admin_logged = $this->get_admin_logged();
			$this->admin_logged->avatar = $this->get_avatar($this->admin_logged->email, 160);
			$this->list_submodules_by_admin();

		}

		if(in_array($this->uri->segment(2), $this->url_languages_allowed)){
			$this->lang_selected = $this->uri->segment(2);
		}else{
			$this->lang_selected = $this->lang_default;
		}

		$this->cms_dir_default = $this->config->item('cms_dir_default');

		$this->lang->load('feedback_cms', $this->lang_selected);

		$this->set_link_start_redirect();

	}

	private function list_submodules_by_admin(){

		$id_menu_allowed = array();

		$this->load->model('AdminModule_model', '', TRUE);
		$this->load->model('AdminSubmodule_model', '', TRUE);
		$this->load->model('AdminAccess_model', '', TRUE);

		$modules = $this->AdminModule_model->find(array(), array('deleted = ' => 0, 'active = ' => 1), '', array(), array('order' => 'ASC', 'id' => 'ASC'));
		$menu_allowed = $this->AdminAccess_model->find(array(), array('id_admin = ' => $this->admin_logged->id, 'deleted = ' => 0, 'active = ' => 1));

		foreach($menu_allowed as $access_admin){
			$id_menu_allowed[] = $access_admin->id_submodule;
		}

		foreach($modules as $item){

			$submodules = $this->AdminSubmodule_model->find(array(), array('id_module = ' => $item->id, 'deleted = ' => 0, 'active = ' => 1), '', array(), array('order' => 'ASC', 'id' => 'ASC'));
			$this->menu[] = array('module' => $item, 'submodules' => $submodules);

		}


		$id_submodule_allowed_admin = array();

		foreach($this->menu as $menu){

			$module_allwed = $menu['module'];
			$submodules_allowed = array();

			foreach($menu['submodules'] as $submodule){

				if(in_array($submodule->id, $id_menu_allowed)){

					$submodules_allowed[] = $submodule;
					$id_submodule_allowed_admin[] = $submodule->id;

				}

			}

			$this->menu_allowed_admin[] = array('module' => $module_allwed, 'submodule' => $submodules_allowed);

		}

		$this->id_sumodules_allowed_admin = $id_submodule_allowed_admin;


	}

	public function admin_action_log($table, $action, $old_object = NULL, $new_object = NULL){

		$this->load->model('AdminLog_model', '', TRUE);

		$last_id = $this->AdminLog_model->insert(array('id_admin' => $this->admin_logged->id,
													   'action' => $action,
												       'table' => $table,
												       'json' => json_encode(array('new_object' => $new_object, 'old_object' => $old_object), JSON_PRETTY_PRINT),
												       'deleted' => 0,
												       'order' => 0,
												       'active' => 1));


	}

	protected function generate_code($lenght = 5){

		 $valid = 'ABCDEFGHJKMNPQRSTUVXZWY123456789';
		 $code = null;

		 for($i=0;$i<$lenght;$i++){
	         $code .= $valid{rand(0,strlen($valid)-1)};
		 }

		 return $code;

  	}

	protected function admin_user_is_logged(){

		if($this->session->has_userdata($this->name_session_login_admin)){
			return true;
		}

		return false;

	}

	protected function user_is_logged(){

		if($this->session->has_userdata($this->name_session_login_user)){
			return true;
		}

		return false;

	}

	protected function reduce_string($str, $size, $separator = '...'){

        $count_str = strlen($str);

        if($count_str > $size){

			$str_reduced = substr($str, 0, $size);
			$str_reduced = $str_reduced . $separator;

		}else{
			$str_reduced = $str;
		}

		return $str_reduced;
	}

	protected function set_feedback($type, $message){
		$this->session->set_flashdata($type, $message);

	}

	protected function get_feedback($key){

		$return = '';

		if($this->session->flashdata($key)){
			$return = $this->session->flashdata($key);
		}

		return $return;
	}

	protected function get_admin_logged(){

		if($this->admin_user_is_logged()){
			return $this->session->userdata[$this->name_session_login_admin];
		}

	}

	protected function set_link_start_redirect(){

		if($this->session->has_userdata($this->name_project.'link_start_redirect')){
  	  	    $this->link_start_redirect = $this->session->userdata[$this->name_project.'link_start_redirect'];
        }else{

        	$referer = $this->input->server('HTTP_REFERER');

        	if($referer){
        		$this->session->set_userdata($this->name_project.'link_start_redirect', $referer);
        	}
        }

    }

    protected function is_post(){

    	if($this->input->server('REQUEST_METHOD') == 'POST'){
    		return TRUE;
    	}

    	return FALSE;

    }

    protected function is_ajax(){


  		if(strtolower($this->input->server('HTTP_X_REQUESTED_WITH')) === 'xmlhttprequest') {
  			return TRUE;
  		}

  		return FALSE;

    }



	protected function upload($name_input_file = 'file', $filename = 'filename', $folder = '', $allowed_types = 'gif|jpg|jpeg|png|pdf', $config = array()){

		$data = array();

		if(!empty($_FILES[$name_input_file]['name'])){

			$this->load->library('upload');
			$this->upload->initialize($this->set_upload_options($filename, $folder, $allowed_types, $config));

			if(!$this->upload->do_upload($name_input_file)){
				$data = array('result' => FALSE, 'item' => 0, 'error' => $this->upload->display_errors(), 'upload_data' => '');
	        }else{
	        	$data = array('result' => TRUE, 'item' => 0, 'error' => '', 'upload_data' => $this->upload->data());
	        }

    	}else{
    		$data = array('result' => TRUE, 'item' => 0, 'error' => '', 'upload_data' => array());
    	}

		return $data;

	}

	protected function upload_multiple($name_input_file = array(), $filename = array(), $folder = '', $allowed_types = 'gif|jpg|jpeg|png|pdf', $config = array()){

		$data = array();

		$this->load->library('upload');

	    $files = $_FILES;
	    $files_aux = $_FILES[$name_input_file];
	    $count_file = count($_FILES[$name_input_file]['name']);

    	$extensions = array();

    	for($i = 0; $i < count($files_aux['name']); $i++){
    		$extensions[] = pathinfo($files_aux['name'][$i], PATHINFO_EXTENSION);
    	}


	    for($i = 0; $i < $count_file; $i++){


	    	if(!empty($files[$name_input_file]['name'][$i]) && !empty($filename[$i])){

		        $_FILES[$name_input_file]['name']     	= $filename[$i].'.'.$extensions[$i];
		        $_FILES[$name_input_file]['type']		= $files[$name_input_file]['type'][$i];
		        $_FILES[$name_input_file]['tmp_name']	= $files[$name_input_file]['tmp_name'][$i];
		        $_FILES[$name_input_file]['error']		= $files[$name_input_file]['error'][$i];
		        $_FILES[$name_input_file]['size']		= $files[$name_input_file]['size'][$i];

		        $this->upload->initialize($this->set_upload_options($_FILES[$name_input_file]['name'], $folder, $allowed_types, $config));

			    if(!$this->upload->do_upload($name_input_file)){
					$data[] = array('result' => FALSE, 'item' => $i, 'error' => $this->upload->display_errors(), 'upload_data' => '');
	            }else{
	                $data[] = array('result' => TRUE, 'item' => $i, 'error' => '', 'upload_data' => $this->upload->data());
	            }

	        }else{
	        	$data = array('result' => TRUE, 'item' => 0, 'error' => '', 'upload_data' => array());
	        }

	    }


	    return $data;

	}


	protected function set_upload_options($filename = 'filename', $folder = '', $allowed_types = 'gif|jpg|jpeg|png', $config = array()){

	    $config = array();

	    $config['file_name'] = $filename;

    	if(!isset($config['upload_path'])){

    		if(!empty($folder)){
		    	$config['upload_path'] = APPPATH.'/uploads/'.$folder.'/';
		    }else{
		    	$config['upload_path'] = APPPATH.'/uploads/';
		    }

    	}

    	if(!isset($config['allowed_types'])){
	    	$config['allowed_types'] = $allowed_types;
    	}

    	if(!isset($config['max_size'])){
	    	$config['max_size']      = '0';
    	}

    	if(!isset($config['remove_spaces'])){
	    	$config['remove_spaces'] = TRUE;
    	}

    	if(!isset($config['overwrite'])){
	    	$config['overwrite']     = TRUE;
    	}

	    return $config;

	}


	protected function redirect_login(){

		if($this->input->server('PATH_INFO')){
			$this->session->set_userdata($this->link_start_redirect, $this->input->server('PATH_INFO'));
		}

		if($this->lang_default == $this->lang_selected){
			$url_redirect = base_url($this->base_cms.'/home/login');
		}else{
			$url_redirect = base_url($this->base_cms.'/'.$this->lang_selected.'/home/login');
		}

		redirect($url_redirect);

	}

	protected function get_avatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {

	    $url = 'http://www.gravatar.com/avatar/';
	    $url .= md5( strtolower( trim( $email ) ) );
	    $url .= "?s=$s&d=$d&r=$r";
	    if ( $img ) {
	        $url = '<img src="' . $url . '"';
	        foreach ( $atts as $key => $val )
	            $url .= ' ' . $key . '="' . $val . '"';
	        $url .= ' />';
	    }

	    return $url;

	}

	protected function search_field_format($field_search){

		if($field_search){
			$field_search = '/'.$field_search;
		}

		return $field_search;
	}

	protected function breadcrumbs($params = array(), $path_base){

		$url = array();

		foreach($params as $item){

			if(!empty($item) || $item != 0){
				$url[] = $item;
			}

		}

		$url = $path_base.'/'.implode("/", $url);

		return $url;

	}


	public function load_template($view_file_name, $data_array = array(), $keep_template_default = TRUE) {

		$ci = &get_instance();

		if($keep_template_default){

			$url_view = explode('/', $view_file_name);

			$ci->load->view($this->cms_dir_default.'/includes/header', $data_array);
			$ci->load->view($this->cms_dir_default.'/'.$url_view[0].'/head/'.$url_view[1], $data_array);
			$ci->load->view($this->cms_dir_default.'/includes/sidebar', $data_array);
			$ci->load->view($this->cms_dir_default.'/'.$view_file_name, $data_array);
			$ci->load->view($this->cms_dir_default.'/includes/footer', $data_array);

		}else{
			$ci->load->view($this->cms_dir_default.'/'.$view_file_name, $data_array);
		}

	}

	public function encode_internationalization($str_post, $str_db = ''){

		$str_lang = '[:'.$this->lang_selected.']';
		$str_close = '[:]';
		$result = $str_db;

		if(strstr($str_db, $str_lang)){


			$aux = explode($str_lang, $str_db);
			$aux = explode('[:', $aux[1]);
			$replace = $str_lang.$aux[0].'[:';

			$result = str_replace($replace, $str_lang.$str_post.'[:', $str_db);


		}else{

			if(strstr($str_db, $str_close)){

				$str_modify = explode($str_close, $str_db);
				$result = $str_modify[0].$str_lang.$str_post.$str_close;

			}else{
				$result = $str_lang.$str_post.$str_close;
			}


		}

		return $result;
	}


	public function decode_internationalization($str){

		$str_lang = '[:'.$this->lang_selected.']';
		$result = '';

		if(strstr($str, $str_lang)){

			$aux = explode($str_lang, $str);
			$aux = explode('[:', $aux[1]);
			$result = $aux[0];


		}

		return $result;
	}

	public function _echo($str){
		echo $str;
	}

	public static function _echo_json($arg){

		header('Access-Control-Allow-Origin:*');
		echo json_encode($arg);

	}


	public function image_processing($folder, $id, $type = '', $width = 50, $height = 50, $angle = 90){

		$path_img = MY_Controller_CMS::get_path_file($folder, $id.'-'.$width.'x'.$height);

		if(!empty($path_img)){
			return $path_img;
		}

		if(empty($type)){
			return MY_Controller_CMS::get_path_file($folder, $id);
		}

		$config['source_image'] = MY_Controller_CMS::get_path_file($folder, $id, 'root');

		if(!isset($config['image_library'])){
			$config['image_library'] = 'gd2';
		}

		if(!isset($config['maintain_ratio'])){
			$config['maintain_ratio'] = TRUE;
		}

		if(!isset($config['width'])){
			$config['width'] = $width;
		}

		if(!isset($config['height'])){
			$config['height'] = $height;
		}

		if(!isset($config['rotation_angle'])){
			$config['rotation_angle'] = $angle;
		}

		list($dirname, $basename, $extension, $filename) = array_values(pathinfo($config['source_image']));
		$name_new_image = $filename.'-'.$config['width'].'x'.$config['height'].'.'.$extension;

		if(!isset($config['new_image'])){
			$config['new_image']  = APPPATH.'uploads/'.$folder.'/'.$name_new_image;
		}

		$this->load->library('image_lib', $config);

		if($type == 'resize'){

			if(!$this->image_lib->resize()){
				var_dump($this->image_lib->display_errors()); die();
			}

		}else if($type == 'crop'){

			if(!$this->image_lib->crop()){
				var_dump($this->image_lib->display_errors()); die();
			}

			return array("result" => $result, "msg" => $msg);

		}else if($type == 'rotate'){

			if(!$this->image_lib->rotate()){
				var_dump($this->image_lib->display_errors()); die();
			}

		}

		$path_img = MY_Controller_CMS::get_path_file($folder, $id.'-'.$width.'x'.$height);

		return $path_img;

	}

	public static function get_path_file($folder, $id, $type = 'base'){

		$allowed_file_extensions = array('jpg', 'jpeg', 'png', 'mp4');

		foreach ($allowed_file_extensions as $extension) {

			if(file_exists(APPPATH.'uploads/'.$folder.'/'.$id.'.'.strtolower($extension))){

				if($type == 'root'){
					return APPPATH.'uploads/'.$folder.'/'.$id.'.'.strtolower($extension);
				}

				return base_url('application/uploads/'.$folder.'/'.$id.'.'.strtolower($extension));

			}

			if(file_exists(APPPATH.'uploads/'.$folder.'/'.$id.'.'.strtoupper($extension))){

				if($type == 'root'){
					return APPPATH.'uploads/'.$folder.'/'.$id.'.'.strtoupper($extension);
				}

				return base_url('application/uploads/'.$folder.'/'.$id.'.'.strtoupper($extension));
			}

		}

		return false;

	}


}
