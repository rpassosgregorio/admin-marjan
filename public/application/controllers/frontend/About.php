<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {

	public function __construct(){

		parent::__construct();

	}

	public function index(){
		$this->load_template('sobre-nos/index');
	}

	public function newbusiness(){
		$this->load_template('sobre-nos/novos-negocios');
	}


}
