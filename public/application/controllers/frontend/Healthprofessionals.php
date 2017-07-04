<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Healthprofessionals extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->view_data['controller_module'] = 'healthprofessionals';

	}

	public function index(){
		$this->load_template('profissionais-da-saude/index');
	}


}
