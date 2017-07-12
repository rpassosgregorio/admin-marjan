<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socialresponsability extends MY_Controller {

	public function __construct(){

		parent::__construct();

	}

	public function index(){

		$this->load->model('SocialResponsability_model', '', TRUE);
		$this->view_data['object'] = $this->SocialResponsability_model->find_unique(array(), array(), '', array(), array(), 1, 1);

		$this->load_template('responsabilidade-social/index');
	}



}
