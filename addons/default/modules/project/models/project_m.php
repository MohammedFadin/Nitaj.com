<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project_m extends MY_Model 
{
    protected $_table = 'project_projects';

    public function Project_m()
    {
        parent::__construct();
    }

    /**
     * [Create a new project + files + team members]
     * @param [bool] TRUE if insertion went well, otherwise FALSE
     */
    public function add_project($params = array()) 
    {
        $insert = array(
                    'title' => $params['project_title'],
                    'description' => $params['project_description'],
                    'logo' => $params['project_logo'],
                    'category_id' => $params['project_category'],
                    'course' => $params['project_course'],
                    'school' => $params['project_school'],
                    'website' => $params['project_website'],
                    'twitter' => $params['project_twitter'],
                    'facebook' => $params['project_facebook'],
                    'linkedin' => $params['project_linkedin'],
                    'slug' => $params['project_title'],
                    'created_by' => $this->current_user->id
        );


        if ( $this->db->insert('project_projects', $insert) )
        {
            $last_insert_project = $this->db->insert_id();

            if ($params['tag']) // If team members exists
            {
                foreach ($params['tag'] as $key => $value) 
                {
                    $insert = array(
                                'project_id' => $last_insert_project,
                                'user_id'    => $key
                    );

                    $this->db->insert('project_teams', $insert);    
                }
            }
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    /**
     * [get_categories get a single or all categories]
     * @param  [type] $params [description]
     * @return [object]        [categories]
     */
    public function get_categories($params = NULL)
    {
        return $this->db->get('project_categories')->result();
    }
}

/* End of file project_m.php */
/* Location: .//Users/mohammedfadin/Dropbox/GitHub/senior-project/addons/default/modules/project/models/project_m.php */