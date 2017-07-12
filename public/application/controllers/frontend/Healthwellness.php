<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Healthwellness extends MY_Controller {

	public function __construct(){

		parent::__construct();

	}

	public function index(){
		$this->load_template('saude-e-bem-estar/index');
	}


}
