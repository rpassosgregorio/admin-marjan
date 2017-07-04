<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socialroom extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->view_data['controller_module'] = 'socialroom';

	}

	public function index(){
		$this->load_template('sala-social/index');
	}


}
