<?php defined('BASEPATH') or exit('No direct script access allowed');

class Module_messages extends Module {

	public $version = '1.0';

	public function info()
	{
		return array(
			'name' => array(
				'en' => 'Message Module'
			),
			'description' => array(
				'en' => 'Private Message module for Senior Project '
			),
			'frontend' => TRUE,
			'backend' => TRUE,
			'menu' => 'content', // You can also place modules in their top level menu. For example try: 'menu' => 'Sample',
			'sections' => array(
				'Messages' => array(
					'name' 	=> 'Messages',
					'uri' 	=> 'admin/messages/',
					'shortcuts' => array(
						'send' => array(
							'name' 	=> 'sample:send',
							'uri' 	=> 'admin/messages/send',
							'class' => 'add'
						)
					)
				)
			)
			);			
	}

	public function install()
	{
		$this->dbforge->drop_table('messages_message');
		$this->dbforge->drop_table('messages_users');

		$message = array(
			'id' => array(
					'type' => 'INT',
					'constraint' => 9,
					'unsigned' => TRUE,
					'auto_increment' => TRUE
			),
			'title' => array(
					'type' => 'VARCHAR',
					'constraint' => 100,
					'unique' => TRUE
			),
			'body' => array(
					'type' => 'VARCHAR',
					'constraint' => 500,
					'unique' => FALSE
			)			
		);
		
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_field($message);
		$this->dbforge->create_table('messages_message');

		$user_msgs = array(
			'senderID' => array(
					'type' => 'INT',
					'constraint' => 9,
					'unique' => FALSE
			),
			'recieverID' => array(
					'type' => 'INT',
					'constraint' => 9,
					'unique' => FALSE
			),
			'messageID' => array(
					'type' => 'VARCHAR',
					'constraint' => 500,
					'unique' => TRUE
			)			
		);

		$this->dbforge->add_field($user_msgs);
		$this->dbforge->create_table('messages_users');
		return true;
	}
	
	// public function install()
	// {
	// 	$this->dbforge->drop_table('project_projects');
	// 	$this->dbforge->drop_table('project_categories');
	// 	$this->dbforge->drop_table('project_teams');
	// 	$this->dbforge->drop_table('project_votes');
	// 	$this->dbforge->drop_table('project_files');

	// 	$project = array(
	// 		'id' => array(
	// 				'type' => 'INT',
	// 				'constraint' => 9,
	// 				'unsigned' => TRUE,
	// 				'auto_increment' => TRUE
	// 		),
	// 		'title' => array(
	// 				'type' => 'VARCHAR',
	// 				'constraint' => 100,
	// 				'unique' => TRUE
	// 		),
	// 		'description' => array(
	// 				'type' => 'VARCHAR',
	// 				'constraint' => 400,
	// 				'unique' => FALSE
	// 		),
	// 		'logo' => array(
	// 				'type' => 'VARCHAR',
	// 				'constraint' => 100,
	// 				'unique' => FALSE
	// 		),
	// 		'category_id' => array(
	// 				'type' => 'INT',
	// 				'constraint' => 9,
	// 				'unique' => FALSE
	// 		),
	// 		'course' => array(
	// 				'type' => 'VARCHAR',
	// 				'constraint' => 100,
	// 				'unique' => FALSE
	// 		),
	// 		'school' => array(
	// 				'type' => 'VARCHAR',
	// 				'constraint' => 100,
	// 				'unique' => FALSE
	// 		),
	// 		'website' => array(
	// 				'type' => 'VARCHAR',
	// 				'constraint' => 100,
	// 				'unique' => FALSE
	// 		),			
	// 		'twitter' => array(
	// 				'type' => 'VARCHAR',
	// 				'constraint' => 100,
	// 				'unique' => FALSE
	// 		),
	// 		'facebook' => array(
	// 				'type' => 'VARCHAR',
	// 				'constraint' => 100,
	// 				'unique' => FALSE
	// 		),
	// 		'linkedin' => array(
	// 				'type' => 'VARCHAR',
	// 				'constraint' => 100,
	// 				'unique' => FALSE
	// 		),
	// 		'website' => array(
	// 				'type' => 'VARCHAR',
	// 				'constraint' => 100,
	// 				'unique' => FALSE
	// 		),			
	// 		'slug' => array(
	// 				'type' => 'VARCHAR',
	// 				'constraint' => 100,
	// 				'unique' => TRUE
	// 		),
	// 		'created_by' => array(
	// 				'type' => 'INT',
	// 				'constraint' => 9,
	// 				'unique' => TRUE
	// 		)			
	// 	);
		
	// 	$this->dbforge->add_key('id', TRUE);
	// 	$this->dbforge->add_field($project);
	// 	$this->dbforge->create_table('project_projects');
		
	// 	$category = array(
	// 		'id' => array(
	// 				'type' => 'INT',
	// 				'constraint' => 9,
	// 				'unsigned' => TRUE,
	// 				'auto_increment' => TRUE,
	// 		),
	// 		'name' => array(
	// 				'type' => 'VARCHAR',
	// 				'constraint' => 100,
	// 				'unique' => TRUE
	// 		)
	// 	);
		
	// 	$this->dbforge->add_key('id', TRUE);
	// 	$this->dbforge->add_field($category);
	// 	$this->dbforge->create_table('project_categories');

		
	// 	$project_team = array(
	// 		'project_id' => array(
	// 				'type' => 'INT',
	// 				'constraint' => 9,
	// 				'unsigned' => TRUE
	// 		),
	// 		'user_id' => array(
	// 				'type' => 'INT',
	// 				'constraint' => 9,
	// 				'unique' => TRUE
	// 		)
	// 	);
		
	// 	$this->dbforge->add_key('project_id', TRUE);
	// 	$this->dbforge->add_key('user_id', TRUE);
	// 	$this->dbforge->add_field($project_team);
	// 	$this->dbforge->create_table('project_teams');

	// 	$vote = array(
	// 		'vote' => array(
	// 					'type' => 'INT',
	// 					'constraint' => 9
	// 		),
	// 		'project_id' => array(
	// 					'type' => 'INT',
	// 					'constraint' => 9,
	// 					'unsigned' => TRUE
	// 		),
	// 		'user_id' => array(
	// 					'type' => 'INT',
	// 					'constraint' => 9,
	// 					'unsigned' => TRUE
	// 		)
	// 	);
		
	// 	$this->dbforge->add_key('project_id', TRUE);
	// 	$this->dbforge->add_key('user_id', TRUE);
	// 	$this->dbforge->add_field($vote);
	// 	$this->dbforge->create_table('project_votes');

	// 	$files = array(
	// 		'file' => array(
	// 					'type' => 'VARCHAR',
	// 					'constraint' => 100,
	// 		),
	// 		'project_id' => array(
	// 					'type' => 'INT',
	// 					'constraint' => 9,
	// 					'unsigned' => TRUE
	// 		)
	// 	);		

	// 	$this->dbforge->add_field($files);
	// 	$this->dbforge->create_table('project_files');
		
	// 	return true;
	// }

	public function uninstall()
	{
		$this->dbforge->drop_table('messages_message');
		$this->dbforge->drop_table('messages_users');

		$this->db->delete('settings', array('module' => 'messages'));
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
