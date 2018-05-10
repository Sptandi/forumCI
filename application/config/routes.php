<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'auth/login';
$route['login'] = 'Auth/login'; // forumCI/login
$route['register'] = 'Auth/register';

$route['home'] = 'User/index';
$route['post'] = 'User/post';
$route['setting'] = 'User/showSetting';

$route['author/(:any)'] = 'User/author/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
