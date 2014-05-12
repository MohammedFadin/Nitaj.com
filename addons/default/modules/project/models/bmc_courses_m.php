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
class Bmc_courses_m extends MY_Model {
	
	var $name = '';
	var $slug = '';
	var $major_type = '';
	var $description = '';

	public function Bmc_courses_m() {
		parent::__construct();
		
		// We include our asset files
		$this->template
		->append_css('module::admin.css')
		->append_js('module::admin.js');

	}
	
	// Get all available courses
	public function get_all() {
		return $this->db->get('bmc_courses')->result();
	}
	
	public function get_with_mid( $id ) {
		$this->db->where('major_type', $id);
		return $this->db->get('bmc_courses')->result();
	}
	
	public function get_with_id( $id ) {
		$this->db->where('course_id', $id);
		return $this->db->get('bmc_courses')->row();
	}
	
	public function get( $slug ) {
		$this->db->where('slug', $slug);
		return $this->db->get('bmc_courses')->row();
	}
	
	public function add_course() {
		$data = array(
			'course_name' => $this->name,
			'slug' => $this->slug,
			'major_type' => $this->major_type,
			'description' => $this->description
		);
		
		return $this->db->insert('bmc_courses', $data);
	}
	
	public function remove_course($id) {
		return $this->db->delete('bmc_courses', array('course_id' => $id));
	}
	
	public function update_course($id) {
		$data = array(
			'course_name' => $this->name,
			'slug' => $this->slug,
			'major_type' => $this->major_type,
			'description' => $this->description		
		);
		
		$this->db->where('course_id', $id);
		$this->db->set($data);
		
		return $this->db->update('bmc_courses', $data);
	}
}