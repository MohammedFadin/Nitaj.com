<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * This is a sample module for PyroCMS
 *
 * @author 		Mohammed S Fadin
 * @website		http://Sobialab.com
 * @package 	PyroCMS
 * @subpackage 	BMC Module
 * @Desc		CRUD the material types like quizzes, majors, lectures
 */
class Admin_material_types extends Admin_Controller {

	protected $section = 'types';
	
	protected $validation_rules = array(
	
		'material_type_name' => array(
			'field' => 'material_type_name',
			'label' => 'File Type',
			'rules' => 'required|max_length[100]|min_length[3]'
		)
	);
	
	public function Admin_material_types() {

		parent::__construct();		
		$this->lang->load('sample');
		$this->load->model('Bmc_material_types_m');
	}
	
	public function index() {
		
		$types = $this->Bmc_material_types_m->get_all();
		
		$this->template
		->title($this->module_details['name'])
		->set('types', $types)
		->build('admin/material_types/index');
	}
	
	public function create() {
		
		$type = new stdClass;
		
		// Check if POST request is there
		if ($this->input->post()) {
			$this->Bmc_material_types_m->type_name = $this->input->post('material_type_name');
			
			// If record inserted redirect or otherwise
			if ($this->Bmc_material_types_m->add_type()) {
				redirect('admin/bmc/material_types');
			} else {
				redirect('admin/bmc/material_types/create');
			}
		}
		
		foreach ($this->validation_rules as $key => $field) {
			$type->$field['field'] = set_value($field['field']) ;
		}
		
		// Lets display our view
		$this->template
		->title($this->module_details['name'])
		->set('type', $type)
		->build('admin/material_types/create');
	}
	
	public function delete($id = 0) {
				
		// if the id does exists from GET convert
		// to array, otherwise check POST request
		$ids = ($id) ? array($id) : $this->input->post('action_to');
		
		if (! empty($ids)) {
			foreach ( $ids as $id ) {	
				$this->Bmc_material_types_m->remove_type($id);
			}			
		}
		redirect('admin/bmc/material_types');
	}
	
	public function edit($id = 0) {
		
		$this->form_validation->set_rules($this->validation_rules);
		
		if ($this->input->post() && $this->form_validation->run()) {
			
			$this->Bmc_material_types_m->type_name = $this->input->post('material_type_name');
			
			if ($this->Bmc_material_types_m->update_type($id)) {
				redirect('admin/bmc/material_types');
			}
			
		} else {
			
			$type = $this->Bmc_material_types_m->get_with_id($id) or show_404();
		}
		
		$this->template
		->title($this->module_details['name'])
		->set('type', $type)
		->build('admin/material_types/create');
	}
}