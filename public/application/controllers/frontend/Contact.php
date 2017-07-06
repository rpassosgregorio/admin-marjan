<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

	public function __construct(){

		parent::__construct();

		$this->view_data['controller_module'] = 'contact';
		$this->load->model('ContactUs_model', '', TRUE);

	}

	public function index(){

		$this->view_data['object'] = $this->ContactUs_model->find_unique(array(), array(), '', array(), array(), 1, 1);

		$this->load_template('contato/index');

	}


}
