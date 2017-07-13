<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pharmacovigilance extends MY_Controller {

	public function __construct(){

		parent::__construct();

	}

	public function index(){

		$this->load->model('Pharmacovigilance_model', '', TRUE);
		$this->view_data['object'] = $this->Pharmacovigilance_model->find_unique(array(), array(), '', array(), array(), 1, 1);

		$this->load_template('farmacovigilancia/index');
	}


}
