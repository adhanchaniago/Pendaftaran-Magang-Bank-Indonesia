<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'umum';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'Auth/login';
$route['logout'] = 'Auth/logout';

// ADMIN
$route['admin/user/edit/(:any)'] = 'Admin/edituser/$1';
$route['admin/user/hapus/(:any)'] = 'Admin/hapususer/$1';