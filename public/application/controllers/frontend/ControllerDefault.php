<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllerDefault extends MY_Controller {

	public function __construct(){

		parent::__construct();

	}

	public function index(){
		$this->load_template('default/index');
	}

	public function detail(){
		$this->load_template('default/detail');
	}


}
