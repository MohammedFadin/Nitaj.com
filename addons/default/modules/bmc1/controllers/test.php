<?php

class Test extends Public_Controller {
	
	public function Bmc() {
		parent::__construct();
		
		$this->lang->load('sample');
		$this->load->model('Bmc_majors_m');
		$this->load->model('Bmc_courses_m');
		$this->load->model('Bmc_materials_m');
		$this->load->model('Bmc_material_types_m');
		//$this->load->helper('module::comments');
	}
	
	public function index() {
		$test = array(
			"Hello" => "مرحبا بكم"
		);
		
		$this->template
		->set('test', $test)
		->build('test/index');		
	}
	
}