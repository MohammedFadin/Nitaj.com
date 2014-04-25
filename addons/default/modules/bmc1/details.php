<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_bmc extends Module {

	public $version = '2.1';

	public function info()
	{
		return array(
			'name' => array(
				'en' => 'BMC'
			),
			'description' => array(
				'en' => 'BMC Majors Courses Center Module.'
			),
			'frontend' => TRUE,
			'backend' => TRUE,
			'menu' => 'content', // You can also place modules in their top level menu. For example try: 'menu' => 'Sample',
			'sections' => array(
				'materials' => array(
					'name' 	=> 'Materials', 
					'uri' 	=> 'admin/bmc/',
					'shortcuts' => array(
						'create' => array(
							'name' 	=> 'sample:create_material',
							'uri' 	=> 'admin/bmc/create',
							'class' => 'add'
						)
					)
				),
				'types' => array(
					'name' 	=> 'Material Types', 
					'uri' 	=> 'admin/bmc/material_types',
					'shortcuts' => array(
						'create' => array(
							'name' 	=> 'sample:material_types',
							'uri' 	=> 'admin/bmc/material_types/create',
							'class' => 'add'
						)
					)
				),
				'courses' => array(
					'name' 	=> 'Courses', 
					'uri' 	=> 'admin/bmc/courses',
						'shortcuts' => array(
							'create' => array(
								'name' 	=> 'sample:courses',
								'uri' 	=> 'admin/bmc/courses/create',
								'class' => 'add'
							)
						)
				),
				'majors' => array(
					'name' 	=> 'Majors', 
					'uri' 	=> 'admin/bmc/majors',
						'shortcuts' => array(
							'create' => array(
								'name' 	=> 'sample:create_major',
								'uri' 	=> 'admin/bmc/majors/create',
								'class' => 'add'
							)
						)
				)
				
			)
		);
	}
	
	public function install()
	{
		$this->dbforge->drop_table('bmc_majors');
		$this->dbforge->drop_table('bmc_courses');
		$this->dbforge->drop_table('bmc_material_types');
		$this->dbforge->drop_table('bmc_materials');
		
		$majors = array(
			'major_id' => array(
					'type' => 'INT',
					'constraint' => 9,
					'auto_increment' => TRUE
				),
			'major_name' => array(
					'type' => 'VARCHAR',
					'constraint' => 100,
					'unique' => TRUE
			),
			'slug' => array(
					'type' => 'VARCHAR',
					'constraint' => 100,
					'unique' => TRUE
			)
		);
		
		$this->dbforge->add_key('major_id', true);
		$this->dbforge->add_field($majors);
		$this->dbforge->create_table('bmc_majors');
		
		$courses = array(
			'course_id' => array(
					'type' => 'INT',
					'constraint' => 9,
					'unsigned' => TRUE,
					'auto_increment' => TRUE,
					'primary' => TRUE
			),
			'course_name' => array(
					'type' => 'VARCHAR',
					'constraint' => 100,
					'unique' => TRUE
			),
			'major_type' => array(
					'type' => 'INT',
					'constraint' => 9
			)
		);
		
		$this->dbforge->add_key('course_id', true);
		$this->dbforge->add_field($courses);
		$this->dbforge->create_table('bmc_courses');

		
		$material_types = array(
			'material_type_id' => array(
					'type' => 'INT',
					'constraint' => 9,
					'unsigned' => TRUE,
					'auto_increment' => TRUE,
					'primary' => TRUE
			),
			'material_type_name' => array(
					'type' => 'VARCHAR',
					'constraint' => 100,
					'unique' => TRUE
			)
		);
		
		$this->dbforge->add_key('material_type_id', true);
		$this->dbforge->add_field($material_types);
		$this->dbforge->create_table('bmc_material_types');

		$materials = array(
			'material_id' => array(
					'type' => 'INT',
					'constraint' => 9,
					'unsigned' => TRUE,
					'auto_increment' => TRUE,
					'primary' => TRUE
			),
			'material_type' => array(
					'type' => 'INT',
					'constraint' => 9,
					'unsigned' => TRUE
			),
			'material_name' => array(
					'type' => 'VARCHAR',
					'constraint' => 100
			),
			'material_link' => array(
					'type' => 'VARCHAR',
					'constraint' => 100
			)
		);
		
		$this->dbforge->add_key('material_id', true);
		$this->dbforge->add_field($materials);
		$this->dbforge->create_table('bmc_materials');
		
		return true;
		
		//Give the major_name field uniquness
		//$this->dbforge->add_key('major_name');
		
		
		//$table_query = 'CREATE TABLE IF NOT EXISTS' . $this->db->db_prefix('bmc_majors');
		
/*
		$this->dbforge->add_field($majors);
		if ($this->dbforge->create_table('bmc_majors'))
		{
			return TRUE;
		}
*/
		
	}

/*
	public function install()
	{
		$this->dbforge->drop_table('bmc');
		$this->db->delete('settings', array('module' => 'bmc'));

		$sample = array(
                        'id' => array(
									  'type' => 'INT',
									  'constraint' => '11',
									  'auto_increment' => TRUE
									  ),
						'name' => array(
										'type' => 'VARCHAR',
										'constraint' => '100'
										),
						'slug' => array(
										'type' => 'VARCHAR',
										'constraint' => '100'
										)
						);

		$sample_setting = array(
			'slug' => 'bmc_setting',
			'title' => 'BMC Setting',
			'description' => 'A Yes or No option for the BMC module',
			'`default`' => '1',
			'`value`' => '1',
			'type' => 'select',
			'`options`' => '1=Yes|0=No',
			'is_required' => 1,
			'is_gui' => 1,
			'module' => 'bmc'
		);

		$this->dbforge->add_field($sample);
		$this->dbforge->add_key('id', TRUE);

		if($this->dbforge->create_table('bmc') AND
		   $this->db->insert('settings', $sample_setting) AND
		   is_dir($this->upload_path.'bmc') OR @mkdir($this->upload_path.'bmc',0777,TRUE))
		{
			return TRUE;
		}
	}
*/

	public function uninstall()
	{
		$this->dbforge->drop_table('bmc_majors');
		$this->dbforge->drop_table('bmc_courses');
		$this->dbforge->drop_table('bmc_material_types');
		$this->dbforge->drop_table('bmc_materials');
		$this->db->delete('settings', array('module' => 'bmc'));
		{
			return TRUE;
		}
	}


	public function upgrade($old_version)
	{
		// Your Upgrade Logic
		return TRUE;
	}

	public function help()
	{
		// Return a string containing help info
		// You could include a file and return it here.
		return "No documentation has been added for this module.<br />Contact the module developer for assistance.";
	}
}
/* End of file details.php */
