<?php

class Admin_majors extends Admin_Controller {
	
	protected $section = 'majors';
	
	protected $validation_rules = array(
	
		'major_name' => array(
			'field' => 'major_name',
			'label' => 'Major Name',
			'rules' => 'required|min_length[3]'
		),
		'slug' => array(
			'field' => 'slug',
			'label' => 'Major Slug',
			'rules' => 'required|min_length[3]'
		)
	);
	
	public function admin_majors() {
		parent::__construct();

		$this->lang->load('sample');		
		$this->load->model('Bmc_majors_m');
	}
	
	public function index() {
		
		$majors = $this->Bmc_majors_m->get_all();
		
		$this->template
		->title($this->module_details['name'])
		->set('majors', $majors)
		->build('admin/majors/index');
	}
	
	public function create() {
		
		$major = new stdClass;
		
		$this->form_validation->set_rules($this->validation_rules);
		// Check if POST request is there
		if ($this->input->post()) {
			if ($this->form_validation->run()) {
				
				$this->Bmc_majors_m->name = $this->input->post('major_name');
				$this->Bmc_majors_m->slug = $this->input->post('slug');
				
				// If record inserted redirect or otherwise
				if ($this->Bmc_majors_m->add_major()) {
					redirect('admin/bmc/majors');
				} else {
					redirect('admin/bmc/majors/create');
				}				
			}
		}
		
		foreach ($this->validation_rules as $index => $values) {
			$major->$values['field'] = set_value($values['field']);
		}
							
		// Lets bind our controller to the view
		$this->template
		->title($this->module_details['name'])
		->set('major', $major)
		->build('admin/majors/create_form');
	}
	
	public function edit( $id = 0 ) {
		
		$this->form_validation->set_rules($this->validation_rules);
		
		if ($this->input->post() && $this->form_validation->run()) {
				$this->Bmc_majors_m->name = $this->input->post('major_name');
				$this->Bmc_majors_m->slug = $this->input->post('slug');
				
				if ($this->Bmc_majors_m->update_major($id)) {
					redirect('admin/bmc/majors/');
				} else {
					redirect('admin/bmc/majors/edit/'. $id);					
				}
		} else {
			$major = $this->Bmc_majors_m->get_with_id($id);
		}
			$this->template
			->title($this->module_details['name'])
			->set('major', $major)
			->build('admin/majors/create_form');
	}
	
	public function delete($id) {

		//$ids = ($id) ? array($id) : $this->input->post('');
		if ($this->Bmc_majors_m->delete($id)) {
			redirect('admin/bmc/majors');
		}else {
			redirect('admin/bmc/majors');
		}
	}
}