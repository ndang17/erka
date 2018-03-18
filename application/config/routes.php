<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//$route['default_controller'] = 'web/c_home';
$route['default_controller'] = 'c_home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



// Admin
$route['admin'] = 'admin/a_login';
$route['admin/forgot-password'] = 'admin/a_login/forgot_password';

$route['admin/genratePassword'] = 'admin/a_login/genratePassword';
$route['admin/auth'] = 'admin/a_login/auth';
$route['admin/sendmail'] = 'admin/a_login/sendmail';
$route['admin/logOut'] = 'admin/a_login/logOut';

$route['admin/users'] = 'admin/a_users';
$route['admin/__crudUsers'] = 'admin/a_users/crudUsers';

$route['admin/home'] = 'admin/a_home';
$route['admin/home/add-new-slider'] = 'admin/a_home/add_new_slider';

$route['admin/about-us'] = 'admin/a_about';
$route['admin/__crudAboutUs'] = 'admin/a_about/crudAboutUs';

$route['admin/services'] = 'admin/a_services';
$route['admin/services/add-new-services'] = 'admin/a_services/add_new_services';


// WEB
$route['about-us'] = 'web/c_web/about_us';
$route['services'] = 'web/c_web/services';
$route['projects'] = 'web/c_web/projects';
$route['teams'] = 'web/c_web/teams';
$route['gallery'] = 'web/c_web/gallery';


$route['action/services/__addNewServices'] = 'admin/a_services/addNewServices';
$route['action/services/__changeOrder'] = 'admin/a_services/changeOrder';
$route['action/do-upload'] = 'admin/a_home/do_upload';
