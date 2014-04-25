<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * This is a sample module for PyroCMS
 *
 * @author 		Mohammed S Fadin
 * @website		http://Sobialab.com
 * @package 	PyroCMS
 * @subpackage 	BMC Module
 */
class Admin extends Admin_Controller {
	
	protected $section = 'materials';
	
	protected $validation_rules = array(
		
		'material_name' => array(
			'field' => 'material_name',
			'label' => 'File Name',
			'rules' => 'required|max_length[200]'
		),
		'material_link' => array(
			'field' => 'material_link',
			'label' => 'File Upload',
		),
		array(
			'field' => 'material_type',
			'label' => 'File Type',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'material_course',
			'label' => 'Course Category',
			'rules' => 'trim|required|numeric'
		)
	);
	
	public function Admin() {
		parent::__construct();
		$this->lang->load('sample');
		$this->load->model('Bmc_materials_m');
		$this->load->model('Bmc_material_types_m');
		$this->load->model('Bmc_courses_m');
		
		// We include our asset files
		$this->template
		->append_css('module::admin.css')
		->append_js('module::admin.js');
		
		// Lets get all courses and types for dropdowns
		$courses = $this->Bmc_courses_m->get_all();	
		foreach ($courses as $course) {
			$_courses[$course->course_id] = $course->course_name;
		}

		$materials_types = $this->Bmc_material_types_m->get_all_types();
			foreach ($materials_types as $materials_type) {
				$_materials_types[$materials_type->material_type_id] = $materials_type->material_type_name;				
			}
			
		// Dropboxes data ranges
		$this->template
		->set('courses', $_courses)		
		->set('materials_types', $_materials_types);
	}
	
	
	public function index() {

		$materials_list = $this->Bmc_materials_m->get_all_materials();
				
		$this->template
		->title($this->module_details['name'])
		->set('uploaded_materials', $materials_list)
		->build('admin/index');		
	}
	
	public function create() {
		
		$this->load->helper('form');
		
		// Empty Object class and include all known fields
		$material = new stdClass;
				
		if ($this->input->post()) {
			
			$this->form_validation->set_rules($this->validation_rules);
			
			if ($this->form_validation->run()) {

				// Lets put all posted data into module
				$this->Bmc_materials_m->material_type = $this->input->post('material_type');
				$this->Bmc_materials_m->material_name = $this->input->post('material_name');
				$this->Bmc_materials_m->course_id = $this->input->post('material_course');
				$this->Bmc_materials_m->uploader_id = $this->current_user->id;
							
				// Uploading Configurations			
				$config['upload_path'] = './resources/uploads';
				$config['allowed_types'] = 'gif|jpg|png|pdf|ppt|doc|docx';
				$config['max_size']	= '5000';
				//$config['max_width']  = '1024';
				//$config['max_height']  = '768';
				
				$this->load->library('upload', $config);
				$this->upload->do_upload('material_link');
				
				$upload_data = $this->upload->data();
				$this->Bmc_materials_m->material_link = $upload_data['file_name'];
				
				if ($this->Bmc_materials_m->add_material()) {
					// If the model inserted the new record
					redirect('admin/bmc');
				} else {
				// Went wrong
					redirect('admin/bmc/create');
				}
				//End Validation RUN
			}
		}
		
		// Assign the properties dynamically at run time
		// Basically, fetching the data array inside the
		// constructor, then assign it to our dynamic object 
		foreach ($this->validation_rules as $indexs => $values) {
			// We use set_value() to get the values
			$material->$values['field'] = set_value($values['field']);
		} 
		
		$this->template
		->title($this->module_details['name'])
		->set('material', $material)
		->build('admin/material_form');
	}
	
	/**
	 * Delete BMC File
	 *
	 * @param int $id The ID of the uploaded file
	 */
	public function delete($id = 0) {
		
		$ids = ($id) ? array($id) : $this->input->post('action_to');
		
		if (!empty($ids)) {
			foreach ($ids as $id) {
				
				$this->Bmc_materials_m->remove_material($id);
			}
		}
		redirect('admin/bmc');		
/*
	 	if ($this->Bmc_materials_m->remove_material($id)) {
		 	redirect('admin/bmc');
	 	} else {
		 	redirect('admin/bmc');
	 	}
*/
		
	}
	
	public function edit($id = 0) {
		
			$this->form_validation->set_rules($this->validation_rules);

			if ($this->form_validation->run()) {

				// Lets put all posted data into module
				$this->Bmc_materials_m->material_type = $this->input->post('material_type');
				$this->Bmc_materials_m->material_name = $this->input->post('material_name');
				$this->Bmc_materials_m->course_id = $this->input->post('material_course');
				$this->Bmc_materials_m->uploader_id = $this->current_user->id;
				
/*
				if (isset($_FILES['material_link'])) {

					// Uploading Configurations			
					$config['upload_path'] = './resources/uploads';
					$config['allowed_types'] = 'gif|jpg|png|pdf|ppt|doc|docx';
					$config['max_size']	= '5000';
					//$config['max_width']  = '1024';
					//$config['max_height']  = '768';
					
					$this->load->library('upload', $config);
					$this->upload->do_upload('material_link');
					
					$upload_data = $this->upload->data();
					$this->Bmc_materials_m->material_link = $upload_data['file_name'];
					
				}			
*/
				
				if ($this->Bmc_materials_m->update_material($id)) {
					// If the model inserted the new record
					redirect('admin/bmc');
				} else {
				// Went wrong
					redirect('admin/bmc/edit/'.$id);
				}
				//End Validation RUN
			} else {
				$material = $this->Bmc_materials_m->get_with_id($id);
			}
		
		$this->template
		->title($this->module_details['name'])
		->set('material', $material)
		->build('admin/material_form');
	}
}