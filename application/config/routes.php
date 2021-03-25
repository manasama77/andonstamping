<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller']       = 'MainController';
$route['404_override']             = '';
$route['translate_uri_dashes']     = FALSE;
$route['update_target/(:any)']    = 'MainController/update_target/$1';
$route['get_latest_target_stroke'] = 'MainController/get_latest_target_stroke';
