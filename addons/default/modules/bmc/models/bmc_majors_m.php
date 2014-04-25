<?php

class Bmc_majors_m extends MY_Model {
	
	var $name = '';
	var $slug = '';	
		
	public function Bmc_majors_m() {
		
		parent::__construct();
		
		// We include our asset files
		$this->template
		->append_css('module::admin.css')
		->append_js('module::admin.js');
		
	}
	
	public function get_all() {
		return $this->db->get('bmc_majors')->result();
	}
	
	public function get( $slug ) {
		$this->db->where('slug', $slug);
		return $this->db->get('bmc_majors')->row();
	}
	
	public function get_with_id( $id ) {
		$this->db->where('major_id', $id);
		return $this->db->get('bmc_majors')->row();
	}
		
	public function add_major() {
		$data = array(
			'major_name' => $this->name,
			'slug'	=> $this->slug
		);
		
		return $this->db->insert('bmc_majors', $data);
	}
	
	public function delete($id) {
		return $this->db->delete('bmc_majors', array('major_id' => $id));
	}
	
	public function update_major( $id ) {
		$data = array(
			'major_name' => $this->name,
			'slug' => $this->slug
		);
		$this->db->where('major_id', $id);
		$this->db->set($data);
		return $this->db->update('bmc_majors', $data);
		
	}
	
}