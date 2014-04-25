<?php

class Bmc extends Public_Controller {
	
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
		
		// Lets fetch all Majors available
		$majors = $this->Bmc_majors_m->get_all();

		for ( $i = 0; $i < count($majors); $i++ ) {
			$courses = $this->Bmc_courses_m->get_with_mid($majors[$i]->major_id);
			$majors[$i]->major_courses = $courses;
		}
				
		$this->template
		->set('majors', $majors)
		->set('courses', $courses)
		->set_breadcrumb('Home', ' ')
		->build('bmc');		
	}
	
	public function major( $slug = '') {
		
		// Lets fetch all the major details using slug
		$major = $this->Bmc_majors_m->get($slug) or show_404();
		
		$courses = $this->Bmc_courses_m->get_with_mid($major->major_id);
		
		$this->load->library('comments/comments', array(
			'entry_id' => $major->major_id,
			'entry_title' => $major->major_name,
			'module' => 'bmc',
			'singular' => 'bmc:major',
			'plural' => 'bmc:majors'
		));

		$this->template
		->set('courses', $courses)
		->set_breadcrumb('Home', ' ')
		->set_breadcrumb($major->major_name, 'bmc/major/'.$major->slug)
		->build('major_page');
	}
	
	public function course( $slug = '') {
		
		// Lets fetch all courses files using our slug
		$course = $this->Bmc_courses_m->get($slug) or show_404();
		$material_types = $this->Bmc_material_types_m->get_all();

		$course_files = $this->Bmc_materials_m->get_with_cid($course->course_id);

		$this->load->model('users/user_m');		
		for($i = 0; $i < count($course_files); $i++) {
			$uploader = $this->user_m->get(array('id' => $course_files[$i]->uploader_id)); // This is an array
			$course_files[$i]->uploader_name = $uploader->username;
		}
		
		$this->load->library('comments/comments', array(
			'entry_id' => $course->course_id,
			'entry_title' => $course->course_name,
			'module' => 'bmc',
			'singular' => 'bmc:course',
			'plural' => 'bmc:courses'
		));
		
		$this->template
		->set('course_info', $course)
		->set('course_files', $course_files)
		->set('material_types', $material_types)
		->set_breadcrumb('Home', ' ')
		->set_breadcrumb($course->course_name, 'bmc/course/'.$course->slug)
		->build('course_page'); 
	}
	
	// This function allows you to download your files indirectly
	public function download( $file_id = 0) {
		
		$file_id or redirect('bmc');
		
		$requested_file = $this->Bmc_materials_m->get_with_id( $file_id ) or show_404();
				
		$this->load->model('users/user_m');
		$uploader = $this->user_m->get(array('id' => $requested_file->uploader_id)); // This is an array

		$this->template
		->set('file', $requested_file)
		->set('uploader', $uploader)
		->build('download_page');
	}
	
	// This function is a copycat of the admin
	// panel function, however, frontended to
	// allow users to upload and add materials
	public function add() {
		
		$this->load->helper(array('form', 'url'));
		
		$this->form_validation->set_rules('material_name', 'File Name', 'required|max_length[150]|min_length[10]');
		$this->form_validation->set_rules('material_link', 'Upload File');
		
		if ($this->input->post() && $this->form_validation->run() == TRUE) {
						
			// Lets put all posted data into module
			$this->Bmc_materials_m->material_type = $this->input->post('material_type');
			$this->Bmc_materials_m->material_name = $this->input->post('material_name');
			$this->Bmc_materials_m->course_id = $this->input->post('material_course');
			$this->Bmc_materials_m->uploader_id = $this->current_user->id;
						
			// Uploading Configurations			
			$config['upload_path'] = './resources/uploads';
			$config['allowed_types'] = 'gif|jpg|png|pdf|ppt|txt|docx|doc';
			$config['max_size']	= '5000';
			//$config['max_width']  = '1024';
			//$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			
			// Check if file is uploaded or not
			if ($this->upload->do_upload('material_link')) {
				$upload_data = $this->upload->data();
				$this->Bmc_materials_m->material_link = $upload_data['file_name'];
				
				// Upload went well, validation is well
				// lets crud the data
				if ($this->Bmc_materials_m->add_material()) {
				
					// If the model inserted the new record
					redirect(site_url());
								
				} else {
				
					// Went wrong
					redirect('bmc/add');
				}
				
			}else {
				$upload_error = $this->upload->display_errors('<p>', '</p>');
				// If the validation didn't go thru, lets display them
				$courses	= $this->Bmc_courses_m->get_all();
				$material_types = $this->Bmc_material_types_m->get_all_types();
				
				foreach ($courses as $course) {
					$_courses[$course->course_id] = $course->course_name;
				}
				
				foreach ($material_types as $material_type) {
					$_material_types[$material_type->material_type_id] = $material_type->material_type_name;
				}
				$this->template
				->title($this->module_details['name'])
				->set('material_types', $_material_types)
				->set('courses', $_courses)
				->set('upload_error', $upload_error)
				->build('add_page');
			}
			
		} else {
		
			// If the validation didn't go thru, lets display them
			$courses	= $this->Bmc_courses_m->get_all();
			$material_types = $this->Bmc_material_types_m->get_all_types();
			
			foreach ($courses as $course) {
				$_courses[$course->course_id] = $course->course_name;
			}
			
			foreach ($material_types as $material_type) {
				$_material_types[$material_type->material_type_id] = $material_type->material_type_name;
			}
			
			$this->template
			->title($this->module_details['name'])
			->set('material_types', $_material_types)
			->set('courses', $_courses)
			->build('add_page');
		}
				
/*
		$courses	= $this->Bmc_courses_m->get_all();
		$materials = $this->Bmc_material_types_m->get_all_types();
		
		$this->template
		->title($this->module_details['name'])
		->set('materials', $materials)
		->set('courses', $courses)
		->set_breadcrumb('Home', site_url())
		->build('add_page');
*/
	}
	
	public function files($id) {
		redirect('http://google.com');
	}
}