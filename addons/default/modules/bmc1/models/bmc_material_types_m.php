<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Bmc_material_types_m extends MY_Model {
	
	var $type_name = '';
	
	public function Bmc_material_types_m() {
		parent::__construct();
		
		// We include our asset files
		$this->template
		->append_css('module::admin.css')
		->append_js('module::admin.js');
		
	}
	
	public function get_all() {
		
		// Get all types available and number
		// Of materials in each type
		return $this->db->get('bmc_material_types')->result();		
		
	}
	
	public function get_all_types() {
		
		// Lets fetch all materials types
		return $this->db->get('bmc_material_types')->result();
	}
	
	public function get_with_id($id) {
		
		// Lets fetch specific material type
		$this->db->where('material_type_id', $id);
		return $this->db->get('bmc_material_types')->row();
	}
	
	public function add_type() {
		
		// Lets insert our new record
		$data = array('material_type_name' => $this->type_name);
		return $this->db->insert('bmc_material_types', $data);
	}
	
	public function remove_type($id) {
		
		// lets remove the type from our record
		return $this->db->delete('bmc_material_types', array('material_type_id' => $id));
	}
	
	public function update_type($id) {
		
		$this->db->where('material_type_id', $id);
		$this->db->set('material_type_name', $this->type_name);
		return $this->db->update('bmc_material_types');
	}
}