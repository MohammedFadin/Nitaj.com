<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Table List Field Type
 *
 * @package		Addons\Field Types
 * @author		Mohammed Fadin 
 */
class Field_table_list
{
	public $field_type_slug    = 'table_list';
	public $db_col_type        = 'text';
	public $version            = '1.0';
	public $author             = array('name'=>'Mohammed S Fadin', 'url'=>'http://github.com/');

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
			$body = '<tbody><tr><td class="text-center"><input type="text" id="'.$data['form_slug'].'" name="'.$data['form_slug'].'[0]"/></td><td class="text-center">
									<select class="form-control" name="skills_list[1]">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select></td><td class="text-center"><a class="btn btn-sm btn-success add_table_list"><i class="fa fa-plus"></i> Add</a><a class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i> Delete</a></td></tr></tbody>';
			return '<table class="table table-bordered table-condensed table-hover table-striped table-vertical-center" id="table_list"><thead><tr><th class="text-center">Skill Name</th><th class="text-center">Experience</th><th></th></tr></thead>'.$body.'</table>';
		}
		else {
			$str = '<table class="table table-bordered table-condensed table-hover table-striped table-vertical-center" id="table_list"><thead><tr><th class="text-center">Skill Name</th><th class="text-center">Experience</th><th></th></tr></thead><tbody>';
			$inc = 0;
			foreach ($output as $key => $value)
			{	
				if ( ! empty($value))
				{
					$key = $key * 2; // even then increment by 1
					// $str .= '<label class="col-lg-2 control-label">Skill Item '.$key.'</label><div class="col-md-10 input-group"><input type="text" id="'.$data['form_slug'].'" name="'.$data['form_slug'].'['.$key.']" class="form-control" placeholder="List item content..." value="'.$value.'"/><span class="input-group-btn"><button class="btn btn-default add" type="button">+</button></span><span class="input-group-btn"><button class="btn btn-default remove" type="button">-</button></span></div>';
					$str .= '<tr><td class="text-center"><input type="text" id="'.$data['form_slug'].'" name="'.$data['form_slug'].'['.$key.']" value="'.$value.'"/></td><td class="text-center">
									<select class="form-control" name="skills_list['.(++$key).']">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select></td><td class="text-center"><a class="btn btn-sm btn-success add_table_list"><i class="fa fa-plus"></i> Add</a><a class="btn btn-sm btn-danger"><i class="fa fa-trash-o"></i> Delete</a></td></tr>';
				}
			}
			return $str.'</tbody></table>';
		}
	}

	public function event($field)
	{
		$this->CI->type->add_js('table_list', 'table_list.js');
		$this->CI->type->add_css('table_list', 'table_list.css');
	}

	public function pre_save($input)
	{
		// Check for empty list
		// Don't serialze, use a flag for when we output later
		
		// Lets remove the drop values
		//var_dump($input);
		$new_input = array();
		foreach ($input as $key => $value) {
			// If $key is even then go to if
			if ($key%2 == 0) {
				$new_input[$key] = $value;
				$new_input['val'][$key] = $input[$key+1];
			}
		}
		//var_dump($new_input['val']);
		return empty($new_input[0]) ? 0 : serialize($new_input);
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
