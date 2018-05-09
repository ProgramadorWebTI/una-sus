<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Panel';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['funcionario/edit/(:num)'] = 'funcionario/edit/$1';
$route['funcionario/delete/(:num)'] = 'funcionario/delete/$1';
$route['equipamento/view/(:num)'] = 'equipamento/view/$1';

$route['cargo/edit/(:num)'] = 'cargo/edit/$1';
$route['cargo/delete/(:num)'] = 'cargo/delete/$1';