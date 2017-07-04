<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pharmacovigilance extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->view_data['controller_module'] = 'pharmacovigilance';

	}

	public function index(){
		$this->load_template('farmacovigilancia/index');
	}


}
