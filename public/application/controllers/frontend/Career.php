<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Career extends MY_Controller {

	public function __construct(){

		parent::__construct();

	}

	public function index(){
		$this->load_template('carreira/index');
	}


}