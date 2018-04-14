<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'auth/login';
$route['login'] = 'Auth/login'; // forumCI/login
$route['register'] = 'Auth/register';

$route['home'] = 'User/index';
$route['setting'] = 'User/showSetting';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
