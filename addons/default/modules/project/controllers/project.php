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
             'field'   => 'project_logo', 
             'label'   => 'Project Logo', 
             'rules'   => 'trim|min_length[5]|max_length[120]|xss_clean'
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
             'rules'   => 'trim|required|min_length[5]|max_length[120]|xss_clean'
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
        $this->form_validation->set_rules($this->validation_rules);

        $params = array();

        // Everything seems fine?
        if ( $this->input->post() && $this->form_validation->run() == TRUE)
        {
            foreach ($this->input->post() as $key => $value) 
            {
                $params[$key] = $value;
            }
            $upload_config['upload_path'] = './resources/uploads';
            $upload_config['allowed_types'] = 'gif|jpg|png|jpeg';
            $upload_config['max_size'] = '90000';

            $this->load->library('upload', $upload_config);

            // Check if upload is done right            
            if ( ! $this->upload->do_upload('project_logo'))
            {
                $error = array('error' => $this->upload->display_errors());
            }
            else
            {
                $params['project_logo'] = $this->upload->data()['file_name'];

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

        $categories = $this->project_m->get_categories();

        foreach ($categories as $category) 
        {
            $_categories[$category->id] = $category->name;
        }

        // foreach ($this->input->post('tag') as $id => $team_member)
        // {
        //     echo $id;
        // }
        // 
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