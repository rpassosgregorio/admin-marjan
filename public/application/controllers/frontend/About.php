<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {

	public function __construct(){

		parent::__construct();
		$this->view_data['controller_module'] = 'about';

	}

	public function index(){

		$this->load_template('sobre-nos/index');
	}

	public function newbusiness(){

		$this->load->model('AboutUsNewBusiness_model', '', TRUE);
		$this->view_data['action_module'] = 'newbusiness';
		$this->view_data['object'] = $this->AboutUsNewBusiness_model->find_unique(array(), array(), '', array(), array(), 1, 1);

		$this->load_template('sobre-nos/novos-negocios');
	}

	public function environment(){

		$this->load->model('AboutUsEnvironment_model', '', TRUE);
		$this->view_data['action_module'] = 'environment';
		$this->view_data['object'] = $this->AboutUsEnvironment_model->find_unique(array(), array(), '', array(), array(), 1, 1);

		$this->load_template('sobre-nos/meio-ambiente');
	}

	public function quality(){

		$this->load->model('AboutUsQuality_model', '', TRUE);
		$this->view_data['action_module'] = 'quality';
		$this->view_data['object'] = $this->AboutUsQuality_model->find_unique(array(), array(), '', array(), array(), 1, 1);

		$this->load_template('sobre-nos/qualidade');
	}

	public function innovation(){

		$this->load->model('AboutUsInnovation_model', '', TRUE);
		$this->view_data['action_module'] = 'innovation';
		$this->view_data['object'] = $this->AboutUsInnovation_model->find_unique(array(), array(), '', array(), array(), 1, 1);

		$this->load_template('sobre-nos/inovacao');
	}

	public function ourhistory(){

		$this->load->model('AboutUsOurHistory_model', '', TRUE);
		$this->view_data['action_module'] = 'ourhistory';
		$this->view_data['object'] = $this->AboutUsOurHistory_model->find_unique(array(), array(), '', array(), array(), 1, 1);

		$this->load_template('sobre-nos/nossa-historia');
	}


}
