<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages extends Public_Controller {

    public function __construct() 
    {
        parent::__construct();
    }

    /**
     * [index description]
     * @return [type] [description]
     */
    public function index()
    {
        $this->template
        ->title("Messages")        
        ->build('inbox_view.php');
    }

    /**
     * [view description]
     * @param  string $value [description]
     * @return [type]        [description]
     */
    public function view($value='')
    {
        # code...
    }

    /**
     * [search description]
     * @param  string $value [description]
     * @return [type]        [description]
     */
    public function search($value='')
    {
        # code...
    }
}

/* End of file messages.php */
/* Location: .//Users/mohammedfadin/Dropbox/GitHub/senior-project/addons/default/modules/messages/controllers/messages.php */