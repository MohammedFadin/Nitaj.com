<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project_m extends MY_Model 
{
    protected $_table = 'project_projects';
    
    public function Project_m()
    {
        parent::__construct();
    }

    /**
     * [add_project description]
     * @param [type] $params [description]
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
        return $this->db->insert('project_projects', $insert);
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