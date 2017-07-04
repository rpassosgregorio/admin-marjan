<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->view_data['controller_module'] = 'news';

	}

	public function index(){
		$this->load_template('noticias/index');
	}

	public function single($slug){
		$this->load_template('noticias/single');
	}


}
