<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	protected $name_project = '';
	protected $public_view_dir = '';
	protected $user_looged = null;
	protected $name_session_login_user = 'user_logged';
	protected $link_start_redirect = '';
	protected $lang_selected = 'pt';
	protected $count_pages_list = 10;

	public $view_data = array();

	public function __construct(){

		parent::__construct();

		$this->lang_default = $this->config->item('url_language_default');
		$this->name_project = $this->config->item('name_project');
		$this->public_view_dir = $this->config->item('public_view_dir');

		$this->name_session_login_user = $this->name_project.'_'.$this->name_session_login_user;

		if($this->user_is_logged()){
			$this->user_logged = $this->get_user_logged();
		}

		if(in_array($this->uri->segment(1), $this->config->item('url_languages_allowed'))){
			$this->lang_selected = $this->uri->segment(1);
		}else{
			$this->lang_selected = $this->lang_default;
		}

		$this->view_data['controller_module'] = '';

	}


	protected function generate_code($lenght = 5){

		 $valid = 'ABCDEFGHJKMNPQRSTUVXZWY123456789';
		 $code = null;

		 for($i=0;$i<$lenght;$i++){
	         $code .= $valid{rand(0,strlen($valid)-1)};
		 }

		 return $code;

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

	protected function get_user_logged(){

		if($this->user_is_logged()){
			return $this->session->userdata[$this->name_session_login_user];
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

	protected function get_token() {

		date_default_timezone_set('GMT');
		$time = time();

		$day = date('d', $time);
		$hour = date('H', $time);
		$month = date('m', $time);
		$minutes = date('i', $time);
		$year = date('Y', $time);

		$string = $day.'-'.$hour.'-'.$month.'-'.$minutes.'-'.$year.'@'.$this->name_project;

	  	return md5($string);

	}

	protected function is_post_token(){

    	if($this->input->server('REQUEST_METHOD') == 'POST' && isset($_POST['token']) && $_POST['token'] == $this->get_token()){
    		return TRUE;
    	}

    	return FALSE;

    }


	protected function upload($name_input_file = 'file', $filename = 'filename', $folder = '', $allowed_types = 'gif|jpg|jpeg|png|pdf', $config = array()){

		$data = array();

		$this->load->library('upload');
		$this->upload->initialize($this->set_upload_options($filename, $folder, $allowed_types, $config));

		if(!$this->upload->do_upload($name_input_file)){
			$data = array('result' => FALSE, 'item' => 0, 'error' => $this->upload->display_errors(), 'upload_data' => '');
        }else{
        	$data = array('result' => TRUE, 'item' => 0, 'error' => '', 'upload_data' => $this->upload->data());
        }

		return $data;

	}

	protected function upload_multiple($name_input_file = array(), $filename = array(), $folder = '', $allowed_types = 'gif|jpg|jpeg|png', $config = array()){

		$data = array();

		$this->load->library('upload');

	    $files = $_FILES;
	    $count_file = count($_FILES[$name_input_file]['name']);

	    for($i = 0; $i < $count_file; $i++){

	        $_FILES[$name_input_file]['name']     	= $filename[$i];
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

	protected function get_response_request($code, $msg = ''){

		switch($code){

			case 0:
				return 'success';
			case 1:
				return 'request invalid';
			case 2:
				return 'token invalid';
			case 3:
				return 'params invalid';
			case 4:
				return 'params invalid';

			default:
				return $msg;

		}

	}

	public function load_template($view_file_name, $keep_template_default = TRUE) {

		$ci = &get_instance();

		if($keep_template_default) {

			$ci->load->view($this->public_view_dir.'/includes/header', $this->view_data);
			$ci->load->view($this->public_view_dir.'/'.$view_file_name, $this->view_data);
			$ci->load->view($this->public_view_dir.'/includes/footer', $this->view_data);

		}else{
			$ci->load->view($this->public_view_dir.'/'.$view_file_name, $this->view_data);
		}

	}

	public function input_internationalization($str_post, $str_db = ''){

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


	public function output_internationalization($str){

		$str_lang = '[:'.$this->lang_selected.']';
		$result = '';

		if(strstr($str, $str_lang)){

			$aux = explode($str_lang, $str);
			$aux = explode('[:', $aux[1]);
			$result = $aux[0];


		}

		return $result;
	}

	public static function _echo($str){
		$this->output->set_output($str);
	}

	public static function _echo_json($arg){

		header('Access-Control-Allow-Origin:*');
		$this->output->set_content_type('application/json')->set_output(json_encode($arg));

	}

	public function image_processing($folder, $id, $type = '', $width = 50, $height = 50, $angle = 90){

		$path_img = MY_Controller_CMS::get_path_file($folder, $id.'-'.$width.'x'.$height);

		if(!empty($path_img) || empty($type)){
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
