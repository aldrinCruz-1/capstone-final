<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'welcome';
$route['admin'] = 'admin/login/index';
$route['admin/employee'] = 'admin/employee/index';
$route['admin/reports'] = 'admin/reports/index';
$route['admin/timesheet'] = 'admin/timesheet/index';
$route['admin/settings'] = 'admin/settings/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
