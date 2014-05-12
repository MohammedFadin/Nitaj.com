<?php
/**
 * This is a sample module for PyroCMS
 *
 * @author 		Mohammed S Fadin
 * @website		http://Sobialab.com
 * @package 	PyroCMS
 * @subpackage 	BMC Module
 * @Desc		CRUD the courses, to add, edit and delete
 */
class Admin_courses extends Admin_Controller {
	
	protected $section = 'courses';
	
	protected $validation_rules = array(
		
		'course_name' => array(
			'field' => 'course_name',
			'label' => 'Course Name',
			'rules' => 'required|max_length[150]|min_length[3]'
		),
		'major_type' => array(
			'field' => 'major_type',
			'label' => 'Course Category',
			'rules' => 'required'
		),
			'slug'  => array(
			'field' => 'slug',
			'label' => 'Course Slug',
			'rules' => 'required|max_length[40]|min_length[3]'
		),
		'description' => array(
			'field' => 'description',
			'label' => 'Course Description',
			'rules' => 'required|max_length[500]|min_length[5]'
		)
	);
	
	public function Admin_courses() {
		
		parent::__construct();
		$this->lang->load('sample');
		$this->load->model('Bmc_courses_m');
		$this->load->model('Bmc_majors_m');
		
		
		$majors = $this->Bmc_majors_m->get_all();
		foreach ( $majors as $major ) {
			$_majors[$major->major_id] = $major->major_name;
		}
		
		$this->template
		->set('major_types', $_majors);
	}
	
	public function index() {
		
		$courses = $this->Bmc_courses_m->get_all();
		
		$this->template
		->title($this->module_details['name'])
		->set('courses', $courses)
		->build('admin/courses/index');
	}
	
	public function create() {
		
		$course = new stdClass;
	
		// Lets check if user has posted anything
		if ($this->input->post()) {
		
			$this->form_validation->set_rules($this->validation_rules);
			
			if ( $this->form_validation->run() ) {
			
				$this->Bmc_courses_m->name = $this->input->post('course_name');
				$this->Bmc_courses_m->major_type = $this->input->post('major_type');
				$this->Bmc_courses_m->slug = $this->input->post('slug');
				$this->Bmc_courses_m->description = $this->input->post('description');
			
				if ($this->Bmc_courses_m->add_course()) {
					redirect('admin/bmc/courses');
				} else {
					redirect('admin/bmc/courses/create');
				}				
			}
		} else {
			
			foreach ($this->validation_rules as $indexs => $values) {
				$course->$values['field'] = set_value($values['field']);
			}
		}
		
		$this->template
		->title($this->module_details['name'])
		->set('course', $course)
		->build('admin/courses/courses_form');
	}
	
	public function edit($id = 0) {
		
		$this->form_validation->set_rules($this->validation_rules);
		
		if ( $this->input->post() ) {
			if ( $this->form_validation->run() ) {
				
				$this->Bmc_courses_m->name = $this->input->post('course_name');
				$this->Bmc_courses_m->major_type = $this->input->post('major_type');
				$this->Bmc_courses_m->slug = $this->input->post('slug');
				$this->Bmc_courses_m->description = $this->input->post('description');
				
				if ($this->Bmc_courses_m->update_course($id)) {
					redirect('admin/bmc/courses');
				} else {
					redirect('admin/bmc/courses/edit' . $id);
				}				
			}			
		} else {
			$course = $this->Bmc_courses_m->get_with_id($id);
		}
			$this->template
			->title($this->module_details['name'])
			->set('course', $course)
			->build('admin/courses/courses_form');
	}
	
	public function delete($id) {
		$ids = ($id) ? array($id) : $this->input->post('action_to');
		
		if ($this->Bmc_courses_m->remove_course($id)){
			redirect('admin/bmc/courses');
		} else {
			redirect('admin/bmc/courses');
		}
	}
}