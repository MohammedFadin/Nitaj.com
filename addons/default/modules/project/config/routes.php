<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
| 	www.your-site.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://www.codeigniter.com/user_guide/general/routing.html
*/

// front-end
$route['bmc(/:num)?']			= 'bmc/index$1';
$route['project/create/(:any)?']        = 'project/create';
$route['bmc/(:num)/(:any)']		= 'bmc/download/$3';
$route['resources/uploads/(:any)']	= 'google.com';

// test
$route['bmc/test(/:num)?']			= 'test$1';

// Admin Sub Pages
// Pattern for the original map code: controller/method/paramw_with_$
$route['bmc/admin/material_types(/:any)?'] = 'admin_material_types$1';
$route['bmc/admin/courses(/:any)?'] = 'admin_courses$1';
$route['bmc/admin/majors(/:any)?'] = 'admin_majors$1';