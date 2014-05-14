<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 * @author  Mohammed Fadin
 * @package Addons\Defaults\Modules\Project\Controllers
 */
class Project extends Public_Controller 
{
    protected $validation_rules = array(
        array(
             'field'   => 'project_title', 
             'label'   => 'Project Title', 
             'rules'   => 'trim|required|min_length[5]|max_length[120]|xss_clean'
          ),
        array(
             'field'   => 'project_category', 
             'label'   => 'Project Category', 
             'rules'   => 'trim|required|min_length[1]|max_length[10]|xss_clean'
          ),   
        array(
             'field'   => 'project_school', 
             'label'   => 'Project School', 
             'rules'   => 'trim|required|min_length[3]|max_length[120]|xss_clean'
          ),
        array(
             'field'   => 'project_course', 
             'label'   => 'Project Course', 
             'rules'   => 'trim|required|min_length[3]|max_length[120]|xss_clean'
          ),
        array(
             'field'   => 'project_website', 
             'label'   => 'Project Website', 
             'rules'   => 'trim|min_length[3]|max_length[120]|xss_clean'
          ),
        array(
             'field'   => 'project_team', 
             'label'   => 'Project Team', 
             'rules'   => 'trim|min_length[3]|max_length[120]|xss_clean'
          ),
        array(
             'field'   => 'project_twitter', 
             'label'   => 'Project Twitter URL', 
             'rules'   => 'trim|min_length[3]|max_length[120]|xss_clean'
          ),
        array(
             'field'   => 'project_linkedin', 
             'label'   => 'Project Linkedin URL', 
             'rules'   => 'trim|min_length[3]|max_length[120]|xss_clean'
          ),
        array(
             'field'   => 'project_facebook', 
             'label'   => 'Project Facebook URL', 
             'rules'   => 'trim|min_length[3]|max_length[120]|xss_clean'
          ),
        array(
             'field'   => 'project_description', 
             'label'   => 'Project Description', 
             'rules'   => 'trim|required|min_length[5]|xss_clean'
          )                                                                                                                                                          
    );

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('project_m');
        $this->load->model('users/user_m');
        //$all_users = json_encode($this->user_m->get_all());
        //var_dump(json_decode($all_users[1][1]['username']));

            // $temp = $this->user_m->get_many_by_name('fadin');
            // $result = array();
            // foreach ($temp as $key) {
            //     $result[$key->id] = $key->first_name . ' ' . $key->last_name;
            // }
            // var_dump($result);
    }

    public function index() 
    {

    }

    /**
     * [create description]
     * @return [type] [description]
     */
    public function create() 
    {
        if ( !$this->current_user )
        {
            redirect();
        }        
        $this->form_validation->set_rules($this->validation_rules);

        $params = array();
        // Everything seems fine?
        if ( $this->input->post() )
        {
            // Check if project logo uploaded
            if ( $_FILES['project_logo']['name'] == '')
            {
                $this->form_validation->set_rules('project_logo', 'project_logo', 'trim|required');
            }            
            if ( $this->form_validation->run() == TRUE )
            {
                foreach ($this->input->post() as $key => $value) 
                {
                    $params[$key] = $value;
                }

                $upload_config['upload_path'] = './resources/uploads';
                $upload_config['allowed_types'] = 'gif|jpg|png|jpeg|doc|docx|pdf';
                $upload_config['max_size'] = '90000';

                $this->load->library('upload', $upload_config);

                // Check if upload is done right            
                if ( ! $this->upload->do_upload('project_logo'))
                {
                    $error = array('error' => $this->upload->display_errors());
                }
                else
                {
                    $_project_logo = $this->upload->data();
                    $params['project_logo'] = $_project_logo['file_name'];

                    if ( $_FILES['project_files'] )
                    {
                        // var_dump($_FILES['project_logo']);
                        $upload_config2['upload_path'] = './resources/uploads/projects_files';
                        $upload_config2['allowed_types'] = 'gif|jpg|png|jpeg|doc|docx|pdf';
                        $upload_config2['max_size'] = '90000';
                        $this->load->library('upload', $upload_config2);

                        // Check if upload is done right            
                        if ( ! $this->upload->do_upload('project_files'))
                        {
                            $error = array('error' => $this->upload->display_errors());
                        } 
                        else
                        {
                            $_project_files = $this->upload->data();
                            $params['project_files'] =  $_project_files['file_name']; 
                        }

                    }
                    // Upload went well, validation went well
                    // Lets crued the project data
                    if ( ! $this->project_m->add_project($params)) 
                    {
                        $this->db->_error_message(); //change later
                    }
                    else 
                    {
                        redirect(site_url());
                    }
                }                 
            }
        }

        $categories = $this->project_m->get_categories();

        foreach ($categories as $category) 
        {
            $_categories[$category->id] = $category->name;
        }

        $this->template
        ->title(lang('project_header'))
        ->append_css('bootstrap-wysihtml5.css')
        ->append_css('wysiwyg-color.css')     
        ->append_css('tagedit/jquery.tagedit.css')   
        ->append_css('tagedit/ui-lightness/jquery-ui-1.9.2.custom.min.css')                           
        ->append_js('jquery-ui-1.9.2.custom.min.js')        
        ->append_js('endless/endless_wizard.js')
        ->append_js('parsley.min.js')
        ->append_js('wysihtml5-0.3.0.min.js')
        ->append_js('uncompressed/bootstrap-wysihtml5.js')
        ->append_js('tagedit/jquery.tagedit.js')
        ->append_js('tagedit/jquery.autoGrowInput.js')
        ->set('categories', $_categories)
        ->build('create_view');
    }

    public function view($id)
    {
        if ( !$this->current_user )
        {
            redirect();
        }

        // Let's fetch project based on id
        $project = $this->project_m->get($id);
        
        // Get the teams ids
        $users_ids = $this->db
            ->where('project_id', $id)->get('project_teams')->result_array();
        // Lets fetch the teams profiles

        $team_profiles = array();

        foreach ($users_ids as $key => $value) 
        {
            $team_profiles[$key] = $this->db
            ->where('user_id', $value['user_id'])->get('profiles')->row_array();
        }  

        // $this->load->library('comments/comments', array(
        //     'entry_id' => $id,
        //     'entry_title' => 'Hello',
        //     'module' => 'project',
        //     'singular' => 'bmc:major',
        //     'plural' => 'bmc:majors'
        // ));

        $this->template
        ->set('project', $project)
        ->set('project_team', $team_profiles)
        ->build('project_view');
    }

    public function browse_projects()
    {
        if ( !$this->current_user )
        {
            redirect();
        }
        $category = array();
        foreach ($this->project_m->get_categories() as $key => $value)
        {
            $category[$key]['id'] = $value->id;
            $category[$key]['name'] = $value->name;
        }

        $projects = $this->project_m->get_all();

        $this->template
        ->title('Discover Projects')
        ->set('projects', $projects)      
        ->set('categories', $category)
        ->build('browse_projects_view');
    }


    /**
     * Ajax requests get users(members) names if exists
     * @return array
     */
    public function auto_complete_project_team()
    {
        $requested_member = $this->input->get('term');
        
        if ( $requested_member ) 
        {
            $result = array();

            $temp = $this->user_m->get_many_by_name($requested_member);

            foreach ($temp as $key) 
            {
                $autocompletiondata[$key->id] = $key->username;
            }

            foreach ($autocompletiondata as $key => $value) 
            {
                if ( strlen($requested_member) == 0 || strpos(strtolower($value), strtolower($requested_member)) !== false ) 
                {
                    $result[] = '{"id":'.$key.',"label":"'.$value.'","value":"'.$value.'"}';
                }
            }
            echo "[".implode(',', $result)."]";
        }
    }
}

/* End of file project.php */
/* Location: .//Users/mohammedfadin/Dropbox/GitHub/senior-project/addons/default/modules/project/controllers/project.php */