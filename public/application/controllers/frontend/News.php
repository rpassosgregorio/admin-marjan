<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MY_Controller {

	public function __construct(){

		parent::__construct();

	}

	public function index(){
		$this->load_template('noticias/index');
	}

	public function single($slug){
		$this->load_template('noticias/single');
	}


}
