<?php

class AdminSubmodule_model extends MY_Model {

	const controller_default = 0;
	const administrators = 1;
	const admin_log = 2;
	const homeSite = 3;
	const news = 4;
	const topNews = 5;
	const productsHome = 6;
	const productsCategory = 7;
	const productsSpecialty = 8;
	const productsPresentation = 9;
	const productsActivePrinciple = 10;
	const products = 11;
	const aboutUs = 12;
	const socialResponsability = 13;
	const healthWellness = 14;
	const contactUs = 15;
	const career = 16;
	const healthProfessionals = 17;
	const pharmacovigilance = 18;
	const socialRoom = 19;
	const generalSettings = 20;
	const aboutUsNewBusiness = 21;
	const aboutUsInnovation = 22;
	const aboutUsQuality = 23;
	const aboutUsEnvironment = 24;
	const aboutUsOurHistory = 25;

	public $id;
	public $id_module;
	public $title;
	public $icon;
	public $controller;
	public $deleted;
	public $order;
	public $date_insertion;
	public $active;

	public $table_default = 'admin_submodules';
	public $table_default_prefix = '';
	public $list_relationship = array(array('left_table_field' 	=> 'id_module',
	                                        'right_table_field' => 'id',
	                                        'table' 			=> 'admin_modules',
	                                        'title_field' 		=> 'module',
	                                        'hasMany' 			=> FALSE,
	                                        'where' 			=> array('active' 	=> 1,
	                                                            		 'deleted' 	=> 0))
									);

	public function __construct(){

    	parent::__construct();
    	$this->table_default_prefix = $this->db->dbprefix.$this->table_default;

	}


}

?>