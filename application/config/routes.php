<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['users'] = 'users/view_all/page/1';
$route['users/create'] = 'users/create';
$route['users/delete'] = 'users/delete';
$route['users/edit'] = 'users/edit';
$route['users/page/:num'] = 'users/view_all/$1';
$route['users/page/:num/(:any)'] = 'users/view_all/$1/$2';
$route['users/(:any)'] = 'users/view/$1';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
