<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Project extends Public_Controller 
{
    public function Project() 
    {
        parent::__construct();
        $this->load->model('project_m');
    }

    public function index() 
    {

    }

    /*
        Create a project function
        won't be triggered unless a user is
        in a Student group.
     */
    public function create() 
    {
        $validate_array = array(
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

        $this->form_validation->set_rules($validate_array);

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

        $this->template
        ->title(lang('project_header'))
        ->append_css('bootstrap-wysihtml5.css')
        ->append_js('endless/endless_wizard.js')
        ->append_js('parsley.min.js')
        ->append_js('wysihtml5-0.3.0.min.js')
        ->append_js('uncompressed/bootstrap-wysihtml5.js')
        ->set('categories', $_categories)
        // ->append_metadata($this->load->view(site_url().'/themes/pyrocms/fragments/wysiwyg.php', compact('items'), TRUE))
        ->build('create_view');
    }

}

/* End of file project.php */
/* Location: .//Users/mohammedfadin/Dropbox/GitHub/senior-project/addons/default/modules/project/controllers/project.php */