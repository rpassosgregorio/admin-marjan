<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct(){

		parent::__construct();

		$this->load->model('Home_model', '', TRUE);

	}

	public function index(){

		$this->view_data['object'] = $this->Home_model->find_unique(array(), array(), '', array(), array(), 1, 1);

		$this->load_template('home/index');

	}

}
