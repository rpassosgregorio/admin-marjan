<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->view_data['controller_module'] = 'produtos';

	}

	public function index(){
		$this->load_template('produtos/index');
	}

	public function single($slug){
		$this->load_template('produtos/single');
	}



}
