<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * This is a sample module for PyroCMS
 *
 * @author 		Mohammed S Fadin
 * @website		http://Sobialab.com
 * @package 	PyroCMS
 * @subpackage 	BMC Module
 */
class Bmc_materials_m extends MY_Model {
	
	var $material_type = '';
	var $material_name = '';
	var $material_link = '';
	var $course_id = '';
	var $uploader_id = '';
	var $viewed = '0';
	
	public function __construct()
	{		
		parent::__construct();
		
		/**
		 * If the sample module's table was named "samples"
		 * then MY_Model would find it automatically. Since
		 * I named it "sample" then we just set the name here.
		 */
		//$this->_table = 'default_bmc_materials';

	}
	
	public function add_material() {
		
		$param = array(
			'material_type' => $this->material_type,
			'material_name' => $this->material_name,
			'material_link' => $this->material_link,
			'course_id'		=> $this->course_id,
			'uploader_id'	=> $this->uploader_id,
			'viewed'		=> $this->viewed
		);
		
		return $this->db->insert('bmc_materials', $param);
	}
	
	public function update_material($id) {
		
		$param = array(
			'material_type' => $this->material_type,
			'material_name' => $this->material_name,
			'course_id'		=> $this->course_id
		);

		$this->db->where('material_id', $id);
		$this->db->set($param);
		return $this->db->update('bmc_materials');
		
	}
	
	public function get_all_materials() {

		$this->db->select('*');
		$this->db->from('bmc_materials');
		$this->db->join('bmc_material_types', 'bmc_materials.material_type = bmc_material_types.material_type_id');
		return $this->db->get()->result();
	}
	
	public function get_with_cid( $course_id ) {
		
		$this->db->where('course_id', $course_id);
		return $this->db->get('bmc_materials')->result();
	}
	
	public function get_with_id( $file_id ) {
		
		// Lets incremenet our number of views for
		// the file requested
		$this->db->where('material_id', $file_id);
		$this->db->set('viewed', 'viewed+1', FALSE);
		$this->db->update('bmc_materials');
		
		$this->db->where('material_id', $file_id);
		return $this->db->get('bmc_materials')->row();
	}
	
	public function remove_material($id) {
		
		return $this->db->delete('bmc_materials', array('material_id' => $id));
		
	}
	
	//create a new item
/*
	public function create($input)
	{
		$to_insert = array(
			'name' => $input['name'],
			'slug' => $this->_check_slug($input['slug'])
		);

		return $this->db->insert('bmc', $to_insert);
	}
*/

	//make sure the slug is valid
/*
	public function _check_slug($slug)
	{
		$slug = strtolower($slug);
		$slug = preg_replace('/\s+/', '-', $slug);

		return $slug;
	}
*/
}
