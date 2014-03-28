<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * List Field Type
 *
 * @package		Addons\Field Types
 * @author		Mohammed Fadin & James Doyol
 * @link		http://github.com/james2doyle/pyro-list-field (Origila)
 */
class Field_list
{
	public $field_type_slug    = 'list';
	public $db_col_type        = 'text';
	public $version            = '1.2.0';
	public $author             = array('name'=>'Mohammed S Fadin', 'url'=>'http://github.com/james2doyle/pyro-list-field');

	// --------------------------------------------------------------------------

	public function __construct()
	{
		$this->CI =& get_instance();
	}

	// --------------------------------------------------------------------------

	/**
	 * Output form input
	 *
	 * @param	array
	 * @param	array
	 * @return	string
	 */
	public function form_output($data)
	{
		$output = empty($data['value'])? NULL: unserialize($data['value']);
		if (is_null($data['value']) or strlen($output[0]) == 0)
		{
			return '<div class="col-md-10 input-group"><input type="text" id="'.$data['form_slug'].'" name="'.$data['form_slug'].'[0]" class="form-control" placeholder="List Your Skills"><span class="input-group-btn"><button class="btn btn-default" type="button">+</button></span></div>';
		}
		else {
			$str = '';
			foreach ($output as $key => $value)
			{
				if ( ! empty($value))
				{
					$str .= '<label class="col-lg-2 control-label">Skill Item '.$key.'</label><div class="col-md-10 input-group"><input type="text" id="'.$data['form_slug'].'" name="'.$data['form_slug'].'['.$key.']" class="form-control" placeholder="List item content..." value="'.$value.'"/><span class="input-group-btn"><button class="btn btn-default add" type="button">+</button></span><span class="input-group-btn"><button class="btn btn-default remove" type="button">-</button></span></div>';
				}
			}
			return $str.'';
		}
	}

	public function event($field)
	{
		$this->CI->type->add_js('list', 'list.js');
		$this->CI->type->add_css('list', 'list.css');
	}

	public function pre_save($input)
	{
		// Check for empty list
		// Don't serialze, use a flag for when we output later
		return empty($input[0]) ? 0 : serialize($input);
	}

	public function pre_output($input, $data)
	{

		// Check for empty list
		if ( ! $input)
		{
			return false;
		}

		$input = unserialize($input);
		
		if ($input) {
			$output = array();
			foreach ($input as $key => $value)
			{
				$output[] = array(
					'key'   => $key,
					'value' => $value,
				);
			}
			return $output;
		}
	}
}
