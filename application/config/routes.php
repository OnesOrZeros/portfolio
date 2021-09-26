<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['home'] = 'Home/index';

$route['onepage'] = 'Home/onepage';

$route['history'] = 'Home/history';

$route['portfolio'] = 'Home/portmasonry';

$route['contact'] = 'Home/contact';

$route['success'] = 'Home/success';



$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
