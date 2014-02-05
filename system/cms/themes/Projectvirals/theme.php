<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @date	4 Feb 2014
 * @author	Mohammed Fadin
 */

class Theme_Projectvirals extends Theme
{
  public $version		= '1.0';

  public $name			= 'Projectvirals';
  public $author		= 'Mohammed Fadin';
  public $author_website	= 'http://Sobialab.com';
  public $description	= 'Our Senior Project Theme.';
  public $website		= 'http://Sobialab.com';
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
