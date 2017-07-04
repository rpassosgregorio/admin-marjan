<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socialresponsability extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->view_data['controller_module'] = 'socialresponsability';

	}

	public function index(){
		$this->load_template('responsabilidade-social/index');
	}



}
