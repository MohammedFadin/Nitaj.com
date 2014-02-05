<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @date	5 Feb 2014
 * @author	Mohammed Fadin
 */

class Theme_Projectviral extends Theme
{
  public $version		= '1.0';

  public $name			= 'ProjectViral';
  public $author		= 'Senior_Project';
  public $author_website	= 'http://sobialab.com';
  public $description	= 'Main theme for Senior Project ProjectViral';
  public $website		= 'http://sobialab.com';
  public $options 		= array(
		'show_breadcrumbs' 	=> array(
			'title'         => 'Do you want to show breadcrumbs?',
			'description'   => 'If selected it shows a string of breadcrumbs at the top of the page.',
			'default'       => 'yes',
			'type'          => 'radio',
			'options'       => 'yes=Yes|no=No',
			'is_required'   => TRUE
		),
	);
}
/* End of file theme.php */
/* ./Bootstrap/theme.php */
